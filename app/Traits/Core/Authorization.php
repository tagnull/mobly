<?php
namespace App\Traits\Core;

use Spatie\Permission\Exceptions\UnauthorizedException;

/**
 * Source based on:
 * https://www.google.com.br/search?q=spatie%20permission%20map%20permission%20methods
 * https://stackoverflow.com/questions/48452444/spatie-laravel-permission-mapping-permissions-with-controller-methods
 */

trait Authorization
{
    private $permissions = [
        'index'   => 'view',
        'show'    => 'view',
        'store'   => 'create',
        'update'  => 'update',
        'destroy' => 'delete'
    ];

    private $action;

    public function callAction($method, $parameters)
    {

        $permission = $this->getPermission($method);
        
        if(($permission && auth()->user()->can($permission)) || !$permission) {
            return parent::callAction($method, $parameters);
        }

        abort(403, __('error.403'));
    }

    public function getPermission($method)
    {
        if(!$this->action = array_get($this->getPermissions(), $method)) {
            return null;
        }

        return  $this->routeName() ?  $this->actionRoute() : $this->action;
    }

    public function registerActionPermission($action, $permission)
    {
        $this->permissions[$action] = $permission;
    }

    private function actionRoute()
    {
        return $this->routeName() . '.' . $this->action;
    }

    private function routeName()
    {
        return substr(request()->route()->getName(), 0 , (strrpos(request()->route()->getName(), '.')));
    }

    private function getPermissions()
    {
        return $this->permissions;
    }
}