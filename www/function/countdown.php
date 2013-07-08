<?php
    class Countdown
    {
       public function __construct($start_time,$end_time)
       {
         $this->start_time = $start_time;
	 $this->end_time = $end_time;
	 $this->cur_time = null;
       }

       public function start_time_remain()
       {
         $this->cur_time = time();
	 if ($this->cur_time >= $this->start_time)
             $this->start_countdown();
	 else
         {
	     $cur = date('',$this->cur_time);
	 }
       }

       public function output()
       {
          echo $this->start_time.' '.$this->end_time.' '.$this->cur_time;
       }

       function start_countdown()
       {

       }
       private $start_time;
       private $end_time;
       private $cur_time;
    };
?>
