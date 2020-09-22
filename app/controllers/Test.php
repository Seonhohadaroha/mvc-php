<?php

class Test
{
  public function __construct()
  {
    echo 'i\'m a class Test';
  }

  public function index()
  {
    // 
  }

  public function add($id)
  {
    echo '<br> I\'m method <b>add</b> ' . $id;
  }
}
