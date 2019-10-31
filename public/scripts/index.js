const wikiToken = sessionStorage.getItem( 'wikiToken' );
const userEmail = sessionStorage.getItem('userEmail')

if ( wikiToken && userEmail ) {
  location.href = "dashboard-activity.html"
}
