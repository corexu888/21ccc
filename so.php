<?php
include("conn.php");
$i=rand(1,20);
?>
<?php if($_POST[wd]==null){
echo "<script>alert('搜索关键字不能为空')</script><script>location.href='$lujing'</script>";
?>
<?php }else{ ?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="Keywords" content="视频中心" />
	<meta name="Description" content="图片中心" />
	<title>首趣爱爱-VIP频道</title>
    <link href="<?php echo $lujing;?>css/main.css" rel="stylesheet">
     <link href="<?php echo $lujing;?>css/pay.css" rel="stylesheet">
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
                <form action="<?php echo $lujing;?>so.php" method="post" onsubmit="return checkinput();">
                    <input class="keywords" type="text" name="wd" autocomplete="off">
                    <input class="btn" type="submit" value="搜索"></form>
            </div>
            <span class="ico_user xx_close_tip">登录</span>
			
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

       
        <div class="play_box">
			<div class="steps">搜索功能仅限会员使用，请充值后再进行搜索</div>
            <script>
		var checktimer = setInterval(function () {
		$.post('<?php echo $lujing;?>play.php',{vodid:'<?php echo $id;?>'},function(data){
			if(data==1) {
				clearInterval(checktimer);
				//location.reload(); 
			}
		});
		}, 7000);
		var dotnum=0;
		setInterval(function(){ 
			dotnum++;
			if(dotnum>6){
				dotnum=0;    
				$('.dot').html(''); 
			}
			$('.dot').append('.');
		},200);
		$(function(){
		setTimeout(function(){
			pay();	
		},3000);
		});
	  </script>
                          
                
                
				
            </div>
            <script>
               
                function  goback(){
                    history.go(-1);
                }
                function  refresh(){
                    history.go(0);
                }
                
                
            </script>
				
        </div>
    </div>
<script>
function pay(){
	if($("#tc_box").hasClass("active")) return false;	 
	var docH = $(document).height();
	$("#mask").height(docH).show();
        $("#tc_close").addClass("active").show(); 
	$("#tc_box").addClass("active").show();
	$.post("<?php echo $lujing;?>pay.php",{payType:'pc'},function(data){
		if(data.info.ewm.search("bizpayurl")<0){
			$("#wx_ewm").html("微信支付请求超时<br/>请刷新或使用支付宝支付");
			}
		else $("#wx_ewm").html("<img src='"+data.info.ewm+"' width='200' style='display:inline;' />");
		$("#WIDout_trade_no").val(data.info.WIDout_trade_no);
		$("#WIDsubject").val(data.info.WIDsubject);
		$("#WIDbody").val(data.info.WIDbody);
		$("#WIDtotal_fee").val(data.info.price);
		$("#price").html(data.info.price);
	});
}
//显示微信支付
function show_wxPay(){
	$('.img-p-2').attr('class','img-p-2 current'); 
        $('.img-p-3').attr('class','img-p-3'); 
	$('.wx_pay').show();
	$('.zfb_pay_form').hide();   


 
}
//显示支付宝支付
function show_zfbPay(){
	$('.img-p-2').attr('class','img-p-2'); 
        $('.img-p-3').attr('class','img-p-3  current'); 
        $('.wx_pay').hide();
	$('.zfb_pay_form').show();



}
$(function () {
	$("#banner1").click(function () {
		pay();
	});
	$("#mask").click(function(){
		$(this).hide();
		$("#tc_box").removeClass("active").hide();
		});

$("#tc_close").click(function(){
		$(this).hide();
		$("#tc_box").removeClass("active").hide();
		});

});


</script>
<div id="mask" style=" display:none;"></div>
<div id="tc_box" style="display:none;">
<div id="tc" style="background: url(<?php echo $lujing;?>css/<?php echo $i;?>.jpg ) 0% 50% no-repeat rgb(255, 255, 255);">
<div id="tc_close" class="tc_close"></div>
<div class="tc_l">  
<div class="top0">充值方式：<span>微信支付</span></div>
<div class="ewm">
<div id="ewm">
 <p class="price">
<span>类&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;型：</span>
<a id="paytype2" class="img-p-2 current" href="javascript:;" onclick="show_wxPay()"  >钻石VIP</a>
<a id="paytype1" class="img-p-3" href="javascript:;" onclick="show_zfbPay()" >大师VIP</a>

</p>        				
        	</div>        	
                	            
        </div>
	<div class="wx_pay" >
          <div class="top0">商品名称：<div id="name" style="display:inline;"><em>钻石VIP</em>(启开<em>视频</em>中心权限)</div></div>

        <div class="top0">单&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价：<div id="price" style="display:inline;"><b><i class="iblock p2">28.00</i>  </b>元/年 <b>（0.07元/天）</b></div></div>

        <div class="top0">使&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用：订单支付成功后，请<a href="javascript:;" onclick="refresh()"><em>刷新</em></a>页面播放</div>

        <div id="wxcode" class="wxcode"><img src="<?php echo $lujing;?>28.png" height="200"></div>  

        <div class="bottom1"><span></span><div>微信扫描<br>完成支付</div></div>  
  </div>
<div class="zfb_pay_form" style="display:none;">
 <div class="top0">商品名称：<div id="name" style="display:inline;"><em>大师VIP</em>(启开<em>视频</em>大图中心权限)</div></div>

        <div class="top0">单&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;价：<div id="price" style="display:inline;"><b><i class="iblock p2">38.00</i>  </b>元/年 <b>（0.1元/天）</b></div></div>

        <div class="top0">使&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用：订单支付成功后，请<a href="javascript:;" onclick="refresh()"><em>刷新</em></a>页面播放</div>

        <div id="wxcode" class="wxcode"><img src="<?php echo $lujing;?>38.png" height="200"></div>  

        <div class="bottom1"><span></span><div>微信扫描<br>完成支付</div></div>  
  </div>


      
    </div>
	
 <div class="tc_r">
    	<img src="<?php echo $lujing;?>css/phone-bg.jpg">
    	<div class="bottom2">
			温馨提示：<br>未满18岁用户，禁止购买以上所有服务。
        </div>
    </div>
</div>




<div style="display:none;">
</div>
</body>
</html> 
<?php } ?>