<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>文章管理</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="icon" type="image/png" href="/Public/admin/i/favicon.png">
    <link rel="apple-touch-icon-precomposed"
          href="/Public/admin/i/app-icon72x72@2x.png">
    <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
    <link rel="stylesheet" href="/Public/admin/css/amazeui.min.css"/>
    <link rel="stylesheet"
          href="/Public/admin/css/amazeui.datatables.min.css"/>
    <link rel="stylesheet" href="/Public/admin/css/app.css">
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>

</head>
<style type="text/css">
    .color {
        color: #FFFFFF;
        text-decoration: none;
        font-weight: bold;
    }

    /*链接设置*/
    .color:visited {
        color: #FFFFFF;
        text-decoration: none;
        font-weight: bold;
    }

    /*访问过的链接设置*/
    .color:hover {
        color: #FFFFFF;
        text-decoration: none;
        font-weight: bold;
    }

    /*鼠标放上的链接设置*/
</style>
<body data-type="widgets">
<script src="/Public/admin/js/theme.js"></script>
<div class="am-g tpl-g">
    <!-- 头部 -->
    <header>
            <!-- logo -->
            <div class="am-fl tpl-header-logo">
                <a href="javascript:;"><img src="/admin/assets/img/logo.png" alt=""></a>
            </div>
            <!-- 右侧内容 -->
            <div class="tpl-header-fluid">
                <!-- 侧边切换 -->
                <div class="am-fl tpl-header-switch-button am-icon-list">
                    <span>

                </span>
                </div>
                <!-- 搜索 -->
                <div class="am-fl tpl-header-search">
                    <form class="tpl-header-search-form" action="javascript:;">
                        <button class="tpl-header-search-btn am-icon-search"></button>
                        <input class="tpl-header-search-box" type="text" placeholder="搜索内容...">
                    </form>
                </div>
                <!-- 其它功能-->
                <div class="am-fr tpl-header-navbar">
                    <ul>
                        <!-- 欢迎语 -->
                        <li class="am-text-sm tpl-header-navbar-welcome">
                            <a href="javascript:;">欢迎你, <span>Amaze UI</span> </a>
                        </li>

                        <!-- 新邮件 -->
                        <li class="am-dropdown tpl-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle tpl-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-envelope"></i>
                                <span class="am-badge am-badge-success am-round item-feed-badge">4</span>
                            </a>
                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/admin/assets/img/user04.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            3小时前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-success"></i>
                                                <span>夕风色</span>
                                            </div>
                                            <div class="am-text-truncate"> Amaze UI 的诞生，依托于 GitHub 及其他技术社区上一些优秀的资源；Amaze UI 的成长，则离不开用户的支持。 </div>
                                            <div class="menu-messages-content-time">2016-09-21 下午 16:40</div>
                                        </div>
                                    </a>
                                </li>

                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <div class="menu-messages-ico">
                                            <img src="/admin/assets/img/user02.png" alt="">
                                        </div>
                                        <div class="menu-messages-time">
                                            5天前
                                        </div>
                                        <div class="menu-messages-content">
                                            <div class="menu-messages-content-title">
                                                <i class="am-icon-circle-o am-text-warning"></i>
                                                <span>禁言小张</span>
                                            </div>
                                            <div class="am-text-truncate"> 为了能最准确的传达所描述的问题， 建议你在反馈时附上演示，方便我们理解。 </div>
                                            <div class="menu-messages-content-time">2016-09-16 上午 09:23</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-messages">
                                    <a href="javascript:;" class="tpl-dropdown-menu-messages-item am-cf">
                                        <i class="am-icon-circle-o"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 新提示 -->
                        <li class="am-dropdown" data-am-dropdown>
                            <a href="javascript:;" class="am-dropdown-toggle" data-am-dropdown-toggle>
                                <i class="am-icon-bell"></i>
                                <span class="am-badge am-badge-warning am-round item-feed-badge">5</span>
                            </a>

                            <!-- 弹出列表 -->
                            <ul class="am-dropdown-content tpl-dropdown-content">
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-line-chart"></i>
                                            <span> 有6笔新的销售订单</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            12分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-star"></i>
                                            <span> 有3个来自人事部的消息</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            30分钟前
                                        </div>
                                    </a>
                                </li>
                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <div class="tpl-dropdown-menu-notifications-title">
                                            <i class="am-icon-folder-o"></i>
                                            <span> 上午开会记录存档</span>
                                        </div>
                                        <div class="tpl-dropdown-menu-notifications-time">
                                            1天前
                                        </div>
                                    </a>
                                </li>


                                <li class="tpl-dropdown-menu-notifications">
                                    <a href="javascript:;" class="tpl-dropdown-menu-notifications-item am-cf">
                                        <i class="am-icon-bell"></i> 进入列表…
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- 退出 -->
                        <li class="am-text-sm">
                            <a href="javascript:;">
                                <span class="am-icon-sign-out"></span> 退出
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

        </header>

    <!-- 风格切换 -->
    <div class="tpl-skiner">
        <div class="tpl-skiner-toggle am-icon-cog"></div>
        <div class="tpl-skiner-content">
            <div class="tpl-skiner-content-title">选择主题</div>
            <div class="tpl-skiner-content-bar"><span
                    class="skiner-color skiner-white" data-color="theme-white"></span> <span
                    class="skiner-color skiner-black" data-color="theme-black"></span></div>
        </div>
    </div>
    <!-- 侧边导航栏 -->
    <div class="left-sidebar">
            <!-- 用户信息 -->


            <!-- 菜单 -->
            <ul class="sidebar-nav">
                <li class="sidebar-nav-heading">Components <span class="sidebar-nav-heading-info"> 附加组件</span></li>

                <li class="sidebar-nav-link">
                    <a href="/admin.php?c=index">
                        <i class="am-icon-dashboard sidebar-nav-link-logo"></i> 控制台

                    </a>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-navicon sidebar-nav-link-logo"></i> 文章管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin.php?c=article&a=show">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 写文章
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="/admin.php?c=article">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文章列表
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="/admin.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 分类列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;"  class="sidebar-nav-sub-title">
                        <i class="am-icon-pencil-square sidebar-nav-link-logo"></i> 随记管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 写随记
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 随记列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-photo sidebar-nav-link-logo"></i> 相册管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 相册列表
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文章图片
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-comments sidebar-nav-link-logo"></i> 留言管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 留言板
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 文章留言
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-puzzle-piece sidebar-nav-link-logo"></i> 更多功能
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="/admin/more/fun_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 功能列表
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/more/fun_email.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 邮箱功能
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/more/fun_friend.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 友链功能
                            </a>
                        </li>

                        <li class="sidebar-nav-link">
                            <a href="/admin/more/fun_visit.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 访问查看
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-user sidebar-nav-link-logo"></i> 用户管理
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 用户信息
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 增加用户
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 用户列表
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-gear sidebar-nav-link-logo"></i> 博客设置
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
                    <ul class="sidebar-nav sidebar-nav-sub">
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 主页信息
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 常规设置
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 编写方式
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 阅读设置
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_list.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 留言设置
                            </a>
                        </li>
                        <li class="sidebar-nav-link">
                            <a href="../admin/article/article_release.php">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> 素材设置
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>

    <!-- 内容区域 -->
    <div class="tpl-content-wrapper">
        <div class="row-content am-cf">
            <div class="row">
                <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                    <div class="widget am-cf">
                        <div class="widget-head am-cf">
                            <div class="widget-title  am-cf">文章列表</div>


                        </div>
                        <div class="widget-body  am-fr">

                            <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                <div class="am-form-group">
                                    <div class="am-btn-toolbar">
                                        <div class="am-btn-group am-btn-group-xs">
                                            <script type="text/javascript">
                                                function release() {
                                                    location.href = "article_release.php?a_id=0";
                                                }
                                                function delete_php(a_id) {
                                                    confirm("是否确认删除！！！");
                                                    if (con == true) {
                                                        location.href = "delete.php?a_id=" + a_id;
                                                    } else {
                                                        break;
                                                    }

                                                }
                                            </script>
                                            <button type="button" class="am-btn am-btn-default am-btn-success"
                                                    onclick="location.href='/admin.php?c=article&a=show';"><span
                                                    class="am-icon-plus"></span> <a
                                                    href="/admin.php?c=article&a=show" class="color">新增</a></button>
                                            <button type="button" class="am-btn am-btn-default am-btn-primary"><span
                                                    class="am-icon-save"></span> 全部
                                            </button>
                                            <button type="button" class="am-btn am-btn-default am-btn-secondary"><span
                                                    class="am-icon-save"></span> 置顶
                                            </button>
                                            <button type="button" class="am-btn am-btn-default am-btn-warning"><span
                                                    class="am-icon-archive"></span> 发布
                                            </button>
                                            <button type="button" class="am-btn am-btn-default am-btn-danger"><span
                                                    class="am-icon-trash-o"></span> 回收站
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="am-u-sm-12 am-u-md-6 am-u-lg-3">
                                <div class="am-form-group tpl-table-list-select"><select
                                        data-am-selected="{btnSize: 'sm'}">
                                    <option value="option1">所有类别</option>
                                    <option value="option2">IT业界</option>
                                    <option value="option3">数码产品</option>
                                    <option value="option3">笔记本电脑</option>
                                    <option value="option3">平板电脑</option>
                                    <option value="option3">只能手机</option>
                                    <option value="option3">超极本</option>
                                </select></div>
                            </div>
                            <div class="am-u-sm-12 am-u-md-12 am-u-lg-3">
                                <div class="am-input-group am-input-group-sm tpl-form-border-form cl-p">
                                    <input type="text" class="am-form-field "> <span
                                        class="am-input-group-btn">
<button
        class="am-btn  am-btn-default am-btn-success tpl-table-list-field am-icon-search"
        type="button"></button>
</span></div>
                            </div>

                            <div class="am-u-sm-12">
                                <table width="100%"
                                       class="am-table am-table-compact am-table-striped tpl-table-black ">
                                    <thead>
                                    <tr>
                                        <th>文章缩略图</th>
                                        <th>文章标题</th>
                                        <th>作者</th>
                                        <th>时间</th>
                                        <th>状态</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>
                                    <tbody>


                                    <?php if(is_array($article_list)): $i = 0; $__LIST__ = $article_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$list): $mod = ($i % 2 );++$i;?><tr class="gradeX">
                                            <td><img src="<?php echo ($list["a_photo"]); ?>" class="tpl-table-line-img"
                                                     alt=""></td>
                                            <td class="am-text-middle"><?php echo ($list["a_title"]); ?></td>
                                            <td class="am-text-middle"><?php echo ($list["a_adduser"]); ?></td>
                                            <td class="am-text-middle"><?php echo ($list["a_addtime"]); ?></td>
                                            <?php if($list["a_state"] == 1): ?><td class="am-text-middle">显示</td><?php endif; ?>
                                            <?php if($list["a_state"] == 0): ?><td class="am-text-middle">隐藏</td><?php endif; ?>
                                            <?php if($list["a_state"] == 2): ?><td class="am-text-middle">置顶</td><?php endif; ?>
                                            <td class="am-text-middle">
                                                <div class="tpl-table-black-operation">
                                                    <a target="_blank" href="/index.php?c=article&a=show&a_id=<?php echo ($list["a_id"]); ?>&tip=1"> <i
                                                            class="am-icon-eye"></i> 预览 </a>
                                                    <a href="/admin.php?c=article&a=stick&a_id=<?php echo ($list["a_id"]); ?>"> <i
                                                            class="am-icon-eye"></i> 置顶 </a>
                                                    <a href="/admin.php?c=article&a=show&a_id=<?php echo ($list["a_id"]); ?>&tip=2"> <i
                                                        class="am-icon-pencil"></i> 编辑 </a>
                                                    <a href="" onclick="delete_php()"
                                                       class="tpl-table-black-operation-del"> <i
                                                            class="am-icon-trash"></i>
                                                        删除 </a>
                                                </div>
                                            </td>
                                        </tr><?php endforeach; endif; else: echo "" ;endif; ?>

                                    <!-- more data -->
                                    </tbody>
                                </table>
                            </div>
                            <div class="am-u-lg-12 am-cf">

                                <div class="am-fr">
                                    <ul class="am-pagination tpl-pagination">
                                        <li class="am-disabled"><a href="#">«</a></li>
                                        <li class="am-active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#">»</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script src="http://cdn.bootcss.com/amazeui/2.7.2/js/amazeui.min.js"></script>
<script src="/Public/admin/js/app.js"></script>

</body>

</html>