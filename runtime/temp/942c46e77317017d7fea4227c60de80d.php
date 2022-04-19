<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:65:"/www/wwwroot/app.990829.cn/application/admin/view/admin/lock.html";i:1608722572;s:66:"/www/wwwroot/app.990829.cn/application/admin/view/public/head.html";i:1568100986;s:66:"/www/wwwroot/app.990829.cn/application/admin/view/public/foot.html";i:1568100986;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php echo $title; ?> - 苹果CMS</title>
    <link rel="stylesheet" href="/static/layui/css/layui.css">
    <link rel="stylesheet" href="/static/css/admin_style.css">
    <script type="text/javascript" src="/static/js/jquery.js"></script>
    <script type="text/javascript" src="/static/layui/layui.js"></script>
    <script>
        var ROOT_PATH="",ADMIN_PATH="<?php echo $_SERVER['SCRIPT_NAME']; ?>", MAC_VERSION='v10';
    </script>
</head>
<body>
<div class="page-container p10">
    <h3>播放前广告</h3>
    <form class="layui-form layui-form-pane" method="post" action="<?php echo url('admin/lock'); ?>">

                                <div class="layui-input-inline w400">
                            <input type="radio" name="ad_select" value="html" title="网页广告" <?php if($menus['ad_select'] == html): ?>checked <?php endif; ?>>
                            <input type="radio" name="ad_select" value="video" title="视频广告" <?php if($menus['ad_select'] == video): ?>checked <?php endif; ?>>
                        </div>
                        <br>
                        <br>
        <div class="layui-form-item">
            <label class="layui-form-label">html代码：</label>
            <div class="layui-input-block  ">
                <!--<input type="text" class="layui-input" value="<?php echo $menus['html_code']; ?>" placeholder="" id="admin_name" name="html_code">-->
                <textarea  name="html_code" id="" cols="100" rows="10"><?php echo $menus['html_code']; ?></textarea>
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">视频广告地址：</label>
            <div class="layui-input-block  ">
                <input type="text" class="layui-input" value="<?php echo $menus['vod_url']; ?>" placeholder="" id="admin_name" name="vod_url">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">视频广告跳转地址：</label>
            <div class="layui-input-block  ">
                <input type="text" class="layui-input" value="<?php echo $menus['click_url']; ?>" placeholder="" id="admin_name" name="click_url">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">超时时间：</label>
            <div class="layui-input-inline w400 ">
                <input type="text" class="layui-input" value="<?php echo $menus['timeout']; ?>" placeholder="" id="admin_name" name="timeout">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">首页播放记录</label>
          <div class="layui-input-inline w400">
              
            <input type="radio" name="home_history" value="on" title="开启" <?php if($menus['home_history'] == on): ?>checked <?php endif; ?>>
            <input type="radio" name="home_history" value="off" title="关闭" <?php if($menus['home_history'] == off): ?>checked <?php endif; ?>>
        </div>
    </div>
<button type="submit">提交</button>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>



</body>
</html>