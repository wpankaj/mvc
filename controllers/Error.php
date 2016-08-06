<?php
  /**
   *
   */
  class Error extends Controller
  {

    function __construct()
    {
      parent::__construct();
      //echo "from errorcontroller<br>";
      $this->view->msg = "this is a message";
      $this->view->render("error/index");
    }
  }



?>
