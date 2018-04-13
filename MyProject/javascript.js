
		function val()
			{
				var x1=document.form.fname.value;
				{
					if(x1 != "")
					{
						for(i=0;i<x1.length;i++)
						{
							if(!((x1.charCodeAt(i) >= 65 && x1.charCodeAt(i) <= 90 ) || (x1.charCodeAt(i) >= 97 && x1.charCodeAt(i) <= 122 )))
							{
								alert("Please Enter letters only in Fname Field");
								return false;
							}
						}
					}
					
				}
				var x2=document.form.lname.value;
				{
					if(x2 != "")
					{
						for(i=0;i<x2.length;i++)
						{
							if(!((x2.charCodeAt(i) >= 65 && x2.charCodeAt(i) <= 90 ) || (x2.charCodeAt(i) >= 97 && x2.charCodeAt(i) <= 122 )))
							{
								alert("Please Enter letters only in Lname Field");
								return false;
							}
						}
					}
				}
				var x4=document.form.gender.value;
				{
					if(x4=="Gender")
					{
						alert("Enter a valid GENDER");
						return false;
					}
				}
				var x3=document.form.password.value
				{
					if(x3.length < 8)
					{
						alert('Password must be more than 8 digits...');
						return false;
					}
				}
				/*var x9=document.form.mob.value;
				{
					if(x9 != "")
					{
						for(i=0;i<10;i++)
						{
						 if(!(x9.charCodeAt(i) > 47 && x9.charCodeAt(i)<=57 ))
							{
								alert("Please Enter NUMBERS only in MOB NO Field");
								return false;
							}
						}
					}
				}
				
				return true;
			}
			*/