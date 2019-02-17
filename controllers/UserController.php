<?php

class UserController
{


    public function actionIndex()
    {
    
        require_once(ROOT . '/views/table.php');

    }
    public function actionForm()
    {
      if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $content = trim(file_get_contents("php://input"));
        $decoded = json_decode($content, true);
        foreach($decoded as $x => $x_value) {
          $decoded[$x] = trim($x_value);
          $decoded[$x] = stripslashes($x_value);
          $decoded[$x] = htmlspecialchars($x_value);
      }
        $qRes = User::newUser($decoded);
          echo json_encode($qRes);  
      }
      else {
        require_once(ROOT . '/views/form.php');
      }
        

    }

    
    



}
