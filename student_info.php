<!-- final page where student info is displayed -->
<?php
session_start();

if(isset($_SESSION["stud_id"])){
    $id= $_SESSION['stud_id'];
    
 

}
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> TRIAL</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<style>
        #alpha {

            position: absolute;
            z-index: -1;

        }

        #beta {

            border-radius: 20%;
            margin: 50%;
            padding: 20px;
        }

        #gamma {

            width: 200px;
            height: 200px;
            border-radius: 50%;
            align-items: center;

        }

        #con {
            display: flex;
            flex-direction: row;
        }

        .mega {

            display: flex;
            flex-direction: row;
        }

        .container2 {
            margin: auto;
            margin-top: 100px;
            padding: 70px;
            border-radius: 20px;
            box-shadow: 5px 5px 5px;
            box-sizing: border-box;
            background-color: rgb(255, 232, 232);
        }
    </style>
</head>

<body>

    <!-- php -->

    <?php


$conn = mysqli_connect("localhost","root","","intern","3307");
if(!$conn){
    echo "cant connect" .mysqli_connect_error($conn);
    exit;
}

    $query2=" SELECT * FROM proctor Where id='$id';";

    $result2=mysqli_query($conn,$query2);

    $row=mysqli_fetch_assoc($result2); 



    $firstname = $row["firstname"];
    $middlename = $row["middlename"];
    $lastname = $row["lastname"];
    $mothername = $row["mothername"];
    $gender= $row["gender"];
    $studmail=$row["studmail"];
    $studnumber=$row["studnumber"];
    $bloodgroup=$row["blood_group"];

    $fathernumber=$row["fathernumber"];
    $mothernumber=$row["mothernumber"];
    $parentmail=$row["parentmail"];
    $admissiontype=$row["admission_type"];
    $admissioncategory=$row["admission_category"];
    $hobbies=$row["hobbies"];
    $difficulty=$row["difficulty_faced"];
    $address=$row["address"];
    $city =$row["city"];
    $pincode =$row["pincode"];

    $image="bhai.png";
    $male="male";

    if ($gender==$male){
        $image="boy2.0.png";
    }
    else{
        $image="girl2.0.png";
    }



?>
    <!-- html -->

    <img id="alpha" src="about-bg.png">
    <div class="mega">
        <div class="container1">
            <img id="beta" src="somaiya.png">
            <id class="tomato">

            </id>

        </div>

        <div class="container2">
            <img id="gamma" src=" <?php echo "$image"?>">
            <div id="con">
                <div>

                <ul>
                    <li>
                        <b>ID :</b><?php
                            echo"  $id";
                         ?>
                    </li>
                     <li>
                       <b>Name :</b> <?php
                            echo" $firstname  $middlename  $lastname  $mothername";
                         ?>
                    </li>
                    <li>
                    <b>Gender :</b> <?php
                            echo" $gender";
                         ?>
                    </li>
                    <li>
                    <b>Mail :</b>  <?php
                            echo"$studmail";
                         ?>
                    </li>
                    <li>
                    <b>Phone No. :</b>  <?php
                            echo"  $studnumber";
                        ?>
                    </li>
                    <li>
                    <b>Bloog Group :</b> <?php
                            echo" $bloodgroup";
                        ?>
                    </li>
                    <li>
                    <b>Father No. :</b> <?php
                            echo" =$fathernumber";
                         ?>
                    </li>
                    <li>
                    <b>Mother NO. :</b> <?php
                            echo" $mothernumber";
                         ?>
                    </li>
                    <li>
                    <b>Parent Mail :</b> <?php
                            echo"$parentmail";
                         ?>
                    </li>

   
                 </ul>

    
                </div>
                <div>

                <ul>
                    
                    <li>
                    <b>Admission Type :</b> <?php
                            echo" $admissiontype";
                         ?>
                    </li>
                    <li>
                    <b>Admission Category :</b> <?php
                            echo" $admissioncategory";

                         ?>
                    </li>
                    <li>
                    <b>Hobbies :</b> <?php
                            echo"$hobbies";

                         ?>
                    </li>
                    <li>
                    <b>Difficulty Faced :</b> <?php
                            echo" $difficulty";

                         ?>
                    </li>
                    <li>
                    <b>Address :</b> <?php
                            echo"$address $pincode $city";

                         ?>
                    </li>


   
                 </ul>
               
                </div>

            </div>
            <button id="submit"  type="button" class="btn btn-danger text-center " onclick='window.location.href="logout.php"'>  LOgOUT </button>


        </div>

    </div>
</body>

</html>