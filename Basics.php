<?PHP

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

