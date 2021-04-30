<html>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <title>Page Title</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    * {
      box-sizing: border-box;
    }
    
    /* Style the body */
    body {
      font-family: Arial, Helvetica, sans-serif;
      margin: 0;
    }

    /* Header texr */

    @import url('https://fonts.googleapis.com/css?family=Montserrat');


.title {
 
	font-family: "Montserrat";
	text-align: center;
	color: #FFF;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	height: 0vh;
	letter-spacing: 0px;
}

h1 {
	background-image: url(https://media.giphy.com/media/26BROrSHlmyzzHf3i/giphy.gif);
	background-size: cover;
	color: transparent;
	-moz-background-clip:text;
	-webkit-background-clip:text; 
	text-transform: uppercase;
	font-size: 60px;
	line-height: .75;
	margin: 10px 0;
}
/* styling my button */

.white-mode {
	text-decoration: none;
	padding: 7px 10px;
	background-color: #122;
	border-radius: 3px;
	color: #FFF;
	transition: .35s ease-in-out;
	position: absolute;
	left: 15px;
	bottom: 15px;
	font-family: "Montserrat";
}

.white-mode:hover {
	background-color: #FFF;
	color: #122;
}
    
    /* Header/logo Title */
    .header {
      padding: 75px;
      text-align: center;
      background:black;
      color: white;
    }
    .btn-primary2 {
    border-radius: 26px;
    color:black;
    background-color: #f0ad4e;
    border: 1px solid #fff;
    border-color: #f0ad4e;
}
.btn {
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.428571429;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    cursor: pointer;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    -o-user-select: none;
    user-select: none;
}
a {
    color:black;
    text-decoration: none;
}
 
    .top-left {
  position: absolute;
  top: 8px;
  left: 16px;
}
    
    /* Increase the font size of the heading */
    .header h1 {
      font-size: 40px;
    }
    
    /* Style the top navigation bar */
    .navbar {
      overflow: hidden;
      background-color: #333;
    }
    .icon-box.iconbox-border {
    border: 1px solid #dcdcdc;
    }
    .bg-theme-colored {
    background-color: #E80040 !important;
    }
    .icon-box {
    margin-bottom: 30px;
    }
    .text-center 
    {
    text-align: center;
    }


    .label
{
    display: inline-block;
    position: relative;
    top: 0;
    left: 0;
    padding: 10px 15px;
    text-shadow: 0 1px 0 rgb(19 74 70 / 40%);
    background: #7AB893;
    transition: all 0.3s ease-in-out;
    border-top-left-radius: 3px;
    border-bottom-left-radius: 3px;
    background: #7AB893;
}


    
    /* Style the navigation bar links */
    .navbar a {
      float: left;
      display: block;
      color: white;
      text-align: center;
      padding: 14px 20px;
      text-decoration: none;
    }
    
    /* Right-aligned link */
    .navbar a.right {
      float: right;
    }
    
    /* Change color on hover */
    .navbar a:hover {
      background-color: #ddd;
      color: black;
    }
    
    /* Column container */
    .row {  
      display: -ms-flexbox; /* IE10 */
      display: flex;
      -ms-flex-wrap: wrap; /* IE10 */
      flex-wrap: wrap;
     /* background: #3B5998; */
      background-image: linear-gradient(
118deg
,Red, black,blue);
    }
    
    /* Create two unequal columns that sits next to each other */
    /* Sidebar/left column */
    .side {
      -ms-flex: 30%; /* IE10 */
      flex: 30%;
     
      padding: 10px;
    }
    
    /* Main column */
    .main {   
      -ms-flex: 70%; /* IE10 */
      flex: 70%;
    
      padding: 10px;
    }
    .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
    
    /* Fake image, just for this example */
    .fakeimg {
      background-color: #aaa;
      width: 100%;
      padding: 20px;
    }

    .fakeimgset {
      background-color:white;
      width: 100%;
      padding: 20px;
    }
    
    
    /* Footer */
    .footer {
      padding: 20px;
      text-align: center;
      background: #ddd;
    }
    
    /* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 700px) {
      .row {   
        flex-direction: column;
      }
    }
    
    /* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
    @media screen and (max-width: 400px) {
      .navbar a {
        float: none;
        width: 100%;
      }
    }

    /* Slideshow CSS */
    * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}
/*
.dropdown-content {
  display: none;
  position:relative;
  background-color:#7AB893;
  color:black;
  width: fit-content;
  margin-left:30%;
  overflow: auto;
  
  border-radius: 20px 5px 20px 0px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  
  z-index: 1; 
}
.dropdown {
  position: relative;
  display:block;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: inline-block; 
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}
*/
.dropbtn {
  background-color:#7AB893;
  color:  black;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

/*.dropbtn:hover, .dropbtn:focus {
  background-color:silver;
} */

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 200px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown a:hover {background-color: #ddd;}

.show {display: block;}


@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

    </style>
 <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>   


    </head>
    <body>
    
    <div class="header">
    
      <div class="title">  
          <h1 class="top-left"  >Welcome to BOUTFRAME</h1> 
          </div>

      <div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="k_fi.jpg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="karates.jpg" style="width:100%">
 
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="karatethumbnail.jpg"style="width:100%">

</div>


<div class="mySlides fade">
    <div class="numbertext">4 / 4</div>
    <img src="maxresdefaul.jpg"style="width:100%">
  
  </div>
  
 
  
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

      <!--<img src="unnamed.jpg" > <br> <br>-->
     <!-- <a  href="insert.php"  class="label"style="border-radius: 20px 5px 20px 0px;"> -->


   <!--  <button onclick="myFunction()" class="label" style="border-radius: 20px 5px 20px 0px;">+ ADD PLAYER</button>
  <div id="myDropdown" class="dropdown-content" class="dropdown">
    <a href="insert.php">ADD SINGLE PLAYER</a>
    <a href="fetch_csv_file.php">ADD MULTIPLE PLAYER</a>
    
  </div> -->
  <div class="dropdown">
  <button onclick="myFunction()" class="dropbtn"style="border-radius: 20px 5px 20px 0px;">+ ADD PLAYER</button>
  <div id="myDropdown" class="dropdown-content">
    <a href="insert.php">ADD SINGLE PLAYER</a>
    <a href="fetch_csv_file.php">ADD MULTIPLE PLAYER</a>
    
  </div>
</div>

       
      <a href="maindata.php" class="label"style="border-radius: 20px 5px 20px 0px;"> + CREATE BOUT</a>      
    </div>
    
    <div class="navbar">
      
      </div>
     
     
      <a href="#"></a>
      <a href="#"></a>
      <a href="#" class="right"></a>
    </div>
    
    <div class="row">
      <div class="side">
        
        <div class="fakeimgset" style="height:300px;"> <br>&nbsp;&nbsp;
         <img src="boys_fight.jpg"  width="85%">
        </div>
       
      
        <br>
        <br>
        
        <div class="fakeimg" style="height:100px;"><b  style = "font-family:Cambria;"> Learn your defense.</b></div><br> 
        
        <div class="fakeimg" style="height:100px;"><b><p  style = "font-family:Cambria;">Karate is a defensive art from beginning to end .</p></b></div>
      </div>
      <div class="main">
      <!--  <h2></h2>
        <h5></h5> -->
        <div class="fakeimgset" style="height:300px;">
        <img src="kata_final.jpg" width="50%" height="100%" class="center">
        </div>
     
        <br>
        <br>
        <div class="fakeimg" style="height:220px;"> <b> <p  style = "font-family: Cambria; font-size:25px;" > Once a kata has been learned, it must be practiced repeatedly until it can be applied in an emergency, for knowledge of just the sequence of a form in Karate is useless.”</p></b></div>
        
      </div>
    </div>
    
    <div class="footer">
      <h2>Ⓒ 2021 OrionCoders Digital Private Limited</h2>
    </div>
    
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
    </body>
    </html>
    




</html>