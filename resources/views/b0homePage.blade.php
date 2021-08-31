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

/* # h4
{
  font-size:1em;
  font-weight:bold;
  margin:0;
  padding:10px 0 2px 15px;
}
 */

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

#redirect {
  position: absolute;
  top: 50px;
  border: 3px solid green;
}
</style>

<body onload="startTime()" class="w3-light-grey">



<!-- Navigation bar with social media icons -->
<div class="w3-bar w3-black w3-hide-small">
  <div>
    <a class="w3-bar-item w3-button"><h1  class="w3-button w3-block w3-padding-medium w3-orange w3-margin-bottom" > <i   class="material-icons">home</i>NMS</h1></a>
  </div>
  <!-- <a href="#" class="w3-bar-item w3-button"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-instagram"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-snapchat"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-flickr"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-twitter"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-linkedin"></i></a>-->
  <a  href="#" class="w3-bar-item w3-button w3-right"><i class="w3-button w3-block w3-padding-medium w3-orange w3-margin-bottom" id="txt"></i></a> 

</div>
  
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1600px">

  <!-- Header -->
  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>NMS Media and Intertainment</b></h1>
    <h6>Welcome to <span class="w3-tag">NMS World</span></h6>
  </header>





  
    <!-- Blog entries -->
    <div class="w3-col l8 s12">
      <!-- Blog entry -->
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">

        <h6><button class="w3-text-red w3-button-black w3-padding-large w3-large w3-opacity-wide w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'">Suscribe Now</button></h6>
         
        <h3>NMS delivery and Services</h3>
          <h5>Media & Intertainment <span class="w3-opacity">
           
         </span></h5>

        </div>

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
      <!-- <hr> -->
    <!-- END of ENTRIES -->
    </div>







    <!-- About/Information menu -->
    <div class="w3-col l4">


      <!-- About Card -->
      <div class="w3-white w3-margin">
      <div >
        <!-- get id in the style -->
           <i id="ContentContainer" class="w3-button w3-block w3-padding-medium w3-orange w3-margin-bottom" onclick="cntInfo()" ><h2>Sign Up</h2></i>
      </div>
      <!-- next Container -->
        <div class="w3-container w3-black">
          <h4>Who we are?</h4>
          <p>We are the World</p>
        </div>
      </div>
      <hr>

      <!-- next container Advertising -->
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>About Us</h4>
        </div>
        <div class="w3-container  w3-white">
   
          <iframe class="responsive-iframe" width="385" height="315" src="https://www.youtube.com/embed/W3XLJV0FqvM"
             title="YouTube video player" frameborder="0" 
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
             allowfullscreen>
            </iframe>

        </div>
      </div>
      <hr>

     
    
      <!-- next container Web -->

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Follow Us</h4>
        </div>
        <div class="w3-container w3-medium w3-padding">
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


<!-- Footer -->
<footer class="w3-container w3-dark-grey" style="padding:32px">
  <a href="#" class="w3-button w3-black w3-padding-large w3-margin-bottom"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <!-- <p>Powered by <a href="/b1ContactInformation" target="_blank">Sign Up</a></p> -->
</footer>



<script language = "javascript" type = "text/javascript">

document.write("Hello people!")

</script>



<script>
// Toggle between hiding and showing blog replies/comments
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
  document.getElementById('txt').innerHTML =  h + ":" + m + ":" + s;
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
