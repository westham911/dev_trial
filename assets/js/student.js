function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('pass1');
    var pass2 = document.getElementById('pass2');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Password matched.";
    }
	else
	{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
		pass2.style.backgroundColor = badColor;
		message.style.color = badColor;
		message.innerHTML = "Password not matched!";		

    }
} 


// validate email
function email_validate(email)
{
var regMail = /^([_a-zA-Z0-9-]+)(\.[_a-zA-Z0-9-]+)*@([a-zA-Z0-9-]+\.)+([a-zA-Z]{2,3})$/;

    if(regMail.test(email) == false)
    {
    document.getElementById("status").innerHTML    = "Email address is not valid.";
    }
    else
    {
    document.getElementById("status").innerHTML	= "Thanks, you have entered a valid Email address!";	
    }
}


//add student
function add_student()
{
	var firstName = document.getElementById('firstName');
    var lastName = document.getElementById('lastName');
	var pwd_1 = document.getElementById('pass1');
	var pwd_2 = document.getElementById('pass2');
	var email = document.getElementById('email');
	var phoneNum = document.getElementById('phone');
	

	
	if(firstName.value === '')
	{
		firstName.style.backgroundColor = "#f4b342";
		document.getElementById("errFirst").innerHTML    = "First name cannot be empty.";
		return false;
	}
	else
	{
		firstName.style.backgroundColor = "#fcfcfc";
		document.getElementById("errFirst").innerHTML    = "";
	}
	
	if(lastName.value === '')
	{
		lastName.style.backgroundColor = "#f4b342";
		document.getElementById("errLast").innerHTML    = "Last name cannot be empty.";
		return false;
	}
	else
	{
		lastName.style.backgroundColor = "#fcfcfc";
		document.getElementById("lastName").innerHTML    = "";
	}
	
	//password and email
	if(pwd_1.value === '')
	{
		pwd_1.style.backgroundColor = "#f4b342";
		document.getElementById("confirmMessage").innerHTML    = "Password cannot be empty.";
		return false;
	}
	else
	{
		if(document.getElementById('confirmMessage').innerHTML == "Password not matched!" || document.getElementById("status").innerHTML == "Email address is not valid.")
		{

		}
		else
		{
			var form = document.getElementById('stForm');
			form.submit();	
		}
	}


}

//delete student
function del_student(id)
{
   var pop = confirm("Are you sure you want to delete this record ?");
   if(pop)
   {
       //这点表示当点击确认对话框里的确定时要执行的操作，可以是提交表单，也可以是发送一个ajax的请求
	   this.location = "Students/deleteStudent?stID="+id;
	   
   }
}

//update student
function update_student()
{
	var firstName = document.getElementById('firstName');
    var lastName = document.getElementById('lastName');
	var email = document.getElementById('email');
	var phoneNum = document.getElementById('phone');
	
		if(firstName.value === '')
	{
		firstName.style.backgroundColor = "#f4b342";
		document.getElementById("errFirst").innerHTML    = "First name cannot be empty.";
		return false;
	}
	else
	{
		firstName.style.backgroundColor = "#fcfcfc";
		document.getElementById("errFirst").innerHTML    = "";
	}
	
	if(lastName.value === '')
	{
		lastName.style.backgroundColor = "#f4b342";
		document.getElementById("errLast").innerHTML    = "Last name cannot be empty.";
		return false;
	}
	else
	{
		lastName.style.backgroundColor = "#fcfcfc";
		document.getElementById("lastName").innerHTML    = "";
	}
	

	//email
	if(document.getElementById("status").innerHTML == "Email address is not valid.")
	{

	}
	else
	{
		var form = document.getElementById('stForm');
		form.submit();	
	}

}
