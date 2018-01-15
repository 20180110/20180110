<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:65:"D:\WWW\20180110\public/../application/admin\view\person\list.html";i:1515580665;s:67:"D:\WWW\20180110\public/../application/admin\view\public\header.html";i:1515568287;s:65:"D:\WWW\20180110\public/../application/admin\view\public\menu.html";i:1515579356;s:65:"D:\WWW\20180110\public/../application/admin\view\public\foot.html";i:1515555601;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="__PUBLIC__css/bootstrap.min.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">-->
    <link href="__PUBLIC__css/bootstrap-responsive.min.css" rel="stylesheet">
    <link id="base-style" href="__PUBLIC__css/style.css" rel="stylesheet">
    <link id="base-style-responsive" href="__PUBLIC__css/style-responsive.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="__PUBLIC__css/ie.css" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="__PUBLIC__css/ie9.css" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="__PUBLIC__img/favicon.ico">
    <!-- end: Favicon -->




</head>

<body>
<!-- start: Header -->
<div class="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="../index/index.html"><span>重点车辆管理系统</span></a>

            <!-- start: Header Menu -->
            <div class="nav-no-collapse header-nav">
                <ul class="nav pull-right">
                    <li class="dropdown hidden-phone">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-bell"></i>
								<span class="badge red">
								7 </span>
                        </a>
                        <ul class="dropdown-menu notifications">
                            <li class="dropdown-menu-title">
                                <span>You have 11 notifications</span>
                                <a href="#refresh"><i class="icon-repeat"></i></a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon blue"><i class="icon-user"></i></span>
                                    <span class="message">New user registration</span>
                                    <span class="time">1 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">7 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">8 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">16 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon blue"><i class="icon-user"></i></span>
                                    <span class="message">New user registration</span>
                                    <span class="time">36 min</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon yellow"><i class="icon-shopping-cart"></i></span>
                                    <span class="message">2 items sold</span>
                                    <span class="time">1 hour</span>
                                </a>
                            </li>
                            <li class="warning">
                                <a href="#">
                                    <span class="icon red"><i class="icon-user"></i></span>
                                    <span class="message">User deleted account</span>
                                    <span class="time">2 hour</span>
                                </a>
                            </li>
                            <li class="warning">
                                <a href="#">
                                    <span class="icon red"><i class="icon-shopping-cart"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">6 hour</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon green"><i class="icon-comment-alt"></i></span>
                                    <span class="message">New comment</span>
                                    <span class="time">yesterday</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="icon blue"><i class="icon-user"></i></span>
                                    <span class="message">New user registration</span>
                                    <span class="time">yesterday</span>
                                </a>
                            </li>
                            <li class="dropdown-menu-sub-footer">
                                <a>View all notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- start: Notifications Dropdown -->
                    <li class="dropdown hidden-phone">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-calendar"></i>
								<span class="badge red">
								5 </span>
                        </a>
                        <ul class="dropdown-menu tasks">
                            <li class="dropdown-menu-title">
                                <span>You have 17 tasks in progress</span>
                                <a href="#refresh"><i class="icon-repeat"></i></a>
                            </li>
                            <li>
                                <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                    <div class="taskProgress progressSlim red">80</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                    <div class="taskProgress progressSlim green">47</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                    <div class="taskProgress progressSlim yellow">32</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                    <div class="taskProgress progressSlim greenLight">63</div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
										<span class="header">
											<span class="title">ARM Development</span>
											<span class="percent"></span>
										</span>
                                    <div class="taskProgress progressSlim orange">80</div>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-menu-sub-footer">View all tasks</a>
                            </li>
                        </ul>
                    </li>
                    <!-- end: Notifications Dropdown -->
                    <!-- start: Message Dropdown -->
                    <li class="dropdown hidden-phone">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-envelope"></i>
								<span class="badge red">
								4 </span>
                        </a>
                        <ul class="dropdown-menu messages">
                            <li class="dropdown-menu-title">
                                <span>You have 9 messages</span>
                                <a href="#refresh"><i class="icon-repeat"></i></a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="avatar"><img src="__PUBLIC__img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="avatar"><img src="__PUBLIC__img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="avatar"><img src="__PUBLIC__img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="avatar"><img src="__PUBLIC__img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <span class="avatar"><img src="__PUBLIC__img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Dennis Ji
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-menu-sub-footer">View all messages</a>
                            </li>
                        </ul>
                    </li>

                    <!-- start: User Dropdown -->
                    <li class="dropdown">
                        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="halflings-icon white user"></i> Dennis Ji
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-menu-title">
                                <span>Account Settings</span>
                            </li>
                            <li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
                            <li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <!-- end: User Dropdown -->
                </ul>
            </div>
            <!-- end: Header Menu -->

        </div>
    </div>
</div>
<!-- start: Header -->

<div class="container-fluid-full">
    <div class="row-fluid">

        <!-- start: Main Menu -->
        <div id="sidebar-left" class="span2">
    <div class="nav-collapse sidebar-nav">
        <ul class="nav nav-tabs nav-stacked main-menu">
            <li><a href="index.html"><i class="icon-bar-chart"></i><span class="hidden-tablet">主页</span></a></li>
            <li><a href="calendar.html"><i class="icon-calendar"></i><span class="hidden-tablet">企业管理</span></a></li>
            <li><a href="widgets.html"><i class="icon-dashboard"></i><span class="hidden-tablet">动态管控</span></a></li>
            <li><a href="table.html"><i class="icon-align-justify"></i><span class="hidden-tablet">统计分析</span></a></li>
            <li><a href="<?php echo url('admin/record/dataList'); ?>"><i class="icon-edit"></i><span class="hidden-tablet">报备录入</span></a></li>
            <li><a href="<?php echo url('admin/company/dataList'); ?>"><i class="icon-list-alt"></i><span class="hidden-tablet">企业录入</span></a></li>
            <li><a href="<?php echo url('admin/truck/dataList'); ?>"><i class="icon-tasks"></i><span class="hidden-tablet">车辆录入</span></a></li>
            <li><a href="<?php echo url('admin/person/dataList'); ?>"><i class="icon-eye-open"></i><span class="hidden-tablet">人员录入</span></a></li>

        </ul>
    </div>
</div>
        <!-- end: Main Menu -->

        <noscript>
            <div class="alert alert-block span10">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <!-- start: Content -->
        <div id="content" class="span10">
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home"></i>
                    <a href="index.html">主页</a>
                </li>
                <li>
                    <i class="icon-angle-right"></i>
                    <a href="#">人员</a>
                </li>
                <li>
                    <i class="icon-angle-right"></i>
                    <a href="#">列表</a>
                </li>
            </ul>
            <table class="table table-bordered">
                <form class="form-horizontal" method="post" action="" target="_self">
                    <input type="text" placeholder="输入姓名" value="" class="input-text" style="width:120px" name="name1">

                    <button type="submit" class="btn btn-success" id="" name="" style="margin-left: 10px" > 搜索</button>
                </form>
                <div><a href="<?php echo url('add'); ?>" class="btn btn-primary">新增</a></div>
                <thead>
                <tr>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>照片路径</th>
                    <th>身份证</th>
                    <th>年龄</th>
                    <th>家庭住址</th>
                    <th>婚姻</th>
                    <th>操作</th>

                </tr>
                </thead>
                <tbody>
                <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?>
                <tr>
                    <td><?php echo $data['name1']; ?></td>
                    <td><?php echo $data['Gender']; ?></td>
                    <td><img src="/uploads/<?php echo $data['imgurl']; ?>" alt="" width="100px" height="50px"></td>
                    <td><?php echo $data['card']; ?></td>
                    <td><?php echo $data['age']; ?></td>
                    <td><?php echo $data['address']; ?></td>
                    <td><?php echo $data['marry']; ?></td>
                    <td><a href="<?php echo url('edit','id='.$data['Id']); ?>">编辑</a>|<a href="<?php echo url('del','id='.$data['Id']); ?>">删除</a></td>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
            <div class="pagination"><?php echo $list->render(); ?></div>
        </div><!--/.fluid-container-->

        <!-- end: Content -->
    </div><!--/#content.span10-->
</div><!--/fluid-row-->

<div class="modal hide fade" id="myModal">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>Settings</h3>
    </div>
    <div class="modal-body">
        <p>Here settings can be configured...</p>
    </div>
    <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
        <a href="#" class="btn btn-primary">Save changes</a>
    </div>
</div>
<div class="clearfix"></div>

<footer>

    <p>
        <span style="text-align:left;float:left">&copy; 2018 <a href="downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">淄博交警</a></span>

    </p>

</footer>

<!-- start: JavaScript-->

<script src="__PUBLIC__js/jquery-1.9.1.min.js"></script>
<script src="__PUBLIC__js/jquery-migrate-1.0.0.min.js"></script>

<script src="__PUBLIC__js/jquery-ui-1.10.0.custom.min.js"></script>

<script src="__PUBLIC__js/jquery.ui.touch-punch.js"></script>

<script src="__PUBLIC__js/modernizr.js"></script>

<script src="__PUBLIC__js/bootstrap.min.js"></script>

<script src="__PUBLIC__js/jquery.cookie.js"></script>

<script src='__PUBLIC__js/fullcalendar.min.js'></script>

<script src='__PUBLIC__js/jquery.dataTables.min.js'></script>

<script src="__PUBLIC__js/excanvas.js"></script>
<script src="__PUBLIC__js/jquery.flot.js"></script>
<script src="__PUBLIC__js/jquery.flot.pie.js"></script>
<script src="__PUBLIC__js/jquery.flot.stack.js"></script>
<script src="__PUBLIC__js/jquery.flot.resize.min.js"></script>

<script src="__PUBLIC__js/jquery.chosen.min.js"></script>

<script src="__PUBLIC__js/jquery.uniform.min.js"></script>

<script src="__PUBLIC__js/jquery.cleditor.min.js"></script>

<script src="__PUBLIC__js/jquery.noty.js"></script>

<script src="__PUBLIC__js/jquery.elfinder.min.js"></script>

<script src="__PUBLIC__js/jquery.raty.min.js"></script>

<script src="__PUBLIC__js/jquery.iphone.toggle.js"></script>

<script src="__PUBLIC__js/jquery.uploadify-3.1.min.js"></script>

<script src="__PUBLIC__js/jquery.gritter.min.js"></script>

<script src="__PUBLIC__js/jquery.imagesloaded.js"></script>

<script src="__PUBLIC__js/jquery.masonry.min.js"></script>

<script src="__PUBLIC__js/jquery.knob.modified.js"></script>

<script src="__PUBLIC__js/jquery.sparkline.min.js"></script>

<script src="__PUBLIC__js/counter.js"></script>

<script src="__PUBLIC__js/retina.js"></script>

<script src="__PUBLIC__js/custom.js"></script>
<!-- end: JavaScript-->

</body>
</html>


