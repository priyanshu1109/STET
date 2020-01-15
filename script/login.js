var login = document.getElementById("login")

login.onclick = function login(){
	var appno = document.getElementById("application_no").value;
	var password = document.getElementById("Password1").value;
	firebase.firestore().collection('users').where("application_no","==",appno).get().then(function(querySnapshot) {
			if(querySnapshot.empty){
				alert("Invalid application number")
			}else{
			querySnapshot.forEach(function(doc) {
				var email = doc.data().email;
				firebase.auth().signInWithEmailAndPassword(email, password)
				.then(() => window.location.href = 'form1.html')	
				.catch(function(error) {
					var errorCode = error.code;
					var errorMessage = error.message;
					console.log(errorMessage)
				});
			});
			}
	})

}