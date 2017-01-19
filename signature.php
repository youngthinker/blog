<?php 
   require_once("jssdk.php");
//    AppId                 wx57daba9a1a979092
// AppSecret(应用密钥)   260896a58758eb9547a871b22b1f8c4e
   $sdk = new JSSDK("wx21e58ae5683c4ba2","7573cd75058d5689b30b6ca2accfc33b");
   $config =  $sdk -> getSignPackage($_POST["url"]);

   echo json_encode($config); //'{a:12,n:44}' C2sxe-cZzP9dE6DwFvQRHWEr0iPSeIW5uNBBRleh0OfOOCbSVo8XlGQJ9hG_rzpr0XeWykOUx9xMb2qGX1dXyETRoDv0bSFQzw4SaXgguZRA3uZqwUi2KCHWE9aGsAt0WXKcAIAABO
?>
