<?php
	namespace App;

	include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/utils/config.php";
	include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/utils/payloads.php";
	include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/utils/response.php";

	use Utils\Payloads;
	use Utils\Response;

	class CallbackQuery
	{
		private $request;

		function __construct($request)
		{
			$this->request = $request;
		}

		function init()
		{
			$chat_id = $this->request->callback_query->message->chat->id;
			$message_id = $this->request->callback_query->message->message_id;
			$data = $this->request->callback_query->data;
			$response = new Response();
			switch ($data) {
				case 'bible':
					$parameter = [
						"chat_id" => $chat_id,
						"message_id" => $message_id,
						"text" => Payloads::$testaments,
						"reply_markup" => json_encode(Payloads::$bible_menu)
					];

					$response->editMessage($parameter);
					break;
				case 'old':
					$parameter = [
						"chat_id" => $chat_id,
						"message_id" => $message_id,
						"text" => Payloads::$testaments,
						"reply_markup" => json_encode(Payloads::$old_testament)
					];

					$response->editMessage($parameter);
					break;
				case 'new':
					$parameter = [
						"chat_id" => $chat_id,
						"message_id" => $message_id,
						"text" => Payloads::$testaments,
						"reply_markup" => json_encode(Payloads::$new_testament)
					];

					$response->editMessage($parameter);
					break;
				case 'back_mm':
					$parameter = [
						"chat_id" => $chat_id,
						"message_id" => $message_id,
						"text" => Payloads::$greeting,
						"reply_markup" => json_encode(Payloads::$main_menu)
					];

					$response->editMessage($parameter);
					break;
				case 'bible_m':
					$parameter = [
						"chat_id" => $chat_id,
						"message_id" => $message_id,
						"text" => Payloads::$testaments,
						"reply_markup" => json_encode(Payloads::$bible_menu)
					];

					$response->editMessage($parameter);
					break;
				default:
					$callBack = $this->identifyCallback($chat_id, $data);
					if (is_array($callBack) && $callBack["type"] == "chapter")
					{
						$parameter = [
							"chat_id" => $chat_id,
							"message_id" => $message_id,
							"text" => "Test subject",
							"reply_markup" => json_encode(Payloads::chapter($callBack["param"]))
						];

						$response->editMessage($parameter);
					}
					break;
			}
		}

		function identifyCallback($chat_id, $callback_data)
		{
			// $fd = fopen($cache_path, "r");
			// $cache = fread($fd, filesize($fd));
			// $cache = unserialize($cache);
			//
			// if (isset($cache["search_key"]))
			// {
			// 	//
			// }

			if (strpos($callback_data, "bo") != -1)
			{
				$index = (int) (str_replace($callback_data, "bo", ""));
				$cache = [
					"book" => BOOKS[$index][0],
					"chapter" => null,
					"verse" => null,
					"search_key" => null
				];

				$cache = serialize($cache);
				$fd = fopen("./data/".$chat_id.".txt", "w");
				fwrite($fd, $cache);
				fclose($fd);

				$length = (int)(BOOKS[$index][1]);

				return array("type"=>"chapter", "param" => $length);
			}
			else if (strpos($callback_data, "ch") != -1)
			{
				$index = (int) (str_replace($callback_data, "ch", ""));
				// $cache = [
				// 	"book" => BOOKS[$index][0],
				// 	"chapter" => null,
				// 	"verse" => null,
				// 	"search_key" => null
				// ];

				$fd = fopen("./data/".$chat_id.".txt", "r");
				$cache = fread($fd, filesize($fd));
				$cache = unserialize($cache);

				$cache["chapter"] = $index;

				$cache = serialize($cache);
				$fd = fopen("./data/".$chat_id.".txt", "w");
				fwrite($fd, $cache);
				fclose($fd);

				return array("type"=>"verse", "param" => "api call require");
			}

			return null;
		}
	}
?>
