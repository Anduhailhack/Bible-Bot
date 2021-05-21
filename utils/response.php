<?php
    namespace Utils;

    include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/utils/config.php";
    include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/utils/payloads.php";

    use Utils\Payloads;

    class Response
    {
        function replyText($parameter)
        {
            // file_get_contents(API_URL . API_TOKEN . "/sendMessage?chat_id=686804748&text=Hello");
            $method = METHODS[0];
            $chat_id = $parameter["chat_id"];
            $text = $parameter["text"];
            return file_get_contents(API_URL . API_TOKEN . sprintf("/%schat_id=%s&text=%s", $method, $chat_id, $text));
        }

        function replyMarkup($parameter)
        {
            $method = METHODS[0];
            $chat_id = $parameter["chat_id"];
            $text = $parameter["text"];
            $reply_markup = $parameter["reply_markup"];

            return file_get_contents(API_URL . API_TOKEN . sprintf("/%schat_id=%s&text=%s&reply_markup=%s", $method, $chat_id, $text, $reply_markup));
        }

        function editMessage($parameter)
        {
            $method = METHODS[2];

            $chat_id = $parameter["chat_id"];
            $message_id = $parameter["message_id"];
            $text = $parameter["text"];
            $reply_markup = $parameter["reply_markup"];

            return file_get_contents(API_URL . API_TOKEN . sprintf("/%schat_id=%s&message_id=%s&text=%s&reply_markup=%s", $method, $chat_id, $message_id, $text, $reply_markup));
        }
    }
?>
