// auth_token = "wikipoli_auth_token";

// let data = 
// {
// 	name: "Johnson",
// 	email: "jaycodist@sdt.com",
// 	password: "tester"
// }
// fetch("http://teamgandhi.000webhostapp.com/api/signup.php",
// {
// 	method: 'POST',
// 	headers: 
// 	{
// 	  'Content-Type': 'application/json',
// 	  "origin": "wiki"
// 	},
// 	//body: JSON.stringify(data)
// })
// 	.then(data => data.json()).then(json => console.log(json));

const api = "http://teamgandhi.000webhostapp.com/api";


document.getElementById( 'signup-form' ).addEventListener( 'submit', ( e ) => {
	e.preventDefault();
	const name = document.querySelector('#name').value
  const email = document.querySelector("#desc").value;
  const desc = document.querySelector("#location").value;
	const location = document.querySelector("#email").value;
	const password = document.querySelector("#password").value;
	const confirmPassword = document.querySelector("#confirmPassword").value;
	
	if ( password !== confirmPassword ) {
		alert( "Passwords don't match!!" )
	} else {
		
		
			var form = new FormData();
      form.append("name", name);
      form.append("email", email);
      form.append("password", password);

      var settings = {
        url: `${api}/signup.php`,
        method: "POST",
        timeout: 0,
        processData: false,
        mimeType: "multipart/form-data",
        contentType: false,
        data: form
      };

      $.ajax(settings).done(function(response) {
				console.log( JSON.parse( response ) );
				const objResponse = JSON.parse(response)
				if ( objResponse.res == "User already Exists" ) {
					alert("User already exists!!")
				} else if ( objResponse.status === 200 && objResponse.res === "User Created Successfully" ) {
					
						console.log("account created successfully!!");
            setTimeout(() => {
              location.href = "signin.html";
            }, 2000);
				
				} 
			
      });

		
		
		
	}
	
})
