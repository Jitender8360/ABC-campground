<% include ../partials/header.ejs %>

<div  class ="container col-sm-6 mt-3 p-4 bg-light" >
    <form  class ="m-1" action='/campgrounds/<%= campground._id %>/comments' method="POST">
        
        <h3 class ="text-center"> Add a new comment to <%= campground.name %></h3>
        <div class="form-group row">
            <div class="col">
                <textarea class="form-control" rows="3" name ="comment[text]" placeholder ="comment">Enter your text</textarea>
                
            </div>
        </div>
        
        <div class="text-center ">
            <button type="submit" class="btn btn-primary  mx-auto">Submit</button> 
        </div>
    </form>
    <div class="text-center ">
        <a class="" href = "/campgrounds">Go back</a>
    </div>
</div>
<% include ../partials/footer.ejs %>