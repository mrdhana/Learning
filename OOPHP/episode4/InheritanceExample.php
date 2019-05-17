<?php
require 'TablePrinter.php';

class Greeting
{
    public function greet($name) { return "Hello, {$name}!"; }
}

class LessFormalGreeting extends Greeting
{
    public function greet($name) { return "Sup, {$name}!"; }
}

class PirateGreeting extends Greeting
{
    public function greet($name) { return "Welcome aboard, me matey {$name}!"; }
}


function greet(Greeting $greeting, $name = 'Someone')
{
    return $greeting->greet($name);
}

$p = new TablePrinter(['Object', 'Result']);
$p->addRow("Greeting", greet(new Greeting()));
$p->addRow("LessFormalGreeting", greet(new LessFormalGreeting()));
$p->addRow("PirateGreeting", greet(new PirateGreeting()));

$p->output();
