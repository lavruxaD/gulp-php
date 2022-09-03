<?
$connect = mysqli_connect('localhost', '', '', '');
if ($connect == false) {
  print('Ошибка: невозможно подключиться к Mysql' . mysqli_connect_error());
} else {
  //print('Соединение установленно успешно');
}
if (!$connect) {
  die(mysqli_connect_error());
}
