<!DOCTYPE html>
<html>
<head>
  <title>Apply Now!</title>
  @include('includes.stylesheet')

</head>

<body>



<!-- Initial Page Front Look -->
   
    <div class="container">
       
      <form method="post" action="{{ route('reg.store') }}" style="margin-top:15%;" class="">
          
           <div class="form-group col-md-6 form-size-mb">
    <label for="Name">Name</label>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" class="form-control form-group-mb form-size-mb" placeholder="Agnim" name="name"  required>
    </div>
    
   
        
 
    <div class="form-group col-md-6 form-size-mb">
    <label for="Email">Email</label>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="email" class="form-control form-group-mb form-size-mb" name="email" placeholder="agnimgupta@gmail.com" id="email" required>
    </div>
          
    <div class="form-group col-md-6 form-size-mb">
    <label for="Name">Password</label>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="password" class="form-control form-group-mb form-size-mb" placeholder="*********" name="password" id="password" required>
    </div>
          
           <div class="form-group col-md-6 form-size-mb">
    <label for="Name">Password</label>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="password" class="form-control form-group-mb form-size-mb" placeholder="*********" name="password_confirmation" id="password_confirmation" required>
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
