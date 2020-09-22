<?php

class Index extends Controller
{
  private $userModel;

  public function __construct()
  {
    $this->userModel = $this->model('User');
  }

  public function index()
  {
    $users = $this->userModel->users();

    $data = [
      'users'     => $users,
    ];

    $this->view('pages/index', $data);
  }

  public function add()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'name'  => trim( $_POST['name'] ),
        'email'  => trim( $_POST['email'] ),
        'phone'  => trim( $_POST['phone'] ),
      ];

      if ( $this->userModel->add( $data ) ) {
        //redireccionar('paginas');
      } else {
        die('Something went Wrong...');
      }
    } else {
      $data = [
        'name'  => '',
        'email'  => '',
        'phone'  => '',
      ];

      $this->view('index/add', $data);
    }
    

    
  }
}