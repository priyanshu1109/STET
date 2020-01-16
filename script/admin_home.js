var admit = document.getElementById("release_admit")
var sapplication = document.getElementById("start_application")
var capplication = document.getElementById("close_application")

sapplication.onclick = function(){
	firebase.firestore().collection('action').where("name","==","application").get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				firebase.firestore().collection("action").doc(doc.id).update({
					status: "running"
				})
			});
	})
}

capplication.onclick = function(){
	firebase.firestore().collection('action').where("name","==","application").get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				firebase.firestore().collection("action").doc(doc.id).update({
					status: "closed"
				})
			});
	})
}

admit.onclick = function(){
	var co1 = 0
	var co2 = 0
	firebase.firestore().collection('users').orderBy("examination_mode","asc").get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				if(doc.data().paper_type=="Paper-1(Primary)"){
					co1 = co1 + 1
					var co = co1+10000
				}else if(doc.data().paper_type=="Paper-2(Secondary)"){
					co2 = co2 + 1
					var co = co2+20000
				}
				setCenter(doc.data().city1,doc.data().uid,co)
			});
	})
	firebase.firestore().collection('action').where("name","==","admit card").get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				firebase.firestore().collection("action").doc(doc.id).update({
					status: "running"
				})
			});
	})
}

function setCenter(city1,uid,co){
	firebase.firestore().collection('centers').where("name","==",city1).get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				if (doc.data().count>0)
				{
					firebase.firestore().collection('centers').doc(doc.id).update({
						count : doc.data().count-1
					}).then(() => updateUser(city1,uid,doc.data().centers,co))
				}
			});
	})
}

function updateUser(city1,uid,centers,co){
	for (i=0;i<centers.length;i++ )
	{
		if(centers[i].count>0){
			var c = centers[i].name
			break;
		}
	}
	firebase.firestore().collection('users').where("uid","==",uid).get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				firebase.firestore().collection('users').doc(doc.id).update({
					center : city1,
					center_name : c,
					roll_number : co
				}).then(() => sendmail(doc.data().email));
			})
	})
}

function sendmail(email){
	$.ajax({
		url: "send_admit_card.php?email="+email,
		type: "POST",
	});
}