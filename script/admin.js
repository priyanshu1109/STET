var login = document.getElementById("login1")

login.onclick = function login(){
	var email_id = document.getElementById("email").value;
	var password = document.getElementById("Password2").value;
	alert(email_id+" "+password)
	firebase.firestore().collection('admin').where("email","==",email_id).get().then(function(querySnapshot) {
			if(querySnapshot.empty){
				alert("You are not an admin")
			}else{
			querySnapshot.forEach(function(doc) {
				var email = doc.data().email;
				firebase.auth().signInWithEmailAndPassword(email, password)
				.then(() => window.location.href = 'admin_home.php')	
				.catch(function(error) {
					var errorCode = error.code;
					var errorMessage = error.message;
					console.log(errorMessage)
				});
			});
			}
	})



}