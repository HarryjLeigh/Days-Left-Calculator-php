<?php
echo 'Enter the date you would like: (Format: YYYY-MM-DD)' . PHP_EOL;
$date = trim(fgets(STDIN));
$dateFormatted = DateTime::createFromFormat('Y-m-d', $date);

while (!$dateFormatted || $dateFormatted->format('Y-m-d') !== $date) 
{
    echo 'Invalid date';
    echo "\n";
    echo 'Enter the date you would like: (Format YYYY-MM-DD)';
    $date = trim(fgets(STDIN));
    $dateFormatted = DateTime::createFromFormat('Y-m-d', $date);
};

$today = new DateTime();
$difference = $today->diff($dateFormatted);
$daysLeft = $difference->days + 1;
echo "Days left: $daysLeft" ;
?>