<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Core\Translate as Data;

class TagnullTranslateJson extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'tagnull:translatejson {--insert=} {--update=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates json language files.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        $this->config = new \stdClass;
        $this->config->table = (new Data)->getTable();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $insert = $this->option('insert');
        $update = $this->option('update');
        if($insert || $update) {
            $this->insertUpdate();
        } else {
            $this->boot();
        }
    }

    private function boot() {
        $languagesAvailable = $this->getLanguagesAvailable();
        $translation = $this->getLanguageTexts($languagesAvailable);
        
        foreach($translation as $language=>$content) {
            $this->organizeLanguageFile($language, $content);
        }
        // \DB::select('show columns from '.(new Data)->getTable()); //Data::all();
    }
    
    /**
     * Gets all languages for translations
     * 
     * @return array 
     */
    private function getLanguagesAvailable() :?array 
    {
        $languages = \Schema::getColumnListing($this->config->table);
        $language = [];
        foreach($languages as $lang) {
            if($lang != "string"){
                $language[] = $lang;
            }
        }
        return $language;
    }
    
    /**
     * Gets all texts of translations
     * 
     * @return array 
     */
    private function getLanguageTexts($languages) :?array
    {
        $files = [];
        foreach($languages as $lang) {
            $items = \DB::table($this->config->table)
                ->select('string', "{$lang} as value")
                ->orderBy('string')
                ->get();
            foreach($items as $item) {
                $lang = str_replace("_", "-", $lang);
                array_set($files, "{$lang}.{$item->string}", ($item->value)); // addslashes
            }
        }
        return $files;
    }
    
    
    private function organizeLanguageFile($language, $contents) {
        $path = base_path("resources/lang/{$language}.json");

        //$this->raw($path);
        //$this->raw(json_encode(array_dot($contents)));
        
        if(file_exists($path) && $this->deleteDir($path)){
            echo("Deleting file {$path}\n");
        }
        
        echo("Creating file {$path}\n");
        $this->createLanguageFile($path, json_encode(array_dot($contents)));
    }
    
    private function deleteDir($filePath) {
        return \File::delete($filePath);
    }
    
    private function createLanguageFile($file, $content = ''){
        /*if (mkdir($path, 0777, true)) {
            echo("Creating file {$path}\n");
                
            $this->createLanguageFile($path, $contents);
        } else {
            die("Failed to create {$path}...");
        }*/

        $myfile = fopen($file, "w") or die("Unable to open file!");
        $txt = $content;
        fwrite($myfile, $txt);
        fclose($myfile);
    }
    
    private function var_export_min($var, $return = false)
    {
        if (is_array($var)) {
            $toImplode = array();
            foreach ($var as $key => $value) {
                $toImplode[] = var_export($key, true).'=>'.self::var_export_min($value, true);
            }
            $code = 'array('.implode(',', $toImplode).')';
            if ($return) return $code;
            else echo $code;
        } else {
            return var_export($var, $return);
        }
    }
    
    function improved_var_export ($variable, $return = false) {
        if ($variable instanceof stdClass) {
            $result = '(object) '.self::improved_var_export(get_object_vars($variable), true);
        } else if (is_array($variable)) {
            $array = array ();
            foreach ($variable as $key => $value) {
                $array[] = var_export($key, true).' => '.self::improved_var_export($value, true);
            }
            $result = "\t[".implode(",\n", $array)."]";
        } else {
            $result = var_export($variable, true);
        }
    
        if (!$return) {
            print $result;
            return null;
        } else {
            return $result;
        }
    }
    
    private function insertUpdate()
    {
        
        $array['CHANGE-ME'] = [
            
        ];
        
        $array = array_dot($array);
        $count = count($array);
        
        $insert = $this->option('insert');
        $update = $this->option('update');
        
        if($insert) {
            $sqlLine = [];
            $lang = str_replace("-", "_", $insert);
            foreach($array as $key=>$value) {
                // $sqlLine[] = "INSERT INTO {$this->config->table} (`string`, `{$lang}`) VALUES ('{$key}', '{$value}');";
                Data::create([
                    'string' => $key,
                    $lang => $value,
                ]);
            }
            // print_r($sqlLine);die;
            $this->info("{$count} registers inserted.");
        }
        if($update) {
            $sqlLine = [];
            $lang = str_replace("-", "_", $update);
            foreach($array as $key=>$value) {
                // $sqlLine[] = "UPDATE {$this->config->table} SET `{$lang}` = '{$value}' WHERE `string` = '{$key}';";
                Data::where('string', $key)->update([
                    $lang => $value
                ]);
            }
            $this->info("{$count} registers updated.");
            // print_r($sqlLine);die;
        }
        
    }

    public function raw($content)
    {
        echo("\nRAW called@".date('Y-m-d H:i:s')."\n");
        echo("-----------------\n");
        print_r($content);
        echo("\n-----------------\n\n");
        die;
    }
}
