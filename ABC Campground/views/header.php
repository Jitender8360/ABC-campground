<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="stylesheet.css">    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>ABC Campground</title>
    
    
    <style>
	
.modal-dialog{
      margin-top: 30vh;
   margin-left: 40vw;
      }

#landing-header {
  z-index: 1;
  position: relative;
  text-align: center;
  padding-top: 40vh;
}


#landing-header h1 {
  color: #fff;
}


.slideshow { 
  position: fixed;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 0;
  list-style: none;
  margin: 0;
  padding: 0;
}


.slideshow li { 
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: no-repeat;
  opacity: 0;
  z-index: 0;
  animation: imageAnimation 50s linear infinite; 
}



.slideshow li:nth-child(1) { 
  background-image: url(Images/1.jpg) 
}
.slideshow li:nth-child(2) { 
  background-image: url(Images/3.jpg);
  animation-delay: 10s; 
}
.slideshow li:nth-child(3) { 
  background-image: url(Images/4.jpg);
  animation-delay: 20s; 
}
.slideshow li:nth-child(4) { 
  background-image: url(Images/2.jpg);
  animation-delay: 30s; 
}
.slideshow li:nth-child(5) { 
  background-image: url(Images/5.jpg);
  animation-delay: 40s; 
}


@keyframes imageAnimation { 
  0% { 
    opacity: 0; 
    animation-timing-function: ease-in;
  }
  10% {
    opacity: 1;
    animation-timing-function: ease-out;
  }
  20% {
    opacity: 1
  }
  30% {
    opacity: 0
  }
}

/* Older browser support - .no-cssanimations class added by modernizr */
.no-cssanimations .slideshow li {
	opacity: 1;
}


	</style>
  </head>
  <body>
 