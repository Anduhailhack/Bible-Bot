<?php
	namespace Utils;
	
	class Cache
	{
		private $book;
		private $chapter;
		private $verse_no;
		private $key;
		
		// setters 
		function cacheBook($book)
		{
			$this->book = $book;
		}
		
		function cacheChapter($chapter)
		{
			$this->chapter = $chapter;
		}
		
		function cacheVerse($verse_no)
		{
			$this->verse_no = $verse_no;
		}
		
		function cacheSearchKey($key)
		{
			$this->key = $key;
		}
		
		// getters 
		function getBook(){
			return $this->book;
		}
		
		function getChapter(){
			return $this->chapter;
		}
		
		function getVerseNo(){
			return $this->verse_no;
		}
		
		function getSearchKey(){
			return $this->key;
		}
	}
?>