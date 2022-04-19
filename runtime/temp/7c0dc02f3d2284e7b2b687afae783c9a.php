<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:69:"/www/wwwroot/app.990829.cn/application/admin/view/vodplayer/info.html";i:1616743520;s:66:"/www/wwwroot/app.990829.cn/application/admin/view/public/head.html";i:1568100986;s:66:"/www/wwwroot/app.990829.cn/application/admin/view/public/foot.html";i:1568100986;}*/ ?>
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
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this">基本设置</li>
                <li>播放器代码</li>
            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">

                    <div class="layui-form-item">
                        <label class="layui-form-label">状态：</label>
                        <div class="layui-input-block">
                            <input name="status" type="radio" id="rad-1" value="0" title="禁用" <?php if($info['status'] != 1): ?>checked <?php endif; ?>>
                            <input name="status" type="radio" id="rad-2" value="1" title="启用" <?php if($info['status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">编码：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="<?php echo $info['from']; ?>" placeholder="唯一标识英文、纯数字会自动加_" id="from" name="from" <?php if($info['from'] != ''): ?> readonly="readonly"<?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">名称：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="<?php echo $info['show']; ?>" placeholder="中文播放器名称" id="show" name="show">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">备注：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="<?php echo $info['des']; ?>" placeholder="des备注信息" id="des" name="des">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">解析状态：</label>
                        <div class="layui-input-block">
                            <input name="ps" type="radio" value="0" title="禁用" <?php if($info['ps'] != 1): ?>checked <?php endif; ?>>
                            <input name="ps" type="radio" value="1" title="启用" <?php if($info['ps'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-row">
                        <div class="layui-col-xs6">
                        	
                            <div class="layui-form-item" onclick="add(this,'')">
                                <label class="layui-form-label">解析接口： </label>
                                <div class="layui-input-block">
                                    <input placeholder="点击增加" type="text" class="layui-input" disabled>
                                </div>
                            </div>
                            
                            <?php foreach($info['parse'] as $key => $val): ?>
                            <div class="layui-form-item sdk-item">
                                <label class="layui-form-label">解析接口： <a href="#" style="font-size: 9px;color: red;" onclick="remove(this)"> 删 </a> </label>
                                <div class="layui-input-block">
                                    <input type="text" class="layui-input" value="<?php echo $val; ?>" placeholder="独立解析地址，权重高于全局播放器设置的解析"  name="parse[]">
                                </div>
                            </div>
                            <?php endforeach; ?>

                            <div class="layui-form-item" onclick="add(this,'')">
                                <label class="layui-form-label">解析接口： </label>
                                <div class="layui-input-block">
                                    <input placeholder="点击增加" type="text" class="layui-input" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="layui-col-xs6">
                        	
                        	
                            <div class="layui-form-item" onclick="add(this,'2')">
                                <label class="layui-form-label">解析接口： </label>
                                <div class="layui-input-block">
                                    <input placeholder="点击增加" type="text" class="layui-input" disabled>
                                </div>
                            </div>
                        	
                            <?php foreach($info['parse2'] as $key => $val): ?>
                            <div class="layui-form-item sdk-item">
                                <label class="layui-form-label">解析接口： <a href="#" style="font-size: 9px;color: red;" onclick="remove(this)"> 删 </a> </label>
                                <div class="layui-input-block">
                                    <input type="text" class="layui-input" value="<?php echo $val; ?>" placeholder="独立解析地址，权重高于全局播放器设置的解析"  name="parse2[]">
                                </div>
                            </div>
                            <?php endforeach; ?>

                            <div class="layui-form-item" onclick="add(this,'2')">
                                <label class="layui-form-label">解析接口： </label>
                                <div class="layui-input-block">
                                    <input placeholder="点击增加" type="text" class="layui-input" disabled>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="layui-form-item">
                        <label class="layui-form-label">排序：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="<?php echo $info['sort']; ?>" placeholder="数值越大排列越靠前" id="sort" name="sort">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">提示：</label>
                        <div class="layui-input-block">
                            <textarea name="tip" cols="" style="height:50px;min-height:50px;" class="layui-textarea"  placeholder="tip提示信息" ><?php echo $info['tip']; ?></textarea>
                        </div>
                    </div>
                     <div class="layui-form-item">
                        <label class="layui-form-label">播放内核：</label>
                        <div class="layui-input-block">
                            <input name="kernel" type="radio" id="kernel-0" value="0" title="默认" <?php if($info['kernel'] == 0): ?>checked <?php endif; ?>>
                            <input name="kernel" type="radio" id="kernel-1" value="1" title="ijk" <?php if($info['kernel'] == 1): ?>checked <?php endif; ?>>
                            <input name="kernel" type="radio" id="kernel-2" value="2" title="exo" <?php if($info['kernel'] == 2): ?>checked <?php endif; ?>>
                            <input name="kernel" type="radio" id="kernel-3" value="3" title="media" <?php if($info['kernel'] == 3): ?>checked <?php endif; ?>>
                            
                        </div>
                    </div>
                     <div class="layui-form-item">
                        <label class="layui-form-label">链接特征：</label>
                   
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="<?php echo $info['features']; ?>" placeholder="直连包含字符串。" id="features" name="features">
                        </div>
                    </div>
                     <div class="layui-form-item">
                        <label class="layui-form-label">请求头：</label>
                        <div class="layui-input-block">
                            <textarea name="headers" cols="" style="height:50px;min-height:100px;" class="layui-textarea"  placeholder="请求头格式，键=>值，一行一个键值对。" ><?php echo $info['headers']; ?></textarea>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">使用请求头链接：</label>
                        <div class="layui-input-block">
                            <textarea name="issethead" cols="" style="height:50px;min-height:100px;" class="layui-textarea"  placeholder="使用设置请求头的链接，正则匹配，一行一个。" ><?php echo $info['issethead']; ?></textarea>
                        </div>
                    </div>
                    
              </div>
                <div class="layui-tab-item">
                    <div class="layui-form-item">
                        <label class="layui-form-label">文件：</label>
                        <div class="layui-input-block">
                            <input type="text" class="layui-input" value="/static/player/<?php echo $info['from']; ?>.js" disabled="disabled">

                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">代码：</label>
                        <div class="layui-input-block">
                            <textarea name="code" cols="" rows="20" class="layui-textarea"  placeholder="播放器JS代码" ><?php echo $info['code']; ?></textarea>
                        </div>
                    </div>
                </div>

        <div class="layui-form-item center">
            <div class="layui-input-block">
                <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit" data-child="true">保 存</button>
                <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
            </div>
        </div>
    </form>

</div>
<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">
    
    function remove(_this) {

        $(_this).parents('.sdk-item').remove();

    }

    function add(_this,str) {
        var htmlCode  = '<div class="layui-form-item sdk-item">';
            htmlCode +=     '<label class="layui-form-label">解析接口： <a href="#" style="font-size: 9px;color: red;" onclick="remove(this)"> 删 </a> </label>'
            htmlCode +=     '<div class="layui-input-block">'
            htmlCode +=     '<input type="text" class="layui-input" value="" placeholder="独立解析地址，权重高于全局播放器设置的解析"  name="parse'+str+'[]">'
            htmlCode += '</div>'

        $(_this).before(htmlCode);
    }

    layui.use(['form', 'layer'], function () {
        // 操作对象
        var form = layui.form
                , layer = layui.layer
                , $ = layui.jquery;

        // 验证
        form.verify({
            from: function (value) {
                if (value == "") {
                    return "请输入编码";
                }
            },
            show: function (value) {
                if (value == "") {
                    return "请输入名称";
                }
            }
        });


    });
</script>

</body>
</html>