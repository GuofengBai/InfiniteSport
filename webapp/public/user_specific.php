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
            <li class="active">user_specific</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">用户详情</h1>
        </div>
    </div><!--/.row-->


    <div class="row">
        <div class="col-md-5">
            <div class="panel panel-success">
                <div class="panel-heading" id="name">
                    小沈阳
                </div>
                <div class="panel-body">
                    <p>用户id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="large color-blue" id="uid">ff33</span></p>
                    <p>用户等级&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="large color-blue" id="level">ff33</span></p>
                    <p>用户经验&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="large color-blue" id="exp">ff33</span></p>
                    <p>总运动天数&nbsp;&nbsp;<span class="large color-teal" id="t_days">84</span></p>
                    <p>总步数&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="large color-teal" id="t_steps">333333</span></p>
                    <p>总长度/km&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="large color-teal" id="t_miles">333333</span></p>
                    <p>总消耗卡路里/千卡&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="large color-teal" id="t_calorie">333333</span></p>
                    <label>email</label>
                    <p class="large" id="email">asc@</p>
                    <label>个人描述</label>
                    <p style="height: 15rem" id="profile">niasncianscianscinasicnaisciasncasinc</p>
                    <button class="btn btn-primary pull-right" id="submit">关注</button>
                </div>
            </div>
        </div><!-- /.row -->
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    发起的活动
                </div>
                <div class="panel-body" id="c_list">

                </div>

            </div>
            <div class="panel panel-default">
                <div class="panel-heading">
                    参与的活动
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
    id=$("#id").text();
    var str = window.location.search;
    var index = str.indexOf("=");
    var uid = str.substring(index + 1);
    if(id==uid){
        window.location.href="my_profile.php";
    }

    $.ajax("/api/user/"+uid, {
        type: 'GET',
        async:false,
        datatype:'json',
        success: function (result) {

            data=JSON.parse(result);

            $("#name").html(data.name);
            $("#uid").html(data.id);
            $("#level").html(data.level);
            $("#exp").html(data.exp);
            $("#t_days").html(data.t_days);
            $("#t_steps").html(data.t_steps);
            $("#t_miles").html(data.t_miles);
            $("#t_calorie").html(data.t_calorie);
            $("#email").html(data.email);
            $("#profile").html(data.profile);

        }
    });

    $.ajax("/api/user/"+uid+"/activity_created/", {
        type: 'GET',
        async:false,
        datatype:'json',
        success: function (result) {

            data=JSON.parse(result);

            for(i=0;i<data.length;i++){
                var tb="<div class=\"panel panel-teal panel-widget\">"+
                    "<div class=\"row no-padding\">"+
                    "<div class=\"col-sm-6 col-lg-6 widget-left\">"+
                "<a href=\"activity_specific.php?aid="+data[i].id+"\"class=\"large text-success\">"+data[i].name+"</a>"+
                    "</div>"+
                    "<div class=\"col-sm-2 col-lg-2 widget-right\">"+
                    "<p><span class=\"large\">"+data[i].t_steps+"</span>步</div>"+
                    "</div></div>";
                $("#c_list").append(tb);
            }

        }
    });

    $.ajax("/api/user/"+uid+"/activity_joined/", {
        type: 'GET',
        async:false,
        datatype:'json',
        success: function (result) {

            data=JSON.parse(result);

            for(i=0;i<data.length;i++){
                var tb="<div class=\"panel panel-teal panel-widget\">"+
                    "<div class=\"row no-padding\">"+
                    "<div class=\"col-sm-6 col-lg-6 widget-left\">"+
                    "<a href=\"activity_specific.php?aid="+data[i].id+"\"class=\"large text-success\">"+data[i].name+"</a>"+
                    "</div>"+
                    "<div class=\"col-sm-2 col-lg-2 widget-right\">"+
                    "<p><span class=\"large\">"+data[i].t_steps+"</span>步</div>"+
                    "</div></div>";
                $("#j_list").append(tb);
            }

        }
    });

    $.ajax("/api/user/"+id+"/following/", {
        type: 'GET',
        async:false,
        datatype:'json',
        success: function (result) {

            data=JSON.parse(result);

            fo=0;

            for(i=0;i<data.length;i++){
                if(uid==data[i].id){
                    fo=1;
                    break;
                }
            }

            if(fo==0){
                $("#submit").html("关注");
                $("#submit").on("click",function () {
                    $.ajax("/api/user/"+id+"/following/", {
                        type: 'POST',
                        data: {followingid:uid},
                        async:false,
                        success: function (result) {
                            data=JSON.parse(result);
                            if(data.status=="false"){
                                alert(data.detail);
                            }else{
                                window.location.href="user_specific.php?uid="+uid;
                            }
                        }
                    });
                });
            }else{
                $("#submit").html("取消关注");
                $("#submit").on("click",function () {
                    $.ajax("/api/user/"+id+"/following/", {
                        type: 'DELETE',
                        data: {followingid:uid},
                        async:false,
                        success: function (result) {
                            window.location.href="user_specific.php?uid="+uid;
                        }
                    });
                });
            }

        }
    });



</script>


</body>