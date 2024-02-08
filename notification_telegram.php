<?php

    class HttpHelper {

        private $url;

        public function __construct($url) {
            $this->url = $url;
        }

        public function httpPost($data) {

            try {
                $opts = array('http' =>
                    array(
                        'method'  => 'POST',
                        'header'  => "Accept: application/json\r\nContent-Type: application/json\r\n",
                        'content' => json_encode($data)
                    )
                );

                $context = stream_context_create($opts);
                $result  = file_get_contents($this->url, false, $context);

                return $result;

            } catch (Exception $e) {

                // Handle error
                return $e->getMessage();

            }
        }

    }


    class Telegram {

        private $token;

        public function __construct($token) {
            $this->token = $token;
        }

        public function send($msg = "Telegram sent successfully.", $chatIds = ['1356462978']) {

            $httpHelper = new HttpHelper('https://api.telegram.org/bot' . $this->token . '/sendMessage');

            foreach ($chatIds as $chatId) {
                $data = array('chat_id' => $chatId, 'text' => $msg);
                $httpHelper->httpPost($data);
            }
            
        }

    }

?>