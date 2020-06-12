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
      $this->view('home/trainstations', ['trainstations' => $trainstations ]);
      //$this->view('home/trainstations', ['ticket' => $ticket ]);
      $this->view('home/footer', [ 'next' => 'passengers']);
  }
    
  public function passengers(){
    $this->view('home/passengers');
    $this->view('home/footer', [ 'next' => 'prices']);
  }

public function prices(){
  $this->view('home/prices');
  $this->view('home/footer', [ 'next' => 'passengers']);
}

}
?>
