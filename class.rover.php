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


	private function move() {
		switch ($this->direction) {
			case 'N': $this->y++; break;
			case 'E': $this->x++; break;
			case 'S': $this->y--; break;
			case 'W': $this->x--; break;
		}
	}


	private function left() {
		switch ($this->direction) {
	    case 'N': $this->direction = 'W'; break;
	    case 'W': $this->direction = 'S'; break;
	    case 'S': $this->direction = 'E'; break;
	    case 'E': $this->direction = 'N'; break;
		}
	}


	private function right() {
		switch ($this->direction) {
	    case 'N': $this->direction = 'E'; break;
	    case 'E': $this->direction = 'S'; break;
	    case 'S': $this->direction = 'W'; break;
	    case 'W': $this->direction = 'N'; break;
		}
	}

}
?>
