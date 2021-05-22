<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Log In to Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="registeration.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.2.0/js/all.js"></script>
    <style>
        .mp {
            background-color: black;
            margin-top: 5%;
        }
        #btn1:hover {
            background-color: white;
            color: black;
        }

        #btn2:hover {
            background-color: white;
            color: black;
        }

        #btn3:hover {
            background-color: white;
            color: black;
        }


        #btn1,
        #btn2,
        #btn3 {
            background-color: #5d0f0f;
            color: white;
        }
    </style>
</head>

<body style="margin-right: 0%;">
    <div style="display: flex;background-color:  #5d0f0f;height: 40px;color: white;">
        <button onclick="window.location.href='../index.php'" id="btn1"
            style="font-size: 20px;margin-right: 1%;border: none;">
            Home
        </button>
        <button onclick="window.location.href='../about_us.html'" id="btn2"
            style="font-size: 20px;margin-right: 1%;border: none;">
            About us
        </button>
        <button onclick="window.location.href='detail.php'" id="btn3" style="font-size: 20px;margin-right: 1%;border: none;">
            Courses
        </button>
    </div>
    <div style="display: flex;background-color:black;color: white;height: 120px;">
        <img id="logo" src="black_logo.png" alt="" srcset="">
        <p id="name" style="color:white;font-weight: bold;margin-top:35px">Easy Code Classes</p>
        <div style="margin-top: 1%;">

            <div style="display: flex;">
                <i id="i" class="fab fa-whatsapp fa-7x" style="font-size: 40px"></i>
                <p style="margin-top: 4%;">9887889513</p>
            </div>

            <div style="display: flex;">
                <!-- <i  class="fab fa-whatsapp fa-7x" style="font-size: 40px;margin-right: 1%;"></i> -->
                <i id="i" class="fas fa-phone" style="font-size: 35px;"></i>
                <p style="margin-top: 6%;">9373782281</p>
            </div>
        </div>


    </div>


    <div style="background-image: url('https://designshack.net/wp-content/uploads/background-textures.png');">
        <br><br>
        <div class="registration">
            <form action="login.php" method="POST">
                <h3 style="color: white; padding: 0.2rem; ">Login Here!!</h3>


                <div class="form-group">
                    <label for="email" class="font">Email address</label>
                    <input type="text" class="form-control adjust" id="email" name="email" aria-describedby="emailHelp"
                        placeholder="Enter Email">
                </div>


                <div class="form-group">
                    <label for="pass" class="font">Password</label>
                    <input type="text" class="form-control adjust" id="pass" name="pass" placeholder="Enter Pass">
                </div>

                <button type="submit" class="btn btn-success submit" id="login" name="login">Login</button>
            </form>
        </div>
        <br><br>
    
    <footer class=" mp text-white pt-5 pb-4 ">

        <div class="container text-center text-md-left ">

            <div class="row text-center text-md-left ">

                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-4 text-md-left pb-4 ">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning ">EasyCode</h5>

                    <p>
                        <a href="https://easycodeclasses.in " class="text-white " style="text-decoration: none; "> Home</a>
                    </p>
                    <p>
                        <a href="https://easycodeclasses.in/about_us.html " class="text-white " style="text-decoration: none; "> About Us</a>
                    </p>
                    <p>
                        <a href="# " class="text-white " style="text-decoration: none; "> Register</a>
                    </p>


                </div>


                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-4 text-md-center pb-4 ">


                    <a href="https://easycodeclasses.in "><img src="2.png " class="rounded-circle " alt="Cinque Terre " width="150 " height="150 "></a>
                </div>



                <div class="col-md-4 col-lg-4 col-xl-4 mx-auto mt-4 text-md-right pb-4 ">
                    <h5 class="text-uppercase mb-4 font-weight-bold text-warning ">Products</h5>
                    <p>
                        <a href="# " class="text-white " style="text-decoration: none; "> Our Motive</a>
                    </p>
                    <p>
                        <a href="# " class="text-white " style="text-decoration: none; "> Our Courses</a>
                    </p>
                    <p>
                        <a href="# " class="text-white " style="text-decoration: none; "> Our Policy</a>
                    </p>


                </div>

                <hr class="mb-4 ">

                <div class="row align-items-left ">

                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-6 text-md-left ">
                        <p> Copyright ©2021 All rights reserved by:
                            <a href="# " style="text-decoration: none; ">
                                <strong class="text-warning ">EasyCode Classes</strong>
                            </a>
                        </p>

                    </div>

                    <div class="col-md-6 col-lg-6 col-xl-6 mx-auto mt-6 text-md-right ">
                        <div class="text-center text-md-right ">

                            <ul class="list-unstyled list-inline ">
                                <li class="list-inline-item ">
                                    <a href="https://www.facebook.com/easycode1121/ " class="btn-floating btn-sm text-white " style="font-size: 23px; "><i class="fab fa-facebook "></i></a>
                                </li>
                                <li class="list-inline-item ">
                                    <a href="https://www.instagram.com/easy_code_classes/?igshid=1vk9yeazcs4ax " class="btn-floating btn-sm text-white " style="font-size: 23px; "><i class="fab fa-instagram "></i></a>
                                </li>
                                <li class="list-inline-item ">
                                    <a href="https://easycodeclasses.in " class="btn-floating btn-sm text-white " style="font-size: 23px; "><i class="fab fa-google-plus "></i></a>
                                </li>
                                <li class="list-inline-item ">
                                    <a href="https://www.linkedin.com/company/easy-code-classes " class="btn-floating btn-sm text-white " style="font-size: 23px; "><i class="fab fa-linkedin-in "></i></a>
                                </li>
                                <li class="list-inline-item ">
                                    <a href="https://www.youtube.com/channel/UCQ3y7QxCSl4tfh4hlfDh9UA " class="btn-floating btn-sm text-white " style="font-size: 23px; "><i class="fab fa-youtube "></i></a>
                                </li>
                            </ul>

                        </div>

                    </div>

                </div>

            </div>

    </footer>
    </div>
    


</body>

</html>