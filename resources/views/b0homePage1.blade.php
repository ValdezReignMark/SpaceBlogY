<!DOCTYPE html>
<html>
<title>Nms Philippines</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">  
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
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


#bottonnav1 {
  overflow: hidden;
  background-color:  #333;
  position: fixed;
  bottom: 0;
  width: 100%;
  text-align:center;
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

.main {
  padding: 16px;
  margin-bottom: 30px;
}
.trapezoid1 {
	border-bottom: 50px solid #555;
	border-left: 100px solid black;
	border-right: 100px solid black;

  height: 20px;
	width: 125px;
}

/* ----------------------separation------------------------- */

#trapezoid {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 10px solid darkred;
  border: 80px solid black;
  border-top: 10px solid red;
  border-bottom: 100px solid black;
  -webkit-border-radius: 20px 20px 0 0;
  border-radius: 140px 140px 500px 500px;
  font: normal 100%/normal Arial, Helvetica, sans-serif;
  color: hsla(120,100%,75%,0.3);
  -o-text-overflow: clip;
  text-overflow: clip;
  -webkit-transform: rotateX(180deg);
  transform: rotateX(180deg);
  margin-top:-53px;
  width: 700px;
  position: relative;
  transition: all 0.7s ease;
  padding-left:7%;

}

#trapezoid a, .subnavbtn {
 -webkit-transform: rotateX(180deg);
  transform: rotateX(180deg);
}

.sub-home {
  display: none;
  position: absolute;
  color: red;
  right: 0;
  left: 0; 

  z-index: 1;   
  transform: perspective(-10px);
}

#trapezoid:hover .sub-home {
  justify-content: center;
  margin-top: 53px;
}

.navbar2 {
  position: sticky;
  top: 0;
  display:flex;
  overflow:hidden;
  justify-content: center;
  height: 100px;
}

.navbar2 a {
  float: left;
  font-size: 16px;
  color: grey;
  text-align: center;
  padding: 14px 25px;
  text-decoration: none;
  text-transform: uppercase;
  letter-spacing: 4px;
  transition: all 0.5s ease;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 25px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
  text-transform: uppercase;
  letter-spacing: 4px;
  transition: all 0.5s ease;
}

.navbar2 a:hover, .subnav:hover .subnavbtn {
  background:black;
  color: white;
  border-radius:5px;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  width: 100%;
  z-index: 1;   
  transform: perspective(-10px);
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none; 
}

.subnav-content a:hover {
  background:#B993D6;
  color: black;
}

.subnav:hover .subnav-content {
  display: flex;
  justify-content: center;
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
<body>

<div class="fixed w3-black" onclick="homehome()">
<p class="w3-center button"><i>Next</i></p>
</div>
<div class="fixed1 w3-black" onclick="homehome()">
<i class="fa fa-arrow-right"><p class="w3-center button">Next</p></i>
</div>

<!-- Links (sit on top) -->
<div class="w3-top w3-white ">
  <div  class="w3-row w3-white ">
   <nav class="navbar2">
     
   <div id="trapezoid">
  

    <a class="sub-home"  onclick="homehome()">Home</a>

      <div class="w3-col s3">
        <a href="#about" class=" expandHome w3-button  ">ABOUT</a>
      </div>
      <div class="w3-col s3">
        <a href="#services" class=" expandHome w3-button  ">SERVICES</a>
      </div>
      <div class="w3-col s3">
        <a href="#products" class="w3-button  expandHome">PRODUCTS</a>
      </div>
      <div class="w3-col s3">
        <a href="#news" class="w3-button  expandHome">NEWS</a>
      </div>
    </div>
   </nav>
  </div>
</div>


<!-- Header with image -->

<!-- ---------------------1111------------------- -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
 
<!-- <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
  <h3 class="w3-orange">Welcome to <span class="w3-tag">NMS World</span></h3>
  </div> -->
 
  <div class="w3-display-middle w3-center">
  <a href="#"><img style="width:100%" src="/images/NMSlogo.png" class="img-fluid w3-bar-item  w3-center " alt="logonotag"> </a>
  </div>
<!--   
  <div class="w3-display-bottomright w3-center w3-padding-large">
  <h3 class="w3-orange">Welcome to <span class="w3-tag">NMS World</span></h3>
  </div> -->

</header>

<div class="container w3-center w3-animate-bottom">
<iframe class="responsive-iframe" width="500" height="500" src="https://www.youtube.com/embed/W3XLJV0FqvM"
             title="YouTube video player" frameborder="0" 
             allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
             allowfullscreen>
            </iframe>
</div>
<div class="w3-sand w3-white w3-large">
<!-- About Container -->
<!-- ---------------------2222222------------------- -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide"></span></h5>
      <h1><p>About</p></h1>
    <p>"We Manage Communications and Content of Consumers through SMS, IM, Email and Voice Solutions. ]
      We aim to conquer the impossible through commitment to teamwork between staff and customers. We Achieve The Impossible Together"</p>
    <p>"We Manage Communications and Content of Consumers through SMS, IM, Email and Voice Solutions. 
      We aim to conquer the impossible through commitment to teamwork between staff and customers. We Achieve The Impossible Together"</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
      <p>Junior Programmer, Employee and Pogi: Reign Mark Valdez</p>
    </div>
    <img src="/images/coffeeshop.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Opening hours:</strong> everyday from 9am to 6pm .</p>
    <p><strong>Address:</strong> Staffhouse Road BCEZ-PEZA, Loakan Rd, Baguio, 2600 Benguet</p>
    
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
</div>

<!-- Menu Container -->
<!-- ---------------------3333------------------- -->
<div class="w3-container" id="services">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide"></span></h5>
   <h1 class="w3-container"> <p>Services and Products </p> </h1>
    <div class="w3-row w3-center w3-card w3-padding">
      <a href="javascript:void(0)" onclick="openMenu(event, 'Srvc');" id="myLink">
        <div class="w3-col s6 tablink">Services</div>
      </a>
      <a href="javascript:void(0)" onclick="openMenu(event, 'mdia');">
        <div class="w3-col s6 tablink">Media</div>
      </a>
    </div>
<!-- ------------------------4--------------- -->
    <div id="Srvc" class="w3-container services w3-padding-48 w3-card">
      <!-- <h5>Bread Basket</h5>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>
    
      <h5>Honey Almond Granola with Fruits</h5>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
    
      <h5>Belgian Waffle</h5>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
    
      <h5>Scrambled eggs</h5>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
    
      <h5>Blueberry Pancakes</h5>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p> -->
      <h5>Call Center</h5>
      <p class="w3-text-grey">We providewhat your company needs to run and make profit</p><br>
    
      <h5>Mesaging</h5>
      <p class="w3-text-grey">We updated whatever need for the company</p><br>
    
      <h5>Web development</h5>
      <p class="w3-text-grey">We provide and constrcut usable application </p><br>
      <h5>Call Center</h5>
      <p class="w3-text-grey">We providewhat your company needs to run and make profit</p><br>
    
      <h5>Mesaging</h5>
      <p class="w3-text-grey">We updated whatever need for the company</p><br>
    
      <h5>Web development</h5>
      <p class="w3-text-grey">We provide and constrcut usable application </p><br>    
    </div>
<!-- --------------------------------------------------------------------------------------------------------------- -->
    <div id="mdia" class="w3-container services w3-padding-48 w3-card">
      <h5>Call Center</h5>
      <p class="w3-text-grey">We providewhat your company needs to run and make profit</p><br>
    
      <h5>Mesaging</h5>
      <p class="w3-text-grey">We updated whatever need for the company</p><br>
    
      <h5>Web development</h5>
      <p class="w3-text-grey">We provide and constrcut usable application </p><br>
    
      <h5>Call Center</h5>
      <p class="w3-text-grey">We providewhat your company needs to run and make profit</p><br>
    
      <h5>Mesaging</h5>
      <p class="w3-text-grey">We updated whatever need for the company</p><br>
    
      <h5>Web development</h5>
      <p class="w3-text-grey">We provide and constrcut usable application </p><br>
      <!-- <h5>Iced tea</h5>
      <p class="w3-text-grey">Hot tea, except not hot 3.00</p><br> -->
    
      <!-- <h5>Soda</h5>
      <p class="w3-text-grey">Coke, Sprite, Fanta, etc. 2.50</p> -->
    </div>  

  </div>
</div>

<!-- Contact/Area Container -->
<!-- ---------------------555555555------------------- -->
<div class="w3-container" id="products" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide"></span></h5>
    <h1> <p>Services And Solutions </p> </h1>
    <div class="w3-row"> 
      <div class="w3-container w3-half">
           <p ><h1 class="w3-center"><b></b></h1><h4 class="w3-center"> Get Connected and Contact Our Dedicated team </h4> </p>
           <p class="w3-center"><b class="w3-center">Get Started</b></p>
           <p class="w3-center">Read The Discription Below</p>
              <div class="w3-container">
                <label class="w3-column w3-center w3-margin w3-text" >NMS Productions needs the contact information you provide to us to contact you about our products and services. You may unsubscribe from these communications at any time. For information on how to unsubscribe, as well as our privacy practices and commitment to protecting your privacy, please review our Privacy Policy. </label>
              </div>
              <div class=" w3-center "> 
              <button style="display:none" id="opensubutton" class="w3-button-sm w3-center w3-block w3-padding-small w3-red w3-margin-bottom" onclick="cntInfo()" ><h2>Sign Up</h2></button>

                <br>
                <label class=" w3-center " for="togglebtn"><u> Are you Ready to Comit? Click HERE</u> </label>
                <br>
                <input class="largerCheckbox" type="checkbox"   id="togglebtn" onclick="clickcheck()"></input>
              </div>
      </div>
      <div class="w3-container w3-half">
        <image style="width:100%;height:100%px" src="/images/webdesign.png">
        <image style="width:100%;height:100%px" src="/images/callcenter.png">
        <image style="width:100%;height:100%px" src="/images/chat.png">
    </div>
    <div class="w3-container">
    <img src="" class="w3-image" style="width:100%">
    <p><span class="w3-tag">FYI!</span> We offer services , messaging, im , call center, web design large or small. Will understand your needs and we will enhance a good project that makes you profit</p>
    <p><strong>Message</strong>  ask and just send us a message:</p>
    </div >
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Work Mail" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Company Name" required name="People"></p>
      <p><button class="w3-button w3-black" type="submit">Submit</button></p>
    </form>
  </div>
</div>


<div class="w3-container" id="news" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide"></span></h5>
    <h1> <p>News / Blog </p> </h1>
    <p>Contact us at To address your needs.</p>
    <img src="" class="w3-image" style="width:100%">
    <p><span class="w3-tag">FYI!</span> Tech that replaces our stores.</p>
    <p><strong>Reserve</strong>We have experimented with chatbots for years. Facebook has offered tools for merchants to make bots that engage with customers. Retailers like Amazon have used chatbots to answer customers’ questions, and when the bots can’t help, a person can hop in to take over.

    <p><span class="w3-tag">FYI!</span> Tech that lets us keep our hands to ourselves.</p>
    <p><strong>Reserve</strong>Last year was an inflection point for mobile payments. For safety reasons, even cash-only die-hards, like farmers’ market merchants and food trucks, started accepting mobile payments
Over all, 67 percent of American retailers accept touchless payments, up from 40 percent in 2019, according to a survey by Forrester. Among those surveyed, 19 percent said they made a digital payment in a store for the first time last May.
Hands-off technology doesn’t end with mobile wallets. So-called Ultra-Wide Band, a relatively new radio technology, may also find its moment this year. The technology, which uses radio waves to detect objects with extreme precision, has not been used much since its debut on smartphones about two years ago. But the need for contact-free experiences could change that, said Ms. Milanesi of Creative Strategies.

<p><span class="w3-tag">FYI!</span> Tech that replaces our stores.</p>
<p><strong>Reserve</strong>The pandemic has made it clear that virtualized experiences, like video meetings and Zoom yoga, are viable substitutes for the real thing, whether you embrace them or endure them. In 2021, expect more products to offer to digitize the way we work and stay healthy.



    <form action="/action_page.php" target="_blank">
        <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Share Your Thoughts" required name="Message"></p>
      <p><button class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <!-- <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p> -->
</footer>

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


function homehome2() {
  location.replace("http://127.0.0.1:8000/b0homePage1")  
}
function homehome() {
  location.replace("http://127.0.0.1:8000")  
}


// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("services");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();


$('.expandHome').mouseover(function() {
  $('.sub-home').css({
        'display': 'block'
    }); 
});
$('.subnavbtn').mouseover(function() {
  $('.sub-home').css({
        'display': 'none'
    }); 
});

$('#trapezoid').mouseleave(function() {
  $('#trapezoid').css({
        'margin-top': '-53px'
    }); 
    $('.sub-home').css({
        'display': 'none'
    }); 
}).mouseenter(function() {
  $('#trapezoid').css({
        'margin-top': '0px'
    }); 
});





</script>

</body>
</html>
