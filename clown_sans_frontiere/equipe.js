import * as bootstrap from "https://cdn.skypack.dev/bootstrap@5.1.3";

window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("header").style.opacity = "60%";
  } else if(document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
    document.getElementById("header").style.opacity = "85%";
  } else {
    document.getElementById("header").style.opacity = "100%";
  }
}