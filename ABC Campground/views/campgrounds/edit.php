<% include ../partials/header.ejs %>

<div  class ="container col-sm-8 mt-3 p-4 bg-light" >
   
    <form  class ="m-1" action="/campgrounds/<%= campground._id %>?_method=PUT" method="POST">
        <h3 class ="text-center"> Edit a <%= campground.name%> campground</h3>
        <div class="form-group row">
            <div class="col">
                <input type="text"  class="form-control"  name ="campground[name]" value ="<%= campground.name%>">
            </div>
        </div>
        <div class="form-group row">
            <div class="col">
                <input type="text" class="form-control"  name ="campground[image]" placeholder ="<%= campground.image%>">
            </div>      
        </div>
         <div class="form-group row">
            <div class="col">
                <textarea  class="form-control"   name ="campground[description]" placeholder ="<%= campground.description%>" ></textarea>
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