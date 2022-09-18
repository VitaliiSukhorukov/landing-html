<!DOCTYPE html>
<html lang="ru">
<head>
    <title>PHP-скрипт</title>
    <meta charset="x-UTF-16LE-BOM">
</head>
<body>
<?php
//for ($i=0; $i<=100; $i++){
//    echo $i . '<br>';        //Числа от 0 до 100;
//}


//for ($i=100; $i>=0; $i--){
//    echo $i . '<br>';        //Числа от 100 до 0;
//}


//for ($i=100; $i>=0; $i=$i-2){
//    echo $i . '<br>';         // Числа от 100 до 0 с шагом в 2;
//}


//for ($i=0; $i<10; $i++){
//    echo '*  ';
//}

//for ($i=0; $i<=3;$i++){
//    for ($ji=0; $ji<=3;$ji++){
//       echo '*';
//    }
//    echo '*<br>';
//}


//for ($i=1;$i<=3;$i++){
//    for ($ij=1;$ij<=3;$ij++){
//    }
//    echo ' ' . $i . 'x' . $ij . '=' . ($i*$ij) . ' | '; //Таблица умножение до 9;
//    echo '<br>';
//}

//for ($i=1;$i<=9;$i++){
//    for ($ij=1;$ij<=$i;$ij++){
//        echo '*'; //Таблица умножение до 9;
//    }
// echo '<br>';
//}

//$years1 = [2000, 2001, 2002, 2003, 2004, 2005, 2006, 2007, 2008, 2009, 2010, 2011, 2012, 2013, 2014, 2015, 2016, 2017, 2018, 2019, 2020];
//$month = ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'december'];
//$day = ['monday', 'tuesday', 'wednesday', 'Thursday', 'friday', 'saturday', 'sunday'];
////echo $years1[4] . ' ' . $month[4] . ' ' . $day[4] . ' ';
//echo $years1[count($years1) -1] . " ";
//echo $month[count($month) -1] . " ";
//echo $day [count($day) -1];
$brend = ['Adidas', 'Puma', 'Reebok', 'Nike', 'Nb', 'Heydude', 'Converse', 'Madden Girl', 'Gucci', 'Zara'];
//$famaliy = ['Valentina'=>'mom', 'Petr'=>'dad', 'Maria'=>'grandmother', 'Nadia'=>'wife', 'Yurik'=>'friend', 'Denis'=>'friend1',
//    'Sergei'=>'oldfriend', 'Ruslan'=>'worker', 'Yurii'=>'dadofwife', 'Nina'=>'momoffriend'];
//
/*$arr = [
    'Month' => ['january', 'february', 'march', 'april', 'may', 'june', 'july', 'august', 'september', 'october', 'november', 'Декабрь',],
    'Week' => ['one' => 'monday', 'two' => 'tuesday', 'three' => 'wednesday', 'four' => 'Thursday', 'five' => 'Пятница', 'six' => 'saturday', 'seven' => 'sunday',]
];

$i = 0;
$r = rand(0,count($arr)-1);
foreach ($arr as $value) {
    if ($i == $r){
        $i = 0;
        $r = rand(0,count($value)-1);  Рандомный месяц многомерный асоциотивный массив.
        foreach ($value as $v) {
            if ($i == $r){
                echo $v;
                break 2;

            }
            $i++;
        }

    }
    $i++;
}*/


//print_r(array_keys($arr));
// 1 Найти знач 1 массива.
// 2
/*$arr2 = [22, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20];
$sum = [];
for ($i = 0; $i < count($arr2); $i++) {
    if ($arr2[$i] % 2) {
        echo "скрипт не сработал значении $arr2[$i] <br>";
    } else {
        echo "скрипт сработал на значении $arr2[$i] <br>";
        $sum[] = $arr2[$i];
    }
}
print_r($sum);

$month = file('utilits/month.txt');
print_r($month);*/
$arr = [];
for ($i = 0; $i < rand(5, 10); $i++) {
    $arr[] = rand(0,100);
    echo "<br>";
}
asort($arr);
print_r($arr);
echo "<br>";
sort($arr);
print_r($arr);
//    foreach ($arr2 as $key => $value){
//        if ($value % 2 <= 0){
//           $arr3=array_merge($arr3,$arr2);
//print_r($arr3);
//        }
//}
?>
</body>
</html>