<?php /**
 *
 */
class View
{

  function __construct()
  {
    echo "From lib/View<br>";
  }

  public function render($page)
  {
    require "views/".$page.".php";
  }
}
 ?>
