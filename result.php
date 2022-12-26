<head>
<meta charset="utf-8">
    <title>Lab 10</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Andika:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
    <div class="inline">Главная</div>            
</header>
<div class="result">
<?php
function test_symbs($text)
{
$symbs=array(); // массив символов текста
$l_text=strtolower( $text ); // переводим текст в нижний регистр
// последовательно перебираем все символы текста
for($i=0; $i<strlen($l_text); $i++)
{
if( isset($symbs[$l_text[$i]]) ) // если символ есть в массиве
$symbs[$l_text[$i]]++; // увеличиваем счетчик повторов
else // иначе
$symbs[$l_text[$i]]=1; // добавляем символ в массив
}
//return $symbs; // возвращаем массив с числом вхождений символов в тексте
//echo 'Количество повторений каждого символа в тексте: '.implode($symbs).'<br>';
echo 'Количество повторений каждого символа в тексте:<br>';
foreach($symbs as $key=>$row) {
    if(iconv("cp1251", "utf-8",$key) == ' ') {
        echo "Пробелов";
    }
	echo iconv("cp1251", "utf-8",$key.': '). $row . "<br>\r\n";
};
} 

function test_it($text)
{
// количество символов в тексте определяется функцией размера текста
$count = strlen($text) - 1;
echo 'Количество символов: '.$count.'<br>';
// определяем ассоциированный массив с цифрами
$cifra=array( '0'=>true, '1'=>true, '2'=>true, '3'=>true, '4'=>true,
 '5'=>true, '6'=>true, '7'=>true, '8'=>true, '9'=>true );
$letter=array(
	'A'=>true, 'a'=>true, 'B'=>true, 'b'=>true, 'C'=>true, 'c'=>true, 'D'=>true, 'd'=>true, 'E'=>true, 'e'=>true, 'F'=>true, 'f'=>true, 'G'=>true, 'g'=>true, 'H'=>true, 'h'=>true, 'I'=>true, 'i'=>true,
	'J'=>true, 'j'=>true, 'K'=>true, 'k'=>true, 'L'=>true, 'l'=>true, 'M'=>true, 'm'=>true, 'N'=>true, 'n'=>true, 'O'=>true, 'o'=>true, 'P'=>true, 'p'=>true, 'Q'=>true, 'q'=>true, 'R'=>true, 'r'=>true,
	'S'=>true, 's'=>true, 'T'=>true, 't'=>true, 'U'=>true, 'u'=>true, 'V'=>true, 'v'=>true, 'W'=>true, 'w'=>true, 'X'=>true, 'x'=>true, 'Y'=>true, 'y'=>true, 'Z'=>true, 'z'=>true, 'А'=>true, 'а'=>true, 
    'Б'=>true, 'б'=>true, 'В'=>true, 'в'=>true, 'Г'=>true, 'г'=>true, 'Д'=>true, 'д'=>true, 'Е'=>true, 'е'=>true, 'Ё'=>true, 'ё'=>true, 'Ж'=>true, 'ж'=>true, 'З'=>true, 'з'=>true, 
	'И'=>true, 'и'=>true, 'Й'=>true, 'й'=>true, 'К'=>true, 'к'=>true, 'Л'=>true, 'л'=>true, 'М'=>true, 'м'=>true, 'Н'=>true, 'н'=>true, 'О'=>true, 'о'=>true, 'П'=>true, 'п'=>true, 'Р'=>true, 'р'=>true, 
	'С'=>true, 'с'=>true, 'Т'=>true, 'т'=>true, 'У'=>true, 'у'=>true, 'Ф'=>true, 'ф'=>true, 'Х'=>true, 'х'=>true, 'Ц'=>true, 'ц'=>true, 'Ч'=>true, 'ч'=>true, 'Ш'=>true, 'ш'=>true, 'Щ'=>true, 'щ'=>true, 
	'Ъ'=>true, 'ъ'=>true, 'Ы'=>true, 'ы'=>true, 'Ь'=>true, 'ь'=>true, 'Э'=>true, 'э'=>true, 'Ю'=>true, 'ю'=>true, 'Я'=>true, 'я'=>true
);
$big_letter = array(
	'A'=>true, 'B'=>true, 'C'=>true, 'D'=>true, 'E'=>true, 'F'=>true, 'G'=>true, 'H'=>true, 'I'=>true, 'J'=>true, 'K'=>true, 'L'=>true, 'M'=>true, 'N'=>true, 'O'=>true, 'P'=>true, 'Q'=>true, 'R'=>true,
	'S'=>true, 'T'=>true, 'U'=>true, 'V'=>true, 'W'=>true, 'X'=>true, 'Y'=>true, 'Z'=>true, 'А'=>true, 'Б'=>true, 'В'=>true, 'Г'=>true, 'Д'=>true, 'Е'=>true, 'Ё'=>true, 'Ж'=>true, 'З'=>true, 'И'=>true, 
    'Й'=>true, 'К'=>true, 'Л'=>true, 'М'=>true, 'Н'=>true, 'О'=>true, 'П'=>true, 'Р'=>true, 'С'=>true, 'Т'=>true, 'У'=>true, 'Ф'=>true, 'Х'=>true, 'Ц'=>true, 'Ч'=>true, 'Ш'=>true, 'Щ'=>true, 'Ъ'=>true, 
    'Ы'=>true, 'Ь'=>true, 'Э'=>true, 'Ю'=>true, 'Я'=>true
);
$little_letter = array(
	'a'=>true, 'b'=>true, 'c'=>true, 'd'=>true, 'e'=>true, 'f'=>true, 'g'=>true, 'h'=>true, 'i'=>true, 'j'=>true, 'k'=>true, 'l'=>true, 'm'=>true, 'n'=>true, 'o'=>true, 'p'=>true, 'q'=>true, 'r'=>true,
	's'=>true, 't'=>true, 'u'=>true, 'v'=>true, 'w'=>true, 'x'=>true, 'y'=>true, 'z'=>true, 'а'=>true, 'б'=>true, 'в'=>true, 'г'=>true, 'д'=>true, 'е'=>true, 'ё'=>true, 'ж'=>true, 'з'=>true, 'и'=>true, 
    'й'=>true, 'к'=>true, 'л'=>true, 'м'=>true, 'н'=>true, 'о'=>true, 'п'=>true, 'р'=>true, 'с'=>true, 'т'=>true, 'у'=>true, 'ф'=>true, 'х'=>true, 'ц'=>true, 'ч'=>true, 'ш'=>true, 'щ'=>true, 'ъ'=>true, 
    'ы'=>true, 'ь'=>true, 'э'=>true, 'ю'=>true, 'я'=>true
);
$punctuation_marks = array(
    '.'=>true, ','=>true, '!'=>true, '?'=>true, '...'=>true, ':'=>true, ';'=>true, '-'=>true, '('=>true, ')'=>true, '"'=>true
);
// вводим переменные для хранения информации о:
$cifra_amount=0; // количество цифр в тексте
$letter_amount = 0;
$big_letter_amount = 0;
$little_letter_amount = 0;
$punctuation_marks_amount = 0;
$word_amount=0; // количество слов в тексте
$word=''; // текущее слово
$words=array(); // список всех слов
$words_list = array();
for($i=0; $i<strlen($text); $i++) // перебираем все символы текста
{
if( array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $cifra) ) // если встретилась цифра
$cifra_amount++; // увеличиваем счетчик цифр
if( array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $letter) ) 
$letter_amount++; 
if( array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $big_letter) ) 
$big_letter_amount++; 
if( array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $little_letter) ) 
$little_letter_amount++; 
if( array_key_exists(iconv("cp1251", "utf-8",$text[$i]), $punctuation_marks) ) 
$punctuation_marks_amount++; 

// если в тексте встретился пробел или текст закончился
if( $text[$i]==' ' || $i==strlen($text)-1 )
{
     array_unshift($words_list, $word);
if( $word ) // если есть текущее слово
{
// если текущее слово сохранено в списке слов
if( isset($words[$word]) )
$words[ $word ]++; // увеличиваем число его повторов
else
$words[ $word ]=1; // первый повтор слова
}
$word=''; // сбрасываем текущее слово
}
else // если слово продолжается
$word.=$text[$i]; //добавляем в текущее слово новый символ
}
// выводим количество цифр в тексте
echo 'Количество цифр: '.$cifra_amount.'<br>';
echo 'Количество букв: '.$letter_amount.'<br>';
echo 'Количество заглавных букв: '.$big_letter_amount.'<br>';
echo 'Количество маленьких букв: '.$little_letter_amount.'<br>';
echo 'Количество знаков препинания: '.$punctuation_marks_amount.'<br>';
echo 'Количество слов: '.count($words).'<br>';
echo 'Список слов:<br>';
sort($words_list);
foreach($words_list as $row) {
	echo iconv("cp1251", "utf-8",$row).': '.substr_count($text, $row)."<br>\r\n";
};
test_symbs($text);
}

if( isset($_POST['data']) & $_POST['data'] != '') // если передан текст для анализа
{
$text = $_POST['data'];
 echo 'Текст для анализа: <div class="src_text">'.$text.'</div>'; // выводим текст
 test_it(iconv("utf-8", "cp1251",$text.' ')); // анализируем текст 
}
else // если текста нет или он пустой
 echo '<div class="src_error">Нет текста для анализа</div>'; // выводим ошибку

 echo '<form action="index.html">
    <p><button type="submit">Другой текст для анализа</button></p>
  </form>'
?>
</div>
</body>