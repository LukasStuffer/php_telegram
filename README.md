Description
-
Send a message via Telegram with php.

Get the chat ID and a token:
https://www.cytron.io/tutorial/how-to-create-a-telegram-bot-get-the-api-key-and-chat-id


```php
$telegram = new Telegram('2834145567:FASRQWXDakJCEd2T7q1kLU2Zm3j4fDSaJ0A');

$telegram->send('hello, world', ['1356462978']);
