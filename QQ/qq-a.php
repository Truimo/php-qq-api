

<?php

// @浅小沫 QQ头像  www.20mo.cn

// 获取QQ
$qq = $_GET['qq'];

// 判断qq是否为空
if(empty($qq)) {
    echo '参数不能为空！';
    exit;
}

//curl
        $curl = curl_init();
        $url = "https://ptlogin2.qq.com/getface?&imgtype=1&uin=" . $qq;
        curl_setopt($curl, CURLOPT_URL, $url);         
        curl_setopt($curl, CURLOPT_HEADER, 1);        //设置头文件的信息作为数据流输出
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);//设置获取的信息以文件流的形式返回，而不是直接输出
        $data = curl_exec($curl);
        curl_close($curl);
        $str1 = explode('&k=', $data);
        $str2 = explode('&s=', $str1[1]);
        $k = $str2[0];
        $qt = '//q1.qlogo.cn/g?b=qq&k=' . $k . '&s=100';

// 302跳转
header("Location:$qt"); 

?>

<?php
// 次数
     $counter = intval(file_get_contents("dat/qq_a.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("dat/qq_a.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>
