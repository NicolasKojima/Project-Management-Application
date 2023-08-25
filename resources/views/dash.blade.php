<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial;
  margin: 0;
}

.slideshow-container {
  box-sizing: border-box;
  max-width: 90vw;
  margin-right: auto;
  margin-left:auto;

}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}


.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
}




/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: black;
  /* rgba(0, 0, 0, 0.8) */
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 0; /* Adjust the padding as needed */
  color: white;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.row {
  max-height:100px !important;
  object-fit: cover !important;
}

.sub-image {
  max-height:100px !important;
  object-fit: cover !important;
}

.main-image {
  box-sizing: border-box;
  max-width: 90vw;
  margin-right: auto;
  margin-left: auto;
  display: block; /* Make sure the images are displayed as block elements */
  margin: 0 auto;
}

</style>
<body>

<h2 style="text-align:center">Slideshow Gallery</h2>

<div class="slideshow-container">
@foreach ($testimg as $testimg)
  <div class="slide">
    <div class="mySlides">
      <div class="numbertext"> 1 / 6</div>
      <img class="main-image" src="<?php echo asset('/storage/image/'.$testimg->image1)?>" alt="Main Image"></img>
    </div>
    <div class="mySlides">
      <div class="numbertext"> 2 / 6</div>
      <img class="main-image" src="<?php echo asset('/storage/image/'.$testimg->image2)?>" alt="Main Image"></img>
    </div>
    <div class="mySlides">
      <div class="numbertext"> 3 / 6</div>
      <img class="main-image" src="<?php echo asset('/storage/image/'.$testimg->image3)?>" alt="Main Image"></img>
    </div>
    <div class="mySlides">
      <div class="numbertext"> 4 / 6</div>
      <img class="main-image" src="<?php echo asset('/storage/image/'.$testimg->image4)?>" alt="Main Image"></img>
    </div>
    <div class="mySlides">
      <div class="numbertext"> 5 / 6</div>
      <img class="main-image" src="<?php echo asset('/storage/image/'.$testimg->image5)?>" alt="Main Image"></img>
    </div>
    <div class="mySlides">
      <div class="numbertext"> 6 / 6</div>
      <img class="main-image" src="<?php echo asset('/storage/image/'.$testimg->image6)?>" alt="Main Image"></img>
    </div>
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  </div>  

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="row-style">
      <div class="column">
        <img class="sub-image"  class="demo cursor" src="<?php echo asset('/storage/image/'.$testimg->image1)?>" style="width:100%" onclick="currentSlide(1)" alt="Main Image"></img>
      </div>
      <div class="column">
        <img class="sub-image"  class="demo cursor" src="<?php echo asset('/storage/image/'.$testimg->image2)?>" style="width:100%" onclick="currentSlide(2)" alt="Main Image"></img>
      </div>
      <div class="column">
        <img class="sub-image"  class="demo cursor" src="<?php echo asset('/storage/image/'.$testimg->image3)?>" style="width:100%" onclick="currentSlide(3)" alt="Main Image"></img>
      </div>
      <div class="column">
        <img class="sub-image"  class="demo cursor" src="<?php echo asset('/storage/image/'.$testimg->image4)?>" style="width:100%" onclick="currentSlide(4)" alt="Main Image"></img>
      </div>
      <div class="column">
        <img class="sub-image"  class="demo cursor" src="<?php echo asset('/storage/image/'.$testimg->image5)?>" style="width:100%" onclick="currentSlide(5)" alt="Main Image"></img>
      </div>
      <div class="column">
        <img class="sub-image"  class="demo cursor" src="<?php echo asset('/storage/image/'.$testimg->image6)?>" style="width:100%" onclick="currentSlide(6)" alt="Main Image"></img>
      </div>
    </div>
  </div>
</div>
@endforeach


<script>
let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("demo");
  let captionText = document.getElementById("caption");
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
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    
</body>
</html>
