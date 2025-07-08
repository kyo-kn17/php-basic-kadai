<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP課題016</title>
</head>

<body>
  <p>
    <?php 
    class Food {
      public $name;
      public $price;
  
      public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
      }
    }
  
    $food = new Food('potato', 250);
  
    print_r($food);

    class Animal {
      public $name;
      public $height;
      public $weight;
  
      public function __construct(string $name, int $height, int $weight) {
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
      }
    }

    $animal = new Animal('dog', 60, 5000);

    print_r($animal);

    echo "<br>";
    echo $food->price . "<br>";
    echo $animal->height . "<br>";
    
    ?>
  </p>
</body>
