<?php
 /*获取公网ip运营商和地理位置信息*/
 function get_ip_info($ip)
 {
   $url = 'http://www.ip138.com/ips1388.asp?ip='.$ip.'&action=2';
   $content = @file_get_contents($url);
   if (!$content)
       return null;
   $content = iconv('gb2312','utf-8',$content);
   $pattern = '/本站主数据.*<li>/';
   preg_match($pattern,$content,$arr);
   if (sizeof($arr) != 0)
   {
      $arr[0] = str_replace('</li><li>','',$arr[0]);
      $arr[0] = str_replace('本站主数据：',' ',$arr[0]);
      return $arr[0];
   }
   else
      return null;
   echo $content;
 }
 ?>
