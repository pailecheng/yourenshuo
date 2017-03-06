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
Route::get('news/:id','index/News/read');   //查询  
Route::post('news','index/News/add');       //新增  
Route::put('news/:id','index/News/update'); //修改  
Route::delete('news/:id','index/News/delete'); //删除  
//Route::any('new/:id','News/read');        // 所有请求都支持的路由规则  
