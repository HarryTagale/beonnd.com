<!DOCTYPE html>
<html lang="en-in" dir="ltr">
<head >
  <title>BEONND - Official Home Page</title>
</title><meta http-equiv="cache-control" content="no-cache" /><link href="css/Style.css" rel="stylesheet" type="text/css" /><link rel="shortcut icon" href="images/HaryanaLogo.ico" type="image/x-icon" sizes="16x16" /></head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="css/style.css">
 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"
  />
</head>
<body>
  

      
  <!-- Timer start-->
<nav class="justify "  >
            <div class="top-nav">
               <div class="nav navbar-fixed-top" id="topp" style="background-color: rgba(241, 83, 4, 0.88); color: white">
                  <div class="col-lg-3 col-md-4 col-sm-12">
                     <i class="fa fa-clock-o" style="padding-right: : 10px; padding-top: 15px"></i>
                     <script type="text/javascript">
                        // <![CDATA[
                        var d = new Date()
                        var weekday = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday")
                        var monthname = new Array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec")
                        document.write(weekday[d.getDay()] + ", ")
                        document.write(d.getDate() + " ")
                        document.write(monthname[d.getMonth()] + ", ")
                        document.write(d.getFullYear())
                        // ]]>
                     </script>

                     <span id="clockDisplay" style="padding-top: 5px"></span>
                     <script type="text/javascript">
                        // <![CDATA[
                        function renderTime() {
                            var currentTime = new Date();
                            var diem = "AM";
                            var h = currentTime.getHours();
                            var m = currentTime.getMinutes();
                            var s = currentTime.getSeconds();
                            setTimeout('renderTime()', 1000);
                            if (h == 0) {
                                h = 12;
                            } else if (h > 12) {
                                h = h - 12;
                                diem = "PM";
                            }
                            if (h < 10) {
                                h = "0" + h;
                            }
                            if (m < 10) {
                                m = "0" + m;
                            }
                            if (s < 10) {
                                s = "0" + s;
                            }
                            var myClock = document.getElementById('clockDisplay');
                            myClock.textContent = h + ":" + m + ":" + s + " " + diem;
                            myClock.innerText = h + ":" + m + ":" + s + " " + diem;
                        }
                        renderTime();
                        // ]]>

                     </script>

                   </div>
                   </div>
                 </div>
                </div>
               </nav>

 <!--Timer ends-->
<nav class="navbar navbar-expand-lg navbar-dark  fixed-top ">
      <div class="container text-uppercase p-2">
        
  <a class="navbar-brand font-weight-bold text-white" href="#"><img src="images/logo_haryana_govt.png" ></a>
 <div >
          <ul class="list-unstyled mb-0">
        
        <a href="#" class="p-2 fa-lg fb-ic">
          <i  class="fa fa-facebook-f blue-text "> </i>
        </a>
        
        <a href="#" class="p-2 fa-lg tw-ic">
          <i class="fa fa-twitter blue-text"> </i>
        </a>
        
        <a href="#" class="p-2 fa-lg ins-ic">
          <i class="fa fa-instagram blue-text"> </i>
        </a>
        
        <a href="#" class="p-2 fa-lg ins-ic">
          <i class="fa fa-youtube blue-text"> </i>
        </a>
        
        <a href="#" class="p-2 fa-lg ins-ic">
          <i class="fa fa-whatsapp blue-text"> </i>
        </a>
      </ul>
      
      <div class="dropdown" >
        
      <button class="dropbtn"  > <img  src="images/apple-touch-icon-72x72-precomposed.png"></button>
  <div class="dropdown-content">
    
    <a class="nav-link" href="index.php"><i class="fa-2x fa fa-home"></i>Home <span class="sr-only">(current)</span></a>
      
        <a class="nav-link" href="directory.php"><i class="fa fa-book"></i>Directory</a>
        <a class="nav-link" href="#pricingdiv"><i class="fa fa-newspaper-o"></i>NEWS FEEDS</a>
        <a class="nav-link" href="#newsletterid"><i class="fa fa-user"></i>about us</a>
        <a class="nav-link" href="#contactid"><i class="fa fa-laptop"></i>contact us</a>
        <a class="nav-link" href="team.php"><i class="fa fa-user"></i>Employee</a>
        <a class="nav-link" href="institute.php"><i class="fa fa-university"></i>Institution</a>
        
      </div>
  </div>
  
</div>
</nav>


<div class="header" id="topheader"> 
<section class="header-section">
<div class="centerimg"><a href="https://hrscert.kidyaan.com/" target="_blank"><img src="images/kidgyan1.png" ></a></div>

<div class="centerimg1" ><a href="#"><img class=" animate__animated   animate__pulse animate__infinite" src="images/indian-flag2.png" ></a></div>
<div class="text-center">
      <h2 class=" animate__animated   animate__pulse animate__infinite display-6"style="font-family:Palatino Linotype;">Welcome</h2>
    <h3 class=" animate__animated   animate__backInUp  delay-05s display-6"style="font-family:Palatino Linotype; ">Block Education Office Narnaund </h3>
</div>
  <div class="center-div">
    <h1 class="font-weight-bold"></h1>
    <p>"We Don't See Things As they Are"</p>

    <div class="header-buttons">

      <a  class="fa-3x fa fa-" aria-hidden="true" href="#newsletterid">Help Desk</a>
      <a  class="fa-3x fa fa-" aria-hidden="true" href="http://www.haryanaedusat.com/entertainment.php" target="_blank">E-Learning</a>
  </div>
  </div>
</section>
</div>
<section>
  <div class="bg_1">
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                     <div>
                        <br />
                        <div class="about_Div1" id="image">
                           <div style="padding: 0.01em 24px;">
                      <div class="row">
                         <div class="col-lg-3 col-md-3 col-sm-3" id="CM">
                           <div class="row">
                             <div class="col-lg-6" style="width:40%">
                             <img src="images/cm.jpg" alt="Chief Minister" class="rounded-circle z-depth-1"alt="profilePic" />
                            </div>
                            <div class="col-lg-6" style="text-align:left;width:50%">
                               <span style="font-size: 12px; font-weight: 700;">Shri Manohar Lal Khattar,<br>
                               Hon'ble Chief Minister,<br>
                               Haryana
                                </span>
                               </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3" id="EM">
                           <div class="row">
                             <div class="col-lg-6" style="width:45%">
                             <img src="Images/em.jpg" alt="EM, Haryana"
                                          class="rounded-circle z-depth-1"alt="profilePic" />
                            </div>
                            <div style="text-align:left;">
                               <span style="font-size: 12px; font-weight: 700;">Shri Kanwar Pal Gujjar,<br>
                               Hon'ble Education Minister,<br>
                               Haryana
                                </span>
                               </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3" id="ACS">
                           <div class="row">
                             <div class="col-lg-6" style="width:45%">
                             <img src="Images/acs.jpg" alt="ACS, Secondary Education,<br>
                               Haryana"
                                          class="rounded-circle z-depth-1"alt="profilePic" />
                            </div>
                            <div style="text-align:left;">
                               <span style="font-size: 12px; font-weight: 700;">Dr. Mahavir Singh, IAS<br>
                               PSSE Secondary Education,<br>
                               Haryana
                                </span>
                               </div>
                           </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-3" id="DSE">
                           <div class="row">
                             <div class="col-lg-6" style="width:45%">
                             <img src="Images/J-Ganesan-ias.jpg" alt="DSE, Haryana"
                              class="rounded-circle z-depth-1"alt="profilePic" />
                            </div>
                            <div style="text-align:left;">
                               <span style="font-size: 12px; font-weight: 700;">J. Ganesan, IAS,<br>
                               Director, <br> Secondary Education ,<br>
                               Haryana
                                </span>
                               </div>
                           </div>
                        </div>
                        
                        
                            </div>
                           </div>
                        </div>
                      </div>
                </div>
              </div>
          </div>
         </div>
    <p class="text-center"> ___________________________________________________________________________________________________________________________________________________________</p>
</section>
       <marquee>
         <a href="http://www.nhmharyana.gov.in/page.aspx?id=208"
         target="_blank" style="color:red"><strong>Updates on Corona Virus</strong></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </marquee>
  
  <!-- *********Header  Parts End*********-->
<section class="serviceoffers" id="servicedive">
      <div class="container headings text-center">
      <div class="row">
      <div class="col-lg-6 col-md-12 col-10 offset-1 offset-lg-0">
      <div class="name my-3">

     <img src="images/am.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
    <h2 class="text-center font-weight-bold">BEO' DESK</h2>
     <p class="text-center justify-content-around">
    आइये, अपने विद्यालयों में ऐसा संस्कार समक्ष परिवेश बनाये जहाँ बालक बालिकाएं रूपी नन्ही कोंपलें अधिक से अधिक पोषित, पल्लवित व पुष्पित हों ताकि समूचा, समाज रूपी उद्यान इनके सौरभ से महक उठे। आगामी परीक्षाओं के लिए सभी विद्यार्थियों को हार्दिक शुभकामनाएं।.
   </p>
   <h6 class="text-right font-weight-bold">श्री अमनदीप सिंह (BEO) </h6>
    </div>
    </div>
<div class="col-lg-6 col-md-12 col-12 servicedive">
<!--  video frame.....-->
<iframe allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="" frameborder="0" height="210" src="https://www.youtube.com/embed/ZWxxxM5aPvI" width="100%"></iframe>
  </div>
  </div>
  </div>
</section>
  <!--*************thre Extra div starts*********-->
<section class="header-extradiv" >
  <div class="container">
    <div class="row">
      <div class="extra-div col-lg-4 col-md-4 col-12">
      <a href="http://hryedumis.gov.in/"target="_blank"><i class="fa-4x fa fa-home" aria-hidden="true" ></i></a>
      <h2> Saksham Haryana Portal</h2>
      <p> Management Information System, Academic Monitoring System a
Assessment Test Portal & Dashboard - at one common platform using a single login </p>
      </div>
      <div class="extra-div col-lg-4 col-md-4 col-12">
      <a href="http://www.hrtreasuries.gov.in/" target="_blank"><i class="fa-4x fa fa-rupee" aria-hidden="true" ></i></a>
      <h2> Treasury Haryana </h2>
      <p>Treasuries & Accounts Department (Finance Department), is the mechanism through which effective financial control is exercised over public spending by Government Departments in the State.  </p>
      </div>
      <div class=" extra-div col-lg-4 col-md-4 col-12">
      <a href="http://hrmshry.nic.in/" target="_blank"><i class="fa-4x fa fa-user" aria-hidden="true" ></i></a>
      <h2> HRMS</h2>
      <p>Human resource management system  is a generic and integrated workflow based system. This system has been implemented across all the govt departments of Haryana.</p>
      </div>
      <div class="extra-div col-lg-4 col-md-4 col-12">
      <a href="https://bseh.org.in/" target="_blank"><i  class="fa-4x fa fa-home" aria-hidden="true" ></i> </a>
      <h2> HBSE</h2>
      <p>To effectively contribute to the Quality, Equity, Relevance and Access of school Education </p>
      </div>
      <div class="extra-div col-lg-4 col-md-4 col-12">
      <a href="http://udiseplus.gov.in/" target="_blank"><i class="fa-4x fa fa-home" aria-hidden="true" ></i></a>
      <h2>UDISE+</h2>
      <p>UDISE+ (UDISE plus) is an updated and improved version of UDISE. The entire system will be online and will gradually move towards collecting data in real time. Data from 2018-19 will be collected through this software. </p>
      </div>
      <div class=" extra-div col-lg-4 col-md-4 col-12">
      <a href="http://scertharyana.gov.in/" target="_blank"><i class="fa-4x fa fa-university" aria-hidden="true" ></i></a>
      <h2> SCERT Haryana Gurgaon</h2>
      <p> It was established in April 1979. It was the conglomeration of State Institute of Education and State Institute of Science, to provide new dimensions to school Education.  </p>
      </div>
    </div>
  </div>
  
</section>

  <!--*************thre Extra div ENDS*********-->


<!--*************project  done start*********-->
<section class="project-work" >
  <div class="container headings text-center">
    <h6 class="text-center font-weight-bold text-black" >These Are Just A Few  Educational institute in Our Educational Block, There Are Plenty More</h6>
  </div>
  <div class="container d-flex justify-content-around align-items-center text-center">
    <div>
      <h1 class="count">21</h1>
      <a  href="institute.php" class="btn btn-info"  data-toggle="popover-hover" data-img="images/institute/E7.jpeg" >Govt.Senior Secondary School</a>
    </div>
    <div>
      <h1 class="count"> 3</h1>
      <a href="institute.php" class="btn btn-info" data-toggle="popover-hover" data-img="images/institute/E7.jpeg">Govt.High School</a>
      
    </div>
    <div>
      <h1 class="count">14</h1>
     <a href="institute.php" class="btn btn-info" data-toggle="popover-hover" data-img="images/institute/E7.jpeg">Govt.Middle School</a>
    </div>
    <div>
      <h1 class="count">40</h1>
     <a href="institute.php" class="btn btn-info" data-toggle="popover-hover" data-img="images/institute/E7.jpeg"> Govt.Primary School</a>
    </div>

    <div>
      <h1 class="count">1</h1>
      <a href="institute.php" class="btn btn-info" data-toggle="popover-hover" data-img="images/institute/E7.jpeg">Aarohi Model School </a>
    </div>
    <div>
      <h1 class="count">1</h1>
      <a style="text-align: center;" href="institute.php" class="btn btn-info" data-toggle="popover-hover" data-img="images/institute/about.jpg">KGBV </a>
    </div>
    
  </div>
</section>


<!--*************project done ends*********-->

<!--*************our pricing start*********-->
<section class="pricing" id="pricingdiv">
  <div class="container headings text-center">
    <h1 class="text-center font-weight-bold text-white">NEWS FEEDS</h1> 
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="card text-center">
  <div class="card-header">ONLINE APPS</div>
  <div class="card-body">
    <li><span class="money"></span></li>
    <a href="http://134a-hr.in/" target="_blank"><li>Admission under 134-A</li></a>
    <a href="http://117.239.178.88/amsweb"target="_blank"><li>Academic Monitoring</li></a>
    <a href="http://www.schooleducationharyana.gov.in/Online-Applications/Teachers-Transfer-Policy" target="_blank"><li>Teachers Transfer Policy</li></a>
    <a href="http://14.192.19.188/RE/" target="_blank"><li>ERTS Portal</li></a>
    <a href="http://14.192.19.188/PrivateSchoolPortal" target="_blank"><li>Private School Portal</li></a>
    <a href="http://14.192.19.188/Sugam/" target="_blank"><li>Sugam Sampark Portal</li></a>
    <a href="http://hryedumis.gov.in/statistics-and-reports" target="_blank"><li>Data Portal</li></a>
    <a href="http://www.schooleducationharyana.gov.in/Online-Applications/MIS-Training-Material" target="_blank"><li>MIS Training Material</li></a>
      
        </div>
         <div class="card-footer">
          <a href="http://www.schooleducationharyana.gov.in/" target="_blank">DSE Haryana</a>
         </div>
        </div>
     </div>
     <div class="col-lg-4 col-12 card-second">
        <div class="card text-center">
  <div class="card-header">TEACHERS</div>
  <div class="card-body">
    <li><span class="money"></span></li>
 <a href="http://www.schooleducationharyana.gov.in/Teachers/" target="_blank"><li>Daily-Orders</li></a>
<a href="http://www.schooleducationharyana.gov.in/Teachers/List-of-Schools" target="_blank"><li>List of Schools</li></a>
<a href="http://www.schooleducationharyana.gov.in/Teachers/Government-Orders" target="_blank"><li>Government Orders</li></a>
<a href="http://www.schooleducationharyana.gov.in/Teachers/Important-Orders-Lists" target="_blank"><li>Important Orders & Links</li></a>
<a href="http://www.schooleducationharyana.gov.in/Teachers/APARs-other-Proformas" target="_blank"><li>APARs & other Proformas</li></a>
<a href="http://www.schooleducationharyana.gov.in/Teachers/List-of-Funds-to-Schools" target="_blank"><li>Daily Orders Archives</li></a>
<a href="http://www.schooleducationharyana.gov.in/QUICK-LINKS/AEBAS" target="_blank"><li>AEBAS</li></a>
<a href="http://www.schooleducationharyana.gov.in/Parents-Public/Delegation-of-Powers" target="_blank"><li>Delegation Of Powers</li></a>
      </div>
         <div class="card-footer">
          <a href="https://mhrd.gov.in/" target="_blank"> MHRD</a>
         </div>
       </div>
     </div>
     <div class="col-lg-4 col-12">
        <div class="card text-center">
  <div class="card-header">What's<img alt="" style="width: 70px; height: 40px" src="images/new-gif-image.gif" /></div>
  <div class="card-body">
    <li><span class="money"></span></li>
    <marquee direction="up" scrolldelay="0" scrollamount="3" height="250px" onmouseover="this.stop();"
                            onmouseout="this.start();">

     <a href="images/new-gif-image.gif" target="_blank"><li><img alt="" style="width: 70px; height: 20px" src="images/new-gif-image.gif" />Admission</li></a>
    <a href="images/new-gif-image.gif" target="_blank"><li><img alt="" style="width: 70px; height: 20px" src="images/new-gif-image.gif" />Admission</li></a>
    <a href="images/new-gif-image.gif" target="_blank"><li><img alt="" style="width: 70px; height: 20px" src="images/new-gif-image.gif" />Admission</li></a>
    <a href="images/new-gif-image.gif" target="_blank"><li><img alt="" style="width: 70px; height: 20px" src="images/new-gif-image.gif" />Admission</li></a>
    <a href="images/new-gif-image.gif" target="_blank"><li><img alt="" style="width: 70px; height: 20px" src="images/new-gif-image.gif" />Admission</li></a>
    <a href="images/new-gif-image.gif" target="_blank"><li><img alt="" style="width: 70px; height: 20px" src="images/new-gif-image.gif" />Admission</li></a>
    <a href="images/new-gif-image.gif" target="_blank"><li><img alt="" style="width: 70px; height: 20px" src="images/new-gif-image.gif" />Admission</li></a>
    <a href="images/new-gif-image.gif" target="_blank"><li><img alt="" style="width: 70px; height: 20px" src="images/new-gif-image.gif" />Admission</li></a>
    <a href="images/new-gif-image.gif" target="_blank"><li><img alt="" style="width: 70px; height: 20px" src="images/new-gif-image.gif" />Admission</li></a>
    <a href="images/new-gif-image.gif" target="_blank"><li><img alt="" style="width: 70px; height: 20px" src="images/new-gif-image.gif" />Admission</li></a>
    
        </marquee>
        </div>
         <div class="card-footer">
          <a href="http://www.hsspp.in/" target="_blank">HSSPP</a>
         </div>
        </div>
          </div>
        </div>
    </div>
  </div>
</section>

<!--*************our pricing ends*********-->

<!--*************our CUSTOMER FEEDBACK START*********-->

<section class="happyclients"  >
  <div class="container headings text-center">
    <h1 class="text-center font-weight-bold ">Events and Activities</h1>  
    <p class="text-capitalize pt-1">What People Are Saying About Us
Don't Just Take It From Us, Let Our Clients Do The Talking!</p>
  </div>
  <div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
     <li data-target="#demo" data-slide-to="3"></li>
      <li data-target="#demo" data-slide-to="4"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner container">
    <div class="carousel-item active">
<div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc3.jpeg" class="img-fluidi img-thumbnail"></a>
      <h1></h1>
      <p class="m-4">"लॉकडाउन मे घर से कार्य करते हुये <br>श्री अमनदीप सिंह बीईओ-नारनौन्द  " </p>
      <h1></h1>
      <h2></h2>
    </div>
    
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc8.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">" विज्ञान प्रदर्शनी मे छात्र -छात्राओं ने दिखाई प्रतिभा <br>"श्री अमनदीप सिंह बीईओ-नारनौन्द " </p>
      <h1></h1>
      <h2>
      </h2>
    </div>
    
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc10.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">"नकल रहित परीक्षा करवाना हैं उद्देश्य <br>" एसडीएम विकास यादव  " </p>
      <h1></h1>
      <h2></h2>
    </div>
    
  </div>
</div>
  </div>
    <div class="carousel-item">
      <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc4.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">"आरोही स्कूल खेड़ी चौपटा मे 5 दिवसीय प्रशिक्षण कैंप शुरू " </p>
      <h1></h1>
      <h2></h2>
    </div>
    
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc5.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">"आरोही स्कूल खेड़ी चौपटा मे 5 दिवसीय प्रशिक्षण कैंप शुरू " </p>
      <h1></h1>
      <h2></h2>
    </div>
      </div>
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc6.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">" प्रशिक्षण कैंप मे निष्ठा ट्रेनिंग की जानकारी सांझा करते हुये अधिकारी" </p>
      <h1></h1>
      <h2>
      </h2>
    </div>
  </div>

</div>
    </div>
    <div class="carousel-item">
      <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc2.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">"सरकारी स्कूलों ने शुरू की ऑनलाइन पढ़ाई  " <br>"श्री अमनदीप सिंह बीईओ-नारनौन्द "</p>
      <h1></h1>
      <h2></h2>
    </div>
    
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc1.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">"सरकारी स्कूलों ने शुरू की ऑनलाइन पढ़ाई <br>"श्री अमनदीप सिंह बीईओ-नारनौन्द " </p>
      <h1></h1>
      <h2></h2>
    </div>
      </div>
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc6.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">" प्रशिक्षण कैंप मे निष्ठा ट्रेनिंग की जानकारी सांझा करते हुये अधिकारी" </p>
      <h1></h1>
      <h2>
      </h2>
    </div>
  </div>

</div>
    </div>
    <div class="carousel-item">
      <div class="row">
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc4.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">"आरोही स्कूल खेड़ी चौपटा मे 5 दिवसीय प्रशिक्षण कैंप शुरू " </p>
      <h1></h1>
      <h2></h2>
    </div>
    
  </div>
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc5.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">"आरोही स्कूल खेड़ी चौपटा मे 5 दिवसीय प्रशिक्षण कैंप शुरू " </p>
      <h1></h1>
      <h2></h2>
    </div>
      </div>
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc6.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">" प्रशिक्षण कैंप मे निष्ठा ट्रेनिंग की जानकारी सांझा करते हुये अधिकारी" </p>
      <h1></h1>
      <h2>
      </h2>
    </div>
  </div>

</div>
    </div>
    <div class="carousel-item">
      <div class="row">
   <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc7.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">"लॉकडाउन मे सरकारी स्कूलों ने शुरू की ऑनलाइन पढ़ाई " </p>
      <h1></h1>
      <h2></h2>
      </div>
      </div>
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc7.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">"लॉकडाउन मे सरकारी स्कूलों ने शुरू की ऑनलाइन पढ़ाई " </p>
      <h1></h1>
      <h2></h2>
    </div>
      </div>
  <div class="col-lg-4 col-md-4 col-12">
    <div class="box">
      <a href="#"><img src="images/media/loc7.jpeg" class="img-fluidi img-thumbnail"></a>
      <p class="m-4">"लॉकडाउन मे सरकारी स्कूलों ने शुरू की ऑनलाइन पढ़ाई " </p>
      <h1></h1>
      <h2></h2>
    </div>
      </div>

    </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
</section>


<!--*************our CUSTOMER FEEDBACK ends*********-->
<!--*************contact us start *********-->
<section class="contactus"  id="contactid">
  <div class="container headings text-center">
    <h1 class="text-center font-weight-bold ">Contact Us</h1> 
    <p class="text-capitalize pt-1">We are here to Help and Answer any Question you might have. We look forward to hearing from you 😐</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-10 offset-lg-2 offset-md-2 offset-1">

        <form action="userdata.php" method="post">
  <div class="form-group">
    <input type="text" class="form-control" name ="user" required autocomplete="off" placeholder="Enter your Name">
  </div>

  <div class="form-group">
    <input type="email" class="form-control" name="email" required autocomplete="off" placeholder="Enter Email">
  </div>

  <div class="form-group">
    <input type="text" class="form-control" name="mobile" required autocomplete="off" placeholder="Enter Mobile Number">
  </div>

<div class="form-group">
  
  <textarea class="form-control" rows="4" name="comments"  required autocomplete="off" placeholder="Enter your Message"></textarea>
   </div>

<div class="d-flex justify-content-center form-button">
  

    <button type="submit" class="btn btn-primary">Submit</button>
             </form>
      </div>
          </div>
      
    </div>
    
  </div>
</section>


<!--*************contact us  ends*********-->

 
<!-- Scheme -->
   <section class="Scheme"  id="Schemeid">
    <div class="container-fluid schemeWrap">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6 wow fadeInLeft delay-05s">
          <div class="scheme"><div class="region region-scheme-content">
  <div id="block-block-152" class="block block-block" role="contentinfo">

      
  <div class="content">
    <h3 class="schemeHead">
Schemes</h3>
<p class="schemeCont">
Rashtriya Ucchatar Shiksha Abhiyan | National Research Professorship | Pandit Madan Mohan Malaviya National Mission on Teachers And Teaching</p>
<div>
<a class="moreSchm" href="https://mhrd.gov.in/schemes" target="_blank" title="More Schemes">More Schemes</a></div>
  </div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
</div>
        </div>
        <div class="col-md-6 col-sm-6 wow fadeInUp delay-02s">
          <div class="region region-scheme-logo">
  <div id="block-block-153" class="block block-block" role="contentinfo">

      <div class="schm">
  <div class="column">
   <a href="http://rusa.nic.in/" target="_blank" title="Rashtriya Ucchatar Shiksha Abhiyan"><img alt="Rashtriya Ucchatar Shiksha Abhiyan" height="73" src="images/rusa_schm.jpg" width="160" /><br />
    Rashtriya Ucchatar Shiksha Abhiyan</a></li>
  </div>
  <div class="column">
    <a href="http://mdm.nic.in/" target="_blank" title="Mid Day Meal"><img alt="Mid Day Meal" height="73" src="images/mdm_schm.jpg" width="160" /><br />
    Mid Day Meal</a></li>
  </div>
  <div class="column">
    <a href="http://samagra.mhrd.gov.in" target="_blank" title="Samagra Shiksha"><img alt="Samagra Shiksha" height="73" src="images/samagra.jpg" width="160" /><br />
    Samagra Shiksha</a></li>
  </div>
</div>
  
</div> <!-- /.block -->
</div>
 <!-- /.region -->
</div>
      </div>
    </div>
  </div>
</section>




<!--*************footer Start*********-->
<footer class="footersection" id="footerdiv">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12 footer-div">
        <div class=" logo">
        <h3 class="text-center"> कार्यालय खंड शिक्षा अधिकारी,नारनौन्द |</h3>
        <!--<img src="images/logo3.png"class="rounded-circle z-depth-1">-->
         <p class="text-center"> Department Of Secondary Education <br>Government Of Haryana</p>
          <p class="text-center">Email us @ beonndhisar@gmail.com<br><i class="fa fa-phone blue-text"> </i> +911663233044</p>
           <div class="text-center">
            
          <ul class="list-unstyled mb-0">
            <a class="text-white">follow us</a>
        <!-- Facebook -->
        <a href="#" class="p-2 fa-lg fb-ic">
          <i class="fa fa-facebook-f blue-text"> </i>
        </a>
        <!-- Twitter -->
        <a href="#" class="p-2 fa-lg tw-ic">
          <i class="fa fa-twitter blue-text"> </i>
        </a>
        <!-- Instagram -->
        <a href="#" class="p-2 fa-lg ins-ic">
          <i class="fa fa-instagram blue-text"> </i>
        </a>
        <!-- You Tube -->
        <a href="#" class="p-2 fa-lg ins-ic">
          <i class="fa fa-youtube blue-text"> </i>
        </a>
        <!-- Whatsapp -->
        <a href="#" class="p-2 fa-lg ins-ic">
          <i class="fa fa-whatsapp blue-text"> </i>
        </a>
      </ul>
      </div>

        </div>
       
        </div>

        <div class="col-lg-4 col-md-6 col-12 footer-div text-center">
        <div>
          <h3>Navigation links</h3>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Aims and Objectives</a></li>
          <li><a href="#">News Feed</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="team.php" >Employees</a></li>
          <li><a href="directory.php" >Directory</a></li>
        </div>
        
      </div>
      <div class="col-lg-4 col-md-12 col-12 footer-div  ">
      <a href="https://hrscert.kidyaan.com/" target="_blank"><img src="images/kidgyan1.png"></a>
        <div>
                    <h3>News Letter</h3>
          <p></p>
          <div class="container newsletter-main" id="newsletterid">
    <div class="row">
      <div class="col-lg-12 col-12">
        <div class="input-group mb-3">
    <input type="text" class="form-control news-input" placeholder="Your Email">
    <div class="input-group-append">
      <span class="input-group-text">Subscribe</span>
      
          </div>
           </div>
      </div>
      </div>
    </div>
    </div>
        
    </div>
    </div>

    <div class="mt-4 text-center">

      <p>&copy; Copyright 2020, All Rights Reserved BEONND, Designed & Developed By Er.Harikesh Tagale(Asst.Manager-MIS) For
            any Technical Query: <b>&nbsp;&nbsp;itcell_beonnd@gmail.com</b> &nbsp;&nbsp; | &nbsp;&nbsp; Visitor No:
            &nbsp;
            <img src="http://hitwebcounter.com/counter/counter.php?page=6967020&style=0030&nbdigits=7&type=ip&initCount=0"
                title="BEONND" alt="BEONND" height="12" border="0"></p>
      <div class="scrollTop float-right">
        <i class=" fa fa-arrow-up" onclick="topFunction()" id="mybtn"></i>
      </div>
    </div>
  </div>

</footer>



<!--*************footer  ends*********-->



 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha256-jDnOKIOq2KNsQZTcBTEnsp76FnfMEttF6AV2DF2fFNE=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js" integrity="sha256-JtQPj/3xub8oapVMaIijPNoM0DHoAtgh/gwFYuN5rik=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


<script>
  $('.count').counterUp({
                delay: 10,
                time: 2000
            });

//get the button:
 var mybutton=document.getElementByid("mybtn");
//when the user scrolls down 20px from top of the  document, show the button 
window.onscroll=function(){scrollFunction()};
function scrollFunction(){
  if (document.body.scrollTop>20|| document.documentElement.scrollTop>20) {
    mybutton.style.display ="block";
  }
  else{
    mybutton.style.display = "none";
}
 }
//when user clicks on the button, scroll to the top of the document
function topFunction(){
  document.body.scrolltop=0;
  document.documentElement.scrollTop=0;
}
</script>

<!--popover Script-->
<script>
  // popovers initialization - on hover
$('[data-toggle="popover-hover"]').popover({
  html: true,
  trigger: 'hover',
  placement: 'bottom',
  content: function () { return '<img src="' + $(this).data('img') + '" />'; }
});

// popovers initialization - on click
$('[data-toggle="popover-click"]').popover({
  html: true,
  trigger: 'click',
  placement: 'bottom',
  content: function () { return '<img src="' + $(this).data('img') + '" />'; }
});
//$(document).ready(function(){
 // $('[data-toggle="popover"]').popover();   
//});
</script>

</body>
</html>
