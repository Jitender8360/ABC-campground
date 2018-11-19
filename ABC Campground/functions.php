<?php 
	session_start();

    $serverName = "shareddb1e.hosting.stackcp.net";
    $username = "ABcampground-3637d1c9";
    $Databasename ="ABcampground-3637d1c9";
    $password = "Jitu8360";

    $link=mysqli_connect($serverName,$username, $password, $Databasename);

    if(mysqli_connect_errno()){
      print_r(mysqli_connect_error());
      exit();
    }
	if($_GET['function']=='logout'){
      session_unset();
    }

/*  
    function time_since($since) {
          $chunks = array(
              array(60 * 60 * 24 * 365 , 'year'),
              array(60 * 60 * 24 * 30 , 'month'),
              array(60 * 60 * 24 * 7, 'week'),
              array(60 * 60 * 24 , 'day'),
              array(60 * 60 , 'hour'),
              array(60 , 'minute'),
              array(1 , 'second')
          );
    */

function displayCampgrounds(){
	global $link;

	$query = "SELECT * FROM `campground`";
	$result = mysqli_query($link, $query);
	$Campground = "";

	if(mysqli_num_rows($result)==0){
		$Campground = " there are no campground to display"; 
	} else{

		while($row = mysqli_fetch_assoc($result)) {
       
			$Campground .='<div class="col-md-4 col-sm-6 card " style="width: 18rem;">
		 	<img class="card-img-top" src="'.$row['camp_image'].'" alt="Card image cap">
			<div class="card-body mx-auto">
			<h5 class="card-title text-center" >'.$row['camp_title'].'<p>
            
            <form action="index.php?page=campdetails" method="POST">
            
             <input type="hidden" name= "camp_id" value="'.$row['camp_id'].'">
              
            <button  class = "btn btn-primary ">More details</button>
            </form>
            </p></div></div>';
            
		}
          
	} 
 echo  $Campground;
}

/*
$camp_id=1;
displayComments($camp_id);
*/
function displayComments($camp_id, $camp_title){
	global $link;

  	
  $query = 'SELECT * FROM `Comment` where camp_id='.$camp_id.'';


	$result = mysqli_query($link, $query);
	$comment = "";

	if(mysqli_num_rows($result)==0){
		$comment = " there are no comments to display"; 
	} else{

  
		while($row = mysqli_fetch_assoc($result)) {
     		$comment .='<div class="row mb-0">
                                <div  class="container-fluid" >
                                       <p class ="mb-0 float-left font-weight-light">' .$row['detail'].'</p>
                                                               
                                </div>
                           </div>';
                    if($_SESSION['id']==$row['createdby']){
                      $comment .='<p class="m-0 float-right">

                                           <!-- Button trigger modal -->
                                          <button type="button" class="btn btn-warning  btn-sm mx-1" data-toggle="modal" data-target="#editCommentModal"> Edit</button>
                                          <!-- Modal -->
                                          <div class="modal fade" id="editCommentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-body">
                                                    <form>
                                                              <p class ="text-center"> Edit a comment</p>
                                                              <div class="form-group row">
                                                                  <div class="col">
                                                                      <textarea type="text"  class="form-control" id="detail" name ="detail">'.$row['detail'].'</textarea>
                                                                      <input type="hidden" class="form-control" id="Edit_comment_id" name ="comment_id" value ="'. $row['id'].'">
                                                                  </div>
                                                              </div>
</form>
                                                             
                                                     

                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                                    <button type="button" id="EditComment" class="btn btn-primary" data-dismiss="modal" >save</button>

                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                           <!-- Button trigger modal -->
                                          <button type="button" class="btn btn-danger  btn-sm float-right" data-toggle="modal" data-target="#DelCommentModal"> Delete</button>
                                          <!-- Modal -->
                                          <div class="modal fade" id="DelCommentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-body">
                                                    <p>Do you want delete this comment?</p>
                                                    <input type ="hidden" id="del_comment_id" name="comment_id" value= "'.$row['id'].'">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                                    <button type="button" id="deleteComment" class="btn btn-primary" data-dismiss="modal">Yes</button>
                                                </div>
                                              </div>
                                            </div>
                                          </div>

                                      </p>';


                    }
          
           
        
		}
         
	} 
 echo  $comment;
 
}




function addCampgrounds(){
  
 
    $query = "INSERT INTO `users` (`camp_desc`,
                                      `camp_image`, 
                                      `camp_title`, 
                                      `createdby`)
                  VALUES ('".mysqli_real_escape_string($link,$_POST['description'])."',
                          '".mysqli_real_escape_string($link, $_POST['image'])."',
                          '".mysqli_real_escape_string($link, $_POST['name'])."',
                          '".mysqli_real_escape_string($link, $_SESSION['id'])."')";  

	$result = mysqli_query($link, $query);
  
}

?>

