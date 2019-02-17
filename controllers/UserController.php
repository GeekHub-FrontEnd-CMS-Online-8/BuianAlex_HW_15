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
        //Receiving JSON POST Data Via PHP.
        $content = trim(file_get_contents("php://input"));
        $decoded = json_decode($content, true);
        if(User::newUser($decoded)){
          echo json_encode(["error"=> 0]); 
        }
        else {
          echo json_encode(["error"=> 1]);
        }
        
      }
      else {
        require_once(ROOT . '/views/form.php');
      }
        

    }
    



}
