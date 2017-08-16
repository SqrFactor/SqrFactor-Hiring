$(document).ready(function(){

// Select2 Main
  $('.select').select2({
    placeholder: "Name of College",
    allowClear: true
  })

// Tick T&C

  var clickcount = 0
  $('.box').click(function(){
    if (clickcount == 0) {
      $('.box').addClass("add-tick");
      clickcount--;
    } else {
      $('.box').removeClass("add-tick");
      clickcount++;
    }
  })

// Select Between Architect and Student
  // Hide architect Default
  $('.architect-only1').hide();
  $('.architect-only2').hide();
  $('.architect-only3').hide();
  $('.box-student1').addClass("add-tick");
  $('.box-student2').addClass("add-tick");
  $('.box-student3').addClass("add-tick");
  // case 1 Student
  $('.box-student1').click(function(){
    var obj = $(this).parent().find('input');
    obj.val("STUDENT");
    $('.box-architect1').removeClass("add-tick");
    $('.box-student1').addClass("add-tick");
    $('.architect-only1').hide();
  });
  // case 2 Architect
  $('.box-architect1').click(function(){
    var obj = $(this).parent().find('input');
    obj.val("ARCHITECT");
    $('.box-student1').removeClass("add-tick");
    $('.box-architect1').addClass("add-tick");
    $('.architect-only1').show();
  });

  $('.box-student2').click(function(){
    var obj = $(this).parent().find('input');
    obj.val("STUDENT");
    $('.box-architect2').removeClass("add-tick");
    $('.box-student2').addClass("add-tick");
    $('.architect-only2').hide();
  });
  // case 2 Architect
  $('.box-architect2').click(function(){
    var obj = $(this).parent().find('input');
    obj.val("ARCHITECT");
    $('.box-student2').removeClass("add-tick");
    $('.box-architect2').addClass("add-tick");
    $('.architect-only2').show();
  });

  $('.box-student3').click(function(){
    var obj = $(this).parent().find('input');
    obj.val("STUDENT");
    $('.box-architect3').removeClass("add-tick");
    $('.box-student3').addClass("add-tick");
    $('.architect-only3').hide();
  });
  // case 2 Architect
  $('.box-architect3').click(function(){
    var obj = $(this).parent().find('input');
    obj.val("ARCHITECT");
    $('.box-student3').removeClass("add-tick");
    $('.box-architect3').addClass("add-tick");
    $('.architect-only3').show();
  });

// List of Colleges

//   var colleges = [
    
  // // Andhra Pradesh
    
  //   'College of Engineering,Visakhapatnam - AP02',
  //   'S.A.R. College of Architecture,Krishna District - AP05',
  //   'ANU College of Architecture & Planning,Guntur - AP08',
  //   'Gandhi Institute of Technology and Management,Visakhapatnam - AP11',
  //   'Varaha College of Architecture & Planning,Visakhapatnam - AP14',
  //   'School of Planning and Architecture, Vijayawada - AP18',
  //   'M.R.K.College of Architecture,Veeravasara Mandalam - AP19',
  //   'Maestro School of Planning and Architecture,Vijayawada - AP20',
  //   'K.L.E.F.University,Guntur - AP21',
  //   'Vaishnavi School of Architecture and Planning ,Vijayawada - AP22',

  // // Arunachal Pradesh
    
  //   'Indira Gandhi Technological and Medical Sciences University, Ziro - AR01',
  //   'School of Planning, Architecture & Design, Apex Professional University, Pasighat - AR02',

  // // Assam

  //   'Guwahati College of Architecture, Guwahati - AS01',
  //   'Royal School of Architecture, Guwahati - AS02',

  // // Bihar
    
  //   'National Institute of Technology, Patna - BR01',
  //   'Birla Institute of Technology, Patna - BR03',

  // // Chattisgarh
    
  //   'National Institute of Technology, Raipur - CG01',
  //   'Dignity College of Architecture, Durg - CG03',
  //   'Amity School of Architecture and Planning, Raipur - CG08',
  
  // // Chandigarh
    
  //  'Chandigarh College of Architecture, Chandigarh - CH01',

  // // Delhi
    
  //   'School of Planning & Architecture, New Delhi - DL01',
  //   'Vastu Kala Academy, New Delhi - DL03',
  //   'Jamia Millia Islamia, New Delhi -DL04', 
  //   'University School of Architecture & Planning, Delhi - DL06',
  //   'MBS School of Planning and Architecture, New Delhi - DL07',
  //   'K.R.Mangalam School of Architecture & Planning, New Delhi - DL08',
  //   'Indira Gandhi Delhi Technical University for Women, Delhi - DL09',

  // // Goa
    
  //   'Goa College of Architecture, Panaji - GA01',

  // // Gujarat
        
  //   'M.S. University of Baroda, Vadodara - GJ01',
  //   'Centre for Environmental Planning & Technology University (CEPT University), Ahmedabad -GJ02',
  //   'D.C. Patel School of Architecture, Vidhyanagar - GJ03',
  //   'Sarvajanik College of Engineering & Technology, Surat - GJ04',
  //   'Sardar Vallabhai Patel Institute of Technology, Anand District -GJ05',
  //   'Vyavasay Vidya Pratishthan\'s Indubhai Parekh School of Architecture, Rajkot - GJ06 ',
  //   'SOA Vadodara Design Academy, Vadodara - GJ07 ',
  //   'Institute of Architecture Hemchandracharya North Gujarat University, Patan - GJ08',
  //   'Shri Gijubhai Chhaganbhai Patel Institute of Architecture, Interior Design and Fine Arts, Surat - GJ09',
  //   'Grow More School of Architecture, Sabarkantha District - GJ10',
  //   'Anant Institute of Architecture, Ahmedabad - GJ11',
  //   'School of Design and Architecture Navrachana University, Vadodara - GJ12',
  //   'Parul Institute of Architecture and Research, Vadodara - GJ13',
  //   'ITM School of Architecture Art and Design, Vadodara District - GJ14',
  //   'Shantaben Manubhai Patel School of Studies and Research in Architecture and Interior Design, Anand District - GJ15',
  //   'Institute of Design, Environment & Architecture Indus University, Gandhinagar - GJ16',
  //   'Bhagwan Mahavir College of Architecture, Surat - GJ17',
  //   'L.J. School of Architecture, Ahmedabad - GJ18',
  //   'Raman Bhakta School of Architecture, Surat District - GJ19',
  //   'Institute of Architecture Nirma University, Ahmedabad - GJ20',
  //   'Laxmi Institute of Architecture, Valsad - GJ21',
  //   'Kalol Institute of Architecture & Design, Gandhinagar District - GJ22',
  //   'Venus Institute of Design & Architecture, Gandhinagar - GJ23',
  //   'Sal School of Architecture, Ahmedabad - GJ24', 
  //   'Institute of Architecture Ganpat University, Kherva Mehsana - GJ25',
  //   'VJKM Institute of Architecture and Design, Mehsana District - GJ26',
  //   'Vidyamandir College of Architecture for Women, Surat District - GJ27',
  //   'Marwadi Education Foundation’s Group of Institutions, Faculty of Architecture, Rajkot - GJ28',

  // // Himachal Pradesh
    
  //   'National Institute of Technology, Hamirpur - HP01',
  //   'IEC School of Architecture, Solan District - HP03',
  //   'Maharaja Agrasen School of Architecture & Design, Solan District - HP04',
  //   'APG School of Architecture, Shimla - HP05',
  
  // // Haryana
    
  //   'Sushant School of Art & Architecture, Gurgaon - HR01',
  //   'Deenbandhu Chhotu Ram University of Science & Technology, Murthal - HR02',
  //   'Gateway College of Architecture & Design, Sonepat - HR03',
  //   'Sat Priya School of Architecture and Design, Rohtak - HR04',
  //   'Budha College of Architecture, Karnal District - HR05',
  //   'R.P. Educational Trust Group of Institutions, Karnal - HR06',
  //   'ICL Institute of Architecture and Town Planning, Ambala District - HR07',
  //   'Lingaya’s University’s School of Architecture, Faridabad - HR08',
  //   'Om Institute of Architecture & Design, Hisar - HR09',
  //   'Savera College of Architecture, Gurgaon - HR10',
  //   'Ganga Institute of Architecture & Town Planning, Jhajjar District - HR11',
  //   'Maharishi Markandeshwar University, Ambala - HR12',
  //   'Amity School of Architecture & Planning, Gurgaon District - HR13',
  //   'Hindu School of Architecture, Sonepat- HR14',
  //   'State Institute of Urban Planning & Architecture, Rohtak - HR15',
  //   'South Point School of Architecture, Sonipat - HR16',
  //   'CCLS College of Architecture & Design, Rohtak - HR17',
  //   'P.M.College of Architecture, Sonepat - HR18',
  //   'Rabindranath Tagore Institute of Architecture & Design, Faridabad - HR19',
  //   'Narendra College of Architecture, Ballabhgarh - HR20',
  //   'K.R.Mangalam University, Gurgaon - HR21',
  //   'Bhagwan Mahaveer School of Architecture, SOnepat - HR22',
  //   'P.D.M. School of Architecture & Town Planning, Jhajjar District - HR23',
  //   'South Point College of Architecture , Sonepat - HR24',
  //   'Delhi Institute of Architecture & Planning, Faridabad - HR26',
  //   'Manav Rachna International University, Faridabad - HR27',
  //   'Jagan Nath University, Jhajjar - HR28',
  //   'Al-Falah School of Architecture & Design, Faridabad - HR29',

  // // Jharkhand

  //   'Faculty of Architecture Birla Institute of Technology ,Ranchi - JH01',
  //   'Awadh College of Architecture ,Jamshedpur - JH02',

  // // Jammu & Kashmir

  //   'School of Architecture & Landscape Design',

  // // Karnataka

  //   'Visvesvaraya College of Engineering Bangalore University ,Bangalore - KA01',
  //   'Manipal School of Architecture & Planning ,Manipal - KA02',
  //   'BMS College of Engineering ,Bangalore - KA03',
  //   'KLE Technological University ,Hubli - KA05',
  //   'Poojya Doddappa Appa College of Engineering ,Gulbarga - KA06',
  //   'Dayananda Sagar College of Engineering ,Bangalore - KA07',
  //   'Dr. P. G. Halakatti College of Engineering & Technology ,Bijapur - KA08',
  //   'Malik Sandal Institute of Art & Architecture ,Bijapur - KA09',
  //   'MS Ramaiah Institute of Technology ,Bangalore - KA11',
  //   'R.V. College of Architecture (RVCA) ,Bangalore - KA12',
  //   'Siddaganga Institute of Technology Campus ,Tumkur - KA13',
  //   'Gogte Institute of Technology ,Belgaum - KA14',
  //   'The University School of Design ,Mysore - KA15',
  //   'Acharya’s NRV School of Architecture ,Bangalore - KA16',
  //   'BMS School of Architecture ,Bangalore - KA17',
  //   'Aakar Academy of Architecture ,Bangalore - KA18',
  //   'The Oxford School of Architecture ,Bangalore - KA19',
  //   'Srinivas Institute of Technology ,Mangalore - KA21',
  //   'Dayananda Sagar Academy of Technology and Management ,Bangalore - KA22',
  //   'SJB School of Architecture & Planning ,Bangalore - KA24',
  //   'IMPACT School of Architecture ,Bangalore - KA25',
  //   'Best School of Architecture ,Tumkur - KA26',
  //   'Gopalan School of Architecture and Planning ,Bangalore - KA27',
  //   'R.R.School of Architecture ,Bangalore - KA28',
  //   'Mysore School of Architecture ,Mysore - KA29',
  //   'BGS School of Architecture and Planning ,Bangalore - KA30',
  //   'Bearys Enviro-Architecture Design School ,Mangalore - KA31',
  //   'Nitte Institute of Architecture ,Mangalore - KA32',
  //   'K.S.School of Architecture ,Bangalore - KA33',
  //   'Wadiyar Centre For Architecture ,Mysuru - KA34',
  //   'Aditya Academy of Architecture & Design ,Bangalore - KA35',
  //   'School of Architecture, Reva University ,Bangalore - KA36',
  //   'CMR University ,Bangalore - KA37',
  //   'HMS Institute of Technology ,Tumkur - KA38',

  // // Kerela
    
  //   'College of Engineering, Trivandrum - KL01',
  //   'TKM College of Engineering, Kollam - KL02',
  //   'MES College of Engineering, Malappuram District - KL03',
  //   'National Institute of Technology, Calicut - KL04',
  //   'Government Engineering College, Thrissur - KL05',
  //   'Devaki Amma’s Guruvayurappan College of Architecture, Malappuram District - KL07',
  //   'Bishop Jerome School of Architecture & Design, Kollam - KL08',
  //   'Rajiv Gandhi Institute of Technology, Kottayam - KL09',
  //   'Holy Crescent College of Architecture,Alwaye - KL10',
  //   'TKM School of Architecture, Kollam - KL11',
  //   'College of Architecture, Tivandrum - KL12',
  //   'IES College of Architecture, Thrissur - KL14',
  //   'Al Salama Institute of Architecture, Malappuram District - KL15',
  //   'Sneha College of Architecture, Palakkad District - KL16',
  //   'College of Engineering and Technology, Kannur District - KL17',
  //   'Asian School of Architecture and Design, Cochin - KL18',
  //   'Global Institute of Architecture, Palakkad District - KL19',
  //   'KMCT College of Architecture, Calicut District - KL21',
  //   'KMEA College of Architecture, Kochi - KL22',
  //   'School of Architecture Mookambika Technical Campus, Ernakulam District - KL23',
  //   'MES College of Architecture, Calicut - KL24',
  //   'Marian College of Architecture & Planning, Trivandrum - KL26',
  //   'Mangalam School of Architecture and Planning,Kottayam - KL27',
  //   'Nizar Rahim and Mark School of Architecture, Kollam - KL28',
  //   'Eranad Knowledge City College of Architecture, Malappuram District - KL29',
  //   'SCMS School of Architecture, Ernakulam - KL30',
  //   'Vedavyasa College of Architecture, Malappuram District - KL31',
  //   'Thejus College of Architecture, Thrissur - KL32',
  //   'D C School of Architecture and Design, Idukki District - KL34',
  //   'Avani Institute of Design, Calicut - KL35',
  //   'Talent Institute of Architecture (TIBA), Edappal - KL36',
  //   'Nehru College of Architecture, Palakkad - KL37',

  // // Maharashtra
    
  //   'Sir J.J.College of Architecture, Mumbai - MH01',
  //   'L.S.Raheja School of Architecture, Mumbai - MH02',
  //   'Academy of Architecture, Mumbai - MH03',
  //   'Visvesvaraya National Institute of Technology, Nagpur - MH04',
  //   'BKPS College of Architecture, Pune - MH05',
  //   'College of Engineering & Technology, Akola - MH06',
  //   'D.Y.Patil College of Engineering & Technology, Kolhapur - MH07',
  //   'G.S.Mandal\'s Marathwada Institute of Technology, Aurangabad - MH08',
  //   'Shri Prince Shivaji Maratha Boarding House\'s College of Architecture, Kolhapur - MH09',
  //   'Marathwada Mitra Mandal\'s College of Architecture, Pune - MH10',
  //   'Manoharbhai Patel Institute of Engineering & Technology, Gondia - MH11',
  //   'Jawahar Lal Nehru Engineering College, Aurangabad - MH12',
  //   'MVP Samaj\'s College of Architecture, Nasik - MH13',
  //   'Bharati Vidyapeeth\'s College of Architecture, Navi Mumbai - MH14',
  //   'Kamla Raheja Vidyanidhi Institute for Architecture & Environmental Studies, Mumbai - MH15',
  //   'Dr.D.Y.Patil College of Architecture, Navi Mumbai - MH16',
  //   'Pillais College of Architecture, New Panvel - MH17',
  //   'Rizvi College of Architecture, Mumbai - MH18',
  //   'Bharati Vidyapeeth University’s College of Architecture, Pune - MH19',
  //   'Smt.Manoramabai Mundle, College of Architecture, Nagpur - MH20',
  //   'Dr.Bhanuben Nanavati College of Architecture for Women, Pune - MH21',
  //   'Shri Siddeshwar Shikshan Mandal\'s College of Architecture,Solapur - MH23',
  //   'Appasaheb Birnale College of Architecture, Sangli - MH24',
  //   'Kavikulguru Institute of Technology & Science, Nagpur District - MH25',
  //   'Priyadarshini Institute of Architecture & Design Studies, Nagpur - MH26',
  //   'Indian Education Society\'s College of Architecture, Mumbai - MH27',
  //   'Dr.Baliram Hiray College of Architecture, Mumbai - MH28',
  //   'Pravara Rural College of Architecture, Ahmednagar - MH29',
  //   'Padmabhushan Dr.Vasantdada Patil College of Architecture - MH30',
  //   'M.C.E.Society\'s Allana College of Architecture, Pune - MH31',
  //   'Padmashree Dr.D.Y.Patil College of Architecture, Pune - MH32',
  //   'Sinhgad College of Architecture, Pune - MH33',
  //   'Late Shri Bapuraoji Deshmukh Degree College of Architecture, Wardha District - MH34',
  //   'Asmita College of Architecture, Thane - MH39',
  //   'Balwant Sheth School of Architecture, Mumbai - MH42',
  //   'Shrikrishna Educational & Cultural Mandal’s College of Architecture, Jalgaon - MH44',
  //   'Samyak Sankalpa College of Architecture, Thane District - MH45',
  //   'IDEAS-Institute of Design Education & Architecture Studies, Nagpur - MH47',
  //   'Vidya Vardhan’s Institute of Design Environment and Architecture, Nasik - MH48',
  //   'Vidya Pratishthan’s School of Architecture, Pune District - MH49',
  //   'ADA’s Minerva College of Architecture, Pune District - MH50',
  //   'P.R.Patil College of Architecture, Amravati - MH51',
  //   'Radhikatai Pandav Institute of Architecture, Nagpur - MH52',
  //   'VIVA School of Architecture, Virar(E) Palgarh District - MH53',
  //   'Pillai’s HOC College of Architecture, Raigad - MH54',
  //   'Anjuman-I-Islam’s Kalsekar Technical Campus, Navi Mumbai - MH55',
  //   'Dr.DY Patil School of Architecture, Pune - MH56',
  //   'Lokmanya Tilak Institute of Architecture & Design Studies, Navi Mumbai - MH57',
  //   'Tulsiramji Gaikwad-Patil College of Architecture, Nagpur - MH58',
  //   'Oyster College of Architecture, Aurangabad - MH59',
  //   'St.Wilfred’s Institute of Architecture, Raigad District - MH61',
  //   'Aayojan School of Architecture and Design, Pune District - MH62',
  //   'Ojaswini College of Architecture and Design, Jalgaon - MH63',
  //   'Shri Sharada Bhavan Education Society’s Academy of Architecture, Nanded - MH64',
  //   'Patel College of Architecture, Aurangabad - MH65',
  //   'BRICK School of Architecture, Pune District - MH66',
  //   'Aditya College of Architecture, Mumbai - MH67',
  //   'Pravara Rural Education Society’s College of Architecture, Nasik District - MH68',
  //   'Symbiosis School of Planning & Architecture, Pune District - MH69',
  //   'Smt.Premalati Chavan College of Architecture, Satara District - MH70',
  //   'Anantrao Pawar College of Architecture, Pune - MH71',
  //   'IDEAL Institute of Architecture, Thane - MH72',
  //   'Thakur School of Architecture & Planning, Mumbai - MH73',
  //   'S.B.Patil College of Architecture & Design, Pune - MH74',
  //   'D.Y.Patil School of Architecture, Talegaon Pune District - MH75',
  //   'School of Environment and Architecture, Mumbai - MH76',
  //   'C.T.E.S.College of Architecture , Mumbai - MH77',
  //   'Indira College of Architecture and Design, Pune - MH78',
  //   'Trinity College of Architecture, Pune - MH79',
  //   'B. R. Harne College of Architecture, Thane District - MH80',
  //   'Jhulelal Institute of Architecture, Nagpur - MH81',
  //   'Ideal College of Architecture, Kolhapur District - MH82',
  //   'Datta Meghe College of Architecture, Nagpur - MH83',
  //   'Yashoda College of Architecture, Satara - MH84',
  //   'Amity School of Architecture and Planning, Panvel - MH85',
  //   'Smt.Kashibai Navale College of Architecture, Pune - MH86',

  // // Meghalaya
    
  //   'School of Technology, Shillong - ML01',

  // // Madhya Pradesh
    
  //   'Maulana Azad National Institute of Technology, Bhopal - MP01',
  //   'Madhav Institute of Technology & Science, Gwalior - MP02',
  //   'IPS Academy\'s School of Architecture, Indore - MP04',
  //   'SDPS Women’s College, Indore - MP05',
  //   'Hitkarni College of Architecture & Town Planning, Jabalpur - MP06',
  //   'Bagulamukhi College of Architecture, Bhopal - MP07',
  //   'Amity School of Architecture & Planning, Gwalior - MP08',
  //   'School of Architecture & Design ITM University, Gwalior - MP09',
  //   'School of Planning & Architecture, Bhopal - MP10',
  //   'RKDF University, Bhopal - MP11',

  // // Mizoram
    
  //   'Mizoram University, Aizwal - MZ01',

  // // Orrissa
    
  //   'College of Engineering & Technology, Bhubaneswar - OR01',
  //   'Piloo-Mody College of Architecture, Cuttak - OR02',
  //   'School of Architecture and Planning KIIT University, Bhubaneswar - OR03',
  //   'School of Architecture, Planning & Design, Jatni - OR04',
  //   'SGI School of Architecture, Bhubaneswar - OR05',
  //   'National Institute of Technology, Rourkela - OR06',
  //   'Sri Sri University, Cuttak - OR07',

  // // Punjab
    
  //   'Guru Nanak Dev University, Amritsar - PJ01',
  //   'Giani Zail Singh Punjab Technology University, Bhatinda - PJ02',
  //   'Indo Global College of Architecture, Mohali - PJ03',
  //   'Chitkara School of Planning & Architecture, Patiala District - PJ04',
  //   'College of Architecture I.E.T.Bhaddal, Ropar District - PJ05',
  //   'Lovely School of Architecture & Design, Phagwara - PJ06',
  //   'RIMT College of Architecture, Mandi Gobindgarh - PJ07',
  //   'Surya School of Architecture, Patiala District - PJ08',
  //   'Sai School of Architecture, Amritsar - PJ09',
  //   'Sri Sai School of Architecture, Pathankot - PJ10',
  //   'University Institute of Architecture, Mohali - PJ11',
  //   'Punjab Institute of Technology, Mohali - PJ12',
  //   'CT Institute of Architecture and Planning, Jalandhar District - PJ13',
  //   'Shaheed Bhagat Singh State Technical Campus, Ferozepur - PJ14',

  // // Rajasthan
    
  //   'Malviya National Institute of Technology, Jaipur - RJ01',
  //   'M.B.M.Engineering College, Jodhpur - RJ02',
  //   'Aayojan School of Architecture, Jaipur - RJ03',
  //   'Jagannath University, Jaipur - RJ04',
  //   'Amity School of Architecture & Planning, Jaipur - RJ05',
  //   'Buddha Institute of Architecture & Town Planning, Udaipur - RJ06',
  //   'NIMS School of Architecture & Planning, Jaipur - RJ07',
  //   'Apex Group of Institution, Jaipur - RJ09',
  //   'St.Wilfred\'s Institute of Architecture, Ajmer - RJ10',
  //   'School of Architecture and Design Manipal University, Jaipur - RJ12',
  //   'Dr.K.N.Modi University, Tonk District - RJ13',
  //   'School of Planning & Architecture Poornima University, Jaipur - RJ14',
  //   'School of Architecture Central University of Rajasthan, Ajmer District - RJ16',
  //   'College of Architecture & Design, Mody University, Sikar District - RJ18',

  // // Tamil Nadu
    
  //   'School of Architecture & Planning Anna University, Chennai - TN01',
  //   'National Institute of Technology, Tiruchirapalli - TN02',
  //   'Adhiyamaan College of Engineering, Hosur - TN03',
  //   'School of Architecture & Interior Design SRM University, Kancheepuram District - TN05',
  //   'Arulmigu Meenakshi Amman College of Engineering, Tiruvannamalai District - TN06',
  //   'School of Architecture Bharat University, Chennai - TN07',
  //   'Hindustan Institute of Technology and Science, Chennai - TN08',
  //   'Mohammed Sathak Engineering College, Ramanathapuram District - TN09',
  //   'School of Architecture Sathyabama University, Chennai - TN10',
  //   'Thiagarajar College of Engineering, Madurai - TN11',
  //   'Periyar Maniammai University, Thanjavur - TN12',
  //   'MEASI Academy of Architecture, Chennai - TN13',
  //   'Salem School of Architecture, Salem - TN14',
  //   'Tamilnadu School of Architecture, Coimbatore - TN15',
  //   'McGan’s Ooty School of Architecture, Kotagiri - TN16',
  //   'Prahar School of Architecture, Coimbatore - TN17',
  //   'Meenakshi College of Engineering, Chennai - TN18',
  //   'Karpagam University, Coimbatore - TN19',
  //   'R.V.S. School of Architecture, Dindigul - TN20',
  //   'R.V.S. School of Architecture, Coimbatore - TN21',
  //   'EXCEL College of Architecture and Planning, Namakkal District - TN22',
  //   'Ranganathan Architecture College, Coimbatore - TN23',
  //   'Designed Environment Academy & Research Institute, Tiruchirapalli District - TN24',
  //   'SRM Ramapuram School of Architecture, Chennai - TN26',
  //   'SVS School of Architecture, Coimbatore - TN27',
  //   'Crescent School of Architecture, Chennai - TN28',
  //   'Mohamed Sathak A.J. Academy of Architecture, Kancheepuram District - TN29',
  //   'J.K.K.Munirajah School of Architecture, Erode District - TN30',
  //   'M.A.M. School of Architecture, Tiruchirappalli - TN31',
  //   'C.A.R.E. School of Architecture, Trichy - TN32',
  //   'Surya School of Architecture, Vikravandi - TN33',
  //   'MARG Institute of Design and Architecture, Kancheepuram District - TN34',
  //   'Rajalakshmi School of Architecture, Chennai - TN35',
  //   'RVS KVK School of Architecture, Trichy - TN36',
  //   'Aalim Muhammed Salegh Academy of Architecture, Chennai - TN37',
  //   'RVS Padmavathy School of Architecture, Tiruvalluvar District - TN39',
  //   'Prime College of Architecture & Planning, Nagapattinam District - TN40',
  //   'Dr.M.G.R. Educational and Research Institute University, Chennai - TN41',
  //   'Sri Renugambal College of Architecture, Tiruvannamalai District - TN42',
  //   'N.R.School of Architecture, Coimbatore District - TN43',
  //   'Skandha School of Architecture, Namakkal District - TN44',
  //   'DA Vinci School of Design and Architecture, Chennai - TN45',
  //   'Sasi Creative School of Architecture, Coimbatore - TN46',
  //   'St.Peter\’s School of Architecture, Chennai - TN48',
  //   'St.Peter’s College of Engineering and Technology, Chennai - TN49',
  //   'Coimbatore Institute of Engineering and Technology, Coimbatore - TN50',
  //   'Sigma College of Architecture, Kanyakumari District - TN51',
  //   'Cheran School of Architecture, Karur - TN52',
  //   'Kalasalingam School of Architecture, Krishnankoil - TN53',
  //   'Anand School of Architecture, Chennai - TN55',
  //   'Misrimal Navajee Munoth Jain School of Architecture, Chennai - TN56',
  //   'Park Institute of Architecture, Coimbatore - TN58',
  //   'Dhanalakshmi Srinivasan School of Architecture, Perambalur - TN59',
  //   'Dhanalakshmi Srinivasan School of Architecture, Trichy - TN60',
  //   'JK College of Architecture, Dindigul - TN61',
  //   'S.J.S. School of Architecture, Chennai - TN62',
  //   'Capital College of Architecture, Coimbatore - TN64',
  //   'Chennai Academy of Architecture and Design, Chennai - TN66',
  //   'Indira School of Architecture, Tiruvallur - TN68',
  //   'MMES Academy of Architecture, Vellore - TN69',
  //   'Coimbatore Academy of Architecture, Coimbatore - TN70',
  //   'Kongu School of Architecture , Erode District - TN71',
  //   'Aarupadai Veedu Institute of Technology, Chennai - TN72',
  //   'V.P.M.M.College of Architecture for Women, Virudhunagar District - TN73',
  //   'School of Architecture VIT University, Vellore - TN74',
  //   'San Academy of Architecture, Coimbatore - TN75',
  //   'Sri Venkateswara School of Architecture, Thiruvallur - TN76',
  //   'Prime Nest College of Architecture and Planning, Tiruchirappalli - TN77',
  //   'Hindusthan School of Architecture, Coimbatore - TN78',
  //   'Jaya School of Architecture, Chennai - TN79',
  //   'Agni School of Architecture and Design Excellence, Dindigul - TN80',
  //   'Jawahar School of Architecture Planning and Design, Chennai - TN81',
  //   'Nehru School of Architecture, Coimbatore - TN82',
  //   'SVS International College of Architecture, Pudukkottai - TN83',
  //   'Al-Amir College of Architecture, Sivagangai - TN84',
  //   'School of Architecture PRIST University, Tiruchirappalli - TN85',
  //   'Shakthi School of Architecture, Dharapuram - TN86',


  //   // Telengana

  //   'Jawaharlal Nehru Architecture and Fine Arts University ,Hyderabad - TS01',
  //   'CSI Institute of Technology ,Secunderabad - TS02',
  //   'Sri Venkateswara College of Architecture ,Hyderabad - TS03',
  //   'Vaishnavi School of Architecture & Planning ,Hyderabad - TS04',
  //   'Maestro School of Planning and Architecture ,Hyderabad - TS05',
  //   'Deccan School of Planning & Architecture ,Hyderabad - TS06',
  //   'Jawaharlal Nehru Institute of Advanced Studies ,Secunderabad - TS07',
  //   'J.B.R. Architecture College ,Hyderabad - TS08',
  //   'Aurora’s Design Academy, Hyderabad - TS09',
  //   'Aurora’s Design Institute, Hyderabad - TS10',
  //   'Ashoka School of Planning and Architecture ,Malkapur Village - TS11',
  //   'Kasturba Gandhi College of Architecture ,Secunderabad - TS12',

  // // Uttrakhand

  //   'Indian Institute of Technology ,Roorkee - UA01',
  //   'Dehradun Institute of Technology ,Dehradun - UA02',
  //   'Himgiri Zee University ,Dehradun - UA03',
  //   'Graphic Era Hill University ,Dehradun - UA04',
  //   'Droan College of Architecture ,Rudrapur - UA05',

  // // Uttar Pradesh

  //   'Uttar Pradesh Technical University ,Lucknow - UP01',
  //   'Zakir Hussain College of Engineering & Technology ,Aligarh - UP02',
  //   'Apeejay Institute of Technology ,Lucknow - UP03',
  //   'Babu Banarasi Das University ,Lucknow - UP04',
  //   'Integral University ,Lucknow - UP05',
  //   'Amity School of Architecture & Planning ,Noida - UP06',
  //   'Amity School of Architecture and Planning ,Lucknow - UP07',
  //   'Sunder Deep College of Architecture ,Ghaziabad - UP08',
  //   'Institute of Architecture and Town Planning ,Jhansi - UP09',
  //   'College of Architecture ,Moradabad - UP10',
  //   'Khandelwal College of Architecture and Design ,Bareilly - UP11',
  //   'Teerthanker Mahaveer College of Architecture ,Moradabad - UP12',
  //   'Institute of Architecture & Town Planning ,Sitapur - UP13',
  //   'Shree Bankey Bihari Institute of Architecture ,Meerut - UP14',
  //   'ITM School of Architecture & Town Planning ,Lucknow - UP15',
  //   'JMS School of Architecture ,Hapur - UP16',
  //   'School of Architecture ,Mathura - UP17',
  //   'School of Architecture & Planning Sharda University ,Greater Noida - UP18',
  //   'College of Architecture Invertis University ,Bareilly - UP20',
  //   'School of Architecture Delhi Technical Campus ,Greater Noida - UP21',
  //   'Shri Ram School of Architecture ,Muzzaffarnagar - UP22',
  //   'R.R.Institute of Modern Technology ,Lucknow - UP23',
  //   'Anand College of Architecture ,Agra - UP24',
  //   'Brahmanand Group of Institutions ,Bulandshahr - UP25',
  //   'Hardayal School of Architecture ,Mathura - UP26',
  //   'Accurate Institute of Architecture & Planning ,Greater Noida - UP27',
  //   'Ideal School of Architecture ,Ghaziabad - UP29',
  //   'Ansal School of Architecture ,Lucknow - UP30',
  //   'Purvanchal Institute of Architecture & Design ,Gorakhpur - UP31',
  //   'Forth Dimension College of Architecture ,Saharanpur - UP32',
  //   'Faculty of Architecture and Town Planning ,Agra - UP33',
  //   'SGIT IMT College of Architecture ,Ghaziabad - UP34',
  //   'School of Architecture and Regional Planning ,Greater Noida - UP35',
  //   'Axis Institute of Architecture (AIA) ,Rooma ,Kanpur - UP36',
  //   'Ishan Institute of Architecture & Planning ,Greater Noida - UP37',
  //   'Monad School of Architecture & Planning ,Pilakhwa ,Hapur - UP38',
  //   'Vivekanand College of Architecture ,Ghaziabad - UP41',
  //   'School of Architecture, Galgotias University ,Greater Noida - UP42',
  //   'School of Architecture Noida International University ,Greater Noida - UP43',
  //   'Department of Architecture Mangalayatan University ,Aligarh - UP44',

  // // West Bengal

  //   'Indian Institute of Engineering Science and Technology ,Shibpur -WB01',
  //   'Indian Institute of Technology , Kharagpur WB02',
  //   'Jadavpur University ,Kolkata - WB03',
  //   'Rani Rashmoni School of Architecture ,Kolkata - WB04',
  //   'Om Dayal School of Architecture ,Kolkata - WB05',
  //   'Techno India University School of Architecture ,Kolkata - WB06',
  //   'Amity School of Architecture and Planning ,Kolkata - WB07'
//   ];

//   var substringMatcher = function(strs) {
//     return function findMatches(q, cb) {
//       var matches, substringRegex;

//       // an array that will be populated with substring matches
//       matches = [];

//       // regex used to determine if a string contains the substring `q`
//       substrRegex = new RegExp(q, 'i');

//       // iterate through the pool of strings and for any string that
//       // contains the substring `q`, add it to the `matches` array
//       $.each(strs, function(i, str) {
//         if (substrRegex.test(str)) {
//           matches.push(str);
//         }
//       });

//       cb(matches);
//     };
//   };

//   // var n = document.getElementById('list-of-states').val;

//   $('#list-of-colleges .typeahead').typeahead({
//     hint: true,
//     highlight: false,
//     minLength: 1
//   },
//   {
//     name: 'colleges',
//     source: substringMatcher(colleges)
//   });

});