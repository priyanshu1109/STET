function getUrlVars() {
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(m,key,value) {
		vars[key] = value;
	});
	return vars;
}

var name = document.getElementById("name1")
var roll_no = document.getElementById("roll_no")
var dob = document.getElementById("DOB")
var level = document.getElementById("level")
var vernacular_option = document.getElementById("vernacular_option")
var mothers_name = document.getElementById("mothers_name1")
var timing = document.getElementById("timing")
var venue = document.getElementById("venue")
var exam_date = document.getElementById("exam_date")
var app_number = decodeURIComponent(getUrlVars()["app_no"])
	firebase.firestore().collection('users').where("application_no","==",app_number).get().then(function(querySnapshot) {
		querySnapshot.forEach(function(doc) {
			alert(doc.data().first_name)
			$("#name1").append(doc.data().first_name+" "+doc.data().last_name);
			roll_no.innerHTML = doc.data().roll_number
			dob.innerHTML = doc.data().dob
			level.innerHTML = doc.data().paper_type
			vernacular_option.innerHTML = doc.data().examination_mode
			mothers_name.innerHTML = doc.data().mother_name
			venue.innerHTML = doc.data().center_name+",Gangtok"
			exam_date.innerHTML = "2 February 2020";
			if (doc.data().paper_type=="Paper-1(Primary)"){
		timing.innerHTML = "10:00 a.m.-12:30 p.m."
	}else{
		timing.innerHTML = "2:00 p.m.-4:30 p.m."
	}
	showImage(doc)
	})
})

function showImage(doc){
	firebase.storage().ref("users/").child(doc.data().uid+"/"+doc.data().profile).getDownloadURL().then(function(url){
		document.getElementById("idphoto").src = url
	});
	firebase.storage().ref("users/").child(doc.data().uid+"/"+doc.data().sign).getDownloadURL().then(function(url){
		document.getElementById("idsign").src = url
	});
}
	