<!DOCTYPE html>
<html>
<head>
   <meta charset='utf-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
   <title>Registration</title>
   <link rel = "icon" href ="logo.jpg" type = "image/x-icon">
   <meta name='viewport' content='width=device-width, initial-scale=1'>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="index1.css">
   <link rel="stylesheet" href="index.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
h3{
    text-align: center;
    color: white;
    font-weight: bold;
    font-size: xx-large;
    font-family: 'Times New Roman', Times, serif;
}
p{
    align-content: center;
    color: rgb(5, 5, 5);
}   
.dropbtn-home{
  background-color:#242121;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #3e8e41;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: black;}


</style>
<body>

<div id="heading">
        <!-- <a href="index.html"><img id="logo" src="logo.jpg"></a><br> -->
        <div class="title"><br>
            <center><h1><strong >Browser Books</strong></h1><br></center>
        </div>
    </div>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" >
        <div class="container-fluid" >
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse-navbar-collapse" id="collapsibleNavbar">
              <div class="navigate">
                <li id="header-row-a"><div class="dropdown" style="display: inline-block;color: black;">
                  <a href="Index.html" class="dropbtn-home">Home</a>
                  <div class="dropdown-content">
                    <a href="account.html">Account</a>
                    <a href="register.php">Registration</a>
                    <a href="Login.html">Login</a>
                    <a href="uploadBook.html">Your Uploads</a>
                    <a href="requestBook.html">Requested Book</a>
                  </div>
                </div></li>
                <li id="header-row-a"><a href="books.html" class="dropbtn-home">Books</a></li>
                <li id="header-row-a"><a href="requestBook.html" class="dropbtn-home">Request a Book</a></li>
                <li id="header-row-a"><a href="uploadBook.html" class="dropbtn-home">Upload a Book</a></li>
                <li id="header-row-a"><a href="contectUs.html" class="dropbtn-home">Contact Us</a></li>
                <li id="header-row-a"><a href="aboutUs.html" class="dropbtn-home">About Us</a></li>
            </div>
        </div>
    </nav>

    <?php
    require('db.php');
    // When form submitted, insert values into the database.
    $insert=false;
    if(isset($_REQUEST['username'])){
        // removes backslashes
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email    = $_POST['email'];
        $cnumber = $_POST['cnumber'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirm_pwd = $_POST['confirm_pwd'];

        $sql    = "INSERT into `registration` (fname, lname, email,cnumber,username,password,confirm_pwd)
                     VALUES ('$fname', '$lname','$email','$cnumber','$username', '" . md5($password) . "','" . md5($confirm_pwd) . "');";
        $result   = mysqli_query($con, $sql);
        if ($result == true) {
                    $insert = true;
        } 
        else {
                echo "ERROR: $sql <br> $con->error";
         }
        } 
    ?>
    <main>
        <center>
            <h3>Registration</h3>
            <form action="" method="post">
            <?php
                    if($insert == true)
                        echo "<p style='color:green;background-color:white;width: 300px;0px;'>You are succesfully register to BMS</p>";
                        $con->close();
                    
            ?>
                <input type="text" id="fname" name="fname" placeholder="First Name"><br><br>
                <input type="text" id="lname" name="lname" placeholder="last Name"><br><br>
                <input type="text" id="email" name="email" placeholder="Email"><br><br>
                <input type="number" id="cnumber" name="cnumber" placeholder="Contact No."><br><br>
                <input type="text" placeholder="Username" name="username"><br><br>
                <input type="password" placeholder="Password" name="password"><br><br>
                <input type="password" placeholder="Confirm Password" name="confirm_pwd"><br><br>
                <input type="submit" name="submit" value="Register">
                <input type="reset" value="Reset">
            </form>
        </center>
        <br><br>
    </main> 
    <br>
  <footer>
      <div class="fter" style="height:143px;">
          <div class="company">
              <center><b>Company</center></b>
              <a href="aboutUs.html">About Us</a><br>
              Career<br>
              Blog<br>
              <a href="contectUs.html">Contact Us</a><br>
          </div>
          <div class="company">
              <center><b>Policies</center></b>
              Privacy Policies<br>
              Terms of Use<br>
              Secure Shopping<br>
              Copyright Policies<br>
          </div>
          <div class="company">
              <center><b>Help</center></b>
              Payment<br>
              Shipping<br>
              Return<br>
              FAQ<br>
          </div>
      </div><br>
      <div id="footer-row">
          <ul class="list-unstyled icons list-inline text-center">
              <li class="list-inline-item"><a href="https://www.facebook.com/" target="_blank">
                  <img src="https://d2g9wbak88g7ch.cloudfront.net/staticimages/facebook.png" alt="Facebook" width="32px" height="32px"></a></li>
              <li class="list-inline-item"><a href="https://twitter.com/" target="_blank">
                  <img src="https://d2g9wbak88g7ch.cloudfront.net/staticimages/twitter.png" alt="Twitter" width="32px" height="32px"></a></li>
              <li class="list-inline-item"><a href="https://www.linkedin.com/" target="_blank">
                  <img src="https://d2g9wbak88g7ch.cloudfront.net/staticimages/linkedin.png" alt="Linkedin" width="32px" height="32px"></a></li>
              <li class="list-inline-item"><a href="https://www.pinterest.co.uk/" target="_blank">
                  <img src="https://d2g9wbak88g7ch.cloudfront.net/staticimages/pinterest.png" alt="Pinterest" width="32px" height="32px"></a></li>
              <li class="list-inline-item"><a target="_blank" href="https://www.youtube.com/">
                  <img src="https://d2g9wbak88g7ch.cloudfront.net/staticimages/youtube.png" alt="Youtube" width="32px" height="32px"></a></li>
              <li class="list-inline-item"><a href="https://www.instagram.com/" target="_blank">
                  <img src="https://d2g9wbak88g7ch.cloudfront.net/staticimages/instagram.png" alt="Instagram" width="32px" height="32px"></a></li>
          </ul>
          <div class="col-md-12  text-center text-light copyrighttext mb-3" style="color:white;">
             Copyright © 2023 . Browserbooks.com.
             <span class="allrightreserve">All Rights Reserved</span>
         </div>
      </div>
</footer>

</body>
</html>