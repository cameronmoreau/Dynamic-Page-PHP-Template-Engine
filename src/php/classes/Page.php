<?php 

class Page {
	private $title;
	private $content;
	private $sub_nav;

	public function setTitle($c) {
		$this->title = $c;
		$this->sub_nav = "php/inc/nav_".strtolower(substr($c, 2, strlen($this->title) - 4)).".php";
	}

	public function setContent($c) {
		$this->content = $c;
	}

	public function printTitle() {
		echo $this->title;
	}

	public function printContent() {
		echo $this->content;
	}

	public function getSubNav() {
		return $this->sub_nav;
	}
}

?>
