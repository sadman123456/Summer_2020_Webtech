 window.addEventListener('DOMContentLoaded', (event) => {
document.getElementById('dob').addEventListener("submit", function(evt) {
        evt.preventDefault();
        
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
        }

});