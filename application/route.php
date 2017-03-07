<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;  
Route::get('/',function(){  
    return 'Hello,world!';  
});  
Route::get('recruit/:id','index/Recruit/read');   //查询  
Route::post('recruit','index/Recruit/add');       //新增  
Route::put('recruit/:id','index/Recruit/update'); //修改  
Route::delete('recruit/:id','index/Recruit/delete'); //删除  
//Route::any('new/:id','News/read');        // 所有请求都支持的路由规则  
