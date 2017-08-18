<!DOCTYPE html>
<html>
<head>
  <title>Apply Now!</title>
  @include('includes.stylesheet')

</head>

<body>



<!-- Initial Page Front Look -->
   
    <div class="container">
       
      <form method="post" action="/login" style="margin-top:15%;" class="">
          
            {{ csrf_field() }}
        
 
    <div class="form-group col-md-6 form-size-mb">
    <label for="Email">Email</label>
 
    <input type="email" class="form-control form-group-mb form-size-mb" name="email" id="email" placeholder="agnimgupta@gmail.com" required>
    </div>
          
    <div class="form-group col-md-6 form-size-mb">
    <label for="Name">Password</label>
      
    <input type="password" class="form-control form-group-mb form-size-mb" placeholder="*********" name="password" id="password" required>
    </div>
  
        
    
         
  <div class="form-group text-center col-md-6 col-md-offset-3" style="margin-top:2%;">    
  <button type="submit" class="btn btn-success btn-block form-group-mb form-size-mb"> Submit</button>
  </div>
        

</form>

</div>
     @include('includes.errors')



</body>
@include('includes.js')
</html>
