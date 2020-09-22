<?php

class Index extends Controller
{
  public function __construct()
  {
    $this->articleModel = $this->model('Article');
  }

  public function index()
  {
    $articles = $this->articleModel->articles();

    $data = [
      'title'     => 'Welcome to MVC',
      'articles'  => $articles
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