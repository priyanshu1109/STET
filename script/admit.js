var login = document.getElementById("admit_login")

login.onclick = function login(){
	var appno = document.getElementById("admit_app_no").value;
	var password = document.getElementById("admit_pass").value;
	firebase.firestore().collection('users').where("application_no","==",appno).get().then(function(querySnapshot) {
			if(querySnapshot.empty){
				alert("Invalid application number")
			}else{
			querySnapshot.forEach(function(doc) {
				var email = doc.data().email;
				firebase.auth().signInWithEmailAndPassword(email, password)
				.then(() => window.location.href = 'admit1.php?app_no='+appno)	
				.catch(function(error) {
					var errorCode = error.code;
					var errorMessage = error.message;
					console.log(errorMessage)
				});
			});
			}
	})
}