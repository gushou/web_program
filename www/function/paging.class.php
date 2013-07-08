<?php
  class Paging
  {
    public function __construct($total_nums,$url,$show_nums = 10,$keyword = '留言')
    {
      $this->total_nums = $total_nums;
      $this->show_nums = $show_nums;
      $this->keyword = $keyword;
      $this->current_page = null; 
      $this->total_page = null; 
      $this->url = $url;
    }
    
    public function get_page()
    {
       
          if ($this->total_nums % $this->show_nums == 0)
             $page = (int)($this->total_nums / $this->show_nums);
          else
          {
             if ($this->total_nums < $this->show_nums)
                 $page = 1;
             else
                 $page = (int)($this->total_nums / $this->show_nums) + 1;
          }
	  $this->total_page = $page;
       return $page;
    }

    public function get_current_page()
    {
         if (isset($_GET['page'])) 
         $this->current_page = $_GET['page'];
         if ($this->current_page == null || empty($this->current_page))
         $this->current_page = 1;
         $this->current_page = (int)($this->current_page);
         if ($this->current_page <= 0)
         $this->current_page = 1;
         if ($this->current_page > $this->total_page)
         $this->current_page = $this->total_page;
	 return $this->current_page;
    }

    public function output()
    {
       $page = $this->total_page;
       $cur = $this->current_page;
       $first = $this->url.'1';
       $last = $this->url.$page;
       $previous = $this->url.($this->current_page - 1);
       $next = $this->url.($this->current_page + 1);
       $cur_url = $this->url.$this->current_page;
       echo '<div class="paging">';

        if ($this->current_page > 1)
       {
	  echo "<a href='$first'>首页</a>";
          echo "<a href='$previous'>上一页</a>"; 
       }
       if ($this->current_page % 10 == 1)
       {
         echo "<a   class='selected'>$cur</a>";
         for ($i = $this->current_page + 1; $i < $this->current_page + 10 && $i <= $page; ++$i)
	      echo '<a href="'.$this->url.$i.'">'.$i.'</a>';
       }
       else if ($this->current_page % 10 == 0)
       {
          for ($i = $this->current_page - 9; $i < $this->current_page && $i > 0 && $i <= $page; ++$i)
	      echo '<a href="'.$this->url.$i.'">'.$i.'</a>';
          echo "<a   class='selected'>$cur</a>";
       }
       else
       {
          $cur = $cur % 10;
          $i = $this->current_page - $cur + 1;
          for ($j = 1; $i < $this->current_page; ++$i,++$j)
	      echo '<a href="'.$this->url.$i.'">'.$i.'</a>';
          $cur = $this->current_page;
          echo "<a  class='selected'>$cur</a>";
          for ($i = $this->current_page + 1; $j <= 9&& $i <= $page; ++$i,++$j)
	      echo '<a href="'.$this->url.$i.'">'.$i.'</a>';
       }
            
       if ($this->current_page != $page)
       {
	  echo "<a href='$next'>下一页</a>";
	  echo "<a href='$last'>尾页</a>";
       }
       
       if ($this->total_page > 1)
       {
          echo '跳转至<input type="text" id="input_page"/>页';
	  echo '<a href="'.$this->url.'" id="jump_page" onclick="jump_page(this);return false;">'.'Go</a>';
       }
       echo '当前是第'.'<span class="color_red">'.$this->current_page.'</span>页, ';
       echo $this->keyword.'数<span class="color_red">'.$this->total_nums.'</span>'.'/';
       echo '共<span class="color_red">'.$page.'</span>页';
       
       echo '</div>';
    }
    
    private $total_nums;
    private $show_nums;
    private $keyword;
    private $current_page;
    private $total_page;
    private $url;
  };
?>
