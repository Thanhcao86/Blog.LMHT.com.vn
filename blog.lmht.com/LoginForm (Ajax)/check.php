<?php 
function checkInputUser($value)
{
	$user='/^[a-z_][a-z0-9_\.\$]{4,31}$/';
	$flag=0;
	if(preg_match($user,$value)==1)
	{
		$flag=1;
	}
	return $flag;
}
?>