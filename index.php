<?php
session_start();
?>
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
        .vertical-center {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .input_field_class {
            border: 2px solid white;
            box-sizing: border-box;
            box-shadow: 5px 5px 5px 5px grey;
        }
        .error {
            color: red;
            font-size: 13px;
            margin-top: 2px;
        }
        /* show notification to expire session start */
        .modal {
            width: 100vw;
            height: 120vh;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            align-items: center;
            justify-content: center;
            pointer-events: none;
            opacity: 0;
            -webkit-transition: 250ms opacity ease-in;
            transition: 250ms opacity ease-in;
        }
        .modal__container {
            background-color: white;
            width: 26rem;
            padding: 1.5rem;
            border-radius: 0.2rem;
            margin-left: 500px;
            margin-top: 280px;
        }
        .modal__title {
            text-align: center;
        }
        .modal__paragraph {
            line-height: 1.5rem;
            border-top: 1px solid #eef1f6;
            padding: 1rem 0;
        }
        .modal-visible {
            opacity: 1;
            pointer-events: auto;
        }
        .btn-primary {
            background-color: #0e48fe;
            color: white;
        }
        .btn-secondary {
            background-color: transparent;
            color: #0e48fe;
        }
        /* show notification to expire session end */
    </style>
    <!-- style end -->
</head>
<body>
    <!-- notification modal start -->
    <div class="modal" id="modal" style="display: none;">
        <div class="modal__container">
            <h2 class="modal__title">Your session is about to expire!</h2>
            <p class="modal__paragraph">
                Your session will time out in <span id="ten-countdown" class="text-danger">10</span>
            </p>
            <div class="modal__buttons">
                <button class="btn btn-info d-flex justify-content-center" id="modal-skip">Skip</button>
            </div>
        </div>
    </div>
    <!-- notification modal end -->
    <div class="container-fluid" style="overflow-x: hidden;">
        <div class="row vertical-center mt-4 mx-4">
            <!-- main form start -->
            <div style="width:600px;height:auto;border:10px solid white;box-sizing:border-box;box-shadow:5px 5px 5px 5px grey , grey 5px 5px 5px 5px inset;border-radius:150px 5px 150px 5px;margin-bottom:30px">
                <!-- timer div start -->
                <div style="display:flex;justify-content:center;">
                    <div style="width: 50px;height:50px;box-sizing: border-box;box-shadow:5px 5px 10px 5px grey;border-radius:50%;margin-top:25px">
                        <span id="timer" style="position:absolute;padding-top:10px;padding-left:8px;font-weight:800"></span>
                    </div>
                </div>
                <p style="font-weight:800;text-align:center;margin-top:5px;">Time out in</p>
                <!-- timer div end -->
                <!-- form div start here -->
                <div class='mx-5 mb-2'>
                    <form action="thank_you.php" class="content" id="registration" onsubmit="return validation()">
                        <label for="full_name" style="font-weight: 600;" class="form-group">Full Name :</label>
                        <input type="text" name="full_name" id="full_name" placeholder="Full name" class="form-control input_field_class" required> <br>
                        <label for="email" style="font-weight: 600;" class="form-group">Email Id :</label>
                        <input type="text" name="email" id="email" placeholder="Email Address" class="form-control input_field_class" required><br>
                        <label for="dob" style="font-weight: 600;" class="form-group">Date Of Birth :</label>
                        <input type="date" name="dob" id="dob" placeholder="dob" class="form-control input_field_class" required><br>
                        <label for="your_self" style="font-weight: 600;" class="form-group ">About Yourself :</label>
                        <textarea name="your_self" id="your_self" class="form-control input_field_class"></textarea><br>
                        <!-- captcha start -->
                        <div>
                            <?php
                            $captcha = '@$AC13';
                            $captcha_rand = str_shuffle($captcha);
                            $_SESSION['captctha'] = $captcha_rand;
                            ?>
                            <label style="font-weight: 600;" class="form-group ">Captcha :</label>
                            <input class="form-control mb-4 input_field_class text-center" style="font-weight:800;border:2px solid transparent" id="captcha" value="<?php echo $_SESSION['captctha']; ?>" readonly>
                            <input type="text" name="captcha_input" id="captcha_input" placeholder="Captcha" class="form-control mt-5  input_field_class" required />
                        </div>
                        <!-- captcha start -->
                        <div class="d-flex justify-content-center mt-4 mb-3"><input type="submit" id="btn" class="btn btn-dark" value="Submit" onclick="submit_now()" /></div>
                    </form>
                </div>
                <!-- form div end here -->
            </div>
            <!-- main form end -->
        </div>
    </div>
    <!-- JavaScript start here -->
    <!-- timer for main and model both start -->
    <script>
        document.getElementById('timer').innerHTML =
            03 + ":" + 60;
        startTimer();
        function startTimer() {
            var presentTime = document.getElementById('timer').innerHTML;
            var timeArray = presentTime.split(/[:]+/);
            var m = timeArray[0];
            var s = checkSecond((timeArray[1] - 1));
            if (s == 59) {
                m = m - 1
            }
            if (m < 0) {
                return
            }
            document.getElementById('timer').innerHTML =
                m + ":" + s;
            console.log(m)
            setTimeout(startTimer, 1000);
        }
        function checkSecond(sec) {
            if (sec < 10 && sec >= 0) {
                sec = "0" + sec
            }; // add zero in front of numbers < 10
            if (sec < 0) {
                sec = "59"
            };
            return sec;
        }
    </script>
    <!-- timer for main and model both end -->
    <!-- client side validation -->
    <script>
        $(function() {
            $("form[id='registration']").validate({
                rules: {
                    email: {
                        required: true,
                        email: true
                    },
                    full_name: {
                        required: true,
                        minlength: 5
                    },
                    dob: {
                        required: true,
                        date: true,
                    },
                    your_self: {
                        required: true,
                    },
                    captcha_input: {
                        required: true,
                        equalTo: "#captcha"
                    }
                },
                messages: {
                    email: "Please enter a valid email address",
                },
                captcha_input: {
                    required: "Please confirm password",
                    minlength: "Your password must be at least 5 characters long"
                },
                submitHandler: function(form) {
                    form.submit();
                }
            });
        });
    </script>
    <!-- JavaScript end here -->
    <!-- Ajax query -->
    <script>
        function submit_now() {
            var full_name = jQuery('#full_name').val();
            var email = jQuery('#email').val();
            var dob = jQuery('#dob').val();
            var your_self = jQuery('#your_self').val();
            var captcha_input = jQuery('#captcha_input').val();
            $.ajax({
                type: 'post',
                url: 'form_validation.php',
                data: "full_name=" + full_name + "&email=" + email + "&dob=" + dob + "&your_self=" + your_self + "&captcha_input=" + captcha_input,
                success: function(result) {
                    console.log(result);
                }
            });
        }
    </script>
    <script>
        let modal = document.getElementById("modal");
        let btnSkip = document.getElementById("modal-skip");
        window.onload = () => {
            setTimeout(() => {
                modal.classList.add("modal-visible");
            }, 3000);
        };
        btnSkip.addEventListener("click", () => {
            modal.classList.remove("modal-visible");
        });
    </script>
    <!-- model coutdown time start -->
    <script>
        function countdown(elementName, minutes, seconds) {
            var element, endTime, hours, mins, msLeft, time;

            function twoDigits(n) {
                return (n <= 9 ? "0" + n : n);
            }
            function updateTimer() {
                msLeft = endTime - (+new Date);
                if (msLeft < 10000) {
                    document.getElementById("modal").style.display = "block";
                }
                if (msLeft < 500) {

                    element.innerHTML = "Time is up!";
                }
                if (msLeft < 0) {
                    window.location.replace("session_expired_page.php");
                } else {
                    time = new Date(msLeft);
                    hours = time.getUTCHours();
                    mins = time.getUTCMinutes();
                    element.innerHTML = (hours ? hours + ':' + twoDigits(mins) : mins) + ':' + twoDigits(time.getUTCSeconds());
                    setTimeout(updateTimer, time.getUTCMilliseconds() + 500);
                }
            }
            element = document.getElementById(elementName);
            endTime = (+new Date) + 1000 * (60 * minutes + seconds) + 500;
            updateTimer();
        }
        countdown("ten-countdown", 03, 00);
    </script>
</body>
</html>