<?php


class User
{


    public static function getAllUser()
    {
        try{
            $conn  =  db::getConnection();
            if($conn){
              $result = $conn->prepare("SELECT * FROM users_tb");
              $result->execute();
              while ($row = $result->fetch()) {
                echo "<tr><td> $row[id] </td><td>$row[name_user]</td><td>$row[surname]</td><td>$row[email]</td><td>$row[gender]</td><td>$row[b_day]</td><td>$row[family_status]</td><td>$row[home_address]</td>"
                ."<td></td><td></td><td></td><td></td><td></td><td></td></tr>";
              }
            }
            $conn = null;
          }
          catch(PDOException $e){
            return false;
          }

    }
    public static function newUser($newData){

      try{
            $conn  =  db::getConnection();
            if($conn){
              $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

              $sql = $conn->prepare("INSERT INTO users_tb (name_user, surname, email, gender, b_day, family_status, home_address ) VALUES (:name_user, :surname, :email, :gender, :b_day, :family_status, :home_address)");
              $sql->bindParam(':name_user', $newData['name']);
              $sql->bindParam(':surname', $newData['surname']);
              $sql->bindParam(':gender', $newData['gender']);
              $sql->bindParam(':b_day', $newData['b_day']);
              $sql->bindParam(':family_status', $newData['family_status']);
              $sql->bindParam(':home_address', $newData['home_address']);
              $sql->bindParam(':email', $newData['email']);
              $sql->execute();
              
            }
            $conn = null;
            return 1; //if sql is OK
          }
          catch(PDOException $e){
            return $e;
          }
        
    }
    public function editUser()
    {
        
    }
    public  function deleteUser()
    {
        
    }
    static function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return "data";
    }
    



}
