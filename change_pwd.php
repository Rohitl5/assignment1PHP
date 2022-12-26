<!-- here in this page the password update code wil be written and this page will be landed in two conditions -->
<!-- 1) when users proctor form is empty  -->
<!-- 2) when password is needed to be changed -->
<!-- here hashed pwd will be stored -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    
<h2>  UPDATE PASSWORD</h2>
   
<form    class=" mx-auto w-100 h-75 p-5 text-dark " action="<?=$_SERVER['PHP_SELF'];?>" method="post" >
<div class="form-group">
    <label for="exampleInputPassword1">Student ID</label>
    <input type="text" name="stud_id" class="form-control" id="exampleInputPassword1" placeholder="Id">
  </div>
<div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"> Confirm Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder=" Reenter Password">
  </div>


  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>

<?php
if(isset($_POST['submit'])){


    $conn = mysqli_connect("localhost","root","","intern","3307");
    if(!$conn){
        echo "cant connect" .mysqli_connect_error($conn);
        exit;
    }
   
    $stud_id= $_POST['stud_id'];
    $password = $_POST['password'];
    $hash= password_hash('$password', PASSWORD_DEFAULT);

    $query= "UPDATE student SET password='$hash' WHERE stud_id='$stud_id'";
    $query2=" SELECT firstname FROM proctor WHERE id='$stud_id';";
    $result= mysqli_query($conn,$query);
    $result2=mysqli_query($conn,$query2);
    $row2=mysqli_fetch_assoc($result2);



    
    if(!$result){
        echo "<script>
        alert('try again!'); 
        </script>" .mysqli_error($conn);
    }
    
    else if(!$row2){


 
            echo  "<script>
            alert='first create a user id to login to next page ';
            location.replace('proctor.php');
            </script>" ;
        }

        else{
    echo "<script>
    location.href = 'student_login.php';
    </script>";
    }



    
}