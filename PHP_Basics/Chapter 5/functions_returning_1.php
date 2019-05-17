<?php
// Managing the Code -- Functions: Returning Values

function returnsNoValue()
{
	echo '<br />Returns No Value';
}

returnsNoValue();

// use the "return" command
function returnsStringValue()
{
	return '<br />Returns String Value';
}

echo returnsStringValue();

function returnsVariableValue()
{
	$value = 123456; 
	return $value;
}

echo returnsVariableValue();
