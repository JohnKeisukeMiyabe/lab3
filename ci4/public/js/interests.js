// Gallery

var gallery = document.getElementsByClassName("gallery");
var galleryDialog = document.getElementById("galleryDialog");
function showgalleryDialog() {
  galleryDialog.showModal();
}
var iconGallery = document.getElementsByClassName("iconGallery");
for (let i = 0; i < iconGallery.length; ++i) {
  iconGallery[i].addEventListener('click', function () { galleryDialog.close() });
}
function showGallery(index) {
  for (var i = 0; i < gallery.length; ++i) {
    gallery[i].style.opacity = "0";
  }
  gallery[index].style.opacity = "1";
}

// Kpop bias

var bias = document.getElementsByClassName("bias");
var kpop = document.getElementById("kpopDialog");
function showkpopDialog() {
  kpop.showModal();
}
var chKpop = document.getElementsByClassName("iconKpop");
for (let i = 0; i < chKpop.length; ++i) {
  chKpop[i].addEventListener('click', function () { kpop.close() });
}
function showKpop(index) {
  for (var i = 0; i < bias.length; ++i) {
    bias[i].style.opacity = "0";
  }
  bias[index].style.opacity = "1";
}

// Anime ratings

var rate = document.getElementsByClassName("rate");
var anime = document.getElementById("animeDialog");
function showanimeDialog() {
  anime.showModal();
}
var chAnime = document.getElementsByClassName("iconAnime");
for (let i = 0; i < chAnime.length; ++i) {
  chAnime[i].addEventListener('click', function () { anime.close() });
}
function showAnime(index) {
  for (var i = 0; i < rate.length; ++i) {
    rate[i].style.opacity = "0";
  }
  rate[index].style.opacity = "1";
}

showKpop(0);
showAnime(0);