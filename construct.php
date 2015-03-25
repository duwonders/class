<?php
class square
{
 	protected $width = 0;
	protected $height = 0;
	protected $top = 0;
    function __construct($width,$height,$top)
    {
        $this->width = $width;
        $this->height = $height;
        $this->top = $top;
    }
    public function count_s()
    {
    	$height = $this->height;
    	$width = $this->width; 
    	$top = $this->top;
        $area = $width * $height;
        $this -> see($area);
    }
    public function count_l()
    {
    	$height = $this->height;
    	$width = $this->width; 
    	$top = $this->top;
        $length = ($width + $height) * 2;
        $this -> see($length);
    }
    protected function see($see)
    {
    	echo $see;
    }
}
class cude extends square
{
	public function count_v()
	{
        $height = $this->height;
    	$width = $this->width; 
    	$top = $this->top;
    	$v = $height * $width * $top;
    	$this -> see($v);
	}
    public function count_hs()
    {
        $height = $this->height;
        $width = $this->width; 
        $top = $this->top;
        $harea = 2*$height*$width+2*$height*$top+2*$width*$top;
        $this -> see($harea);
    }
}
class circular
{
    public $radius = 0;
    const ratio = 3.14;
    function __construct($radius)
    {
    	$this->radius = $radius; 
    }
    public function count_s()
    {
    	$radius = $this->radius;
    	$area = 1/2 * circular::ratio * pow($radius,2);
    	$this -> see($area);
    }
    public function count_l()
    {
    	$radius = $this->radius;
    	$length = 2 * circular::ratio * $radius;
    	$this -> see($length);
    }
    protected function see($see){
        echo $see;
    }
}
class globe extends circular
{
	public function count_v()
	{
		$radius = $this->radius;
		$pai = circular::ratio;
        $v = 4/3 * $pai * pow($radius,3);
        $this -> see($v);
	}
    public function count_hs(){
        $radius = $this->radius;
        $pai = circular::ratio;
        $harea = 4 * $pai * pow($radius,2);
        $this -> see($harea);
    }
}
?>