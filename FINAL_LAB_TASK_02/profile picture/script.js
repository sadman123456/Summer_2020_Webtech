 window.addEventListener('DOMContentLoaded', (event) => {


document.getElementById('pic').addEventListener("submit", function(evt) {
        evt.preventDefault();
        var form = evt.target;
        var msg = '';
       

       
        if(form.querySelector('[name="uid"]').value.trim() == '') {
			msg = 'user id required';
		} else {
			msg = 'Success!';
			if(form.querySelector('[name="pic"]').value == '') {
				msg = 'profile pic required';
			} else {
				msg = 'Success!';
			}
		}
		document.getElementById('picformmsg').innerHTML = msg;
		if(msg != 'Success!') {
			document.getElementById('picformmsg')= "display: inline; color: red";
		} else {
			document.getElementById('picformmsg')= "display: inline; color: green";
		}
        if (msg == 'Success!') {
        	
        }
		
	}, false);
});
 