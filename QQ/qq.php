<?php
/* @浅小沫 QQ跳资料卡 www.20mo.cn */

// 获取QQ
$qq = $_GET["qq"];

// 判断qq是否为空
if(empty($qq)) {
    echo '参数不能为空！';
    exit;
}

// 资料卡
$zurl= 'mqq://card/show_pslcard?src_type=internal&source=sharecard&version=1&uin='.$qq ;

// 302重定向
header("Location:$zurl"); 

?>

<?php
// 次数
     $counter = intval(file_get_contents("dat/qq.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("dat/qq.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp);
 ?>
 
<script type="text/javascript">setTimeout("window.opener=null;window.close()",600);</script>
