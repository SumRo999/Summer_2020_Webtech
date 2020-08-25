function validate()
{
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

					if(decision=="validName")
					{
						return true;
					}
					else
					{
						show.innerHTML = "Can contain alphabates or dot(.) or dash(-)";
						return false;	
					}
				}

			}
			else
			{
				show.innerHTML = "Please start with a letter";
				return false;
			}
		}
		else
		{
			show.innerHTML = "Contains at least two words";
			return false;
		}	

	}
	else
	{
		show.innerHTML = "Cannot be submitted empty";
		return false;
	}
}

function clickName()
{
	var show = document.getElementById("show");
	show.innerHTML = "";
}