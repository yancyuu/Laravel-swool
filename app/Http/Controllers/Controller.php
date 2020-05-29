<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function todo(Request  $request){
        $post = $request->all();
        $param = self::parseParam(array_keys($post));
        log::info('$post'.json_encode($post));
        //解析post参数

        return $post;
    }

    public function parseParam($param){
        $param = array_keys($param);
        log::info('into param'.json_encode($param));
        //解析post参数
//        if($param['requestId'] == )

        return $param;
    }

}
