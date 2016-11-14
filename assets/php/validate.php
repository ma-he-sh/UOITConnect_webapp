<?php
#Validate the inputs

function valid_stud_ID($stud_id){
	if(preg_match('/^\d{9}$/', $stud_id)){
		#check the student id for a numerical input
		return TRUE;
	}
	return FALSE;
}

function valid_email($email){
	if (filter_var($email, FILTER_VALIDATE_EMAIL) && strlen($email) < 64)
    {
        return TRUE;
    }
    return FALSE;
}

function valid_stud_name($stud_name){
  if(preg_match('/^(([A-Za-z]+)|\s{1}[A-Za-z]+)+$/', $stud_name)){
		return TRUE;
	}
	return FALSE;
}

function valid_password($password){
	if (preg_match('/^[a-zA-Z0-9\`\~\!\@\#\$\%\^\&\*\(\)\-\_\=\+\|\<\>\?]{6,31}$/', $password))
  {
      return TRUE;
  }
  return FALSE;
}

?>
