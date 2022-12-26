<!-- final page where student info is displayed -->
<?php
session_start();

if(isset($_SESSION["stud_id"])){

   

}
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student info</title>
</head>
<body>
    
<h1> student data </h1>

<?php


$conn = mysqli_connect("localhost","root","","intern","3307");
if(!$conn){
    echo "cant connect" .mysqli_connect_error($conn);
    exit;
}

$id="111111111";
    $query2=" SELECT * FROM proctor Where id='$id';";

    $result2=mysqli_query($conn,$query2);

    $row=mysqli_fetch_assoc($result2); 



    $firstname = $row["firstname"];
    $middlename = $row["middlename"];
    $lastname = $row["lastname"];
    $mothername = $row["mothername"];
    //$field5name = $row["col5"];



?>

<ul>
    <li>
        <?php
        echo" Name= $firstname  $middlename  $lastname  $mothername";
        ?>
    </li>
   
        
    



   





</ul>
</body>
</html>