<!DOCTYPE html>
<html>
<title>NMS Philippines</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}

html, body {
  margin: 0;
  height: 100%;
}

.checkedstar {
  color: orange;
}


.responsive-iframe {
  position: absolute;
  top: 0;
  left: 0;
  bottom: 0;
  right: 0;
  width: 10%;
  height: 10%;
  border: none;
}
#betterfuture{
 background-color: red;
}


#redirect {
  position: absolute;
  top: 50px;
  border: 3px solid green;
}

.dropdown {
  float: left;
  overflow: hidden;
}


.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: black;
}

.dropdown-content {
  float: absolute;
  display: none;
  position: absolute;
  background-color: gray;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
/* end dropdown */

.button5 {
  border-radius: 50%;
   background-color: #ff6666; 
   display: inline-block;
  font-size: 1px; 
  text-align: center;
  text-decoration: none;
}
/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 10px;
  height: 300px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
input.largerCheckbox {
            width: 20px;
            height: 20px;
        }
        #example1 {
  border: 2px solid green;
  padding: 10px;
  border-bottom-left-radius: 25px;
}
/*   -----------------------------------------------------check button--------------------------------------------------------    */

/*   -----------------------------------------------------imag--------------------------------------------------------    */
#imagecontainer {
  position: relative;
  width: 50%;
  max-height: 200px;
}

.prodimg {
  border-radius: 50%;
  display: block;
  width: 50%;
  max-height: 200px;
}

#overlay {
  border-radius: 50%;
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background-color: red;
  overflow: hidden;
  width: 50%;
  height: 100%;
  -webkit-transform: scale(0);
  -ms-transform: scale(0);
  transform: scale(0);
  -webkit-transition: .3s ease;
  transition: .3s ease;
}

#imagecontainer:hover #overlay {
  -webkit-transform: scale(1);
  -ms-transform: scale(1);
  transform: scale(1);
}

#text {
  color: white;
  font-size: 20px;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  text-align: center;
}
/*---------------------------------- image ----------------------------------------------*/
/*---------------------------------- button in image   ----------------------------------------------*/

.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

/* ________________________ INIDE THE MODAL image gallery_________________ */
.mySlides {display: none}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}


@media only screen and (max-width: 300px) {
  .prev, .next,.textslide {font-size: 11px}
}
.trapezoid {
	border-bottom: 50px solid #555;
	border-left: 25px solid transparent;
	border-right: 25px solid transparent;
	height: 0;
	width: 125px;
}
.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("/w3images/coffeehouse.jpg");
  min-height: 75%;
}

.services {
  display: none;
}


#bottonnav {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
  text-align:center;
}

.bottonnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.bottonnav a:hover {
  background: #f1f1f1;
  color: black;
}

.bottonnav a.active {
  background-color: #04AA6D;
  color: white;
}
#a {
  width: 150px;
  height: 100px;
  background-color: red;
  -ms-transform: skewY(20deg); /* IE 9 */
  transform: skewY(20deg);
}
div.fixed {
  position: fixed;
  bottom: 0;
  right: 0;
  width: 50px;
  border: 3px solid #8B0000;
}
div.fixed1 {
  position: fixed;
  bottom: 0;
  left: 0;
  width: 50px;
  border: 3px solid #8B0000;
}

</style>

<body onload="startTime()" >
<div class="fixed w3-black" onclick="homehome2()">
<p class="w3-center button "><i>Next</i></p>
</div>
<div class="fixed1 w3-black" onclick="homehome2()">
<p class="w3-center button"><i>Next</i></p>
</div>
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->

<div class="w3-content" style="max-width:1600px">

<div class="w3-top ">
  <div class="w3-bar w3-black w3-text-white w3-wide w3-padding w3-card">
  <img  href="#home" class=" w3-button" width="15%" src="/images/nmslogo.png">
  <i class="w3-bar-item  w3-right"  id="clock"></i> 
    <!-- Float links to the right. Hide them on small screens -->
    
  </div>
 <header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">

</header>
</div>



<!--sub Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image " src="/images/forrestone.jpg"  width="1500" height="300">
  
  <div class="w3-display-middle w3-margin-top w3-center">
  <div class="w3-right w3-hide-small " >  
      <b>
    
      <div class="dropdown ">
              <button  onclick="abouthome()" class="dropbtn">About 
              </button>
              <div class="dropdown-content">
                <a href="#">saan 1</a>
                <a href="#">saan 2</a>
                <a href="#">saan 3</a>
              </div>
          </div>
          <div class="dropdown ">
              <button onclick="serviceshome()" class="dropbtn">Services 
       
              </button>
              <div class="dropdown-content">
                <a href="#">saan 1</a>
                <a href="#">saan 2</a>
                <a href="#">saan 3</a>
              </div>
          </div>
          
      <div class="dropdown ">
              <button onclick="productshome()" class="dropbtn">Products 
    
              </button>
              <div class="dropdown-content">
                <a href="#">saan 1</a>
                <a href="#">saan 2</a>
                <a href="#">saan 3</a>
              </div>
          </div>
        <div class="dropdown ">
              <button onclick="newshome()" class="dropbtn">News 
         
              </button>
              <div class="dropdown-content">
                <a href="#">saan 1</a>
                <a href="#">saan 2</a>
                <a href="#">saan 3</a>
              </div>
          </div>
          <button id="a" class=" button5" onclick="homehome2()" ><h3><b>Learn More About Us</b></h3></button>
      </b>
    </div>
    <h1>
      <span class="w3-padding w3-black w3-opacity-min">
        <b class="w3-text-red">NMS</b></span> 
        <span class="w3-hide-small w3-text-white">New Media Services</span>
      </h1>
        <p id="betterfuture" class=" w3-text-white w3-bold"><u>We drive for better future</u></p>
        <h6><button class="w3-text-red w3-button-black w3-padding-large w3-large w3-opacity-wide w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'">SUBSCIBRE NOW</button></h6>
      </div>
    </header>
  </div>
</div>


    <!-- Blog entries -->
    <div class=" w3-column w3-border-0 w3-border-top w3-align-center">

      <!-- Blog entry -->
      <div class="w3-row w3-transparent w3-margin  w3-padding-large">

        <div class="w3-center w3-margin">
        <a  href="#"><img style="width:50%" src="/images/nmslogo.png" class="img-fluid w3-bar-item  w3-center  " alt="nmslogo"> </a>       
                <img src="" alt="" style="width:100%" class="w3-padding-16">
                <p><strong>Entertainment marketing</strong>
                is a subdivision of marketing which grows by using the ground of entertainment world for awareness and promotion of the brand, product or services. Entertainment marketing works best when it provides benefits to both brands and pop culture. 
                Only a brand gets successful when it runs the brand exposure and entertainment parallel. For instance, movies, celebrity, and characters. It is not always necessary to find entertainment marketing in every brand promotion, 
                but you may find some specific types of entertainment marketing such as event sponsorship, product placement or celebrity endorsements.
                <p><strong>Social media marketing </strong> is the use of social media platforms and websites to promote a product or service. 
                  Although the terms e-marketing and digital marketing are still dominant in academia, social media marketing is becoming more popular for both practitioners and researchers.</p> 
        </div>

        <div class="w3-container w3-padding w3-transparent">
          <h1 class="w3-center">Products</h1>
        </div>

      <div class="w3-row">
      
      <div class="w3-half w3-container " id="imagecontainer">
        <img class="prodimg" src="/images/chat.png" alt="Avatar" >
          <div id="overlay">
          <div class="w3-container" id="text">
              Message Support
              <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black">Read More</button>              
               
            </div>
          </div>
          
        </div>

        <div class="w3-half w3-container" id="imagecontainer">
          <img class="prodimg" src="/images/chat.png" alt="Avatar" >
          <div id="overlay">
            <div class="w3-container" id="text">
              call support
              <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Read More</button>              
            </div>
          </div>
        </div>

   
 
    </div>


    <div class="w3-row">
      
      <div class="w3-half  " id="imagecontainer">

      <img class="prodimg" src="/images/chat.png" alt="Avatar" >
          <div id="overlay">
          <div class="w3-container" id="text">
              Message Support
              <button onclick="document.getElementById('id02').style.display='block'" class="w3-button w3-black">Read More</button>              
            </div>
          </div>
        </div>


        <div class="w3-half w3-container " id="imagecontainer">
          <img class="prodimg" src="/images/chat.png" alt="Avatar" >
          <div id="overlay">
            <div class="w3-container" id="text">
              call support
              <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-black">Read More</button>              
            </div>
          </div>
        </div>
    </div>




      </div>
    <!-- END of ENTRIES -->
    
    </div>
    




                      <!-- Subscribe Modal -->
        <div id="subscribe" class="w3-modal w3-animate-opacity">
            <div class="w3-modal-content" style="padding:32px">
              <div class="w3-container w3-white">
                <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
                <h2 class="w3-wide">Contact The team</h2>
                <a id="ContentContainer" class="w3-button w3-block w3-padding-medium w3-orange w3-margin-bottom" href="/b1SignIn" target="_blank"><h2>Contact The Team</h2></a>
              </div>
            </div>
        </div>

        <div id="id01" class="w3-modal">
            <div class="w3-modal-content">
            <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
           
            <header class="w3-container w3-black">
                  <h1  class="w3-container w3-center">
                    Messaging
                </header>
        <div class="w3-container">
         
              <div class="w3-half w3-container">
                <p> Some text. Some text.</p>
                <p>Some text. Some text. Some text.</p>
              </div>
                
              <div class="w3-half w3-container ">
                  <div class="slideshow-container">
                    <div class="mySlides1">
                      <img src="/images/message/1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides1">
                      <img src="/images/message/2.jpg" style="width:100%">
                    </div>

                    <div class="mySlides1">
                      <img src="/images/message/3.jpg" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1, 0)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, 0)">&#10095;</a>
                  </div>
              </div>
              <footer class="w3-container w3-white">
                <p class="w3-center"> this is the footer</p>
            </footer>
              </div>
            </div>  
        </div>
    </div>
    
    <div id="id02" class="w3-modal">
            <div class="w3-modal-content">
            <span onclick="document.getElementById('id02').style.display='none'" class="w3-button w3-display-topright">&times;</span>
           <div class="w3-bar">
            <header class="w3-container w3-black">
                  <h1  class="w3-container w3-center">
                    Calling
                </header>
            </div>
        <div class="w3-container">
         
              <div class="w3-half w3-container">
                <p> Some text. Some text.</p>
                <p>Some text. Some text. Some text.</p>
              </div>
                
              <div class="w3-half w3-container ">
                  <div class="slideshow-container">
                    <div class="mySlides2">
                      <img src="/images/callcenter/1.jpg" style="width:100%">
                    </div>

                    <div class="mySlides2">
                      <img src="/images/callcenter/2.jpg" style="width:100%">
                    </div>

                    <div class="mySlides2">
                      <img src="/images/callcenter/3.jpg" style="width:100%">
                    </div>

                    <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
                  </div>
              </div>
              <footer class="w3-container w3-white">
                <p class="w3-center"> this is the footer</p>
            </footer>
              </div>
            </div>  
        </div>
    </div>
    
    



  




    <div class="w3-container w3-border w3-black">

      <header class="w3-black"> 
        <p>
          <div class="w3-container w3-center w3-transparent">
          The Satisfied Subscribers
        <br>
        <span class="fa fa-star checkedstar"></span>
          <span class="fa fa-star checkedstar"></span>
          <span class="fa fa-star checkedstar"></span>
          <span class="fa fa-star checkedstar"></span>
          <span class="fa fa-star"></span>
            </div>
          <h1 class="w3-center">This is how the The Team Satisfy Customer's  desire </h1>
        </p>
      </header>

      <div class="w3-transparent w3-container">

      
        <div class="w3-half w3-border-right w3-border-bottom w3-container">
           <canvas class="w3-text-white " id="myChart" style="width:100%;max-width:600px"></canvas>
        </div>

           <div class="w3-half w3-border-left w3-border-bottom w3-container">
           <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
           </div>    
        </div>
      
    <p><h4 class="w3-center"><u > Reach Us To Supply Your Needs</u></h4></p>
  <i id="ContentContainer" class="w3-button w3-block w3-padding-medium w3-black w3-margin-bottom" onclick="cntInfo()" ><h2 class=" w3-text-red">Sign Up</h2></i>


<!-- Footer -->
<footer class="w3-container w3-black" style="padding:32px">


  <div class="w3-third w3-container ">
    <h2 class="w3-text w3-center"><u> Subscribe</u> </h2>
      <form   class="w3-text w3-center" action="">
      <label for="fname">Work Email:</label><br>
      <input type="text" id="email" name="email" value=" "><br>
      <label for="lname">Full Name:</label><br>
      <input type="text" id="fname" name="fname" value=" "><br><br>
      <input onclick="submitsubs()" class="w3-grey" type="submit" value="Submit">
      </form>  
  </div>
  <div class="w3-third  w3-container">
            <h2 class="w3-text w3-center"><u>Our Company</u></h2>
             
          <p class="w3-text w3-center"> <h4 class="w3-text w3-center">Main Office</h4>480 Collins Street,
          Melbourne. 3000. Victoria, Australia</p>

          <p class="w3-text w3-center  w3-text-red">Email:
          info@newmediaservices.com.au</p>

          <p class="w3-text w3-center"><u>Other Offices</u><br>
          <div class="w3-row w3-text w3-center">
            <div class="w3-half">
                Melbourne
          <br>
          Manila
          <br>
          Amsterdam
          </div>
          <div class="w3-half">
          Tampa
          <br>
          Zurich
          <br>
          Dnipro
          </div>
          </div>
          </p>
  </div>
  <div class="w3-third w3-container">
  <div class=" w3-row  w3-center ">
          <h2><u>Follow Us</u></h2>
          <div class="w3-half">
                    <p class="fa fa-facebook-official w3-text-blue w3-hover-opacity">  <a href="https://www.facebook.com/NMSPhilippines" target="_blank">Facebook</a></p>
                    <br>
                    <p class="fa fa-instagram w3-text-pink w3-hover-opacity">  <a href="https://www.instagram.com/nmsphilippines" target="_blank" > Instagram</a></p>
                    <br>
                    <p class="fa fa-twitter w3-text-light-blue w3-hover-opacity">  <a href="https://twitter.com/nmsphilippines" target="_blank" >Tweeter</a></p>
                    <br>
                    <p class="fa fa-linkedin w3-text-blue w3-hover-opacity">  <a href="https://www.linkedin.com/company/nms" target="_blank">Linkedin</a><p>
          </div>
          <div class="w3-half">
                    <p class="fa fa-address-card-o w3-text-green w3-hover-opacity">  <a href="https://www.nms.ph" target="_blank" >nms.ph</a></p>
                    <br>
                    <p class="fa fa-cloud w3-text-white w3-hover-opacity">  <a href="https://newmediaservices.com.au" target="_blank">NewMediaServices</a></p>
                    </div>    
                  </div>
                  <a href="#" class="w3-button w3-black w3-right "><i class="fa fa-arrow-up"></i>Go Up</a>

            </div>
</div>
</footer>
</div>
<!-- <script class="w3-red"  language = "javascript" type = "text/javascript">
document.write("Hello people!")
</script> -->

<script 
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js">
</script>



<script>
var xValues = [100,200,300,400,500,600,700,800,900,1000];

new Chart("myChart1", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{ 
      data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
      borderColor: "red",
      fill: false
    }, { 
      data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
      borderColor: "green",
      fill: false
    }, { 
      data: [300,700,2000,5000,6000,4000,2000,1000,200,100],
      borderColor: "blue",
      fill: false
    }]
  },
  options: {
    legend: {display: false}
  }
});


var xValues = [50,60,70,80,90,100,110,120,130,140,150];
var yValues = [7,8,8,9,9,9,10,11,14,14,15];

new Chart("myChart", {
  type: "line",
  data: {
    labels: xValues,
    datasets: [{
      fill: false,
      lineTension: 0,
      backgroundColor: "rgba(0,0,255,1.0)",
      borderColor: "rgba(0,0,255,0.1)",
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    scales: {
      yAxes: [{ticks: {min: 6, max:16}}],
    }
  }
});

var slideIndex = [1,2];
var slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  var i;
  var x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}








function submitsubs() {
  confirm("You Have Send A request!");
}

function clickcheck() {
  var checkBox = document.getElementById("togglebtn");
  var opensubutton = document.getElementById("opensubutton");
  if (checkBox.checked == true){
    opensubutton.style.display = "block";
  } else {
    opensubutton.style.display = "none";
  }
}

function startTime() {
  const today = new Date();
  // let d = today.getDate();
  // let mt = today.getMonth();
  // let = today.getFullYear()
  let h = today.getHours();
  let m = today.getMinutes();
  let s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('clock').innerHTML =  h + ":" + m + ":" + s;
  setTimeout(startTime, 1000);
}

function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
function abouthome() {
  location.replace("http://127.0.0.1:8000/b0homePage1/#about")  
}
function serviceshome() {
  location.replace("http://127.0.0.1:8000/b0homePage1/#services")  
}
function productshome () {
  location.replace("http://127.0.0.1:8000/b0homePage1/#products")  
}
function newshome() {
  location.replace("http://127.0.0.1:8000/b0homePage1/#news")  
}
function homehome2() {
  location.replace("http://127.0.0.1:8000/b0homePage1")  
}
function cntInfo() {
  location.replace("http://127.0.0.1:8000/b1ContactInformation")  
}

</script>
</body>
</html>
