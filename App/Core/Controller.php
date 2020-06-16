<?php

class Controller{

    private $start;
    private $end;
    private $date;
    private $time;
    private $ticket;
    private $class;
    private $number;
    private $client;



    public function model($model){
        require_once('../app/models/' . $model . '.php');
        return new $model();
    }

    public function view($view, $data = []){
        require_once('../app/view/' . $view . '.php');
    }
        
    public function goto($controller, $method, $args = []){
        $base = '/MVC_Test/Public';
        $location = 'http://' .$_SERVER['HTTP_HOST'] . $base . "/" .$controller . "/" .$method . "/" . implode("/",$args);
        header("Location: " . $location);
        exit;
    }

   public function calculate(){

        $this->start = $_POST['startingPoint'];
        $this->end = $_POST['endPoint'];
        $this->date = $_POST['date'];
        $this->time = $_POST['time'];
        $this->ticket = $_POST['ticket'];
        $this->class = $_POST['class'];
        $this->number = $_POST['number'];
        $this->client = $_POST['client'];
        require('C:\xampp\htdocs\MVC_Test\App\Data\prices.php');

        $priceConnections = getPrices();

        foreach($priceConnections as $key => $value){
            if($value['From'] === $this -> start && $value['To'] === $this->end){
                $this->prices = $value['Price']*$this->client;
                if($this->class === $this->c1){
                    $this->price = $this->price*2;
                }
                if($this->ticket === "Hin und Zurück"){
                    $this->price = $this->price*1.5;
                }
                if($this->ticket === "Mehrfahrtenkarte 6x"){
                    $this->price = $this->price*6;
                }
                if($this->client === "Halbtax"){
                    $this->price = $this->price*0.5;
                }
                if($this->client === "Erwachsene ohne Halbtax"){
                    $this->price = $this->price*2;
                }
                if($this->client === "Halbtax"){
                    $this->price = $this->price*0.5;
                }

            }
        }

    }
}

?>