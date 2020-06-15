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
    //$this->view('home/passengers', [ 'client' => $client, 'number' => $number, 'class' => $class ]);
  }
  

  public function prices(){
    $this->view('home/prices');
    print_r($_POST);
    include('../app/data/ticket.php');
    $_SESSION['classType'] = $_POST['classType'];
    $_SESSION['clientType'] = $_POST['clientType'];
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
    if(isset($_SESSION['ticketType'])){
      $summary .= 'Billetart: '.$ticket[$_SESSION['ticketType']].'<br/>';
    }
    if(isset($_SESSION['clientType'])){
      $summary .= 'Billetart: '.$ticket[$_SESSION['clientType']].'<br/>';
    }
    return $summary;
  }
}
?>
