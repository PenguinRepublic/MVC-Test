<?php
	class PagesController{
		public function home(){
			$firstName = 'Jon';
			$lastName = 'Snow';
			require_once('views/pages/home.php');
		}

		public function error(){
			require_once('views/pages/error.php');
		}
	}
?>