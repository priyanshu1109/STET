function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}

firebase.auth().onAuthStateChanged(function(user) {
  if (user) {
	  window.uid = user.uid
	  firebase.firestore().collection("users").where("uid","==",user.uid).get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				var status = doc.data().status
				if (status=="registered"){
				window.location.href = "already_registered.php"
				}else{
					
				}
			})
	   });	
  }else {
	  alert("You are signed out");
	  window.location.href = "login.php"
  }
});
function showCard(){
	var name = document.getElementById("name")
var roll_no = document.getElementById("roll_no")
var dob = document.getElementById("DOB")
var level = document.getElementById("level")
var vernacular_option = document.getElementById("vernacular_option")
var mothers_name = document.getElementById("mothers_name1")
var app_number = decodeURIComponent(getUrlVars()["app_no"])
	firebase.firestore().collection('users').where("application_no","==",app_number).get().then(function(querySnapshot) {
		querySnapshot.forEach(function(doc) {
			alert(doc.data().first_name)
			name.innerHTML = doc.data().first_name+" "+doc.data().last_name
			roll_no.innerHTML = doc.data().roll_number
			dob.innerHTML = doc.data().dob
			level.innerHTML = doc.data().paper_type
			vernacular_option.innerHTML = doc.data().examination_mode
			mothers_name.innerHTML = doc.data().mother_name
		});
	})
}