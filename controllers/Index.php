<?php

/**
 *
 */
class Index extends Controller/*extends AnotherClass*/
{

  function __construct()
  {
    parent::__construct();
    echo "from indexcontroller/constructor<br>";
  }

  public function test($param = null)
  {
    echo "from  indexcontroller/test function<br>";
    $this->view->msg = "this is a message";
    $this->view->render("index/index");
    
    require "models/Index_Model.php";
    $this->model = new Index_Model();
    //$model =

    echo ($param)? "You also passed param as $param <br>":"<br>";



  }
}
 ?>
