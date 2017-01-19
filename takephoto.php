<?php 
   require_once("jssdk.php");
//    AppId                 wx57daba9a1a979092
// AppSecret(应用密钥)   260896a58758eb9547a871b22b1f8c4e
   $sdk = new JSSDK("wxbc8c1286779a42be","68e1fb0960ff2ba69a634251a2f5aa22");
   $config =  $sdk -> getSignPackage();
?>

<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<style>
        html,body{
        	height:100%;
        }
        body{
        	margin:0;
        	overflow: hidden;
        	display: flex;
        	flex-direction:column;
        }

        header,footer{
        	height: 10%;
        	background: #000;
        	color: #fff;
        	display: flex;
        	justify-content:center;
        	align-items:center;
        }

        section{
        	flex:1;
        	background: #ff0;
        }
	</style>
</head>
<body>
	<header>
		<h3>photo</h3>
	</header>
	<section></section>
	<footer>
		<button id="btn">take photo</button>
	</footer>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
	<script>
         //写自己的逻辑

         wx.config({
         	appId : '<?php echo $config["appId"]?>',
         	timestamp : '<?php echo $config["timestamp"]?>',
         	nonceStr : '<?php echo $config["nonceStr"]?>',
         	signature : '<?php echo $config["signature"]?>',
         	jsApiList : [
         		"chooseImage"
         	]
         });

         wx.ready(function(){
         	document.querySelector("#btn").onclick = function(){
         		wx.chooseImage({
         			count : 1,
         			sourceType : ["camera"],
         			success : function(res){
                       // res.localIds 
                       var preview = document.querySelector("section");
                       preview.style.backgroundImage = "url("+res.localIds[0]+")";
                       preview.style.backgroundSize = "cover";

         			}
         		})
         	}
         })






	</script>
</body>
</html>