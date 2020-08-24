function validate()
{
	var show = document.getElementById("show");
	var bg = document.getElementById("bg").value;
	if( bg != "")
	{
		if( bg!=A+ || bg!=A-|| bg!=B+ || bg!=B-|| bg!=AB+ || bg!=AB-|| bg!=O+ || bg!=O-||)
		{
			return true;
		}
		else
		{
			show.innerHTML = "|Must be selected";
		    return false;
		}
	}
	else
	{
		show.innerHTML = "|Must be selected";
		return false;
	}
	
}

function clicks()
{
	var show = document.getElementById("show");
	show.innerHTML = "";
}