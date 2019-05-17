<?php
// Managing the Code -- Functions: Creating Your Own Functions

// code which produces a <ul><li> HTML from an array
// $fruits = array of fruits to render

// arrays defining fruits, vegetables and meats
$fruits = array('Apples', 'Bananas', 'Pears', 'Oranges', 'Peaches', 'Strawberries');
$vegetables = array('Peas', 'Carrots', 'Lettuce', 'Artichokes', 'Beans');
$meats = array('Beef', 'Pork', 'Veal', 'Chicken', 'Turkey');

// block of code which produces a <ul><li> list of fruits
echo '<br />FRUITS:<hr />';
// TIP: use PHP_EOL to make "view page source" more readable!
echo '<ul>' . PHP_EOL;
foreach ($fruits as $li) {
	echo "<li>$li</li>";
}
echo '</ul>' . PHP_EOL;

// block of code which produces a <ul><li> list of vegetables
echo '<br />VEGETABLES:<hr />';
echo '<ul>' . PHP_EOL;
foreach ($vegetables as $li) {
	echo "<li>$li</li>";
}
echo '</ul>' . PHP_EOL;

// block of code which produces a <ul><li> list of meats
echo '<br />MEATS:<hr />';
echo '<ul>' . PHP_EOL;
foreach ($meats as $li) {
	echo "<li>$li</li>";
}
echo '</ul>' . PHP_EOL;
