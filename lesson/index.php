<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js">
    <title>Document</title>

</head>
<body>
    
<?php

trait Collect {
    public function messeg(&$arr){
         $arr[]=$this;
    }
}








interface Rules {
    const type = 'sedan';
    public function test();
    public function debag();
}

 class Car {
    //об'єкт
   public  $colorCar = '';
   public  $typeCar = '';

   public function colorTest(){
    if($this->colorCar === 'red'){
       echo $this->colorCar . ' TER/II';
    } else {
        echo $this->colorCar . ' TER/III';
    }
   }
 }

 $vinCode = new Car(); //єкземпляр
 $vinCode->colorCar = 'red';
 $vinCode->typeCar = 'sedan';

 echo $vinCode->colorCar;
 echo "<br>";
 echo $vinCode->typeCar;
 $vinCode->colorTest();




 class MarkeCar  implements Rules{
    use Collect;
    function __construct($marcaCar, $colorCar, $typeCar)
    {
        $this->marcaCar = $marcaCar;
        $this->colorCar = $colorCar;
        $this->typeCar = $typeCar;
    }

    public function colorTest(){
        if($this->colorCar === 'red'){
           echo $this->colorCar . ' TER/II' . $this->marcaCar;
        } else {
            echo $this->colorCar . ' TER/III' . $this->typeCar;
        }
       }
    
       public function test()
       {
        //   return $this->typeCar . Rules::type;
       }
       public function debag()
       {
        
       }
    
    }
$testArr = [];
       

 $vinCode = new MarkeCar('BMW', 'red', 'Swdan');
 $vinCode ->colorTest();
 $vinCode->messeg($testArr);

 var_dump($testArr);




class Flower {
   function __construct($type, $price){
    $this->type = $type;
    $this->price = $price;
   }
   public function giveMe(){
    echo $this->type . ' / ' . $this->price;
   }
   public function allPrice(){
    return 0;
   }
   public function allInfo(){
    return 0;
   }
}


class Flowers extends Flower {
    use Collect;
    function __construct($type, $price, $quantiti){
        parent::__construct($type, $price);
        $this->quantiti = $quantiti;
       }
       function allPrice(){
        return $this->quantiti * $this->price;
       }
       function allInfo(){
        return $this->quantiti * $this->price . ' - ' . $this->type . ' - ' . $this->quantiti;
       }

}


// $buket = new Flowers('liliya', '100usd', 13);

//  $buket->giveMe();
//  echo $buket->quantiti;

$buket = [];
$buket[] = new Flowers('liliya', 100, 13);



$allInfo = '';
$allPrice = '';

foreach($buket as $item)
{
    $allInfo .= $item->allInfo();
    $allPrice .= $item->allPrice();
    // $allPrice .= $item->messege()
}

echo $allInfo . '<br>';
echo $allPrice  . '<br>';

// echo '<pre>';
// var_dump($buket);
// echo '</pre>';

class Rectangle
{
    protected $x;
    protected $y;
    protected $width;
    protected $height;
    function __construct($x, $y, $w, $h)
    {
        $this->x=$x;
        $this->y=$y;
        $this->width=$w;
        $this->height=$h;
    }
    function Show()
    {
        echo 'Vertex: ('.$this->x.','.$this->y.') width:'.
            $this->width.' height:'.$this->height.'<br/>';
    }

    public static function createInstance1($x1, $y1, $x2, $y2)
    {
        $instance = new self($x1, $y1, $x2, $y2);
        $instance->x=$x1;
        $instance->y=$y1;
        $instance->width=($x2-$x1);
        $instance->height=($y2-$y1);
        return $instance;
    }

    public static function createInstance2($w, $h )
    {
        $instance = new self(0, 0, $w, $h);
        $instance->x=0;
        $instance->y=0;
        $instance->width=$w;
        $instance->height=$h;
        return $instance;
    }
}

$rectangle = new Rectangle(2,8,45,52);
$rectangle->Show();
//$test = $rectangle->createInstance1(9,6,12,78);
$test = $rectangle->createInstance2(12,78);

var_dump($test);


//аякс запити





?>
</body>
</html>