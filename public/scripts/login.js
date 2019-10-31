

const api = "http://teamgandhi.000webhostapp.com/api";

document.getElementById("login-form").addEventListener("submit", e => {
  e.preventDefault();
  const email = document.querySelector("#inputEmail").value;
  const password = document.querySelector("#inputPassword").value;

 
  var form = new FormData();
form.append("email", email);
form.append("password", password);

var settings = {
  "url": `${api}/login.php`,
  "method": "POST",
  "timeout": 0,
  "processData": false,
  "mimeType": "multipart/form-data",
  "contentType": false,
  "data": form
};

$.ajax(settings).done(function (response) {
	console.log( JSON.parse( response ) );
	const objResponse = ( JSON.parse( response ) )
	if(objResponse.res === "Incorrect credential") {
		alert("Wrong username or password!!")
	} else if(objResponse.res === "Login Successful" && objResponse.status === 200) {
		
			localStorage.setItem( "wikiToken", objResponse.token )
			localStorage.setItem( "userEmail", email )
			if(email == 'admin@gmail.com' || email == 'super@gmail.com'){
				setTimeout(() => {
					location.href = "admin-dashboard-general.html";
				}, 500);
			}
			else{
				setTimeout(() => {
					location.href = "dashboard-activity.html";
				}, 500);
			}
		
	} 
});
 
});

