<?php
// ✅ Allow CORS from your Vercel frontend
header("Access-Control-Allow-Origin: https://magan-history.vercel.app");
header("Access-Control-Allow-Headers: Content-Type");
header("Access-Control-Allow-Methods: GET");

// ✅ Set content type
header('Content-Type: application/json; charset=utf-8');

// ✅ Example event
$event = [
  'id' => 1,
  'title' => 'تولى السلطان قابوس الحكم',
  'correctYear' => 1970,
  'hintStartYear' => 1800,
  'hintEndYear' => 2010,
  'category' => 'Politics',
  'difficulty' => 'Easy'
];

// ✅ Send JSON response
echo json_encode($event, JSON_UNESCAPED_UNICODE);
?>
