<?php
/**
 *
 */
class Bootstrap
{

  function __construct()
  {
    # code...
    $url = (isset($_GET["url"])) ? explode("/", rtrim($_GET["url"], "/")) : Array("index");
    $controller_path = "controllers/".$url[0].".php";

    if(file_exists($controller_path))
    {
      require $controller_path;

      $controller = new $url[0]();  //1st argument will be controller/class name

      if(isset($url[1]))
      {
        if(!isset($url[2]))
        {
          $controller->{$url[1]}();//second arg calls function without param
          //controller.php/function()
        }
        else
        {
          $controller->{$url[1]}($url[2]);  //third argument with param
          //controller.php/function(praram)
        }
      }

    }
    else {

      require "controllers/error.php";
      $controller = new Error();
      //die("done");
      //throw new Exception($controller_path." not found<br>");

      //return false;
      # code...
    }
  }
}

 ?>
