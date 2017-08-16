<?php
session_start();
if(isset($_SESSION['teamId']))
{
    ?>

    <html>
<head>
  <title>Registration Form</title>
  <link rel="shortcut icon" href="assets/img/favicon.ico" />
  <!-- Bootstrap and stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
    
  <!-- jquery and scriptsheets -->

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script type="text/javascript" src="app.js"></script>

</head>
<body>

  <!-- Header -->
  <div class="container-fluid header">
    <div class="col-xs-6 col-lg-4">
      <a href="index.html"><img src="assets/img/logo_main.png" class="cmpny-logo animated slideInLeft"></a>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-8 animated slideInRight">
      
      <div class="nav nav-pills">
        <ul class="social-link">
          <li><a href="https://www.facebook.com/SqrFactor" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
          <li><a href="https://twitter.com/SqrFactor" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
          <li><a href="https://plus.google.com/b/114936707287339735860/114936707287339735860"><i class="fa fa-google-plus fa-2x"></i></a></li>
          <li><a href="https://www.instagram.com/sqrfactor/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
          <li><a href="https://www.linkedin.com/company/6615617?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A6615617%2Cidx%3A1-1-1%2CtarId%3A1451305821587%2Ctas%3Asqrfactor" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
          <br/>
        </ul>
      </div>
    </div>

      <div>
        <button class="nav-button"><img src="assets/img/navbar-button.png"></button>
      </div>
      <div>
        <ul class="nav-bar">
          <li id="home"><a href="index.html" class="link-register">Home</a></li>
          <li id="home"><a href="index.html#about-new" class="link-register">About</a></li>
          <li id="competition"><a href="index.html#competition-down" class="link-register">Competition</a></li>
          <li id="brief"><a href="brief.html" class="link-register">Brief</a></li>
          <li id="register"><a href="registration.php" class="link-register">Register</a></li>
          <li id="contactus"><a href="index.html#contact" class="link-register">Contact Us</a></li>
        </ul>
      </div>
    </div>

  <!-- Registration Page -->
  <div class="register-here" style="min-height:360px; font-size:120%">
      <div class="row" style="margin:0 auto; max-width:1024px;">
	      <div class="col-md-6 col-sm-6">
	      	Welcome Team, <br/>Thank you for registering with us. Your Team id is <b><?php echo $_SESSION['teamId']?></b>.Please check your email. 
	      </div>
	      <div class="col-md-6 col-sm-6">
	      	
	      </div>
	      
	      </div>
  </div>

  <!-- Footer Page : Contact Details -->
  <div class="container-fluid footer-page">
    <div class="col-md-12 footer-img">
      <img src="assets/img/footer.png" class="img-footer">
      <p class="footer-allrights">&copy; 2016. All Rights Reserved | SqrFactor India Pvt. Ltd</p>
    </div>
  </div>
</body>
</html>
<?php
session_destroy();
}
else{
?>
<html>
<head>
  <title>Registration Form</title>
  <link rel="shortcut icon" href="assets/img/favicon.ico" />
  <!-- Bootstrap and stylesheets -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
    
  <!-- jquery and scriptsheets -->

    <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="http://twitter.github.io/typeahead.js/releases/latest/typeahead.bundle.js"></script>
    <script type="text/javascript" src="app.js"></script>

</head>
<body>

  <!-- Header -->
  <div class="container-fluid header">
    <div class="col-xs-6 col-lg-4">
      <a href="index.html"><img src="assets/img/logo_main.png" class="cmpny-logo animated slideInLeft"></a>
    </div>
    <div class="col-xs-12 col-sm-6 col-lg-8 animated slideInRight">
      
      <div class="nav nav-pills">
        <ul class="social-link">
          <li><a href="https://www.facebook.com/SqrFactor" target="_blank"><i class="fa fa-facebook fa-2x"></i></a></li>
          <li><a href="https://twitter.com/SqrFactor" target="_blank"><i class="fa fa-twitter fa-2x"></i></a></li>
          <li><a href=""><i class="fa fa-google-plus fa-2x"></i></a></li>
          <li><a href="https://www.instagram.com/sqrfactor/" target="_blank"><i class="fa fa-instagram fa-2x"></i></a></li>
          <li><a href="https://www.linkedin.com/company/6615617?trk=tyah&trkInfo=clickedVertical%3Acompany%2CclickedEntityId%3A6615617%2Cidx%3A1-1-1%2CtarId%3A1451305821587%2Ctas%3Asqrfactor" target="_blank"><i class="fa fa-linkedin-square fa-2x"></i></a></li>
          <br/>
        </ul>
      </div>
    </div>

      <div>
        <button class="nav-button"><img src="assets/img/navbar-button.png"></button>
      </div>
      <div>
        <ul class="nav-bar">
          <li id="home"><a href="index.html" class="link-register">Home</a></li>
          <li id="home"><a href="index.html#about-new" class="link-register">About</a></li>
          <li id="competition"><a href="index.html#competition-down" class="link-register">Competition</a></li>
          <li id="brief"><a href="brief.html" class="link-register">Brief</a></li>
          <li id="register"><a href="registration.php" class="link-register">Register</a></li>
          <li id="faq"><a href="faq.html#contact" class="link-register">FAQS</a></li>
          <li id="contactus"><a href="index.html#contact" class="link-register">Contact Us</a></li>
        </ul>
      </div>
    </div>

  <!-- Registration Page -->
  <div class="register-here">
    <form class="register-form" method="post" action="register.php">
        <div>
            <ul class="form_errors"></ul>
        </div>
    <div class="container height-div">
      <div id="clockdiv"> 
        <h1 class="title-form-field">Standard Registration Open</h1>
      </div>

      <ul class="inter-discipline">
        <li>Teams can be Interdisciplinary</li>
        <li>Competition Entry - &#8377; 1800</li>
        <li class='turn-red note-indian'>(For Indian Nationals Only)*</li>
      </ul>
    </div>
    
    <div class="container height-div">
      <h1 class="title-form-field">Team</h1>
      <p class="sub-title-field">Details of the Team Members.<br/>
        Maximum - Team of 3
      </p>
      
       <div class="col-md-12 team-member member-ace">
        <h4 class="sub-title-field turn-red">Team Member 1*</h4>
      </div>
      <div class="col-md-6">
        <input type="text" name="member[0][name]" placeholder="Full Name" class="registration-field" required>
      </div>
      <div class="col-md-6 pos-second">
        <input type="email" name="member[0][email]" placeholder="Email Address" class="registration-field" required>
      </div>
      <div class="col-md-6">
        <select class="select registration-field form-control" name="member[0][college]" required>
          <option value="">Name Of College</option>
          <option value="AP02">College of Engineering,Visakhapatnam</option>
          <option value="AP05">S.A.R. College of Architecture,Krishna District</option>
          <option value="AP08">ANU College of Architecture & Planning,Guntur</option>
          <option value="AP11">Gandhi Institute of Technology and Management,Visakhapatnam</option>
          <option value="AP14">Varaha College of Architecture & Planning,Visakhapatnam</option>
          <option value="AP18">School of Planning and Architecture, Vijayawada</option>
          <option value="AP19">M.R.K.College of Architecture,Veeravasara Mandalam</option>
          <option value="AP20">Maestro School of Planning and Architecture,Vijayawada</option>
          <option value="AP21">K.L.E.F.University,Guntur</option>
          <option value="AP22">Vaishnavi School of Architecture and Planning ,Vijayawada</option>
          <option value="AR01">Indira Gandhi Technological and Medical Sciences University, Ziro</option>
          <option value="AR02">School of Planning, Architecture & Design, Apex Professional University, Pasighat</option>
          <option value="AS01">Guwahati College of Architecture, Guwahati</option>
          <option value="AS02">Royal School of Architecture, Guwahati</option>
          <option value="BR01">National Institute of Technology, Patna</option>
          <option value="BR03">Birla Institute of Technology, Patna</option>
          <option value="CG01">National Institute of Technology, Raipur</option>
          <option value="CG03">Dignity College of Architecture, Durg</option>
          <option value="CG08">Amity School of Architecture and Planning, Raipur</option>
          <option value="CH01">Chandigarh College of Architecture, Chandigarh</option>
          <option value="DL01">School of Planning & Architecture, New Delhi</option>
          <option value="DL03">Vastu Kala Academy, New Delhi</option>
          <option value="DL04">Jamia Millia Islamia, New Delh</option> 
          <option value="DL06">University School of Architecture & Planning, Delhi</option>
          <option value="DL07">MBS School of Planning and Architecture, New Delhi</option>
          <option value="DL08">K.R.Mangalam School of Architecture & Planning, New Delhi</option>
          <option value="DL09">Indira Gandhi Delhi Technical University for Women, Delhi</option>
          <option value="GA01">Goa College of Architecture, Panaji</option>
          <option value="GJ01">M.S. University of Baroda, Vadodara</option>
          <option value="GJ02">Centre for Environmental Planning & Technology University (CEPT University), Ahmedabad</option>
          <option value="GJ03">D.C. Patel School of Architecture, Vidhyanagar</option>
          <option value="GJ04">Sarvajanik College of Engineering & Technology, Surat</option>
          <option value="GJ05">Sardar Vallabhai Patel Institute of Technology, Anand Distric</option>
          <option value="GJ06">Vyavasay Vidya Pratishthan's Indubhai Parekh School of Architecture, Rajkot</option>
          <option value="GJ07">SOA Vadodara Design Academy, Vadodara</option>
          <option value="GJ08">Institute of Architecture Hemchandracharya North Gujarat University, Patan</option>
          <option value="GJ09">Shri Gijubhai Chhaganbhai Patel Institute of Architecture, Interior Design and Fine Arts, Surat</option>
          <option value="GJ10">Grow More School of Architecture, Sabarkantha District</option>
          <option value="GJ11">Anant Institute of Architecture, Ahmedabad</option>
          <option value="GJ12">School of Design and Architecture Navrachana University, Vadodara</option>
          <option value="GJ13">Parul Institute of Architecture and Research, Vadodara</option>
          <option value="GJ14">ITM School of Architecture Art and Design, Vadodara District</option>
          <option value="GJ15">Shantaben Manubhai Patel School of Studies and Research in Architecture and Interior Design, Anand District</option>
          <option value="GJ16">Institute of Design, Environment & Architecture Indus University, Gandhinagar</option>
          <option value="GJ17">Bhagwan Mahavir College of Architecture, Surat</option>
          <option value="GJ18">L.J. School of Architecture, Ahmedabad</option>
          <option value="GJ19">Raman Bhakta School of Architecture, Surat District</option>
          <option value="GJ20">Institute of Architecture Nirma University, Ahmedabad</option>
          <option value="GJ21">Laxmi Institute of Architecture, Valsad</option>
          <option value="GJ22">Kalol Institute of Architecture & Design, Gandhinagar District</option>
          <option value="GJ23">Venus Institute of Design & Architecture, Gandhinagar</option>
          <option value="GJ24">Sal School of Architecture, Ahmedabad</option> 
          <option value="GJ25">Institute of Architecture Ganpat University, Kherva Mehsana</option>
          <option value="GJ26">VJKM Institute of Architecture and Design, Mehsana District</option>
          <option value="GJ27">Vidyamandir College of Architecture for Women, Surat District</option>
          <option value="GJ28">Marwadi Education Foundation's Group of Institutions, Faculty of Architecture, Rajkot</option>
          <option value="HP01">National Institute of Technology, Hamirpur</option>
          <option value="HP03">IEC School of Architecture, Solan District</option>
          <option value="HP04">Maharaja Agrasen School of Architecture & Design, Solan District</option>
          <option value="HP05">APG School of Architecture, Shimla</option>
          <option value="HR01">Sushant School of Art & Architecture, Gurgaon</option>
          <option value="HR02">Deenbandhu Chhotu Ram University of Science & Technology, Murthal</option>
          <option value="HR03">Gateway College of Architecture & Design, Sonepat</option>
          <option value="HR04">Sat Priya School of Architecture and Design, Rohtak</option>
          <option value="HR05">Budha College of Architecture, Karnal District</option>
          <option value="HR06">R.P. Educational Trust Group of Institutions, Karnal</option>
          <option value="HR07">ICL Institute of Architecture and Town Planning, Ambala District</option>
          <option value="HR08">Lingaya's University's School of Architecture, Faridabad</option>
          <option value="HR09">Om Institute of Architecture & Design, Hisar</option>
          <option value="HR10">Savera College of Architecture, Gurgaon</option>
          <option value="HR11">Ganga Institute of Architecture & Town Planning, Jhajjar District</option>
          <option value="HR12">Maharishi Markandeshwar University, Ambala</option>
          <option value="HR13">Amity School of Architecture & Planning, Gurgaon District</option>
          <option value="HR14">Hindu School of Architecture, Sonepa</option>
          <option value="HR15">State Institute of Urban Planning & Architecture, Rohtak</option>
          <option value="HR16">South Point School of Architecture, Sonipat</option>
          <option value="HR17">CCLS College of Architecture & Design, Rohtak</option>
          <option value="HR18">P.M.College of Architecture, Sonepat</option>
          <option value="HR19">Rabindranath Tagore Institute of Architecture & Design, Faridabad</option>
          <option value="HR20">Narendra College of Architecture, Ballabhgarh</option>
          <option value="HR21">K.R.Mangalam University, Gurgaon</option>
          <option value="HR22">Bhagwan Mahaveer School of Architecture, SOnepat</option>
          <option value="HR23">P.D.M. School of Architecture & Town Planning, Jhajjar District</option>
          <option value="HR24">South Point College of Architecture , Sonepat</option>
          <option value="HR26">Delhi Institute of Architecture & Planning, Faridabad</option>
          <option value="HR27">Manav Rachna International University, Faridabad</option>
          <option value="HR28">Jagan Nath University, Jhajjar</option>
          <option value="HR29">Al-Falah School of Architecture & Design, Faridabad</option>
		  <option value="JK01">Shri Mata Vaishno Devi University Kakryal, Katra-182320 J&K </option>
          <option value="JH01">Faculty of Architecture Birla Institute of Technology ,Ranchi</option>
          <option value="JH02">Awadh College of Architecture ,Jamshedpur</option>
          <option value="sign">School of Architecture & Landscape</option>
          <option value="KA01">Visvesvaraya College of Engineering Bangalore University ,Bangalore</option>
          <option value="KA02">Manipal School of Architecture & Planning ,Manipal</option>
          <option value="KA03">BMS College of Engineering ,Bangalore</option>
          <option value="KA05">KLE Technological University ,Hubli</option>
          <option value="KA06">Poojya Doddappa Appa College of Engineering ,Gulbarga</option>
          <option value="KA07">Dayananda Sagar College of Engineering ,Bangalore</option>
          <option value="KA08">Dr. P. G. Halakatti College of Engineering & Technology ,Bijapur</option>
          <option value="KA09">Malik Sandal Institute of Art & Architecture ,Bijapur</option>
          <option value="KA11">MS Ramaiah Institute of Technology ,Bangalore</option>
          <option value="KA12">R.V. College of Architecture (RVCA) ,Bangalore</option>
          <option value="KA13">Siddaganga Institute of Technology Campus ,Tumkur</option>
          <option value="KA14">Gogte Institute of Technology ,Belgaum</option>
          <option value="KA15">The University School of Design ,Mysore</option>
          <option value="KA16">Acharya's NRV School of Architecture ,Bangalore</option>
          <option value="KA17">BMS School of Architecture ,Bangalore</option>
          <option value="KA18">Aakar Academy of Architecture ,Bangalore</option>
          <option value="KA19">The Oxford School of Architecture ,Bangalore</option>
          <option value="KA21">Srinivas Institute of Technology ,Mangalore</option>
          <option value="KA22">Dayananda Sagar Academy of Technology and Management ,Bangalore</option>
          <option value="KA24">SJB School of Architecture & Planning ,Bangalore</option>
          <option value="KA25">IMPACT School of Architecture ,Bangalore</option>
          <option value="KA26">Best School of Architecture ,Tumkur</option>
          <option value="KA27">Gopalan School of Architecture and Planning ,Bangalore</option>
          <option value="KA28">R.R.School of Architecture ,Bangalore</option>
          <option value="KA29">Mysore School of Architecture ,Mysore</option>
          <option value="KA30">BGS School of Architecture and Planning ,Bangalore</option>
          <option value="KA31">Bearys Enviro-Architecture Design School ,Mangalore</option>
          <option value="KA32">Nitte Institute of Architecture ,Mangalore</option>
          <option value="KA33">K.S.School of Architecture ,Bangalore</option>
          <option value="KA34">Wadiyar Centre For Architecture ,Mysuru</option>
          <option value="KA35">Aditya Academy of Architecture & Design ,Bangalore</option>
          <option value="KA36">School of Architecture, Reva University ,Bangalore</option>
          <option value="KA37">CMR University ,Bangalore</option>
          <option value="KA38">HMS Institute of Technology ,Tumkur</option>
          <option value="KL01">College of Engineering, Trivandrum</option>
          <option value="KL02">TKM College of Engineering, Kollam</option>
          <option value="KL03">MES College of Engineering, Malappuram District</option>
          <option value="KL04">National Institute of Technology, Calicut</option>
          <option value="KL05">Government Engineering College, Thrissur</option>
          <option value="KL07">Devaki Amma's Guruvayurappan College of Architecture, Malappuram District</option>
          <option value="KL08">Bishop Jerome School of Architecture & Design, Kollam</option>
          <option value="KL09">Rajiv Gandhi Institute of Technology, Kottayam</option>
          <option value="KL10">Holy Crescent College of Architecture,Alwaye</option>
          <option value="KL11">TKM School of Architecture, Kollam</option>
          <option value="KL12">College of Architecture, Tivandrum</option>
          <option value="KL14">IES College of Architecture, Thrissur</option>
          <option value="KL15">Al Salama Institute of Architecture, Malappuram District</option>
          <option value="KL16">Sneha College of Architecture, Palakkad District</option>
          <option value="KL17">College of Engineering and Technology, Kannur District</option>
          <option value="KL18">Asian School of Architecture and Design, Cochin</option>
          <option value="KL19">Global Institute of Architecture, Palakkad District</option>
          <option value="KL21">KMCT College of Architecture, Calicut District</option>
          <option value="KL22">KMEA College of Architecture, Kochi</option>
          <option value="KL23">School of Architecture Mookambika Technical Campus, Ernakulam District</option>
          <option value="KL24">MES College of Architecture, Calicut</option>
          <option value="KL26">Marian College of Architecture & Planning, Trivandrum</option>
          <option value="KL27">Mangalam School of Architecture and Planning,Kottayam</option>
          <option value="KL28">Nizar Rahim and Mark School of Architecture, Kollam</option>
          <option value="KL29">Eranad Knowledge City College of Architecture, Malappuram District</option>
          <option value="KL30">SCMS School of Architecture, Ernakulam</option>
          <option value="KL31">Vedavyasa College of Architecture, Malappuram District</option>
          <option value="KL32">Thejus College of Architecture, Thrissur</option>
          <option value="KL34">D C School of Architecture and Design, Idukki District</option>
          <option value="KL35">Avani Institute of Design, Calicut</option>
          <option value="KL36">Talent Institute of Architecture (TIBA), Edappal</option>
          <option value="KL37">Nehru College of Architecture, Palakkad</option>
          <option value="MH01">Sir J.J.College of Architecture, Mumbai</option>
          <option value="MH02">L.S.Raheja School of Architecture, Mumbai</option>
          <option value="MH03">Academy of Architecture, Mumbai</option>
          <option value="MH04">Visvesvaraya National Institute of Technology, Nagpur</option>
          <option value="MH05">BKPS College of Architecture, Pune</option>
          <option value="MH06">College of Engineering & Technology, Akola</option>
          <option value="MH07">D.Y.Patil College of Engineering & Technology, Kolhapur</option>
          <option value="MH08">G.S.Mandal's Marathwada Institute of Technology, Aurangabad</option>
          <option value="MH09">Shri Prince Shivaji Maratha Boarding House's College of Architecture, Kolhapur</option>
          <option value="MH10">Marathwada Mitra Mandal's College of Architecture, Pune</option>
          <option value="MH11">Manoharbhai Patel Institute of Engineering & Technology, Gondia</option>
          <option value="MH12">Jawahar Lal Nehru Engineering College, Aurangabad</option>
          <option value="MH13">MVP Samaj's College of Architecture, Nasik</option>
          <option value="MH14">Bharati Vidyapeeth's College of Architecture, Navi Mumbai</option>
          <option value="MH15">Kamla Raheja Vidyanidhi Institute for Architecture & Environmental Studies, Mumbai</option>
          <option value="MH16">Dr.D.Y.Patil College of Architecture, Navi Mumbai</option>
          <option value="MH17">Pillais College of Architecture, New Panvel</option>
          <option value="MH18">Rizvi College of Architecture, Mumbai</option>
          <option value="MH19">Bharati Vidyapeeth University's College of Architecture, Pune</option>
          <option value="MH20">Smt.Manoramabai Mundle, College of Architecture, Nagpur</option>
          <option value="MH21">Dr.Bhanuben Nanavati College of Architecture for Women, Pune</option>
          <option value="MH23">Shri Siddeshwar Shikshan Mandal's College of Architecture,Solapur</option>
          <option value="MH24">Appasaheb Birnale College of Architecture, Sangli</option>
          <option value="MH25">Kavikulguru Institute of Technology & Science, Nagpur District</option>
          <option value="MH26">Priyadarshini Institute of Architecture & Design Studies, Nagpur</option>
          <option value="MH27">Indian Education Society's College of Architecture, Mumbai</option>
          <option value="MH28">Dr.Baliram Hiray College of Architecture, Mumbai</option>
          <option value="MH29">Pravara Rural College of Architecture, Ahmednagar</option>
          <option value="MH30">Padmabhushan Dr.Vasantdada Patil College of Architecture</option>
          <option value="MH31">M.C.E.Society's Allana College of Architecture, Pune</option>
          <option value="MH32">Padmashree Dr.D.Y.Patil College of Architecture, Pune</option>
          <option value="MH33">Sinhgad College of Architecture, Pune</option>
          <option value="MH34">Late Shri Bapuraoji Deshmukh Degree College of Architecture, Wardha District</option>
          <option value="MH39">Asmita College of Architecture, Thane</option>
          <option value="MH42">Balwant Sheth School of Architecture, Mumbai</option>
          <option value="MH44">Shrikrishna Educational & Cultural Mandal's College of Architecture, Jalgaon</option>
          <option value="MH45">Samyak Sankalpa College of Architecture, Thane District</option>
          <option value="MH47">IDEAS-Institute of Design Education & Architecture Studies, Nagpur</option>
          <option value="MH48">Vidya Vardhan's Institute of Design Environment and Architecture, Nasik</option>
          <option value="MH49">Vidya Pratishthan's School of Architecture, Pune District</option>
          <option value="MH50">ADA's Minerva College of Architecture, Pune District</option>
          <option value="MH51">P.R.Patil College of Architecture, Amravati</option>
          <option value="MH52">Radhikatai Pandav Institute of Architecture, Nagpur</option>
          <option value="MH53">VIVA School of Architecture, Virar(E) Palgarh District</option>
          <option value="MH54">Pillai's HOC College of Architecture, Raigad</option>
          <option value="MH55">Anjuman-I-Islam's Kalsekar Technical Campus, Navi Mumbai</option>
          <option value="MH56">Dr.DY Patil School of Architecture, Pune</option>
          <option value="MH57">Lokmanya Tilak Institute of Architecture & Design Studies, Navi Mumbai</option>
          <option value="MH58">Tulsiramji Gaikwad-Patil College of Architecture, Nagpur</option>
          <option value="MH59">Oyster College of Architecture, Aurangabad</option>
          <option value="MH61">St.Wilfred's Institute of Architecture, Raigad District</option>
          <option value="MH62">Aayojan School of Architecture and Design, Pune District</option>
          <option value="MH63">Ojaswini College of Architecture and Design, Jalgaon</option>
          <option value="MH64">Shri Sharada Bhavan Education Society's Academy of Architecture, Nanded</option>
          <option value="MH65">Patel College of Architecture, Aurangabad</option>
          <option value="MH66">BRICK School of Architecture, Pune District</option>
          <option value="MH67">Aditya College of Architecture, Mumbai</option>
          <option value="MH68">Pravara Rural Education Society's College of Architecture, Nasik District</option>
          <option value="MH69">Symbiosis School of Planning & Architecture, Pune District</option>
          <option value="MH70">Smt.Premalati Chavan College of Architecture, Satara District</option>
          <option value="MH71">Anantrao Pawar College of Architecture, Pune</option>
          <option value="MH72">IDEAL Institute of Architecture, Thane</option>
          <option value="MH73">Thakur School of Architecture & Planning, Mumbai</option>
          <option value="MH74">S.B.Patil College of Architecture & Design, Pune</option>
          <option value="MH75">D.Y.Patil School of Architecture, Talegaon Pune District</option>
          <option value="MH76">School of Environment and Architecture, Mumbai</option>
          <option value="MH77">C.T.E.S.College of Architecture , Mumbai</option>
          <option value="MH78">Indira College of Architecture and Design, Pune</option>
          <option value="MH79">Trinity College of Architecture, Pune</option>
          <option value="MH80">B. R. Harne College of Architecture, Thane District</option>
          <option value="MH81">Jhulelal Institute of Architecture, Nagpur</option>
          <option value="MH82">Ideal College of Architecture, Kolhapur District</option>
          <option value="MH83">Datta Meghe College of Architecture, Nagpur</option>
          <option value="MH84">Yashoda College of Architecture, Satara</option>
          <option value="MH85">Amity School of Architecture and Planning, Panvel</option>
          <option value="MH86">Smt.Kashibai Navale College of Architecture, Pune</option>
          <option value="ML01">School of Technology, Shillong</option>
          <option value="MP01">Maulana Azad National Institute of Technology, Bhopal</option>
          <option value="MP02">Madhav Institute of Technology & Science, Gwalior</option>
          <option value="MP04">IPS Academy's School of Architecture, Indore</option>
          <option value="MP05">SDPS Women's College, Indore</option>
          <option value="MP06">Hitkarni College of Architecture & Town Planning, Jabalpur</option>
          <option value="MP07">Bagulamukhi College of Architecture, Bhopal</option>
          <option value="MP08">Amity School of Architecture & Planning, Gwalior</option>
          <option value="MP09">School of Architecture & Design ITM University, Gwalior</option>
          <option value="MP10">School of Planning & Architecture, Bhopal</option>
          <option value="MP11">RKDF University, Bhopal</option>
          <option value="MZ01">Mizoram University, Aizwal</option>
          <option value="OR01">College of Engineering & Technology, Bhubaneswar</option>
          <option value="OR02">Piloo-Mody College of Architecture, Cuttak</option>
          <option value="OR03">School of Architecture and Planning KIIT University, Bhubaneswar</option>
          <option value="OR04">School of Architecture, Planning & Design, Jatni</option>
          <option value="OR05">SGI School of Architecture, Bhubaneswar</option>
          <option value="OR06">National Institute of Technology, Rourkela</option>
          <option value="OR07">Sri Sri University, Cuttak</option>
          <option value="PJ01">Guru Nanak Dev University, Amritsar</option>
          <option value="PJ02">Giani Zail Singh Punjab Technology University, Bhatinda</option>
          <option value="PJ03">Indo Global College of Architecture, Mohali</option>
          <option value="PJ04">Chitkara School of Planning & Architecture, Patiala District</option>
          <option value="PJ05">College of Architecture I.E.T.Bhaddal, Ropar District</option>
          <option value="PJ06">Lovely School of Architecture & Design, Phagwara</option>
          <option value="PJ07">RIMT College of Architecture, Mandi Gobindgarh</option>
          <option value="PJ08">Surya School of Architecture, Patiala District</option>
          <option value="PJ09">Sai School of Architecture, Amritsar</option>
          <option value="PJ10">Sri Sai School of Architecture, Pathankot</option>
          <option value="PJ11">University Institute of Architecture, Mohali</option>
          <option value="PJ12">Punjab Institute of Technology, Mohali</option>
          <option value="PJ13">CT Institute of Architecture and Planning, Jalandhar District</option>
          <option value="PJ14">Shaheed Bhagat Singh State Technical Campus, Ferozepur</option>
          <option value="RJ01">Malviya National Institute of Technology, Jaipur</option>
          <option value="RJ02">M.B.M.Engineering College, Jodhpur</option>
          <option value="RJ03">Aayojan School of Architecture, Jaipur</option>
          <option value="RJ04">Jagannath University, Jaipur</option>
          <option value="RJ05">Amity School of Architecture & Planning, Jaipur</option>
          <option value="RJ06">Buddha Institute of Architecture & Town Planning, Udaipur</option>
          <option value="RJ07">NIMS School of Architecture & Planning, Jaipur</option>
          <option value="RJ09">Apex Group of Institution, Jaipur</option>
          <option value="RJ10">St.Wilfred's Institute of Architecture, Ajmer</option>
          <option value="RJ12">School of Architecture and Design Manipal University, Jaipur</option>
          <option value="RJ13">Dr.K.N.Modi University, Tonk District</option>
          <option value="RJ14">School of Planning & Architecture Poornima University, Jaipur</option>
          <option value="RJ16">School of Architecture Central University of Rajasthan, Ajmer District</option>
          <option value="RJ18">College of Architecture & Design, Mody University, Sikar District</option>
          <option value="TN01">School of Architecture & Planning Anna University, Chennai</option>
          <option value="TN02">National Institute of Technology, Tiruchirapalli</option>
          <option value="TN03">Adhiyamaan College of Engineering, Hosur</option>
          <option value="TN05">School of Architecture & Interior Design SRM University, Kancheepuram District</option>
          <option value="TN06">Arulmigu Meenakshi Amman College of Engineering, Tiruvannamalai District</option>
          <option value="TN07">School of Architecture Bharat University, Chennai</option>
          <option value="TN08">Hindustan Institute of Technology and Science, Chennai</option>
          <option value="TN09">Mohammed Sathak Engineering College, Ramanathapuram District</option>
          <option value="TN10">School of Architecture Sathyabama University, Chennai</option>
          <option value="TN11">Thiagarajar College of Engineering, Madurai</option>
          <option value="TN12">Periyar Maniammai University, Thanjavur</option>
          <option value="TN13">MEASI Academy of Architecture, Chennai</option>
          <option value="TN14">Salem School of Architecture, Salem</option>
          <option value="TN15">Tamilnadu School of Architecture, Coimbatore</option>
          <option value="TN16">McGan's Ooty School of Architecture, Kotagiri</option>
          <option value="TN17">Prahar School of Architecture, Coimbatore</option>
          <option value="TN18">Meenakshi College of Engineering, Chennai</option>
          <option value="TN19">Karpagam University, Coimbatore</option>
          <option value="TN20">R.V.S. School of Architecture, Dindigul</option>
          <option value="TN21">R.V.S. School of Architecture, Coimbatore</option>
          <option value="TN22">EXCEL College of Architecture and Planning, Namakkal District</option>
          <option value="TN23">Ranganathan Architecture College, Coimbatore</option>
          <option value="TN24">Designed Environment Academy & Research Institute, Tiruchirapalli District</option>
          <option value="TN26">SRM Ramapuram School of Architecture, Chennai</option>
          <option value="TN27">SVS School of Architecture, Coimbatore</option>
          <option value="TN28">Crescent School of Architecture, Chennai</option>
          <option value="TN29">Mohamed Sathak A.J. Academy of Architecture, Kancheepuram District</option>
          <option value="TN30">J.K.K.Munirajah School of Architecture, Erode District</option>
          <option value="TN31">M.A.M. School of Architecture, Tiruchirappalli</option>
          <option value="TN32">C.A.R.E. School of Architecture, Trichy</option>
          <option value="TN33">Surya School of Architecture, Vikravandi</option>
          <option value="TN34">MARG Institute of Design and Architecture, Kancheepuram District</option>
          <option value="TN35">Rajalakshmi School of Architecture, Chennai</option>
          <option value="TN36">RVS KVK School of Architecture, Trichy</option>
          <option value="TN37">Aalim Muhammed Salegh Academy of Architecture, Chennai</option>
          <option value="TN39">RVS Padmavathy School of Architecture, Tiruvalluvar District</option>
          <option value="TN40">Prime College of Architecture & Planning, Nagapattinam District</option>
          <option value="TN41">Dr.M.G.R. Educational and Research Institute University, Chennai</option>
          <option value="TN42">Sri Renugambal College of Architecture, Tiruvannamalai District</option>
          <option value="TN43">N.R.School of Architecture, Coimbatore District</option>
          <option value="TN44">Skandha School of Architecture, Namakkal District</option>
          <option value="TN45">DA Vinci School of Design and Architecture, Chennai</option>
          <option value="TN46">Sasi Creative School of Architecture, Coimbatore</option>
          <option value="TN48">St.Peter's School of Architecture, Chennai</option>
          <option value="TN49">St.Peter's College of Engineering and Technology, Chennai</option>
          <option value="TN50">Coimbatore Institute of Engineering and Technology, Coimbatore</option>
          <option value="TN51">Sigma College of Architecture, Kanyakumari District</option>
          <option value="TN52">Cheran School of Architecture, Karur</option>
          <option value="TN53">Kalasalingam School of Architecture, Krishnankoil</option>
          <option value="TN55">Anand School of Architecture, Chennai</option>
          <option value="TN56">Misrimal Navajee Munoth Jain School of Architecture, Chennai</option>
          <option value="TN58">Park Institute of Architecture, Coimbatore</option>
          <option value="TN59">Dhanalakshmi Srinivasan School of Architecture, Perambalur</option>
          <option value="TN60">Dhanalakshmi Srinivasan School of Architecture, Trichy</option>
          <option value="TN61">JK College of Architecture, Dindigul</option>
          <option value="TN62">S.J.S. School of Architecture, Chennai</option>
          <option value="TN64">Capital College of Architecture, Coimbatore</option>
          <option value="TN66">Chennai Academy of Architecture and Design, Chennai</option>
          <option value="TN68">Indira School of Architecture, Tiruvallur</option>
          <option value="TN69">MMES Academy of Architecture, Vellore</option>
          <option value="TN70">Coimbatore Academy of Architecture, Coimbatore</option>
          <option value="TN71">Kongu School of Architecture , Erode District</option>
          <option value="TN72">Aarupadai Veedu Institute of Technology, Chennai</option>
          <option value="TN73">V.P.M.M.College of Architecture for Women, Virudhunagar District</option>
          <option value="TN74">School of Architecture VIT University, Vellore</option>
          <option value="TN75">San Academy of Architecture, Coimbatore</option>
          <option value="TN76">Sri Venkateswara School of Architecture, Thiruvallur</option>
          <option value="TN77">Prime Nest College of Architecture and Planning, Tiruchirappalli</option>
          <option value="TN78">Hindusthan School of Architecture, Coimbatore</option>
          <option value="TN79">Jaya School of Architecture, Chennai</option>
          <option value="TN80">Agni School of Architecture and Design Excellence, Dindigul</option>
          <option value="TN81">Jawahar School of Architecture Planning and Design, Chennai</option>
          <option value="TN82">Nehru School of Architecture, Coimbatore</option>
          <option value="TN83">SVS International College of Architecture, Pudukkottai</option>
          <option value="TN84">Al-Amir College of Architecture, Sivagangai</option>
          <option value="TN85">School of Architecture PRIST University, Tiruchirappalli</option>
          <option value="TN86">Shakthi School of Architecture, Dharapuram</option>
          <option value="TS01">Jawaharlal Nehru Architecture and Fine Arts University ,Hyderabad</option>
          <option value="TS02">CSI Institute of Technology ,Secunderabad</option>
          <option value="TS03">Sri Venkateswara College of Architecture ,Hyderabad</option>
          <option value="TS04">Vaishnavi School of Architecture & Planning ,Hyderabad</option>
          <option value="TS05">Maestro School of Planning and Architecture ,Hyderabad</option>
          <option value="TS06">Deccan School of Planning & Architecture ,Hyderabad</option>
          <option value="TS07">Jawaharlal Nehru Institute of Advanced Studies ,Secunderabad</option>
          <option value="TS08">J.B.R. Architecture College ,Hyderabad</option>
          <option value="TS09">Aurora's Design Academy, Hyderabad</option>
          <option value="TS10">Aurora's Design Institute, Hyderabad</option>
          <option value="TS11">Ashoka School of Planning and Architecture ,Malkapur Village</option>
          <option value="TS12">Kasturba Gandhi College of Architecture ,Secunderabad</option>
          <option value="UA01">Indian Institute of Technology ,Roorkee</option>
          <option value="UA02">Dehradun Institute of Technology ,Dehradun</option>
          <option value="UA03">Himgiri Zee University ,Dehradun</option>
          <option value="UA04">Graphic Era Hill University ,Dehradun</option>
          <option value="UA05">Droan College of Architecture ,Rudrapur</option>
          <option value="UP01">Uttar Pradesh Technical University ,Lucknow</option>
          <option value="UP02">Zakir Hussain College of Engineering & Technology ,Aligarh</option>
          <option value="UP03">Apeejay Institute of Technology ,Lucknow</option>
          <option value="UP04">Babu Banarasi Das University ,Lucknow</option>
          <option value="UP05">Integral University ,Lucknow</option>
          <option value="UP06">Amity School of Architecture & Planning ,Noida</option>
          <option value="UP07">Amity School of Architecture and Planning ,Lucknow</option>
          <option value="UP08">Sunder Deep College of Architecture ,Ghaziabad</option>
          <option value="UP09">Institute of Architecture and Town Planning ,Jhansi</option>
          <option value="UP10">College of Architecture ,Moradabad</option>
          <option value="UP11">Khandelwal College of Architecture and Design ,Bareilly</option>
          <option value="UP12">Teerthanker Mahaveer College of Architecture ,Moradabad</option>
          <option value="UP13">Institute of Architecture & Town Planning ,Sitapur</option>
          <option value="UP14">Shree Bankey Bihari Institute of Architecture ,Meerut</option>
          <option value="UP15">ITM School of Architecture & Town Planning ,Lucknow</option>
          <option value="UP16">JMS School of Architecture ,Hapur</option>
          <option value="UP17">School of Architecture ,Mathura</option>
          <option value="UP18">School of Architecture & Planning Sharda University ,Greater Noida</option>
          <option value="UP20">College of Architecture Invertis University ,Bareilly</option>
          <option value="UP21">School of Architecture Delhi Technical Campus ,Greater Noida</option>
          <option value="UP22">Shri Ram School of Architecture ,Muzzaffarnagar</option>
          <option value="UP23">R.R.Institute of Modern Technology ,Lucknow</option>
          <option value="UP24">Anand College of Architecture ,Agra</option>
          <option value="UP25">Brahmanand Group of Institutions ,Bulandshahr</option>
          <option value="UP26">Hardayal School of Architecture ,Mathura</option>
          <option value="UP27">Accurate Institute of Architecture & Planning ,Greater Noida</option>
          <option value="UP29">Ideal School of Architecture ,Ghaziabad</option>
          <option value="UP30">Ansal School of Architecture ,Lucknow</option>
          <option value="UP31">Purvanchal Institute of Architecture & Design ,Gorakhpur</option>
          <option value="UP32">Forth Dimension College of Architecture ,Saharanpur</option>
          <option value="UP33">Faculty of Architecture and Town Planning ,Agra</option>
          <option value="UP34">SGIT IMT College of Architecture ,Ghaziabad</option>
          <option value="UP35">School of Architecture and Regional Planning ,Greater Noida</option>
          <option value="UP36">Axis Institute of Architecture (AIA) ,Rooma ,Kanpur</option>
          <option value="UP37">Ishan Institute of Architecture & Planning ,Greater Noida</option>
          <option value="UP38">Monad School of Architecture & Planning ,Pilakhwa ,Hapur</option>
          <option value="UP41">Vivekanand College of Architecture ,Ghaziabad</option>
          <option value="UP42">School of Architecture, Galgotias University ,Greater Noida</option>
          <option value="UP43">School of Architecture Noida International University ,Greater Noida</option>
          <option value="UP44">Department of Architecture Mangalayatan University ,Aligarh</option>
          <option value="WB01">Indian Institute of Engineering Science and Technology ,Shibpu</option>
          <option value="WB02">Indian Institute of Technology , Kharagp</option>
          <option value="WB03">Jadavpur University ,Kolkata</option>
          <option value="WB04">Rani Rashmoni School of Architecture ,Kolkata</option>
          <option value="WB05">Om Dayal School of Architecture ,Kolkata</option>
          <option value="WB06">Techno India University School of Architecture ,Kolkata</option>
          <option value="WB07">Amity School of Architecture and Planning ,Kolkata</option>
        </select>
      </div>
      <div class="col-md-6 pos-second">
        <input type="text" name="member[0][phone]" placeholder="Phone Number" class="registration-field" pattern="[789][0-9]{9}" required>
      </div>
      <div class="col-md-6">
        <div class='box-student1'></div><span class="student-select">Student</span>
        <div class='box-architect1'></div><span class="architect-select">Architect</span>
        <input name="member[0][type]" type='hidden' value="STUDENT">
        <input name="member[0][qualification]" type='hidden' value="">
      </div>
      <div class="col-md-6 pos-second">
        <div class="architect-only1">
          <p class="year-of-passing">Year Of Passing</p>
          <select class="dropdown-menu architect-only1 registration-field" name="member[0][year_of_passing]">
            <option value="2014">2014</option>
            <option value="2015">2015</option>
          </select>
        </div>
      </div>
      <div class="col-md-12 team-member">
        <h4 class="sub-title-field turn-red">Team Member 2</h4>
      </div>
      <div class="col-md-6">
        <input type="text" placeholder="Full Name" class="registration-field" name="member[1][name]">
      </div>
      <div class="col-md-6 pos-second">
        <input type="email" placeholder="Email Address" class="registration-field" name="member[1][email]">
      </div>
      <div class="col-md-6">
        <select class="select registration-field form-control" name="member[1][college]">
          <option value="">Name Of College</option>
          <option value="AP02">College of Engineering,Visakhapatnam</option>
          <option value="AP05">S.A.R. College of Architecture,Krishna District</option>
          <option value="AP08">ANU College of Architecture & Planning,Guntur</option>
          <option value="AP11">Gandhi Institute of Technology and Management,Visakhapatnam</option>
          <option value="AP14">Varaha College of Architecture & Planning,Visakhapatnam</option>
          <option value="AP18">School of Planning and Architecture, Vijayawada</option>
          <option value="AP19">M.R.K.College of Architecture,Veeravasara Mandalam</option>
          <option value="AP20">Maestro School of Planning and Architecture,Vijayawada</option>
          <option value="AP21">K.L.E.F.University,Guntur</option>
          <option value="AP22">Vaishnavi School of Architecture and Planning ,Vijayawada</option>
          <option value="AR01">Indira Gandhi Technological and Medical Sciences University, Ziro</option>
          <option value="AR02">School of Planning, Architecture & Design, Apex Professional University, Pasighat</option>
          <option value="AS01">Guwahati College of Architecture, Guwahati</option>
          <option value="AS02">Royal School of Architecture, Guwahati</option>
          <option value="BR01">National Institute of Technology, Patna</option>
          <option value="BR03">Birla Institute of Technology, Patna</option>
          <option value="CG01">National Institute of Technology, Raipur</option>
          <option value="CG03">Dignity College of Architecture, Durg</option>
          <option value="CG08">Amity School of Architecture and Planning, Raipur</option>
          <option value="CH01">Chandigarh College of Architecture, Chandigarh</option>
          <option value="DL01">School of Planning & Architecture, New Delhi</option>
          <option value="DL03">Vastu Kala Academy, New Delhi</option>
          <option value="DL04">Jamia Millia Islamia, New Delh</option> 
          <option value="DL06">University School of Architecture & Planning, Delhi</option>
          <option value="DL07">MBS School of Planning and Architecture, New Delhi</option>
          <option value="DL08">K.R.Mangalam School of Architecture & Planning, New Delhi</option>
          <option value="DL09">Indira Gandhi Delhi Technical University for Women, Delhi</option>
          <option value="GA01">Goa College of Architecture, Panaji</option>
          <option value="GJ01">M.S. University of Baroda, Vadodara</option>
          <option value="GJ02">Centre for Environmental Planning & Technology University (CEPT University), Ahmedabad</option>
          <option value="GJ03">D.C. Patel School of Architecture, Vidhyanagar</option>
          <option value="GJ04">Sarvajanik College of Engineering & Technology, Surat</option>
          <option value="GJ05">Sardar Vallabhai Patel Institute of Technology, Anand Distric</option>
          <option value="GJ06">Vyavasay Vidya Pratishthan's Indubhai Parekh School of Architecture, Rajkot</option>
          <option value="GJ07">SOA Vadodara Design Academy, Vadodara</option>
          <option value="GJ08">Institute of Architecture Hemchandracharya North Gujarat University, Patan</option>
          <option value="GJ09">Shri Gijubhai Chhaganbhai Patel Institute of Architecture, Interior Design and Fine Arts, Surat</option>
          <option value="GJ10">Grow More School of Architecture, Sabarkantha District</option>
          <option value="GJ11">Anant Institute of Architecture, Ahmedabad</option>
          <option value="GJ12">School of Design and Architecture Navrachana University, Vadodara</option>
          <option value="GJ13">Parul Institute of Architecture and Research, Vadodara</option>
          <option value="GJ14">ITM School of Architecture Art and Design, Vadodara District</option>
          <option value="GJ15">Shantaben Manubhai Patel School of Studies and Research in Architecture and Interior Design, Anand District</option>
          <option value="GJ16">Institute of Design, Environment & Architecture Indus University, Gandhinagar</option>
          <option value="GJ17">Bhagwan Mahavir College of Architecture, Surat</option>
          <option value="GJ18">L.J. School of Architecture, Ahmedabad</option>
          <option value="GJ19">Raman Bhakta School of Architecture, Surat District</option>
          <option value="GJ20">Institute of Architecture Nirma University, Ahmedabad</option>
          <option value="GJ21">Laxmi Institute of Architecture, Valsad</option>
          <option value="GJ22">Kalol Institute of Architecture & Design, Gandhinagar District</option>
          <option value="GJ23">Venus Institute of Design & Architecture, Gandhinagar</option>
          <option value="GJ24">Sal School of Architecture, Ahmedabad</option> 
          <option value="GJ25">Institute of Architecture Ganpat University, Kherva Mehsana</option>
          <option value="GJ26">VJKM Institute of Architecture and Design, Mehsana District</option>
          <option value="GJ27">Vidyamandir College of Architecture for Women, Surat District</option>
          <option value="GJ28">Marwadi Education Foundation's Group of Institutions, Faculty of Architecture, Rajkot</option>
          <option value="HP01">National Institute of Technology, Hamirpur</option>
          <option value="HP03">IEC School of Architecture, Solan District</option>
          <option value="HP04">Maharaja Agrasen School of Architecture & Design, Solan District</option>
          <option value="HP05">APG School of Architecture, Shimla</option>
          <option value="HR01">Sushant School of Art & Architecture, Gurgaon</option>
          <option value="HR02">Deenbandhu Chhotu Ram University of Science & Technology, Murthal</option>
          <option value="HR03">Gateway College of Architecture & Design, Sonepat</option>
          <option value="HR04">Sat Priya School of Architecture and Design, Rohtak</option>
          <option value="HR05">Budha College of Architecture, Karnal District</option>
          <option value="HR06">R.P. Educational Trust Group of Institutions, Karnal</option>
          <option value="HR07">ICL Institute of Architecture and Town Planning, Ambala District</option>
          <option value="HR08">Lingaya's University's School of Architecture, Faridabad</option>
          <option value="HR09">Om Institute of Architecture & Design, Hisar</option>
          <option value="HR10">Savera College of Architecture, Gurgaon</option>
          <option value="HR11">Ganga Institute of Architecture & Town Planning, Jhajjar District</option>
          <option value="HR12">Maharishi Markandeshwar University, Ambala</option>
          <option value="HR13">Amity School of Architecture & Planning, Gurgaon District</option>
          <option value="HR14">Hindu School of Architecture, Sonepa</option>
          <option value="HR15">State Institute of Urban Planning & Architecture, Rohtak</option>
          <option value="HR16">South Point School of Architecture, Sonipat</option>
          <option value="HR17">CCLS College of Architecture & Design, Rohtak</option>
          <option value="HR18">P.M.College of Architecture, Sonepat</option>
          <option value="HR19">Rabindranath Tagore Institute of Architecture & Design, Faridabad</option>
          <option value="HR20">Narendra College of Architecture, Ballabhgarh</option>
          <option value="HR21">K.R.Mangalam University, Gurgaon</option>
          <option value="HR22">Bhagwan Mahaveer School of Architecture, SOnepat</option>
          <option value="HR23">P.D.M. School of Architecture & Town Planning, Jhajjar District</option>
          <option value="HR24">South Point College of Architecture , Sonepat</option>
          <option value="HR26">Delhi Institute of Architecture & Planning, Faridabad</option>
          <option value="HR27">Manav Rachna International University, Faridabad</option>
          <option value="HR28">Jagan Nath University, Jhajjar</option>
          <option value="HR29">Al-Falah School of Architecture & Design, Faridabad</option>
		  <option value="JK01">Shri Mata Vaishno Devi University Kakryal, Katra-182320 J&K </option>
          <option value="JH01">Faculty of Architecture Birla Institute of Technology ,Ranchi</option>
          <option value="JH02">Awadh College of Architecture ,Jamshedpur</option>
          <option value="sign">School of Architecture & Landscape</option>
          <option value="KA01">Visvesvaraya College of Engineering Bangalore University ,Bangalore</option>
          <option value="KA02">Manipal School of Architecture & Planning ,Manipal</option>
          <option value="KA03">BMS College of Engineering ,Bangalore</option>
          <option value="KA05">KLE Technological University ,Hubli</option>
          <option value="KA06">Poojya Doddappa Appa College of Engineering ,Gulbarga</option>
          <option value="KA07">Dayananda Sagar College of Engineering ,Bangalore</option>
          <option value="KA08">Dr. P. G. Halakatti College of Engineering & Technology ,Bijapur</option>
          <option value="KA09">Malik Sandal Institute of Art & Architecture ,Bijapur</option>
          <option value="KA11">MS Ramaiah Institute of Technology ,Bangalore</option>
          <option value="KA12">R.V. College of Architecture (RVCA) ,Bangalore</option>
          <option value="KA13">Siddaganga Institute of Technology Campus ,Tumkur</option>
          <option value="KA14">Gogte Institute of Technology ,Belgaum</option>
          <option value="KA15">The University School of Design ,Mysore</option>
          <option value="KA16">Acharya's NRV School of Architecture ,Bangalore</option>
          <option value="KA17">BMS School of Architecture ,Bangalore</option>
          <option value="KA18">Aakar Academy of Architecture ,Bangalore</option>
          <option value="KA19">The Oxford School of Architecture ,Bangalore</option>
          <option value="KA21">Srinivas Institute of Technology ,Mangalore</option>
          <option value="KA22">Dayananda Sagar Academy of Technology and Management ,Bangalore</option>
          <option value="KA24">SJB School of Architecture & Planning ,Bangalore</option>
          <option value="KA25">IMPACT School of Architecture ,Bangalore</option>
          <option value="KA26">Best School of Architecture ,Tumkur</option>
          <option value="KA27">Gopalan School of Architecture and Planning ,Bangalore</option>
          <option value="KA28">R.R.School of Architecture ,Bangalore</option>
          <option value="KA29">Mysore School of Architecture ,Mysore</option>
          <option value="KA30">BGS School of Architecture and Planning ,Bangalore</option>
          <option value="KA31">Bearys Enviro-Architecture Design School ,Mangalore</option>
          <option value="KA32">Nitte Institute of Architecture ,Mangalore</option>
          <option value="KA33">K.S.School of Architecture ,Bangalore</option>
          <option value="KA34">Wadiyar Centre For Architecture ,Mysuru</option>
          <option value="KA35">Aditya Academy of Architecture & Design ,Bangalore</option>
          <option value="KA36">School of Architecture, Reva University ,Bangalore</option>
          <option value="KA37">CMR University ,Bangalore</option>
          <option value="KA38">HMS Institute of Technology ,Tumkur</option>
          <option value="KL01">College of Engineering, Trivandrum</option>
          <option value="KL02">TKM College of Engineering, Kollam</option>
          <option value="KL03">MES College of Engineering, Malappuram District</option>
          <option value="KL04">National Institute of Technology, Calicut</option>
          <option value="KL05">Government Engineering College, Thrissur</option>
          <option value="KL07">Devaki Amma's Guruvayurappan College of Architecture, Malappuram District</option>
          <option value="KL08">Bishop Jerome School of Architecture & Design, Kollam</option>
          <option value="KL09">Rajiv Gandhi Institute of Technology, Kottayam</option>
          <option value="KL10">Holy Crescent College of Architecture,Alwaye</option>
          <option value="KL11">TKM School of Architecture, Kollam</option>
          <option value="KL12">College of Architecture, Tivandrum</option>
          <option value="KL14">IES College of Architecture, Thrissur</option>
          <option value="KL15">Al Salama Institute of Architecture, Malappuram District</option>
          <option value="KL16">Sneha College of Architecture, Palakkad District</option>
          <option value="KL17">College of Engineering and Technology, Kannur District</option>
          <option value="KL18">Asian School of Architecture and Design, Cochin</option>
          <option value="KL19">Global Institute of Architecture, Palakkad District</option>
          <option value="KL21">KMCT College of Architecture, Calicut District</option>
          <option value="KL22">KMEA College of Architecture, Kochi</option>
          <option value="KL23">School of Architecture Mookambika Technical Campus, Ernakulam District</option>
          <option value="KL24">MES College of Architecture, Calicut</option>
          <option value="KL26">Marian College of Architecture & Planning, Trivandrum</option>
          <option value="KL27">Mangalam School of Architecture and Planning,Kottayam</option>
          <option value="KL28">Nizar Rahim and Mark School of Architecture, Kollam</option>
          <option value="KL29">Eranad Knowledge City College of Architecture, Malappuram District</option>
          <option value="KL30">SCMS School of Architecture, Ernakulam</option>
          <option value="KL31">Vedavyasa College of Architecture, Malappuram District</option>
          <option value="KL32">Thejus College of Architecture, Thrissur</option>
          <option value="KL34">D C School of Architecture and Design, Idukki District</option>
          <option value="KL35">Avani Institute of Design, Calicut</option>
          <option value="KL36">Talent Institute of Architecture (TIBA), Edappal</option>
          <option value="KL37">Nehru College of Architecture, Palakkad</option>
          <option value="MH01">Sir J.J.College of Architecture, Mumbai</option>
          <option value="MH02">L.S.Raheja School of Architecture, Mumbai</option>
          <option value="MH03">Academy of Architecture, Mumbai</option>
          <option value="MH04">Visvesvaraya National Institute of Technology, Nagpur</option>
          <option value="MH05">BKPS College of Architecture, Pune</option>
          <option value="MH06">College of Engineering & Technology, Akola</option>
          <option value="MH07">D.Y.Patil College of Engineering & Technology, Kolhapur</option>
          <option value="MH08">G.S.Mandal's Marathwada Institute of Technology, Aurangabad</option>
          <option value="MH09">Shri Prince Shivaji Maratha Boarding House's College of Architecture, Kolhapur</option>
          <option value="MH10">Marathwada Mitra Mandal's College of Architecture, Pune</option>
          <option value="MH11">Manoharbhai Patel Institute of Engineering & Technology, Gondia</option>
          <option value="MH12">Jawahar Lal Nehru Engineering College, Aurangabad</option>
          <option value="MH13">MVP Samaj's College of Architecture, Nasik</option>
          <option value="MH14">Bharati Vidyapeeth's College of Architecture, Navi Mumbai</option>
          <option value="MH15">Kamla Raheja Vidyanidhi Institute for Architecture & Environmental Studies, Mumbai</option>
          <option value="MH16">Dr.D.Y.Patil College of Architecture, Navi Mumbai</option>
          <option value="MH17">Pillais College of Architecture, New Panvel</option>
          <option value="MH18">Rizvi College of Architecture, Mumbai</option>
          <option value="MH19">Bharati Vidyapeeth University's College of Architecture, Pune</option>
          <option value="MH20">Smt.Manoramabai Mundle, College of Architecture, Nagpur</option>
          <option value="MH21">Dr.Bhanuben Nanavati College of Architecture for Women, Pune</option>
          <option value="MH23">Shri Siddeshwar Shikshan Mandal's College of Architecture,Solapur</option>
          <option value="MH24">Appasaheb Birnale College of Architecture, Sangli</option>
          <option value="MH25">Kavikulguru Institute of Technology & Science, Nagpur District</option>
          <option value="MH26">Priyadarshini Institute of Architecture & Design Studies, Nagpur</option>
          <option value="MH27">Indian Education Society's College of Architecture, Mumbai</option>
          <option value="MH28">Dr.Baliram Hiray College of Architecture, Mumbai</option>
          <option value="MH29">Pravara Rural College of Architecture, Ahmednagar</option>
          <option value="MH30">Padmabhushan Dr.Vasantdada Patil College of Architecture</option>
          <option value="MH31">M.C.E.Society's Allana College of Architecture, Pune</option>
          <option value="MH32">Padmashree Dr.D.Y.Patil College of Architecture, Pune</option>
          <option value="MH33">Sinhgad College of Architecture, Pune</option>
          <option value="MH34">Late Shri Bapuraoji Deshmukh Degree College of Architecture, Wardha District</option>
          <option value="MH39">Asmita College of Architecture, Thane</option>
          <option value="MH42">Balwant Sheth School of Architecture, Mumbai</option>
          <option value="MH44">Shrikrishna Educational & Cultural Mandal's College of Architecture, Jalgaon</option>
          <option value="MH45">Samyak Sankalpa College of Architecture, Thane District</option>
          <option value="MH47">IDEAS-Institute of Design Education & Architecture Studies, Nagpur</option>
          <option value="MH48">Vidya Vardhan's Institute of Design Environment and Architecture, Nasik</option>
          <option value="MH49">Vidya Pratishthan's School of Architecture, Pune District</option>
          <option value="MH50">ADA's Minerva College of Architecture, Pune District</option>
          <option value="MH51">P.R.Patil College of Architecture, Amravati</option>
          <option value="MH52">Radhikatai Pandav Institute of Architecture, Nagpur</option>
          <option value="MH53">VIVA School of Architecture, Virar(E) Palgarh District</option>
          <option value="MH54">Pillai's HOC College of Architecture, Raigad</option>
          <option value="MH55">Anjuman-I-Islam's Kalsekar Technical Campus, Navi Mumbai</option>
          <option value="MH56">Dr.DY Patil School of Architecture, Pune</option>
          <option value="MH57">Lokmanya Tilak Institute of Architecture & Design Studies, Navi Mumbai</option>
          <option value="MH58">Tulsiramji Gaikwad-Patil College of Architecture, Nagpur</option>
          <option value="MH59">Oyster College of Architecture, Aurangabad</option>
          <option value="MH61">St.Wilfred's Institute of Architecture, Raigad District</option>
          <option value="MH62">Aayojan School of Architecture and Design, Pune District</option>
          <option value="MH63">Ojaswini College of Architecture and Design, Jalgaon</option>
          <option value="MH64">Shri Sharada Bhavan Education Society's Academy of Architecture, Nanded</option>
          <option value="MH65">Patel College of Architecture, Aurangabad</option>
          <option value="MH66">BRICK School of Architecture, Pune District</option>
          <option value="MH67">Aditya College of Architecture, Mumbai</option>
          <option value="MH68">Pravara Rural Education Society's College of Architecture, Nasik District</option>
          <option value="MH69">Symbiosis School of Planning & Architecture, Pune District</option>
          <option value="MH70">Smt.Premalati Chavan College of Architecture, Satara District</option>
          <option value="MH71">Anantrao Pawar College of Architecture, Pune</option>
          <option value="MH72">IDEAL Institute of Architecture, Thane</option>
          <option value="MH73">Thakur School of Architecture & Planning, Mumbai</option>
          <option value="MH74">S.B.Patil College of Architecture & Design, Pune</option>
          <option value="MH75">D.Y.Patil School of Architecture, Talegaon Pune District</option>
          <option value="MH76">School of Environment and Architecture, Mumbai</option>
          <option value="MH77">C.T.E.S.College of Architecture , Mumbai</option>
          <option value="MH78">Indira College of Architecture and Design, Pune</option>
          <option value="MH79">Trinity College of Architecture, Pune</option>
          <option value="MH80">B. R. Harne College of Architecture, Thane District</option>
          <option value="MH81">Jhulelal Institute of Architecture, Nagpur</option>
          <option value="MH82">Ideal College of Architecture, Kolhapur District</option>
          <option value="MH83">Datta Meghe College of Architecture, Nagpur</option>
          <option value="MH84">Yashoda College of Architecture, Satara</option>
          <option value="MH85">Amity School of Architecture and Planning, Panvel</option>
          <option value="MH86">Smt.Kashibai Navale College of Architecture, Pune</option>
          <option value="ML01">School of Technology, Shillong</option>
          <option value="MP01">Maulana Azad National Institute of Technology, Bhopal</option>
          <option value="MP02">Madhav Institute of Technology & Science, Gwalior</option>
          <option value="MP04">IPS Academy's School of Architecture, Indore</option>
          <option value="MP05">SDPS Women's College, Indore</option>
          <option value="MP06">Hitkarni College of Architecture & Town Planning, Jabalpur</option>
          <option value="MP07">Bagulamukhi College of Architecture, Bhopal</option>
          <option value="MP08">Amity School of Architecture & Planning, Gwalior</option>
          <option value="MP09">School of Architecture & Design ITM University, Gwalior</option>
          <option value="MP10">School of Planning & Architecture, Bhopal</option>
          <option value="MP11">RKDF University, Bhopal</option>
          <option value="MZ01">Mizoram University, Aizwal</option>
          <option value="OR01">College of Engineering & Technology, Bhubaneswar</option>
          <option value="OR02">Piloo-Mody College of Architecture, Cuttak</option>
          <option value="OR03">School of Architecture and Planning KIIT University, Bhubaneswar</option>
          <option value="OR04">School of Architecture, Planning & Design, Jatni</option>
          <option value="OR05">SGI School of Architecture, Bhubaneswar</option>
          <option value="OR06">National Institute of Technology, Rourkela</option>
          <option value="OR07">Sri Sri University, Cuttak</option>
          <option value="PJ01">Guru Nanak Dev University, Amritsar</option>
          <option value="PJ02">Giani Zail Singh Punjab Technology University, Bhatinda</option>
          <option value="PJ03">Indo Global College of Architecture, Mohali</option>
          <option value="PJ04">Chitkara School of Planning & Architecture, Patiala District</option>
          <option value="PJ05">College of Architecture I.E.T.Bhaddal, Ropar District</option>
          <option value="PJ06">Lovely School of Architecture & Design, Phagwara</option>
          <option value="PJ07">RIMT College of Architecture, Mandi Gobindgarh</option>
          <option value="PJ08">Surya School of Architecture, Patiala District</option>
          <option value="PJ09">Sai School of Architecture, Amritsar</option>
          <option value="PJ10">Sri Sai School of Architecture, Pathankot</option>
          <option value="PJ11">University Institute of Architecture, Mohali</option>
          <option value="PJ12">Punjab Institute of Technology, Mohali</option>
          <option value="PJ13">CT Institute of Architecture and Planning, Jalandhar District</option>
          <option value="PJ14">Shaheed Bhagat Singh State Technical Campus, Ferozepur</option>
          <option value="RJ01">Malviya National Institute of Technology, Jaipur</option>
          <option value="RJ02">M.B.M.Engineering College, Jodhpur</option>
          <option value="RJ03">Aayojan School of Architecture, Jaipur</option>
          <option value="RJ04">Jagannath University, Jaipur</option>
          <option value="RJ05">Amity School of Architecture & Planning, Jaipur</option>
          <option value="RJ06">Buddha Institute of Architecture & Town Planning, Udaipur</option>
          <option value="RJ07">NIMS School of Architecture & Planning, Jaipur</option>
          <option value="RJ09">Apex Group of Institution, Jaipur</option>
          <option value="RJ10">St.Wilfred's Institute of Architecture, Ajmer</option>
          <option value="RJ12">School of Architecture and Design Manipal University, Jaipur</option>
          <option value="RJ13">Dr.K.N.Modi University, Tonk District</option>
          <option value="RJ14">School of Planning & Architecture Poornima University, Jaipur</option>
          <option value="RJ16">School of Architecture Central University of Rajasthan, Ajmer District</option>
          <option value="RJ18">College of Architecture & Design, Mody University, Sikar District</option>
          <option value="TN01">School of Architecture & Planning Anna University, Chennai</option>
          <option value="TN02">National Institute of Technology, Tiruchirapalli</option>
          <option value="TN03">Adhiyamaan College of Engineering, Hosur</option>
          <option value="TN05">School of Architecture & Interior Design SRM University, Kancheepuram District</option>
          <option value="TN06">Arulmigu Meenakshi Amman College of Engineering, Tiruvannamalai District</option>
          <option value="TN07">School of Architecture Bharat University, Chennai</option>
          <option value="TN08">Hindustan Institute of Technology and Science, Chennai</option>
          <option value="TN09">Mohammed Sathak Engineering College, Ramanathapuram District</option>
          <option value="TN10">School of Architecture Sathyabama University, Chennai</option>
          <option value="TN11">Thiagarajar College of Engineering, Madurai</option>
          <option value="TN12">Periyar Maniammai University, Thanjavur</option>
          <option value="TN13">MEASI Academy of Architecture, Chennai</option>
          <option value="TN14">Salem School of Architecture, Salem</option>
          <option value="TN15">Tamilnadu School of Architecture, Coimbatore</option>
          <option value="TN16">McGan's Ooty School of Architecture, Kotagiri</option>
          <option value="TN17">Prahar School of Architecture, Coimbatore</option>
          <option value="TN18">Meenakshi College of Engineering, Chennai</option>
          <option value="TN19">Karpagam University, Coimbatore</option>
          <option value="TN20">R.V.S. School of Architecture, Dindigul</option>
          <option value="TN21">R.V.S. School of Architecture, Coimbatore</option>
          <option value="TN22">EXCEL College of Architecture and Planning, Namakkal District</option>
          <option value="TN23">Ranganathan Architecture College, Coimbatore</option>
          <option value="TN24">Designed Environment Academy & Research Institute, Tiruchirapalli District</option>
          <option value="TN26">SRM Ramapuram School of Architecture, Chennai</option>
          <option value="TN27">SVS School of Architecture, Coimbatore</option>
          <option value="TN28">Crescent School of Architecture, Chennai</option>
          <option value="TN29">Mohamed Sathak A.J. Academy of Architecture, Kancheepuram District</option>
          <option value="TN30">J.K.K.Munirajah School of Architecture, Erode District</option>
          <option value="TN31">M.A.M. School of Architecture, Tiruchirappalli</option>
          <option value="TN32">C.A.R.E. School of Architecture, Trichy</option>
          <option value="TN33">Surya School of Architecture, Vikravandi</option>
          <option value="TN34">MARG Institute of Design and Architecture, Kancheepuram District</option>
          <option value="TN35">Rajalakshmi School of Architecture, Chennai</option>
          <option value="TN36">RVS KVK School of Architecture, Trichy</option>
          <option value="TN37">Aalim Muhammed Salegh Academy of Architecture, Chennai</option>
          <option value="TN39">RVS Padmavathy School of Architecture, Tiruvalluvar District</option>
          <option value="TN40">Prime College of Architecture & Planning, Nagapattinam District</option>
          <option value="TN41">Dr.M.G.R. Educational and Research Institute University, Chennai</option>
          <option value="TN42">Sri Renugambal College of Architecture, Tiruvannamalai District</option>
          <option value="TN43">N.R.School of Architecture, Coimbatore District</option>
          <option value="TN44">Skandha School of Architecture, Namakkal District</option>
          <option value="TN45">DA Vinci School of Design and Architecture, Chennai</option>
          <option value="TN46">Sasi Creative School of Architecture, Coimbatore</option>
          <option value="TN48">St.Peter's School of Architecture, Chennai</option>
          <option value="TN49">St.Peter's College of Engineering and Technology, Chennai</option>
          <option value="TN50">Coimbatore Institute of Engineering and Technology, Coimbatore</option>
          <option value="TN51">Sigma College of Architecture, Kanyakumari District</option>
          <option value="TN52">Cheran School of Architecture, Karur</option>
          <option value="TN53">Kalasalingam School of Architecture, Krishnankoil</option>
          <option value="TN55">Anand School of Architecture, Chennai</option>
          <option value="TN56">Misrimal Navajee Munoth Jain School of Architecture, Chennai</option>
          <option value="TN58">Park Institute of Architecture, Coimbatore</option>
          <option value="TN59">Dhanalakshmi Srinivasan School of Architecture, Perambalur</option>
          <option value="TN60">Dhanalakshmi Srinivasan School of Architecture, Trichy</option>
          <option value="TN61">JK College of Architecture, Dindigul</option>
          <option value="TN62">S.J.S. School of Architecture, Chennai</option>
          <option value="TN64">Capital College of Architecture, Coimbatore</option>
          <option value="TN66">Chennai Academy of Architecture and Design, Chennai</option>
          <option value="TN68">Indira School of Architecture, Tiruvallur</option>
          <option value="TN69">MMES Academy of Architecture, Vellore</option>
          <option value="TN70">Coimbatore Academy of Architecture, Coimbatore</option>
          <option value="TN71">Kongu School of Architecture , Erode District</option>
          <option value="TN72">Aarupadai Veedu Institute of Technology, Chennai</option>
          <option value="TN73">V.P.M.M.College of Architecture for Women, Virudhunagar District</option>
          <option value="TN74">School of Architecture VIT University, Vellore</option>
          <option value="TN75">San Academy of Architecture, Coimbatore</option>
          <option value="TN76">Sri Venkateswara School of Architecture, Thiruvallur</option>
          <option value="TN77">Prime Nest College of Architecture and Planning, Tiruchirappalli</option>
          <option value="TN78">Hindusthan School of Architecture, Coimbatore</option>
          <option value="TN79">Jaya School of Architecture, Chennai</option>
          <option value="TN80">Agni School of Architecture and Design Excellence, Dindigul</option>
          <option value="TN81">Jawahar School of Architecture Planning and Design, Chennai</option>
          <option value="TN82">Nehru School of Architecture, Coimbatore</option>
          <option value="TN83">SVS International College of Architecture, Pudukkottai</option>
          <option value="TN84">Al-Amir College of Architecture, Sivagangai</option>
          <option value="TN85">School of Architecture PRIST University, Tiruchirappalli</option>
          <option value="TN86">Shakthi School of Architecture, Dharapuram</option>
          <option value="TS01">Jawaharlal Nehru Architecture and Fine Arts University ,Hyderabad</option>
          <option value="TS02">CSI Institute of Technology ,Secunderabad</option>
          <option value="TS03">Sri Venkateswara College of Architecture ,Hyderabad</option>
          <option value="TS04">Vaishnavi School of Architecture & Planning ,Hyderabad</option>
          <option value="TS05">Maestro School of Planning and Architecture ,Hyderabad</option>
          <option value="TS06">Deccan School of Planning & Architecture ,Hyderabad</option>
          <option value="TS07">Jawaharlal Nehru Institute of Advanced Studies ,Secunderabad</option>
          <option value="TS08">J.B.R. Architecture College ,Hyderabad</option>
          <option value="TS09">Aurora's Design Academy, Hyderabad</option>
          <option value="TS10">Aurora's Design Institute, Hyderabad</option>
          <option value="TS11">Ashoka School of Planning and Architecture ,Malkapur Village</option>
          <option value="TS12">Kasturba Gandhi College of Architecture ,Secunderabad</option>
          <option value="UA01">Indian Institute of Technology ,Roorkee</option>
          <option value="UA02">Dehradun Institute of Technology ,Dehradun</option>
          <option value="UA03">Himgiri Zee University ,Dehradun</option>
          <option value="UA04">Graphic Era Hill University ,Dehradun</option>
          <option value="UA05">Droan College of Architecture ,Rudrapur</option>
          <option value="UP01">Uttar Pradesh Technical University ,Lucknow</option>
          <option value="UP02">Zakir Hussain College of Engineering & Technology ,Aligarh</option>
          <option value="UP03">Apeejay Institute of Technology ,Lucknow</option>
          <option value="UP04">Babu Banarasi Das University ,Lucknow</option>
          <option value="UP05">Integral University ,Lucknow</option>
          <option value="UP06">Amity School of Architecture & Planning ,Noida</option>
          <option value="UP07">Amity School of Architecture and Planning ,Lucknow</option>
          <option value="UP08">Sunder Deep College of Architecture ,Ghaziabad</option>
          <option value="UP09">Institute of Architecture and Town Planning ,Jhansi</option>
          <option value="UP10">College of Architecture ,Moradabad</option>
          <option value="UP11">Khandelwal College of Architecture and Design ,Bareilly</option>
          <option value="UP12">Teerthanker Mahaveer College of Architecture ,Moradabad</option>
          <option value="UP13">Institute of Architecture & Town Planning ,Sitapur</option>
          <option value="UP14">Shree Bankey Bihari Institute of Architecture ,Meerut</option>
          <option value="UP15">ITM School of Architecture & Town Planning ,Lucknow</option>
          <option value="UP16">JMS School of Architecture ,Hapur</option>
          <option value="UP17">School of Architecture ,Mathura</option>
          <option value="UP18">School of Architecture & Planning Sharda University ,Greater Noida</option>
          <option value="UP20">College of Architecture Invertis University ,Bareilly</option>
          <option value="UP21">School of Architecture Delhi Technical Campus ,Greater Noida</option>
          <option value="UP22">Shri Ram School of Architecture ,Muzzaffarnagar</option>
          <option value="UP23">R.R.Institute of Modern Technology ,Lucknow</option>
          <option value="UP24">Anand College of Architecture ,Agra</option>
          <option value="UP25">Brahmanand Group of Institutions ,Bulandshahr</option>
          <option value="UP26">Hardayal School of Architecture ,Mathura</option>
          <option value="UP27">Accurate Institute of Architecture & Planning ,Greater Noida</option>
          <option value="UP29">Ideal School of Architecture ,Ghaziabad</option>
          <option value="UP30">Ansal School of Architecture ,Lucknow</option>
          <option value="UP31">Purvanchal Institute of Architecture & Design ,Gorakhpur</option>
          <option value="UP32">Forth Dimension College of Architecture ,Saharanpur</option>
          <option value="UP33">Faculty of Architecture and Town Planning ,Agra</option>
          <option value="UP34">SGIT IMT College of Architecture ,Ghaziabad</option>
          <option value="UP35">School of Architecture and Regional Planning ,Greater Noida</option>
          <option value="UP36">Axis Institute of Architecture (AIA) ,Rooma ,Kanpur</option>
          <option value="UP37">Ishan Institute of Architecture & Planning ,Greater Noida</option>
          <option value="UP38">Monad School of Architecture & Planning ,Pilakhwa ,Hapur</option>
          <option value="UP41">Vivekanand College of Architecture ,Ghaziabad</option>
          <option value="UP42">School of Architecture, Galgotias University ,Greater Noida</option>
          <option value="UP43">School of Architecture Noida International University ,Greater Noida</option>
          <option value="UP44">Department of Architecture Mangalayatan University ,Aligarh</option>
          <option value="WB01">Indian Institute of Engineering Science and Technology ,Shibpu</option>
          <option value="WB02">Indian Institute of Technology , Kharagp</option>
          <option value="WB03">Jadavpur University ,Kolkata</option>
          <option value="WB04">Rani Rashmoni School of Architecture ,Kolkata</option>
          <option value="WB05">Om Dayal School of Architecture ,Kolkata</option>
          <option value="WB06">Techno India University School of Architecture ,Kolkata</option>
          <option value="WB07">Amity School of Architecture and Planning ,Kolkata</option>
        </select>
      </div>
      <div class="col-md-6 pos-second">
        <input type="text" placeholder="Phone Number" class="registration-field" name="member[1][phone]" pattern="[789][0-9]{9}">
      </div>
      <div class="col-md-6">
        <div class='box-student2'></div><span class="student-select">Student</span>
        <div class='box-architect2'></div><span class="architect-select">Architect</span>
        <input name="member[1][type]" type='hidden' value="STUDENT">
        <input name="member[1][qualification]" type='hidden' value="">
      </div>
      <div class="col-md-6 pos-second">
        <div class="architect-only2">
          <p class="year-of-passing">Year Of Passing</p>
          <select class="dropdown-menu architect-only2 registration-field" name="member[1][year_of_passing]">
            <option value="2014">2014</option>
            <option value="2015">2015</option>
          </select>
        </div>
      </div>
      <div class="col-md-12 team-member">
        <h4 class="sub-title-field turn-red">Team Member 3</h4>
      </div>
      <div class="col-md-6">
        <input type="text" placeholder="Full Name" class="registration-field" name="member[2][name]">
      </div>
      <div class="col-md-6 pos-second">
        <input type="email" placeholder="Email Address" class="registration-field" name="member[2][email]">
      </div>
      <div class="col-md-6">
        <select class="select registration-field form-control" name="member[2][college]">
          <option value="">Name Of College</option>
          <option value="AP02">College of Engineering,Visakhapatnam</option>
          <option value="AP05">S.A.R. College of Architecture,Krishna District</option>
          <option value="AP08">ANU College of Architecture & Planning,Guntur</option>
          <option value="AP11">Gandhi Institute of Technology and Management,Visakhapatnam</option>
          <option value="AP14">Varaha College of Architecture & Planning,Visakhapatnam</option>
          <option value="AP18">School of Planning and Architecture, Vijayawada</option>
          <option value="AP19">M.R.K.College of Architecture,Veeravasara Mandalam</option>
          <option value="AP20">Maestro School of Planning and Architecture,Vijayawada</option>
          <option value="AP21">K.L.E.F.University,Guntur</option>
          <option value="AP22">Vaishnavi School of Architecture and Planning ,Vijayawada</option>
          <option value="AR01">Indira Gandhi Technological and Medical Sciences University, Ziro</option>
          <option value="AR02">School of Planning, Architecture & Design, Apex Professional University, Pasighat</option>
          <option value="AS01">Guwahati College of Architecture, Guwahati</option>
          <option value="AS02">Royal School of Architecture, Guwahati</option>
          <option value="BR01">National Institute of Technology, Patna</option>
          <option value="BR03">Birla Institute of Technology, Patna</option>
          <option value="CG01">National Institute of Technology, Raipur</option>
          <option value="CG03">Dignity College of Architecture, Durg</option>
          <option value="CG08">Amity School of Architecture and Planning, Raipur</option>
          <option value="CH01">Chandigarh College of Architecture, Chandigarh</option>
          <option value="DL01">School of Planning & Architecture, New Delhi</option>
          <option value="DL03">Vastu Kala Academy, New Delhi</option>
          <option value="DL04">Jamia Millia Islamia, New Delh</option> 
          <option value="DL06">University School of Architecture & Planning, Delhi</option>
          <option value="DL07">MBS School of Planning and Architecture, New Delhi</option>
          <option value="DL08">K.R.Mangalam School of Architecture & Planning, New Delhi</option>
          <option value="DL09">Indira Gandhi Delhi Technical University for Women, Delhi</option>
          <option value="GA01">Goa College of Architecture, Panaji</option>
          <option value="GJ01">M.S. University of Baroda, Vadodara</option>
          <option value="GJ02">Centre for Environmental Planning & Technology University (CEPT University), Ahmedabad</option>
          <option value="GJ03">D.C. Patel School of Architecture, Vidhyanagar</option>
          <option value="GJ04">Sarvajanik College of Engineering & Technology, Surat</option>
          <option value="GJ05">Sardar Vallabhai Patel Institute of Technology, Anand Distric</option>
          <option value="GJ06">Vyavasay Vidya Pratishthan's Indubhai Parekh School of Architecture, Rajkot</option>
          <option value="GJ07">SOA Vadodara Design Academy, Vadodara</option>
          <option value="GJ08">Institute of Architecture Hemchandracharya North Gujarat University, Patan</option>
          <option value="GJ09">Shri Gijubhai Chhaganbhai Patel Institute of Architecture, Interior Design and Fine Arts, Surat</option>
          <option value="GJ10">Grow More School of Architecture, Sabarkantha District</option>
          <option value="GJ11">Anant Institute of Architecture, Ahmedabad</option>
          <option value="GJ12">School of Design and Architecture Navrachana University, Vadodara</option>
          <option value="GJ13">Parul Institute of Architecture and Research, Vadodara</option>
          <option value="GJ14">ITM School of Architecture Art and Design, Vadodara District</option>
          <option value="GJ15">Shantaben Manubhai Patel School of Studies and Research in Architecture and Interior Design, Anand District</option>
          <option value="GJ16">Institute of Design, Environment & Architecture Indus University, Gandhinagar</option>
          <option value="GJ17">Bhagwan Mahavir College of Architecture, Surat</option>
          <option value="GJ18">L.J. School of Architecture, Ahmedabad</option>
          <option value="GJ19">Raman Bhakta School of Architecture, Surat District</option>
          <option value="GJ20">Institute of Architecture Nirma University, Ahmedabad</option>
          <option value="GJ21">Laxmi Institute of Architecture, Valsad</option>
          <option value="GJ22">Kalol Institute of Architecture & Design, Gandhinagar District</option>
          <option value="GJ23">Venus Institute of Design & Architecture, Gandhinagar</option>
          <option value="GJ24">Sal School of Architecture, Ahmedabad</option> 
          <option value="GJ25">Institute of Architecture Ganpat University, Kherva Mehsana</option>
          <option value="GJ26">VJKM Institute of Architecture and Design, Mehsana District</option>
          <option value="GJ27">Vidyamandir College of Architecture for Women, Surat District</option>
          <option value="GJ28">Marwadi Education Foundation's Group of Institutions, Faculty of Architecture, Rajkot</option>
          <option value="HP01">National Institute of Technology, Hamirpur</option>
          <option value="HP03">IEC School of Architecture, Solan District</option>
          <option value="HP04">Maharaja Agrasen School of Architecture & Design, Solan District</option>
          <option value="HP05">APG School of Architecture, Shimla</option>
          <option value="HR01">Sushant School of Art & Architecture, Gurgaon</option>
          <option value="HR02">Deenbandhu Chhotu Ram University of Science & Technology, Murthal</option>
          <option value="HR03">Gateway College of Architecture & Design, Sonepat</option>
          <option value="HR04">Sat Priya School of Architecture and Design, Rohtak</option>
          <option value="HR05">Budha College of Architecture, Karnal District</option>
          <option value="HR06">R.P. Educational Trust Group of Institutions, Karnal</option>
          <option value="HR07">ICL Institute of Architecture and Town Planning, Ambala District</option>
          <option value="HR08">Lingaya's University's School of Architecture, Faridabad</option>
          <option value="HR09">Om Institute of Architecture & Design, Hisar</option>
          <option value="HR10">Savera College of Architecture, Gurgaon</option>
          <option value="HR11">Ganga Institute of Architecture & Town Planning, Jhajjar District</option>
          <option value="HR12">Maharishi Markandeshwar University, Ambala</option>
          <option value="HR13">Amity School of Architecture & Planning, Gurgaon District</option>
          <option value="HR14">Hindu School of Architecture, Sonepa</option>
          <option value="HR15">State Institute of Urban Planning & Architecture, Rohtak</option>
          <option value="HR16">South Point School of Architecture, Sonipat</option>
          <option value="HR17">CCLS College of Architecture & Design, Rohtak</option>
          <option value="HR18">P.M.College of Architecture, Sonepat</option>
          <option value="HR19">Rabindranath Tagore Institute of Architecture & Design, Faridabad</option>
          <option value="HR20">Narendra College of Architecture, Ballabhgarh</option>
          <option value="HR21">K.R.Mangalam University, Gurgaon</option>
          <option value="HR22">Bhagwan Mahaveer School of Architecture, SOnepat</option>
          <option value="HR23">P.D.M. School of Architecture & Town Planning, Jhajjar District</option>
          <option value="HR24">South Point College of Architecture , Sonepat</option>
          <option value="HR26">Delhi Institute of Architecture & Planning, Faridabad</option>
          <option value="HR27">Manav Rachna International University, Faridabad</option>
          <option value="HR28">Jagan Nath University, Jhajjar</option>
          <option value="HR29">Al-Falah School of Architecture & Design, Faridabad</option>
		  <option value="JK01">Shri Mata Vaishno Devi University Kakryal, Katra-182320 J&K </option>
          <option value="JH01">Faculty of Architecture Birla Institute of Technology ,Ranchi</option>
          <option value="JH02">Awadh College of Architecture ,Jamshedpur</option>
          <option value="sign">School of Architecture & Landscape</option>
          <option value="KA01">Visvesvaraya College of Engineering Bangalore University ,Bangalore</option>
          <option value="KA02">Manipal School of Architecture & Planning ,Manipal</option>
          <option value="KA03">BMS College of Engineering ,Bangalore</option>
          <option value="KA05">KLE Technological University ,Hubli</option>
          <option value="KA06">Poojya Doddappa Appa College of Engineering ,Gulbarga</option>
          <option value="KA07">Dayananda Sagar College of Engineering ,Bangalore</option>
          <option value="KA08">Dr. P. G. Halakatti College of Engineering & Technology ,Bijapur</option>
          <option value="KA09">Malik Sandal Institute of Art & Architecture ,Bijapur</option>
          <option value="KA11">MS Ramaiah Institute of Technology ,Bangalore</option>
          <option value="KA12">R.V. College of Architecture (RVCA) ,Bangalore</option>
          <option value="KA13">Siddaganga Institute of Technology Campus ,Tumkur</option>
          <option value="KA14">Gogte Institute of Technology ,Belgaum</option>
          <option value="KA15">The University School of Design ,Mysore</option>
          <option value="KA16">Acharya's NRV School of Architecture ,Bangalore</option>
          <option value="KA17">BMS School of Architecture ,Bangalore</option>
          <option value="KA18">Aakar Academy of Architecture ,Bangalore</option>
          <option value="KA19">The Oxford School of Architecture ,Bangalore</option>
          <option value="KA21">Srinivas Institute of Technology ,Mangalore</option>
          <option value="KA22">Dayananda Sagar Academy of Technology and Management ,Bangalore</option>
          <option value="KA24">SJB School of Architecture & Planning ,Bangalore</option>
          <option value="KA25">IMPACT School of Architecture ,Bangalore</option>
          <option value="KA26">Best School of Architecture ,Tumkur</option>
          <option value="KA27">Gopalan School of Architecture and Planning ,Bangalore</option>
          <option value="KA28">R.R.School of Architecture ,Bangalore</option>
          <option value="KA29">Mysore School of Architecture ,Mysore</option>
          <option value="KA30">BGS School of Architecture and Planning ,Bangalore</option>
          <option value="KA31">Bearys Enviro-Architecture Design School ,Mangalore</option>
          <option value="KA32">Nitte Institute of Architecture ,Mangalore</option>
          <option value="KA33">K.S.School of Architecture ,Bangalore</option>
          <option value="KA34">Wadiyar Centre For Architecture ,Mysuru</option>
          <option value="KA35">Aditya Academy of Architecture & Design ,Bangalore</option>
          <option value="KA36">School of Architecture, Reva University ,Bangalore</option>
          <option value="KA37">CMR University ,Bangalore</option>
          <option value="KA38">HMS Institute of Technology ,Tumkur</option>
          <option value="KL01">College of Engineering, Trivandrum</option>
          <option value="KL02">TKM College of Engineering, Kollam</option>
          <option value="KL03">MES College of Engineering, Malappuram District</option>
          <option value="KL04">National Institute of Technology, Calicut</option>
          <option value="KL05">Government Engineering College, Thrissur</option>
          <option value="KL07">Devaki Amma's Guruvayurappan College of Architecture, Malappuram District</option>
          <option value="KL08">Bishop Jerome School of Architecture & Design, Kollam</option>
          <option value="KL09">Rajiv Gandhi Institute of Technology, Kottayam</option>
          <option value="KL10">Holy Crescent College of Architecture,Alwaye</option>
          <option value="KL11">TKM School of Architecture, Kollam</option>
          <option value="KL12">College of Architecture, Tivandrum</option>
          <option value="KL14">IES College of Architecture, Thrissur</option>
          <option value="KL15">Al Salama Institute of Architecture, Malappuram District</option>
          <option value="KL16">Sneha College of Architecture, Palakkad District</option>
          <option value="KL17">College of Engineering and Technology, Kannur District</option>
          <option value="KL18">Asian School of Architecture and Design, Cochin</option>
          <option value="KL19">Global Institute of Architecture, Palakkad District</option>
          <option value="KL21">KMCT College of Architecture, Calicut District</option>
          <option value="KL22">KMEA College of Architecture, Kochi</option>
          <option value="KL23">School of Architecture Mookambika Technical Campus, Ernakulam District</option>
          <option value="KL24">MES College of Architecture, Calicut</option>
          <option value="KL26">Marian College of Architecture & Planning, Trivandrum</option>
          <option value="KL27">Mangalam School of Architecture and Planning,Kottayam</option>
          <option value="KL28">Nizar Rahim and Mark School of Architecture, Kollam</option>
          <option value="KL29">Eranad Knowledge City College of Architecture, Malappuram District</option>
          <option value="KL30">SCMS School of Architecture, Ernakulam</option>
          <option value="KL31">Vedavyasa College of Architecture, Malappuram District</option>
          <option value="KL32">Thejus College of Architecture, Thrissur</option>
          <option value="KL34">D C School of Architecture and Design, Idukki District</option>
          <option value="KL35">Avani Institute of Design, Calicut</option>
          <option value="KL36">Talent Institute of Architecture (TIBA), Edappal</option>
          <option value="KL37">Nehru College of Architecture, Palakkad</option>
          <option value="MH01">Sir J.J.College of Architecture, Mumbai</option>
          <option value="MH02">L.S.Raheja School of Architecture, Mumbai</option>
          <option value="MH03">Academy of Architecture, Mumbai</option>
          <option value="MH04">Visvesvaraya National Institute of Technology, Nagpur</option>
          <option value="MH05">BKPS College of Architecture, Pune</option>
          <option value="MH06">College of Engineering & Technology, Akola</option>
          <option value="MH07">D.Y.Patil College of Engineering & Technology, Kolhapur</option>
          <option value="MH08">G.S.Mandal's Marathwada Institute of Technology, Aurangabad</option>
          <option value="MH09">Shri Prince Shivaji Maratha Boarding House's College of Architecture, Kolhapur</option>
          <option value="MH10">Marathwada Mitra Mandal's College of Architecture, Pune</option>
          <option value="MH11">Manoharbhai Patel Institute of Engineering & Technology, Gondia</option>
          <option value="MH12">Jawahar Lal Nehru Engineering College, Aurangabad</option>
          <option value="MH13">MVP Samaj's College of Architecture, Nasik</option>
          <option value="MH14">Bharati Vidyapeeth's College of Architecture, Navi Mumbai</option>
          <option value="MH15">Kamla Raheja Vidyanidhi Institute for Architecture & Environmental Studies, Mumbai</option>
          <option value="MH16">Dr.D.Y.Patil College of Architecture, Navi Mumbai</option>
          <option value="MH17">Pillais College of Architecture, New Panvel</option>
          <option value="MH18">Rizvi College of Architecture, Mumbai</option>
          <option value="MH19">Bharati Vidyapeeth University's College of Architecture, Pune</option>
          <option value="MH20">Smt.Manoramabai Mundle, College of Architecture, Nagpur</option>
          <option value="MH21">Dr.Bhanuben Nanavati College of Architecture for Women, Pune</option>
          <option value="MH23">Shri Siddeshwar Shikshan Mandal's College of Architecture,Solapur</option>
          <option value="MH24">Appasaheb Birnale College of Architecture, Sangli</option>
          <option value="MH25">Kavikulguru Institute of Technology & Science, Nagpur District</option>
          <option value="MH26">Priyadarshini Institute of Architecture & Design Studies, Nagpur</option>
          <option value="MH27">Indian Education Society's College of Architecture, Mumbai</option>
          <option value="MH28">Dr.Baliram Hiray College of Architecture, Mumbai</option>
          <option value="MH29">Pravara Rural College of Architecture, Ahmednagar</option>
          <option value="MH30">Padmabhushan Dr.Vasantdada Patil College of Architecture</option>
          <option value="MH31">M.C.E.Society's Allana College of Architecture, Pune</option>
          <option value="MH32">Padmashree Dr.D.Y.Patil College of Architecture, Pune</option>
          <option value="MH33">Sinhgad College of Architecture, Pune</option>
          <option value="MH34">Late Shri Bapuraoji Deshmukh Degree College of Architecture, Wardha District</option>
          <option value="MH39">Asmita College of Architecture, Thane</option>
          <option value="MH42">Balwant Sheth School of Architecture, Mumbai</option>
          <option value="MH44">Shrikrishna Educational & Cultural Mandal's College of Architecture, Jalgaon</option>
          <option value="MH45">Samyak Sankalpa College of Architecture, Thane District</option>
          <option value="MH47">IDEAS-Institute of Design Education & Architecture Studies, Nagpur</option>
          <option value="MH48">Vidya Vardhan's Institute of Design Environment and Architecture, Nasik</option>
          <option value="MH49">Vidya Pratishthan's School of Architecture, Pune District</option>
          <option value="MH50">ADA's Minerva College of Architecture, Pune District</option>
          <option value="MH51">P.R.Patil College of Architecture, Amravati</option>
          <option value="MH52">Radhikatai Pandav Institute of Architecture, Nagpur</option>
          <option value="MH53">VIVA School of Architecture, Virar(E) Palgarh District</option>
          <option value="MH54">Pillai's HOC College of Architecture, Raigad</option>
          <option value="MH55">Anjuman-I-Islam's Kalsekar Technical Campus, Navi Mumbai</option>
          <option value="MH56">Dr.DY Patil School of Architecture, Pune</option>
          <option value="MH57">Lokmanya Tilak Institute of Architecture & Design Studies, Navi Mumbai</option>
          <option value="MH58">Tulsiramji Gaikwad-Patil College of Architecture, Nagpur</option>
          <option value="MH59">Oyster College of Architecture, Aurangabad</option>
          <option value="MH61">St.Wilfred's Institute of Architecture, Raigad District</option>
          <option value="MH62">Aayojan School of Architecture and Design, Pune District</option>
          <option value="MH63">Ojaswini College of Architecture and Design, Jalgaon</option>
          <option value="MH64">Shri Sharada Bhavan Education Society's Academy of Architecture, Nanded</option>
          <option value="MH65">Patel College of Architecture, Aurangabad</option>
          <option value="MH66">BRICK School of Architecture, Pune District</option>
          <option value="MH67">Aditya College of Architecture, Mumbai</option>
          <option value="MH68">Pravara Rural Education Society's College of Architecture, Nasik District</option>
          <option value="MH69">Symbiosis School of Planning & Architecture, Pune District</option>
          <option value="MH70">Smt.Premalati Chavan College of Architecture, Satara District</option>
          <option value="MH71">Anantrao Pawar College of Architecture, Pune</option>
          <option value="MH72">IDEAL Institute of Architecture, Thane</option>
          <option value="MH73">Thakur School of Architecture & Planning, Mumbai</option>
          <option value="MH74">S.B.Patil College of Architecture & Design, Pune</option>
          <option value="MH75">D.Y.Patil School of Architecture, Talegaon Pune District</option>
          <option value="MH76">School of Environment and Architecture, Mumbai</option>
          <option value="MH77">C.T.E.S.College of Architecture , Mumbai</option>
          <option value="MH78">Indira College of Architecture and Design, Pune</option>
          <option value="MH79">Trinity College of Architecture, Pune</option>
          <option value="MH80">B. R. Harne College of Architecture, Thane District</option>
          <option value="MH81">Jhulelal Institute of Architecture, Nagpur</option>
          <option value="MH82">Ideal College of Architecture, Kolhapur District</option>
          <option value="MH83">Datta Meghe College of Architecture, Nagpur</option>
          <option value="MH84">Yashoda College of Architecture, Satara</option>
          <option value="MH85">Amity School of Architecture and Planning, Panvel</option>
          <option value="MH86">Smt.Kashibai Navale College of Architecture, Pune</option>
          <option value="ML01">School of Technology, Shillong</option>
          <option value="MP01">Maulana Azad National Institute of Technology, Bhopal</option>
          <option value="MP02">Madhav Institute of Technology & Science, Gwalior</option>
          <option value="MP04">IPS Academy's School of Architecture, Indore</option>
          <option value="MP05">SDPS Women's College, Indore</option>
          <option value="MP06">Hitkarni College of Architecture & Town Planning, Jabalpur</option>
          <option value="MP07">Bagulamukhi College of Architecture, Bhopal</option>
          <option value="MP08">Amity School of Architecture & Planning, Gwalior</option>
          <option value="MP09">School of Architecture & Design ITM University, Gwalior</option>
          <option value="MP10">School of Planning & Architecture, Bhopal</option>
          <option value="MP11">RKDF University, Bhopal</option>
          <option value="MZ01">Mizoram University, Aizwal</option>
          <option value="OR01">College of Engineering & Technology, Bhubaneswar</option>
          <option value="OR02">Piloo-Mody College of Architecture, Cuttak</option>
          <option value="OR03">School of Architecture and Planning KIIT University, Bhubaneswar</option>
          <option value="OR04">School of Architecture, Planning & Design, Jatni</option>
          <option value="OR05">SGI School of Architecture, Bhubaneswar</option>
          <option value="OR06">National Institute of Technology, Rourkela</option>
          <option value="OR07">Sri Sri University, Cuttak</option>
          <option value="PJ01">Guru Nanak Dev University, Amritsar</option>
          <option value="PJ02">Giani Zail Singh Punjab Technology University, Bhatinda</option>
          <option value="PJ03">Indo Global College of Architecture, Mohali</option>
          <option value="PJ04">Chitkara School of Planning & Architecture, Patiala District</option>
          <option value="PJ05">College of Architecture I.E.T.Bhaddal, Ropar District</option>
          <option value="PJ06">Lovely School of Architecture & Design, Phagwara</option>
          <option value="PJ07">RIMT College of Architecture, Mandi Gobindgarh</option>
          <option value="PJ08">Surya School of Architecture, Patiala District</option>
          <option value="PJ09">Sai School of Architecture, Amritsar</option>
          <option value="PJ10">Sri Sai School of Architecture, Pathankot</option>
          <option value="PJ11">University Institute of Architecture, Mohali</option>
          <option value="PJ12">Punjab Institute of Technology, Mohali</option>
          <option value="PJ13">CT Institute of Architecture and Planning, Jalandhar District</option>
          <option value="PJ14">Shaheed Bhagat Singh State Technical Campus, Ferozepur</option>
          <option value="RJ01">Malviya National Institute of Technology, Jaipur</option>
          <option value="RJ02">M.B.M.Engineering College, Jodhpur</option>
          <option value="RJ03">Aayojan School of Architecture, Jaipur</option>
          <option value="RJ04">Jagannath University, Jaipur</option>
          <option value="RJ05">Amity School of Architecture & Planning, Jaipur</option>
          <option value="RJ06">Buddha Institute of Architecture & Town Planning, Udaipur</option>
          <option value="RJ07">NIMS School of Architecture & Planning, Jaipur</option>
          <option value="RJ09">Apex Group of Institution, Jaipur</option>
          <option value="RJ10">St.Wilfred's Institute of Architecture, Ajmer</option>
          <option value="RJ12">School of Architecture and Design Manipal University, Jaipur</option>
          <option value="RJ13">Dr.K.N.Modi University, Tonk District</option>
          <option value="RJ14">School of Planning & Architecture Poornima University, Jaipur</option>
          <option value="RJ16">School of Architecture Central University of Rajasthan, Ajmer District</option>
          <option value="RJ18">College of Architecture & Design, Mody University, Sikar District</option>
          <option value="TN01">School of Architecture & Planning Anna University, Chennai</option>
          <option value="TN02">National Institute of Technology, Tiruchirapalli</option>
          <option value="TN03">Adhiyamaan College of Engineering, Hosur</option>
          <option value="TN05">School of Architecture & Interior Design SRM University, Kancheepuram District</option>
          <option value="TN06">Arulmigu Meenakshi Amman College of Engineering, Tiruvannamalai District</option>
          <option value="TN07">School of Architecture Bharat University, Chennai</option>
          <option value="TN08">Hindustan Institute of Technology and Science, Chennai</option>
          <option value="TN09">Mohammed Sathak Engineering College, Ramanathapuram District</option>
          <option value="TN10">School of Architecture Sathyabama University, Chennai</option>
          <option value="TN11">Thiagarajar College of Engineering, Madurai</option>
          <option value="TN12">Periyar Maniammai University, Thanjavur</option>
          <option value="TN13">MEASI Academy of Architecture, Chennai</option>
          <option value="TN14">Salem School of Architecture, Salem</option>
          <option value="TN15">Tamilnadu School of Architecture, Coimbatore</option>
          <option value="TN16">McGan's Ooty School of Architecture, Kotagiri</option>
          <option value="TN17">Prahar School of Architecture, Coimbatore</option>
          <option value="TN18">Meenakshi College of Engineering, Chennai</option>
          <option value="TN19">Karpagam University, Coimbatore</option>
          <option value="TN20">R.V.S. School of Architecture, Dindigul</option>
          <option value="TN21">R.V.S. School of Architecture, Coimbatore</option>
          <option value="TN22">EXCEL College of Architecture and Planning, Namakkal District</option>
          <option value="TN23">Ranganathan Architecture College, Coimbatore</option>
          <option value="TN24">Designed Environment Academy & Research Institute, Tiruchirapalli District</option>
          <option value="TN26">SRM Ramapuram School of Architecture, Chennai</option>
          <option value="TN27">SVS School of Architecture, Coimbatore</option>
          <option value="TN28">Crescent School of Architecture, Chennai</option>
          <option value="TN29">Mohamed Sathak A.J. Academy of Architecture, Kancheepuram District</option>
          <option value="TN30">J.K.K.Munirajah School of Architecture, Erode District</option>
          <option value="TN31">M.A.M. School of Architecture, Tiruchirappalli</option>
          <option value="TN32">C.A.R.E. School of Architecture, Trichy</option>
          <option value="TN33">Surya School of Architecture, Vikravandi</option>
          <option value="TN34">MARG Institute of Design and Architecture, Kancheepuram District</option>
          <option value="TN35">Rajalakshmi School of Architecture, Chennai</option>
          <option value="TN36">RVS KVK School of Architecture, Trichy</option>
          <option value="TN37">Aalim Muhammed Salegh Academy of Architecture, Chennai</option>
          <option value="TN39">RVS Padmavathy School of Architecture, Tiruvalluvar District</option>
          <option value="TN40">Prime College of Architecture & Planning, Nagapattinam District</option>
          <option value="TN41">Dr.M.G.R. Educational and Research Institute University, Chennai</option>
          <option value="TN42">Sri Renugambal College of Architecture, Tiruvannamalai District</option>
          <option value="TN43">N.R.School of Architecture, Coimbatore District</option>
          <option value="TN44">Skandha School of Architecture, Namakkal District</option>
          <option value="TN45">DA Vinci School of Design and Architecture, Chennai</option>
          <option value="TN46">Sasi Creative School of Architecture, Coimbatore</option>
          <option value="TN48">St.Peter's School of Architecture, Chennai</option>
          <option value="TN49">St.Peter's College of Engineering and Technology, Chennai</option>
          <option value="TN50">Coimbatore Institute of Engineering and Technology, Coimbatore</option>
          <option value="TN51">Sigma College of Architecture, Kanyakumari District</option>
          <option value="TN52">Cheran School of Architecture, Karur</option>
          <option value="TN53">Kalasalingam School of Architecture, Krishnankoil</option>
          <option value="TN55">Anand School of Architecture, Chennai</option>
          <option value="TN56">Misrimal Navajee Munoth Jain School of Architecture, Chennai</option>
          <option value="TN58">Park Institute of Architecture, Coimbatore</option>
          <option value="TN59">Dhanalakshmi Srinivasan School of Architecture, Perambalur</option>
          <option value="TN60">Dhanalakshmi Srinivasan School of Architecture, Trichy</option>
          <option value="TN61">JK College of Architecture, Dindigul</option>
          <option value="TN62">S.J.S. School of Architecture, Chennai</option>
          <option value="TN64">Capital College of Architecture, Coimbatore</option>
          <option value="TN66">Chennai Academy of Architecture and Design, Chennai</option>
          <option value="TN68">Indira School of Architecture, Tiruvallur</option>
          <option value="TN69">MMES Academy of Architecture, Vellore</option>
          <option value="TN70">Coimbatore Academy of Architecture, Coimbatore</option>
          <option value="TN71">Kongu School of Architecture , Erode District</option>
          <option value="TN72">Aarupadai Veedu Institute of Technology, Chennai</option>
          <option value="TN73">V.P.M.M.College of Architecture for Women, Virudhunagar District</option>
          <option value="TN74">School of Architecture VIT University, Vellore</option>
          <option value="TN75">San Academy of Architecture, Coimbatore</option>
          <option value="TN76">Sri Venkateswara School of Architecture, Thiruvallur</option>
          <option value="TN77">Prime Nest College of Architecture and Planning, Tiruchirappalli</option>
          <option value="TN78">Hindusthan School of Architecture, Coimbatore</option>
          <option value="TN79">Jaya School of Architecture, Chennai</option>
          <option value="TN80">Agni School of Architecture and Design Excellence, Dindigul</option>
          <option value="TN81">Jawahar School of Architecture Planning and Design, Chennai</option>
          <option value="TN82">Nehru School of Architecture, Coimbatore</option>
          <option value="TN83">SVS International College of Architecture, Pudukkottai</option>
          <option value="TN84">Al-Amir College of Architecture, Sivagangai</option>
          <option value="TN85">School of Architecture PRIST University, Tiruchirappalli</option>
          <option value="TN86">Shakthi School of Architecture, Dharapuram</option>
          <option value="TS01">Jawaharlal Nehru Architecture and Fine Arts University ,Hyderabad</option>
          <option value="TS02">CSI Institute of Technology ,Secunderabad</option>
          <option value="TS03">Sri Venkateswara College of Architecture ,Hyderabad</option>
          <option value="TS04">Vaishnavi School of Architecture & Planning ,Hyderabad</option>
          <option value="TS05">Maestro School of Planning and Architecture ,Hyderabad</option>
          <option value="TS06">Deccan School of Planning & Architecture ,Hyderabad</option>
          <option value="TS07">Jawaharlal Nehru Institute of Advanced Studies ,Secunderabad</option>
          <option value="TS08">J.B.R. Architecture College ,Hyderabad</option>
          <option value="TS09">Aurora's Design Academy, Hyderabad</option>
          <option value="TS10">Aurora's Design Institute, Hyderabad</option>
          <option value="TS11">Ashoka School of Planning and Architecture ,Malkapur Village</option>
          <option value="TS12">Kasturba Gandhi College of Architecture ,Secunderabad</option>
          <option value="UA01">Indian Institute of Technology ,Roorkee</option>
          <option value="UA02">Dehradun Institute of Technology ,Dehradun</option>
          <option value="UA03">Himgiri Zee University ,Dehradun</option>
          <option value="UA04">Graphic Era Hill University ,Dehradun</option>
          <option value="UA05">Droan College of Architecture ,Rudrapur</option>
          <option value="UP01">Uttar Pradesh Technical University ,Lucknow</option>
          <option value="UP02">Zakir Hussain College of Engineering & Technology ,Aligarh</option>
          <option value="UP03">Apeejay Institute of Technology ,Lucknow</option>
          <option value="UP04">Babu Banarasi Das University ,Lucknow</option>
          <option value="UP05">Integral University ,Lucknow</option>
          <option value="UP06">Amity School of Architecture & Planning ,Noida</option>
          <option value="UP07">Amity School of Architecture and Planning ,Lucknow</option>
          <option value="UP08">Sunder Deep College of Architecture ,Ghaziabad</option>
          <option value="UP09">Institute of Architecture and Town Planning ,Jhansi</option>
          <option value="UP10">College of Architecture ,Moradabad</option>
          <option value="UP11">Khandelwal College of Architecture and Design ,Bareilly</option>
          <option value="UP12">Teerthanker Mahaveer College of Architecture ,Moradabad</option>
          <option value="UP13">Institute of Architecture & Town Planning ,Sitapur</option>
          <option value="UP14">Shree Bankey Bihari Institute of Architecture ,Meerut</option>
          <option value="UP15">ITM School of Architecture & Town Planning ,Lucknow</option>
          <option value="UP16">JMS School of Architecture ,Hapur</option>
          <option value="UP17">School of Architecture ,Mathura</option>
          <option value="UP18">School of Architecture & Planning Sharda University ,Greater Noida</option>
          <option value="UP20">College of Architecture Invertis University ,Bareilly</option>
          <option value="UP21">School of Architecture Delhi Technical Campus ,Greater Noida</option>
          <option value="UP22">Shri Ram School of Architecture ,Muzzaffarnagar</option>
          <option value="UP23">R.R.Institute of Modern Technology ,Lucknow</option>
          <option value="UP24">Anand College of Architecture ,Agra</option>
          <option value="UP25">Brahmanand Group of Institutions ,Bulandshahr</option>
          <option value="UP26">Hardayal School of Architecture ,Mathura</option>
          <option value="UP27">Accurate Institute of Architecture & Planning ,Greater Noida</option>
          <option value="UP29">Ideal School of Architecture ,Ghaziabad</option>
          <option value="UP30">Ansal School of Architecture ,Lucknow</option>
          <option value="UP31">Purvanchal Institute of Architecture & Design ,Gorakhpur</option>
          <option value="UP32">Forth Dimension College of Architecture ,Saharanpur</option>
          <option value="UP33">Faculty of Architecture and Town Planning ,Agra</option>
          <option value="UP34">SGIT IMT College of Architecture ,Ghaziabad</option>
          <option value="UP35">School of Architecture and Regional Planning ,Greater Noida</option>
          <option value="UP36">Axis Institute of Architecture (AIA) ,Rooma ,Kanpur</option>
          <option value="UP37">Ishan Institute of Architecture & Planning ,Greater Noida</option>
          <option value="UP38">Monad School of Architecture & Planning ,Pilakhwa ,Hapur</option>
          <option value="UP41">Vivekanand College of Architecture ,Ghaziabad</option>
          <option value="UP42">School of Architecture, Galgotias University ,Greater Noida</option>
          <option value="UP43">School of Architecture Noida International University ,Greater Noida</option>
          <option value="UP44">Department of Architecture Mangalayatan University ,Aligarh</option>
          <option value="WB01">Indian Institute of Engineering Science and Technology ,Shibpu</option>
          <option value="WB02">Indian Institute of Technology , Kharagp</option>
          <option value="WB03">Jadavpur University ,Kolkata</option>
          <option value="WB04">Rani Rashmoni School of Architecture ,Kolkata</option>
          <option value="WB05">Om Dayal School of Architecture ,Kolkata</option>
          <option value="WB06">Techno India University School of Architecture ,Kolkata</option>
          <option value="WB07">Amity School of Architecture and Planning ,Kolkata</option>
        </select>
      </div>
      <div class="col-md-6 pos-second">
        <input type="text" placeholder="Phone Number" class="registration-field" name="member[2][phone]" pattern="[789][0-9]{9}">
      </div>
      <div class="col-md-6">
        <div class='box-student3'></div><span class="student-select">Student</span>
        <div class='box-architect3'></div><span class="architect-select">Architect</span>
        <input name="member[2][type]" type='hidden' value="STUDENT">
        <input name="member[2][qualification]" type='hidden' value="">
      </div>
      <div class="col-md-6 pos-second">
        <div class="architect-only3">
          <p class="year-of-passing">Year Of Passing</p>
          <select class="dropdown-menu architect-only3 registration-field" name="member[2][year_of_passing]">
            <option value="2014">2014</option>
            <option value="2015">2015</option>
          </select>
        </div>
      </div>
    </div>
    <div class="container height-div teacher-mentor">
      <h1 class="title-form-field">Teacher/Mentor</h1>
      <p class="sub-title-field">Details of the Teacher/Mentor who is guiding the Team (if any)</p>
      <div class="col-md-6">
        <input type="text" placeholder="Full Name" class="registration-field" name="member[3][name]">
      </div>
      <div class="col-md-6 pos-second">
        <input type="text" placeholder="Qualification" class="registration-field" name="member[3][qualification]">
      </div>
      <div class="col-md-6">
        <input type="number" placeholder="Phone Number" class="registration-field" name="member[3][phone]" pattern="[789][0-9]{9}">
      </div>
      <div class="col-md-6 pos-second">
        <input type="text" placeholder="Email Address" class="registration-field" name="member[3][email]">
        <input name="member[3][type]" type='hidden' value="MENTOR">
        <input name="member[3][year_of_passing]" type='hidden' value="">
        <input name="member[3][college]" type='hidden' value="">
      </div>
      <div class="col-md-12">
        <div class='box'></div>
        <input name="tnc" type='hidden' value="">
        <span class="tnc-about"> I agree to the <a href="terms.html" target="_blank" class="tnc-agree">Terms and Conditions</a> of the Competition.</span>
      </div>
      <div class="col-md-12">
        <input type="submit" value="Register" class="register-button">
      </div>
    </div>

      </form>
  </div>

  <!-- Footer Page : Contact Details -->
  <div class="container-fluid footer-page">
    <div class="col-md-12 footer-img">
      <img src="assets/img/footer.png" class="img-footer">
      <p class="footer-allrights">&copy; 2016. All Rights Reserved | SqrFactor India Pvt. Ltd</p>
    </div>
  </div>
  
  <!-- jquery and scriptsheets -->
  <script type="text/javascript" src="assets/js/jquery-2.2.0.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/select2.js"></script>
  <script type="text/javascript" src="assets/js/nav.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>
  <script>
      $(document).ready(function(e){
      		
		  
		  function validate_member(i)
		  {
			  var p = parseInt(i);
			  var member_name  =  $('input[name="member['+i+'][name]"]').val();
			  var member_email =  $('input[name="member['+i+'][email]"]').val();
			  var member_phone =  $('input[name="member['+i+'][phone]"]').val();
			  var member_college =  $('select[name="member['+i+'][college]"]').val()
			  if((member_name=="")&&(member_email=="")&&(member_phone=="")&&(member_college==""))
			  {
				$('input[name="member['+i+'][name]"]').removeAttr('required');
				$('input[name="member['+i+'][email]"]').removeAttr('required');
				$('input[name="member['+i+'][phone]"]').removeAttr('required');
				$('select[name="member['+i+'][college]"]').removeAttr('required');
			  }
			  else{
				$('input[name="member['+i+'][name]"]').prop('required',true);
				$('input[name="member['+i+'][email]"]').prop('required',true);
				$('input[name="member['+i+'][phone]"]').prop('required',true);
				$('select[name="member['+i+'][college]"]').prop('required',true);
			  }
		}
		
		function validate_mentor()
		  {
			  var member_name  =  $('input[name="member[3][name]"]').val();
			  var member_email =  $('input[name="member[3][email]"]').val();
			  var member_phone =  $('input[name="member[3][phone]"]').val();
			  var qualification =  $('input[name="member[3][qualification]"]').val();
			  if((member_name=="")&&(member_email=="")&&(member_phone=="")&&(member_college==""))
			  {
				$('input[name="member[3][name]"]').removeAttr('required');
				$('input[name="member[3][email]"]').removeAttr('required');
				$('input[name="member[3][phone]"]').removeAttr('required');
				$('input[name="member[3][qualification]"]').removeAttr('required');
			  }
			  else{
				$('input[name="member[3][name]"]').prop('required',true);
				$('input[name="member[3][email]"]').prop('required',true);
				$('input[name="member[3][phone]"]').prop('required',true);
				$('input[name="member[3][qualification]"]').prop('required',true);
			  }
		}
		  
		  $('input[name="member[1][name]"]').change(function(e){
			  var p = parseInt("1");
			  validate_member(p);
		  });
		  $('input[name="member[1][email]"]').change(function(e){
			  var p = parseInt("1");
			  validate_member(p);
		  });
		  $('select[name="member[1][college]"]').change(function(e){
			  var p = parseInt("1");
			  validate_member(p);
		  });
		  $('input[name="member[1][phone]"]').change(function(e){
			  var p = parseInt("1");
			  validate_member(p);
		  });
		  
		  $('input[name="member[2][name]"]').change(function(e){
			  var p = parseInt("2");
			  validate_member(p);
		  });
		  $('input[name="member[2][email]"]').change(function(e){
			  var p = parseInt("2");
			  validate_member(p);
		  });
		  $('select[name="member[2][college]"]').change(function(e){
			  var p = parseInt("2");
			  validate_member(p);
		  });
		  $('input[name="member[2][phone]"]').change(function(e){
			  var p = parseInt("2");
			  validate_member(p);
		  });
		  
		  $('input[name="member[3][name]"]').change(function(e){
			  validate_mentor();
		  });
		  $('input[name="member[3][email]"]').change(function(e){
			  validate_mentor();
		  });
		  $('input[name="member[3][qualification]"]').change(function(e){
			  validate_mentor();
		  });
		  $('input[name="member[3][phone]"]').change(function(e){
			  validate_mentor();
		  });
		  
		  $('input[name="member[3][phone]"]').change(function(e){
			  validate_mentor();
		  });
		  
		  $('form').submit(function(e){
			  //e.preventDefault();
			  var tnc = $('input[name="tnc"]').val();
	      			if(tnc=="")
	      			{
	      				alert("Please Agree to the Terms and Conditions to proceed!");
	      				return false;
	      			}
			 
			  //alert("Registration starts from 30th Jan'16");
		  
		  });
		  
		  $('.box').click(function(e){
		  	var tnc = $('input[name="tnc"]').val();
		  	if(tnc=="")
		  	{
		  		$('input[name="tnc"]').val('true');
		  	}
		  	else{
		  		$('input[name="tnc"]').val('');
		  	}
		  });
	  $('.box-student1').addClass("add-tick");
          $('.box-student2').addClass("add-tick");
          $('.box-student3').addClass("add-tick");
      })
      // $(".apply-button").click(function(){
      //   $("#number").text("1650");
      //   $("#ref-msg").show();
      // })
  </script>
</body>
</html>
<!--Developed By: Huzaifa Pitolwala -->
<?php
}
?>
