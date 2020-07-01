

<?php
/* @浅小沫 跳QQ群  www.20mo.cn*/

// 获取QQ
$uin = $_GET["uin"];

// 判断qq是否为空
if(empty($uin)) {
    echo '参数不能为空！';
    exit;
}

// 群资料卡
$zurl= 'mqq://card/show_pslcard?src_type=internal&version=1&card_type=group&source=qrcode&uin='.$uin ;

// 302重定向
header("Location:$zurl"); 

?>


<?php
// 次数
     $counter = intval(file_get_contents("dat/qq_qun.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("dat/qq_qun.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>
 
 
<script type="text/javascript">setTimeout("window.opener=null;window.close()",600);</script>
