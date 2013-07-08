<?php 
 if ($_FILES['file']['error'] > 0)
 {
    switch ($_FILES['file']['error'])
    {
       case 1:
             echo '文件大于指定长度，无法上传！';
	     break;
       case 3:
             echo '文件上传不完整!';
             break;
       case 4:
             echo '没有选择文件!';
	     break;
       default:break;

    }
    exit;	 
 }

 $upload_path = '../upload/file/'.$_FILES['file']['name'];
 if (is_uploaded_file($_FILES['file']['tmp_name']))
 {
    if (!move_uploaded_file($_FILES['file']['tmp_name'],$upload_path))	 
       echo '上传失败!'; 
    else
       echo '上传成功';
 }
 else
 {
    echo '文件名不合法!';	 
 }
?>
