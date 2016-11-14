function validation()
{
    var valid = false;
    var fname = document.getElementById('fname').value;

    if ( fname == "" || !isNaN(parseInt(fname)))
    {
	valid = true;

	document.getElementById('error_fname').innerHTML = "First name should not be empty";

    } 
    
    var mname = document.getElementById('Mname').value;
    if(mname=="" || !isNaN(parseInt(mname)))
    {

	valid = true;
	document.getElementById('error_mname').innerHTML = "middle name should not be empty";
	
    } 

    var lname=document.getElementById('Lname').value;
    if(lname=="" || !isNaN(parseInt(lname)))
    {

	valid = true;
	document.getElementById('error_lname').innerHTML = "last name should not be empty";

    }

    var age=document.getElementById('Age').value;
    if(age=="")
    {
    
	valid = true;
	document.getElementById('error_age').innerHTML = "age should not be empty";


    }

    

    var gender=document.getElementsByName('Gender');
    if(!gender[0].checked && !gender[1].checked)
    {
	valid = true;
    
	document.getElementById('error_gender').innerHTML = "Gender is unchecked";

    }

    

    var txt = document.getElementById('email').value;
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

    if (txt == "" || !txt.match(re))
    {
	
	valid = true;
	document.getElementById('error_email').innerHTML = "The email is not correct";


    }




    var mobile=document.getElementById('mobile').value;
    if(mobile == "" || isNaN(parseInt(mobile)) || mobile.length!=10)
    {


	valid = true;
	document.getElementById('error_mobile').innerHTML = "mobile should not be left empty or text or less than 10";

		
    }

    var address = document.getElementById('Adress').value;

    if(address == "")
    {

	valid = true;
	document.getElementById('error_address').innerHTML = "address is left empty";
	
	
    }

    

    

    var hobby = document.getElementsByName('checkbox');
    if(!hobby[0].checked==true && !hobby[1].checked==true && !hobby[2].checked==true && !hobby[3].checked==true)
    { 

	valid = true;
	document.getElementById('error_hobby').innerHTML = "Hobby unchecked";

    }
    





    var about = document.getElementById('About').value;
    if(about=="")
    {

	document.getElementById('error_about').innerHTML = "write about urself";
	return false;
    }
    
    

 }

