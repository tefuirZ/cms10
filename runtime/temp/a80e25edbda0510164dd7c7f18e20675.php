<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:72:"/www/wwwroot/app.990829.cn/application/admin/view/system/configuser.html";i:1597912078;s:66:"/www/wwwroot/app.990829.cn/application/admin/view/public/head.html";i:1568100986;s:66:"/www/wwwroot/app.990829.cn/application/admin/view/public/foot.html";i:1568100986;}*/ ?>
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

    <div class="showpic" style="display:none;"><img class="showpic_img" width="120" height="160"></div>

    <form class="layui-form layui-form-pane" action="">
        <div class="layui-tab">
            <ul class="layui-tab-title">
                <li class="layui-this">会员设置</li>

            </ul>
            <div class="layui-tab-content">

                <div class="layui-tab-item layui-show">

                    <blockquote class="layui-elem-quote layui-quote-nm">
                        提示信息：<br>
                        1.开启试看功能的话,播放窗口将采用iframe动态页面方式载入，可能影响性能哦; <br>
                    </blockquote>


                <div class="layui-form-item">
                    <label class="layui-form-label">会员模块：</label>
                    <div class="layui-input-inline">
                        <input type="radio" name="user[status]" value="0" title="关闭" <?php if($config['user']['status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="user[status]" value="1" title="开启" <?php if($config['user']['status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                    <div class="layui-form-mid layui-word-aux">是否开启会员模块</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">注册开关：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="user[reg_open]" value="0" title="关闭" <?php if($config['user']['reg_open'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="user[reg_open]" value="1" title="开启" <?php if($config['user']['reg_open'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">注册状态：</label>
                    <div class="layui-input-block">
                        <input type="radio" name="user[reg_status]" value="0" title="未审" <?php if($config['user']['reg_status'] != 1): ?>checked <?php endif; ?>>
                        <input type="radio" name="user[reg_status]" value="1" title="已审" <?php if($config['user']['reg_status'] == 1): ?>checked <?php endif; ?>>
                    </div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">注册昵称前缀：</label>
                        <div class="layui-input-block">
                            <input type="text" name="user[reg_autoname_prefix]" placeholder="" value="<?php echo $config['user']['reg_autoname_prefix']; ?>" class="layui-input">
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">手机注册验证：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reg_phone_sms]" value="0" title="关闭" <?php if($config['user']['reg_phone_sms'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[reg_phone_sms]" value="1" title="开启" <?php if($config['user']['reg_phone_sms'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">邮箱注册验证：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reg_email_sms]" value="0" title="关闭" <?php if($config['user']['reg_email_sms'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[reg_email_sms]" value="1" title="开启" <?php if($config['user']['reg_email_sms'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">注册验证码：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reg_verify]" value="0" title="关闭" <?php if($config['user']['reg_verify'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[reg_verify]" value="1" title="开启" <?php if($config['user']['reg_verify'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">登录验证码：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[login_verify]" value="0" title="关闭" <?php if($config['user']['login_verify'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[login_verify]" value="1" title="开启" <?php if($config['user']['login_verify'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>

                <!--<div class="layui-form-item">-->
                <!--    <label class="layui-form-label">次数控制：</label>-->
                <!--    <div class="layui-input-inline w150">-->
                <!--        <input type="text" name="user[everyday_times]" placeholder="" value="<?php echo $config['user']['everyday_times']; ?>" class="layui-input">-->
                <!--    </div>-->
                <!--    <div class="layui-form-mid layui-word-aux">统一控制用户每天的观影次数</div>-->
                <!--</div>-->


                <div class="layui-row">
                    <div class="layui-col-md6">
                        <div class="layui-form-item">
                            <label class="layui-form-label">v1分销人数：</label>
                            <div class="layui-input-inline w150">
                                <input type="text" name="user[user_level][v1][people_count]" placeholder="" value="<?php echo $config['user']['user_level']['v1']['people_count']; ?>" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">用户注册成功后默认赠送次数</div>
                        </div>
                    </div>
                    <div class="layui-col-md6">
                        <div class="layui-form-item">
                            <label class="layui-form-label">v1赠次：</label>
                            <div class="layui-input-inline w150">
                                <input type="text" name="user[user_level][v1][view_count]" placeholder="" value="<?php echo $config['user']['user_level']['v1']['view_count']; ?>" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">用户注册成功后默认赠送次数</div>
                        </div>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md6">
                        <div class="layui-form-item">
                            <label class="layui-form-label">v2分销人数：</label>
                            <div class="layui-input-inline w150">
                                <input type="text" name="user[user_level][v2][people_count]" placeholder="" value="<?php echo $config['user']['user_level']['v2']['people_count']; ?>" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">用户达到v2等级所需分销人数</div>
                        </div>
                    </div>
                    <div class="layui-col-md6">
                        <div class="layui-form-item">
                            <label class="layui-form-label">v2赠次：</label>
                            <div class="layui-input-inline w150">
                                <input type="text" name="user[user_level][v2][view_count]" placeholder="" value="<?php echo $config['user']['user_level']['v2']['view_count']; ?>" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">用户达到等级v2赠送次数</div>
                        </div>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md6">
                        <div class="layui-form-item">
                            <label class="layui-form-label">v3分销人数：</label>
                            <div class="layui-input-inline w150">
                                <input type="text" name="user[user_level][v3][people_count]" placeholder="" value="<?php echo $config['user']['user_level']['v3']['people_count']; ?>" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">用户达到v3等级所需分销人数</div>
                        </div>
                    </div>
                    <div class="layui-col-md6">
                        <div class="layui-form-item">
                            <label class="layui-form-label">v3赠次：</label>
                            <div class="layui-input-inline w150">
                                <input type="text" name="user[user_level][v3][view_count]" placeholder="" value="<?php echo $config['user']['user_level']['v3']['view_count']; ?>" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">用户达到等级v3赠送次数</div>
                        </div>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md6">
                        <div class="layui-form-item">
                            <label class="layui-form-label">v4分销人数：</label>
                            <div class="layui-input-inline w150">
                                <input type="text" name="user[user_level][v4][people_count]" placeholder="" value="<?php echo $config['user']['user_level']['v4']['people_count']; ?>" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">用户达到v4等级所需分销人数</div>
                        </div>
                    </div>
                    <div class="layui-col-md6">
                        <div class="layui-form-item">
                            <label class="layui-form-label">v4赠次：</label>
                            <div class="layui-input-inline w150">
                                <input type="text" name="user[user_level][v4][view_count]" placeholder="" value="<?php echo $config['user']['user_level']['v4']['view_count']; ?>" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">用户达到等级v4赠送次数</div>
                        </div>
                    </div>
                </div>
                <div class="layui-row">
                    <div class="layui-col-md6">
                        <div class="layui-form-item">
                            <label class="layui-form-label">v5分销人数：</label>
                            <div class="layui-input-inline w150">
                                <input type="text" name="user[user_level][v5][people_count]" placeholder="" value="<?php echo $config['user']['user_level']['v5']['people_count']; ?>" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">用户达到v5等级所需分销人数</div>
                        </div>
                    </div>
                    <div class="layui-col-md6">
                        <div class="layui-form-item">
                            <label class="layui-form-label">v5赠次：</label>
                            <div class="layui-input-inline w150">
                                <input type="text" name="user[user_level][v5][view_count]" placeholder="" value="<?php echo $config['user']['user_level']['v5']['view_count']; ?>" class="layui-input">
                            </div>
                            <div class="layui-form-mid layui-word-aux">用户达到等级v5赠送次数</div>
                        </div>
                    </div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">注册赠次：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="user[reg_times]" placeholder="" value="<?php echo $config['user']['reg_times']; ?>" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">用户注册成功后默认赠送次数</div>
                </div>

                <div class="layui-form-item">
                    <label class="layui-form-label">注册赠分：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="user[reg_points]" placeholder="" value="<?php echo $config['user']['reg_points']; ?>" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">用户注册成功后默认赠送积分</div>
                    <label class="layui-form-label">每IP限制：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="user[reg_num]" placeholder="" value="<?php echo $config['user']['reg_num']; ?>" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">每个IP每日限制注册次数</div>
                </div>
                <div class="layui-form-item">
                    <label class="layui-form-label">邀请注册积分：</label>
                    <div class="layui-input-inline w150">
                        <input type="text" name="user[invite_reg_points]" placeholder="" value="<?php echo $config['user']['invite_reg_points']; ?>" class="layui-input">
                    </div>
                    <div class="layui-form-mid layui-word-aux">成功邀请用户赚取奖励积分</div>
                </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">推广访问积分：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[invite_visit_points]" placeholder="" value="<?php echo $config['user']['invite_visit_points']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">成功邀请访问赚取奖励积分</div>
                        <label class="layui-form-label">每IP限制：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[invite_visit_num]" placeholder="" value="<?php echo $config['user']['invite_visit_num']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">每个IP每日限制可以获取几次推广访问积分</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">三级分销状态：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[reward_status]" value="0" title="关闭" <?php if($config['user']['reward_status'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[reward_status]" value="1" title="开启" <?php if($config['user']['reward_status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">一级提成比例：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[reward_ratio]" placeholder="单位百分比" value="<?php echo $config['user']['reward_ratio']; ?>" class="layui-input">
                        </div>
                        <label class="layui-form-label">二级提成比例：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[reward_ratio_2]" placeholder="单位百分比" value="<?php echo $config['user']['reward_ratio_2']; ?>" class="layui-input">
                        </div>
                        <label class="layui-form-label">三级提成比例：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[reward_ratio_3]" placeholder="单位百分比" value="<?php echo $config['user']['reward_ratio_3']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">用户支付成功分销推广者都可获得一定比例的积分。提成不足1积分将忽略。</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">提现状态：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[cash_status]" value="0" title="关闭" <?php if($config['user']['cash_status'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[cash_status]" value="1" title="开启" <?php if($config['user']['cash_status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item layui-hide">
                        <label class="layui-form-label">兑换比例：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[cash_ratio]" placeholder="兑换比例1元=多少积分" value="<?php echo $config['user']['cash_ratio']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">兑换比例1元=多少积分</div>
                        <label class="layui-form-label">最低提现金额：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[cash_min]" placeholder="例如100" value="<?php echo $config['user']['cash_min']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">最低提现多少金额。</div>
                    </div>


                    <div class="layui-form-item">
                        <label class="layui-form-label">兑换比例：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[gold_ratio]" placeholder="兑换比例1元=多少金币" value="<?php echo $config['user']['gold_ratio']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">兑换比例1元=多少金币</div>
                        <label class="layui-form-label">最低提现金额：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[gold_min]" placeholder="例如100" value="<?php echo $config['user']['gold_min']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">最低提现多少金额。</div>
                    </div>

                    <div class="layui-form-item">
                        <label class="layui-form-label">试看时长：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[trysee]" placeholder="" value="<?php echo $config['user']['trysee']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">全局设置无权限需要积分点播的试看时长，单位分钟；0表示关闭全局试看；</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">点播积分：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[trysee_points]" placeholder="" value="<?php echo $config['user']['trysee_points']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">全局设置点播积分</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">点播时长：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[trysee_time]" placeholder="" value="<?php echo $config['user']['trysee_time']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">全局设置点播有效时间 单位 小时</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">视频收费方式：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[vod_points_type]" value="0" title="每集" <?php if($config['user']['vod_points_type'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[vod_points_type]" value="1" title="每数据" <?php if($config['user']['vod_points_type'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">文章收费方式：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[art_points_type]" value="0" title="每页" <?php if($config['user']['art_points_type'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[art_points_type]" value="1" title="每数据" <?php if($config['user']['art_points_type'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">头像上传：</label>
                        <div class="layui-input-block">
                            <input type="radio" name="user[portrait_status]" value="0" title="关闭" <?php if($config['user']['portrait_status'] != 1): ?>checked <?php endif; ?>>
                            <input type="radio" name="user[portrait_status]" value="1" title="开启" <?php if($config['user']['portrait_status'] == 1): ?>checked <?php endif; ?>>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">头像尺寸：</label>
                        <div class="layui-input-inline w150">
                            <input type="text" name="user[portrait_size]" placeholder="" value="<?php echo $config['user']['portrait_size']; ?>" class="layui-input">
                        </div>
                        <div class="layui-form-mid layui-word-aux">尺寸建议100x100</div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">用户名过滤：</label>
                        <div class="layui-input-block">
                            <textarea name="user[filter_words]" class="layui-textarea" placeholder="多个用,号分隔"><?php echo $config['user']['filter_words']; ?></textarea>
                        </div>
                    </div>
            </div>


                <div class="layui-form-item center">
                    <div class="layui-input-block">
                        <button type="submit" class="layui-btn" lay-submit="" lay-filter="formSubmit">保 存</button>
                        <button class="layui-btn layui-btn-warm" type="reset">还 原</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript" src="/static/js/admin_common.js"></script>
<script type="text/javascript">
    layui.use(['form', 'layer'], function(){
        // 操作对象
        var form = layui.form
                , layer = layui.layer;


    });



</script>

</body>
</html>
