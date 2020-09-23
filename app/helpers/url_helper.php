<?php
function redirection($page)
{
  header('location:' . ROUTE_URL . $page);
}
