<?php
$z=rand(1000,900000);
$day=rand(100,1000);
include("conn.php");
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="Keywords" content="视频中心" />
	<meta name="Description" content="图片中心" />
	<title>首趣爱爱-VIP频道</title>
    <link href="<?php echo $lujing;?>css/main.css" rel="stylesheet">
    <script src="<?php echo $lujing;?>js/vodlist/jquery.js"></script>
<script type="text/javascript" src="<?php echo $lujing;?>js/cookie.js"></script> 
</head>
<body>
    <div class="header">
     
    </div>
    <div class="menu_list">
        <!--占位-->
        <span></span>
        <a href="<?php echo $lujing;?>" class="cur">首页</a>
		<a href='<?php echo $lujing;?>index/index/vodlist/id/1'>亚洲经典</a><a href='<?php echo $lujing;?>index/index/vodlist/id/2'>欧美经典 </a><a href='<?php echo $lujing;?>index/index/vodlist/id/3'>妻子另类</a><a href='<?php echo $lujing;?>index/index/vodlist/id/4'>女子校生</a><a href='<?php echo $lujing;?>index/index/vodlist/id/5'>制服丝袜</a><a href='<?php echo $lujing;?>index/index/vodlist/id/6'>经典有码</a><a href='<?php echo $lujing;?>index/index/vodlist/id/7'>经典三级</a><a href='<?php echo $lujing;?>index/index/vodlist/id/8'>偷拍自拍</a>        
		
    </div>
    <div class="con_box">
        <div class="toolbar">
            <a class="ico_back" href="javascript:goback();"></a>
            <a class="ico_refresh" href="javascript:;" onClick="refresh()"></a>
   <div class="ser">
                <form action="so.php" method="post" onsubmit="return checkinput();">
                    <input class="keywords" type="text" name="wd" autocomplete="off">
                    <input class="btn" type="submit" value="搜索"></form>
            </div>  <span class="ico_user xx_close_tip">登录</span>
			
        </div>
        
<script>
$(document).ready(function(e) {
    $(".xx_close_tip").click(function() {
        //$(this).hide();
	    $(".xx_login_box").show();
    });
	$(".close").click(function(e) {       
	    $(".xx_login_box").hide();
    });
});
</script>
<style>
	.xx_login { position:fixed; _position:absolute; top:10px; left:10px;}
	.xx_close_tip { display:block; width:30px; height:auto; overflow:hidden; word-break:break-all; font-size:20px; background-color:#1D7AD9; color:#fff; text-align:center; font-family:"微软雅黑"; padding:10px 0; cursor:pointer; }
    .xx_login_box { display:none;  position:fixed; top:100px; left:50%; z-index:9999; }
	.xx_login_box .login_box { width:300px;  border-radius:5px;  background-color:#f0f0f0; padding:20px;  border:1px solid #ddd; position:relative; left:-50%;}
	.xx_login_box p { margin-bottom:10px;}
	.xx_login_box p .input { width:100%; height:30px; border:1px solid #555; }
	.xx_login_box p .btn { width:100%; height:30px; background-color:#DD0737; color:#fff; cursor:pointer; }
	.xx_login_box .close { position:absolute; right:5px; top:5px;}
</style>
<div class="xx_login_box">
	<div class="login_box">
<span class="close" style="cursor:pointer;">关闭</span> 
<form action="<?php echo $lujing;?>index/index/login/" method="post">
    <p>登录账号：</p>
    <p><input type="text" class="input" name="name" placeholder="填写alipay或weixin交易订单号" ></p> 
    <p><input type="submit" value="登&nbsp;&nbsp;录" class="btn" /></p>
    <p>温馨提示：请输入alipay/weixin交易订单号登录</p>
</form>
</div>
</div>

        <div class="con_title"><strong>每日推荐</strong></div>
        <!--图片列表-->
        <div class="con_list clearfix">
            <div class="long_list">
            <ul>
<?php
for($i=1;$i<=2;$i++){ ?>
   <li><a href="<?php echo $lujing;?>index/index/play/vid/?<?php echo $i;?>" target="_blank">
                        <b class="level1"></b>
                        <img src="<?php echo $lujing;?>img/1/<?php echo $i;?>.jpg" class="litpic"><span><img class="title" style="" src="<?php echo $lujing;?>images/title/<?php echo $i;?>.gif" /></span><i class="imgbtn"></i></a> </li>
               <?php
}
?>
        

<?php
for($i=3;$i<=10;$i++){ ?>
   <li><a href="<?php echo $lujing;?>index/index/play/id/?<?php echo $i;?>" target="_blank">
                        <b class="<?php if($i%2===1){ echo "level4"; }else{ echo "";}?>"></b>
                        <img src="<?php echo $lujing;?>img/1/<?php echo $i;?>.jpg" class="litpic"><span><img class="title" style="" src="<?php echo $lujing;?>images/title/<?php echo $i;?>.gif" /></span><i class="imgbtn"></i></a> </li>
               <?php
}
?>
        

               <?php
for($i=11;$i<=20;$i++){ ?>
   <li><a href="<?php echo $lujing;?>index/index/play/id/?<?php echo $i;?>" target="_blank">
                        <b class="<?php if($i%2===1){ echo "level3"; }else{ echo "";}?>"></b>
                        <img src="<?php echo $lujing;?>img/1/<?php echo $i;?>.jpg" class="litpic"><span><img class="title" style="" src="<?php echo $lujing;?>images/title/<?php echo $i;?>.gif" /></span><i class="imgbtn"></i></a> </li>
               <?php
}
?>
              
                     
                      
                    
                
                
            </ul>
            </div>
        </div>
    </div>
<script>
    
    function  goback(){
        history.go(-1);
    }
    function  refresh(){
        history.go(0);
    }
    
</script>

</body>
</html>