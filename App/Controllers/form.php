<?php

class form extends Controller {


    public function _construct(){

    }
    public function index(){
    $this->view('home/prices');
    }

    public function calculate($form="startingPoint", $to="endingPoint"){
    }

}