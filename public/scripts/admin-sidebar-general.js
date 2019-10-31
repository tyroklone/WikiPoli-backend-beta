
const api = "http://teamgandhi.000webhostapp.com/api";
const wikiToken = localStorage.getItem( 'wikiToken' );
const userEmail = localStorage.getItem('userEmail')

if ( !wikiToken && !userEmail ) {
  location.href="signin.html"
} else {
  document.querySelector( "#name-plate" ).innerText = userEmail;
  document.querySelector( "#logout" ).addEventListener( 'click', ( e ) => {
    e.preventDefault();
    localStorage.removeItem("wikiToken");
    localStorage.removeItem( "userEmail" );
    setTimeout(() => {
      location.href="signin.html"
    }, 500);
  } )  
}
