<?php
session_start();
?>


<!DOCTYPE html>
<html>

<?php include('header.php') ?>

<style>
     .error {
          color: #2BDE1A;
     }
</style>

<?php

$current_data = file_get_contents('info.json');
$array_data = json_decode($current_data, true);

$extra = array(
     'Name'                    =>     $_SESSION['name'],
     'Email'                =>     $_SESSION['email'],
     'User Name'      =>     $_SESSION['username'],
     'Password'     =>     $_SESSION['pass'],
     'dob'            =>     $_SESSION['dob'],
     'gender'  =>     $_SESSION['gender'],
);


session_unset();
session_destroy();

$array_data[] = $extra;
$final_data = json_encode($array_data);
if (file_put_contents('info.json', $final_data)) {
     $message = " <label class='text-success'>File Appended  Success fully</p>";
} else {
     $error = 'JSON File not exits';
}

?>
<p>
<p></p>
</p>
<b>
     <h2 align="center"><?php echo  "successfully completed "; ?></h2>
     <p>
     <p></p>
     </p>

     <body>





     </body>
     <?php include('footer.php') ?>

</html>