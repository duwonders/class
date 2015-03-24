<?php
class square
{
    public $height = 0;
    public $width = 0;
    public $area = 0;
    public function count_s()
    {
    	$height = $this->height;
    	$width = $this->width; 
        $area = $height * $width;
        echo $area;
        return;
    } 
    public function count_l(){
    	$height = $this->height;
    	$width = $this->width; 
        $length = $height * 2 + $width*2;
        echo $length;
        return;
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
    	echo $v;
    	return;
	}
}

class circular
{
    public $radius;
    const ratio = 3.14;
    public function count_s()
    {
    	$radius = $this->radius;
    	$area = 1/2 * circular::ratio * pow($radius,2);
    	echo $area;
    	return;
    }
    public function count_l(){
    	$radius = $this->radius;
    	$length = circular::ratio * $radius;
    	echo $length;
    }
}
class globe extends circular
{
	public function count_v()
	{
		$radius = $this->radius;
		$pai = circular::ratio;
        $v = 4/3 * $pai * pow($radius,3);
        echo $v;
	}
}
?>