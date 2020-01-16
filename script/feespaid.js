function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}
var errorMessage = decodeURIComponent(getUrlVars()["errorMessage"])
var uid = decodeURIComponent(getUrlVars()["user_id"])
var application_no = decodeURIComponent(getUrlVars()["application_no"])
if (errorMessage=="undefined"){
	document.getElementById("image").src = "images/tick.png"
	document.getElementById("status").src = "Payment Done Succesfully"
	document.getElementById("print").innerHTML = "Print"
	document.getElementById("print").onclick = function(){
		var divContents = document.getElementById("status1").innerHTML; 
        var a = window.open('', '', 'height=500, width=500');
		a.document.write(divContents)
		a.print()
		a.close()
	}
	firebase.firestore().collection("users").where("application_no","==",application_no).get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				var email = doc.data().email;
				firebase.firestore().collection("users").doc(doc.id).update({
					status: "registered"
				}).then(()=> send(email));
			})
	});
}else{
	document.getElementById("image").src = "images/wrong1.png"
	document.getElementById("status").innerHTML = "Payment Failed.Try Aganin?"	
	document.getElementById("top_status").innerHTML = "Payment Failed.Try Aganin?"	
	document.getElementById("print").innerHTML = "Try Again"
	document.getElementById("print").onclick = function(){
		window.location.href = "payfee.php?user_id="+uid+"&application_no="+application_no
	}
}

function send(email){
	$.ajax({
		url: "send_confirmation.php?email="+email,
		type: "POST",
		//data: { email:email,password:password,application_no:application_no},
		/*success: function (response) {
			window.location.href = "login.html"
		}*/
	});
}