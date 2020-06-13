<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Aurelia's Baskets</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    	 

</head>
<?php 
$connection = mysqli_connect("localhost","root", "" , "aurelias"); 
// Establishing Connection with Server
 $db = mysqli_select_db( $connection , "Clients"); // Selecting Database from Server
 if(isset($_POST['submit'])){
 // Fetching variables of the form which travels in URL
 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $city = $_POST['city'];
 $state = $_POST['state'];
 $email = $_POST['email']; 
 $phonenumber = $_POST['phonenumber'];       $address = $_POST['address'];
 $addphonenumber = $_POST['addphonenumber'];

 if($firstname != '' || $email != '' )
{ //Insert Query of SQL
 $query = mysqli_query("(insert into Clients(firstname, lastname, city, state , email , phonenumber ,address , appphonenumber ) values ('firstname', '$lastname', '$city', '$state' , '$email' , '$phonenumber' , '$address' , '$addphonenumber')"); 

echo 'empty';

}else{
echo 'not empty';
}


 
} mysqli_close($connection);
 // Closing Connection with Server
 
?> 
<body>
    <div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
        <!--header starts-->
        <header id="header" class="header-scroll top-header headrom">
            <!-- .navbar -->
            <nav class="navbar navbar-dark">
                <div class="container">
                    <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse"
                        data-target="#mainNavbarCollapse">&#9776;</button>
                    <a class="navbar-brand" href="index-2.html"> <img class="img-rounded nav-logo"
                            src="img/logo1.png" alt=""> </a>
                    <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                        <ul class="nav navbar-nav">
                            <li class="nav-item"> <a class="nav-link" href="index-2.html">Home </a> </li>
                                <li class="nav-item"> <a class="nav-link" href="profile.html">About </a> </li>
                                <li class="nav-item"> <a class="nav-link  active" href="food_results.html">Pricing </a> </li>
                                <li class="nav-item"> <a class="nav-link" href="contact.html">Contact Us <span
                                    class="sr-only">(current)</span></a> </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false">Restaurants</a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="restaurants.html">Search
                                        results</a> <a class="dropdown-item" href="profile.html">Profile page</a></div>
                            </li>
                            <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                                <div class="dropdown-menu"> <a class="dropdown-item" href="pricing.html">Pricing</a> <a
                                        class="dropdown-item" href="contact.html">Contact</a> <a class="dropdown-item"
                                        href="submition.html">Submit restaurant</a> <a class="dropdown-item"
                                        href="registration.html">Registration</a>
                                    <div class="dropdown-divider"></div> <a class="dropdown-item"
                                        href="checkout.html">Checkout</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- /.navbar -->
        </header>
        <div class="page-wrapper food-page-wrapper">
            <!-- top Links -->
            <!-- <div class="top-links">
                <div class="container">
                    <ul class="row links">
                        <li class="col-xs-12 col-sm-3 link-item"><span>1</span><a href="index-2.html">Choose Your
                                Location</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>2</span><a href="restaurants.html">Choose
                                Restaurant</a></li>
                        <li class="col-xs-12 col-sm-3 link-item active"><span>3</span><a href="profile.html">Pick Your
                                favorite food</a></li>
                        <li class="col-xs-12 col-sm-3 link-item"><span>4</span><a href="checkout.html">Order and Pay
                                online</a></li>
                    </ul>
                </div>
            </div> -->
            <!-- end:Top links -->
            <!-- start: Inner page hero -->
            <!-- <div class="inner-page-hero bg-image" data-image-src="images/profile-banner.jpg">
                <div class="container"> </div>
                 end:Container 
            </div> -->
            <!-- <div class="result-show">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                            <p><span class="primary-color"><strong>124</strong></span> Results so far
                        </div>
                        </p>
                        <div class="col-sm-9">
                            <select class="custom-select pull-right">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- //results show -->
            <section class="restaurants-page food-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 food-header">
                            <div class="food-main">
                                <div class="main-block">
                                    <div class="sidebar-title white-txt">
                                        <h6>Breakfast Tray Options</h6> <i class="fa fa-cutlery pull-right"></i>
                                    </div>
                                    <!-- Each popular food item starts -->
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                        <div class="food-item-wrap">
                                            <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket-20200518-0014.jpg">
                                                <div class="distance"><i class="fa fa-pin"></i>Breakfast Option</div>
                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                            </div>
                                            <div class="content">
                                                <h5><a href="#">English Breakfast Tray</a></h5>
             
             <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                class="panel-toggle" href="#faq1" aria-expanded="true"><i
                                                    class="ti-info-alt" aria-hidden="true"></i>View Menu</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="faq1" aria-expanded="true" role="article">
                                        <div class="panel-body">
                                                <div class="product-name">Crepes or Pancake or Waffles <br /> Cereal or Pastry Bowl with Butter/Jam <br /> Sausage </br > Eggs <br /> Baked Beans <br /> Salad <br/> Salad Dressing <br /> Nutella <br /> Maple Syrup <br /> A Glass Of Yogurt <br /> A Bowl of Fresh Fruits <br /> A Bottle of Fresh Juice <br /> A Bottle Of Fresh Milk <br /> A Bottle of Water <br /> A Box of Chocolate </br > A Box of Tea</div>
                                                <br /> 
                 </div>
                                    </div>
                                </div>
                                                <div class="price-btn-block"> <span class="price">&#8358 65,000.00</span> <a
                     data-toggle="modal" data-target="#myModal1"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> 



<div class="form-group"> 






<h1>Pay with Rave</h1>
<div class="container" id="ravepay">
<row>
<div class="col-md-6 col-md-offset-4">
	
<form action="/storage/sdcard0/htdocs/mydata.php" method="post">
<div class="row">
    <div class="col-12">

        <label for="">Firstname</label>
        <input type="text" name="firstname" id="firstname" class="form-control border-input" value="" placeholder="Enter your firstname" style="margin-bottom: 30px;">
            
        <label for="">Lastname</label>
        <input type="text" name="lastname" id="lastname" class="form-control border-input" value="" placeholder="Enter your lastname" style="margin-bottom: 30px;">
            
        <label for="">Mobile Number</label>
        <input type="number" name="phonenumber" id="phonenumber" class="form-control border-input" value="" placeholder="Enter your Mobile Number" style="margin-bottom: 30px;">
            
        <label for="">Additional Phone Number</label>
        <input type="number" name="addphonenumber" id="addphonenumber" class="form-control border-input" value="" placeholder="Enter an additional mobile number" style="margin-bottom: 30px;">

        <label for="">State</label>
        <input type="text" name="state" id="state" class="form-control border-input" value="" placeholder="Enter your state" style="margin-bottom: 30px;">
            
        <label for="">City</label>
        <input type="text" name="city" id="city" class="form-control border-input" value="" placeholder="Enter your city" style="margin-bottom: 30px;">
            
        <label for="">Delivery Address</label>
        <input type="text" name="address" id="address" class="form-control border-input" value="" placeholder="Delivery Address" style="margin-bottom: 30px;">

            
        <input type="submit" name="submit" value="submit"></input>

    </div>
</div>

</form>
 </div> 
 




 
      
    </div>
    </div>      
      </div>      
</div>
                                            </div>
                                            
                                        </div>
                                    </div>
              
              </div>
              </div>                      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                        <div class="food-item-wrap">
                                            <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket___B9eCLv3nxud___.jpg">
                                                <div class="distance"><i class="fa fa-pin"></i>Breakfast Option</div>
                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                            </div>
                                            <div class="content">
                                                <h5><a href="#"> Nigerian Breakfast Tray(With Grilled Fish)</a></h5>
                   
                   <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                class="panel-toggle" href="#faq2" aria-expanded="true"><i
                                                    class="ti-info-alt" aria-hidden="true"></i>View Menu</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="faq2" aria-expanded="true" role="article">
                                        <div class="panel-body">
                                                <div class="product-name">Yam(Boiled or Fried) <br />Plantain(Boiled or Fried) <br /> Sweet Potato(Boiled or Fried) </br > Egg Sauce <br /> Vegetable Shrimp Sauce <br /> Cereal or Pastry Bowl with Butter/Jam <br/> Sausage <br /> Bacon <br /> Baked Beans <br /> Salad <br /> Salad Dressing <br />  A Bowl of Fresh Fruits <br /> A Bottle of Fresh Juice <br /> A Bottle Of Fresh Milk <br /> A Bottle of Water <br /> A Box of Chocolate </div>
                                                <br />
                                                                         </div>
                                    </div>
                                </div>
                                    
                                                <div class="price-btn-block"> <span class="price">&#8358 85,000.00</span> <a
                     data-toggle="modal" data-target="#myModal2"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 85,000.00
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
 </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                        <div class="food-item-wrap">
                                            <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket___B9eCLv3nxud___.jpg">
                                                <div class="distance"><i class="fa fa-pin"></i>Breakfast Option</div>
                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                            </div>
                                            <div class="content">
                                                <h5><a href="#">Nigerian Breakfast Tray(Without Grilled Fish)</a></h5>
                   
                   <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                class="panel-toggle" href="#faq3" aria-expanded="true"><i
                                                    class="ti-info-alt" aria-hidden="true"></i>View Menu</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="faq3" aria-expanded="true" role="article">
                                        <div class="panel-body">
                   
                             <div class="product-name">Yam(Boiled or Fried) <br />Plantain(Boiled or Fried) <br /> Sweet Potato(Boiled or Fried) </br > Egg Sauce <br /> Vegetable Shrimp Sauce <br /> Cereal or Pastry Bowl with Butter/Jam <br/> Sausage <br /> Bacon <br /> Baked Beans <br /> Salad <br /> Salad Dressing <br />  A Bowl of Fresh Fruits <br /> A Bottle of Fresh Juice <br /> A Bottle Of Fresh Milk <br /> A Bottle of Water <br /> A Box of Chocolate  <br />  Grilled Fish</div>
                                                </div>
                                    </div>
                                </div>
                                                <div class="price-btn-block"> <span class="price">&#8358 80,000.00</span> <a
                     data-toggle="modal" data-target="#myModal3"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 80,000.00
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                        <div class="food-item-wrap">
                                            <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket___B_Uc06DlnQf___.jpg">
                                                <div class="distance"><i class="fa fa-pin"></i>Breakfast Tray</div>
                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                            </div>
                                            <div class="content">
                                                <h5><a href="#">Champagne Breakfast Tray(Butlers Tray)</a></h5>
              
              <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                class="panel-toggle" href="#faq4" aria-expanded="true"><i
                                                    class="ti-info-alt" aria-hidden="true"></i>View Menu</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="faq4" aria-expanded="true" role="article">
                                        <div class="panel-body">
                                                <div class="product-name">Crepes or Pancake or Waffles <br /> Cereal or Pastry Bowl with Butter/Jam <br /> Sausage </br > Eggs <br /> Baked Beans <br /> Salad <br/> Salad Dressing <br /> Nutella <br /> Maple Syrup <br /> A Glass Of Yogurt <br /> A Bowl of Fresh Fruits <br /> A Bottle of Fresh Juice <br /> A Bottle Of Fresh Milk <br /> A Bottle of Water <br /> A Box of Chocolate </br > A Medium Sized Champagne Bottle</div>
                                                <br />
                  </div>
                                    </div>
                                </div>
                                                              <div class="price-btn-block"> <span class="price">&#8358 85,000.00</span> 
                                                              
      <!--begins-->                                                        <a
                     data-toggle="modal" data-target="#myModal"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 85,000.00
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
  <!--ends    -->
      
      
                                             </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                        <div class="food-item-wrap">
                                            <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket-20200518-0005.jpg">
                                                <div class="distance"><i class="fa fa-pin"></i>Breakfast Options</div>
                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                            </div>
                                            <div class="content">
                                                <h5><a href="#">Keto Breakfast Tray(Butlers Tray)</a></h5>
                
                <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                class="panel-toggle" href="#faq5" aria-expanded="true"><i
                                                    class="ti-info-alt" aria-hidden="true"></i>View Menu</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="faq5" aria-expanded="true" role="article">
                                        <div class="panel-body"> 
                                                <div class="product-name">Stuffed Chicken <br /> Jumbo Prawns <br /> Vegetable Salad </br > Shrimp Salad <br /> Pepper Salad <br /> Boiled Eggs or Sunny Side Up <br/> Strawberries/Almond Nuts <br /> A Glass of Greek Yogurt <br /> A Bowl of Fresh Fruits(Keto Compliant) <br /> A Bottle of Soy or Almond Milk <br /> A Bottle of Fresh Juice(Keto Compliant) <br /> A Bottle of Water <br /> A Box of Chocolate </br ></div>
                                                <br /><br /><br /><br /><br />
                        </div>
                                    </div>
                                </div>                   
                                     <div class="price-btn-block"> <span class="price">&#8358 90,000.00</span> <a
                     data-toggle="modal" data-target="#myModal4"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 90,000.00
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                        <div class="food-item-wrap">
                                            <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket-20200518-0018.jpg">
                                                <div class="distance"><i class="fa fa-pin">Breakfast Option(Butler Tray)</i></div>
                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                            </div>
                                            <div class="content">
                                                <h5><a href="#">Asian Breakfast Tray(Butler Tray)</a></h5>
                  
                  <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                class="panel-toggle" href="#faq6" aria-expanded="true"><i
                                                    class="ti-info-alt" aria-hidden="true"></i>View Menu</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="faq6" aria-expanded="true" role="article">
                                        <div class="panel-body"> 
                                                <div class="product-name">	Asian Rice <br /> Grilled Chicken <br /> Prawns </br > Stir Fry <br /> Chicken Sauce <br /> Shrimp Sauce or Minced Meat Sauce <br/> Pepper Sauce <br /> Salad <br /> Salad Dressing <br/> Brownies <br /> A Bowl of Fresh Fruits <br /> A Bottle of Red Wine <br /> A Bottle of Fresh Juice <br /> A Bottle of Water <br /> A Box of Chocolate </br ></div>
                                                <br /><br /><br />
                      
                    </div>
                                    </div>
                                </div>                   
                           
                                                <div class="price-btn-block"> <span class="price">&#8358 100,000.00</span> <a
                     data-toggle="modal" data-target="#myModal5"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal5" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 100,000.00
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                        <div class="food-item-wrap">
                                            <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket_B7d37n2FioC.jpg">
                                                <div class="distance"><i class="fa fa-pin"></i>Breakfast Option</div>
                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                            </div>
                                            <div class="content">
                                                <h5><a href="#">Vegan Breakfast Tray(Butlers Tray)</a></h5>
                   
                   <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                class="panel-toggle" href="#faq7" aria-expanded="true"><i
                                                    class="ti-info-alt" aria-hidden="true"></i>View Menu</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="faq7" aria-expanded="true" role="article">
                                        <div class="panel-body"> 
                                                <div class="product-name">Vegetable Pasta(Asparagus,Coloured Pepper,Broccoli) <br /> Avocado Salad(Avocado,Cherry,Tomatoes Sweet Corn) <br /> Vegan Tomatoe Sauce </br > Roasted Irish Potatoe <br /> SautÃ¨ed Zucchini <br /> Mushroom Gravy <br/> Vegetable Soup <br /> Baked Fruits for Desert(Banana,Apple,Strawberries,Pineapple) <br /> Nut Mix <br/>  A Bowl of Fresh Fruits <br /> A Bottle of Fresh Juice <br /> A Bottle of Water </div>
                                                <br /><br /><br />
                     
                 </div>
                                    </div>
                                </div>                    
                                                <div class="price-btn-block"> <span class="price">&#8358 95,000.00</span> <a
                     data-toggle="modal" data-target="#myModal6"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 95,000.00
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                              
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="restaurants-page food-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 food-header">
                            <div class="food-main">
                                <div class="main-block">
                                    <div class="sidebar-title white-txt">
                                        <h6>Lunch Tray Options</h6> <i class="fa fa-cutlery pull-right"></i>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                        <div class="food-item-wrap">
                                            <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket___B99NHL1lSVP___.jpg">
                                                <div class="distance"><i class="fa fa-pin"></i>Lunch Option</div>
                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                            </div>
                                            <div class="content">
                                                <h5><a href="#">Benachin Lunch Tray(Butlers Tray Without Champagne)</a></h5>
                  
                      <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                class="panel-toggle" href="#faq8" aria-expanded="true"><i
                                                    class="ti-info-alt" aria-hidden="true"></i>View Menu</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="faq8" aria-expanded="true" role="article">
                                        <div class="panel-body">                           <div class="product-name">Jollof Rice(Benachin) <br /> Grilled Chicken <br /> Fried Plantain </br > Jumbo Prawns in Pepper Sauce <br /> White Fish Sauce <br /> Pepper Sauce <br/> Nuts<br /> Salad <br /> Salad Dressing <br/>  A Bowl of Fresh Fruits <br /> A Bottle of Fresh Juice <br /> A Bottle of Water <br /> A Box Of Chocolate
                                            </div>
                                            <br /><br /><br /><br />
                         </div>
                                    </div>
                                </div>                    
                                        <div class="price-btn-block"> <span class="price">&#8358 85,000.00</span> <a
                     data-toggle="modal" data-target="#myModal8"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal8" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 85,000.00
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
 </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                        <div class="food-item-wrap">
                                            <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket___B99NHL1lSVP___.jpg">
                                                <div class="distance"><i class="fa fa-pin"></i>Lunch Option</div>
                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                            </div>
                                            <div class="content">
                                                <h5><a href="#">Benachin Lunch Tray(Butlers Tray With Champagne)</a></h5>
                  
                  <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                class="panel-toggle" href="#faq9" aria-expanded="true"><i
                                                    class="ti-info-alt" aria-hidden="true"></i>View Menu</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="faq9" aria-expanded="true" role="article">
                                        <div class="panel-body"> 
                                                <div class="product-name">Jollof Rice(Benachin) <br /> Grilled Chicken <br /> Fried Plantain </br > Jumbo Prawns in Pepper Sauce <br /> White Fish Sauce <br /> Pepper Sauce <br/> Nuts<br /> Salad <br /> Salad Dressing <br/>  A Bowl of Fresh Fruits <br /> A Bottle of Fresh Juice <br /> A Bottle of Water <br /> A Box Of Chocolate <br /> Bottle of Champagne
                                            </div>
                                            <br /><br /><br />
                  </div>
                                    </div>
                                </div>                    
                                                   <div class="price-btn-block"> <span class="price">&#8358 100,000.00</span> <a
                     data-toggle="modal" data-target="#myModal9"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal9" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 100,000.00
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                        <div class="food-item-wrap">
                                            <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket___B8V6AURlnDi___.jpg">
                                                <div class="distance"><i class="fa fa-pin"></i>Lunch Option</div>
                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                            </div>
                                            <div class="content">
                                                <h5><a href="#">Surf 'N' Turf Lunch Tray(Butlers Tray)</a></h5>
                
                 <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                class="panel-toggle" href="#faq10" aria-expanded="true"><i
                                                    class="ti-info-alt" aria-hidden="true"></i>View Menu</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="faq10" aria-expanded="true" role="article">
                                        <div class="panel-body">
                                                <div class="product-name">Shrimp Fried Rice <br /> Grilled Chicken <br /> Pasta </br > Minced Meat Sauce <br /> Chicken Sauce <br /> Pepper Sauce <br/> Salad <br /> Salad Dressing <br/>  A Bowl of Fresh Fruits <br /> A Bottle of Fresh Juice <br /> A Bottle of Water <br /> A Box Of Chocolate
                                            </div>
                                            <br /><br /><br /><br /><br />
                 </div>
                                    </div>
                                </div>                    
                                                        <div class="price-btn-block"> <span class="price">&#8358 95,000.00</span> <a
                     data-toggle="modal" data-target="#myModal10"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal10" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 95,000.00
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                        <div class="food-item-wrap">
                                            <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket_1___B9OYevmnhUq___.jpg">
                                                <div class="distance"><i class="fa fa-pin"></i>Lunch Option</div>
                                                <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                        class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                                <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                            </div>
                                            <div class="content">
                                                <h5><a href="#">Sea Delight Lunch Tray(Butlers Tray)</a></h5>
                       
                         <div class="panel">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><a data-parent="#accordion" data-toggle="collapse"
                                                class="panel-toggle" href="#faq11" aria-expanded="true"><i
                                                    class="ti-info-alt" aria-hidden="true"></i>View Menu</a></h4>
                                    </div>
                                    <div class="panel-collapse collapse" id="faq11" aria-expanded="true" role="article">
                                        <div class="panel-body">
                          
                                                <div class="product-name">Salmon Fish <br /> Shrimp Salad <br /> Honey Glazed Carrot and Asparagus with Lemon </br > Calamari <br /> Crab <br /> Bread Rolls <br /> Cream Sauce <br /> Pepper Sauce <br/> Salad <br /> Salad Dressing <br/>  A Bowl of Fresh Fruits <br /> A Bottle of White Wine<br /> A Bottle of Fresh Juice <br /> A Bottle of Water <br /> A Box Of Chocolate
                               </div>
                               <br />
                    </div>
                                    </div>
                                </div>                    
                     
                    
                                                <div class="price-btn-block"> <span class="price">&#8358 95,000.00</span> <a
                     data-toggle="modal" data-target="#myModal11"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal11" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 95,000.00
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
</div>
                                            </div>
                                            
                                        </div>
                                    </div>
                          
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="restaurants-page food-body">
                <div class="container">
                    <div class="row">
                        <div class="col-12 food-header">
                            <div class="food-main">
                                <div class="main-block">
                                    <div class="sidebar-title white-txt">
                                        <h6>Other Gift Items</h6> <i class="fa fa-cutlery pull-right"></i>
                                    </div>
                                    
                                </div>
                        <div class="col-12">
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap special-item">
                                        <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket___B74EZ-PHqou___.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>Gift Items</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">Personalized Bottle Of Champagne</a></h5>
                                            <div class="product-name"></div>
                                            <div class="price-btn-block"> <span class="price">&#8358</span> <a
                     data-toggle="modal" data-target="#myModal12"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal12" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
 </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <!-- Each popular food item starts -->
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap special-item">
                                        <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket___Btd8aejHa35___.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>Gift Items</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">Flower Box With Chocolate</a></h5>
                                            <div class="product-name"></div>
                                            <div class="price-btn-block"> <span class="price">&#8358</span> <a
                     data-toggle="modal" data-target="#myModal13"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal13" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
</div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                            </div>
                          <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 food-item">
                                    <div class="food-item-wrap special-item">
                                        <div class="figure-wrap bg-image" data-image-src="img/aureliasbasket___Btazj6KHyJd___.jpg">
                                            <div class="distance"><i class="fa fa-pin"></i>Gift Items</div>
                                            <div class="rating pull-left"> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                                    class="fa fa-star"></i> <i class="fa fa-star-o"></i> </div>
                                            <div class="review pull-right"><a href="#">198 reviews</a> </div>
                                        </div>
                                        <div class="content">
                                            <h5><a href="#">Box Of Roses</a></h5>
                                            <div class="product-name"></div>
                                            <div class="price-btn-block"> <span class="price">&#8358</span> <a
                     data-toggle="modal" data-target="#myModal14"                                  href="#" class="btn theme-btn-dash pull-right">Order
                                                        Now</a>
     <div class="modal fade" id="myModal14" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
        <h4 class="modal-title" id="myModalLabel">Check Out</h4>
      </div>
      <div class="modal-body">
<div class=​"dropdown-menu"​> <form class="px-4 py-3"> <div class="form-group"> 
<label for=​"exampleDropdownFormEmail1"​>​Fullname</label> <input type="email" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Your Fullname"​> </div> <div class="form-group"> 
<label for=​"Address"​>​Delivery Address</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"Delivery Address"​> </div> <div class="form-group"> <label for=​"Mobile Number"​>​Mobile Number​</label> <input type="number" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"+234 0000 0000"​> 
<label for=​"exampleDropdownFormEmail1"​>​State</label> <input type="text" class="form-control" id=​"exampleDropdownFormEmail1" placeholder=​"State"​> </div> <div class="form-group"> <label for=​"exampleDropdownFormPassword1"​>​City</label> <input type="password" class="form-control" id=​"exampleDropdownFormPassword1" placeholder=​"City"​> 
</div> <div class="form-check"> &#8358 
 </div> <button type="submit" class="btn btn-primary">Check Out!</button> </form> <div class=​"dropdown-divider"​></div> </div>




        
      </div>
      <div class="modal-footer">
     
    
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
    </div>
    </div>      
      </div>      
</div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                            </div>
                          
                            <!-- end:right row -->
                        </div>
                    </div>
                </div>
            </section>
   <!-- start: FOOTER -->
   <footer class="footer">
    <div class="container">
        <!-- top footer statrs -->
        <div class="row top-footer">
            <div class="col-xs-12 col-sm-3 footer-logo-block color-gray">
                               <a href="#"> <img src="img/logo1.png" class="footer-logo" alt="Footer logo"> </a> <span>Luxurious Experiences &amp; Services </span></div>
            <div class="col-xs-12 col-sm-2 about color-gray">
                <h5>About Us</h5>
                <ul>
                    <li><a href="#">About us</a> </li>
                    <!-- <li><a href="#">History</a> </li> -->
                    <li><a href="#">Our Team</a> </li>
                    <li><a href="#">We are hiring</a> </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-2 how-it-works-links color-gray">
                <h5>How it Works</h5>
                <ul>
                    <li><a href="#">Enter your location</a> </li>
                    <li><a href="#">Choose restaurant</a> </li>
                    <li><a href="#">Choose meal</a> </li>
                    <li><a href="#">Pay via credit card</a> </li>
                    <li><a href="#">Wait for delivery</a> </li>
                </ul>
            </div>
            <div class="col-xs-12 col-sm-2 pages color-gray">
                <h5>Pages</h5>
                <ul>
                    <li><a href="#">Homepage</a> </li>
                    <li><a href="#">Make Order</a> </li>
                    <li><a href="#">About Us</a> </li>
                  <!--  <li><a href="#"></a> </li> -->
                  <!--  <li><a href="#">Add to cart</a> </li> -->
                </ul>
            </div>
            <div class="col-xs-12 col-sm-3 popular-locations color-gray">
                <h5>Popular locations</h5>
                <ul>
                    <li><a href="#">Lagos</a> </li>
                    <li><a href="#">Benin</a> </li>
                  <!--  <li><a href="#"></a> </li>
                    <li><a href="#">Sibenik</a> </li>
                    <li><a href="#">Zagreb</a> </li>
                    <li><a href="#">Brcko</a> </li>
                    <li><a href="#">Beograd</a> </li>
                    <li><a href="#">New York</a> </li>
                    <li><a href="#">Gradacac</a> </li>
                    <li><a href="#">Los Angeles</a> </li> -->
                </ul>
            </div>
        </div>
        <!-- top footer ends -->
        <!-- bottom footer statrs -->
        <div class="bottom-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-3 payment-options color-gray">
                    <h5>Payment Options</h5>
                    <ul>
                        <li>
                            <a href="#"> <img src="images/paypal.png" alt="Paypal"> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="images/mastercard.png" alt="Mastercard"> </a>
                        </li>
                        <li>
                            <a href="#"> <img src="images/maestro.png" alt="Maestro"> </a>
                        </li>
                  
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 address color-gray">
                    <h5>Address:</h5>
                      <h5>Phone: <a href="tel:+2349029951145">+2349029951145</a></h5>
                       <h5>Social Media: <a href="#">@aureliasbaskets</a></h5>
            
                </div>
                <div class="col-xs-12 col-sm-5 additional-info color-gray">
                    <h5>Addition informations</h5>
                    <p>Join the thousands of people who benefit from Aurelias Baskets
                    </p>
                </div>
            </div>
        </div>
        <!-- bottom footer ends -->
    </div>
</footer>
<!-- end:Footer -->
        </div>
    </div>
    
    
    <!-- end:page wrapper -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/animsition.min.js"></script>
    <script src="js/bootstrap-slider.min.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/headroom.js"></script>
    <script src="js/foodpicky.min.js"></script>
    
<script type="text/javascript" src="https://api.ravepay.co/flwv3-pug/getpaidx/api/flwpbf-inline.js"></script>

	 
 
	



</body>


</html>