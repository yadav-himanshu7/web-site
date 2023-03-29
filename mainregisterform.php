<?php
include("connection.php");
error_reporting(0);
?>
<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','academytable');

// get the post records
if (isset($_POST['fname'])){
$fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sports=$_POST['sports'];

// database insert SQL code
$sql = "INSERT INTO sportsworldacademy VALUES ('0', '$fname', '$lname', '$gender', '$email','$phone','$sports')";

if(mysqli_query($con, $sql))
{
    echo '<script>alert("Registeration Done, Thank You!")</script>';
    
}
else{
  echo "already registered";
}
}

?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="with=device-width, intial-scale=1.0">
    <title>SPORTS WORLD ACADEMY</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <script type="text/javascript">
        function registermsg() {
            alert("Thank You For Registering");
        }
    </script>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;

}
.container1{
  display: flex;
  align-items: center;
  justify-content: center;
  flex-flow: column;
  max-width: 500px;
  width: 400px;
  height: 700px;
  
  margin: 50px auto;
  padding: 30px;
  background-color:rgba(192,192,192,0.3);
}

.conatainer1 label input{
  margin: 10px; 0px;
}
h3{
  font-size:30px;

}


.container{
    max-width: 500px;
    width: 100%;
    
    margin: 50px auto;
    padding: 30px;
   
}
.container .title{
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 25px;
    
    text-transform: uppercase;
    text-align: center;
}
.container .form{
    align-content=
    width: 100%;
}
.container .form .input_field{
    margin-bottom: 15px;
    display: flex;
    align-items: center;
}

.container .form .input_field label{
   
    width: 200px;
    margin-right: 10px;
    font-size: 14px;
}
    </style>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  min-height: 100vh;
  width: 100%;
  background-image: linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url(image/trybg9.jpg);
  background-position: center;
  background-size: cover;
  position: relative;
}

.navbar {
  overflow: hidden;
  background-color: #333;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown1 {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: grey;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
    <!--<style>
      body {
        background-image: url('image/bg8.jpg');
        background-repeat: no-repeat;
        background-attachment: fixed;  
        background-size: cover;
      }
      </style>-->

<style>
  * {box-sizing: border-box}
  body {font-family: Verdana, sans-serif; margin:0}
  .mySlides {display: none}
  img {vertical-align: middle;}
  
  /* Slideshow container */
  .slideshow-container {
    max-width: 1000px;
    position: relative;
    margin: auto;
  }
  
  /* Next & previous buttons */
  .prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
  }
  
  /* Position the "next button" to the right */
  .next {
    right: 0;
    border-radius: 3px 0 0 3px;
  }
  
  /* On hover, add a black background color with a little bit see-through */
  .prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
  }
  
  /* Caption text */
  .text {
    color: #f2f2f2;
    font-size: 15px;
    padding: 8px 12px;
    position: absolute;
    bottom: 8px;
    width: 100%;
    text-align: center;
  }
  
  
  /* Number text (1/3 etc) */
  .numbertext {
    color: #f2f2f2;
    font-size: 12px;
    padding: 8px 12px;
    position: absolute;
    top: 0;
  }
  
  /* The dots/bullets/indicators */
  .dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
  }
  
  .active, .dot:hover {
    background-color: #717171;
  }
  
  /* Fading animation */
  .fade {
    animation-name: fade;
    animation-duration: 1.5s;
  }
  
  @keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
  }
  
  /* On smaller screens, decrease text size */
  @media only screen and (max-width: 300px) {
    .prev, .next,.text {font-size: 11px}
  }
  </style>
  <style>
    *{
        padding: 0;
        margin: 0;
        font-family: sans-serif;
    }

    .gradient-custom {
/* fallback for old browsers */
background: #f093fb;
margin-left: 30%;
margin-right: 30%;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))
}

.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.gradient-custom input{
    border: 5px;
}

  </style>
    </head>
<body>
    <header class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
          <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <!--<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
              <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
            </svg>-->
            <a href="try.html"><img alt="icon" src="image/sitelogo.png" width="300" height="300"></a>
            <!--<span class="ml-3 text-xl"><b><u>SPORTS WORLD ACADEMY</u></b></span>-->
          </a>
          
          <div class="navbar">
            <a href="try.html">HOME</a>
            <div class="dropdown">
              <button class="dropbtn">ABOUT 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="about.html">SPORTS WORLD ACADEMY</a>
                <a href="visionandvalue.html">VISION AND VALUE</a>
                <a href="coaches.html">COACHES</a>
                <a href="schedule.html">SCHEDULE</a>
                <a href="achievement.html">ACHIEVEMENTS</a>
                <a href="feestructure.html">FEES STRUCTURE</a>
              </div>
            </div>
            <div class="dropdown">
              <button class="dropbtn" onclick="location.href='gallery.html'">GALLERY
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="#footballgallery">FOOTBALL</a>
                <a href="#">BASKETBALL</a>
                <a href="#">CRICKET</a>
                <a href="#">BADMINTON</a>
                <a href="#">ATHLETICS</a>
              </div>
            </div>
            <a href="contact.html">CONTACT</a>
            <a href="mainregisterform.php">REGISTER</a>
            </div> 
        </div>
    </header>
    <div class="container1">
        <form action="mainregisterform.php" method="post">
        <div class="title">
            <h3 style="font-size:30px; text-align:center; font-family: Georgia, 'Times New Roman', Times, serif;">Registration form</h3>
            <br>
        </div>
        <div class="form">
            <div class="input_field">
                <label>First Name:  </label>
                <input type="text" class=input name="fname" required>
            </div>
            
            <div class="input_field">
                <label>Last Name:  </label>
                <input type="text" class=input name="lname" required >
            </div>
            <div class="input_field">
                <label>Gender:  </label>
                <div class="custom_select">
                <select name="gender" required>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
            </div>
            </div>


            
            <div class="input_field">
                <label>Phone:  </label>
                <input type="text" class=input name="phone" required>
            </div>
            <div class="input_field">
                <label>Email:  </label>
                <input type="email" class=input name="email" required>
            </div>
            
            <div class="row">
                      <div class="col-12">
                        <label class="form-label select-label">Sports: </label>
                        <select class="select form-control-lg" name = "sports" required>
                          <option value="1" disabled>Sports Available</option>
                          <option value="Football" name="football" id="f">Football</option>
                          <option value="Basketball" name="basketball" id="b">Basketball</option>
                          <option value="Cricket" name="cricket" id="c">Cricket</option>
                          <option value="Badminton" name="badmintion" id="bb">Badminton</option>
                          <option value="Athleics" name="athlectics" id="a">Atheletics</option>
                        </select>
      
                      </div>
                    </div>

                    <div>
                      <label class="form-label select-label"><b>NOTE: Only UPI is accepted.</b></label>
                    </div>
                    <img height="200px" width="200px" src="image/paymentqr1.jpeg">
                    <p>Pay via Link-</p>
                    <a href="https://p.paytm.me/xCTH/taxn8oq6"><u>https://p.paytm.me/xCTH/taxn8oq6</u></a>
                    <br>
                    <br>

            <div class="input field">
                <button type="submit" value="register" class="btn" name="register">Submit</button>
            </div>
            
            
        </div>
        </form>
    </div> 
    <footer class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
          <div class="flex flex-wrap md:text-left text-center order-first">
            <div class="lg:w-1/4 md:w-1/2 w-full px-4">
              <h2 class="title-font font-medium text-gray-900 tracking-widest text-sm mb-3" style="color:white;"><b><u>SPORTS WORLD ACADEMY</u></b></h2>
              <nav class="list-none mb-10">
                <li>
                  <a style="color:white" href="try.html" class="text-gray-600 hover:text-gray-800"><b>HOME</b></a>
                </li>
                <li>
                  <a style="color:white" href="about.html" class="text-gray-600 hover:text-gray-800"><b>ABOUT</b></a>
                </li>
                <li>
                  <a style="color:white" href="gallery.html"class="text-gray-600 hover:text-gray-800"><b>GALLERY</b></a>
                </li>
                <li>
                  <a style="color:white" href="contact.html"class="text-gray-600 hover:text-gray-800"><b>CONTACT</b></a>
                </li>
              </nav>
            </div>
          </div>
        </div>
        <div class="bg-gray-100">
          <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
            <!--<a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
              </svg>
              <span class="ml-3 text-xl">Tailblocks</span>-->
              <a href="try.html"><img alt="icon" src="image/sitelogo.png" width="300" height="300"></a>
            </a>
            <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2022 SOPRTSWORLDACADEMY —
              <a href="https://twitter.com/home" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank">@sportsworldacademyowner</a>
            </p>
            <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                <a href="https://www.facebook.com/profile.php?id=100010057609454" class="text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z">
                    </path>                
                  </svg>
                </a>
                <a href="https://twitter.com/home" class="ml-3 text-gray-500">
                  <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                  </svg>
                </a>
                <a href="https://www.instagram.com/arman_singh.10/" class="ml-3 text-gray-500">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                  </svg>
                </a>
              </span>
          </div>
        </div>
      </footer>
    </body>
</html>
<?php
if($_POST['register'])
{
    $fname=$_GET['fname'];
    $lname=$_GET['lname'];
    $gender=$_GET['gender'];
    $email=$_GET['email'];
    $phone=$_GET['phone'];
    $sports=$_GET['sports'];

    if($fname != "" && $lname !="" && $gender !="" && $email !="" && $phone !="" && $sports !="")
    {





    $query="INSERT INTO sportsworldacademy values('$fname','$lname','$gender','$email','$phone','$sports')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo "Data Inserted into Database";
    }
    else
    {
        echo "Failed";

    }
}
else
{
    echo "Please fill the form";
}
}

?>