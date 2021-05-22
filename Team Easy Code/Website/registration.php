<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title>Seek a call</title>
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
   #btn1:hover
  {
    background-color:white;
    color:black;
  }
  #btn2:hover
  {
    background-color:white;
    color:black;
  }
  #btn3:hover
  {
    background-color:white;
    color:black;
  }
  

  #btn1,#btn2,#btn3
  {
    background-color:  #5d0f0f;color: white;
  }
</style>
</head>
<body style="margin-right: 0%;">
   <div style="display: flex;background-color:  #5d0f0f;height: 40px;color: white;">
    <button onclick="window.location.href='index.php'" id="btn1" style="font-size: 20px;margin-right: 1%;border: none;">
        Home
    </button>
    <button onclick="window.location.href='about_us.html'" id="btn2" style="font-size: 20px;margin-right: 1%;border: none;">
        About us
    </button>
    <button onclick="window.location.href='payu/'" id="btn3" style="font-size: 20px;margin-right: 1%;border: none;">
        Enroll
    </button>
   </div>
   <div style="display: flex;background-color:black;color: white;height: 120px;">
<img id="logo" src="black_logo.png" alt="" srcset="">
<p id="name" style="color:white;font-weight: bold;margin-top:35px">Easy Code Classes</p>
<div style="margin-top: 1%;">

    <div style="display: flex;">
        <i  id="i" class="fab fa-whatsapp fa-7x" style="font-size: 40px"></i>
        <p style="margin-top: 4%;">9887889513</p>
    </div>
    
    <div style="display: flex;">
        <!-- <i  class="fab fa-whatsapp fa-7x" style="font-size: 40px;margin-right: 1%;"></i> -->
        <i id="i" class="fas fa-phone" style="font-size: 35px;" ></i>
        <p style="margin-top: 6%;">9373782281</p>
    </div>
</div>


   </div>
   



<div style="background-image: url('https://designshack.net/wp-content/uploads/background-textures.png');">
  <br><br>
  <div class="registration">
    <form action="registration.php" method="POST">
      <h3 style="color: white; padding: 0.2rem; ">Register Here!!</h3>
      <div class="form-group">
        <label for="fullname" class="font">Name :</label>
        <input type="text" class="form-control adjust" id="fullname" placeholder="Enter Name" name="fullname">

      </div>
      <div class="form-group">
        <label for="email" class="font">Email address</label>
        <input type="email" class="form-control adjust" id="email" name="email" aria-describedby="emailHelp"
          placeholder="Enter Email">

      </div>

      <div class="form-group">
        <label for="pn" class="font">Mobile No.(Call)</label>
        <input type="number" class="form-control adjust" id="pn" name="pn" placeholder="Enter Mobile number">
      </div>

      <div class="form-group">
        <label for="pn2" class="font">Mobile No.(Whatsapp)</label>
        <input type="number" class="form-control adjust" id="pn2" name="pn2" placeholder="Whatsapp Number">
      </div>

      <label style="float: left; margin-right: 5%;" class="font" for="Choice">Choose a Course: </label>
      <select id="course" style="width: 60%;" name="courselist" class="form-group btn btn-secondary">
        <option value="C/C++ Programming Crash Course">C/C++ Programming Crash Course</option>
        <option value="saab">Saab</option>
        <option value="opel">Opel</option>
        <option value="audi">Audi</option>
      </select>
      <!-- <div class="dropdown">
        <button class="form-group btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Course
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">C/C++ Programming Crash Course</a>
        </div>
      </div> -->

      <button type="submit" class="btn btn-success submit" name="insert_data">Submit</button>
    </form>
  </div>
  <br><br>
  </div>
<footer>

    <div style="background-color: #04131a;">
        <div class="row1">
            <div class="column1" style="background-color:#04131a;;padding-left: 10%;color:white">
              
              <p style="font-weight:bold">Home</p>
              <p style="font-weight:bold">About us</p>
              <p style="font-weight:bold">Register</p>
            </div>
            <div id="column1" class="column1" style="background-color:#04131a;color:white">
                <p style="font-weight:bold" >Our Motive</p>
                <p style="font-weight:bold" >Our Courses</p>
                <p style="font-weight:bold">Our Policy</p>
            </div>
          </div> 

    </div>

    <div style="display: flex;padding-left: 46.5%; background-color: #04131a;padding-bottom: 29px;">
     <a href="https://www.instagram.com/easy_code_classes/?igshid=1vk9yeazcs4ax"> <div class="insta-icon" style="margin-right: 2%;"></div></a>
     <a href="https://www.facebook.com/easycode1121/"><img src="images/facebook.jpeg" style="margin-right: 5%;padding-right:2%;margin-left: 20px" alt=""></a>
  <a href="https://www.linkedin.com/company/71215027/admin/"><img src="images/linkedin.jpeg" style="margin-left: 20px;"></a>
    </div>
</footer>
  
</body>

</html>
<?php
if (isset($_POST['insert_data'])) {
  //$conn = mysqli_connect("localhost:3307","root","admin123","easycode");
  $conn = mysqli_connect("127.0.0.1:3306 ", "u806336724_easycode", "Ecc@2905", "u806336724_eccfeb21");


  $fullname = $_POST['fullname'];
  $pn = $_POST['pn'];
  $pn2 = $_POST['pn2'];
  $email = $_POST['email'];
  $courselist = $_POST['courselist'];

  $sql = "INSERT INTO student(fullname,phonenumber,phonenumber2,email,courselist) VALUES ('$fullname','$pn','$pn2','$email','$courselist')";
  if ($conn->query($sql) == TRUE) {
  }
}

?>