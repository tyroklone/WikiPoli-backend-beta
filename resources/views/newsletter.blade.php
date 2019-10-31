<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="{{ asset('css/styles/newsletter.css') }}"/>
<link rel="icon" type="img/png" href="images/favicon.png">
</head>
<body style="text-align: center;">

<h2>This page will be integrated on the page that comes up after login</h2>
<!-- Call to action popup for newsletter -->
<div id="popModal" class="pop-modal">

  <!-- Modal content -->
  <div class="pop-modal-content" id="popContent">
    <span class="pop-close" id="popClose">&times;</span>
    <div class="pop-modal-body">
      <p id="newsLetter"><strong>Subscribe to our Newsletter</strong></p>
    </div>
   
  </div>

</div>

 <!-- The newsletter Modal by @laplaceAbdullah -->

 <div id="newsModal" class="news-modal">

    <!-- Modal content -->
    <div class="news-modal-content">
    <span class="news-close" id="newsClose">&times;</span>

        <!-- newsletter form -->

        <form action="">
                <div class="news-container">
                  <h2>Subscribe to our Newsletter</h2>
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti, itaque. </p>
                </div>
              
                <div class="news-container" style="background-color:white;text-align: left;">
                  <input type="text" placeholder="Name" name="name" required>
                  <input type="text" placeholder="Email address" name="mail" required>
                  <label>
                    <input type="checkbox" checked="checked" name="subscribe"> Daily Newsletter
                  </label>
                </div>
              
                <div class="news-container">
                  <input type="submit" value="Subscribe">
                </div>
        </form>


    </div>

</div>


     <!-- for the pop call to action modal -->
<script>

// Get the modal
var popmodal = document.getElementById('popModal');
var popcontent = document.getElementById('popContent');

// Get the <span> element that closes the call to action
var popclose = document.getElementById('popClose');

// When the user clicks the button, open the modal 
window.onload = function() {
  popmodal.style.display = "block";
}


// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == popClose) {
    popmodal.style.display = "none";
  }
  if (event.target == modal) {
       modal.style.display = "none";
    }
}
</script>

    <!-- newsletter modal -->

    <script>
            // Get the modal
            var modal = document.getElementById('newsModal');
            
            // Get the button that opens the modal
            var btn = document.getElementById("newsLetter");
            
            // Get the <span> element that closes the modal
            var span = document.getElementById("newsClose");
            
            // When the user clicks the button, open the modal 
            btn.onclick = function() {
                modal.style.display = "block";
                popmodal.style.display = "none";
            }
            
            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
            
          
        </script>    
</body>

<!-- Mirrored from www.w3schools.com/howto/tryit.asp?filename=tryhow_css_modal_bottom by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 30 Apr 2019 03:50:09 GMT -->
</html>
