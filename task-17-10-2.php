<?php

// с использованием абстрактного класса

abstract class Transport
{
    protected function run() // заставляет машину ехать и вызывает одну из её способностей
    {
        $this->move();
        $this->doSmth();
    }

    protected function move()
    {
        
    }

    protected function honk() // способность сигналить
    {
        echo $this->sound;
    }

    protected function useTheWipers() // способность включать дворники
    {

    }
}

class Car extends Transport
{
    protected $sound = 'beep beep';
    private $oilLevel; // индивидуализм
    private $enginePower;

    protected function doSmth() // способность (использовать закись азота)
    {
        $this->useTheNitrousOxide();
    }

    protected function useTheNitrousOxide()
    {

    }
}

class Bulldozer extends Transport
{
    protected $sound = 'dr dr dr';
    private $oilLevel; // индивидуализм
    private $enginePower;

    protected function doSmth() // способность (использовать ковш)
    {
        $this->useTheBucket();
    }

    protected function useTheBucket()
    {
        
    }
}

?>


<?php

// с использованием интерфейса

interface TransportInterface
{
    public function run();
}

class Transport implements TransportInterface
{
    public function run()
    {
        $this->move();
    }

    protected function move()
    {
        
    }

    protected function honk() // способность сигналить
    {
        echo $this->sound;
    }

    protected function useTheWipers() // спосбность включать дворники
    {

    }
}

class Car extends Transport
{
    protected $sound = 'beep beep';
    private $oilLevel; // индивидуализм
    private $enginePower;

    protected function run() // заставляет машину ехать и вызывает одну из её способностей - использовать закись азота
    {
        $this->move();
        $this->useTheNitrousOxide();
    }

    protected function useTheNitrousOxide()
    {

    }
}

class Bulldozer extends Transport
{
    protected $sound = 'dr dr dr';
    private $oilLevel; // индивидуализм
    private $enginePower;

    protected function run() // заставляет машину ехать и вызывает одну из её способностей - использовать ковш
    {
        $this->move();
        $this->useTheBucket();
    }

    protected function useTheBucket()
    {
        
    }
}

?>