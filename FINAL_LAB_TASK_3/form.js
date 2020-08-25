function validate()
{
	//name validation
	var namevalidation = false;
	var show = document.getElementById("show");
	var name = document.getElementById("name").value;
	if(name != "")
	{
		var word = name.split(" ");
		var count = word.length;
		if(count>=2)
		{
			var decision = "validName";
			if(name[0]=='a' || name[0]=='b'  || name[0]=='c' || name[0]=='d'  || name[0]=='e' || name[0]=='f'  || 
				name[0]=='g' || name[0]=='h'  || name[0]=='i' || name[0]=='j'  || name[0]=='k' || name[0]=='l'  || 
				name[0]=='m' || name[0]=='n'  || name[0]=='o' || name[0]=='p'  || name[0]=='q' || name[0]=='r'  || 
				name[0]=='s' || name[0]=='t'  || name[0]=='u' || name[0]=='v'  || name[0]=='w' || name[0]=='x'  || 
				name[0]=='y' || name[0]=='z'  || name[0]=='A' || name[0]=='B'  || name[0]=='C' || name[0]=='D'  || 
				name[0]=='E' || name[0]=='F'  || name[0]=='G' || name[0]=='H'  || name[0]=='I' || name[0]=='J'  || 
				name[0]=='K' || name[0]=='L'  || name[0]=='M' || name[0]=='N' || name[0]=='O' || name[0]=='P'  || 
				name[0]=='Q' || name[0]=='R'  || name[0]=='S' || name[0]=='T'  || name[0]=='U' || name[0]=='V'  || 
				name[0]=='W' || name[0]=='X'  || name[0]=='Y' || name[0]=='Z')
			{
				for(i=0 ; i < name.length ; i++)
				{
					if(name[i]=='a' || name[i]=='b'  || name[i]=='c' || name[i]=='d'  || name[i]=='e' || name[i]=='f'  || 
						name[i]=='g' || name[i]=='h'  || name[i]=='i' || name[i]=='j'  || name[i]=='k' || name[i]=='l'  || 
						name[i]=='m' || name[i]=='n'  || name[i]=='o' || name[i]=='p'  || name[i]=='q' || name[i]=='r'  || 
						name[i]=='s' || name[i]=='t'  || name[i]=='u' || name[i]=='v'  || name[i]=='w' || name[i]=='x'  || 
						name[i]=='y' || name[i]=='z'  || name[i]=='A' || name[i]=='B'  || name[i]=='C' || name[i]=='D'  || 
						name[i]=='E' || name[i]=='F'  || name[i]=='G' || name[i]=='H'  || name[i]=='I' || name[i]=='J'  || 
						name[i]=='K' || name[i]=='L'  || name[i]=='M' || name[i]=='N' || name[i]=='O' || name[i]=='P'  || 
						name[i]=='Q' || name[i]=='R'  || name[i]=='S' || name[i]=='T'  || name[i]=='U' || name[i]=='V'  || 
						name[i]=='W' || name[i]=='X'  || name[i]=='Y' || name[i]=='Z' || name[i]=='-' || name[i]=='.' || 
						name[i]==' ')				
					{
						continue;
					}
					else
					{
						decision="invalidName";
					}
				}

				if(decision=="validName")
				{
					namevalidation=true;
				}
				else
				{
					show.innerHTML = "Can contain alphabates or dot(.) or dash(-)";
					namevalidation=false;	
				}
				

			}
			else
			{
				show.innerHTML = "Please start with a letter";
				namevalidation=false;
			}
		}
		else
		{
			show.innerHTML = "Contains at least two words";
			namevalidation=false;
		}	

	}
	else
	{
		show.innerHTML = "Cannot be submitted empty";
		namevalidation=false;
	}

	//email validation
	var emailvalidation = false;
	var show1 = document.getElementById("show1");
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
				emailvalidation=true;
			else
			{
				show1.innerHTML = "Must be a valid email address (i.e anything@example.com or anything@example.edu)";
				emailvalidation=false;
			}
		}
		else
		{
			show1.innerHTML = "Must be a valid email address (i.e anything@example.com or anything@example.edu)";
			emailvalidation=false;
		}
	}
	else
	{
		show1.innerHTML = "Cannot be submitted empty";
		emailvalidation=false;
	}

	//gender validation
	var gendervalidation = false;
	var show2 = document.getElementById("show2");
	var male = document.getElementById("male").checked;
	var female = document.getElementById("female").checked;
	var other = document.getElementById("other").checked;
	if( male == true || female == true || other == true)
	{
		gendervalidation=true;
	}
	else
	{
		show2.innerHTML = "At least one of them has to be selected";
		gendervalidation=false;
	}

	//dob validation
	var dobvalidation = false;
	var show3 = document.getElementById("show3");
	var day = document.getElementById("day").value;
	var month = document.getElementById("month").value;
	var year= document.getElementById("year").value;
	if( day != "" && month != "" && year != "")
	{
		if( day>=1 && day<=31 && month>=1 && month<=12 && year>=1990 && year<=2016)
		{
			dobvalidation = true;
		}
		else
		{
			show3.innerHTML = "Must be a valid number (dd: 0-31, mm: 1-12, yyyy: 1900-2016)";
		    dobvalidation = false;
		}
	}
	else
	{
		show3.innerHTML = "Cannot be submitted empty";
		dobvalidation = false;
	}

	//bloog group validation
	var bgvalidation = false;
	var show4 = document.getElementById("show4");
	var bg = document.getElementById("bg").value;
	if( bg != "")
	{
		bgvalidation = true;
	}
	else
	{
		show4.innerHTML = "|Must be selected";
		bgvalidation = false;
	}

	//degree validation
	var degreevalidation = false;
	var show5 = document.getElementById("show5");
	var ssc = document.getElementById("ssc").checked;
	var hsc = document.getElementById("hsc").checked;
	var bsc = document.getElementById("bsc").checked;
	var msc = document.getElementById("msc").checked;
	if( ssc == true || hsc == true || bsc == true || msc == true)
	{
		degreevalidation = true;
	}
	else
	{
		show5.innerHTML = "|At least one of them has to be selected";
		degreevalidation = false;
	}

	//image validation
	var imagevalidation = false;
	var show6 = document.getElementById("show6");
	var image = document.getElementById("image").value;
	if(image != "")
	{
		imagevalidation = true;
	}
	else
	{
		var show6 = document.getElementById("show6");
		show6.innerHTML = "Picture cannot be empty";
		imagevalidation = false;
	}
	
	

	if(namevalidation==true && emailvalidation==true && gendervalidation==true && dobvalidation==true && bgvalidation==true && degreevalidation==true && imagevalidation==true)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function clickName()
{
	var show = document.getElementById("show");
	show.innerHTML = "";
}
function clickEmail()
{
	var show = document.getElementById("show1");
	show.innerHTML = "";
}
function clickGender()
{
	var show = document.getElementById("show2");
	show.innerHTML = "";
}
function clickDOB()
{
	var show = document.getElementById("show3");
	show.innerHTML = "";
}
function clickBG()
{
	var show = document.getElementById("show4");
	show.innerHTML = "";
}
function clickDegree()
{
	var show = document.getElementById("show5");
	show.innerHTML = "";
}
function clickImage()
{
	var show = document.getElementById("show6");
	show.innerHTML = "";
}