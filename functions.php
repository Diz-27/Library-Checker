<!-- //Daren Shannon -->

<!-- //look into setTime on page 320 -->
<?php
$returnDate = '';
$dueDate = '';
$message = '';

function calculateDate($returnDate, $dueDate){
    // I had to change these so many times. I used date_create to create a DateTime object.
    $returnTimestamp = date_create($returnDate);
    $dueTimestamp = date_create($dueDate);

    // Use date_diff() to calculate the difference between $returnDate and $dueDate
    $difference = date_diff($returnTimestamp, $dueTimestamp);
    // the % is the tell that I need a value, not a string.
    date_interval_format($difference, ' %m month/s %d day/s %Y years/s');
    return date_interval_format($difference, ' %m month/s %d day/s %Y years/s');
    // $difference = abs($returnTimestamp - $dueTimestamp);

    // 60 sec * 60 min * 24 hours
    // return $difference / (60 * 60* 24);


}


function getResult($returnDate, $dueDate){
    // strtotime() give the number of seconds from Jan 1 1970 and date given.
    $returnTimestamp = strtotime($returnDate);
    $dueTimestamp = strtotime($dueDate);


    if ($returnTimestamp > $dueTimestamp) {
        $difference = calculateDate($returnDate, $dueDate);

        echo "The book is overdue by " . $difference . ".";
    } elseif ($returnTimestamp < $dueTimestamp) {
        $difference = calculateDate($returnDate, $dueDate);

        echo "The book is due in " . $difference . ".";
    } else {
        echo "The book is due today.";
    }
}




?>