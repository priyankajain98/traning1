<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";





// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}


?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="mystyle.css">

    <title>Contact us</title>
  </head>
  <body>
  <?php include 'header.php';

		if(isset($_POST['submit']))
		{
		$name=$_POST["fname"];
		$midname=$_POST["mname"];
		$lastname=$_POST["lname"];
		$dob=$_POST["dob"];
		$Gender="male";	
		$address=$_POST["address"];
		$zip=$_POST["zipcode"];
		$city=$_POST["city"];
		$state=$_POST["state"];
		$email=$_POST["e-mail"];
		$phone=$_POST["phone"];
		
		$sql = "INSERT INTO contact(`fname`, `mname`, `lname`, `dob`, `Gender`, `address`, `country`, `zipcode`, `city`, `state`, `e-mail`, `phone`) 
		VALUES ('$name', '$midname', '$lastname', '$dob','$Gender',$address','$zip', '$city','$state','$email', '$phone')";
		
		
		if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
		}
		else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		}


  
  
  ?>
	
 

<section class="contact-page">
  <div class="container">
      <div class="section-title text-center">
          <span class="section-title__tagline">Contact With Us</span>
          <h2 class="section-title__title">We love to hear from our <br> happy customers</h2>
      </div>
      <div class="row" style="font-family:Verdana, Geneva, Tahoma, sans-serif; color: grey;">
          <div class="col-xl-6 col-lg-6">
              <div class="contact-page__left">
                  <div class="contact-page__img">
                      <img src="image/contact-page-img-1.jpg" alt="">
                  </div>
                  <p class="contact-page__text">There are many variations of passages of available but the majority have suffered alteration in some form, by injected humou or randomised words even slightly believable.</p>
                  <div class="contact-page__contact-info">
                      <ul class="contact-page__contact-list list-unstyled">
                          <li>
                              <div class="">
                                  <ul>
                                    <div class="iconform" style="height: 65px;width: 65px;background-color: #15c79f;border-radius: 50%;font-size: 35px;color: white;">
                                      <i style="padding: 14px 0 0 15px;" class="fa fa-commenting-o"></i> 
                                    </div> 
                                    
                              </div>
                              <div class="text">
                                  <p>Call Anytime</p>
                                  <a href="tel:92 666 888 0000">92 666 888 0000</a>
                              </div>
                          </li>
                          <li>
                              <div class="">
                                <ul>
                                    <div class="iconform" style="height: 65px;width: 65px;background-color: #15c79f;border-radius: 50%;font-size: 35px;color: white;">
                                      <i style="padding: 14px 0 0 15px;" class="fa fa-envelope-o" aria-hidden="true"></i>
                                    </div> 
                              </div>
                              <div class="text">
                                  <p>Send Email</p>
                                  <a href="mailto:needhelp@company.com">needhelp@company.com</a>
                              </div>
                          </li>
                          <li>
                              <div class="">
                                <ul>
                                  <div class="iconform" style="height: 65px;width: 65px;background-color: #15c79f;border-radius: 50%;font-size: 35px;color: white;">
                                    <i style="padding: 14px 0 0 15px;" class="fa fa-map-marker"></i>
                                  </div> 
                                  
                              </div>
                              <div class="text">
                                  <p>Visit Office</p>
                                  <h5>80 broklyn golden street</h5>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
          </div>
          <div class="col-xl-6 col-lg-6">
              <div class="contact-page__form">
                  <form action="" method="post">
					  <div class="row">
							<div class="col-xl-4">
                              <div class="contact-page__input-box">
                                  <input type="text" placeholder="first-name" name="fname">
                              </div>
							</div>
                          <div class="col-xl-4">
                            <div class="contact-page__input-box">
                                <input type="text" placeholder="mid-name" name="mname">
                            </div>
                        </div>
                        <div class="col-xl-4">
                          <div class="contact-page__input-box">
                            <input type="text" placeholder="last-name" name="lname">
                          </div>
                      </div>
                      </div>
                      <div class="row">
                        <div class="col-xl-6">
                            <div class="contact-page__input-box">
                              <label for="dob">DOB</label>
                                <input type="date"  name="dob">
                            </div>
                        </div>
                        <div class="col-xl-6">
                          <div class="contact-page__input-box">
                            <label for="cars">Gender:</label>
                            <select id="gender" name="gender">
                              <option value="default">---</option>
                            <option value="male">Male</option>
                           <option value="female">Female</option>
                          </select>
                          </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="contact-page__input-box">
                            <textarea name="address" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-xl-6">
                      <div class="contact-page__input-box">
                        <label for="country">Country</label>
                        <select id="country" name="country">
                          <option value="default">---</option> 
                          <option value="India">India</option>
                          <option value="Albania">Albania</option>
                          <option value="Algeria">Algeria</option>
                          <option value="American Samoa">American Samoa</option>
                          <option value="Andorra">Andorra</option>
                          </select>
                      </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="contact-page__input-box">
                          <input type="text" placeholder="pincode/zip-code" name="zipcode">
                        </div>
                    </div>
                  </div>
                      <div class="row">
                        <div class="col-xl-6">
                          <div class="contact-page__input-box">
                            <input type="text" placeholder="Enter City" name="city">
                          </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="contact-page__input-box">
                          <input type="text" placeholder="Enter State" name="state">
                        </div>
                    </div>
                    </div> 
                    <div class="row">
                      <div class="col-xl-12">
                        <div class="contact-page__input-box">
                          <input type="text" placeholder="E-mail" name="e-mail">
                        </div>
                          </div>           
                         <div class="row">
                          <div class="col-xl-12">
                              <div class="contact-page__input-box">
                                  <input type="text" placeholder="Phone Number" name="phone">
                              </div>
                          </div>
                              <div class="submit">
								<input type="submit" name="submit">
                            </div>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>
</section>

  </body>
  </html>