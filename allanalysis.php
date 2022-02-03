<!DOCTYPE html>
<html>

<head>
    <title>ChartJS - BarGraph</title>
    <style type="text/css">
        #chart-container {
            width: 840px;
            height: auto;
        }

        html {
            background-image: linear-gradient(120deg, #e0c3fc 0%, #8ec5fc 100%);

            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            font-family: 'Waffle Regular';
            font-size: 30px;
            width: 100%;
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

        .menubar {
            background-color: #225A69;
            /* padding: 15px; */
            opacity: 0.85;
            width: 100%;
            color: white;
            font-size: 30px;
            text-align: right;

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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <center>


        <div class="col-md-12 spring-warmth-gradient">
            <div class="title-block">
                <h2>Days with most customer</h2>
            </div>
        </div>
        <?php
        require('analysis1.php');
        ?>

        <div class="col-md-12 spring-warmth-gradient">
            <div class="title-block">
                <h2>Staff who has most salary in each duty</h2>
            </div>
        </div>
        <?php
        require('analysis2.php');
        ?>


        <div class="col-md-12 spring-warmth-gradient">
            <div class="title-block">
                <h2>Staffs in flight</h2>
            </div>
        </div>
        <?php
        require('analysis3.php');
        ?>

    </center>

</body>



</center>

</html>