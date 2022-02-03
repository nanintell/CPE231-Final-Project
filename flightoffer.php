<!DOCTYPE html>
<html lang="en">

<head>
    <title>Flight Offer</title>
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
            margin: 0px 20px;
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

        .form-group {
            text-align: right;
        }

        .modal-body {
            color: black;
        }

        .btn-primary {
            font-size: 30px;
            border-radius: 12px;
        }

        .table-bordered {
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="menubar">
                    <div class="col-sm-4" style="color:white; font-size:35px; text-align:center;margin-left:850px; ">
                        <div class="form-group">
                            <a href='homepage.php' class="button1" style="width:30%">
                                <img src="./picture/house.png" alt="" width="30%">
                                <strong> Home</strong>
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>

        <div class="col-md-12 spring-warmth-gradient">
            <div class="title-block">
                <h2>Flight Table</h2>
            </div>
        </div>
        <?php
        require('flighttable.php');
        ?>
        
        <div class="col-sm-4" style="color:white; font-size:35px;text-align:center;">
                        
                        <div class="form-group">
                            <a href='flight.html' class="button" style="width:50%">
                                <img src="picture/123376.png" alt="" width="20%"> Booking
                            </a>
                        </div>
                    </div>
    </center>
    

</body>

</html>
