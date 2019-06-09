<?php
$var="Hello World";
$var2="     World";
echo substr("Hello",2);
echo "<br>";
echo strpos("loop",'o');
echo "<br>";
echo strrpos("loop",'o');
echo "<br>";
echo trim($var2);
echo "<br>";
echo strtoupper("hello");
echo "<br>";
echo strtolower("HELLO");
echo "<br>";
echo str_replace("Hello", "Hi", $var);
echo "<br>";
echo ucwords("hello world");
echo "<br>";
echo strcmp("Hello","World");
echo "<br>";
echo strval($var);
echo "<br>";
echo str_repeat("Hi ", 4);
echo "<br>";
echo str_shuffle("Hello");
echo "<br>";
echo str_word_count($var);
?>