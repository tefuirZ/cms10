<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:71:"/www/wwwroot/app.990829.cn/application/admin/view/system/configsms.html";i:1568100986;s:66:"/www/wwwroot/app.990829.cn/application/admin/view/public/head.html";i:1568100986;s:66:"/www/wwwroot/app.990829.cn/application/admin/view/public/foot.html";i:1568100986;}*/ ?>
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

<div class="page-container">
    <form class="layui-form layui-form-pane" action="">
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this">短信发送设置</li>
            </ul>
            <div class="layui-tab-content">
                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        提示信息：<br>
                        请务必按照短信接口服务商的要求做好短信签名和短信内容的设置。<br>
                        腾讯云短信：https://cloud.tencent.com/product/sms<br>
                        腾讯云短信模板例子：<br>
                        尊敬的用户，您的注册会员验证码为：{1}，请勿泄漏于他人！<br>
                        验证码为：{1}，您正在绑定手机，若非本人操作，请勿泄露。<br>
                        验证码为：{1}，您正在进行密码重置操作，如非本人操作，请忽略本短信！<br>
                        阿里云短信：https://www.aliyun.com/product/sms<br>
                        阿里云短信模板例子：<br>
                        尊敬的用户，您的注册会员验证码为：${code}，请勿泄漏于他人！<br>
                        验证码为：${code}，您正在绑定手机，若非本人操作，请勿泄露。<br>
                        验证码为：${code}，您正在进行密码重置操作，如非本人操作，请忽略本短信！<br>

                    </blockquote>

                    <div class="layui-form-item">
                        <label class="layui-form-label">服务商：</label>
                        <div class="layui-input-inline">
                            <select  name="sms[type]">
                                <option value="" >请选择...</option>
                                <?php if(is_array($ext_list) || $ext_list instanceof \think\Collection || $ext_list instanceof \think\Paginator): $i = 0; $__LIST__ = $ext_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <option value="<?php echo $key; ?>" <?php if($config['sms']['type'] == $key): ?>selected <?php endif; ?>><?php echo $vo; ?></option>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                            </select>
                        </div>
                        <div class="layui-form-mid layui-word-aux"></div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">appid：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" id="appid" name="sms[appid]" placeholder="" value="<?php echo $config['sms']['appid']; ?>" class="layui-input"  >
                        </div>
                        <div class="layui-form-mid layui-word-aux">腾讯云对应AppId，阿里云对应KeyId</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">appkey：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" id="appkey" name="sms[appkey]" placeholder="" value="<?php echo $config['sms']['appkey']; ?>" class="layui-input"  >
                        </div>
                        <div class="layui-form-mid layui-word-aux">腾讯云对应AppKey，阿里云对应KeySecret</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">短信签名：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" id="sign" name="sms[sign]" placeholder="" value="<?php echo $config['sms']['sign']; ?>" class="layui-input "  >
                        </div>
                        <div class="layui-form-mid layui-word-aux"></div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">注册模板编号：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" id="tpl_code_reg" name="sms[tpl_code_reg]" placeholder="" value="<?php echo $config['sms']['tpl_code_reg']; ?>" class="layui-input "  >
                        </div>
                        <div class="layui-form-mid layui-word-aux">模板编号需要在服务商短信控制台中申请</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">绑定模板编号：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" id="tpl_code_bind" name="sms[tpl_code_bind]" placeholder="" value="<?php echo $config['sms']['tpl_code_bind']; ?>" class="layui-input "  >
                        </div>
                        <div class="layui-form-mid layui-word-aux">模板编号需要在服务商短信控制台中申请</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">找回模板编号：</label>
                        <div class="layui-input-inline w400">
                            <input type="text" id="tpl_code_findpass" name="sms[tpl_code_findpass]" placeholder="" value="<?php echo $config['sms']['tpl_code_findpass']; ?>" class="layui-input "  >
                        </div>
                        <div class="layui-form-mid layui-word-aux">模板编号需要在服务商短信控制台中申请</div>
                    </div>

            </div>
            </div>

        </div>
        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">
    function test_email() {
        var host = $("#host").val();
        var username = $("#username").val();
        var password = $("#password").val();
        var test = $("#test").val();
        var port = $('#port').val();

        layer.msg('数据提交中...',{time:500000});
        $.ajax({
            url: "<?php echo url('system/test_email'); ?>",
            type: "post",
            dataType: "json",
            data: {host:host,username:username,password:password,port:port,test:test},
            beforeSend: function () {
            },
            error:function(r){
                layer.msg('发生错误，请检查是否开启相应扩展库',{time:1800});
            },
            success: function (r) {
                layer.msg(r.msg,{time:1800});
            },
            complete: function () {
            }
        });
    }
</script>

</body>
</html>