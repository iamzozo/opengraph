<?php

require_once('OpenGraph.php');

$graph = new OpenGraph();
$response = $graph->fetch('http://soundcloud.com/guy-j/guy-j-march-welcome-the-sun-mix');
var_dump($graph->status_code, $graph->error);
//var_dump($graph->keys());
//var_dump($graph->schema);
//
//foreach ($graph as $key => $value) {
//    echo "$key => $value";
//}