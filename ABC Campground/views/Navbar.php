 <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="?">ABC Campground</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="nav-item "><a class="nav-link" href="?page=campground">Campgrounds</a></li>
        	<?php if($_SESSION['id']){ ?>
                     <li class="mt-2 px-2 text-white align-middle"> Signed in as <?php echo $_SESSION['email'] ;?></li>
          			<li class="nav-item"><a class="nav-link" href="?function=logout">logout</a></li>
             <?php } else{?>
                    <li class="nav-item "><a class="nav-link" href="?page=login">Login</a></li>
                    <li class="nav-item"><a class="nav-link" href="?page=register">Sign up</a></li>
   			<?php } ?>
          
        </ul>
      </div>
</nav>