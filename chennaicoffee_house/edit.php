<?php
include('config.php');
$id=$_GET['id'];
$sel_qry=$conn->query("select * from user_table where id='$id'");
if($sel_qry->rowCount()==1)
{
    $sel_qry_arr=$sel_qry->fetch();
}
else{
  header("Location:dashboard.php");
}
if(isset($_POST['update']))
{
  $id=$_POST['id'];
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];
  $email=$_POST['email'];
  $phone_number=$_POST['phone_number'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];
  $date_time=$_POST['date_time'];
  $utyp=$_POST['utyp'];

  $edit_qry=$conn->query("update user_table set fname='$fname',lname='$lname',email='$email',phone_number='$phone_number',password='$password',cpassword='$cpassword',date_time='$date_time',utyp='$utyp'");

  if($edit_qry)
  {
    echo "<script>alert('Date update Successfully')
                  window.location='edit.php'</script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Chennai Coffee</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- owl stylesheets --> 
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    </head>
<body>
       <!--header section start -->
       <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
              
            </nav>
         </div>
      </div>
      <!--header section end --> 
    
<br><br><br><br><br>
<div style="text-align: center;" >
<h1>EDIT</h1>
</div>
<form method="post">
<div class=" offset-3" style="margin: 60px;">
<div class="row g-3">
  <div class="col-4">
    <div class="form-outline">
      <input type="text" id="form10Example1" name="id" class="form-control" value="<?=$sel_qry_arr['id']?>" />
     
    </div>
  </div>
  <div class="col-4">
    <div class="form-outline">
      <input type="text" id="form10Example2" name="fname" class="form-control" value="<?=$sel_qry_arr['fname']?>"/>
     
    </div>
  </div>
  <div class="col-4">
    <div class="form-outline">
      <input type="text" id="form10Example3" name="lname" class="form-control" value="<?=$sel_qry_arr['lname']?>"/>
     
    </div>
  </div>
  
</div>
</div>

<div class="offset-3" style="margin: 60px;">
<div class="row g-3">
<div class="col-4">
    <div class="form-outline">
      <input type="text" id="form10Example3" name="email" class="form-control" value="<?=$sel_qry_arr['email']?>"/>
     
    </div>
  </div>
  <div class="col-4">
    <div class="form-outline">
      <input type="tel" id="form10Example1" name="phone_number" class="form-control" value="<?=$sel_qry_arr['phone_number']?>" />
     
    </div>
  </div>
  <div class="col-4">
    <div class="form-outline">
      <input type="password" id="form10Example2" name="password" class="form-control" value="<?=$sel_qry_arr['password']?>"/>
     
    </div>
  </div>
</div></div>



<div class="offset-3" style="margin: 60px;">
<div class="row g-3">
  <div class="col-4">
    <div class="form-outline">
      <input type="password" id="form10Example3" name="cpassword" class="form-control" value="<?=$sel_qry_arr['cpassword']?>"/>
     
    </div>
  </div>
  <div class="col-4">
    <div class="form-outline">
      <input type="" id="form10Example3" name="date_time" class="form-control" value="<?=$sel_qry_arr['date_time']?>"/>
     
    </div>
    
  </div>
  <div class="col-4">
    <div class="form-outline">
      <input type="" id="form10Example3" name="utyp" class="form-control" value="<?=$sel_qry_arr['utyp']?>"/>
     
    </div>
  </div>
</div>
 
  
  <div class="mt-5 ">
    <button name="update" class="btn btn-primary">Update</button>
    <a class="dashboard" href="dashboard.php" class="btn btn-warning">

  </div>
  </form>

</div>
</div>
   <!-- footer section start -->
   <div class="footer_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">About</h3>
                  <p class="footer_text">Chennai Coffee House is an all-in-one supplier for Coffee Shops, Cafés, Restaurants, Takeaways, Hotels, Offices and even home coffee-lovers!

We’re always moving with the times – offering the latest products available in the coffee industry.</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h3 class="useful_text">Menu</h3>
                  <div class="footer_menu">
                     <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="gallery.php">Gallery</a></li>
                        <li><a href="services.php">Services</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Useful Link</h1>
                  <p class="dummy_text">Brands A-Z  Buy Coffee Wholesale</p>
               </div>
               <div class="col-lg-3 col-sm-6">
                  <h1 class="useful_text">Contact Us</h1>
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <i class="fa fa-map-marker" aria-hidden="true"></i><span class="padding_left_10">Address :Chennai</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-phone" aria-hidden="true"></i><span class="padding_left_10">Call : +91 9695949392</span>
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <i class="fa fa-envelope" aria-hidden="true"></i><span class="padding_left_10">Email : chennai _Coffee123@gmail.com</span>
                           </a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- footer section end -->
</body>
</html>