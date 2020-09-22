<?php

class Index extends Controller
{
  public function __construct()
  {
    // echo 'Index Controller';
  }

  public function index()
  {
    $data = [
      'title' => 'Welcome to MVC'
    ];
    $this->view('pages/index', $data);
  }

  public function articulo()
  {
    $this->view('pages/articulo');
  }

  public function test()
  {
    
  }
}