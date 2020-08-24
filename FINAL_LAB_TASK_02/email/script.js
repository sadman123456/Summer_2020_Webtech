 window.addEventListener('DOMContentLoaded', (event) => {
document.getElementById('email').addEventListener("submit", function(evt) {
		evt.preventDefault();
		var form = evt.target;
		var email = form.querySelector('[name="email"]').value.trim();
		var msg = '';
		if (email != ''){
			msg = "Success!";
			if (email.indexOf(" ") == -1) {
				msg = 'Success!';
				if (multipleAT(email)) {
					msg = 'Success!';
					if (email.indexOf("@") > 0) {
						msg = 'Success!';
						if (email.indexOf(".") > -1) {
							msg = 'Success!';
							var domainExt = email.split("@")[1];
							var domain = domainExt.split(".")[0];
							var ext = domainExt.replace(domain, '');
							console.log(ext);
							if(domain.length != 0 && validateDomainName(domain)){
								msg = 'Success!';
								if(ext.length > 1 && validateDomainExt(ext)){
									msg = 'Success!';
								} else {
									msg = 'Email must have more than 1 letter and letters only after last ".", should not have number.';
								}
							} else {
								msg = 'Email can only have dot(.), dash(-), chracters and numbers between "@" and last "." with no adjacent "@" or "."';
							}
						} else {
							msg = 'Email must have "."';
						}
					} else {
						msg = 'Email can not start with "@"';
					}
				} else {
					msg = 'Email can not have multiple "@"';
				}
			} else {
				msg = 'Email can not have spaces';
			}
		} else {
			msg = 'Email can not be empty';
		}
		document.getElementById('emailformmsg').innerHTML = msg;
		if(msg != 'Success!') {
			document.getElementById('emailformmsg') = "display: inline; color: red";
		} else {
			document.getElementById('emailformmsg') = "display: inline; color: green";
		}
        if (msg == 'Success!') {
        
        }
	}, false);

 });