<html>
 <head>
  <meta charset="utf-8">
  <title>Тестовое задание</title>
 </head>
 <body>

 <form name="test" method="post" action="input.php">
  <p><b>Название файла:</b><br>
   <input type="text" name="file" min="5" max="40" size="40" required>
  </p>
     <p><b>Выберите тип операции:</b><Br>
         <input type="radio" name="action" value="addition"> +<Br>
         <input type="radio" name="action" value="subtraction">-<Br>
         <input type="radio" name="action" value="division"> /<Br>
         <input type="radio" name="action" value="multiplication"> x<Br>
     </p>
  <p><input type="submit" value="Отправить">
   <input type="reset" value="Очистить"></p>
 </form>

 </body>
</html>
