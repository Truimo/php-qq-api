<?php
/**
 * 跳QQ群
 */
$uin = $_GET["uin"];  // 获取QQ
if (empty($uin)) {  // 判断qq是否为空
    echo '参数不能为空！';
    exit;
}
$url = "mqq://card/show_pslcard?src_type=internal&version=1&card_type=group&source=qrcode&uin=$uin";  // 群资料卡
header("Location:$url");  // 302重定向
?>
<script type="text/javascript">
    setTimeout(function () {
        window.opener = null;
        window.close();
    }, 600);
</script>
