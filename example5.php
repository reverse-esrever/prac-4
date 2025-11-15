<?php 
//Создание функции для вычесления площади фигур

//Создание интерфейса. Интерфейс - контракт, обязывающий классы, которые этот интерфейс используют, реализовать каждый метод, который прописан в интерфейсе.
interface Shape{
    public function getSquare(); //Написано только название метода т.к. реализация метода должна быть написана в классе.
}

//Ключевое слово implements испульзуется для привязки интерфейсов к классу. Имлементировать можно множество интерфейсов
//Класс квадрат
class Square implements Shape{
    public float $a;

    public function __construct(float $a)
    {
        $this->a = $a;
    }

    public function getSquare(){
        return $this->a * $this->a;
    }
}
//Класс прямоугольник
class Rectangle implements Shape{
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
//Ф-ция для рассчета площади
function getSquareFromShape(Shape $shape){
    return $shape->getSquare();
}

$square = new Square(5); // Создание квадрата с сторонами 5
$rectangle = new Rectangle(2,5); // Создание Прямоугольника  с сторонами 2,5

echo getSquareFromShape($square); // 25
echo PHP_EOL;
echo getSquareFromShape($rectangle); // 10