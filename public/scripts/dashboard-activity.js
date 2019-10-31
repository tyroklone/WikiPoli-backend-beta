


const api = "http://teamgandhi.000webhostapp.com/api";
const wikiToken = localStorage.getItem( 'wikiToken' );
const userEmail = localStorage.getItem('userEmail')

if ( !wikiToken && !userEmail ) {
  location.href="signin.html"
} else {
 
  document.querySelector( "#user-email" ).innerText = userEmail;
  document.querySelector( "#logout-button" ).addEventListener( 'click', ( e ) => {
    e.preventDefault();
    localStorage.removeItem("wikiToken");
    localStorage.removeItem( "userEmail" );
    
    setTimeout(() => {
      location.href="index.html"
    }, 500);
  } )
  
  document.querySelector('#add-post-button').addEventListener("click", (e) => {
    e.preventDefault();
    const addPosts = () => {
      const postBody = document.querySelector("#post-content").value

      var form = new FormData();
      form.append(
        "token",
        localStorage.getItem('wikiToken')
      );
      form.append("post", postBody);
      form.append("topic", "PlacceHolder");
      form.append("post_status", "OK")

      var settings = {
        url: `${api}/create_post.php`,
        method: "POST",
        timeout: 0,
        processData: false,
        mimeType: "multipart/form-data",
        contentType: false,
        data: form
      };

      $.ajax(settings).done(function(response) {
        console.log(response);
      });
    }
    addPosts()
    /*setTimeout(() => {
      document.location.reload()
    }, 1000);
    */
  })

}
