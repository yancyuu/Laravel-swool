<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class User extends BaseController
{
    public function Test($param){
        return key($param);
    }

}
