
<?php

 
if(array_key_exists('id', $_SESSION)){
  $anchor = '?page=NewCampground';


}else{

  $anchor ='?page=login';

}


?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Welcome to Yelp Campgrounds</h1>
    <p class="lead">View our hand picked campgrounds from all over the world.</p>
    
    <a href = "<?php echo $anchor; ?>" class="btn btn-primary  mx-auto">Add a new campground</a> 
  
  </div>
</div>

<div class="container">
    <div class = "row">
         
      <?php displayCampgrounds();?>

        
    </div>
</div>
    


