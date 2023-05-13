<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
        //1. Создайте переменные $a=10 и $b=2. Выведите на экран их сумму, 
        //разность, произведение и частное (результат деления).       
        $lol = 10;
        $lol1 = 2;
        echo("Задание 1 <br>" );
        echo($lol + $lol1);
        echo("<br>");
        echo($lol * $lol1);
        echo("<br>");
        echo($lol / $lol1);
        echo("<br>");
        echo($lol - $lol1);
        echo("<br>");

        //2. Даны три числа x = 2,y = 6 и z = 9. Найдите (x+1)4−2(z−2x^2+y^2) 
        echo("Задание 2 <br>");
        $x = 2;
        $y = 6;
        $z = 9;
        echo ("($x+1)4-2($z−2$x^2+$y^2)");
        echo("<br>");

        /*3. Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и 
результат присвойте переменной $c. Затем создайте переменную $d, 
присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите 
в переменную $result. Выведите на экран значение переменной $result.*/
        echo("Задание 3 <br>");
        $a = 17;
        $b = 10;
        $c = $a - $b;
        $d = 7;
        $result = $c + $d;
        echo ($result);
        echo("<br>");
        /*4. Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих 
переменных и операции сложения строк выведите на экран фразу 'Привет, 
Мир!'.*/
        echo("Задание 4 <br>");
        $text1 = 'Привет, ';
        $text2 = 'Мир!';
        echo $text1, $text2;
        echo("<br>");
        /*5. Создайте переменную $name и присвойте ей ваше имя. Выведите на экран 
фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя.*/
        echo("Задание 5 <br>");
        $name = 'Danila';
        echo 'Привет ', $name, '!';
        echo("<br>");

        /*6. Создайте переменную $num и присвойте ей значение '12345'. Найдите 
сумму цифр этого числа*/
        echo("Задание 6 <br>");
        $num = '12345'; 
        $sum = 0;
        for ($i = 0; $i < strlen($num); $i++) {
            $sum += $num[$i]; 
        }
        echo "Сумма цифр числа равна {$sum} <br> ";  
        /*7. Напишите скрипт, который считает количество секунд в часе, в сутках, в
месяце, в году и сколько прошло секунд с начала 2000 года.*/
        echo("Задание 7 <br>");
        $seconds_in_hour = 60 * 60;
        $seconds_in_day = $seconds_in_hour * 24;
        $seconds_in_month = $seconds_in_day * 30;
        $seconds_in_year = $seconds_in_day * 365;
        $start_of_year_2000 = strtotime("January 1, 2000");
        $current_time = time();
        $seconds_since_2000 = $current_time - $start_of_year_2000;

        echo "Количество секунд в часе: {$seconds_in_hour} <br>";
        echo "Количество секунд в сутках: {$seconds_in_day} <br>";
        echo "Количество секунд в месяце: {$seconds_in_month} <br> ";
        echo "Количество секунд в году: {$seconds_in_year} <br>";
        echo "Количество секунд с начала 2000 года:{$seconds_since_2000} <br>";
        /*8. Создайте три переменные - час, минута, секунда. С их помощью выведите
текущее время в формате 'час:минута:секунда'.*/
        echo("Задание 8 <br>");
        $hour = date('H');
        $minute = date('i');
        $second = date('s');
        echo "{$hour}:{$minute}:{$second}<br>";
        /*Переделайте приведенный код так, чтобы в нем использовались операции
+=, -=, *=, /=, ++, --. Количество строк кода при этом не должно измениться.
Код для переделки:*/
        echo("Задание 9 <br>");
        $var = 1;
        $var += 12;
        $var -= 14;
        $var *= 5;
        $var /= 7;
        $var++;
        $var--;
        echo "{$var} <br>";
        /*10. Создайте константу и присвойте ей значение - ваша фамилия, создайте
соответствующие переменные со сл. значениями: ваше имя, ваше отчество,
ваш возраст. Проверьте существует ли созданная константа, если да, то
выведите фразу "Меня зовут <ваша фамилия> (сокр. <ваше имя> и сокр.
ваше отчество). Мне <ваш возраст> лет". Каждая фраза должна начинаться с
новой строки. Например:
"Меня зовут Иванов (И. И.).
Мне 5 лет."*/
        echo("Задание 10 <br>");
        define('LAST_NAME', "Kuratnik");
        $my_first_name = 'Danila'; 
        $my_middle_name = 'Alekseyevich'; 
        $my_age = 22; 
        echo "Меня зовут ".LAST_NAME."(";
        echo substr($my_first_name, 0, 1);
        echo('.');
        echo substr($my_middle_name, 0, 1);
        echo('.)<br>');
        echo "Мне {$my_age} года.";
        ?>

    </body>
</html>