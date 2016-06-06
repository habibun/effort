<?php
/**
 * Created by PhpStorm.
 * User: jony
 * Date: 12/12/15
 * Time: 7:09 PM
 */

/**
 * Getting the Current Date and Time
 */
//echo time();
//echo mktime();
//echo mktime( 14, 32, 12, 1, 6, 1972 );
//echo mktime( 10, 0, 0 );
//echo mktime(20,8,40,12,1,2015);

//mktime use to php.ini date.timezone
$localTime = mktime(14, 32, 12, 1, 6, 1972);
$gmTime = gmmktime(14, 32, 12, 1, 6, 1972);
//echo $localTime."\n";
//echo $gmTime;

/**
 * Creating Timestamps from Date and Time Strings
 */

$timestamp = strtotime("15th September 2006 3:12pm");
//echo $timestamp;

$test = strtotime("12th December 2015 3:22pm");
//echo $test;

/*
you can specify a time in a different time zone by adding an offset from UTC, using a plus or minus sign followed by a four-digit
number at the end of the string
 */
$t = strtotime("February 15th 2004, 9:30am + 0000");// GMT
$t = strtotime("February 15th 2004, 9:30am + 0100");// 1 hour ahead of GMT
$t = strtotime("February 15th 2004, 9:30am - 0500");// Indianapolis time
$t = strtotime("February 15th 2004, 9:30am + 1000");// Sydney time(not DST)
$t = strtotime("February 15th 2004, 9:30am + 1100");// Sydney time(with DST)


$localTime = strtotime("tomorrow 1:30pm", 0); // January 2nd 1970, 1:30:00 pm


/**
 * Extracting Date and Time Values from a Timestamp
 */
//Here are a couple of getdate() examples:

// Displays "John Lennon was born on 9 October, 1940"
$johnLennonsBirthday = strtotime("October 9, 1940");
$d = getdate($johnLennonsBirthday);
//echo "John lennon was born on " .$d["mday"]. " " .$d["month"]. ", ".$d["year"]. "<br />";

// Displays e.g. "17:31"
$t = getDate();
//echo "The current time is ". $t["hours"] . ":" . $t["minutes"]. "<br />";

/*
As you can see, you can use idate() to retrieve all sorts of useful information from a date. Here’s an
example:
 */
$d = strtotime("February 18, 2000 7:49am");
// Displays "The year 2000 is a leap year."

//echo "The year " . idate( "Y", $d );
//echo " is " . ( idate( "L", $d ) ? "" : "not" ) . " a leap year.<br />";

// Displays "The month in question has 29 days."
//echo " The month in question has " . idate( "t", $d ) . " days.<br />";

/**
 * Formatting Date Strings
 */
//For example, you could format a date and time in a nice, easy-to-read fashion like this:

$d = strtotime("March 28, 2006 9:42am");
// Displays "The 28th of March, 2006, at 9:42 AM"
//echo date( "\T\h\\e jS \o\\f F, Y, \a\\t g:i A", $d );

/*
 * date() converts the UTC timestamp supplied to your server ’s time zone. If you’d rather keep the date
in UTC, use gmdate() instead:
 */
// Set the current time zone to 5 hours behind GMT
date_default_timezone_set("America/Indiana/Indianapolis");
// Set $d to the timestamp representing March 28, 2006 2:42 PM UTC
$d = strtotime("March 28, 2006 9:42am");
// Displays "March 28, 2006 9:42 AM"
//echo date( "F j, Y g:i A", $d ) . "<br />";
// Displays "March 28, 2006 2:42 PM"
//echo gmdate( "F j, Y g:i A", $d ) . "<br />";

/**
 * Checking Date Values
 */
//echo checkdate( 2, 31, 2009 ) . "<br />"; // Displays "" (false)
//echo checkdate( 2, 28, 2009 ) . "<br />"; // Displays "1" (true)


/**
 * Working with Microseconds
 */
// Displays, for example, "0.45968200 1230613358"
//echo microtime();

// Displays, for example, "1230613358.46"
//echo microtime( true );

// Displays, for example, "1230613358.459682"
//printf( "%0.6f", microtime( true ) );

//you can find out how long the operation took to execute
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>Timing script execution</title>
    <link rel="stylesheet" type="text/css" href="common.css"/>
</head>
<body>
<h1>Timing script execution</h1>
<?php
/*// Start timing
$startTime = microtime( true );
// Perform the operation
for ( $i=0; $i<10; $i++ ) {
    echo "<p>Hello, world!</p>";
}
// Stop timing
$endTime = microtime( true );
$elapsedTime = $endTime - $startTime;
printf( "<p>The operation took %0.6f seconds to execute.</p>", $elapsedTime );*/
?>
</body>
</html>

<?php
/**
 * Calculate Your Age in Days
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <title>How many days old are you?</title>
    <link rel="stylesheet" type="text/css" href="common.css"/>
    <style type="text/css">
        .error {
            background: #d33;
            color: white;
            padding: 0.2em;
            margin: 0.2em 0 0.2em 0;
            font-size: 0.9em;
        }

        fieldset {
            border: none;
        }

        ol {
            list-style-type: none;
        }

        input, select, textarea {
            float: none;
            margin: 1em 0 0 0;
            width: auto;
        }

        div.element {
            float: right;
            width: 57%;
        }

        div.element label {
            display: inline;
            float: none;
        }

        select {
            margin-right: 0.5em;
        }

        span.required {
            display: none;
        }
    </style>
</head>
<body>
<h1>How many days old are you?</h1>
<?php
require_once("HTML/QuickForm.php");
require_once("HTML/QuickForm/Renderer/Tableless.php");
$form = new HTML_QuickForm("form", "get", "working_with_dates_and_times.php", "",
    array("style" => "width: 30em;"), true);
$form->removeAttribute("name");
$form->setRequiredNote("");
$options = array(format => "MdY", "minYear" => 1902, "maxYear" =>
    date("Y"));
$form->addElement("date", "dateOfBirth", "Your date of birth", $options);
$form->addElement("submit", "calculateButton", "Calculate");
$form->addGroupRule("dateOfBirth", "Please enter your date of birth",
    "required");
$form->addRule("dateOfBirth", "Please enter a valid date", "callback",
    "checkDateOfBirth");
if ($form->isSubmitted() and $form->validate()) {
    $form->process("calculateDays");
}
$renderer = new HTML_QuickForm_Renderer_Tableless();
$form->accept($renderer);
echo $renderer->toHtml();
function checkDateOfBirth($value)
{
    return checkdate($value["M"], $value["d"], $value["Y"]);
}

function calculateDays($values)
{
    $currentDate = mktime();
    $dateOfBirth = mktime(0, 0, 0, $values["dateOfBirth"]["M"],
        $values["dateOfBirth"]["d"], $values["dateOfBirth"]["Y"]);
    $secondsOld = $currentDate - $dateOfBirth;
    $daysOld = (int)($secondsOld / 60 / 60 / 24);
    echo "<p>You were born on " . date("l, F jS, Y", $dateOfBirth) . ".</p>";
    echo "<p>You are " . number_format($daysOld) . " day" . ($daysOld != 1 ?
            "s" : "") . " old!</p>";
}

?>
</body>
</html>

<?php
/**
 * DateTime: The Future of PHP Date/Time Handling
 */
$dtz = new DateTimeZone("America/Los_Angeles");
$dt = new DateTime("13-Feb-1948", $dtz);
$dt->modify("-3 months");
// Displays "Thu, 13 Nov 1947 00:00:00 -0800"
echo $dt->format(DateTime::RFC2822);

?>

