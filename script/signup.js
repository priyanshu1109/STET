var signup = document.getElementById("register");

signup.onclick = function signupEmail(){
	var email = document.getElementById("Email").value;
	var password = document.getElementById("Password").value;
	var username = document.getElementById("username").value;
	var size=0
		firebase.auth().createUserWithEmailAndPassword(email, password)
		.then((result) => {
				var uid = result.user.uid;
				firebase.firestore().collection('users').add({
								uid: uid,
								email: result.user.email,
								username: username,
								password: password,
								//application_no:10000 
				});
				userUpdate(uid)
		 })
				
		.catch(function(error) {
		// Handle Errors here.
		var errorCode = error.code;
		var errorMessage = error.message;
		// ...
		alert("email already registered!!")
		});
}

function userUpdate(uid){
	firebase.firestore().collection("users").get().then(function(querySnapshot2) {      
		firebase.firestore().collection("users").where("uid","==",uid).get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				var size = querySnapshot2.size+10000000
				var size1 = size.toString()
				firebase.firestore().collection("users").doc(doc.id).update({
					application_no : size1
				});
				sendCredentials(uid,doc.data().email,doc.data().password,size)
			});
		});
	});
}

function sendCredentials(uid,email,password,size){
				$.ajax({
					 url: "send_credentials.php?email="+email+"&password="+password+"&application_no="+size,
					 type: "POST",
					 //data: { email:email,password:password,application_no:application_no},
					 success: function (response) {
						alert("Registered succesfully!!Check your email for login credentials!")
						window.location.href = "login.html"
					 }
				});
}