<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="<?php echo ($keywords); ?>">
    <meta name="description" content="<?php echo ($des); ?>">

    <title><?php echo ($title); ?></title>

    <!-- Bootstrap -->
    <link href="/Cherry/Public/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="<?php echo ($logo); ?>" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="/Cherry/Public/dist/css/styles.css">
    
    <style>
      body{
        background: #f5f8fa;
      }
      #header-center{
        margin: 5px auto;
      }
      #header{
        background: <?php echo ($color); ?>;
      }
      #searchbtn{
        color: #fff;
      }
      #login , #reg{
        border: 1px solid transparent;
        border-radius: 5px;
        border: 1px solid rgba(255,255,255,0.3);
        font-size: 16px;
        font-weight: 200;
        color: #fff;
        padding: 10px 35px;
        margin-left:10px;
        margin-top:4px;
        width: 104px;
      }
      #login{
        background: rgba(255,255,255,0.3);
      }
      #login:hover , #reg:hover{
        color: <?php echo ($color); ?>;
        background: #fff;
      }
      .tweet{
        background-color: #fff;
        border-radius: 4px;
        border: 1px solid #e1e8ed;
        /*box-sizing: border-box;*/
        width: 370px;
        cursor: pointer;
        position: relative;
        min-height: 51px;
        line-height: 18px;
        margin-bottom: 20px;
      }
      .head-content{
        margin: 10px auto;
        width: 340px;
        position: relative;
      }
      .body-content{
        width: 340px;
        position: relative;
        margin: 0px auto 10px;

      }
      .head-content a img{
        height: 28px;
        margin-left: 0;
        margin-right: 5px;
        width: 28px;
        float: left;
        margin-top: 3px;
      }
      .username{
        font-weight: bold;
        color: #292f33;
      }

      .tweet .time{
        position: absolute;
        right: 0;
        top: 0;
        color: #8899a6;
        font-size: 13px;
      }
      .clearfix:before, .clearfix:after{
        display:table;
        content:' ';
      }

      .clearfix:after{
        clear:both;
      }
      form input:focus {
        color: <?php echo ($color); ?> !important;
      }

     
    </style>

  </head>
  <body>
    <nav id="header" class="navbar navbar-default navbar-fixed-top" role="navigation" style="overflow:hidden;min-height: 200px;">
      <div id="header-center" class="container container-fluid">
        <div class="navbar-header">
          <button style="background:none;" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" style="border-color:#FFF;">
            <span class="sr-only" style="background:#FFF;">Toggle navigation</span>
            <span class="icon-bar" style="background:#FFF;"></span>
            <span class="icon-bar" style="background:#FFF;"></span>
            <span class="icon-bar" style="background:#FFF;"></span>
          </button>
          <a style="padding:0;" class="navbar-brand" href="#"><img src="/Cherry/Public/images/logo.png" width=40></a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">         
          <ul class="nav navbar-nav navbar-right">
            <li><a id="reg" href="#">注册</span></a></li>
            <li><a id="login" href="#">登录</a></li>
          </ul>
          <div id="Ctitle" style="text-align:center;position:relative;top:20px;width:400px;margin:0 auto">
            <h2 style="font-size: 45px;">有什么新鲜事？</h2>
          </div>
            
        </div>
        <div id="head-search" style="margin-top:50px;text-align:center;">
          <form class="navbar-form form">
            <div class="form-group">
              <input style="font-size:18px;border:none;color:#fff;width:400px;border-radius:15px;background-color: rgba(255, 255, 255, 0.4);" type="text" class="form-control" placeholder="用户名/微博内容">
            </div>
            <button style="border:none;color:<?php echo ($color); ?>;background:none;font-size:20px;" type="submit" class="btn btn-default">
              <span id="searchbtn" class="glyphicon glyphicon-search"></span>
            </button>
          </form>
        </div>
      </div>
      <ul class="bg-bubbles">
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </nav>

    <div class="container" style="margin-top:210px;">
      <div class="row masonry">
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1j6niRVIAA3BjN.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              [精选回一月七日。今天是10个遇难学生的生日，他们是：陈丹，陈冬梅，丁雪梅，李茹，孙红梅，王铭祥，王心怡，魏宇，吴强，钟金萍。
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
          	<div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1lp5HrXgAM3xR3.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              一月七日。今天是10个遇难学生的生日，他们是：陈丹，陈冬梅，丁雪梅，李茹，孙红梅，王铭祥，王心怡，魏宇，吴强，钟金萍。
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1iFFn-VEAAO_wU.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              Grand adventures are headed to the big screen in 2017.
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1j6niRVIAA3BjN.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              [精选回一月七日。今天是10个遇难学生的生日，他们是：陈丹，陈冬梅，丁雪梅，李茹，孙红梅，王铭祥，王心怡，魏宇，吴强，钟金萍。
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
          	<div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1iFFn-VEAAO_wU.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              一月七日。今天是10个遇难学生的生日，他们是：陈丹，陈冬梅，丁雪梅，李茹，孙红梅，王铭祥，王心怡，魏宇，吴强，钟金萍。
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1iFFn-VEAAO_wU.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              Grand adventures are headed to the big screen in 2017.
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1j6niRVIAA3BjN.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              [精选回一月七日。今天是10个遇难学生的生日，他们是：陈丹，陈冬梅，丁雪梅，李茹，孙红梅，王铭祥，王心怡，魏宇，吴强，钟金萍。
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1lp5HrXgAM3xR3.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              一月七日。今天是10个遇难学生的生日，他们是：陈丹，陈冬梅，丁雪梅，李茹，孙红梅，王铭祥，王心怡，魏宇，吴强，钟金萍。
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1iFFn-VEAAO_wU.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              Grand adventures are headed to the big screen in 2017.
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1j6niRVIAA3BjN.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              [精选回一月七日。今天是10个遇难学生的生日，他们是：陈丹，陈冬梅，丁雪梅，李茹，孙红梅，王铭祥，王心怡，魏宇，吴强，钟金萍。
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1lp5HrXgAM3xR3.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              一月七日。今天是10个遇难学生的生日，他们是：陈丹，陈冬梅，丁雪梅，李茹，孙红梅，王铭祥，王心怡，魏宇，吴强，钟金萍。
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1iFFn-VEAAO_wU.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              Grand adventures are headed to the big screen in 2017.
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1j6niRVIAA3BjN.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              [精选回一月七日。今天是10个遇难学生的生日，他们是：陈丹，陈冬梅，丁雪梅，李茹，孙红梅，王铭祥，王心怡，魏宇，吴强，钟金萍。
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1lp5HrXgAM3xR3.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              一月七日。今天是10个遇难学生的生日，他们是：陈丹，陈冬梅，丁雪梅，李茹，孙红梅，王铭祥，王心怡，魏宇，吴强，钟金萍。
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 item">
          <div class="tweet">
            <div style="max-height: 276px;overflow:hidden;border-radius: 5px 5px 0 0;">
              <img src="https://pbs.twimg.com/media/C1iFFn-VEAAO_wU.jpg" style="width: 100%;">
            </div>
            <div class="head-content">
              <a href="" class="clearfix">
                <img src="https://pbs.twimg.com/profile_images/728210306862702592/LReC0a39_bigger.jpg">
                <strong class="username">G.E.M</strong>
              </a>
              <small class="time">22小时</small>
            </div>
            <div class="body-content">
              Grand adventures are headed to the big screen in 2017.
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="/Cherry/Public/dist/js/jquery-2.1.4.min.js"></script>
  <script src="/Cherry/Public/dist/js/bootstrap.min.js"></script>
  <script src="/Cherry/Public/dist/js/masonry.pkgd.min.js"></script>
  <script src="/Cherry/Public/dist/js/imagesloaded.pkgd.min.js"></script>
  
  <script>
    $(function(){
      // 瀑布流
      $('.masonry').imagesLoaded(function() {
        $('.masonry').masonry({
        itemSelector: '.item'
        });
      });

      var keys = 0;
      $(window).scroll(function(){
        if (keys) {
          if ($(document).scrollTop() < 50) {
            $('#header').animate({
              'min-height':'200px',
            });
            $('#head-search').animate({
              'margin-top':'50px',
            })

            $('#Ctitle').animate({'top':'20px'});
            keys = 0;
          }
        }else{
          if ($(document).scrollTop() > 50) {
            $('#header').animate({
              'min-height':'0px',
            });
            $('#head-search').animate({
              'margin-top':'0px',
            })
            $('#Ctitle').animate({'top':'-10px'});
            keys = 1;
          }
        }
        
        // 获得视口高度
        var viewHeight = document.documentElement.clientHeight;
        // 计算滚落距离底部位置 并判读是否执行事件发送请求
        if ($(document).innerHeight()- viewHeight- $(document).scrollTop() < 1) {
          console.log(1);
        }
      })
    })
  </script>
  </body>
</html>