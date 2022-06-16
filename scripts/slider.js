var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var a = document.getElementsByClassName("mySlides1");
  var b = document.getElementsByClassName("mySlides2");
  var c = document.getElementsByClassName("mySlides3");
  var d = document.getElementsByClassName("mySlides4");
  var e = document.getElementsByClassName("mySlides5");
  var f = document.getElementsByClassName("mySlides6");
  for (i = 0; i < a.length; i++) {
    a[i].style.display = "none";
    b[i].style.display = "none";
    c[i].style.display = "none";
    d[i].style.display = "none";
    e[i].style.display = "none";
    f[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > a.length) {slideIndex = 1}
  a[slideIndex-1].style.display = "block";
  b[slideIndex-1].style.display = "block";
  c[slideIndex-1].style.display = "block";
  d[slideIndex-1].style.display = "block";
  e[slideIndex-1].style.display = "block";
  f[slideIndex-1].style.display = "block";
  setTimeout(carousel, 5000); // Change image every 5 seconds
}