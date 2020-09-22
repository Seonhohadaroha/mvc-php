<?php
class Article
{
  private $db;

  public function __construct()
  {
    $this->db = new DB;
  }

  public function articles()
  {
    $this->db->query('SELECT * FROM articles;');

    return $this->db->records();
  }
}
