<?php
/**
*генерирует каптчу
*@return array
*/
function generate_captcha () {
	$captcha = array();
	$num1 = rand(1, 20);
	$num2 = rand(1, 20);
	$rand = rand(1,2);
	if ($num1 > $num2) {
		$oper = '-';
		$answer = $num1 - $num2;
	} else {
		$oper = '+';
		$answer = $num1 + $num2;
	}
	$captcha[] = $num1;
	$captcha[] = $num2;
	$captcha[] = $oper;
	$_SESSION['answer'] = $answer;
	return $captcha;
}