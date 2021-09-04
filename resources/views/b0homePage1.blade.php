<!DOCTYPE html>
<html>
<title>NMS Page</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">


<style>
h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}



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
  font-size: 4px; 
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

</style>

<body onload="startTime()" >

<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->

<div class="w3-content" style="max-width:1600px">
<div class="w3-top ">
  <div class="w3-bar w3-black w3-wide w3-padding w3-card">
  <img href="#home" class=" w3-button" width="15%" src="/images/nmslogo.png">
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
              <button class="dropbtn">About 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="#">saan 1</a>
                <a href="#">saan 2</a>
                <a href="#">saan 3</a>
              </div>
          </div>
          <div class="dropdown ">
              <button class="dropbtn">Services 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="#">saan 1</a>
                <a href="#">saan 2</a>
                <a href="#">saan 3</a>
              </div>
          </div>
          
      <div class="dropdown ">
              <button class="dropbtn">Products 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="#">saan 1</a>
                <a href="#">saan 2</a>
                <a href="#">saan 3</a>
              </div>
          </div>
        <div class="dropdown ">
              <button class="dropbtn">News 
                <i class="fa fa-caret-down"></i>
              </button>
              <div class="dropdown-content">
                <a href="#">saan 1</a>
                <a href="#">saan 2</a>
                <a href="#">saan 3</a>
              </div>
          </div>
          <button class="button button5" href="" ><h5><b>Contact US</b></h5></button>
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
      <div class="w3-container w3-transparent w3-margin  w3-padding-large">
        <div class="w3-center">
        <a  href="#"><img style="width:50%" src="/images/nmslogo.png" class="img-fluid w3-bar-item  w3-center  " alt="nmslogo"> </a>       
        <h2>NMS delivery and Services</h2>
          <h5 >Media & Intertainment</h5>
              <div class="w3-justify">
                <img src="" alt="" style="width:100%" class="w3-padding-16">
                <p><strong>Entertainment marketing</strong>
                is a subdivision of marketing which grows by using the ground of entertainment world for awareness and promotion of the brand, product or services. Entertainment marketing works best when it provides benefits to both brands and pop culture. 
                Only a brand gets successful when it runs the brand exposure and entertainment parallel. For instance, movies, celebrity, and characters. It is not always necessary to find entertainment marketing in every brand promotion, 
                but you may find some specific types of entertainment marketing such as event sponsorship, product placement or celebrity endorsements.
                
                <p><strong>Social media marketing </strong> is the use of social media platforms and websites to promote a product or service. 
                  Although the terms e-marketing and digital marketing are still dominant in academia, social media marketing is becoming more popular for both practitioners and researchers.</p>
              </div>

        </div>

        
      </div>
      <!-- <hr> -->
    <!-- END of ENTRIES -->

    <hr>

   
      
      <!-- next Container -->
    <div class="w3-row"> 
      <div class="w3-container w3-half">
           <p ><h1 class="w3-center"><b>Services And Solutions</b></h1><h4 class="w3-center"> Get Connected and Contact Our Dedicated team </h4> </p>
           <button style="display:none" id="opensubutton" class="w3-button-sm w3-center w3-block w3-padding-small w3-red w3-margin-bottom" onclick="cntInfo()" ><h2>Sign Up</h2></button>
           <p class="w3-center"><b class="w3-center">Get Started</b></p>
           <p class="w3-center">Read The Discription Below</p>
              <div class="w3-container">
                <label class="w3-column w3-center w3-margin w3-text" >NMS Productions needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at any time. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, please review our Privacy Policy. </label>
              </div>
              <div class=" w3-center "> 
                <br>
                <label class=" w3-center " for="togglebtn"><u> Are you Ready to Comit? Click HERE</u> </label>
                <br>
                <input class="largerCheckbox" type="checkbox"   id="togglebtn" onclick="clickcheck()"></input>
              </div>
      </div>
      <div class="w3-container w3-half">
        <p style="w3-text-lg "> <h1 class="w3-center "><b> The Company </b></h1> <p>
        <p class="w3-xlarge w3-bold" ><i class="material-icons" style="font-size:48px;color:red">flag</i>Who are we</p>
        <h6 id="example1">  We are the world , we are the people we deliver services, We are the world , we are the people we deliver servicesWe are the world , we are the people we deliver servicesWe are the world , we are the people we deliver services</h6>
        <p class="w3-xlarge w3-bold" ><i class="material-icons" style="font-size:48px;color:red">flag</i>What we do</p>
        <h6 id="example1"> We deliver services and address business needs</h6>
        <p class="w3-xlarge w3-bold" ><i class="material-icons" style="font-size:48px;color:red">flag</i>Who are we</p>
        <h6 id="example1">  We are the world , we are the people we deliver services, We are the world , we are the people we deliver servicesWe are the world , we are the people we deliver servicesWe are the world , we are the people we deliver services</h6>

     
      </div>
    </div>
    

      <hr>

      <div class="w3-row w3-white w3-margin">
        <div class="w3-row w3-padding w3-black">
          <h4 class="w3-center">Learn About Us</h4>
        </div>
        
        <div class="w3-row">
        <iframe width="418" height="320"
        title="YouTube video player"; frameborder="0" ;
             allow="accelerometer; autoplay; clipboard-write; encrypted-media;
              gyroscope; picture-in-picture; allowfullscreen"
          src="https://www.youtube.com/embed/W3XLJV0FqvM">
          </iframe>
        </div>
           
      </div>
      <hr>






    <div class="row">
      <div class="column">

      <p></p>1
       
       
        <input >
                                                                                                        
      </input>

      </div>
      <div class="column w3-border w3-center ">
        <div class="w3-container  w3-padding w3-white w3-margin">
          <h4>Follow Us</h4>
        </div>
          <a href="https://www.facebook.com/NMSPhilippines" target="_blank" class="fa fa-facebook-official w3-text-blue w3-hover-opacity"> Facebook</a>..........
          <a href="https://www.instagram.com/nmsphilippines" target="_blank" class="fa fa-instagram w3-text-pink w3-hover-opacity"> Instagram</a>..........
          <a href="https://twitter.com/nmsphilippines" target="_blank" class="fa fa-twitter w3-text-light-blue w3-hover-opacity"> Tweeter</a>
        </br>
          <a href="https://www.nms.ph" target="_blank" class="fa fa-address-card-o w3-text-green w3-hover-opacity"> Website </a>............
         <a href="https://www.linkedin.com/company/nms" target="_blank" class="fa fa-linkedin w3-text-blue w3-hover-opacity"> Linkedin</a>...........
         <a href="https://newmediaservices.com.au" target="_blank"  class="fa fa-cloud w3-text-black w3-hover-opacity"> CLoud</a>
          <!--  <i class="fa fa-pinterest-p w3-hover-opacity"></i>-->
        </div>
    </div>

    </div>







    <!-- About/Information menu -->
     <div class="w3-col l4">



      </div> 
    
    </div>

  <!-- END GRID -->
  </div>
<!-- END w3-content -->
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


<hr>
<!-- Footer -->
<footer class="w3-container w3-black" style="padding:32px">
  <a href="#" class="w3-button w3-black "><i class="fa fa-arrow-up"></i>Subscibe Now  </a>
</footer>

<!-- <script  language = "javascript" type = "text/javascript">
document.write("Hello people!")
</script> -->



<script>

function clickcheck() {
  var checkBox = document.getElementById("togglebtn");
  var opensubutton = document.getElementById("opensubutton");
  if (checkBox.checked == true){
    opensubutton.style.display = "block";
  } else {
    opensubutton.style.display = "none";
  }
}

  
// Toggle between hiding and showing 
// document.getElementById("myBtn").click();
// function myFunction(id) {
//   var x = document.getElementById(id);
//   if (x.className.indexOf("w3-show") == -1) {
//     x.className += " w3-show";
//   } else { 
//     x.className = x.className.replace(" w3-show", "");
//   }
// }

// function likeFunction(x) {
//   x.style.fontWeight = "bold";
//   x.innerHTML = "✓ Liked";
// }


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



function cntInfo() {
  location.replace("http://127.0.0.1:8000/b1ContactInformation")  
}
// function lnkedn() {
//   location.replace("https://www.https://www.linkedin.com/company/nms")  
// }
// function instag() {
//   location.replace("https://www.instagram.com/nmsphilippines")  
// }
// function wbste() {
//   location.replace("https://www.nms.ph")  
// }
// function twtter() {
//   location.replace("https://twitter.com/nmsphilippines")  
// }
// function twtter() {
//   location.replace("https://newmediaservices.com.au")  
// }
</script>










</body>





</html>
