<?php
	namespace App;

	include_once $_SERVER["DOCUMENT_ROOT"] . "/home_addr/bible_bot/Bible-Bot/utils/config.php";

	class InlineQuery
	{
		private $request;

		function __construct($request)
		{
			$this->request = $request;
		}

		function init()
		{

		}
	}
?>
