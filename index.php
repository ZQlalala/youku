<?php

//dev add!
//add!!!

 require "youku.class.php";
 $url = "http://v.youku.com/v_show/id_XMTM0MDIwNjkyMA==.html";
 $data = Youku::parse($url);
 print_r($data);

?>