<?php
// Simulating the visitor counts data
$visitorCounts = array(
  "today" => 50,
  "thisWeek" => 350,
  "thisMonth" => 1500
);

// Returning the visitor counts as JSON response
header('Content-Type: application/json');
echo json_encode($visitorCounts);
?>
