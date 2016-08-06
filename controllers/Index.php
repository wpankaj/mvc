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
    echo ($param)? "You also passed param as $param <br>":"<br>";
  }
}
 ?>
