
<!doctype html>
<html>

<head>
    <title>Excel to JSON Demo</title>
	<input type="file" id="file"></input><br/>
	<input type="button" id="button">Upload Result</input>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.13.5/xlsx.full.min.js"></script>
</head>

<body>

    <script>
        /* set up XMLHttpRequest */
		var bt = document.getElementById("button")
        bt.onclick = function(){
		var ul = document.getElementById("file").value;
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
			firebase.firestore().collection("results").update({
				roll_no : a[i].ROLL_NUMBER,
				total : a[i].TOTAL,
				rank : a[i].RANK
			})
			console.log(XLSX.utils.sheet_to_json(worksheet, {
                raw: true
            }));
        }

        oReq.send();
		}
    </script>
</body>

</html>