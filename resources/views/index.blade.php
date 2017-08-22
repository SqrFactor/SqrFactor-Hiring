<!DOCTYPE html>
<html>
<head>
  <title>SqrFactor - Home</title>
  @include('includes.stylesheet')

</head>

<body>

@include('includes.header')

<!-- Initial Page Front Look -->
   
   <div class="container-fluid initial-page">
    <div class="col-md-6">
      <div class="intro-lines">
        <h1 class="title-intro">Let's make <b>World</b> a better place to live <i>together</i>.</h1>
        <p class="sub-title-intro"><span class="turn-red">SqrFactor </span>believes in the idea of dreams. But, as they say <i>'It's easy to Dream. Execution is what seperates you from others.' </i> We are looking for doers, dreamers and achievers to be working with us.</p>
      </div>
    </div>
    <div class="col-md-6 adv-competition">
      <div class="col-sm-6"><h2 class='competition-alert' style="margin-bottom: 0px;">Incubated by</h2><a href="http://www.tiiciiitm.com/" class="TIIC-mb TIIC-dsktp" style="" target="_blank">TIIC ABV-IIITM</a></div>
      <div class="col-sm-6" id="registra">
        <a href="{{ route('register.create')}}" class="link-register">
        <button class="registration-main">
         Apply Now!
        </button>
        </a>
      </div>
      <div class="col-sm-12 work-with-us">
        <h3 class="text-work-with">We're Hiring!</h3>
      </div>
    </div>
    <div class="col-md-6 image-sqroot">
     
      <div class="col-md-11 position-image">
        <div class="bubble-sm"></div>
        <div class="bubble-lg"></div>
      <div>
        <img src="assets/img/sqroot-firstpage1.png" class="sqroot">
      </div>
    </div>
    </div>
  </div>

    
      <!-- who we are begins -->
    
    <!-- Footer Page : Contact Details -->
  <div class="container-fluid about-us" id="about-us">
    <h1 class="contact contact-title" >Who are we? </h1>

    <div class="col-md-12">
      
      <p class="abt-dsktp abt-mb text-center">We are the Storytellers. 
We write your biographies,but instead of words we use architecture elements, fabrics, furniture and of-course personal touch to them.In simple words, we are a fun, passionate group of young architects and software engineers, who have come together to build an exclusive platform for Architects/Designers and Consumers.</p>
    </div>
    
  </div>
    
 <hr>
    
    
    <!-- Our Product -->
  <div class="container-fluid product" id="product">
    <h1 class="contact contact-title">Our Product</h1>

    <div class="col-md-6">
      <h1 class="contact text-center">The Idea</h1>
      <p class="office-address">SqrFactor is an online market place of/for Architects/Architectural services with a twitter like interface(follow/followers, newsfeed etc.) where consumers can buy these services by launching competitions or consulting the architect directly. The idea is to bridge the gap between architects and desginers looking for opportunity and consumers(homeowners, real-estate companies, govt. orgs) looking for multiple innovative design ideas. </p>
    </div>
    <div class="col-md-6">
      <h1 class="contact text-center" style="margin-left:-90px;">Phase-1 explainer video </h1>
      <iframe class="video-mb" style="margin-left:20px;" width="500" height="275" src="https://www.youtube.com/embed/ZiwlFp6hahM" frameborder="0" allowfullscreen></iframe>
    </div>
    
  </div>

<hr>
                   
                         
                        
                    
                    <!-- who we are ends -->



<!-- Jury Members -->
<div class="container-fluid jury-honor" >
  <div class="row">
    <h1 class="contact contact-title">Work With Us - Looking For :</h1>
    <div class="col-md-4 text-center padding wow fadeIn jury-panel-1">
      <div class="single-service">
        <div class="scaleIn">
            <img src="assets/img/jurya1.png" alt="" class="jury-img">
        </div>
        <h2 class="jury-name turn-red jury-mb">Coders/Developers</h2>
        <h4 class="jury-off jury-mb">Frontend and Backend(Laravel-PHP Framework)</h4>
      </div>
    </div>
    <div class="col-md-4 text-center padding wow fadeIn jury-panel-2">
        <div class="single-service">
            <div class="scaleIn">
                <img src="assets/img/jurya2.png" alt="" class="jury-img">
            </div>
            <h2 class="jury-name turn-red jury-mb">Graphic Designer</h2>
            <h4 class="jury-off jury-mb">Adobe Illustrator(preferred software)</h4>
        </div>
    </div>
    <div class="col-md-4 text-center padding wow fadeIn jury-panel-3">
      <div class="single-service">
        <div class="scaleIn">
            <img src="assets/img/jurya3.png" alt="" class="jury-img">
        </div>
        <h2 class="jury-name turn-red jury-mb">Content Writer</h2>
        <h4 class="jury-off jury-mb">Knowledge and experience of 0-2 years</h4>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">

    </div>
    <div class="col-sm-6">

    </div>
  </div>
</div>
@include('includes.footer')
</body>
@include('includes.js')
</html>
