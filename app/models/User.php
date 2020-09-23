<?php

class User
{
  private $db;

  public function __construct()
  {
    $this->db = new DB;
  }

   public function users()
   {
      $this->db->query('SELECT * FROM users');

      $records = $this->db->records();

      return $records; 
   }

   public function add($data)
   {
     $this->db->query('INSERT INTO users (name, email, phone) VALUES (:name, :email, :phone)');

     $this->db->bind(':name', $data['name']);
     $this->db->bind(':email', $data['email']);
     $this->db->bind(':phone', $data['phone']);

     if ( $this->db->execute() ) {
       return true;
     } else {
       return false;
     }
   }
}
