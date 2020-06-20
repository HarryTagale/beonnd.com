<!DOCTYPE html>
<html>
<head>
  <title></title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="../css/style.css">
 <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>
<body>

  <!-- Timer start-->
<nav class="justify " >
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

 <!-- Timer ends-->
<nav class="navbar navbar-expand-lg navbar-dark  fixed-top ">
      <div class="container text-uppercase p-2">
        
  <a class="navbar-brand font-weight-bold text-white" href="index.php"><img src="../images/logo_haryana_govt.png" ></a>
 <div>
          <ul class="list-unstyled mb-0">
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
      <div class="dropdown" >
      <button class="dropbtn"  > <img  src="../images/apple-touch-icon-72x72-precomposed.png"></button>
  <div class="dropdown-content">
    
    <a class="nav-link" href="index.php"><i class="fa-2x fa fa-home"></i>Home <span class="sr-only">(current)</span></a>
      
        <a class="nav-link" href="directory.php"><i class="  fa fa-book"></i>Directory</a>
        <a class="nav-link" href="#pricingdiv"><i class=" fa fa-newspaper-o"></i>NEWS FEEDS</a>
        <a class="nav-link" href="#newsletterid"><i class=" fa fa-user"></i>about us</a>
        <a class="nav-link" href="#contactid"><i class=" fa fa-laptop"></i>contact us</a>
        <a class="nav-link" href="team.php"><i class=" fa fa-user"></i>Employee</a>
        <a class="nav-link" href="institute.php"><i class="fa fa-university"></i>Institution</a>
      </div>
  </div>
  </div>
</nav>
<div class="header" id="topheader"> 
<section class="header-section">
   <div class="centerimg"><a href="https://hrscert.kidyaan.com/" target="_blank"><img src="../images/kidgyan1.png" ></a></div>
<div class="centerimg1"><a href="#"><img src="../images/indian-flag2.png" ></a></div>
<h2 class="display-6"style="font-family:Palatino Linotype;">Welcome</h2>
    <h5 style="font-family:Palatino Linotype;">Block Education Office Narnaund </h5>
  <div class="center-div">

    <h1 class="font-weight-bold"></h1>
    <p>"We Don't See Things As they Are"</p>
    <div class="header-buttons">

      <a  class="fa-3x fa fa-" aria-hidden="true" href="#newsletterid">Help Desk</a>
      <a  class="fa-3x fa fa-" aria-hidden="true" href="http://www.haryanaedusat.com/entertainment.php" target="_blank">E-Learning</a>


  </div>
  </div>
</section>

   <!--*************our  Directory Start*********--> 
    <section>
      
      <div class="col-lg-12 col-md-12 col-10 offset-1 offset-lg-0">
        <h3 style="text-align: center; font-weight: bold;background-color: #093163 !important; color: white;">Block Education Administrator <br></h3>
            <div class="entry-content">
              <table class="table table-bordered " style=" margin-left:auto;margin-right:auto;"  >
       <tbody>
              <tr bgcolor="#d7f5ae">
                    <td><strong>Sr.No</strong></td>
                     <td><strong>Name</strong></td>
                     <td><strong>Designation</strong></td>
                     <td><strong>Mob.No.</strong></td>
                     <td><strong>Email-Id</strong></td>
              </tr>
              <tr bgcolor="#d7f5ae">
                <td><strong>1</strong></td>
                     <td><b>Sh.Amandeep Singh</b></td>
                     <td><strong>Block Education officer</strong></td>
                     <td><strong>01663-297315</strong></td>
                     <td><strong><a href="#"> beonndhisar&#160;@gmail.com</a></strong></td>
              </tr>
              <tr bgcolor="#d7f5ae">
                <td><strong>2</strong></td>
                     <td><b>Vacant</b></td>
                     <td><strong>Block Resource Coordinator</strong></td>
                     <td><strong>01663-297315</strong></td>
                     <td><strong><a href="#">beeocumbrcnarnaund&#160;@gmail.com</a></strong></td>
              </tr>
       </tbody>
</table>
<h3 style="text-align: center; font-weight: bold;background-color: #093163 !important; color: white;">Block Education Administarion Branch <br></h3>
<table class="table table-bordered">
       <tbody style="color:black;">
              <tr bgcolor="#d7f5ae">
                     <td valign="top"><strong>Sr. No.</strong></td>
                     <td valign="top"><strong>Branch</strong></td>
                     <td valign="top"><strong>Name</strong></td>
                     <td valign="top"><strong>Designation</strong></td>
                     <td valign="top"><strong>Extension &amp;</strong><br>
                            <strong>Landline No.</strong></td>
                            <td valign="top"><strong>Email-</strong><strong>ID</strong></td>
                     </tr>
                       <tr>
                            <td valign="top">01.</td>
                            <td valign="top">Accounts<br>Accounts</td>
                            <td valign="top">Sh.Sunil Kumar</td>
                            <td valign="top">Clerk</td>
                            <td valign="top">8295357900</td>
                            <td valign="top"><a href="#"> beonndhisar@gmail.com&#160;</a><br></td>
                           
                     </tr>
                            <tr>
                            <td valign="top">02.</td>
                            <td valign="top">RTI<br>Establishment</td>
                            <td valign="top">Sh.Budh Ram</td>
                            <td valign="top">Clerk</td>
                            <td valign="top">9896573311</td>
                            <td valign="top"><a href="#"> beonndhisar@gmail.com&#160;</a><br></td>
                     </tr>
                     
                            <tr>
                            <td valign="top">03.</td>
                            <td valign="top">MDM</td>
                            <td valign="top">Sh.Mahender singh</td>
                            <td valign="top">Clerk</td>
                            <td valign="top">8295545800</td>
                            
                            <td valign="top"><a href="#" >beonndhisar@gmail.com&#160;</a><br></td>
                     </tr>
                            
                   </tbody>
                 </table>
 
<h3 style="text-align: center; font-weight: bold;background-color: #093163 !important; color: white;">Block Resource Cordinator Administarion Branch <br></h3>
<table class="table table-bordered">
       <tbody style="color:black;">
              <tr bgcolor="#d7f5ae">
                     <td valign="top"><strong>Sr. No.</strong></td>
                     <td valign="top"><strong>Branch</strong></td>
                     <td valign="top"><strong>Name</strong></td>
                     <td valign="top"><strong>Designation</strong></td>
                     <td valign="top"><strong>Extension &amp;</strong><br>
                            <strong>Landline No.</strong></td>
                            <td valign="top"><strong>Email-</strong><strong>ID</strong></td>
                     </tr>
                     <tr>
                            <td valign="top">01.</td>
                            <td valign="top">Accounts<br></td>
                            <td valign="top">Sh.Mukesh Kumar</td>
                            <td valign="top">Accounts Assistant</td>
                            <td valign="top"></td>
                            <td valign="top"><a href="#">beeocubbrcnarnaund@gmail.com&#160;</a><br></td>
                           
                     </tr>
                            <tr>
                            <td valign="top">02.</td>
                            <td valign="top">Civil <br></td>
                            <td valign="top">Sh.Madan Lal</td>
                            <td valign="top"> Junior Engineer</td>
                            <td valign="top"></td>
                            <td valign="top"><a href="#">beeocubbrcnarnaund@gmail.com&#160;</a><br></td>
                     </tr>
                     
                            <tr>
                            <td valign="top">03.</td>
                            <td valign="top">Academic-1 </td>
                            <td valign="top">Sh. Sunil Kumar<br>Sh. Sunil Siwach<br> Miss Pooja</td>
                            <td valign="top">BRP-Hindi<br>BRP-SS<br>BRP-Mathematics<br></td>
                            <td valign="top"></td>
                            
                            <td valign="top"><a href="#"> beeocubbrcnarnaund@gmail.com&#160;</a><br></td>
                     </tr>
                            <tr>
                            <td valign="top">04.</td>
                            <td valign="top">IT-Cell</td>
                            <td valign="top">Smt. Sonia<br>Sh.Surender Singh</td>
                            <td valign="top"> MIS-Coordinator<br> D.E.O_cum_ Clerk</td>
                            <td valign="top"></td>
                            <td valign="top"><a href="#">beeocubbrcnarnaund@gmail.com&#160;</a></td>
                     </tr>
                            
                   </tbody>
                 </table>
<h3 style="text-align: center; font-weight: bold;background-color: #093163 !important; color: white;"> Cluster Resource Center Administration Branch <br></h3>
<table class="table table-bordered">
       <tbody style="color:black;">
              <tr bgcolor="#d7f5ae">
                     <td valign="top"><strong>Sr. No.</strong></td>
                     <td valign="top"><strong>CRC</strong></td>
                     <td valign="top"><strong>Name</strong></td>
                     <td valign="top"><strong>Designation</strong></td>
                     <td valign="top"><strong>Extension &amp;</strong><br>
                            <strong>Landline No.</strong></td>
                            <td valign="top"><strong>Email-</strong><strong>ID</strong></td>
                           </tr>
                                                                           
                    <tr>
                            <td valign="top">01.</td>
                            <td valign="top">GSSS Narnaund</td>
                            <td valign="top"></td>
                            <td valign="top"></td>
                            <td valign="top"></td>
                            <td valign="top"></a><br></td>
                           </tr>
                     <tr>
                            <td valign="top">02.</td>
                            <td valign="top">GGSSS Kheri jalab<br></td>
                            <td valign="top">Smt. Vandana</td>
                            <td valign="top">PGT-Chemistry</td>
                            <td valign="top">9996328077</td>
                            <td valign="top"><a href="#">ggssskj@gmail.com&#160;</a><br></td>
                     </tr>
                            <tr>
                            <td valign="top">03.</td>
                            <td valign="top">GSSS kapro</td>
                            <td valign="top"></td>
                            <td valign="top"></td>
                            <td valign="top"></td>
                            <td valign="top"><a href="#">principal.gsss.kapro@gmail.com&#160;</a></td>
                     </tr>
                            <tr>
                            <td valign="top">04.</td>
                            <td valign="top">GSSS Petwar</td>
                            <td valign="top">Sh. sunil Kumar</td>
                            <td valign="top">PGT-History</td>
                            <td valign="top"><p>9996328077</p></td>
                            <td valign="top"><a href="#">gssspetwar@gmail.com&#160;</span></a></td>
                     </tr>
                           <tr>
                            <td valign="top">05.</td>
                            <td valign="top">GSSS Koth Kalan&nbsp;</td>
                            <td valign="top">Sh. Rajesh Kumar</td>
                            <td valign="top">PGT-Geography<br></td>
                            <td valign="top">9996609600</td>
                            <td valign="top"><a href="#"> gssskothkalan86@gmail.comemail&#160;</a></td>
                     </tr>
                            <tr>
                            <td valign="top">06.</td>
                            <td valign="top">GSSS Mirchpur&nbsp;</td>
                            <td valign="top">Sh. Anil Kumar</td>
                            <td valign="top"><br></td>
                            <td valign="top">8295444688</td>
                            <td valign="top"><a href="#" >gsssmirchpurnnd@gmail.com&#160;</a></td>
                     </tr>
                            <tr>
                            <td valign="top">07.</td>
                            <td valign="top">GSSS Pali&nbsp;</td>
                            <td valign="top"></td>
                            <td valign="top"><br></td>
                            <td valign="top"></td>
                            <td valign="top"><a href="#" >principalgssspali@yahoo.com&#160;</a></td>
                     </tr>
                            <tr>
                            <td valign="top">08.</td>
                            <td valign="top">GSSS Lohari Ragho&nbsp;</td>
                            <td valign="top"></td>
                            <td valign="top"><br></td>
                            <td valign="top"></td>
                            <td valign="top"><a href="#">gssslohariragho1458@gmail.com&#160;</a></td>
                     </tr>
                            <tr>
                            <td valign="top">09</td>
                            <td valign="top">GSSS Bhaini Amirpur &nbsp;</td>
                            <td valign="top">Sh. Balraj </td>
                            <td valign="top">Principal<br></td>
                            <td valign="top">9416076317</td>
                            <td valign="top"><a href="#" >bhainigsss@gmail.com&#160;</a></td>
                            <tr>
                            <td valign="top">10</td>
                            <td valign="top">GSSS Rakhi shahpur</td>
                            <td valign="top">Smt. Jyoti Goyal</td>
                            <td valign="top">Lect. Pol science</td>
                            <td valign="top">80059563977</td>
                            <td valign="top"><a href="#"> gsssrakhishahpur1470@gmail.com&#160;</a><br></td>
                            </tr>
                     </tr>
                   </tbody>
                 </table>
              </div>
            </div>
    </section>  



<!--*************our Directory End*********-->


<!--*************footer Start*********-->
<footer class="footersection" id="footerdiv">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 col-12 footer-div">
        <div class=" logo">
        <h3 class="text-center"> कार्यालय खंड शिक्षा अधिकारी,नारनौन्द |</h3>
        <!--<img src="../images/logo3.png"class="rounded-circle z-depth-1">-->
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
          <li><a href="index.php">Aims and Objectives</a></li>
          <li><a href="index.php">News Feed</a></li>
          <li><a href="index.php">About us</a></li>
          <li><a href="team.php">Employees</a></li>
          <li><a href="directory.php" >Directory</a></li>
        </div>
        
      </div>
      <div class="col-lg-4 col-md-12 col-12 footer-div  ">
      <a href="https://hrscert.kidyaan.com/" target="_blank"><img src="../images/kidgyan1.png"></a>
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
            any Technical Query: <b>&nbsp;&nbsp;itcell.beonnd@gmail.com</b> &nbsp;&nbsp; | &nbsp;&nbsp; Visitor No:
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

</body>
</html>
