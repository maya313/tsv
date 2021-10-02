<?php

$data = array(
	array('ruby', '1000', '1'),
	array('peridot', '2000', '5'),
	array('diamond', '5000', '10'),
);

$fp = fopen('item.tsv', 'w');

foreach($data as $row){
	fputcsv($fp, $row, "\t");
}

fclose($fp);