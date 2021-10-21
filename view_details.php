<?php
session_start();
include('db.php');
$query = "select * from `aelum_details` where `email`= '" . $_SESSION['email_validate'] . "' AND `full_name`='" . $_SESSION['full_name'] . "' AND `dob`='" . $_SESSION['dob'] . "'";
$result = mysqli_query($con, $query);
$fetch = mysqli_fetch_assoc($result);
$_SESSION['full_name'] = $fetch['full_name'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
        .parents_div {
            width: 100%;
            height: 50rem;
            display: grid;
            place-items: center;
            overflow-x: hidden;
        }
        .childs_div {
            width: 65%;
            height: auto;
            border-radius: 10px;
            box-sizing: border-box;
            box-shadow: 0 20px 34px rgb(151, 151, 151);
        }
        /* top section of registration form start  */
        .tops_section {
            width: 100%;
            height: 4rem;
            background-image: linear-gradient(to top, black, rgb(109, 112, 109));
            border-radius: 10px 10px 0px 0px;
        }
        /* top section of registration form end */
        /* bottom section of registration form start  */
        .buttoms_section {
            padding: 2rem;
            border-radius: 0 0 10px 10px;
        }
        /* bottom section of registration form end srart */
        /* reposnsive web design (media query) start */
        @media only screen and (max-width: 445px) {
            .childs_div {
                width: 20rem;
                height: auto;
            }
        }
        @media only screen and (max-width: 335px) {
            .childs_div {
                width: 16rem;
                height: auto;
            }
        }
        @media only screen and (max-width: 270px) {
            .childs_div {
                width: 12rem;
                height: auto;
            }
            h4 {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>
    <div class="parents_div">
        <div class="childs_div">
            <div class="tops_section">
                <h4 class="text-center text-white pt-3"><?php echo "<i class='fas fa-user'></i>" . ' ' . $_SESSION['full_name'] ?></h4>
            </div>
            <!-- to show error if any fild is null start -->
            <div class="buttoms_section">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <P class="text-black"><b>Full Name :</b> <?php echo " {$fetch['full_name']}" ?> </P>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <P class="text-black"><b>Date Of Birth :</b> <?php echo " {$fetch['dob']}" ?> </P>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 ">
                        <P class="text-black"><b>Email :</b> <?php echo " {$fetch['email']}" ?></P>
                    </div>
                </div>
                <hr>
                <p style="font-weight: 700;">About your self -</p>
                <div>
                    <p style="width: 100%;height:auto" readonly><?php echo " {$fetch['your_self']}" ?>"</p>
                </div>
                <div class="d-flex justify-content-center mt-4"><a href="index.php"><button class="btn btn-info">Go to form</button></a></div>
            </div>
        </div>
</body>
</html>