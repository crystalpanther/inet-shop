<?php
class Item {
    private $title;
    private $description;
    private $price;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
    }

    public function showInfo() {
        echo $this->title . $this->description . $this->price . '<br>';
    }

    public function setTitle($title) {
        $this->title = $title;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setPrice($price) {
        $this->price = $price;
    }
    public function __destruct()
    {
        echo 'item is destructed<br>';
    }
    public function __toString()
    {
        return  $this->title . $this->description . $this->price . '<br>';
    }
}
class Tea {
    private $title;
    private $description;
    private $price = 100;
    private $degreeOfFermentation;

    function showInfo() {
        echo $this->title . $this->description . $this->price . $this->degreeOfFermentation . '<br>';
    }
    public function setTitle($title) {
        $this->title = $title;
    }
    public function setDescription($description) {
        $this->description = $description;
    }
    public function setPrice($price) {
        if ($price > 0)
            $this->price = $price;
    }
    public function setDegreeOfFermentation ($degreeOfFermentation) {
        $this->degreeOfFermentation = $degreeOfFermentation;
    }
}
//----------------------------------
$item = new Item('чай', 300);
//$item->setTitle("Чай");
$item->setDescription("трава");
//$item->setPrice(300);
echo $item;

$tea = new Tea();
$tea->setTitle("Чай");
$tea->setDescription("трава");
$tea->setPrice(-300);
$tea->setDegreeOfFermentation(0.5);
$tea->showInfo();

echo "the end<br>";
// delete $item;