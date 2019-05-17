<?php
// Building Web Forms: Capturing <form> Data
// class which builds form elements
class Form
{
	public function html($title, $body)
	{
		// NOTE: "PHP_EOL" = PHP End of Line = \r\n for Windows, \n for Linux/Mac
		// PHP_EOL is used to make output look nice when viewing page source
		$output = '<!DOCTYPE html>' 
				. PHP_EOL
				. '<head>' 
				. PHP_EOL
				. '<meta charset="utf-8">' 
				. PHP_EOL
				. '<title>' . $title . '</title>' 
				. PHP_EOL
				. '<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" >' 
				. PHP_EOL
				. '<link href="images/favicon.ico?v=2" rel="shortcut icon" type="image/vnd.microsoft.icon" >' 
				. PHP_EOL
				. '</head>' 
				. PHP_EOL
				. '<body topmargin="0" leftmargin="0">' 
				. PHP_EOL
				. $body
				. '</body>' 
				. PHP_EOL
				. '</html>' 
				. PHP_EOL;
		return $output;
	}
	public function div($class, $contents)
	{
		return '<div class="' . $class . '">' 
			   . PHP_EOL
			   . $contents 
			   . PHP_EOL
			   . '</div><!-- end ' . $class . ' -->' 
			   . PHP_EOL;
	}
	public function buildForm($name, $action, $contents)
	{
		return '<form name="' . $name . '" action="' . $action . '" method="POST">' 
			   . PHP_EOL 
			   . $contents 
			   . PHP_EOL 
			   . '</form><!-- ' . $name . ' --> ' 
			   . PHP_EOL;
	}
	public function h($number, $label)
	{
		return '<h' . $number . '>' . $label . '</h' . $number . '>' . PHP_EOL;
	}
	public function input($label, $type, $name, $size, $maxLength, $value = NULL)
	{
		$output = '<div class="aRow">' 
				. PHP_EOL
				. '<div class="aCell label">' . $label . '</div>' 
				. PHP_EOL
				. '<div class="aCell formTd">' 
				. PHP_EOL
				.'<input type="' . $type . '" name="data[' . $name . ']" size=' . $size . ' maxlength=' . $maxLength . ' value="' . $value . '" />' 
				. PHP_EOL
				. '</div>' 
				. PHP_EOL
				. '</div><!-- ' . $name . ' -->' 
				. PHP_EOL;
		return $output;
	}
	public function textArea($label, $name, $rows, $cols, $value = NULL)
	{
		$output = '<div class="aRow">' 
				. PHP_EOL
				. '<div class="aCell label">' . $label . '</div>' 
				. PHP_EOL
				. '<div class="aCell formTd">' 
				. PHP_EOL
				. '<textarea name="data[' . $name . ']" rows=' . $rows . ' cols=' . $cols . ' >'
				. $value
				. '</textarea>' 
				. PHP_EOL
				. '</div>' 
				. PHP_EOL
				. '</div><!-- ' . $name . ' -->' 
				. PHP_EOL;
		return $output;
	}
	public function submit($name, $value)
	{
		$output = '<div class="aRow">' 
				. PHP_EOL
				. '<div class="aCell label">&nbsp;</div>' 
				. PHP_EOL
				. '<div class="aCell formTd">' 
				. PHP_EOL
				. '<input type="submit" name="' . $name . '" value="' . $value . '" />'
				. PHP_EOL
				. '</div>' 
				. PHP_EOL
				. '</div><!-- ' . $name . ' -->' 
				. PHP_EOL;
		return $output;
	}
	public function footer($label)
	{
		$output = '<div class="footer">' 
				. PHP_EOL
				. '<hr/>' 
				. PHP_EOL
				. '<p>' . $label . '</p>' 
				. PHP_EOL
				. '</div><!-- footer -->' 
				. PHP_EOL;
		return $output;
	}
}
