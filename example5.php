<?php 

class Triangle{
    public float $a;
    public float $b;
    public float $c;

    public function __construct(float $a, float $b, float $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    public function getSquare(){
        return $this->a * $this->b * $this->c;
    }
}

class Square{
    public float $a;
    public float $b;

    public function __construct(float $a, float $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    public function getSquare(){
        return $this->a * $this->b;
    }
}

function getSquareFromShape($shape){
    return $shape->getSquare();
}

$square = new Square(2,5);
$triangle = new Triangle(2,5,8);

echo getSquareFromShape($square);
echo PHP_EOL;
echo getSquareFromShape($triangle);