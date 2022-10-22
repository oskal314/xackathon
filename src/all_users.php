<?php
 
 $mysql = new mysqli('localhost', 'root', '', 'webpractik');

$result=mysqli_query($induction, "SELECT * FROM tables_teach");

$tables_teach=mysqli_fetch_assoc($result);
print_r($tables_teach);

while ($row = $result->fetch_assoc())
   {
       // Оператором echo выводим на экран поля таблицы  
       echo 'Название блога: '.$row['name_blog'];
       echo 'Текст блога: '.$row['text_blog'];
   } 

?>
