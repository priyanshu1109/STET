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
	firebase.firestore().collection('users').get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				setCenter(doc.data().city1,doc.data().uid)
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

function setCenter(city1,uid){
	firebase.firestore().collection('centers').where("name","==",city1).get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				if (doc.data().count>0)
				{
					firebase.firestore().collection('centers').doc(doc.id).update({
						count : doc.data().count-1
					}).then(() => updateUser(city1,uid,doc.data().centers))
				}
			});
	})
}

function updateUser(city1,uid,centers){
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
					center_name : c
				}).then(() => sendmail(doc.data().email));
				/*$.ajax({
					url: "send_admit_card.php?email="+doc.data().email,
					type: "POST",
				});*/
			})
	})
}

function sendmail(email){
	$.ajax({
		url: "send_admit_card.php?email="+email,
		type: "POST",
	});
}