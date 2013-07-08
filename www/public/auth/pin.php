<?php
/*生成四位随机验证码*/
function create_pin_value()
{
  $lower = range('a','z');
  $upper = range('A','Z');
  $num = range(1,9);
  $arr = array_merge($lower,$upper,$num);
  shuffle($arr);
  $pin = '';
  $len = count($arr) - 1;
  for ($i = 0,$j; $i < 4; ++$i)
  {
    $j = rand(0,$len);
    $pin .= $arr[$j];
  }

  $_SESSION['register_pin'] = strtolower($pin);
  return $pin;
}

 class Image
 {
    public function __construct()
    {
      $this->image = ImageCreateTrueColor(100,30);
    }

    public function draw()
    {

      $bg = imagecolorallocate($this->image,56,96,96);
      imagefill($this->image,0,0,$bg);
      $black = imagecolorallocate($this->image,0,255,0);
      $pin = create_pin_value();
      for ($i = 1,$x = 15; $i <= 4; ++$i)
      {
         if ($i % 2 == 0)
            imagechar($this->image,5,$x,3,$pin{$i-1},$black);
         else
            imagechar($this->image,5,$x,10,$pin{$i-1},$black); 
	 $x += 20;
      }
      header("content-type:image/png");
      ImagePNG($this->image);
    }
    public function __destruct()
    {
       ImageDestroy($this->image);
    }

    private $image;
 }
 $image = new Image();
 $image->draw();
?>
