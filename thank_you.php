<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <style>
        body {
            background-image: url(http://zivame.com/blog/wp-content/uploads/2017/03/Adventure-Traveler-890x440.jpg);
            background-size: cover;
        }
        .payment {
            border: 1px solid #f2f2f2;
            height: 280px;
            border-radius: 20px;
            background: #fff;
        }
        .payment_header {
            background: black;
            padding: 20px;
            border-radius: 20px 20px 0px 0px;
        }
        .check {
            margin: 0px auto;
            width: 50px;
            height: 50px;
            border-radius: 100%;
            background: #fff;
            text-align: center;
        }
        .check i {
            vertical-align: middle;
            line-height: 50px;
            font-size: 30px;
        }
        .content {
            text-align: center;
        }
        .content h1 {
            font-size: 25px;
            padding-top: 25px;
        }
        .content a {
            width: 200px;
            height: 35px;
            color: #fff;
            border-radius: 30px;
            padding: 5px 10px;
            background: rgba(255, 102, 0, 1);
            transition: all ease-in-out 0.3s;
        }
        .content a:hover {
            text-decoration: none;
            background: #000;
        }
    </style>
</head>
<body>
    <div class="container">
        <div style="margin-top:7.2rem;">
            <div class="row">
                <div class="col-md-6 mx-auto mt-5">
                    <div class="payment">
                        <div class="payment_header">
                            <div class="check"><i class="fa fa-check" aria-hidden="true"></i></div>
                        </div>
                        <div class="content">
                            <h1>submit successfully!</h1>
                            <p>Thank You</p>
                            <a href="view_details.php">View Details</a> &nbsp;<a href="index.php">Go to form</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>
</html>