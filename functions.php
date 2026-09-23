//Daren Shannon

//look into setTime on page 320
<?php
$returnDate = '';
$dueDate = '';
$message = '';
date_default_timezone_set('America/Chicago');
$timeStamp = time();
function calculateDate($date){
    // turns that into a date value PHP understands
    $dueDate = date_create($date);
    // We are taking the date as F (full month name), j (day of month without the leading zero), Y (as the four digit year)
    return dateFormat($dueDate, "F j Y");

}

function getDates($returnDate, $dueDate){
    // This returns the date into a PHP
    $return_value = date_create($returnDate);
    $due_value = date_create($dueDate);
    // this shows how much time there is between dates.
    $difference = date_diff($return_value, $due_value);
    return date_create_from_format($difference, 'y, m, d');
}

function get_result($returnDate, $dueDate){
    $returnTimestamp = strtotime($returnDate);
    $dueTimestamp = strtotime($dueDate);


    if ($returnTimestamp > $dueTimestamp) {
        $difference = get_date_difference($returnDate, $dueDate);

        return "The book is overdue by " . $difference . ".";
    } elseif ($returnTimestamp < $dueTimestamp) {
        $difference = get_date_difference($returnDate, $dueDate);

        return "The book is due in " . $difference . ".";
    } else {
        return "The book is due today.";
    }
}




?>