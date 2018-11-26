<!DOCTYPE html>
<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<body>





<!-- Band Description -->
<section class="w3-container w3-center w3-content" style="max-width:600px">
  <h2 class="w3-wide">AB Journey</h2>
  <p class="w3-opacity"><i>I love travelling</i></p>
  <p class="w3-justify">My name is Abdul, I love travelling so much, this website is my diary for my travelling! People may travel to learn something specific: a new language, a new cuisine, aspects of a different culture, or a deeper appreciation of faith or spirituality. As a bonus, they’ll take away more than their specific goal. They’ll discover totally different ways of doing things. They’ll also gain awareness of new customs, cultures, people and places.</p>
</section>




<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-black w3-xlarge">
  <a href="https://www.facebook.com/abdaziz.husaini.5"><i class="fa fa-facebook-official"></i></a>
  <a href="https://www.twitter.com/azizhsni"><i class="fa fa-twitter"></i></a>
  <a href="https://www.instagram.com/azizwalker1"><i class="fa fa-instagram"></i></a>
  <p class="w3-medium">
  Powered by <a href="https://www.facebook.com/abdaziz.husaini.5" target="_blank">Abdul</a>
  </p>
</footer>

<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>

</body>
</html>

