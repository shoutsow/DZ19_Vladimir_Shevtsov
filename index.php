<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZ19</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            color: darkblue;
        }
        .title {
            text-align: center;
            text-decoration: underline;
            font-weight: bold;
            color: darkred;
        }
        span {
            color: darkgreen;
        }
        .bckgrnd {
            height: 600px;
            width: 600px;
            position:relative;
            background-color:black;
            overflow:hidden;
        }
    </style>
</head>
<body>

    <?php

    echo '<p class="title">Домашняя работа №4.</p>';

    echo "1. Дана строка 'london is the capital of great britain'. Сделайте из нее
    строку 'London Is The Capital Of Great Britain'.<br><br>";
    function first_letter_big() {
        return ucwords('london is the capital of great britain');
    }

    echo 'Решается при помощи функции <span>ucwords()</span>: ' . first_letter_big() . '<br><hr>';


    echo "2. Дана строка 'html &lt;b&gt;css&lt;/b&gt; php'. Удалите теги из этой строки. С
    помощью функции explode запишите каждое слово этой строки в отдельный
    элемент массива.<br><br>";
    function delete_tags() {
        $str = 'html <b>css</b> php';
        $str = strip_tags($str);
        $arr = explode( ' ', $str);
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    }

    echo 'Решается при помощи функции <span>strip_tags()</span>' . delete_tags() . '<br><hr>';


    echo "3. Дана строка 'Lorem ipsum dolor sit amet.'. Перемешайте символы этой строки в случайном порядке.<br><br>";
    function str_fusion() {
        $str = 'Lorem ipsum dolor sit amet.';
        return str_shuffle($str);
    }
    echo 'Решается при помощи функции <span>str_shuffle()</span>: ' . str_fusion() . '<br><hr>';


    echo "4. Найдите количество дней в текущем месяце. Скрипт должен работать
    независимо от месяца, в котором он запущен.<br><br>";
    function days_of_month() {
        return date("t");
    }
    echo 'Решается при помощи функции <span>date()</span> с аргументом "t": ' . days_of_month() . '<br><hr>';


    echo "5. Выведите текущую дату-время в форматах
    '2025-12-31', '31.12.2025', '31.12.13', '12:59:59', timestamp.<br><br>";
    function formats() {
        $form1 = date('Y-m-d');
        $form2 = date('d.m.Y');
        $form3 = date('d.m.y');
        $time = date('H:i:s');
        $timestamp = time();

        echo $form1 . '<br>';
        echo $form2 . '<br>';
        echo $form3 . '<br>';
        echo $time . '<br>';
        echo $timestamp . '<br>';
    }
    echo '<br>Решается при помощи функций <span>date()</span> и <span>time()</span>' . formats() . '<br><hr>';


    echo "6. В переменной \$date лежит дата в формате '2025-12-31'. Прибавьте к этой
    дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня.<br><br>";
    function d_modify() {
        $date = '2025-12-31';
        $date = date('Y-m-d', strtotime($date . '+ 2 days + 1 month + 3 days + 1 year - 3 days'));
        echo $date . '<br>';
    }
    echo '<br>Решается при помощи функции <span>strtotime()</span>' . d_modify() . '<br><hr>';


    echo "7. Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'.
    Удалите из нее все цифры. То есть в нашем случае должна получится строка
    'abcbdefgh'.<br><br>";
    function del_numbers() {
        $str = '1a2b3c4b5d6e7f8g9h0';
        return preg_replace('/\d/','',$str);
    }
    echo 'Решается при помощи функции <span>preg_replace()</span> и рег. выражения "/\d/": ' . del_numbers() .
    '<br><hr>';


    echo "8. Даны числа 4, -2, 5, 19, -130, 0, 10. Найдите минимальное и максимальное
    число.<br><br>";
    function minmax() {
        $arr = [4, -2, 5, 19, -130, 0, 10];
        $min = min($arr);
        $max = max($arr);
        echo '<br>' . 'Минимальное: ' . $min . '<br>' . 'Максимальное: ' . $max . '<br>';
    }
    echo '<br>Решается при помощи функций <span>min()</span> и <span>max()</span>' . minmax() . '<br><hr>';


    echo "9. Выведите на экран случайное число от 1 до 100.<br><br>";
    function random_1to100() {
        return rand(1, 100);
    }
    echo 'Решается при помощи функции <span>rand()</span>: ' . random_1to100() . '<br><hr>';


    echo "10. Создайте ассоциативный массив дней недели. Ключами в нем должны
    служить номера дней от начала недели (понедельник - должен иметь ключ 1,
    вторник - 2 и т.д.). Выведите на экран текущий день недели.<br><br>";
    function cr_massive() {
        $day = [
            '1' => 'Понедельник',
            '2' => 'Вторник',
            '3' => 'Среда',
            '4' => 'Четверг',
            '5' => 'Пятница',
            '6' => 'Суббота',
            '7' => 'Воскресенье',
        ];
        $cur_day = date('N');
        return $day[$cur_day];
    }
    echo 'Решается при помощи функции <span>date()</span> с аргументом "N" и вызова элемента массива с этим ключом: ' .
    cr_massive() . '<br><hr>';


    echo "11. Дан двухмерный массив с числами, например [[1, 2, 3], [4, 5], [6]].
    Найдите сумму элементов этого массива. Массив, конечно же, может быть
    произвольным.<br><br>";
    function sum_of_arr($arr) {
        $sum = 0;
        foreach ($arr as $value) {
            foreach ($value as $item) {
                $sum += $item;
            }
        }
        return $sum;
    }
    echo 'Решается при помощи вложенного цикла "foreeach". Где мы перебираем основной массив и одновременно - вложенные,
    суммируя каждый их член в созданной для этого  переменной: ' . sum_of_arr([[1, 2, 3], [4, 5], [6]]) . '<br><hr>';


    echo "12. Есть массив \$array = array(1,1,1,2,2,2,2,3), необходимо вывести 1,2,3, то
    есть вывести без дублей при помощи лишь одного цикла и без использования
    функций PHP.<br><br>";
    function without_doubles($arr) {
        $chk_arr = [];
        $new_arr = [];
        foreach ($arr as $value) {
            if (!$chk_arr[$value]) {
                $chk_arr[$value] = true;
                //echo $value . ', ';
                $new_arr[] = $value;
            }
        }
        return $new_arr;
    }
    echo 'На примере массива [1, 3, 1, 4, 8, 1, 2, 12, 5, 2, 6, 2, 38, 0, 2, 3]. 
    Решается по гениальному методу Данилы:<pre>';
    print_r(without_doubles([1, 3, 1, 4, 8, 1, 2, 12, 5, 2, 6, 2, 38, 0, 2, 3]));
    echo '</pre><hr>';


    echo '13. Используя ассоциативный массив, добавить на страницу навигационное
меню вида:<br>
&lt;ul&gt;<br>
&emsp;&emsp;&emsp;&lt;li&gt;&lt;a href="index.php"&gt;Home&lt;/a&gt;&lt;/li&gt;<br>
&emsp;&emsp;&emsp;&lt;li&gt;&lt;a href="about.php"&gt;About&lt;/a&gt;&lt;/li&gt;<br>
&emsp;&emsp;&emsp;&lt;li&gt;&lt;a href="services.php"&gt;Services&lt;/a&gt;&lt;/li&gt;<br>
&emsp;&emsp;&emsp;&lt;li&gt;&lt;a href="catalog.php"&gt;Catalog&lt;/a&gt;&lt;/li&gt;<br>
&emsp;&emsp;&emsp;&lt;li&gt;&lt;a href="contacts.php"&gt;Contacts&lt;/a&gt;&lt;/li&gt;<br>
&lt;/ul&gt;<br>
Заполните массив соблюдая сл. условия: название индексов являются именем
файла (без расширения), на который ссылается меню; значения массива явл.
названиями пунктов меню.<br>';
    function make_menu() {
        $arr = [
            'index' => 'Home',
            'about' => 'About',
            'services' => 'Services',
            'catalog' => 'Catalog',
            'contacts' => 'Contacts',
        ];
        echo '<ul>';
        foreach ($arr as $key => $item) {
            echo "<li><a href=\"$key\">$item</a></li>";
        }
        echo '</ul>';
    }
    make_menu();
    echo '<hr>';


    echo "14. Вывести на черном фоне n красных квадратов случайного размера в
    случайной позиции в браузере.<br><br>";

    ?>

    <div class="bckgrnd">

        <?php
        function red_squares($n) {
            $height = rand(30, 120);
            $width = $height;
            for ($i = 0; $i < $n; $i++) {
                echo "<div style=\"
                position: absolute;
                box-sizing: border-box;
                border: 1px solid black;
                top:" . rand(1, 480) . "px;" . "
                left:" . rand(1, 480) . "px;" . "
                background-color: red; 
                height:" . $height . "px;" . "
                width:" . $width . "px;\">
                </div>";
            }
        }

        red_squares(7);

        ?>

    </div>

    <?php

    echo "<hr>15. Дана строка с любыми символами. Для примера пусть будет '1234567890'.
    Нужно разбить эту строку в массив таким образом: array('1', '23', '456', '7890')
    и так далее пока символы в строке не закончатся.<br><br>";
    function br_str_to_arr($str) {
        static $arr = [];
        static $i = 1;
        if ($i >= strlen($str)) {
            $arr[] = $str;
            return $arr;
        }
        $arr[] = strstr($str, $str[$i], true);
        $i++;
        return br_str_to_arr(substr($str, $i - 1));
    }

    echo 'Решается при помощи рекурсии<pre>';
    print_r(br_str_to_arr('1234567890'));
    echo '</pre><hr>';


    echo "16. Найдите сумму элементов массива между двумя нулями (первым и
    последним нулями в массиве). Если двух нулей нет в массиве, то выведите
    ноль. В массиве может быть более 2х нулей. Пример массива:
    [48,9,0,4,21,2,1,0,8,84,76,8,4,13,2] или [1,8,0,13,76,8,7,0,22,0,2,3,2].<br><br>";
    function sum_btw_0s($arr) {
        $result = 0;
        $start = false;
        $sum = 0;
        for ($i = 0; $i < count($arr); $i++) {
            $elem = $arr[$i];
            if ($elem == 0 && !$start) {
                $start = true;
                continue;
            }
            if ($elem == 0) {
                $result = $sum;
            }
            else if ($start) {
                $sum += $elem;
            }
        }
        return $result;
    }
    echo 'Для первого массива: ' . sum_btw_0s([48,9,0,4,21,2,1,0,8,84,76,8,4,13,2]) . '<br>';
    echo 'Для второго массива: ' . sum_btw_0s([1,8,0,13,76,8,7,0,22,0,2,3,2]) . '<br><hr>';
    //echo sum_btw_0s([1, 7, 4, 0, 2, 5, 8, 1, 2, 3, 4, 5]) . '<br>';


    echo "17. Сделайте функцию, которая будет генерировать случайный цвет в hex
    (dechex) формате (типа #ffffff).<br><br>";
    function hex_color_gen() {
        $color = '#';
        for ($i = 0; $i < 3; $i++) {
            $color .= strtoupper(dechex(rand(0, 255)));
        }
        return $color;
    }
    echo 'Решается при помощи функций <span>dechex()</span> и <span>rand()</span>: ' . hex_color_gen() . '<br><hr>';


    echo "18. Дана строка '332 441 550'. Найдите все места, где есть два одинаковых
    идущих подряд цифры и замените их на '!'.<br><br>";
    function task18($str) {
        $replace = function($arr) use(&$str) {
            foreach ($arr as $item) {
                $str = str_replace($str[$item], '!', $str);
            }
        };
        //А как-то можно это написать без переменной-функции? Как по мне, сильно замудрено.
        for ($i = 0; $i < strlen($str); $i++) {
            if (is_numeric($str[$i]) && is_numeric($str[$i + 1]) && $str[$i] === $str[$i + 1]) {
                $replace([$i, $i + 1]);
            }
        }
        return $str;
    }
    echo task18('332 441 550') . '<hr>';


    echo "19. Напишите ф-цию строгой проверки ввода номер телефона в
    международном формате (&lt;код страны&gt; &lt;код города или сети&gt; &lt;номер
    телефона&gt;) и упрощенной проверки ввода простого номера с кодом и без
    него. Функция должна возвращать true или false.<br><br>";
    function tel_numb_check($phone) {
        $regexp = '/^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/';
        if (preg_match($regexp, $phone, $matches)) {
            return ' - TRUE';
        } else {
            return ' - FALSE';
        }
        //print_r($matches);
    }
    echo '+375297777777' . tel_numb_check('+375297777777') . '<br>';
    echo '375(29)777-77-77' . tel_numb_check('375(29)777-77-77') . '<br>';
    echo '375-29-777-77-77' . tel_numb_check('375-29-777-77-77') . '<br>';
    echo '+375-29-777-77-77' . tel_numb_check('+375-29-777-77-77') . '<br>';
    echo '+375 297777777' . tel_numb_check('+375 297777777') . '<br>';
    echo '+375 29 7777777' . tel_numb_check('+375 29 7777777') . '<br>';
    echo '+375 29 777 77 77' . tel_numb_check('+375 29 777 77 77') . '<br>';
    echo '+375 29 V-O-V-A-N' . tel_numb_check('+375 29 V-O-V-A-N') . '<br><hr>';


    echo "20. Напишите ф-цию, которая должна проверить правильность ввода адреса<br>
    эл. почты. Почта верна при условии:<br>
    a. весь адрес не должен содержать русские буквы и спецсимволы, кроме<br>
    одной «собачки», знака подчеркивания, дефиса и точки, причем они не могут<br>
    быть первыми и последними в адресе, и идти подряд, например: «..», «@.»,<br>
    «.@» или «@@», «_@», «@-», «--» и т.п.<br>
    b. имя эл. почты (до знака @) должно быть длиной более 2 символов, причем<br>
    имя может содержать только буквы, цифры, но не быть первыми и<br>
    единственными в имени, и точку;<br>
    c. после последней точки и после @, домен верхнего уровня (ru, by, com и<br>
    т.п.) не может быть длиной менее 2 и более 11 символов.<br><br>";
    function email_check($email) {
        $regexp = '/^(([0-9A-Z]?([0-9A-Z]+?:\.)*[^_][^-][^.][0-9A-Z])@([A-Z]+\.){1,2}[-A-Z]{2,11})$/i';
        //Как исключить подчёркиванеие? ни (?:_),ни [^_] не срабатывают... функция выдаёт true я что-то сломался.
        if (preg_match($regexp, $email)) {
            return ' - TRUE';
        } else {
            return ' - FALSE';
        }
    }
    echo 'name@gmail.com' . email_check('name@gmail.com') . '<br>';
    echo 'n@gmail.com' . email_check('n@gmail.com') . '<br>';
    echo 'na@gmail.com' . email_check('na@gmail.com') . '<br>';
    echo 'name@gmail.c' . email_check('name@gmail.c') . '<br>';
    echo 'na.me@gmail.com' . email_check('na.me@gmail.com') . '<br>';
    echo 'na-me@gmail.com' . email_check('na-me@gmail.com') . '<br>';
    echo 'na_me@gmail.com' . email_check('na_me@gmail.com') . '<br>';
    echo 'na--me@gmail.com' . email_check('na--me@gmail.com') . '<br>';
    echo 'na__me@gmail.com' . email_check('na__me@gmail.com') . '<br>';
    echo 'na..me@gmail.com' . email_check('na..me@gmail.com') . '<br>';
    echo 'наме@gmail.com' . email_check('наме@gmail.com') . '<br>';
    echo 'name_@gmail.com' . email_check('name_@gmail.com') . '<br>';
    echo 'name-@gmail.com' . email_check('name-@gmail.com') . '<br>';
    echo 'name.@gmail.com' . email_check('name.@gmail.com') . '<br>';
    echo 'name@_gmail.com' . email_check('name@_gmail.com') . '<br>';
    echo 'name@-gmail.com' . email_check('name@-gmail.com') . '<br>';
    echo 'name@.gmail.com' . email_check('name@.gmail.com') . '<br>';
    echo 'name@gmail.comcomcomcom' . email_check('name@gmail.comcomcomcom') . '<br><hr>';

    ?>

</body>
</html>
