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
            <li class="active">social_club</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">社交圈</h1>
        </div>
    </div><!--/.row-->


    <div class="row">

        <div class="col-md-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    好友列表
                </div>
                <div class="panel-body" id="following_list">

                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="panel panel-primary" style="height: 15rem">
                <div class="panel-heading">
                    本周朋友圈排名
                </div>
                <div class="panel-body">
                    <p>第<span class="large color-orange" id="w_rank">7</span>名</p>
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    用户搜索
                </div>
                <div class="panel-body">
                    <div>
                        <input type="text" id="user_search" placeholder="请输入搜索的用户名">
                        <button class="btn btn-primary" id="submit">搜索</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
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
    $.ajax("/api/user/"+id+"/following/", {
        type: 'GET',
        async:false,
        datatype:'json',
        success: function (result) {
            data=JSON.parse(result);
            for(i=0;i<data.length;i++){
                $.ajax("/api/user/"+data[i].id, {
                    type: 'GET',
                    async:false,
                    datatype:'json',
                    success: function (td) {
                        temp=JSON.parse(td);
                        var tb="<div class=\"col-md-3\">"+
                            "<div class=\"panel panel-info\" style=\"height: 30rem\">"+
                            "<div class=\"panel-heading dark-overlay\">"+
                            "<a href=\"user_specific.php?uid="+temp.id+"\">"+temp.name+"</a>"+
                            "</div><div class=\"panel-body\">"+
                            "<p>"+temp.level+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;级</p>"+
                            "<p>"+temp.exp+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;经验</p>"+
                            "<p>"+temp.t_steps+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;steps</p>"+
                            "<p>"+temp.t_miles+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;miles</p>"+
                            "<p>"+temp.t_calorie+"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;calorie</p>"+
                            "<p>"+temp.profile+"</p>"+
                            "</div></div></div>";
                        $("#following_list").append(tb);
                    }
                });
            }

        }
    });

    $.ajax("/api/user/"+id+"/weekly_rank/", {
        type: 'GET',
        datatype: 'json',
        success: function (result) {
            data=JSON.parse(result);
            if(data.length==0){
                $("#w_rank").html(1);
            }else{
                $.ajax("/api/user/"+id+"/sport_record_weekly", {
                    type: 'GET',
                    datatype: 'json',
                    success: function (result) {
                        data1=JSON.parse(result);
                        rank=1;
                        for(i=0;i<data.length;i++){
                            if(data[i].w_steps>data1.w_steps){
                                rank++;
                            }
                        }
                        $("#w_rank").html(rank);
                    }
                });
            }
        }
    });

    $("#submit").on("click",function () {
        search=$("#user_search").val();
        window.location.href="user_search.php?search="+search;
    });
</script>


</body>