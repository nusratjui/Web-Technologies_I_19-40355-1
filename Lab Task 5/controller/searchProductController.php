<?php
require_once 'model/model.php';

if (isset($_POST['findProduct'])) 
{
	
 try
    {
    	$allSearchedProducts = searchProduct($_POST['name']);
		
    	require_once 'searched.php';	
    } 
	catch (Exception $ex) 
	{
    	echo $ex->getMessage();
    }
	
}

