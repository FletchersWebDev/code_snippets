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

<!--You can also set your greeting to include days of the week. Using a PHP Switch-->

<?php

date_default_timezone_set('UTC');

$Hour = date('G');
if ( $Hour >= 5 && $Hour <= 11 ) {
echo "Good morning";
} else if ( $Hour >= 12 && $Hour <= 18 ) {
echo "Good afternoon";
} else if ( $Hour >= 19 || $Hour <= 4 ) {
echo "Good evening";
}

$date = date('l');

switch ($date) {
  case 'Sunday':
    $content = " we hope you are enjoying your weekend!";
    break;
  case 'Monday':
    $content = " a happy Monday always starts with a smile ;-)";
    break;
  case 'Tuesday':
    $content = " have a terrific Tuesday!";
    break;
  case 'Wednesday':
    $content = " have a wonderful Wednesday!";
    break;
  case 'Thursday':
    $content = " have a thankful Thursday!";
    break;
  case 'Friday':
    $content = " have a feel good Friday!";
    break;
  case 'Saturday':
    $content = " we hope you are enjoying your weekend!";
    break;
}

echo $content;
?>

<!--Additionally you can change and image to display dependent on the month using a PHP switch-->

<?php
  date_default_timezone_set('UTC');
  
	$date = date('m');
	switch ($date) {
			
	case '1':
	$monthlyImage = "images/JanuaryImage.jpg";
	$monthlyAlt = "Image description for January";
    break;
			
	case '2':
	$monthlyImage = "images/FebruaryImage.jpg";
	$monthlyAlt = "Image description for February";
    break;
			
	case '3':
	$monthlyImage = "images/MarchImage.jpg";
	$monthlyAlt = "Image description for March";
    break;
			
	case '4':
	$monthlyImage = "images/AprilImage.jpg";
	$monthlyAlt = "Image description for April";
    break;
			
	case '5':
	$monthlyImage = "images/MayImage.jpg";
	$monthlyAlt = "Image description for May";
    break;
			
	case '6':
	$monthlyImage = "images/JuneImage.jpg";
	$monthlyAlt = "June";
    break;
			
	case '7':
	$monthlyImage = "images/JulyImage.jpg";
	$monthlyAlt = "July";
    break;
	
	case '8':
	$monthlyImage = "images/AugustImage.jpg";
	$monthlyAlt = "August";
    break;
	
	case '9':
	$monthlyImage = "images/SeptemberImage.jpg";
	$monthlyAlt = "September";
    break;
	
	case '10':
	$monthlyImage = "images/OctoberImage.jpg";
	$monthlyAlt = "October";
    break;
						
	case '11':
	$monthlyImage = "images/NovemberImage.jpg";
	$monthlyAlt = "November";
    break;

	case '12':
	$monthlyImage = "images/DecemberImage.jpg";
	$monthlyAlt = "December";
    break;
}

?>


<img src=<?php echo("$monthlyImage");?> class="slide" alt=<?php echo("$monthlyAlt");?>/>
