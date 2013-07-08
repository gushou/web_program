<?php
/*
自定义的常用函数包括中文字符串截取!
*/

 /*  
 函数功能: 字符串截取,可用于文章固定字符显示.
 可以截出utf8中文汉字,并且不会造成乱码. 
 utf8是一种可变长字符编码,所占字节在1-6之间
 编码规则是:高位为0即为ascii字符，占一个字节，
 其他情况下高位有几个连续的1即占几个字节
 比如  高位为11110占4字节,本函数中用到了ord(string)函数
 它的功能是返回字符串首字符的asicc值，通过首字符
 的asicc值我们就可以判断该字符串所占字节数，然后截取。
 */
 function string_cut($str,$len)
 {
    if (!is_string($str) || empty($str)) 
       return '';

    if ( strlen($str) <= $len)
       return $str;
    else
    {
       $dest = '';
       $i = 0;
       $ascii = 0;
       $bit = array(0,6,14,30,62,126);
       while ($i < $len)
       {
          $ascii = ord(substr($str,$i,1));
          $j = 1;
          if (($ascii >> 7) != 0)
          {
            for (; $j < 6; ++$j)
            {
              if ( ($ascii >> (6-$j)) == $bit[$j]) 
                 break;
            }
            $j += 1;
          }
          $dest.= substr($str,$i,$j);
          $i += $j;
       }

       return $dest;
    }
 }

/*
时间函数
*/

/*生日计算*/
function get_birthday($time)
{	
   if ($time < 0)
      return;
   $birthday = (int)((time() - $time)/(365*24*3600));
   return $birthday;
}

/*把时间日期转换为时间戳，$flag为真表示有传入时间*/
function to_timestamp($flag, $arr)
{
   if ($flag)
   {
     $t = mktime($arr['h'],$arr['m'],$arr['s'],$arr['mon'],$arr['d'],$arr['y']);
   }
   else
   {
     $t = mktime(0,0,0,$arr['mon'],$arr['d'],$arr['y']);
   }

   return $t;
}

/*把时间戳转换为，日期和时间*/
function to_time($flag,$time)
{
  if ($flag)
  {
     $t = date('Y年m月d日 H:i:s',$time);
  }
  else
  {
     $t = date('Y年m月d日',$time);
  }

  return $t;
}

/*隐藏ip尾数,比如把10.1.1.254格式化为10.1.1.*这样的形式*/
function format_ip($ip)
{
   $pos = strripos($ip,'.');
   $result = substr_replace($ip,'*',$pos+1);
   return $result;
}

/*SALT为干扰字符串*/
define('SALT','hkibwaty');

/*生成一个随机token*/
function get_rand_token()
{
  $token = md5(uniqid(SALT,true));
  return $token;
}

/*在密码前加入SALT,并用md5加密*/
function get_salt_pwd($pwd)
{
  return md5(SALT.$pwd);
}

