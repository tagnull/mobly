<?php

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $users = [
            [
                'role' => 'administrator',
                'data' => [
                	'name' => env('ADMIN_NAME', ''),
                	'email' => env('ADMIN_EMAIL', ''),
                	'password' => Hash::make(env('ADMIN_PASSWORD', ''),[
                	    'memory' => 1024,
                        'time' => 2,
                        'threads' => 2, 
                	]),
                	'status' => 1,
                	'meta' => [
                	    'language' => 'pt-BR',
                	    'datetime' => [
                	        'format' => 'd/m/Y'
                	    ],
                	    'records' => [
                	        'per_page' => 15
                	    ]
                	],
                	'created_at' => date('Y-m-d H:i:s'),
                	'updated_at' => date('Y-m-d H:i:s'),
                ]    
            ],
        ];
        
        foreach($users as $data) {
            $user = User::create($data['data']);
            // if($user->email == 'ipereira.eu@gmail.com') {
                //$user->assignRole($data['role']);
            // }
        }
    }
}
