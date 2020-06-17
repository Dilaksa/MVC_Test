<?php

class Home extends Controller {

    
    public function index($name = '') {
        
       $user =  $this->model('User');
       $user->name = $name;
        $this->view('home/index', ['user' => $user]);

        //$this->goto('home', 'index');
    }

    public function trainstations(){
      include('../app/data/trainstations.php');
      include('../app/data/ticket.php');
      $this->view('home/trainstations', ['trainstations' => $trainstations, 'ticket' => $ticket  ]);
  }
    
  public function passengers(){
    if (isset($_POST['startingPoint'])){
    $_SESSION['startingPoint'] = $_POST['startingPoint'];
    $_SESSION['endPoint'] = $_POST['endPoint'];
    $_SESSION['date'] = $_POST['date'];
    $_SESSION['time'] = $_POST['time'];
    
   } 
   include('../app/data/ticket.php');
    $this->view('home/passengers', [ 'summary' => $this->orderSummary(), 'class' => $class, 'number' => $number, 'client' => $client ]);
    
  }
  

  public function prices(){
    $price = $this->calculatePrice();
    $_SESSION['number'] = $_POST['number'];
    $_SESSION['classType'] = $_POST['classType'];
    $_SESSION['clientType'] = $_POST['clientType'];
    $_SESSION['price'] = $price;
    $this->view('home/prices', [ 'summary' => $this->orderSummary(), 'price' => $price ]);
  }

  private function orderSummary(){
    include('../app/data/trainstations.php');
    include('../app/data/ticket.php');
    $summary = '';
    if(isset($_SESSION['startingPoint'])){
      $summary .= 'Von: '.$trainstations[$_SESSION['startingPoint']].'<br/>';
    }
    if(isset($_SESSION['endPoint'])){
      $summary .= 'Nach: '.$trainstations[$_SESSION['endPoint']].'<br/>';
    }
    if(isset($_SESSION['date'])){
      $summary .= 'Datum: '.$_SESSION['date'].'<br/>';
    }
    if(isset($_SESSION['time'])){
      $summary .= 'Zeit: '.$_SESSION['time'].'<br/>';
    }
    if(isset($_SESSION['classType'])){
      $summary .= 'Klasse: '.$_SESSION['classType'].'<br/>';
    }
    if(isset($_SESSION['clientType'])){
      $summary .= 'Billetart: '.$_SESSION['clientType'].'<br/>';
    }
    if(isset($_SESSION['number'])){
      $summary .= 'Anzahl: '.$_SESSION['number'].'<br/>';
    }
    if(isset($_SESSION['price'])){
      $summary .= 'Betrag bezahlen: '.$_SESSION['price'].'<br/>';
    }
    return $summary;
  }

  public function calculatePrice(){
       require('C:\xampp\htdocs\MVC_Test\App\Data\prices.php');
       include('../app/data/trainstations.php');

       $start = $trainstations[$_SESSION['startingPoint']];
       $end = $trainstations[$_SESSION['endPoint']];
       $ticket = 'Hin und Zurück';//$_SESSION['ticket'];
       $class = $_SESSION['classType'];
       $number = $_SESSION['number'];
       $client = $_SESSION['clientType'];

       $prices = getPrices();
       $price = 0;

       foreach($prices as $key => $value){
           if($value['From'] === $start && $value['To'] === $end){
               $price = $value['Price'];

               if($class === '1.Klasse'){
                   $price = $price*2;
               }
               if($class === '2.Klasse'){
                $price = $price;
            }
               if($ticket === "Hin und Zurück"){
                   $price = $price*1.5;
               }
               if($ticket === "Einfache Fahrt"){
                $price = $price;
            }
               if($ticket === "Mehrfahrtenkarte 6x"){
                   $price = $price*6;
               }
               if($client === "Halbtax"){
                   $price = $price*0.5;
               }
               if($client === "Erwachsene ohne Halbtax"){
                   $price = $price*2;
               }
               if($client === "Senioren 65+"){
                   $price = $price*0.5;
               }
               if($client === "Kinder 6-16 Jahre"){
                $price = $price;
            }

           }
       }
      return $price*$number;
   }
}
?>
