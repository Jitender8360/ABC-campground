<div style="height: 150px"></div>
<footer class="fixed-bottom bg-dark text-white" >
<p class="mt-3 text-center">&copy; ABC campground 2015</p>
</footer>

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

 	<script  src="https://code.jquery.com/jquery-3.3.1.js"  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


  <script>
    



   
     $("#loginButton").click(function(){
     
 //alert("hello");  
             $.ajax({
              type: "post",
              url: "actions.php?action=login",
              data: "email="+$("#email").val()+ "&password="+$("#password").val(),
              success: function (result) {

               if(result==1){

                window.location.assign("index.php?page=campground");
                }else{
                      alert( result);
                  
                }
               
              },
              
              });
        
            
          })
    
      $("#SignupButton").click(function(){
        
//     alert("hello");  

             $.ajax({
              type: "post",
              url: "actions.php?action=Signup",
              data: "firstname="+$("#firstname").val()+ "&lastname="+$("#lastname").val()+ "&email="+$("#email").val()+ "&password="+$("#password").val(),
              success: function (result) {
               
                if(result==1){
                
                window.location.assign("index.php?page=campground");
                }else{
                  alert( result);
                  
                }
             
              },
              
              });
        
            
          })
    
      
      
            $("#Addcampground").click(function(){
        
     

             $.ajax({
              type: "post",
              url: "actions.php?action=Addcampground",
              data: "Title="+$("#Title").val()+ "&Image="+$("#Image").val()+ "&description="+$("#description").val(),
              success: function (result) {

                if(result==1){
                 
                window.location.assign("index.php?page=campground");
                }else{
                  alert( result);
                  
                }
             
              },
              
              });
        
            
          })
     
         $("#addcomment").click(function(){
       
             $.ajax({
              type: "post",
              url: "actions.php?action=addcomment",
              data: "comment="+$("#comment").val()+ "&comment_id="+$("#comment_id").val()+ "&camp_id="+$("#camp_id").val(),
              success: function (result) {
 
                if(result==1){
                
                location.reload();
                }else{
                  alert( result);
                  
                }
             
              },
              
              });
        
            
          })    
      $("#EditComment").click(function(){
       //alert("comment="+$("#detail").val()+ "&comment_id="+$("#Edit_comment_id").val());
             $.ajax({
              type: "post",
              url: "actions.php?action=EditComment",
              data: "comment="+$("#detail").val()+ "&comment_id="+$("#Edit_comment_id").val(),
              success: function (result) {
           		if(result==1){
                
               location.reload();
                }else{
                  alert( result);
                  
                }
             
              },
              
              });
        
            
          })    
      
      $("#deleteComment").click(function(){
             // alert("comment_id="+$("#del_comment_id").val());
             $.ajax({
              type: "post",
              url: "actions.php?action=deleteComment",
              data: "comment_id="+$("#del_comment_id").val(),
              success: function (result) {
  				if(result==1){
                
               location.reload();
                }else{
                  alert( result);
                  
                }
 
             
              },
              
              });
        
            
          })  
      
      
       $("#EditCamp").click(function(){
       //alert("Title="+$("#Title").val()+ "&Image="+$("#Image").val()+ "&description="+$("#description").val()+ "&camp_id="+$("#camp_id").val());
         
             $.ajax({
              type: "post",
              url: "actions.php?action=EditCampground",
              data: "Title="+$("#Title").val()+ "&Image="+$("#Image").val()+ "&description="+$("#description").val()+ "&camp_id="+$("#camp_id").val(),
              success: function (result) {
                   
           		if(result==1){
                
               location.reload();
                }else{
                  alert( result);
                  
                }
             
              },
              
              });
        
            
          })    
      
      $("#deleteCamp").click(function(){
             
             $.ajax({
              type: "post",
              url: "actions.php?action=deleteCampground",
              data: "camp_id="+$("#camp_id").val(),
              success: function (result) {
  				if(result==1){
                window.location.assign("index.php?page=campground");
              
                }else{
                  alert( result);
                  
                }
 
             
              },
              
              });
        
            
          }) 
      
    </script>
  </body>
</html>