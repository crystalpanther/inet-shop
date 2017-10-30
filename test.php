<?php
class Item {
    protected $title;
    protected $description;
    protected $price;

    public function __construct($title, $price) {
        $this->title = $title;
        $this->price = $price;
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
//    public function __destruct()
//    {
//        echo 'item is destructed<br>';
//    }
    public function __toString()
    {
        return  $this->title . ":" . " " . $this->description . " " . $this->price . " " . "руб";
    }
}
class Tea extends Item {
    private $degreeOfFermentation;

    public function __construct($title, $price, $degreeOfFermentation=0.5)
    {
        parent::__construct($title, $price);
        $this->degreeOfFermentation = $degreeOfFermentation;
    }

    public function setDegreeOfFermentation ($degreeOfFermentation) {
        $this->degreeOfFermentation = $degreeOfFermentation;
    }

    public function __toString()
    {
        return parent::__toString() . " , " . $this->degreeOfFermentation; // TODO: Change the autogenerated stub
    }
}

class Ulun extends Tea {
    public function __construct($price)
    {
        parent::__construct('Улун', $price);
    }
}

class Puer extends Tea {
    public function __construct($price)
    {
        parent::__construct('Пуэр', $price);
    }
}

class Coffee extends Item {
    private $degreeOfRoasting;

    public function __construct($title, $price, $degreeOfRoasting=1)
    {
        parent::__construct($title, $price);
        $this->degreeOfRoasting = $degreeOfRoasting;
    }
    public function setDegreeOfRoasting($degreeOfRoasting) {
        $this->degreeOfRoasting = $degreeOfRoasting;
    }

    public function __toString()
    {
        return parent::__toString() . " , " . $this->degreeOfRoasting; // TODO: Change the autogenerated stub
    }
}

class Instant extends Coffee {
    public function __construct($price, $degreeOfRoasting)
    {
        parent::__construct('Растворимый', $price, $degreeOfRoasting);
    }
}

class Insoluble extends Coffee {
    public function __construct($price, $degreeOfRoasting)
    {
        parent::__construct('Нерастворимый', $price, $degreeOfRoasting);
    }
}


//----------------------------------
$item = new Item('Чай', 0);
//$item->setTitle("Чай");
$item->setDescription("Травянистый напиток");
//$item->setPrice(300);
echo $item . "<br>";

$tea = new Tea("Улун", 100, 0.3);
//$tea->setTitle("Чай");
//$tea->setDescription("трава");
//$tea->setPrice(-300);
echo $tea . "<br>";

$ulun = new Ulun(300);
echo $ulun . "<br>";

$puer = new Puer(500);
echo $puer . "<br> <br>";

$item1 = new Item ("Кофе", 0, 1);
$item1->setDescription("Бодрящий напиток");

echo $item1 . "<br>";

$coffee = new Coffee("Арабика", 500, 0.1);
echo $coffee . "<br>";

$instant = new Instant(600, 1);
echo $instant . "<br>";

$insoluble = new Insoluble(400, 0.2);
echo $insoluble . "<br> <br>";

echo "the end<br>";
// delete $item;

//добавить классу Кофе степень обжарки и тип (в конструктор, сеттер, геттер, toStrting)
//создать 2 класса: растворимый, молотый, передать соответсвующий тип по аналогии с чаями

//создать класс User, у которого должны быть методы "signIn", "signUp", "signOut";

//signIn - регистрация в базе
//signUp - авторизация
//signOut - выход
//добавить метод юзеру isSignedIn - авторизован ли пользовтаель