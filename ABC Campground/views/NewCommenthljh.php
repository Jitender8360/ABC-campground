<?php 

//print_r($_POST);

?>

<div  class ="container col-sm-6 mt-3 p-4 bg-light" >
    <form  class ="m-1" method="POST">
        
      <h3 class ="text-center"> Add a new comment to  <?php echo $_POST['camp_title'];?></h3>
        <div class="form-group row">
            <div class="col">
                <textarea class="form-control" rows="3" id="comment" name ="comment" >Enter your text</textarea>
                <input type = "hidden" id="camp_id" name="camp_id"  value ="<?php echo $_POST['camp_id'];?>">
              <input type = "hidden" id="comment_id" name="comment_id"  value ="<?php echo $_POST['comment_id'];?>">
            </div>
        </div>
        
        <div class="text-center ">
            <button type="submit" id="addcomment" class="btn btn-primary  mx-auto">Submit</button> 
        </div>
    </form>
    <div class="text-center ">
        <a class="" href = "?page=campgrounds">Go back</a>
    </div>
</div>
-->