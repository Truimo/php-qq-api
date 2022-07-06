<?php
/**
 * 获取QQ昵称
 */
$qq = $_GET['qq'];  // 获取QQ
if (empty($qq)) {  // 判断qq是否为空
    echo '参数不能为空！';
    exit;
}
$ch = curl_init();  // curl
$url = 'https://r.qzone.qq.com/fcg-bin/cgi_get_portrait.fcg?get_nick=1&uins=' . $qq;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36');
$res = curl_exec($ch);
curl_close($ch);
$info = mb_convert_encoding($res, "UTF-8", "GBK");
$name = json_decode(substr($info, 17, -1), true);
$qn = $name[$qq][6];
// 输出
echo "QQ:" . $qq . ";name:" . $qn;
