<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class user extends BaseController
{
    public function test(Request  $request){
        $post = $request->all();
        return json_encode($post);
    }

}
