var db = firebase.firestore()

db.collection("notice").orderBy("priority","desc").get().then(function(querySnapshot) {
    querySnapshot.forEach(function(doc) {
        // doc.data() is never undefined for query doc snapshots
			var code = `<tr>
                            <td>
                              <div class="form-check">
                                <label class="form-check-label">
                                  <input class="form-check-input" type="checkbox" value="" checked="">
                                  <span class="form-check-sign">
                                    <span class="check" style="background-color: #066CF6;"></span>
                                  </span>
                                </label>
                              </div>
                            </td>
                            <td>${doc.data().title}</td>
                            <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="" class="btn btn-primary btn-link btn-sm" data-original-title="Edit Task">
                                <i class="fa fa-pencil" aria-hidden="true" style="color: #066CF6;"></i>
                              </button>
                              <button type="button" rel="tooltip" title="" class="btn btn-danger btn-link btn-sm" data-original-title="Remove" aria-describedby="tooltip360758">
                                <i class="fa fa-times-circle" aria-hidden="true"></i>
                              </button>
                            </td>
                          </tr>`
		$("#notice-update").append(code);
			});
		
    });

var new_notice_btn = document.getElementById("new_notice_btn")

	new_notice_btn.onclick = function(){
	
	var new_notice = document.getElementById("new_notice").value
	var new_pdf = document.getElementById("new_pdf")
	firebase.firestore().collection("notice").add({
		title : new_notice,
		date : Math.floor(Date.now()/1000)
		}).then(() => upload2())
	}

function upload2(){
	window.location.href = "admin.php"
}

/*              Generating Result             */
var res_btn = document.getElementById("genresult")
res_btn.onclick = function(){
		var ul = document.getElementById("file").value;
        var url = ul.replace(/C:\\fakepath\\/, '');
		alert(url)
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



var ExcelToJSON = function() {

      this.parseExcel = function(file) {
        var reader = new FileReader();

        reader.onload = function(e) {
          var data = e.target.result;
          var workbook = XLSX.read(data, {
            type: 'binary'
          });
          workbook.SheetNames.forEach(function(sheetName) {
            // Here is your object
            var XL_row_object = XLSX.utils.sheet_to_row_object_array(workbook.Sheets[sheetName]);
            var json_object = JSON.stringify(XL_row_object);
            console.log(JSON.parse(json_object));
            jQuery( '#xlx_json' ).val( json_object );
          })
        };

        reader.onerror = function(ex) {
          console.log(ex);
        };

        reader.readAsBinaryString(file);
      };
  };

  function handleFileSelect(evt) {
    
    var files = evt.target.files; // FileList object
    var xl2json = new ExcelToJSON();
    xl2json.parseExcel(files[0]);
  }

