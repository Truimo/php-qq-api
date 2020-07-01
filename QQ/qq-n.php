
<?php

// @浅小沫 获取QQ昵称 www.20mo.cn

// 获取QQ
$qq = $_GET['qq'];

// 判断qq是否为空
if(empty($qq)) {
    echo '参数不能为空！';
    exit;
}

// curl
        $ch = curl_init();      
        $url = 'https://r.qzone.qq.com/fcg-bin/cgi_get_portrait.fcg?get_nick=1&uins=' . $qq; //地址
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/77.0.3865.90 Safari/537.36');
        $res = curl_exec($ch);                  //执行命令
        curl_close($ch);                            //关闭URL请求 
        $info = mb_convert_encoding($res, "UTF-8", "GBK");
        $name = json_decode(substr($info, 17, -1), true);
        $qn = $name[$qq][6];

// 输出
echo "QQ:" . $qq . ";name:". $qn;

?>

<?php
// 次数
     $counter = intval(file_get_contents("dat/qq_n.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("dat/qq_n.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>
