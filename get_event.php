<?php
header('Content-Type: application/json; charset=utf-8');

// Example static data
$event = [
  'id' => 1,
  'title' => 'تولى السلطان قابوس الحكم',
  'correctYear' => 1970,
  'hintStartYear' => 1800,
  'hintEndYear' => 2010,
  'category' => 'Politics',
  'difficulty' => 'Easy'
];

echo json_encode($event, JSON_UNESCAPED_UNICODE);
?>