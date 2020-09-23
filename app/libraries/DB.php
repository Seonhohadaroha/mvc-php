<?php
class DB
{
  private $host = DB_HOST;
  private $user = DB_USER;
  private $password = DB_PASSWORD;
  private $name_database = DB_NAME_DATABASE;

  private $db_handler;
  private $statement;
  private $error;

  public function __construct() {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->name_database;
    $options = [
      PDO::ATTR_PERSISTENT  => true,
      PDO::ATTR_ERRMODE     => PDO::ERRMODE_EXCEPTION 
    ];

    //  Instance PDO
    try {
      $this->db_handler = new PDO($dsn, $this->user, $this->password, $options);

      $this->db_handler->exec("SET NAMES 'utf8'");
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      echo $this->error;
    }
  }

  public function query($sql)
  {
    $this->statement = $this->db_handler->prepare($sql);
  }

  public function bind($param, $value, $type = null) 
  {
    
    if ( is_null($type) ) {
      switch (true) {
        case is_int($value):
          $type = PDO::PARAM_INT;
          break;
        case is_bool($value):
          $type = PDO::PARAM_BOOL;
          break;
        case is_null($value):
          $type = PDO::PARAM_NULL;
        break;
        default:
          $type = PDO::PARAM_STR;
          break;
      }
    }
   
    $this->statement->bindValue($param, $value, $type);
  }

  public function execute()
  {
    return $this->statement->execute();
  }

  public function records()
  {
    $this->execute();
    return $this->statement->fetchAll( PDO::FETCH_OBJ );
  }

  public function record()
  {
    $this->execute();
    return $this->statement->fetch( PDO::FETCH_OBJ );
  }

  public function recordsCount()
  {
    $this->execute();
    return $this->statement->rowCount();
  }
}