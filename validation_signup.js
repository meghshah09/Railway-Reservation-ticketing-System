function formvalidation()
{
	var uid=document.f1.name;
	var pwd=document.f1.password;
	var pc=document.f1.tel;
	var eid=document.f1.email;


if(userid_validation(uid,5,12))
{
	if(pwd_validation(pwd,7,12))
	{	
			if(number_validation(pc))
			{
				if(email_validation(eid))
				{
				
				}
			}

	}
	
}	

return false;
}

function userid_validation(uid,mx,my)
{
	var uid_len=uid.value.length;
	if(uid_len==0||uid_len>my||uid_len<mx)
	{
		alert("user id should not be empty/length between "+mx+" to "+my);
		uid.focus();
		
		return false;
	}
	return true;
}

function pwd_validation(pwd,mx,my)
{
	var pwd_len=pwd.value.length;
	if(pwd_len==0||pwd_len>my||pwd_len<mx)
	{
		alert("password should not be empty/length between "+mx+" to "+my);
		pwd.focus();
		
		return false;
	}
	return true;
}


function number_validation(pc)
{
	var letters1 = /^[0-9]+$/;
	if(pc.value.match(letters1))
	{
		return true;
	}
	else
	{
		alert("user pincode must have numeric characters only");
		pc.focus();
	}
}

function email_validation(eid)
{
var letters2 =/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;

	if(eid.value.match(letters2))
	{
		return true;
	}
	else
	{
		alert("user Email-Id is not valid");
		eid.focus();
	}
}