<?php
include("config.php");
if(!$_SESSION['name'])
{
  header("Location:login.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
               
            </nav>
            
         </div>
      </div>
      <!--header section end -->  
 <div>
   
    <div style="float: right;">
    
     
    <a class="m-4 btn btn-warning" href="logout.php" >logout</a>
    </div>
  

      <div class="col-12" >
      <div class="table-responsive">
        <h1>User Table</h1>
  <table class="table table-hover table-dark" style="margin-top: 10px;" >
    <thead>
      <tr>
        <th>ID</th>
        <th>FIRST NAME</th>
        <th>LAST NAME</th>
        <th>EMAIL</th>
        <th>PHONE NUMBER</th>
        <th>PASSWORD</th>
        <th>CPASSWORD</th>
        <th>DATE TIME</th>
        
      </tr>
    </thead>

    <tbody>
       <?php
    $sel_qry=$conn->query("select * from user_table");
    if($sel_qry->rowCount()>0)
    {
        $result=$sel_qry->fetchAll();
       foreach($result as $sel_qry_arr)
       {
    
?>
      <tr>
      <th><?=$sel_qry_arr['id']?></th>
        <td><?=$sel_qry_arr['fname']?></td>
        <td><?=$sel_qry_arr['lname']?></td>
        <td><?=$sel_qry_arr['email']?></td>
        <td><?=$sel_qry_arr['phone_number']?></td>
        <td><?=$sel_qry_arr['password']?></td>
        <td><?=$sel_qry_arr['cpassword']?></td>
        <td><?=$sel_qry_arr['date_time']?></td>
       
        <?php
        if($_SESSION['utyp']==1)
            {
        ?>
        <td><a href="edit.php?id=<?=$sel_qry_arr['id']?>" class="btn btn-primary">Edit</a></td>
        <td><a href="delete.php?id=<?=$sel_qry_arr['id']?>" class="btn btn-danger">Delete</a></a></a></td>
        <?php }?>
      </tr>
      <?php
       }
    }
?>
    </tbody>
    
</table>

      </div>
</div>
 </div>
    
     
<br>
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