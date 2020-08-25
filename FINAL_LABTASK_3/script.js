window.addEventListener('DOMContentLoaded', (event) => {
// validation

    document.getElementById('name').addEventListener("submit", function(evt) {
        evt.preventDefault();
        var form = evt.target;
        var name = form.querySelector('[name="name"]').value.trim();
        var msg = '';
        if (name != '') {
        	msg = 'Success!';
            if (name.split(' ').length > 1) {
            	msg = 'Success!';
                if (name.charAt(0).toLowerCase() != name.charAt(0).toUpperCase()) {
                	msg = 'Success!';
                    if (!validateName(name)) {
                        msg = 'Name must contain a-z, A-Z, dot(.) or dash(-)';
                    } else {
                    	msg = 'Success!';
                    }
                } else {
                    msg = 'Name must start with a letter';
                }
            } else {
                msg = 'Name can not be less than two words';
            }
        } else {
            msg = 'Name can not be empty';
        }
        document.getElementById('nameformmsg').innerHTML = msg;
        if(msg != 'Success!') {
        	document.getElementById('nameformmsg')= "display: inline; color: red";
        } else {
        	document.getElementById('nameformmsg')= "display: inline; color: green";
        }
        if (msg == 'Success!') {
        }        
    }, false);




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
        if (msg == 'Success!') 
	}, false);

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
        if (msg == 'Success!') 
		
	}, false);


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
			document.getElementById('degreeformmsg') = "display: inline; color: green";
		}
        if (msg == 'Success!') {
      
        }
		
	}, false);
	document.getElementById('dob').addEventListener("submit", function(evt) {
        evt.preventDefault();
        var form = evt.target;
        var msg = 'select your Date of Birth';
       

        var day = document.forms["dobForm"]["dd"].value;
	var month = document.forms["dobForm"]["mm"].value;
	var year = document.forms["dobForm"]["yy"].value;
	if ((date== "" ) || (month==" ") || (year==" ")) 
	{
		alert("Date Required");
		return false;
	}
	else if((day<1) || (day>31))
	{
		alert("Day should be between 1-31");
		return false;
	}
	else if((month<1) || (month>12))
	{
		alert("Month should be between 1-12");
		return false;
	}
	else if((year<1900) || (year>2016))
	{
		alert("Year should be between 1900-2020");
		return false;
	}
	else
	{ 
		return true;
	}
	document.getElementById('dobformmsg').innerHTML = msg;
		if(msg != 'Success!') {
			document.getElementById('dobformmsg') = "display: inline; color: red";
		} else {
			document.getElementById('dobformmsg') = "display: inline; color: green";
		}
        if (msg == 'Success!') 
	}, false);

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
			document.getElementById('bloodformmsg') = "display: inline; color: red";
		} else {
			document.getElementById('bloodformmsg') = "display: inline; color: green";
		}
        if (msg == 'Success!') 
		
	}, false);


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
			document.getElementById('picformmsg').style.cssText = "display: inline; color: red";
		} else {
			document.getElementById('picformmsg').style.cssText = "display: inline; color: green";
		}
        if (msg == 'Success!') {
        }
		
	}, false);
});