var res = document.getElementById("result_login")

res.onclick = function(){
	firebase.firestore().collection("results").where("roll_number","==",roll_number)
}