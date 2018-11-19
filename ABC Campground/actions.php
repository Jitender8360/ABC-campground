<?php
/*

if($_GET['action']=="NewCampground"){


 if (array_key_exists('id', $_SESSION)){
      $_SESSION['id']= $_POST['ID'];    

     header('Location: http://expertdeveloper-com.stackstaging.com/CWD/Projects/ABCampground/index.php?page=NewCampground');
     
   }else{

      header('Location: http://expertdeveloper-com.stackstaging.com/CWD/Projects/ABCampground/index.php?page=login');
   }
		
        
}
*/
//print_r($_GET);

include("functions.php");

if($_GET['action']=='Addcampground'){

		$query = "INSERT INTO `campground` (`camp_title`,
                                      `camp_image`, 
                                      `createdby`, 
                                      `camp_desc`)
                  VALUES ('".mysqli_real_escape_string($link,$_POST['Title'])."',
                          '".mysqli_real_escape_string($link, $_POST['Image'])."',
                          ".mysqli_real_escape_string($link, $_SESSION['id']).",
                          '".mysqli_real_escape_string($link, $_POST['description'])."')"; 
 

		if(mysqli_query($link, $query)){
				
				
          echo 1;

		
		}else{
		echo "Couldn't create campground-please try again";
		}
       
}


if($_GET['action']=='addcomment'){
  


		$query = "INSERT INTO `Comment` (`camp_id`, 
                                      `createdby`,
                                      `detail`)
                  VALUES ('".mysqli_real_escape_string($link,$_POST['camp_id'])."',
                          ".mysqli_real_escape_string($link, $_SESSION['id']).",
                          '".mysqli_real_escape_string($link, $_POST['comment'])."')"; 
// echo $query;

                  if(mysqli_query($link, $query)){


                    echo 1;


                  }else{
                  echo "Couldn't create comment-please try again";
                  }
        
       
}


if($_GET['action']=='deleteComment'){


		$query = 'DELETE FROM `Comment` WHERE `id` ='. $_POST['comment_id']; 

                  if(mysqli_query($link, $query)){


                    echo 1;


                  }else{
                  echo "Couldn't delete comment-please try again";
                  }
     
       
}

if($_GET['action']=='EditComment'){


		$query = 'UPDATE `Comment` SET detail = "'. $_POST['comment'].'" WHERE `id` ='. $_POST['comment_id']; 

                  if(mysqli_query($link, $query)){
                    echo 1;
                  }else{
                  echo "Couldn't edit comment-please try again";
                  }
     
       
}

if($_GET['action']=='deleteCampground'){


		$query = 'DELETE FROM `campground` WHERE `camp_id` ='. $_POST['camp_id']; 

                  if(mysqli_query($link, $query)){


                    echo 1;


                  }else{
                  echo "Couldn't delete comment-please try again";
                  }
     
       
}

if($_GET['action']=='EditCampground'){


		$query = 'UPDATE `campground` SET camp_desc = "'. $_POST['description'].'", camp_title = "'. $_POST['Title'].'", camp_image = "'. $_POST['Image'].'" WHERE `camp_id` ='. $_POST['camp_id']; 

                  if(mysqli_query($link, $query)){
                    echo 1;
                  }else{
                  echo "Couldn't edit comment-please try again";
                  }
     
       
}


if($_GET['action']=="Signup"){
		$error="";
		$query = "SELECT * FROM `users` where email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";
		$result = mysqli_query($link, $query);

		if(mysqli_num_rows($result)>0){
				$error = "that email address  is already taken";
		}else{
		$query = "INSERT INTO `users` (`email`,
                                      `password`, 
                                      `firstname`, 
                                      `lastname`)
                  VALUES ('".mysqli_real_escape_string($link,$_POST['email'])."',
                          '".mysqli_real_escape_string($link, $_POST['password'])."',
                          '".mysqli_real_escape_string($link, $_POST['firstname'])."',
                          '".mysqli_real_escape_string($link, $_POST['lastname'])."')"; 
          //echo $query;

		if(mysqli_query($link, $query)){
				
				$_SESSION['id']=mysqli_insert_id($link);
          		$_SESSION['email']=mysqli_real_escape_string($link,$_POST['email']);
                  
				$query = "UPDATE `users` SET 	`password` = '".md5(md5($_SESSION['id']).$_POST['password'])."' WHERE id = ".$_SESSION['id']."  LIMIT 1";
				mysqli_query($link, $query)	;
          echo 1;
          		//echo $query;
		
		}else{
		$error= "Couldn't create users-please try again";
		}
}

} else if($_GET['action']=="login"){

		$query = "SELECT * FROM `users` where email = '".mysqli_real_escape_string($link, $_POST['email'])."' LIMIT 1";

		$result = mysqli_query($link, $query);
//echo $query;

		$row = mysqli_fetch_assoc($result);

		if($row['password']== md5(md5($row['id']).$_POST['password'])){
				
				$_SESSION['id'] = $row['id'];
          	$_SESSION['email']=mysqli_real_escape_string($link,$_POST['email']);
          echo 1;
		}
		else{
				  echo "Could not find that username/password combination. Please try again.";
		}
}



/*
if($error!="") {
echo $error;
exit();
 
}    
*/

?>