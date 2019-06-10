
function users_registration() 
{
	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var firstname = $("#firstname").val();
	var lastname = $("#lastname").val();
	var email = $("#email").val();
	var passwd = $("#passwd").val();
	var rpasswd = $("#rpasswd").val();
	
	if(firstname == "")
	{
		$("#signup_status").html('<div class="info">Please enter your firstname in the required field to proceed.</div>');
		$("#firstname").focus();
	}
	else if(lastname == "")
	{
		$("#signup_status").html('<div class="info">Please enter your lastname to proceed.</div>');
		$("#lastname").focus();
	}
	else if(email == "")
	{
		$("#signup_status").html('<div class="info">Please enter your email address to proceed.</div>');
		$("#email").focus();
	}
	else if(reg.test(email) == false)
	{
		$("#signup_status").html('<div class="info">Please enter a valid email address to proceed.</div>');
		$("#email").focus();
	}
	else if(passwd == "")
	{
		$("#signup_status").html('<div class="info">Please enter your desired password to go.</div>');
		$("#passwd").focus();
	}
	else if(rpasswd != passwd)
	{
		$("#signup_status").html('<div class="info">Your password do not match!</div>');
		$("#passwd").focus();
	}
	else
	{
		var dataString = 'firstname='+ firstname + '&lastname=' + lastname + '&email=' + email + '&passwd=' + passwd + '&rpasswd=' + rpasswd + '&page=users_registration';
		$.ajax({
			type: "POST",
			url: "save_details.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#signup_status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="images/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
				var response_brought = response.indexOf('registered_successfully=yes');
				if (response_brought != -1) 
				{
					$("#signup_status").html('');
					window.location.replace(response);
				}
				else
				{
					$("#signup_status").fadeIn(1000).html(response);
				}
			}
		});
	}
}

function users_login() 
{
	var email = $("#email").val();
	var passwd = $("#passwd").val();
	
	if(email == "")
	{
		$("#login_status").html('<div class="info">Please enter your account email address to proceed.</div>');
		$("#email").focus();
	}
	else if(passwd == "")
	{
		$("#login_status").html('<div class="info">Please enter your account password to go.</div>');
		$("#passwd").focus();
	}
	else
	{
		var dataString = 'email=' + email + '&passwd=' + passwd + '&page=users_login';
		$.ajax({
			type: "POST",
			url: "form/save_details.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#login_status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="images/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
				var response_brought = response.indexOf('login_process_completed_successfully=yes');
				if (response_brought != -1) 
				{
					$("#login_status").html('');
					window.location.replace(response);
				}
				else
				{
					$("#login_status").fadeIn(1000).html(response);
				}
			}
		});
	}
}

function users_login() 
{
	var email = $("#email").val();
	var passwd = $("#passwd").val();
	
	if(email == "")
	{
		$("#login_status").html('<div class="info">Please enter your account email address to proceed.</div>');
		$("#email").focus();
	}
	else if(passwd == "")
	{
		$("#login_status").html('<div class="info">Please enter your account password to go.</div>');
		$("#passwd").focus();
	}
	else
	{
		var dataString = 'email=' + email + '&passwd=' + passwd + '&page=users_login';
		$.ajax({
			type: "POST",
			url: "save_details.php",
			data: dataString,
			cache: false,
			beforeSend: function() 
			{
				$("#login_status").html('<br clear="all"><br clear="all"><div align="left"><font style="font-family:Verdana, Geneva, sans-serif; font-size:15px; color:black;">Please wait</font> <img src="assets/img/loadings.gif" alt="Loading...." align="absmiddle" title="Loading...."/></div><br clear="all">');
			},
			success: function(response)
			{
				var response_brought = response.indexOf('$_SESSION["USER_FULLNAME"]');
				if (response_brought != -1) 
				{
					$("#login_status").html('');
					window.location.replace(response);
				}
				else
				{
					$("#login_status").fadeIn(1000).html(response);
				}
			}
		});
	}
}
