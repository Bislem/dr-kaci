function myFunction() {
  var x = document.getElementById("mobile-links");
  var y = document.getElementById("mobile-nav-info");
  if (x.style.display === "block" && y.style.display === "flex") {
    x.style.display = "none";
    y.style.display = "none";
  } else {
    x.style.display = "block";
    y.style.display = "flex";
  }
}
function myFunction1() {
  var a = document.getElementById("sub");
  var b = document.getElementById("ma");
  var c = document.getElementById("welc");
}
let h = document.getElementById("cont-title");
let sub = document.querySelectorAll(".form-cta");
let form = document.getElementById("form-cont");
for (let i = 0; i < sub.length; i++) {
  sub[i].addEventListener("click", function () {
    console.log("hello");
    h.innerText = "Message transmis, un assistant vous contactera bientôt";
    h.style.lineHeight = "1.2";
    h.style.textAlign = "center";
    form.submit();
  });
}
var coll = document.getElementsByClassName("faq-btn");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.maxHeight) {
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    }
  });
}
var coll = document.getElementsByClassName("sickness");
var my = document.getElementById("myopie");
var as = document.getElementById("astigmatisme");
var cat = document.getElementById("cataracte");
var ret = document.getElementById("retina");
var gl = document.getElementById("glaucoma");
var i;
for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function () {
    if (this.textContent === "myopie") {
      resetColors();
      this.style.color = '#0068c2';
      this.style.fontWeight = 'bold';
      my.style.display = "grid";
      as.style.display = "none";
      cat.style.display = "none";
      ret.style.display = "none";
      gl.style.display = "none";
      console.log("bye");
    } else if (this.textContent === "astigmatisme") {
      resetColors();
      this.style.color = '#0068c2';
      this.style.fontWeight = 'bold';
      my.style.display = "none";
      as.style.display = "grid";
      cat.style.display = "none";
      ret.style.display = "none";
      gl.style.display = "none";
      console.log("bye");
    } else if (this.textContent === "cataracte") {
      resetColors();
      this.style.color = '#0068c2';
      this.style.fontWeight = 'bold';
      my.style.display = "none";
      as.style.display = "none";
      cat.style.display = "grid";
      ret.style.display = "none";
      gl.style.display = "none";
      console.log("bye");
    } else if (this.textContent === "décollement de la rétine") {
      resetColors();
      this.style.color = '#0068c2';
      this.style.fontWeight = 'bold';
      my.style.display = "none";
      as.style.display = "none";
      cat.style.display = "none";
      ret.style.display = "grid";
      gl.style.display = "none";
      console.log("bye");
    } else if (this.textContent === "glaucoma") {
      resetColors();
      this.style.color = '#0068c2';
      this.style.fontWeight = 'bold';
      my.style.display = "none";
      as.style.display = "none";
      cat.style.display = "none";
      ret.style.display = "none";
      gl.style.display = "grid";
      console.log("bye");
    }
  });
}

function resetColors() {
  for (i = 0; i < coll.length; i++) {
    coll[i].style.color = '#01224f';
    coll[i].style.fontWeight = 'normal';
  }
}
document.querySelectorAll(".nav-items").forEach((link) => {
  if (link.href === window.location.href) {
    link.classList.add("active");
    link.setAttribute("aria-current", "page");
  }
});
let play = document.querySelector(".play");
let vid = document.getElementById("video");
let elm = document.querySelector(".overlay-elm");
let pause = document.querySelector(".overlay-pause");
let pauseBtn = document.querySelector(".pause-btn");
play.addEventListener("click", function () {
  elm.style.display = "none";
  pause.style.display = "flex";
  vid.play();
});
pause.addEventListener("click", function () {
  elm.style.display = "flex";
  pause.style.display = "none";
  vid.pause();
});
