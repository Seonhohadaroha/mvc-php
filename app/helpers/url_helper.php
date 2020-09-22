<?php
function redirect($page)
{
  header('localhost' . ROUTE_URL . $page);
}
