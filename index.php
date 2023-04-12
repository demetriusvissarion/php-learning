<?php

// require 'functions.php';

// array
// $names = [
// 	'Jeff',
// 	'John',
// 	'Mary'
// ];

// $animals = [
// 	'dog',
// 	'cat',
// 	'mouse'
// ];

// add another item to the 'animals' array:
// $animals[] = 'elephant';

// associative array
// $person = [
// 	'age' => 31,
// 	'hair' => 'brown',
// 	'career' => 'web dev',
// ];

// add another key/value pair to the 'person' array:
// $person['name'] = 'Jeffrey';

// can print any data ('echo' cannot print an array)
// var_dump($person);

//// kill the execution beyond this point:
// die(var_dump($person)); 

// remove a line/item from the array
// unset($person['age']); 

// $task = [
// 	'title' => 'Finish homework',
// 	'due' => 'today',
// 	'assigned_to' => 'Jeff',
// 	'completed' => true,
// ];

// function dumper($one, $two, $three) {
// 	var_dump($one, $two, $three);
// }

// dumper('hello', 'big', 'world');

// function dd($animals) {
// 	echo '<pre>';
// 	die(var_dump($animals));
// 	echo '</pre>';
// }

// dd($animals);


// // Homework

// function checkIfAdult($age) {
// 	return ($age >= 21 ? true : false);
// }

// if (checkIfAdult(25)) {
// 	echo 'Have a good time!';
// } else {
// 	echo 'You are not old enough';
// }

// classes (important components)
// class Task {
// 	public $description;
// 	public $completed = false;

// 	public function __construct($description)
// 	{
// 		// Automaticly trigered on instantiation
// 		$this->description = $description;
// 	}

// 	public function complete()
// 	{
// 		$this->completed = true;
// 	}

// 	public function isComplete()
// 	{
// 		return $this->completed;
// 	}
// }

// $task = new Task('Go to the store'); // a new task object

// $task->complete();

// var_dump($task);

// $tasks = [
// 	new task('Go to the store'),
// 	new task('Finish my screencast'),
// 	new task('Clean my room'),
// ]; 

// $tasks[0]->complete();

$query = require 'bootstrap.php';

// require 'Task.php';

$tasks = $query->selectAll('todos', 'Task');

// echo '<pre>';
// die(var_dump($tasks));
// echo '</pre>';

// pull everything from a different file:
require 'index.view.php';
// require 'codewars.php';


