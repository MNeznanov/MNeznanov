<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name;
$order .=" and 15 strips and 40% discount";
echo"\nYour order is:$very_bad_unclear_name.";


$number = 23;
echo"<br><br>$number";
echo"<br>";
$FloatNumber = 3.1415926;
echo"$FloatNumber"."<br>";
$negative = -11;
echo($number + $negative)."<br>";
$last_month = 1187.23;
$this_month = 1089.98;
echo($last_month - $this_month)."<br><br>";


$num_languages = 4;
$months = 11;
$days = 16;
$days_per_language = $months * $days / $num_languages;
echo"$days_per_language"."<br><br>";


echo(8**2)."<br><br>"; 


$my_num = 2;
$answer = $my_num;
$answer +=2;
$answer *=2;
$answer -=2;
$answer /=2;
$answer -=$my_num;
echo"$answer<br><br>";


$a=10;
$b=3;
echo($a % $b)."<br>";
if ($a % $b == 0)
    echo"Делится ", $a / $b;
else
    echo"Делится с остатком ", $a % $b;
echo"<br>";
$st=pow(2,10);
echo"$st<br>";
echo(sqrt(245))."<br>";
$list = [4,2,5,19,13,0,10];
$sum = 0;
foreach ($list as $i)
    $sum +=$i**2;
echo(sqrt($sum))."<br>";
echo round(sqrt(379), 0)."<br>";
echo round(sqrt(379), 1)."<br>";
echo round(sqrt(379), 2)."<br>";
$list2 = array ('ceil' => ceil(sqrt(587)), 'floor' => floor(sqrt(587)));
echo $list2['ceil']."<br>";
echo $list2['floor']."<br>";
echo min(4,-2,5,19,-130,0,10)."<br>";
echo max(4, -2,5,19,-130,0,10)."<br>";
echo rand(1,100)."<br>";
$list3 = [];
for ($i = 0; $i < 10; $i ++)
{
    $list3[$i] = rand(1,100);
    echo"$list3[$i] ";
}
echo"<br>";
echo(abs($a - $b))."<br>";
$list4 =  [1,2,-1,-2,3,-3];
foreach ($list4 as $i)
{
    $i = abs($i);
    echo"$i ";
}
echo"<br>";
$num = 127;
$ListOfDividers = [];
$c = 0;
for ($i = 1; $i <= $num; $i++)
{
    if ($num % $i == 0)
    {
        $ListOfDividers[$c] = $i;
        echo "$ListOfDividers[$c] ";
        $c += 1;
    }
}
echo"<br>";
$nat = [1,2,3,4,5,6,7,8,9,10];
$sum = 0;
$c = 0;
foreach ($nat as $i)
{
    if ($sum <= 10)
    {
        $sum += $i;
        $c += 1;
    }
}
echo"$c<br>";
 

function printStringReturnNumber(string $string):int
{
    echo"$string";
    return 127;
}

$my_num = printStringReturnNumber('Моё любимое число: ');
echo $my_num."<br>";

function increaseEnthusiasm(string $string):string
{
    $string.='!';
    return $string;
}
echo increaseEnthusiasm('Ура, товарищи')."<br>";
function repeatThreeTimes(string $string):string
{
    $string.=$string.$string;
    return $string;
}
echo repeatThreeTimes(increaseEnthusiasm('Ура'))."<br>";
function cut(string $string, int $int=10):string
{
    $return = "";
    for($i = 0; $i < $int*2; $i++)
        $return.=$string[$i];
    return $return;
}
echo cut("НуПрямоОченьИОченьДлиннаяПредлиннаяСтрока", 11)."<br>";
$AnoterNum = 127127127127127;
$c= 0;
while ($AnoterNum >= 10)
{
    while ($AnoterNum > 0)
    {
        $c += $AnoterNum % 10;
        $AnoterNum /= 10;
    }
    $AnoterNum = $c;
    $c = 0;
}
echo"$AnoterNum<br><br>";


$list5 = [];
$str = "x";
for ($i = 0; $i < 10; $i++)
{
    $list5[$i] = $str;
    $str.="x";
    echo"$list5[$i] ";
}
echo"<br>";
function arrayFill(string $string, int $int)
{
    $list = [];
    for ($i = 0; $i < $int; $i++)
    {
        $list[$i] = $string;
        echo"$list[$i] ";
    }
    return $list;
}
$list6 = arrayFill("x",5);
$list7 = [[1,2,3],[4,5],[6]];
$sum = 0;
for ($i = 0; $i < count($list7); $i++)
{
    for ($j = 0; $j < count($list7[$i]); $j++)
    {
        $sum += $list7[$i][$j];
    }
}
echo"<br>$sum<br>";
$list8 = [];
$c = 1;
for ($i = 0; $i <3; $i++)
{
    for ($j = 0; $j < 3; $j++)
    {
        $list8[$i][$j] = $c;
        $c++;
    }
}
print_r($list8);
$list9 = [2,5,3,9];
$result = ($list9[0]*$list9[1])+($list9[2]*$list9[3]);
echo"<br>$result<br>";
$user = ["name" => "Nikolay", "surname" => "SHCHeglov", "patronymic" => "Pavlovich"];
echo$user["surname"]." ".$user["name"]." ".$user["patronymic"]."<br>";
$date = ['year' => 2022, 'month' => '02', 'day' => '25'];
echo$date["year"]."-".$date["month"]."-".$date["day"]."<br>";
$arr=['a','b','c','d','e'];
echo(count($arr))."<br>";
echo$arr[count($arr)-1]."<br>";
echo$arr[count($arr)-2]."<br><br>";


function Ten(int $a, int $b):bool
{
    $bool = false;
    if ($a+$b > 10)
    {
        $bool = true;
    }
    return $bool;
}
$age = rand(0,110);
echo"$age<br>";
if ($age > 99)
    echo"age больше 99ти<br>";
elseif ($age < 10)
    echo"age меньше 10<br>";
else
{
    if (($age % 10)+($age / 10) < 10)
        echo"сумма цифр одозначна<br>";
    else
        echo"сумма цифр двузначна<br>";
}
$arr = [1,2,3];
if (count($arr) == 3)
{
    echo$arr[0]+$arr[1]+$arr[2]."<br><br>";
}


$str = 'x';
for ($i = 0; $i < 20; $i++)
{
    echo$str."<br>";
    $str.='x';
} 


$list10 = [1,2,3,4,5,6,7,8,9,10];
echo (array_sum($list10) / count($list10))."<br>";
echo (array_sum(range(1,100)))."<br>";
print_r(array_map('sqrt',$list10))."<br>";
$items = range(1,26);
$keys = range('a', 'z');
$NumberedAlfabet= array_combine($keys, $items);
print_r($NumberedAlfabet);
echo"<br>";
$string = '1234567890';
$pairs = str_split($string,2);
$lists = array_map('str_split',$pairs);
$sums = array_map('array_sum',$lists);
print_r($sums);   