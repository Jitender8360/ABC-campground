<?php
	include("functions.php");
	include("views/header.php");


if((isset($_GET['page'])) || (isset($_GET['action']))){
	include("views/Navbar.php");
	

  if($_GET['page']=='campground'){
        include("views/Campgrounds.php");

      }else if($_GET['page']=='login'){
        include("views/login.php");

      }else if($_GET['page']=='register'){
        include("views/register.php");
    
    }else if($_GET['page']=='NewCampground'){
        include("views/NewCampground.php");
    
    }else if($_GET['action']=='newcamp'){
        include("actions.php");
    
      }else if($_GET['page']=='campdetails'){
        include("views/campdetails.php");
    
      }else if($_GET['page']=='NewComment'){
        include("views/NewComment.php");
    
      }
include("views/footer.php");
}else{
        include("views/home.php");

}

?>
