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
      
        <a class="nav-link" href="directory.php"><i class=" fa-1x fa fa-book"></i>Directory</a>
        <a class="nav-link" href="#pricingdiv"><i class="fa-1x fa fa-newspaper-o"></i>NEWS</a>
        <a class="nav-link" href="#newsletterid"><i class="fa-1x fa fa-user"></i>about us</a>
        <a class="nav-link" href="#contactid"><i class="fa-1x fa fa-laptop"></i>contact us</a>
        <a class="nav-link" href="team.php"><i class="fa-1x fa fa-user"></i>Employee</a>
        <a class="nav-link" href="institute.php"><i class="fa fa-university"></i>Institution</a>
      </div>
  </div>
  </div>
</nav>
<div class="header" id="topheader"> 
<section class="header-section">
<div class="centerimg"><a href="https://hrscert.kidyaan.com/" target="_blank"><img src="../images/kidgyan1.png" ></a></div>
<div class="centerimg1"><a href="#"><img src="../images/indian-flag2.png" ></a></div>
<div class="text-center">
    <h2 class="display-6"style="font-family:Palatino Linotype;">Welcome</h2>
    <h5 style="">Block Education Office Narnaund </h5>
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


<!--*************our institute  starts*********-->
<section >
  <div >
 <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-botam">  
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        G3S
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#section41">Link 1</a>
        <a class="dropdown-item" href="#section42">Link 2</a>
        <a class="dropdown-item" href="#section41">Link 1</a>
        <a class="dropdown-item" href="#section42">Link 2</a>
        <a class="dropdown-item" href="#section41">Link 1</a>
        <a class="dropdown-item" href="#section42">Link 2</a>
        <a class="dropdown-item" href="#section41">Link 1</a>
        <a class="dropdown-item" href="#section42">Link 2</a>
      </div>
    </li>
     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        GMS
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#section41">Link 1</a>
        <a class="dropdown-item" href="#section42">Link 2</a>
        <a class="dropdown-item" href="#section41">Link 1</a>
        <a class="dropdown-item" href="#section42">Link 2</a>
        <a class="dropdown-item" href="#section41">Link 1</a>
        <a class="dropdown-item" href="#section42">Link 2</a>
        <a class="dropdown-item" href="#section41">Link 1</a>
        <a class="dropdown-item" href="#section42">Link 2</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        GHS
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#section41">GHS NARA</a>
        <a class="dropdown-item" href="#section42">GHS KHERI JALAB</a>
        <a class="dropdown-item" href="#section42">GHS BUDANA</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
       GPS
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#section41">Link 1</a>
        <a class="dropdown-item" href="#section42">Link 2</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        MODEL
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#section41">AMSSS</a>
        <a class="dropdown-item" href="#section42">KGBV</a>
      </div>
    </li>
  </ul>
</nav>

<div id="section1" class="container-fluid bg-success" style="padding-top:70px;padding-bottom:70px">
 <style>
* {
  box-sizing: border-box;
}

body {
  background-color: #f1f1f1;
  padding: 20px;
  font-family: Arial;
}

/* Center website */
.main {
  max-width: 1000px;
  margin: auto;
}

h1 {
  font-size: 50px;
  word-break: break-all;
}

.row {
  margin: 8px -16px;
}

/* Add padding BETWEEN each column */
.row,
.row > .column {
  padding: 8px;
}

/* Create four equal columns that floats next to each other */
.column {
  float: left;
  width: 25%;
}

/* Clear floats after rows */ 
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Content */
.content {
  background-color: white;
  padding: 10px;
}

/* Responsive layout - makes a two column-layout instead of four columns */
@media screen and (max-width: 900px) {
  .column {
    width: 50%;
  }
}

/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
  }
}
</style>
</head>
<body>

<!-- MAIN (Center website) -->
<div class="main">

<h1 style="font-family:courier; text-align: center; ">EDUCATIONAL INSTITUTES</h1>
<hr>
 
<h2 style="font-family:courier; text-align: center; ">PORTFOLIO</h2>


<!-- Portfolio Gallery Grid -->
<div class="row">
  <div class="column">
    <div class="content">
      <img src="../images/institute/E2.jpg" alt="Mountains" style="width:100%">
      <h3 >Govt. Sr.Sec.School</h3>
      <p  >Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="../images/institute/E2.jpg" alt="Lights" style="width:100%">
      <h3 >Govt High School</h3>
      <p  >Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="../images/institute/E2.jpg" alt="Nature" style="width:100%">
      <h3 >Govt Middle School</h3>
      <p >Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="../images/institute/E6.jpeg" alt="Nature" style="width:100%">
      <h3 >Govt Primary School</h3>
      <p >Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
  <div class="column">
    <div class="content">
    <img src="../images/institute/E6.jpeg" alt="Mountains" style="width:100%">
      <h3>KGBV Madha</h3>
      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
    </div>
  </div>
<!-- END GRID -->
</div>

<div class="content">
  <img src="../images/institute/E6.jpeg" alt="Bear" style="width:100%">
  <h3>AMSSS Kheri Lochab</h3>
  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
</div>

<!-- END MAIN -->
</div>
</div>

</div>

</section>

<!--*************our institute  End*********-->



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
       <!-- <div class="d-flex justify-content-center form-button">
               <button type="submit" class="btn btn-primary"><a href="calculator.php" target="_blank">calculator</a></button>
               </div>-->
        </div>

        <div class="col-lg-4 col-md-6 col-12 footer-div text-center">
        <div>
          <h3>Navigation links</h3>
          <li><a href="index.php">Home</a></li>
          <li><a href="#">Aims and Objectives</a></li>
          <li><a href="#">News Feed</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Employees</a></li>
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

</body>
</html>
