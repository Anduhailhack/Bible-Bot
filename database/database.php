<?php
    namespace Database;

	include_once $_SERVER["DOCUMENT_ROOT"] . "/utils/config.php";

    use Utils;

    class Database
    {
        private $mysqli;

        function init()
        {
            $this->mysqli = new \mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);

            if (mysqli_errno($this->mysqli) != 0)
            {
                return $this->mysqli->connect_error;
            }
            return 0;
        }

        function insertUser($userData)
        {
            if (!isset($this->mysqli))
                return -1;

            $prepare_query = $this->mysqli->prepare("INSERT INTO USER_TABLE (".
                "FIRST_NAME, LAST_NAME, USER_NAME, IS_BOT, USER_ID, ".
                "CHAT_FIRST_NAME, CHAT_LAST_NAME, CHAT_USER_NAME, CHAT_ID, ".
                "TYPE, SENT_DATE, MESSAGE_TXT) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $prepare_query->bind_param("ssssssssssss", $u_first_name, $u_last_name, $u_username, $is_bot, $user_id, $ch_first_name, $ch_last_name, $ch_username, $chat_id, $type, $data, $message_data);

            $u_first_name = $this->mysqli->real_escape_string($userData->u_first_name);
            $u_last_name = $this->mysqli->real_escape_string($userData->u_last_name);
            $u_username = $this->mysqli->real_escape_string($userData->u_username);
            $is_bot = $this->mysqli->real_escape_string($userData->is_bot);
            $user_id = $this->mysqli->real_escape_string($userData->user_id);
            $ch_first_name = $this->mysqli->real_escape_string($userData->ch_first_name);
            $ch_last_name = $this->mysqli->real_escape_string($userData->ch_last_name);
            $ch_username = $this->mysqli->real_escape_string($userData->ch_username);
            $chat_id = $this->mysqli->real_escape_string($userData->chat_id);
            $type = $this->mysqli->real_escape_string($userData->type);
            $data = $this->mysqli->real_escape_string($userData->date);
            $message_data = $this->mysqli->real_escape_string($userData->message_data);

            $fetched = $this->mysqli->query("SELECT USER_ID FROM USER_TABLE WHERE USER_ID=" . $user_id);
            if (mysqli_errno($this->mysqli) == 0)
            {
                if (is_object($fetched))
                {
                    return 0;
                }
            }

            $prepare_query->execute();
            $prepare_query->close();

            if (mysqli_errno($this->mysqli) != 0)
                return mysqli_error($this->mysqli);
            return 0;
        }

        function cacheCallBack()
        {
            if (!isset($this->mysqli))
                return -1;

            $prepare_query = $this->mysqli->prepare("INSERT INTO cache (USER_ID, BOOK, CHAPTER, VERSE) VALUES (?, ?, ?, ?)");
            $prepare_query->bind_param("ssss", $user_id, $book, $chapter, $verse);

            if (mysqli_errno($this->mysqli) == 0)
            {
                return 0;
            }

            $prepare_query->execute();
            $prepare_query->close();

            if (mysqli_errno($this->mysqli) != 0)
                return mysqli_error($this->mysqli);
            return 0;
        }

        function fetchCache()
        {
            if (!isset($this->mysqli))
                return -1;

            $fetched = $this->mysqli->query("SELECT * FROM cache WHERE USER_ID=");
        }
        function __distruct()
        {
            $this->mysqli->close();
        }
    }
?>
