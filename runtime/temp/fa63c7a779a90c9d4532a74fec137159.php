<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:67:"/www/wwwroot/app.990829.cn/application/admin/view/collect/info.html";i:1592482902;s:66:"/www/wwwroot/app.990829.cn/application/admin/view/public/head.html";i:1568100986;s:66:"/www/wwwroot/app.990829.cn/application/admin/view/public/foot.html";i:1568100986;}*/ ?>
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
    <form class="layui-form layui-form-pane" method="post" action="">
        <input id="collect_id" name="collect_id" type="hidden" value="<?php echo $info['collect_id']; ?>">
        <div class="layui-form-item">
            <label class="layui-form-label">资源名称：</label>
            <div class="layui-input-block  ">
                <input type="text" class="layui-input" value="<?php echo $info['collect_name']; ?>" placeholder="" id="collect_name" name="collect_name">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">接口地址：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['collect_url']; ?>" placeholder="" id="collect_url" name="collect_url">
            </div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">附加参数：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['collect_param']; ?>" placeholder="" id="collect_param" name="collect_param">
            </div>
            <div class="layui-form-mid layui-word-aux" style="margin-left:110px; ">提示信息：一般&开头，例如老版xml格式采集下载地址需加入&ct=1</div>
        </div>
        <div class="layui-form-item">
            <label class="layui-form-label">接口类型：</label>
            <div class="layui-input-block">
                <input name="collect_type" type="radio" value="1" title="xml" <?php if($info['collect_type'] == 1): ?>checked <?php endif; ?>>
                <input name="collect_type" type="radio" value="2" title="json" <?php if($info['collect_type'] != 1): ?>checked <?php endif; ?>>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">资源类型：</label>
            <div class="layui-input-block">
                <input name="collect_mid" lay-filter="collect_mid" type="radio" value="1" title="视频" <?php if($info['collect_mid'] == 1): ?>checked <?php endif; ?>>
                <input name="collect_mid" lay-filter="collect_mid" type="radio" value="2" title="文章" <?php if($info['collect_mid'] == 2): ?>checked <?php endif; ?>>
                <input name="collect_mid" lay-filter="collect_mid" type="radio" value="8" title="演员" <?php if($info['collect_mid'] == 8): ?>checked <?php endif; ?>>
                <input name="collect_mid" lay-filter="collect_mid" type="radio" value="9" title="角色" <?php if($info['collect_mid'] == 9): ?>checked <?php endif; ?>>
                <input name="collect_mid" lay-filter="collect_mid" type="radio" value="11" title="网址" <?php if($info['collect_mid'] == 11): ?>checked <?php endif; ?>>
            </div>
        </div>

        <div class="layui-form-item">
            <label class="layui-form-label">数据操作：</label>
            <div class="layui-input-block">
                <input name="collect_opt" type="radio" value="0" title="新增+更新" <?php if($info['collect_opt'] == 0): ?>checked <?php endif; ?>>
                <input name="collect_opt" type="radio" value="1" title="新增" <?php if($info['collect_opt'] == 1): ?>checked <?php endif; ?>>
                <input name="collect_opt" type="radio" value="2" title="更新" <?php if($info['collect_opt'] == 2): ?>checked <?php endif; ?>>
            </div>
            <div class="layui-form-mid layui-word-aux" style="">提示信息：如果某个资源作为副资源不想新增数据，可以只勾选更新。</div>
        </div>

        <div class="layui-form-item row_filer" <?php if($info['collect_mid'] != '1'): ?> style="display:none;" <?php endif; ?>>
            <label class="layui-form-label">地址过滤：</label>
            <div class="layui-input-block">
                <input name="collect_filter" type="radio" value="0" title="不过滤" <?php if($info['collect_filter'] == 0): ?>checked <?php endif; ?>>
                <input name="collect_filter" type="radio" value="1" title="新增+更新" <?php if($info['collect_filter'] == 1): ?>checked <?php endif; ?>>
                <input name="collect_filter" type="radio" value="2" title="新增" <?php if($info['collect_filter'] == 2): ?>checked <?php endif; ?>>
                <input name="collect_filter" type="radio" value="3" title="更新" <?php if($info['collect_filter'] == 3): ?>checked <?php endif; ?>>
            </div>
        </div>
        <div class="layui-form-item row_filer" <?php if($info['collect_mid'] != '1'): ?> style="display:none;" <?php endif; ?>>
            <label class="layui-form-label">过滤代码：</label>
            <div class="layui-input-block">
                <input type="text" class="layui-input" value="<?php echo $info['collect_filter_from']; ?>" placeholder="" id="collect_filter_from" name="collect_filter_from">
            </div>
            <div class="layui-form-mid layui-word-aux" style="margin-left:110px; ">过滤提示：多组地址的资源开启白名单后只会入库指定代码的地址。比如 youku,iqiyi</div>
        </div>
        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button class="layui-btn layui-btn-normal" type="button" id="btnTest" >测 试</button>
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>

<script type="text/javascript">
    layui.use(['form', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery;

        // 验证
        form.verify({
            collect_name: function (value) {
                if (value == "") {
                    return "请输入资源名称";
                }
            },
            collect_url: function (value) {
                if (value == "") {
                    return "请输入接口地址";
                }
            }
        });


        $('#btnTest').click(function() {
            var that = $(this);
            var data = 'cjurl='+ $('#collect_url').val() + '&cjflag='+ '&ac=list';

            $.post("<?php echo url('test'); ?>",data,function(r){
                if(r.code==1){
                    layer.msg('测试类型成功，接口类型：'+ r.msg ,{time:1800});
                    if(r.msg=='json'){
                        $("input[name='collect_type'][value=2]").attr("checked",true);
                    }
                    else{
                        $("input[name='collect_type'][value=1]").attr("checked",true);
                    }
                    form.render('radio');
                }
                else{
                    layer.msg(r.msg,{time:1800});
                }
            });

        });

        form.on('radio(collect_mid)',function(data){
            $('.row_filer').hide();
            if(data.value=='1'){
                $('.row_filer').show();
            }
        });

    });




</script>

</body>
</html>