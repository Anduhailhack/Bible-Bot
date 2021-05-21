<?php
    namespace Utils;

    /**
     *  the structure of response
     *  this class is responsible for storing a payload and data for response
     */
    class Response
    {
        private $chat_id;
        private $text;
        private $reply_markup;
        private $parse_mode;
        private $entities;

        // getters

        function getChatId($chat_id)
        {
            $this->chat_id;
        }

        function getText($text)
        {
            $this->text;
        }

        function getReplyMarkup($reply_markup)
        {
            $this->reply_markup;
        }

        function getParseMode($parse_mode)
        {
            $this->parse_mode;
        }

        function getEntities($entities)
        {
            $this->entities;
        }

        // setters

        function setChatId($chat_id)
        {
            $this->chat_id = $chat_id;
        }

        function setText($text)
        {
            $this->text = $text;
        }

        function setReplyMarkup($reply_markup)
        {
            $this->reply_markup = $reply_markup;
        }

        function setParseMode($parse_mode)
        {
            $this->parse_mode = $parse_mode;
        }

        function setEntities($entities)
        {
            $this->entities = $entities;
        }
    }

?>
