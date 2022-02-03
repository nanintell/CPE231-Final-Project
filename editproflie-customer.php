<?php

session_start();
if(isset($_SESSION['name'])){
  $name = $_SESSION['name'];
  $ID = $_SESSION['ID'];

} else {
  header("location : login.html");
  exit;
}

//connect
include 'connect.php';

//query sql to find
$sql= "SELECT * FROM customer WHERE customerID='$ID'";


//
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

if($row['ID'] == NULL){
  mysqli_close($con);
  echo "ไม่พบผู้ใช้ในระบบ";
}else {
  $birth=$row['birth'];
  $gender=$row['gender'];
  $email = $row['email'];
  $phone=$row['phone'];
  $pass=$row['pass'];
}

?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>Edit Customer Profile</title>
        <script src="myscripts.js"></script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>


        <style>
            * {
                font-family: 'Waffle Regular';


            }

            .menubar {
                background-color: #225A69;
                /* padding: 15px; */
                opacity: 0.85;
                width: 100%;
                color: white;
                font-size: 30px;
                text-align: right;

            }

            .element {
                background-color: #119FA4;
                /* padding: 15px; */
                opacity: 0.85;
                width: 100%;
                color: white;
                font-size: 50px;
                text-align: left;
                margin: 0px 0px;
            }

            .element2 {
                background-color: rgba(17, 159, 164, 0.60);
                /* padding: 15px; */
                width: 100%;
                color: white;
                font-size: 30px;
                text-align: center;
                margin: 0px 0px;

            }

            .picstyle {
                width: 50px;
                position: absolute;
                z-index: 999;
                bottom: -160px;
            }

            .button1 {
                background-color: rgba(255, 255, 255, 0.3);
                background-position: center;
                border: none;
                padding: 0px 0px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 32px;
                font-family: 'Waffle Regular';
                border-radius: 12px;
                color: white;

            }

            h2 {
                font-size: 50px;
                color: navy;
            }


            .btn-primary {
                font-size: 30px;
                border-radius: 12px;
            }

            .form-control {
                display: block;
                width: 100%;
                padding: .375rem .75rem;
                font-size: 1.8rem;
                line-height: 1.5;
                color: #495057;
                background-color: #fff;
                background-clip: padding-box;
                border: 1px solid #ced4da;
                border-radius: .25rem;
                transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            }

            select.form-control:not([size]):not([multiple]) {
                height: calc(3.65rem + 1px);
                width: 100%;
            }
        </style>
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="menubar">
                    <div class="col">
                        <div class="col-sm-5" style="color:white; font-size:35px; text-align:center;margin-left:800px;">
                            <div class="form-group">
                                <a href='homepage.php' class="button1" style="width:250px">
                                    <img src="picture/house.png" alt="" width="30px">
                                    <strong> Home</strong>
                                </a>
                                <a href='logout.php' class="button1" style="width:250px">
                                    <img src="picture/login.png" alt="" width="40px">
                                    <strong> Log out</strong>
                                </a>
                            </div>
                        </div>

                        <div class="col-sm-12" style="color:white; font-size:35px; text-align:right;">
                            <div class="form-group">
                                <a href='customerview.php' class="button1" style="width:250px">
                                    <strong>
                                        <?php echo $name ?>
                                    </strong>
                                </a>
                                <a href='enrollment.php' class="button1" style="width:250px">
                                    <strong> ลงทะเบียนการจอง </strong>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
