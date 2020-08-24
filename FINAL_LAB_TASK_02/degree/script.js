 window.addEventListener('DOMContentLoaded', (event) => {
	document.getElementById('degree').addEventListener("submit", function(evt) {
        evt.preventDefault();
        var form = evt.target;
        var msg = 'select your degree';
        if(form.querySelector('[value="SSC"]').checked) {
			msg = 'Success!';
		}else if(form.querySelector('[value="HSC"]').checked) {
			msg = 'Success!';
		} else if (form.querySelector('[value="BSc"]').checked) {
			msg = 'Success!';
		} else {
			msg = 'select your degree';
		}
		document.getElementById('degreeformmsg').innerHTML = msg;
		if(msg != 'Success!') {
			document.getElementById('degreeformmsg') = "display: inline; color: red";
		} else {
			document.getElementById('degreeformmsg')= "display: inline; color: green";
		}
        if (msg == 'Success!') {
        
        }
		
	}, false);

 });