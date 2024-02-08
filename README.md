Send a message via Telegram with php

```php
$telegram = new Telegram('2834145567:FASRQWXDakJCEd2T7q1kLU2Zm3j4fDSaJ0A');

// Example 1
$telegram->send();

// Example 2
$telegram->send('test');

// Example 3
$telegram->send('hello, world', ['1356462978']);
