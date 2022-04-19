<?php
namespace app\admin\controller;
use think\Controller;
use think\Request;
class Api extends Base
{
   
     public function lock(Request $request)
    {
        var_dump(1);
        return view('lock');
    }
}
