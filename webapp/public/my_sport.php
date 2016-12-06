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
            <li class="active">my_sport</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">运动情况一览</h1>
        </div>
    </div><!--/.row-->


    <div class="row">

        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    运动总量
                </div>
                <div class="panel-body">
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="panel panel-red panel-widget">
                            <div class="row no-padding">
                                <div class="col-sm-3 col-lg-5 widget-left">
                                    <em class="glyphicon glyphicon-fire glyphicon-l"></em>
                                </div>
                                <div class="col-sm-9 col-lg-7 widget-right">
                                    <div class="large" id="t_calorie">52</div>
                                    <div class="text-muted">燃烧卡路里</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="panel panel-blue panel-widget">
                            <div class="row no-padding">
                                <div class="col-sm-3 col-lg-5 widget-left">
                                    <em class="glyphicon glyphicon-map-marker glyphicon-l"></em>
                                </div>
                                <div class="col-sm-9 col-lg-7 widget-right">
                                    <div class="large" id="t_steps">347110</div>
                                    <div class="text-muted">运动总步数</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="panel panel-teal panel-widget">
                            <div class="row no-padding">
                                <div class="col-sm-3 col-lg-5 widget-left">
                                    <em class="glyphicon glyphicon-map-marker glyphicon-l"></em>
                                </div>
                                <div class="col-sm-9 col-lg-7 widget-right">
                                    <div class="large" id="t_miles">25.2</div>
                                    <div class="text-muted">运动总距离/km</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="panel panel-widget">
                            <div class="row no-padding">
                                <div class="col-sm-3 col-lg-5 widget-left">
                                    <em class="glyphicon glyphicon-calendar glyphicon-l"></em>
                                </div>
                                <div class="col-sm-9 col-lg-7 widget-right">
                                    <div class="large" id="t_days">234</div>
                                    <div class="text-muted">运动总天数</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    本周运动情况
                </div>
                <div class="panel-body">
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="panel panel-red panel-widget">
                            <div class="row no-padding">
                                <div class="col-sm-3 col-lg-5 widget-left">
                                    <em class="glyphicon glyphicon-fire glyphicon-l"></em>
                                </div>
                                <div class="col-sm-9 col-lg-7 widget-right">
                                    <div class="large" id="w_calorie">5</div>
                                    <div class="text-muted">燃烧卡路里</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="panel panel-blue panel-widget">
                            <div class="row no-padding">
                                <div class="col-sm-3 col-lg-5 widget-left">
                                    <em class="glyphicon glyphicon-map-marker glyphicon-l"></em>
                                </div>
                                <div class="col-sm-9 col-lg-7 widget-right">
                                    <div class="large" id="w_steps">347</div>
                                    <div class="text-muted">运动步数</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6 col-lg-3">
                        <div class="panel panel-teal panel-widget">
                            <div class="row no-padding">
                                <div class="col-sm-3 col-lg-5 widget-left">
                                    <em class="glyphicon glyphicon-map-marker glyphicon-l"></em>
                                </div>
                                <div class="col-sm-9 col-lg-7 widget-right">
                                    <div class="large" id="w_miles">15.2</div>
                                    <div class="text-muted">运动距离/km</div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-stats glyphicon-l"></span>运动历史
                </div>
                <div class="panel-body">
                    <div id="distance_chart"style="width: 90%;height:40rem;">
                    </div>
                    <div id="steps_chart"style="width: 90%;height:40rem;">
                    </div>
                    <div id="calorie_chart"style="width: 90%;height:40rem;">
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
    alert(hahah!!);
</script>
<script>

    id=$("#id").text();

    $.ajax("/api/user/"+id+"/sport_record_total", {
        type: 'GET',
        datatype: 'json',
        success: function (result) {
            data=JSON.parse(result);
            $("#t_steps").html(data.t_steps);
            $("#t_miles").html(data.t_miles);
            $("#t_calorie").html(data.t_calorie);
        }
    });
    $.ajax("/api/user/"+id+"/sport_days", {
        type: 'GET',
        datatype: 'json',
        success: function (result) {
            data=JSON.parse(result);
            $("#t_days").html(data.t_days);
        }
    });
    $.ajax("/api/user/"+id+"/sport_record_weekly", {
        type: 'GET',
        datatype: 'json',
        success: function (result) {
            data=JSON.parse(result);
            $("#w_steps").html(data.w_steps);
            $("#w_miles").html(data.w_miles);
            $("#w_calorie").html(data.w_calorie);
        }
    });


    $.ajax("/api/user/"+id+"/sport_record/", {
        type: 'GET',
        datatype: 'json',
        success: function (result) {
            data=JSON.parse(result);

            sd=[];
            md=[];
            cd=[];

            for(i=0;i<data.length;i++){
                sd.push([data[i].publish_date,data[i].steps]);
                md.push([data[i].publish_date,data[i].miles]);
                cd.push([data[i].publish_date,data[i].calorie]);
            }

            myChart = echarts.init(document.getElementById("distance_chart"));

            option = {
                title: {
                    text: '运动里程'
                },
                tooltip: {
                    trigger: 'axis'
                },
                xAxis: {
                    name: 'date',
                    type: 'time',
                    splitLine: {
                        show: true
                    }
                },
                yAxis: {
                    name: 'distance',
                    type: 'value',
                    boundaryGap: [0, '100%'],
                    splitLine: {
                        show: true
                    }
                },
                series: [{
                    name: '步行距离/km',
                    type: 'line',
                    showSymbol: false,
                    hoverAnimation: false,
                    data: md
                }]
            };

            // 使用刚指定的配置项和数据显示图表。
            myChart.setOption(option);

            myChart = echarts.init(document.getElementById("steps_chart"));

            option = {
                title: {
                    text: '运动步数'
                },
                tooltip: {
                    trigger: 'axis'
                },
                xAxis: {
                    name: 'date',
                    type: 'time',
                    splitLine: {
                        show: true
                    }
                },
                yAxis: {
                    name: 'steps',
                    type: 'value',
                    boundaryGap: [0, '100%'],
                    splitLine: {
                        show: true
                    }
                },
                series: [{
                    name: '步行步数/',
                    type: 'line',
                    showSymbol: false,
                    hoverAnimation: false,
                    data: sd
                }]
            };

            // 使用刚指定的配置项和数据显示图表。
            myChart.setOption(option);

            myChart = echarts.init(document.getElementById("calorie_chart"));

            option = {
                title: {
                    text: '消耗卡路里'
                },
                tooltip: {
                    trigger: 'axis'
                },
                xAxis: {
                    name: 'date',
                    type: 'time',
                    splitLine: {
                        show: true
                    }
                },
                yAxis: {
                    name: 'calorie',
                    type: 'value',
                    boundaryGap: [0, '100%'],
                    splitLine: {
                        show: true
                    }
                },
                series: [{
                    name: '消耗卡路里/千卡',
                    type: 'line',
                    showSymbol: false,
                    hoverAnimation: false,
                    data: cd
                }]
            };

            // 使用刚指定的配置项和数据显示图表。
            myChart.setOption(option);
        }
    });


</script>
</body>

</html>