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
}
