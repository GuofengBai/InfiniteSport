<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['id'])){
    header("Location:login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Infinite Sport</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><span>Infinite</span>Sport</a>
            <ul class="user-menu">
                <li class="dropdown pull-right">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span><span id="id"><?php echo $_SESSION["id"]?></span><span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="./my_profile.php"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
                        <li><a href="./my_setting.php"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
                        <li><a href="/api/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>

    </div><!-- /.container-fluid -->
</nav>

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
    <ul class="nav menu">
        <li><a href="main.php"><span class="glyphicon glyphicon-dashboard"></span> Dashboard</a></li>
        <li role="presentation" class="divider"></li>
        <li class="parent ">
            <a href="#">
                <span class="glyphicon glyphicon-list"></span> 运动管理 <span data-toggle="collapse" href="#sport-sub" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
            </a>
            <ul class="children collapse" id="sport-sub">
                <li>
                    <a class="" href="my_sport.php">
                        <span class="glyphicon glyphicon-share-alt"></span> 我的运动
                    </a>
                </li>
                <li>
                    <a class="" href="body_watcher.php">
                        <span class="glyphicon glyphicon-share-alt"></span> 健康监控
                    </a>
                </li>
                <li>
                    <a class="" href="fitness_trace.php">
                        <span class="glyphicon glyphicon-share-alt"></span> 运动目标
                    </a>
                </li>
                <li>
                    <a class="" href="sleeping_detection.php">
                        <span class="glyphicon glyphicon-share-alt"></span> 睡眠监测
                    </a>
                </li>
            </ul>
        </li>
        <li role="presentation" class="divider"></li>
        <li class="parent ">
            <a href="#">
                <span class="glyphicon glyphicon-list"></span> 活动管理 <span data-toggle="collapse" href="#activity-sub" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
            </a>
            <ul class="children collapse" id="activity-sub">
                <li>
                    <a class="" href="my_activity.php">
                        <span class="glyphicon glyphicon-share-alt"></span> 我的活动
                    </a>
                </li>
                <li>
                    <a class="" href="all_activity.php">
                        <span class="glyphicon glyphicon-share-alt"></span> 活动一览
                    </a>
                </li>
                <li>
                    <a class="" href="new_activity.php">
                        <span class="glyphicon glyphicon-share-alt"></span> 新的活动
                    </a>
                </li>
            </ul>
        </li>
        <li role="presentation" class="divider"></li>
        <li class="parent ">
            <a href="#">
                <span class="glyphicon glyphicon-list"></span> 社交圈 <span data-toggle="collapse" href="#social-sub" class="icon pull-right"><em class="glyphicon glyphicon-s glyphicon-plus"></em></span>
            </a>
            <ul class="children collapse" id="social-sub">
                <li>
                    <a class="" href="social_club.php">
                        <span class="glyphicon glyphicon-share-alt"></span> 社交圈
                    </a>
                </li>
                <li>
                    <a class="" href="user_search.php">
                        <span class="glyphicon glyphicon-share-alt"></span> 用户搜索
                    </a>
                </li>
            </ul>
        </li>
        <li role="presentation" class="divider"></li>
    </ul>
</div><!--/.sidebar-->

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="main.php"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">my_profile</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">我的档案</h1>
        </div>
    </div><!--/.row-->


    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading"><span class="glyphicon glyphicon-edit"></span>我的档案</div>
                <div class="panel-body">
                    <div class="form-horizontal">
                        <fieldset>
                            <!-- Name input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="name">我的昵称</label>
                                <div class="col-md-9">
                                    <input id="name" name="name" type="text" value="ninininin" class="form-control" readonly="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="uid">我的id</label>
                                <div class="col-md-9">
                                    <input id="uid" name="uid" type="text" value="ascasc" class="form-control" readonly="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="uid">我的等级</label>
                                <div class="col-md-9">
                                    <input id="level" name="level" type="number" value="ascasc" class="form-control" readonly="true">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label" for="uid">我的经验</label>
                                <div class="col-md-9">
                                    <input id="exp" name="exp" type="number" value="ascasc" class="form-control" readonly="true">
                                </div>
                            </div>

                            <!-- Email input-->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="email">我的E-mail</label>
                                <div class="col-md-9">
                                    <input id="email" name="email" type="text" placeholder="Please enter your email" class="form-control">
                                </div>
                            </div>

                            <!-- Message body -->
                            <div class="form-group">
                                <label class="col-md-3 control-label" for="message">我的个人描述</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="profile" name="profile" placeholder="Please enter your message here..." rows="5"></textarea>
                                </div>
                            </div>

                            <!-- Form actions -->
                            <div class="form-group">
                                <div class="col-md-12 widget-right">
                                    <button id="submit" class="btn btn-primary btn-md pull-right">Submit</button>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                </div>
            </div>
        </div>

    </div><!-- /.row -->

</div><!--/.main-->

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/chart.min.js"></script>
    <script src="js/chart-data.js"></script>
    <script src="js/easypiechart.js"></script>
    <script src="js/easypiechart-data.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/echarts.min.js"></script>
    <script>
        !function ($) {
            $(document).on("click","ul.nav li.parent > a > span.icon", function(){
                $(this).find('em:first').toggleClass("glyphicon-minus");
            });
            $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
        }(window.jQuery);

        $(window).on('resize', function () {
            if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
        })
        $(window).on('resize', function () {
            if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
        })
    </script>
<script>
    id=$("#id").text();
    $.ajax("/api/user/"+id, {
        type: 'GET',
        async:false,
        datatype:'json',
        success: function (result) {

            data=JSON.parse(result);

            $("#name").val(data.name);
            $("#uid").val(data.id);
            $("#level").val(data.level);
            $("#exp").val(data.exp);
            $("#email").val(data.email);
            $("#profile").val(data.profile);
        }
    });

    $("#submit").on("click",function () {
        em=$("#email").val();
        pro=$("#profile").val();
        val={
            email:em,
            profile:pro
        };
        $.ajax("/api/user/"+id, {
            type: 'PUT',
            async:false,
            data:val,
            success: function (result) {
                alert("更新成功");
                window.location.href="my_profile.php";
            }
        });
    });


</script>


</body>