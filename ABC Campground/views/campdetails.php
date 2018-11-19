<?php

$query = "SELECT * FROM `campground` where `camp_id`=".$_POST['camp_id'];
$result = mysqli_query($link, $query);
$row = mysqli_fetch_assoc($result);

$query = "SELECT * FROM `users` where `id`=".$row['createdby'];
$result = mysqli_query($link, $query);
$user = mysqli_fetch_assoc($result);


//print_r($_SESSION);



?>

<div class="container" style="width: 70%">
    <div >
      <!-- <div class="col-md-3 card "> </div> -->
        <div >
            
             <img class="card-img-top" src="<?php echo $row['camp_image'] ?>" alt="Card image cap">
             <div class="card-body mx-auto">
                <div class="row">
                     <div  class="container-fluid" >
                         
                         <a class="text-primary float-left" ><?php echo $row['camp_title'] ?></a>
                       
                            <p class="font-weight-bold float-right" > &#36;9/night</p>
                            
                        </div>
                </div>
                
                <div class="row">
                 <div class="container-fluid">
                        <p class="font-weight-light m-0 float-left" >Created by <?php echo $user['email'] ?></p>
                   
                  
                   
                         
                       <?php if ($_SESSION['id']==$row['createdby']){?>
                              <p class="m-0 float-right">
                                
                                 <!-- Button trigger modal -->
                                <button type="button" class="btn btn-warning mx-1" data-toggle="modal" data-target="#EditCampModal"> Edit</button>
                                <!-- Modal -->
                                <div class="modal fade" id="EditCampModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                                <form  class ="m-1" method="POST">
                                                    <h4 class ="text-center"> Edit a campground</h4>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <input type="text"  class="form-control" id="Title" name ="name" value ="<?php echo $row['camp_title']?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <div class="col">
                                                            <input type="text" class="form-control" id="Image" name ="image" value ="<?php echo $row['camp_image']?>">
                                                        </div>      
                                                    </div>
                                                     <div class="form-group row">
                                                        <div class="col">
                                                            <textarea  class="form-control"   id="description" name ="description"  ><?php echo $row['camp_desc']?></textarea>
                                                        </div>      
                                                    </div>
                                                </form>
                                
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="button" id="EditCamp" class="btn btn-primary">save</button>
                                            
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                                            
                                 <!-- Button trigger modal -->
                                <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#DelCampModal"> Delete</button>
                                <!-- Modal -->
                                <div class="modal fade" id="DelCampModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                          <p>Do you want delete this campground?</p>
                                          <input type ="hidden" id="camp_id" name="camp_id" value= "<?php echo $row['camp_id'] ?>">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                          <button type="button" id="deleteCamp" class="btn btn-primary">Yes</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              
                            </p>

                           <?php }?>
                        
                 </div>   
               </div>        
           
                <div class="row">
                     <p><?php echo $row['camp_desc'] ?></p>
                </div>
            
                <div class="container-fluid bg-light">
                       <div class="row">
                           <div class="container-fluid">
                            
   <?php if(array_key_exists('id', $_SESSION)){ ?>
                             
                             <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary float-right mt-2" data-toggle="modal" data-target="#AddComment"> Add a new comment</button>
                                <!-- Modal -->
                                <div class="modal fade" id="AddComment" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-body">
                                        
                                        
                                          <form  class ="m-1" method="POST">
                                              <div class="form-group row">
                                                  <div class="col">
                                                      <textarea class="form-control" rows="3" id="comment" name ="comment" placeholder="Enter your text" ></textarea>
                                                      <input type = "hidden" id="camp_id" name="camp_id"  value ="<?php echo $row['camp_id'];?>">
                                                    
                                                  </div>
                                              </div>

                                             
                                          </form>
                                         
                                      
                                               
                                
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                          <button type="button" id="addcomment" class="btn btn-primary" data-dismiss="modal">save</button>
                                            
                                      </div>
                                    </div>
                                  </div>
                                </div>

<?php }else{ ?>

  
  <a href = "?page=login" class="btn btn-primary float-right mt-2">Add a new comment</a>;

<?php } ?>
                                
                            </div>
                         </div>   
                                              
 <?php   displayComments($_POST['camp_id'], $row['camp_title']);?>          
                                                                                    
                </div>              
             </div>      
        </div>  
 
    </div>
     

   
