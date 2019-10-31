const wikiToken = localStorage.getItem("wikiToken");
const userEmail = localStorage.getItem("userEmail");

if ( wikiToken && userEmail ) {
  document.querySelector( "#main-navbar" ).innerHTML = `<h4 class="navbar-item" style="text-ah4gn: right">${userEmail}</li class="navbar-item">`;
}