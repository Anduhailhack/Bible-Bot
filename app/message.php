<?php
	namespace App;

	// include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/utils/cache.php";
	// include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/utils/response_struct.php";
	include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/utils/user_data.php";
	include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/database/database.php";
	include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/utils/response.php";
	include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/utils/payloads.php";

    use Utils\Response;
	use Utils\UserData;
	use Utils\Payloads;
	use Database\Database;

	class Message
	{
		private $request;

		function __construct($request)
		{
			$this->request = $request;
		}

		function init()
		{
            if (is_array($this->request->message->entities) &&
                ($this->request->message->entities[0]->type == "bot_command") &&
                ($this->request->message->text == "/start"))
            {
                $response = new Response();
				// $payload = new Payloads();
				$is_stored = $this->storeData($this->request);

				if ($is_stored == 0)
				{
					$parameter = [
						"chat_id" => $this->request->message->from->id,
						"text" => Payloads::$greeting,
						"reply_markup" => json_encode(Payloads::$main_menu)
					];

					$response->replyMarkup($parameter);
				}else {
					$parameter = [
						"chat_id" => $this->request->message->from->id,
						"text" => Payloads::$error,
					];

					$response->replyText($parameter);
				}

            }

		}

		private function storeData($request)
		{
			$userData = new UserData;
			$database = new Database();
			$db_init = $database->init();

			if ($db_init != 0)
				return $db_init;

			// Turnery isset Check
			(isset($request->message->from->id)) ? ($userData->user_id = $request->message->from->id) : ($userData->user_id = "NULL");
			($request->message->from->is_bot != NULL) ? ($userData->is_bot = $request->message->from->is_bot) : ($userData->is_bot = "NULL");
			(isset($request->message->from->first_name)) ? ($userData->u_first_name = $request->message->from->first_name) : ($userData->u_first_name = "NULL");
			(isset($request->message->from->last_name)) ? ($userData->u_last_name = $request->message->from->last_name) : ($userData->u_last_name = "NULL");
			(isset($request->message->from->username)) ? ($userData->u_username = $request->message->from->username) : ($userData->u_username = "NULL");
			(isset($request->message->chat->id)) ? ($userData->chat_id = $request->message->chat->id) : ($userData->chat_id = "NULL");

			(isset($request->message->chat->id)) ? ($userData->chat_id = $request->message->chat->id) : ($userData->chat_id = "NULL");
			(isset($request->message->chat->first_name)) ? ($userData->ch_first_name = $request->message->chat->first_name) : ($userData->ch_first_name = "NULL");
			(isset($request->message->chat->last_name)) ? ($userData->ch_last_name = $request->message->chat->last_name) : ($userData->ch_last_name = "NULL");
			(isset($request->message->chat->username)) ? ($userData->ch_username = $request->message->chat->username) : ($userData->ch_username = "NULL");
			(isset($request->message->chat->type)) ? ($userData->type = $request->message->chat->type) : ($userData->type = "NULL");
			(isset($request->message->date)) ? ($userData->date = $request->message->date) : ($userData->date = "NULL");

			(isset($request->message->text)) ? ($userData->message_data = $request->message->text) : ($userData->message_data = "NULL");

			$is_inserted = $database->insertUser($userData);

			return $is_inserted;
		}
	}
?>
