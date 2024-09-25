<?php

require_once 'FileUtility.php';
require_once 'Random.php';


$people = Random::generatePeople(300);  


$filename = 'persons.csv';


$header = array_keys($people[0]);
$data = array_merge([$header], $people);

FileUtility::writeToFile($filename, $data);

echo "300 records have been generated and saved to $filename.";
?>
