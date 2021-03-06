<?PHP
/* History
     PHP means PHP Hypertext Preprocessor
    1.0 - 1994 by Rasmus Lerdorf, (PHP/FI 1.0)
    3.0 - 1997 Powerful & Consistent Syntax, and Developer Enhancements & Extensions
    4.0 - 2000 Performance, Reliability, Sessions and Object-Oriented features
    5.0 - 2004 Better Object Model, Security, Performance, Tools, DB Access Layer and Integrated Engine, and Exception Handling
*/

// Basic Operations

// Print - As Is, or Literal Output
echo 'The quick brown fox jumped over the lazy dog!';

/* Escape Characters
     \n - New Line
     \t - Tab
     \r - Return
     \" - Double Quote
     \' - Single Quote
*/
// Print - PHP Parser, translates Escape Characters
echo "Did the \"quick\" brown fox jump over the \"lazy\" dog?";
// Outputs: Did the "quick" brown fox jump over the "lazy" dog?
// Note: Web Browsers don't parse \n or Line Feed

// Ternary - Condition ? True : False
$number = (!empty($_GET['name'])? $_GET['name'] : 'Default: Name')

// Dynamic Variables
$who = $_GET['whatname'] . 'name';
if(isset($$who)){
    echo $$who;
}else{
    echo 'No Name';
}

// Pass by Reference
function lowercase(&$string){
    $string = strtolower($string);
}

$name = 'EXAMPLE';
lowercase($name);
echo $name; // returns example

// Array
function buddyArray(&$array){
    $array[0] = 'buddy';
}

$friends = array(
    'matthew',
    'mark',
    'luke',
    'john'
);

buddyArray($friends);

print_r($friends); // This will now have changed 'matthew' to 'buddy'

?>

