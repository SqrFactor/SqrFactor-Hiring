<!DOCTYPE html>
<html>
<head>
  <title>Apply Now!</title>
  @include('includes.stylesheet')

</head>

<body>

@include('includes.header1')

<!-- Initial Page Front Look -->
   
    <div class="container">
      <form method="post" action="/register" style="margin-top:15%;" class="">
          
    <div class="form-group col-md-12 form-mb form-size-mb ">
        @include('includes.errors')
        <label for="Name">Position Applying For</label>
        <select  name="position" id="position" class="form-control form-group-mb form-size-mb">
            <option value="Backend">Backend Developer - Laravel(Php Framework)</option>
            <option value="Frontend">Frontend Developer - HTML, CSS, JQuery and JS frameworks</option>
            <option value="Graphic">Graphic Designer - Adobe Illustrator(Preferred) OR Photoshop</option>
            <option value="Graphic">Content Writer - Having Technical Knowledge</option>
            
        </select>
    </div>
    
    
    <div class="form-group col-md-6 form-size-mb">
        
    <label for="Name">Name</label>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" class="form-control form-group-mb form-size-mb" name="name" placeholder="Full Name" required >
    </div>
        
    <div class="form-group col-md-6 form-size-mb">
    <label for="Email">Email</label>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="email" class="form-control form-group-mb form-size-mb" name="email" placeholder="Email Address" required>
    </div>
          
    <div class="form-group col-md-6 form-size-mb">
    <label for="Name">College</label>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" class="form-control form-group-mb form-size-mb" placeholder="College Studying in" name="college" required>
    </div>
        
    <div class="form-group col-md-6 form-size-mb">
    <label for="Email">Year of Graduation</label>
      <input type="hidden" name="_token" value="{{ csrf_token() }}" >
    <input type="text" class="form-control form-group-mb form-size-mb" placeholder="Year of Graduation or Expected Year of Graduation" name="year" required>
    </div>
          
    <div class="form-group col-md-6 form-size-mb">
    <label for="Name">Phone Number</label>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" class="form-control form-group-mb form-size-mb" placeholder="Phone Number" name="phone" required>
    </div>
        
    <div class="form-group col-md-6 form-size-mb">
    <label for="Email">Github Profile (required for Frontend and Backend Developers)</label>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" class="form-control form-group-mb form-size-mb" name="github" placeholder="https://www.github.com/">
    </div>
          
    <div class="form-group col-md-6 form-size-mb ">
    <label for="Email">Portfolio Profile/link (required for Graphic Designers and Content Writer)</label>
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" class="form-control form-group-mb form-size-mb" placeholder="https://www.behance.com/" name="portfolio">
    </div>
     
    <div class="form-group col-md-6 form-size-mb 
">
    <label for="Name">Linkedin Profile</label>
        
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="text" class="form-control form-group-mb form-size-mb" placeholder="https://www.linkedin.com/" name="linkedin">
    </div>

         
  <div class="form-group text-center col-md-6 col-md-offset-3" style="margin-top:2%;">    
  <button type="submit" class="btn btn-success btn-block form-group-mb form-size-mb"> Submit</button>
  </div>
        

</form>

</div>


</body>
@include('includes.js')
</html>
