 window.addEventListener('DOMContentLoaded', (event) => {
 	document.getElementById('gender').addEventListener("submit", function(evt) {
        evt.preventDefault();
        var form = evt.target;
        var msg = 'select your gender';
        if(form.querySelector('[value="Male"]').checked) {
			msg = 'Success!';
		}else if(form.querySelector('[value="Female"]').checked) {
			msg = 'Success!';
		} else if (form.querySelector('[value="Other"]').checked) {
			msg = 'Success!';
		} else {
			msg = 'select your gender';
		}
		document.getElementById('genderformmsg').innerHTML = msg;
		if(msg != 'Success!') {
			document.getElementById('genderformmsg').style.cssText = "display: inline; color: red";
		} else {
			document.getElementById('genderformmsg').style.cssText = "display: inline; color: green";
		}
        if (msg == 'Success!') {
        }
		
	}, false);






 });