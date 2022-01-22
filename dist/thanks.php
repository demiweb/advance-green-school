<?
	print_r($_REQUEST);
/*
    [yourName] => Serhio
    [yourPhone] => +380 (63)-100-33-43
    [sendForm3] =>
    [showdesktop] => 0



    [formname] => test
    [nertype] => 1 поверх
    [send-result-polzunok] => 90
    [construction] => Так
    [proekt] => Ні
    [techbud] => Газобетон
    [orderRoof33] => Протягом 3-4 місяців
    [yourName] => Serhio
    [yourPhone] => +380 (63)-100-33-43
    [sendForm1] =>
    [showdesktop] => 0
*/

	if(isset($_REQUEST['yourPhone'])){

		header("https://advancegreenschool.com.ua/");
		$success = FALSE;
		$errors = array();
		$notify = '';
		$yourName = strip_tags(trim($_REQUEST['yourName']));
		$yourItem = strip_tags(trim($_REQUEST['yourItem']));
		$yourPhone = strip_tags(trim($_REQUEST['yourPhone']));


		$subject = "Новая заявка с формы обратного звонка";

		//$ip = mysql_real_escape_string($_SERVER['REMOTE_ADDR']);
		$body = '<table>
				    <tr><td>Имя:</td><td>'.$yourName.'</td></tr>
					<tr><td>Телефон:</td><td>'.$yourPhone.'</td></tr>
				</table>';
		$headers = "From: \"AGS\"<no-reply@advancegreenschool.com.ua/>\n".
		stripslashes('Content-Type: text/html; charset="UTF-8"')."\nReturn-path: <no-reply@advancegreenschool.com.ua>";

		mail( "@gmail.com" , $subject, $body ,$headers);

	}

















?>
