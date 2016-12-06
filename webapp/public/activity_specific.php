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
            <li class="active">activity_specific</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">活动详情</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-success">
                <div class="panel-heading" id="aname">
                    大家一起嗨
                </div>
                <div class="panel-body">
                    <p>created by&nbsp;&nbsp;&nbsp;&nbsp;<a class="large color-blue" id="acreator">尼古拉斯赵四</a></p>
                    <p>from&nbsp;&nbsp;&nbsp;<span class="large color-teal" id="sdate">2016-09-23</span></p>
                    <p>to&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="large color-teal" id="edate">2016-09-30</span></p>
                    <p>奖励&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="large color-teal" id="bonus">2016-09-30</span></p>
                    <label>活动描述</label>
                    <p id="adesc" style="height: 15rem">niasncianscianscinasicnaisciasncasinc</p>
                    <button class="btn btn-primary pull-right" id="submit">参与</button>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    参与者一览
                </div>
                <div class="panel-body" id="j_list">

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
        $(document).ready(function () {
                var str = window.location.search;
                var index = str.indexOf("=");
                var aid = str.substring(index + 1);
                aid=parseInt(aid);
                var uid=$("#id").text();
                $.ajax("/api/activity/"+aid, {
                    type: 'GET',
                    async:false,
                    success: function (result) {
                        data=JSON.parse(result);
                        $("#aname").html(data.aname);
                        $("#acreator").html(data.creator);
                        $("#acreator").attr("href","user_specific.php?uid="+data.creator);
                        $("#sdate").html(data.start_date);
                        $("#edate").html(data.end_date);
                        $("#bonus").html(data.bonus);
                        $("#adesc").html(data.description);

                        var ty=0;
                        if(uid==data.creator){
                            ty=1;
                            $("#submit").html("销毁活动");
                            $("#submit").on("click",function () {
                                $.ajax("/api/activity/"+aid, {
                                    type: 'DELETE',
                                    async:false,
                                    success: function (result) {
                                        window.location.href="my_activity.php";
                                    }
                                });
                            });
                        }

                        $.ajax("/api/activity/"+aid+"/joiner/", {
                            type: 'GET',
                            async:false,
                            success: function (result) {
                                data=JSON.parse(result);

                                if(ty==0){
                                    ty=3;
                                    for(i=0;i<data.length;i++){
                                        if(uid==data[i].id){
                                            ty=2;
                                            break;
                                        }
                                    }
                                }
                                if(ty==2){
                                    $("#submit").html("退出活动");
                                    $("#submit").on("click",function () {
                                        $.ajax("/api/user/"+uid+"/activity/"+aid, {
                                            type: 'DELETE',
                                            async:false,
                                            success: function (result) {
                                                window.location.href="my_activity.php";
                                            }
                                        });
                                    });
                                }else if(ty==3){
                                    $("#submit").html("加入活动");
                                    $("#submit").on("click",function () {
                                        $.ajax("/api/user/"+uid+"/activity/", {
                                            type: 'POST',
                                            data:{a_id:aid},
                                            async:false,
                                            success: function (result) {
                                                data=JSON.parse(result);
                                                if(data.status=="ok"){
                                                    window.location.href="my_activity.php";
                                                }else {
                                                    alert(data.detail);
                                                }
                                            }
                                        });
                                    });
                                }

                                for(i=0;i<data.length;i++){
                                    var tb="<div class=\"panel panel-teal panel-widget\">"+
                                        "<div class=\"row no-padding\">"+
                                        "<div class=\"col-sm-1 col-lg-1 widget-left\">"+
                                        "<em class=\"large\">"+(i+1)+"</em>"+
                                        "</div>"+
                                        "<div class=\"col-sm-3 col-lg-3 widget-right\">"+
                                        "<div class=\"large\"><a href=\"user_specific.php?uid="+data[i].id+"\">"+data[i].id+"</a></div>"+
                                        "</div>"+
                                        "<div class=\"col-sm-2 col-lg-2 widget-right\">"+
                                        "<p><span class=\"large\">"+data[i].t_steps+"</span>步</div>"+
                                        "</div></div>";
                                    $("#j_list").append(tb);
                                }
                            }
                        });

                }
            });

            }
        );
    </script>

</body>