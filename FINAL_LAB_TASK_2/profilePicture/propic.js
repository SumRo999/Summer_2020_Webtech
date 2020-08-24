function validate()
{
	var show11 = document.getElementById("show11");
	var show22 = document.getElementById("show22");
	var id = document.getElementById("id").value;
	var image = document.getElementById("image").value;
	if(id != "" && id >0)
	{
		if(image != "")
		{
			return true;
		}
		else
		{
			var show22 = document.getElementById("show22");
			show22.innerHTML = "Picture cannot be empty";
			return false;
		}
	}
	else
	{
		var show11 = document.getElementById("show11");
		show11.innerHTML = "UserIdcannot be empty and has to be a positive number";
		return false;
	}
}

function clicks1()
{
	var show = document.getElementById("show11");
	show.innerHTML = "";
}
function clicks2()
{
	var show = document.getElementById("show22");
	show.innerHTML = "";
}