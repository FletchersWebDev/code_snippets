<!-- This code allows the site to greet users dependent upon the time of day.
Default time zone is set to UTC as I am in GB. You can change this to any relevant timezone.
To modify the greeting just change the text within the quotes of the echo tag. "Good Morning"
Time constraints - 
>= (More than or equal to) 5 (hour in 24 hour format).
<= (Less than or equal to)
= (Equal to {If the hour is} -->

<?php
date_default_timezone_set('UTC');

// 24-hour format of an hour without leading zeros (0 through 23)
$Hour = date('G');

if ( $Hour >= 5 && $Hour <= 11 ) {
    echo "Good Morning";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
    echo "Good Afternoon";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
    echo "Good Evening";
}
?>
