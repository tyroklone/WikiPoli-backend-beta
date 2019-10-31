let mainBody = document.querySelector('#main-body-container')
const api = "http://teamgandhi.000webhostapp.com/api";

const wikiToken = localStorage.getItem("wikiToken");
const userEmail = localStorage.getItem("userEmail");

if ( wikiToken && userEmail ) {
  document.querySelector( "#main-navbar" ).innerHTML = `<h4 class="navbar-item" style="text-ah4gn: right">${userEmail}</li class="navbar-item">`;
}


function showPostReq () {
  var form = new FormData();
  var settings = {
  url: `${api}/show_post.php`,
  method: "GET",
  timeout: 0,
  processData: false,
  mimeType: "multipart/form-data",
  contentType: false,
  data: form
};

$.ajax(settings).done(function(response) {
  // console.log( JSON.parse( response ) );
  const objResponse = JSON.parse(response)
  if (  objResponse.res === "All Posts Gotten" && objResponse.status === 200 ) {
    // console.log('yes')
    const allPosts = objResponse.data;
    mainBody.innerHTML = ''
    allPosts.forEach( ( post ) => {
      mainBody.innerHTML += `
      <div class="col-sm">
				<div class="post">
				<h4>Post</h4>
					<p>${post.post}
          </p>

          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLongTitle">Comment</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <textarea class="w-100 h-100" id="commentArea">
                  </textarea>
                </div>
                <div class="modal-footer">
                  <button type="button" id="addComment" class="btn btn-primary" data-dismiss='modal'>Add Comment</button>
                </div>
              </div>
            </div>
          </div>


          <div style=${ !wikiToken ? 'display:none' : 'display: block' } class="icon">
        
						<a href="" class="addComment" aria-hideen="true"  data-toggle="modal" data-target="#exampleModalCenter"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760606/zbjtlwqjffgwvyc9klvc.png" style="width: 25px;"></a>
						<a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761066/a4zha34vheoeyzypvpqu.png" style="width: 25px;"></a>
            <a href=""><img src="https://res.cloudinary.com/siyfa/image/upload/v1571761008/bzosk4pcqvpldu59bo0w.png" style="width: 25px;"></i></a>
            <a href="" aria-hideen="true"><img src="https://res.cloudinary.com/siyfa/image/upload/v1571760662/hq5ctfvhjv3r05bqdski.png" style="width: 25px;"></a>
          </div>
				</div>
			</div>
      `;
    } );
  }
} );
}

showPostReq()


