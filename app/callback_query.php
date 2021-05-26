<?php
	namespace App;

	include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/Bible-Bot/utils/config.php";
	include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/Bible-Bot/utils/payloads.php";
	include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/Bible-Bot/utils/response.php";

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
					else if (is_array($callBack) && $callBack["type"] == "verse")
					{
						// $parameter = [
						// 	"chat_id" => $chat_id,
						// 	"message_id" => $message_id,
						// 	"text" => "Test subject",
						// 	"reply_markup" => json_encode(Payloads::verse($callBack["param"]))
						// ];
						//
						// $response->editMessage($parameter);
					}
					break;
			}
		}

		function identifyCallback($chat_id, $callback_data)
		{
			if (str_contains($callback_data, "bo"))
			{
				$index = (int) (str_replace($callback_data, "bo", ""));
				// hERE IS WHERE IT STOPPED 
				// $cache = [
				// 	"book" => BOOKS[$index][0],
				// 	"chapter" => null,
				// 	"verse" => null,
				// 	"search_key" => null
				// ];

				$length = (int)(BOOKS[$index][1]);

				return array("type"=>"chapter", "param" => $length);
			}
			else if (str_contains($callback_data, "ch"))
			{
				$index = (int) (str_replace($callback_data, "ch", ""));


				return array("type"=>"verse", "param" => $index);
			}

			return null;
		}
	}
?>
