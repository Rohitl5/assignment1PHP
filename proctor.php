<!-- proctor form and its php code -->

<!-- normal student login 
1) firstly eith normal password
2) when password is udated  -->

<?php
session_start();

if(isset($_SESSION["stud_id"])){

    $id  = $_SESSION[' stud_id'];

}
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>


</style>
</head>
<body>
<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- main page -->
<div class=" text-center w-75 h-100 p-5 mx-auto pt-2 mt-2 bg-light">

<h1 class="text-dark">proctor page</h1>


<?php

echo"$id";
?>

<form    class=" text-left mx-auto w-100 h-100 p-5 text-dark " action="<?=$_SERVER['PHP_SELF'];?>" method="post" >

<div class="form-groupb ">
    <label for="exampleInputEmail1">studentid</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="id"  >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">firstname</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="firstname"  >
    
  </div>
  
  <div class="form-groupb ">
    <label for="exampleInputEmail1">lastname</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="lastname" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">middlename</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="middlename" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">mothername</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="mothername" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">address</label>
    <textarea type="text" class="form-control"  row="5" id="exampleInputEmail1"  name="address" ></textarea>
    
  </div>

  <div class="form-groupb ">
    <label for="exampleInputEmail1">city</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="city" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">pincode</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="pincode" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">studnumber</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="studnumber" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">fathernumber</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="fathernumber" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">mothernumber</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="mothernumber" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">studmail</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="studmail" >
    
  </div>

  <div class="form-groupb ">
    <label for="exampleInputEmail1">parentmail</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="parentmail" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">gender</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="gender" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">admission_category</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="admission_category" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">admission_type</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="admission_type" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">blood_group</label>
    <input type="text" class="form-control" id="exampleInputEmail1"  name="blood_group" >
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">hobbies</label>
    <textarea type="text" class="form-control" id="exampleInputEmail1"  name="hobbies" ></textarea>
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">difficulty_faced</label>
    <textarea type="text" class="form-control" id="exampleInputEmail1"  name="difficulty_faced" ></textarea>
    
  </div>
  <div class="form-groupb ">
    <label for="exampleInputEmail1">remark</label>
    <textarea type="text" class="form-control" id="exampleInputEmail1"  name="remark" ></textarea>
    
  </div>
 
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

</div>





</body>
</html>


<?php
if(isset($_POST['submit'])){


    $conn = mysqli_connect("localhost","root","","intern","3307");
    if(!$conn){
        echo "cant connect" .mysqli_connect_error($conn);
        exit;
    }
    $id=$_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $mothername = $_POST['mothername'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $studnumber= $_POST['studnumber'];
    $fathernumber = $_POST['fathernumber'];
    $mothernumber = $_POST['mothernumber'];
    $address = $_POST['address'];
    $studmail = $_POST['studmail'];
    $parentmail = $_POST['parentmail'];
    $gender = $_POST['gender'];
    $admission_category = $_POST['admission_category'];
    $admission_type = $_POST['admission_type'];
    $blood_group = $_POST['blood_group'];
    $hobbies = $_POST['hobbies'];
    $difficulty_faced = $_POST['difficulty_faced'];
    $remark = $_POST['remark'];

  

    $query= "INSERT INTO proctor(id, firstname,lastname,middlename,mothername,address,city,pincode,studnumber,fathernumber,mothernumber,studmail,parentmail,gender,admission_category,admission_type,blood_group,hobbies,difficulty_faced,remark) 
                VALUES('$id','$firstname','$lastname','$middlename','$mothername','$address','$city','$pincode','$studnumber','$fathernumber','$mothernumber','$studmail','$parentmail','$gender','$admission_category','$admission_type','$blood_group','$hobbies','$difficulty_faced','$remark');";
    $result = mysqli_query($conn,$query);
 
    if(!$result){
        echo "<script>
        alert('try again!'); 
        </script>" .mysqli_error($conn);
    }
    else{

        $_SESSION["stud_id"]=$stud_id;
    echo "<script>
    location.href = 'student_info.php';
    </script>";
    }


 
 
   
}
?>
