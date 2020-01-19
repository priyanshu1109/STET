var admit = document.getElementById("release_admit")
var sapplication = document.getElementById("start_application")
var capplication = document.getElementById("close_application")
var rbut = document.getElementById("fill_result")

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
				if(doc.data().paper_type=="Paper-1(Primary)" && doc.data().status=="registered"){
					co1 = co1 + 1
					var co = co1+10000
				}else if(doc.data().paper_type=="Paper-2(Secondary)" && doc.data().status=="registered"){
					co2 = co2 + 1
					var co = co2+20000
				}
				setCenter(doc.data().uid,co)
			});
	})
	firebase.firestore().collection('action').where("name","==","Admit Card").get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				firebase.firestore().collection("action").doc(doc.id).update({
					status: "running"
				})
			});
	})
}

function setCenter(uid,co){
	firebase.firestore().collection('centers').get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				updateUser(uid,doc.data().count,co,doc)
			});
	})
}

function updateUser(uid,count,co,doc){
	/*for (i=0;i<centers.length;i++ )
	{
		if(centers[i].count>0){
			var c = centers[i].name
			var cou = centers[i].count - 1
			break;
		}
	}*/
	if (count>0){
		var city = doc.data().name
		var count = doc.data().count
		firebase.firestore().collection('centers').doc(doc.id).update({
			count : count-1
		})
		firebase.firestore().collection('users').where("uid","==",uid).get().then(function(querySnapshot) {
			querySnapshot.forEach(function(doc) {
				firebase.firestore().collection('users').doc(doc.id).update({
					center : "Gangtok",
					center_name : city,
					roll_number : co
				}).then(() => sendmail(doc.data().email));
			})
		})
	}
	
}

function sendmail(email){
	$.ajax({
		url: "send_admit_card.php?email="+email,
		type: "POST",
	});
}

rbut.onclick = function(){
	    /* set up XMLHttpRequest */
		var ul = document.getElementById("upload_result").value;
        var url = ul.replace(/C:\\fakepath\\/, '');
		var oReq = new XMLHttpRequest();
        oReq.open("GET", url, true);
        oReq.responseType = "arraybuffer";

        oReq.onload = function(e) {
            var arraybuffer = oReq.response;

            /* convert data to binary string */
            var data = new Uint8Array(arraybuffer);
            var arr = new Array();
            for (var i = 0; i != data.length; ++i) arr[i] = String.fromCharCode(data[i]);
            var bstr = arr.join("");
            /* Call XLSX */
            var workbook = XLSX.read(bstr, {
                type: "binary"
            });

            /* DO SOMETHING WITH workbook HERE */
            var first_sheet_name = workbook.SheetNames[0];
			/* Get worksheet */
            var worksheet = workbook.Sheets[first_sheet_name];
			var a = XLSX.utils.sheet_to_json(worksheet)
			alert(a[0].RANK)
			console.log(XLSX.utils.sheet_to_json(worksheet, {
                raw: true
            }));
        }

        oReq.send();
}