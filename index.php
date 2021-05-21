<?php
	namespace Route;

	include_once $_SERVER["DOCUMENT_ROOT"].	"/home_addr/bible_bot/app/callback_query.php";
	// include_once $_SERVER["DOCUMENT_ROOT"].	"/home_addr/bible_bot/app/inline_query.php";
	include_once $_SERVER["DOCUMENT_ROOT"].	"/home_addr/bible_bot/app/message.php";

	use App\Message;
	use App\CallbackQuery;

	class Route
	{
		private $request;

		function __construct()
		{
			// taking a request via php input from telegram api
			// update object is inserted through php input
			$this->request = json_decode(file_get_contents("php://input"));

		}

		function route()
		{
			//button callbacks		  callback_query
			//commands 				  message->entities
			//text msgs				  message
			//inline query            inline_query
			if (!isset($this->request))
				return NULL;
			else if (isset($this->request->message))
				return new Message($this->request);
			else if (isset($this->request->callback_query))
				return new CallbackQuery($this->request);
			else if (isset($this->request->inline_query))
				return new InlineQuery($this->request);
			else
				return NULL;
		}
	}

	$route = new Route();
	$app = $route->route();
	if ($app != NULL)
		$app->init();
	// echo "Hello world";


?>
