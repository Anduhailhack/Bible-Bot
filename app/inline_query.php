<?php
	namespace App;

	include_once $_SERVER["DOCUMENT_ROOT"] . "/utils/config.php";

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
