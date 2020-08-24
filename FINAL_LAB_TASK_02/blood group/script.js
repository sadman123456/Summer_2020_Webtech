 window.addEventListener('DOMContentLoaded', (event) => {
document.getElementById('blood').addEventListener("submit", function(evt) {
        evt.preventDefault();
        var form = evt.target;
        var msg = 'select your blood group';
       

        var selector = form.querySelector('[name="blood"]');
    	var value = selector[selector.selectedIndex].value;
 
        if(value == 0) {
			msg = 'select your blood group';
		} else {
			msg = 'Success!';
		}
		document.getElementById('bloodformmsg').innerHTML = msg;
		if(msg != 'Success!') {
			document.getElementById('bloodformmsg')= "display: inline; color: red";
		} else {
			document.getElementById('bloodformmsg') = "display: inline; color: green";
		}
        if (msg == 'Success!') {
  
        }
		
	}, false);

});