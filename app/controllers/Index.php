<?php

class Index extends Controller
{
  public function __construct()
  {
    // 
  }

  public function index()
  {
    $data = [
      'title'     => 'Welcome to MVC',
    ];

    $this->view('pages/index', $data);
  }
}