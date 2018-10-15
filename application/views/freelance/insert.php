<?php
//insert.php

if(isset($_POST["category"]))
{
 $connect = new PDO("mysql:host=localhost;dbname=iassist", "root", "");
 $query = "INSERT INTO programmer(email,skill_category, skill,skill_created) VALUES(:email,:skill_category, :skill,:skill_created)";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':email' => $this->session->userdata('email'),
   ':skill_category'  => $_POST["category"],
   ':skill' => $_POST["skill"],
   ':skill_created' => date('Y-m-d g:i'),
  )
 );
 $result = $statement->fetchAll();
 $output = '';
 if(isset($result))
 {
  $output = '
  <div class="alert alert-success">
   Your data has been successfully saved into System
  </div>
  ';
 }
 echo $output;
}

?>