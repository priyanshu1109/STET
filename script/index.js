var db = firebase.firestore()

db.collection("notice").orderBy("date","desc").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
        var code = `<li><a href="#">`+doc.data().title+`</li><a><hr/>`
		$("#notice-list").append(code);
		console.log(doc.id, " => ", doc.data());
    });
});

db.collection("action").where("status","==","running").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
		var message = doc.data().message
		var name = doc.data().name
		if (name=="application")
		{
			var n1 = "form.html"
		}else if (name=="admit card")
		{
			var n1 = "admit.html"
		}
		else if (name=="result")
		{
			var n1 = "result.html"
		}
		var code = `<a href="${n1}"  class="btn btn-primary" id="fill_form">${message}</a>`
		$("#button").append(code);
		console.log(doc.id, " => ", doc.data());
    });
});