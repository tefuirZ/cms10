<?php
$menus=require './mogai_a.php';
// $html_code = '<a href="http://www.shouzhuanmao.com/" target="_blank"><img src="https://timgsa.baidu.com/timg?image&quality=80&size=b9999_10000&sec=1607533624784&di=0f263306bdc51e6500b9bd79ffd029f3&imgtype=0&src=http%3A%2F%2Fku.90sjimg.com%2Felement_origin_min_pic%2F17%2F01%2F05%2F8369b902603227f32d66cbcd5b5b9560.jpg" width="100%" height="100%" border="0" /></a>'; //html广告代码

// $vod_url = "http://ggkkmuup9wuugp6ep8d.exp.bcevod.com/mda-km6vi9rjgr5pe3iq/mda-km6vi9rjgr5pe3iq.mp4";
// $click_url = "http://baidu.com";
// $timeout = 6; //html广告播放时间

$html_code =$menus['html_code']; //html广告代码
$vod_url =$menus['vod_url'];
$click_url = $menus['click_url'];

$timeout = $menus['timeout']; //html广告播放时间
$ad_select = $menus['ad_select'];
$home_history = true;
if ($menus['home_history'] =='off'){
    $home_history = false;
}
$arr = array (
    'msg'=>'成功',
    'code'=>200,
    'data'=>[
  
        'ad_select'=>$ad_select,
        'html'=>[
            'code'=>$html_code ,
            'timeout'=>intval($timeout)
            
            ],
        'video'=>[
            "url"=>$vod_url,
            "click_url"=> $click_url
            
            ],
        'home_history'=>$home_history
        ],
        
        
    );

echo json_encode($arr);
?>