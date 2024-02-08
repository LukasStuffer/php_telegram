
$telegram = new Telegram('2834145567:FASRQWXDakJCEd2T7q1kLU2Zm3j4fDSaJ0A');

$telegram->send();
$telegram->send('test');
$telegram->send('hello, world', ['1356462978']);
