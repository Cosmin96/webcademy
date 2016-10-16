<?php

	$realAnswers = array('qh1' => array('3', '2', '3', '4', '1'), 'qh2' => array('3', '3', '1'), 'qh3' => array('1', '2', '2'), 'qh4' => array('2', '1', '3', '2', '2'), 
		'qh5' => array('4', '2'), 'qh6' => array('2', '1', '2'), 'qh7' => array('1', '4', '1', '3'), 
		'qc1' => array('3', '2', '1', '4', '3', '2', '3', '1', '3', '2', '3', '2', '2'), 'qc2' => array('3', '4', '2', '2', '4'), 'qc3' => array('1', '4', '4', '2', '1', '3'),
		'qj1' => array('1', '3', '2', '3', '2', '1', '2', '2', '2', '4'), 'qj2' => array('3', '1', '3', '2', '2', '1'), 'qj3' => array('3', '1', '1', '2'), 
		'qj4' => array('1', '3', '1', '3'), 'qj5' => array('3', '2', '2', '1', '2'));

	$title = $_POST['title'];
	$qNumber = $_POST['qNumber'];
	$answers = $_POST['answers'];

	$correct = 0;
	for($i = 1; $i <= $qNumber; $i++)
	{
		if($answers[$i] == $realAnswers[$title][$i - 1])
			$correct++;
	}

	echo (($correct / $qNumber) * 100);

?>