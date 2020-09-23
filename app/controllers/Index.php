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
        redirection('/pages');
      } else {
        die('Something went Wrong...');
      }
    } else {
      $data = [
        'name'  => '',
        'email'  => '',
        'phone'  => '',
      ];

      $this->view('pages/add', $data);
    }
  }

  public function edit($id)
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'id'      => $id,
        'name'    => trim( $_POST['name'] ),
        'email'   => trim( $_POST['email'] ),
        'phone'   => trim( $_POST['phone'] ),
      ];

      if ( $this->userModel->updateUser( $data ) ) {
        redirection('/pages');
      } else {
        die('Something went Wrong...');
      }
    } else {
      $user = $this->userModel->user($id);

      $data = [
        'id'      => $user->id,
        'name'    => $user->name,
        'email'   => $user->email,
        'phone'   => $user->phone,
      ];

      $this->view('pages/edit', $data);
    }
  }

  public function delete($id)
  {
    $user = $this->userModel->user($id);

    $data = [
      'id'      => $user->id,
      'name'    => $user->name,
      'email'   => $user->email,
      'phone'   => $user->phone,
    ];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $data = [
        'id'      => $id,
      ];

      if ( $this->userModel->deleteUser( $data ) ) {
        redirection('/pages');
      } else {
        die('Something went Wrong...');
      }
    } 
      
    $this->view('pages/delete', $data);
  }
}