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

$('#upload_aadhar').change( function(event) {
	var tmppath = URL.createObjectURL(event.target.files[0]);
	uploadAadhar(tmppath)       
});

function uploadAadhar(a){
	var first_name = document.getElementById("first_name").value;
	var last_name = document.getElementById("last_name").value;
	var text = "Aadhaar is a proof of identity not of citizenship To establish identity authenticate online This is electronically generated letter"
	var father_name = document.getElementById("father_name").value;
	var aadhar_number = document.getElementById("aadhar_number").value;
	var mother_name = document.getElementById("mother_name").value;
	var dob = document.getElementById("dob").value;
	var pin = document.getElementById("pincode").value;
	var city = document.getElementById("city").value;
	var state = document.getElementById("city").state;
	var address = document.getElementById("address").value;
	var gender = document.getElementById("gender").value;
	var mobile_number = document.getElementById("mobile_number").value;
	var education = document.getElementById("education").value;
	var marks_type = document.getElementById("marks_type").value;
	var paper_type = document.getElementById("paper_type").value;
	var examination_type = document.getElementById("examination_mode").value;
	var percentage = document.getElementById("percentage").value;
	var sign = document.getElementById("upload_signature").value;
	var appeared = document.getElementById("appeared").value;
	var impaired = document.getElementById("impaired").value;
	var name = first_name+" "+last_name;
	pdfjsLib.getDocument(a).then(function (pdf) {
		var pdfDocument = pdf;
		var pagesPromises = [];

		for (var i = 0; i < pdf.numPages; i++) {
			// Required to prevent that i is always the total of pages
			(function (pageNumber) {
				pagesPromises.push(getPageText(pageNumber, pdfDocument));
			})(i + 1);
		}

		Promise.all(pagesPromises).then(function (pagesText) {
				// Remove loading
			//$("#loading-info").remove();
			
			// Render text
			for(var i = 0;i < pagesText.length;i++){
				//alert(pagesText[i].replace(/[^a-zA-Z0-9 ]/g, ""))
				var res = pagesText[i].replace(/[^a-zA-Z0-9 ]/g, "").replace(/\s+/g, " ").toLowerCase()
				//alert(name)
				if(name!=" " && father_name!="" && aadhar_number!=" " && dob!=" " && res.includes(name.toLowerCase()) && res.includes(text.toLowerCase()) && res.includes(father_name.toLowerCase()) && res.includes(aadhar_number.slice(8,))){
					var v1 = document.getElementById("validation1")
					v1.innerHTML = "document verification successful"
				}else{
					var v1 = document.getElementById("validation1")
					v1.innerHTML = "document verification failed"
				}
				//alert(v1.innerHTML)
				if (v1.innerHTML=="document verification successful")
				{	
					v1.style.color = "#339900";
					v1.style.backgroundColor = "#e9fee9";
					$("#submit1").removeAttr('disabled');
						$("#submit1").click(function(event)
							
						{
							if(mother_name!=" " && address!=" " && mobile_number!=" " && state!=" " && city!=" " && pincode!=" " && percentage!=" " && sign!=" "){
								event.preventDefault(); // cancel default behavior
								addBioData();
							}else{
							$('#myform').on('submit', function () {
							addBioData();
						});
						}
						})
				}else{
					v1.style.color = "red";
					v1.style.backgroundColor = "#fee1dc";
					$("#submit1").attr('disabled',"disabled");
				}
				//$("#pdf-text").append("<div><h3>Page "+ (i + 1) +"</h3><p>"+pagesText[i]+"</p><br></div>")
			}
		});

	}, function (reason) {
		// PDF loading error
		console.error(reason);
	});
}

function getPageText(pageNum, PDFDocumentInstance) {
    // Return a Promise that is solved once the text of the page is retrieven
    return new Promise(function (resolve, reject) {
        PDFDocumentInstance.getPage(pageNum).then(function (pdfPage) {
            // The main trick to obtain the text of the PDF page, use the getTextContent method
            pdfPage.getTextContent().then(function (textContent) {
                var textItems = textContent.items;
                var finalString = "";

                // Concatenate the string of the item to the final string
                for (var i = 0; i < textItems.length; i++) {
                    var item = textItems[i];

                    finalString += item.str + " ";
                }

                // Solve promise with the text retrieven from the page
                resolve(finalString);
            });
        });
    });
}

function addBioData(){
	var form = document.getElementById("myform")
	var Xpercentage = (Number(document.getElementById("Xtotal_obtained").value)/Number(document.getElementById("Xtotal_marks").value))*100;
	var XIIpercentage = (Number(document.getElementById("XIItotal_obtained").value)/Number(document.getElementById("XIItotal_marks").value))*100;
	firebase.firestore().collection('users').where("uid","==",uid).get().then(function(querySnapshot) {
			if(querySnapshot.empty){
				alert("You are not logged in!")
			}else if(Xpercentage<60 || XIIpercentage<60){
				alert("Sorry you are not fulfilling the eligibility criteria")	
			}else{
			querySnapshot.forEach(function(doc) {
				firebase.firestore().collection('users').doc(doc.id).update({
					first_name : form.first_name.value,
					last_name : form.last_name.value,
					father_name : form.father_name.value,
					aadhar_number : form.aadhar_number.value,
					mother_name : form.mother_name.value,
					dob : form.dob.value,
					pin : form.pincode.value,
					city : form.city.value,
					state : form.state.value,
					address : form.address.value,
					gender : form.gender.value,
					mobile_number : form.mobile_number.value,
					education : form.education.value,
					marks_type : form.marks_type.value,
					aadhar : "aadhar.jpg",
					profile : "profile.jpg",
					sign : "sign.jpg",
					paper_type : form.paper_type.value,
					examination_mode : form.examination_mode.value,
					percentage	: form.percentage.value,
					status : "fees not paid",
					Xpercentage : Xpercentage,
					XIIpercentage : XIIpercentage,
					impaired : form.impaired.value,
					appeared : form.appeared.value
				}).then(() => addDocuments())
			});
			}
	})
}

function addDocuments(){
	var form = document.getElementById("myform")
	var ua = document.getElementById("upload_aadhar").files[0];
	var up = document.getElementById("upload_photo").files[0];
	var us = document.getElementById("upload_signature").files[0];
	//firebase.storage().ref().child("users/"+uid+"/aadhar.pdf").put(ua);
	firebase.storage().ref().child("users/"+uid+"/profile.jpg").put(up);
	firebase.storage().ref().child("users/"+uid+"/sign.jpg").put(us);
	firebase.firestore().collection("users").where("uid","==",uid).get().then((snapshot)=>{
		snapshot.docs.forEach(doc=>{
			window.application_no = doc.data().application_no	
		})
	}).then(() => window.location.href = "payfee.php?user_id="+uid+"&application_no="+application_no)	
}

var logout = document.getElementById("logout")

logout.onclick = function(){
	firebase.auth().signOut().then(function(){
		window.location.href = "index.php"
	});
}