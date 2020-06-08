<?php

class Home extends Controller {

    
    public function index($name = '') {
        
       $user =  $this->model('User');
       $user->name = $name;

        $this->view('home/index', ['user' => $user]);

        //$this->goto('home', 'index');
    }

    public function trainstations(){
      $this->view('home/trainstations');
  }
    
  public function passengers(){
    $this->view('home/passengers');
}
}
?>
