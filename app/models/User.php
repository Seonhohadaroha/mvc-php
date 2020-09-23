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
      $this->db->query('SELECT * FROM users ORDER BY id DESC');

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

   public function user($id)
   {
      $this->db->query('SELECT * FROM users WHERE id = :id');
      $this->db->bind(':id', $id);

      $record = $this->db->record();

      return $record;
   }

   public function updateUser($data)
   {
      $this->db->query('
        UPDATE 
          users 
        SET 
          name = :name, 
          email = :email, 
          phone = :phone
        WHERE
          id = :id;'
      );

      $this->db->bind(':id', $data['id']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':phone', $data['phone']);

      if( $this->db->execute() ) {
        return true;
      } else {
        return false;
      }
   }

   public function deleteUser($data)
   {
      $this->db->query('
        DELETE FROM
          users 
        WHERE
          id = :id;'
      );

      $this->db->bind(':id', $data['id']);
      
      if( $this->db->execute() ) {
        return true;
      } else {
        return false;
      }
   }
}
