<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap cdn start -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <!-- bootstrap cdn end -->
    <!-- style start-->
    <style>
        body {
            background: black;
            font-family: 'Open-sans', sans-serif;
        }
        .message {
            display: flex;
            justify-content: center;
            margin: 10em 10em 0 0;
            padding: 0 2em;
        }
        .message h1 {
            color: #3698DC;
            font-size: 3vw !important;
            font-weight: 400;
        }
        .message p {
            color: #262C34;
            font-size: 1.3em;
            font-weight: lighter;
            line-height: 1.1em;
        }
    </style>
    <!-- style end -->
</head>
<body>
    <div class="message">
        <div>
            <h1>Oops, Session expired</h1>
            <p class="text-white">Try to fill form again.</p>
            <a href="index.php" target="_blank"><button class="btn btn-success">Go to form</button></a>
        </div>
    </div>
</body>
</html>