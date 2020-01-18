var db = firebase.firestore()

db.collection("notice").orderBy("date","desc").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
        var code = `<li><a href="#">`+doc.data().title+`</li><a>`
		$("#notice-list").append(code);
		console.log(doc.id, " => ", doc.data());
    });
});

db.collection("constants").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
        var about = doc.data().about
		document.getElementById("about").innerHTML = about;
		console.log(doc.id, " => ", doc.data());
    });
});


db.collection("action").where("status","==","running").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
		var message = doc.data().message
		var name = doc.data().name
		if (name=="Application Form")
		{
			var n1 = "form.php"
		}else if (name=="Admit Card")
		{
			var n1 = "admit.php"
		}
		else if (name=="result")
		{
			var n1 = "result.php"
		}
		var code = `<li class="active"><a href="${n1}" id="fill_form">${message}</a></li>`
		$("#button").append(code);
		console.log(doc.id, " => ", doc.data());
    });
});
