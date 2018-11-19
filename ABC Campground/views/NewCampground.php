

<div  class ="container col-sm-4 mt-3 p-4 bg-light" >
    <form  class ="m-1" method="POST">
        <h3 class ="text-center"> Create a new campgrounds</h3>
        <div class="form-group row">
            <div class="col">
                <input type="text"  class="form-control" id="Title" name ="name" placeholder ="Title">
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <input type="text" class="form-control" id="Image" name ="image" placeholder ="Image url">
            </div>      
        </div>
         <div class="form-group row">
            <div class="col">
                <textarea  class="form-control"   id="description" name ="description" placeholder ="Enter campsite description" ></textarea>
            </div>      
        </div>
        <div class="text-center ">
          <button type="submit" id= "Addcampground" class="btn btn-primary  mx-auto">Submit</button> 
        </div>
    </form>
    <div class="text-center ">
        <a class="" href = "?page=campground">Go back</a>
    </div>
</div>
