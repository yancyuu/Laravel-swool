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
    public function todo($request){
        $param = $request->all();
        $param = self::parseParam($param);
        log::info('post param info='.json_encode($param));
        return $param;
    }

    public function parseParam($param){
        #$param = array_keys($param);
        log::info('into param'.json_encode($param));
        //解析post参数
//        if($param['requestId'] == )

        return $param;
    }

}
