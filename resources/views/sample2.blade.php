<!DOCTYPE html>
<html>
<title>Nms Philippines</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
  min-width: 800px;
  margin:0px;
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

.bottonnav a:hover1 {
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
	border-left: 25px solid transparent;
	border-right: 25px solid transparent;
	height: 0;
	width: 125px;
}
/* ----------------------separation------------------------- */

#trapezoid {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
  border: 80px solid rgba(0,0,0,0);
  border-top: 0 solid;
  border-bottom: 100px solid rgba(1, 1, 1, .4);
  -webkit-border-radius: 20px 20px 0 0;
  border-radius: 20px 20px 0 0;
  font: normal 100%/normal Arial, Helvetica, sans-serif;
  color: rgba(0,0,0,0.7);
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
  right: 0;
  left: 0; 

  z-index: 1;   
  transform: perspective(-10px);
}

#trapezoid:hover .sub-home {
  justify-content: center;
  margin-top: 53px;
}

.navbar {
  position: sticky;
  top: 0;
  display:flex;
  overflow:hidden;
  justify-content: center;
  height: 100px;
}

.navbar a {
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

.navbar a:hover, .subnav:hover .subnavbtn {
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


</style>
<body>

<button   id="bottonnav" class="trapezoid1 w3-transparent" onclick="homehome()">

</button>
  

<!-- Links (sit on top) -->
<!-- <div class="w3-top">
  <div class="w3-row w3-padding w3-dark-grey">
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-dark-grey">ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="#services" class="w3-button w3-block w3-dark-grey">SERVICES</a>
    </div>
    <div class="w3-col s3">
      <a href="#products" class="w3-button w3-block w3-dark-grey">PRODUCTS</a>
    </div>
    <div class="w3-col s3">
      <a href="#news" class="w3-button w3-block w3-dark-grey">NEWS</a>
    </div>
  </div>
</div> -->
<nav class="navbar">
  <div id="trapezoid">
    <a class="sub-home" href="#">Home</a>
    <a href="#About" class="expandHome">
      1975-86
    </a>
    <a href="#About" class="expandHome">
      1987-98
    </a> 
    <a href="#About" class="expandHome">
      1999-2008
    </a> 
     <a href="#About" class="expandHome">
       2009-19
    </a>   
     </div>
</nav>

<!-- Header with image -->

<!-- ---------------------1111------------------- -->
<header class="bgimg w3-display-container w3-grayscale-min" id="news">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
  <h3 class="w3-orange">Welcome to <span class="w3-tag">NMS World</span></h3>
  </div>
  <div class="w3-display-middle w3-center">
  <a href="#"><img style="width:100%" src="/images/NMSlogo.png" class="img-fluid w3-bar-item  w3-center " alt="logonotag"> </a>
    <h1 class="w3-xxxlarge"><b>NMS Media and Intertainment</b></h1>
   
    

  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">15 Adr street, 5015</span>
  </div>
</header>




<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-white w3-large">
<!-- About Container -->
<!-- ---------------------2222222------------------- -->
<div class="w3-container" id="about">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE CAFE</span></h5>
    <p>The Cafe was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    <p>In addition to our full espresso and brew bar menu, we serve fresh made-to-order breakfast and lunch sandwiches, as well as a selection of sides and salads and other good stuff.</p>
    <div class="w3-panel w3-leftbar w3-light-grey">
      <p><i>"Use products from nature for what it's worth - but never too early, nor too late." Fresh is the new sweet.</i></p>
      <p>Chef, Coffeeist and Owner: Liam Brown</p>
    </div>
    <img src="/w3images/coffeeshop.jpg" style="width:100%;max-width:1000px" class="w3-margin-top">
    <p><strong>Opening hours:</strong> everyday from 6am to 5pm.</p>
    <p><strong>Address:</strong> 15 Adr street, 5015, NY</p>
  </div>
</div>

<!-- Menu Container -->
<!-- ---------------------3333------------------- -->
<div class="w3-container" id="services">
  <div class="w3-content" style="max-width:700px">
 
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">Services</span></h5>
  
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
      <h5>Bread Basket</h5>
      <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>
    
      <h5>Honey Almond Granola with Fruits</h5>
      <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>
    
      <h5>Belgian Waffle</h5>
      <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>
    
      <h5>Scrambled eggs</h5>
      <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>
    
      <h5>Blueberry Pancakes</h5>
      <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
    </div>
<!-- --------------------------------------------------------------------------------------------------------------- -->
    <div id="mdia" class="w3-container services w3-padding-48 w3-card">
      <h5>Coffee</h5>
      <p class="w3-text-grey">Regular coffee 2.50</p><br>
    
      <h5>Chocolato</h5>
      <p class="w3-text-grey">Chocolate espresso with milk 4.50</p><br>
    
      <h5>Corretto</h5>
      <p class="w3-text-grey">Whiskey and coffee 5.00</p><br>
    
      <h5>Iced tea</h5>
      <p class="w3-text-grey">Hot tea, except not hot 3.00</p><br>
    
      <h5>Soda</h5>
      <p class="w3-text-grey">Coke, Sprite, Fanta, etc. 2.50</p>
    </div>  

    
  </div>
  
</div>

<!-- Contact/Area Container -->
<!-- ---------------------555555555------------------- -->
<div class="w3-container" id="products" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
    <p>Find us at some address at some place.</p>
    <img src="/w3images/map.jpg" class="w3-image" style="width:100%">
    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="How many people" required name="People"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="datetime-local" placeholder="Date and time" required name="date" value="2020-11-16T20:00"></p>
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message \ Special requirements" required name="Message"></p>
      <p><button class="w3-button w3-black" type="submit">SEND MESSAGE</button></p>
    </form>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover1-text-green">w3.css</a></p>
</footer>

<script>

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




</script>
<script>
  
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
