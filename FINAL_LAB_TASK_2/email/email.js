function validate()
{
	var show = document.getElementById("show");
	var email = document.getElementById("email").value;
	if(email != "")
	{
		var count = 0;
		for(i=0 ; i < email.length ; i++)
		{
			if(email[i]=="@")
				count++;
			else
				continue;
		}
		if(count==1)
		{
			var at = email.split("@");
			var dot = at[1].split(".");
			var comEdu;
			for(i=0; i<dot.length; i++)
			{
				comEdu = dot[i];
			}
			if(comEdu=="com" || comEdu=="edu")
				return true
			else
			{
				show.innerHTML = "Must be a valid email address (i.e anything@example.com or anything@example.edu)";
				return false;
			}
		}
		else
		{
			show.innerHTML = "Must be a valid email address (i.e anything@example.com or anything@example.edu)";
			return false;
		}
	}
	else
	{
		show.innerHTML = "Cannot be submitted empty";
		return false;
	}
}

function clicks()
{
	var show = document.getElementById("show");
	show.innerHTML = "";
}