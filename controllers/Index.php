<?php

/**
 *
 */
class Index extends Controller/*extends AnotherClass*/
{

  function __construct()
  {
    echo "from controller/constructor<br>";
  }

  public function test($param = null)
  {
    echo "from controller index/test function<br>";
    echo ($param)? "You also passed param as $param <br>":"<br>";
  }
}
 ?>
