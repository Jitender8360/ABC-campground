<?php

include("functions.php");

?>
<div class="container">
    <div class = "row">
        <div class="col-md-3 card "> </div>
        <div class="col-md-9  card " style="width: 18rem;">
            
             <img class="card-img-top" src="<%= campground.image %>" alt="Card image cap">
             <div class="card-body mx-auto">
                <div class="row">
                     <div  class="container-fluid" >
                         
                         <a class="text-primary float-left" ><%= campground.name %></a>
                       
                            <p class="font-weight-bold float-right" > &#36;9/night</p>
                            
                        </div>
                </div>
                
                <div class="row">
                 <div class="container-fluid">
                        <p class="font-weight-light m-0 float-left" >Submitted by </p>
                         
                        <% if(currentUser && campground.author.id.equals(currentUser.id) ){ %>
                        
                            <p class="m-0 float-right" >
                                <a href='/campgrounds/' class="btn btn-primary float-right mt-2">
                                    Edit
                                </a>
                                
                                <form action= "/campgrounds/<%= campground._id %>?_method=DELETE" method = "POST">
                                    <button  class="mx-2 btn btn-danger float-right mt-2">
                                    Delete
                                </button>
                                </form>
                            </p>
                           
                        
                 </div>   
               </div>        
                
                <div class="row">
                     <p></p>
                </div>
                <div class="container-fluid bg-light">
                       <div class="row">
                           <div class="container-fluid">
                                <a href='/campgrounds/<%= campground._id %>/comments/new' class="btn btn-primary float-right mt-2">Add a new comment</a>
                            </div>
                         </div>   
                            
                            <div class="row mb-0">
                                <div  class="container-fluid mb-0" >
                                       <p class ="mb-0 float-left font-weight-light"> </p>
                                       <p class ="mb-0 float-right font-weight-light"> 10 days ago  </p>
                           
                                </div>
                           </div>
                                       
                                        <a class="btn btn-xs btn-warning" 
                                           href="/campgrounds/<%=campground._id %>/comments/<%=comment._id %>/edit">Edit</a>
                                        <form id="delete-form" action="/campgrounds/<%=campground._id %>/comments/<%=comment._id %>?_method=DELETE" method="POST">
                                            <input type="submit" class="btn btn-xs btn-danger" value="Delete">
                                        </form>
                                       
                    
              
                </div>
                
             </div>
          
        </div>
        
    </div>
        
</div>
    
