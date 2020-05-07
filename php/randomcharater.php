<!-- this function to make random charater with alphanumeric -->
<?php function r($value){
// list of random character will proses
$randomcharater='0123456789aBcDeFgHiJkLmNoPqRsTuVwXyZ';
$str=strlen($randomcharater);
$r='';
// loop character as much value needed
for($i=0;$i<$value;$i++){
$r.=$randomcharater[rand(0,$str-1)];}
// return the number chararter
return $r;
}

