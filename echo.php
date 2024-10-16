<?php 

//Ekrana isim yazdırma

$name = "Yusuf" ;
$surname = "Türlü" ;
echo ($name." ".$surname."<br><br>") ;

//Veri Tipi Çalışması

$degisken = true ;
$degisken_2 = 3 ;
$degisken_3 = 5.6 ;
$degisken_4 = "Yusuf" ;
$degisken_5 = array("red" , "blue" , "green") ;
$degisken_6 = new stdClass ;
$degisken_7 = NULL ;
$degisken_8 = "30" ;

echo gettype($degisken)."<br>". 
    gettype($degisken_2)."<br>". 
    gettype($degisken_3)."<br>". 
    gettype($degisken_4)."<br>". 
    gettype($degisken_5)."<br>". 
    gettype($degisken_6)."<br>". 
    gettype($degisken_7)."<br>".
    gettype($degisken_8)."<br><br>";

//gettype Uygulama
$sayi = 22 ;
echo ("<b>Birinci değişkenin adı:
\$sayi</b>"."<br>".
"Değeri: ".$sayi."<br>".
"Türü: ".gettype($sayi)."<br><br>") ;

$sayi2 = 67 ;
echo ("<b>Birinci değişkenin adı:
\$sayi2</b>"."<br>".
"Değeri: ".$sayi2."<br>".
"Türü: ".gettype($sayi2)."<br><br>") ;

$sayi3 = 28 ;
echo ("<b>Birinci değişkenin adı:
\$sayi3</b>"."<br>".
"Değeri: ".$sayi3."<br>".
"Türü: ".gettype($sayi3)."<br><br>") ;

$sayi4 = 5.5 ;
echo ("<b>Birinci değişkenin adı:
\$sayi4</b>"."<br>".
"Değeri: ".$sayi4."<br>".
"Türü: ".gettype($sayi4)."<br><br>") ;

$sayi5 = true ;
echo ("<b>Birinci değişkenin adı:
\$sayi5</b>"."<br>".
"Değeri: ".$sayi5."<br>".
"Türü: ".gettype($sayi5)."<br>") ;

// Veri Tipi Değiştirme

settype($sayi4 , "integer") ;

echo "<br>" ;

echo (gettype($sayi4)) ;
echo "<br>" ;
var_dump($sayi4) ;

echo "<h2> PHP SABİTLERİ</h2>"."<br>".
    "kodun bulundugu yer:". (__LINE__)."<br>".
    "dosyanın bulundugu yer:" . (__FILE__)."
    <br>".
    "sunucudaki PHP versiyonu:
    ". phpversion(). "<br>".  
    "sunucudaki işletim sistemi: " . (PHP_OS)."
    <br>". 
    "dosyanın bulunduğu dizin :" . (__DIR__);

?>