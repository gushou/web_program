 /*
 ajax常用操作
 */
 function http_init() //初始化xmlhttprequest对象
  {
    var http;
    if (window.XMLHttpRequest)
    {
      http = new XMLHttpRequest();
    }
    else
    {
      http = new ActiveXObject("Microsoft.XMLHTTP");
    }
    
    return http;
  }
  
  function http_connect(url,method,string,callback) //连接服务器
  {
     var http = http_init();
     if (!url || !method || (method != 'post' && method != 'get'))
        return;
     if (callback)
        http_return(http,callback);
     if (method == 'post')
     {
        http.open('post',url,true);
        http.setRequestHeader("Content-type","application/x-www-form-urlencoded");
        http.send(string);
     }
     else
     {
        http.open('get',url + '?' + string,true);
        http.send();
     }
  }
  
  function http_return(http,callback) //接受服务器响应
  {
    http.onreadystatechange = function()
    {
      if (http.readyState == 4 && http.status == 200)
         callback(http.responseText);
      else
         callback(null);
    }   
  }
 
//跳转到指定页
function jump_page(ele)
{
  var input_page = document.getElementById('input_page');
  location.href = ele.href + input_page.value;
}


//设置cookies
function set_cookie(name, value, expires)
{
  var d = new Date();
  if (expires != 0)
  {
    d.setTime(d.getTime() + 24 * 60 * 60 * 1000 * expires);
    document.cookie = name + '=' + escape(value) + ';expires=' + d.toUTCString();
  }
  else
  document.cookie = name + '=' + escape(value);
}

//获取cookies
function get_cookie(name)
{
  var string = document.cookie;
  if (string.length == 0)
     return null;
  var cookies_arr = string.split(';');
  for (var i = 0,temp; i < cookies_arr.length; ++i)
  {
     temp = cookies_arr[i].split('=');
     if (temp[0] == name)
     {
       return unescape(temp[1]);
     }
  }

  return null;
}

//删除cookies
function delete_cookie(name)
{
  var d = new Date();
  d.setTime(d.getTime()-1000);
  var value = get_cookie(name);
  if (value != null)
  {
     document.cookie = name + '=' + escape(value) + ';expires=' + d.toUTCString(); 
  }
}

/*去除首尾空格字符*/
function trim(str)
{
   str = str.replace(/(^\s+)|(\s+$)/g,'');
   return str;
}

function htmlspecialchars(str)
{
   str = str.replace(/( )|(\n)|(&)|(<)|(>)/g,
                    function(ch)
                    {
                       var temp = null;
                       switch (ch)
                       {
                          case ' ': temp = '&nbsp;'; break;
                          case "\n": temp = '</br>'; break;
                          case '&': temp = '&amp;'; break;
                          case '<': temp = '&lt;'; break;
                          case '>': temp = '&gt;'; break;
                          default:break;
                       }
                   
                       return temp;
                    }
   ); 
   
   return str;
}
