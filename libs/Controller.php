<?php /**
 *
 */
class Controller
{

  function __construct()
  {
    echo "Base Controller(libs/controller) Class <br>";
    $this->view = new View();
    $this->model = new Model();
  }
}
 ?>
