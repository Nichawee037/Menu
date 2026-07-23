<?php

class Food
{
    private string $name;
    private string $type;

    public function __construct($name, $type){
        $this->name = $name;
        $this->type = $type;

        echo "ชื่ออาหาร: " . $this->name . " ประเภท: " . $this->type . "<br>";
    }
}

// สร้างวัตถุ
$food1 = new Food("คั่วพริกเกลือ", "อาหารจานเดียว");
$food2 = new Food("กะเพราแห้ง" , "อาหารจานเดียว");
$food3 = new Food("ผัดกระเทียมพริกไทย" , "อาหารจานเดียว");
$food4 = new Food("ผัดขี้เมา", "เมนูเส้น");
$food5 = new Food("ผัดผงกะหรี่" , "อาหารจานเดียว");
$food6 = new Food("ผัดพริกแกง" , "อาหารจานเดียว");


?>