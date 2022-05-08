<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>backgrond color change</title>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation-float.min.css'>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/combine/npm/slick-carousel@1.7.1/slick/slick.css,npm/slick-carousel@1.7.1/slick/slick-theme.css'>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
  <h5 class="text-light text-center pt-5">Upload image and change background color</h5>
  <div class="">
    <div class="column small-11 small-centered" style="background-color:#000;height:100vh;position:relative;">
      <div style="height:408px;width:500px;border:5px solid red;left: 34%;top:3%;
      position: absolute;background-size:cover;" id="heading">
       <input type="file" id="files" name="file[]"/>
    </button>
  </div>
  <div class="cSlider cSlider--nav">
    <div class="cSlider__item">
     <div class="apps hover15">
       <span>
        <figure class="innerdiv" onclick="changeBodyBg('yellow');" style="background-color: #ffff00;">
         <div></div>
       </figure>
     </span>
   </div> 
 </div>
 <div class="cSlider__item">
   <div class="apps hover15">
     <span>
      <figure class="innerdiv" onclick="changeBodyBg('red');" style="background-color:red;">
       <div></div>
     </figure>
   </span>
 </div> 
</div>
<div class="cSlider__item">
 <div class="apps hover15">
   <span>
    <figure class="innerdiv" onclick="changeBodyBg('purple');" style="background-color:purple;">
     <div></div>
   </figure>
 </span>
</div> 
</div>
<div class="cSlider__item">
 <div class="apps hover15">
   <span>
    <figure class="innerdiv" onclick="changeBodyBg('green');" style="background-color:green;">
     <div></div>
   </figure>
 </span>
</div> 
</div>
<div class="cSlider__item">
 <div class="apps hover15">
   <span>
    <figure class="innerdiv"  onclick="changeBodyBg('cyan');" style="background-color:cyan;">
     <div></div>
   </figure>
 </span>
</div> 
</div>
<div class="cSlider__item">
 <div class="apps hover15">
   <span>
    <figure class="innerdiv"  onclick="changeBodyBg('pink');" style="background-color:pink;">
     <div></div>
   </figure>
 </span>
</div> 
</div>
<div class="cSlider__item">
 <div class="apps hover15">
   <span>
    <figure class="innerdiv"  onclick="changeBodyBg('orange');" style="background-color:orange;">
     <div></div>
   </figure>
 </span>
</div> 
</div>
<div class="cSlider__item">
 <div class="apps hover15">
   <span>
    <figure class="innerdiv"  onclick="changeBodyBg('Blue');" style="background-color:blue;">
     <div></div>
   </figure>
 </span>
</div> 
</div>
<div class="cSlider__item">
 <div class="apps hover15">
   <span>
    <figure class="innerdiv" onclick="changeBodyBg('brown');" style="background-color:brown;">
     <div></div>
   </figure>
 </span>
</div> 
</div>
<div class="cSlider__item">
 <div class="apps hover15">
   <span>
    <figure class="innerdiv" onclick="changeBodyBg('IndianRed');" style="background-color:IndianRed;">
     <div></div>
   </figure>
 </span>
</div> 
</div>
</div>
</div>
</div>
<script src='https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.7.1/slick/slick.js'></script><script  src="./script.js"></script>
<script type="text/javascript">
  document.documentElement.classList.add('js');
/// ----------------------------
const $rootSingle = $('.cSlider--single');
const $rootNav = $('.cSlider--nav');

$rootSingle.slick({
  slide: '.cSlider__item',
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
  adaptiveHeight: true,
  infinite: false,
  useTransform: true,
  speed: 400,
  cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
});

$rootNav.on('init', function(event, slick) {
  $(this).find('.slick-slide.slick-current').addClass('is-active');
})
.slick({
  slide: '.cSlider__item',
  slidesToShow: 7,
  slidesToScroll: 7,
  dots: false,
  focusOnSelect: false,
  infinite: false,
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 5,
      slidesToScroll: 5,
    }
  }, {
    breakpoint: 640,
    settings: {
      slidesToShow: 4,
      slidesToScroll: 4,
    }
  }, {
    breakpoint: 420,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
    }
  }]
});

$rootSingle.on('afterChange', function(event, slick, currentSlide) {
  $rootNav.slick('slickGoTo', currentSlide);
  $rootNav.find('.slick-slide.is-active').removeClass('is-active');
  $rootNav.find('.slick-slide[data-slick-index="' + currentSlide + '"]').addClass('is-active');
});

$rootNav.on('click', '.slick-slide', function(event) {
  event.preventDefault();
  var goToSingleSlide = $(this).data('slick-index');

  $rootSingle.slick('slickGoTo', goToSingleSlide);
});
</script>
<script type="text/javascript">
  $(document).ready(function() {
  if (window.File && window.FileList && window.FileReader) {
    $("#files").on("change", function(e) {
      var files = e.target.files,
        filesLength = files.length;
      for (var i = 0; i < filesLength; i++) {
        var f = files[i]
        var fileReader = new FileReader();
        fileReader.onload = (function(e) {
          var file = e.target;
          $("<span class=\"pip\">" +
            "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
            "<br/><span class=\"remove\">Remove image</span>" +
            "</span>").insertAfter("#files");
          $(".remove").click(function(){
            $(this).parent(".pip").remove();
          });  
        });
        fileReader.readAsDataURL(f);
      }
    });
  } else {
    alert("Your browser doesn't support to File API")
  }
});
</script>
<script>
    function changeBodyBg(color){
         document.getElementById("heading").style.background = color;
    }
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
