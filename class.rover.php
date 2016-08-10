<?php

class rover {
	public $x = null;
	public $y = null;
	public $direction = null;


	public function setPos($x, $y, $direction) {
		$this->x = $x;
		$this->y = $y;
		$this->direction = $direction;
	}


	public function command($command) {
		$command = str_split($command);
			foreach ($command as $data) {
				$this->handler($data);
			}
	}


	public function outputPos() {
		echo $this->x." ".$this->y." ".$this->direction;
	}


	private function handler($data) {
		switch ($data) {
	    case 'L': $this->left(); break;
			case 'R': $this->right(); break;
			case 'M': $this->move(); break;
		}
	}
}
?>
