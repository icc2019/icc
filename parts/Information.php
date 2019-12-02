

<?php //include('right-panel.php');?>



<div class="col" >
  <!-- ============================================================================= -->
  
  
  
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

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
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

 <h1> Information</h1>
<br>
  <br>
  <br>

<div class="slideshow-container" align="center">

<div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
 <img src="assests/images/moussa card-1new.png" width="600px" height="750px">
  <div class="text">CISCO Card</div>
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="assests/images/dhabia card-1.png" width="600px" height="750px">
  <div class="text">Dr.Dhabia Card </div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
 <img src="assests/images/Michael card-1.png" width="600px" height="750px">
  <div class="text">Eng. Michael Card </div>
</div>


<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="assests/images/moussa card-1.png" width="600px" height="750px">
  <div class="text">Dr.Moussa Card</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
   <img src="assests/images/norah alnashwan- card-1.png" width="600px" height="750px">
  <div class="text">Norah Alnashwan Card</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
 <img src="assests/images/Norma card-1.png" width="600px" height="750px">
  <div class="text">AP Dr.Norma Card</div>
</div>
  
    <div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img src="assests/images/Workshops’ Schedule.jpg" width="600px" height="750px">
  <div class="text">Workshops’ Schedule</div>
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 
</div>


                           

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>
  
  
    

  <table>
    
     
    <tr> 
      
    <td> <p>To download the PDF version of "CISCO Card"</p> </td>
     <td><b><p>	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;  &nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp;<a href="assests/cisco card.pdf"target="_blank"cisco card>click here</a></p></td></tr> 
        <td> <p>To download the PDF version of "Dr.Dhabia Card"</p> </td>
      <td> <b><p>	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;  &nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp;<a href="assests/dhabia card.pdf"target="_blank"dhabia card>click here</a></p></td>
   <br></tr>
          <td> <p>To download the PDF version of "Eng. Michael Card"</p> </td>

      <td> <p><b>	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;  &nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp;<a href="assests/Michael card.pdf"target="_blank"Michael card>click here</a></p></td>
   <br></tr>
            <td> <p>To download the PDF version of "Dr.Moussa Card" </p> </td>
      <td> <p> <b>	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;  &nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp;<a href="assests/images/moussa card new.pdf"target="_blank"moussa card>click here</a> </p> </td>
   <br></tr>
              <td> <p>To download the PDF version of"Norah Alnashwan Card"</p> </td>

      <td> <p> <b>	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;  &nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp;<a href="assests/images/norah alnashwan- card.pdf"target="_blank"norah alnashwan- card>click here</a> </p> </td>
   <br></tr>
              <td> <p>To download the PDF version of"AP Dr.Norma Card"</p> </td>

      <td> <p> <b>	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;  &nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp;<a href="assests/Norma card.pdf	"target="_blank"Norma card>click here</a></p></td>
        <br></tr>

<td> <p>To download the PDF version of"Workshops’ Schedule"</p> </td>
      <td> <p> <b> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 	&nbsp;	&nbsp; 	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;  &nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp;<a href="assests/images/Workshops’ Schedule.jpg	"target="_blank"GUIDE WORKSHOPS>click here</a></p></td>
    


   </tr>
<br></tr>
   <br></tr>
   </tr>
  </table>
<table>
     
    <tr> 
      <td> <p>​  To download the PDF version of "WORKSHOPS GUIDE " </p> </td>
      <td> <p><b>	  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;  &nbsp;  &nbsp; 	&nbsp;	&nbsp;  &nbsp; 	&nbsp; &nbsp; 	&nbsp;  &nbsp; 	&nbsp;<a href="assests/WORKSHOPS GUIDE.pdf	" target="_blank"GUIDE WORKSHOPS>click here</a> </b> </p> </td>
    </tr>
    </table>
       




</div>




<?php //include('left-panel.php');?>
<?php include('bottom-panel.php');?>
