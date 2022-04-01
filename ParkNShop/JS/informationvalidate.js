function validate_checkout()
{
	
	var error = true;
	document.check_out.customerName.background = "Red";
	if (document.check_out.customerName.value == "")
	{
		error_type = 1;
		document.check_out.customerName.focus();
		error = false;
	}
	if (document.check_out.customerAddress.value == "")
	{
		error_type = 1;
		document.check_out.customerAddress.focus();
		error = false;
	}
	if (document.check_out.customerSuburb.value == "")
	{
		error_type = 1;
		document.check_out.customerSuburb.focus();
		error = false;
	}
	if (document.check_out.customerState.value == "")
	{
		error_type = 1;
		document.check_out.customerState.focus();
		error = false;
	}
	if (document.check_out.customerPostcode.value == "")
	{
		error_type = 1;
		document.check_out.customerPostcode.focus();
		error = false;
	}
	if (document.check_out.customerEmail.value == "")
	{
		error_type = 1;
		
		document.check_out.customerEmail.focus();
		error = false;
	}

	if (error == false)
	{
        alert("Please filled in all the required information.");
        return false;
	} 
	else
	{
		return true;
	}
}