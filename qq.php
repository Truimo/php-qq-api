<?php
/**
 * QQ跳资料卡
 */
$qq = $_GET["qq"];  // 获取QQ
if (empty($qq)) {  // 判断qq是否为空
    echo '参数不能为空！';
    exit;
}
$url = "mqq://card/show_pslcard?src_type=internal&source=sharecard&version=1&uin=$qq";  // 资料卡
header("Location:$url");  // 302重定向
?>
<script type="text/javascript">
    setTimeout(function () {
        window.opener = null;
        window.close();
    }, 600);
</script>
