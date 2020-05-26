<?php 

include_once 'connect_to_server.php';

$user_name=$_POST['username'];
 $pass_word=$_POST['password'];
  $first_name=$_POST['firstname'];
   $sur_name=$_POST['surname'];
    $add_ress=$_POST['Address'];
     $ph_one=$_POST['Phone'];
      $em_ail=$_POST['Email'];
       $des_cription=$_POST['comments'];
        $attributes_1 = 0;
         $attributes_2 = 0;
          $attributes_3 = 0;
           $attributes_4 = 0;
            $attributes_5 = 0; 
             $attributes_6 = 0;

       if(isset($_POST['attributes1']))
       {
        $attributes_1 = 1;
       }
       else
       {
        $attributes_1 = 0;
       }
       if(isset($_POST['attributes2']))
       {
        $attributes_2 = 1;
       }
       else
       {
        $attributes_2 = 0;
       }
       if(isset($_POST['attributes3']))
       {
        $attributes_3 = 1;
       }
       else
       {
        $attributes_3= 0;
       }
       if(isset($_POST['attributes4']))
       {
        $attributes_4 = 1;
       }
       else
       {
        $attributes_4= 0;
       }
       if(isset($_POST['attributes5']))
       {
        $attributes_5 = 1;
       }
       else
       {
        $attributes_5= 0;
       }
       if(isset($_POST['attributes6']))
       {
        $attributes_6 = 1;
       }
       else
       {
        $attributes_6= 0;
       }
                                  

$sql = "INSERT INTO user login (username, password, firstname, surname, address, phone, email, tidy, laid back, punctual, unpunctual, well off, tight budget, description) VALUES ('".$user_name."', '".$pass_word."', '".$first_name."', '".$sur_name."', '".$add_ress."', '".$ph_one."', '".$em_ail."', '".$attributes_1."', '".$attributes_2."', '".$attributes_3."', '".$attributes_4."', '".$attributes_5."', '".$attributes_6."', '".$des_cription."');";

 mysqli_query($conn, $sql);

 header("Location: index.html?Registration Successful!");
?>