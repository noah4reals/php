<?php
	if (isset($_REQUEST['pg']))
	{
		switch ($_REQUEST['pg'])
		{
			case '2':
				include('Burkina-Faso.php');
				break;

			case '3':
				include('Niger.php');
				break;
			case '6':
				include('Nigeria.php');
				break;
			case '7':
				include('Togo.php');
				break;

			case '4':
				include('liste_etu.php');
				break;

			case '5':
				include('form_etu.php');
				break;

			default:
				include('Benin.php');
				break;
		}
	}
	else
	{
		include('Benin.php');
	}
?>