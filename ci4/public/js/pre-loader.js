var loader = document.querySelector(".loader")

// Set the maximum time for the pre-loader in milliseconds (e.g., 5000 milliseconds = 5 seconds)

var maxLoaderTime = 1000;

window.addEventListener("load", function () {

  // Use setTimeout to make sure the pre-loader disappears after the specified maximum time

  setTimeout(function () {
    vanish();
  }, maxLoaderTime);
});

function vanish() {
  loader.classList.add("disappear");
}