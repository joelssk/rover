<?php
// Example PHP class for a NASA rover
// Joel McCauley - 8/10/16 - For Level Interactive

class rover {
	public $x = null;
	public $y = null;
	public $direction = null;

	// Sets the starting position of the rover
	public function setPos($x, $y, $direction) {
		$this->x = $x;
		$this->y = $y;
		$this->direction = $direction;
	}

	// Parses the individual letter commands into an array via str_split, then passes them to the command handler
	public function command($command) {
		$command = str_split($command);
			foreach ($command as $data) {
				$this->handler($data);
			}
	}

	// Outputs the finalized string to buffer
	public function outputPos() {
		echo $this->x." ".$this->y." ".$this->direction;
	}

	// Issues the command to proper handler
	private function handler($data) {
		switch ($data) {
	    case 'L': $this->left(); break;
			case 'R': $this->right(); break;
			case 'M': $this->move(); break;
			default: $this->outputError("Error in handler");
		}
	}

	// Move - The below comment represents the movement of N/S/E/W on an x/y axis
	// N=+1, E=+1, S=-1, W=-1
	private function move() {
		switch ($this->direction) {
			case 'N': $this->y++; break;
			case 'E': $this->x++; break;
			case 'S': $this->y--; break;
			case 'W': $this->x--; break;
			default: $this->outputError("Error in move handler");
		}
	}

	// Left - Handles the rovers movement in the left direction
	private function left() {
		switch ($this->direction) {
	    case 'N': $this->direction = 'W'; break;
	    case 'W': $this->direction = 'S'; break;
	    case 'S': $this->direction = 'E'; break;
	    case 'E': $this->direction = 'N'; break;
			default: $this->outputError("Error in left handler");
		}
	}

	// Right - Handles the rovers movement in the right direction
	private function right() {
		switch ($this->direction) {
	    case 'N': $this->direction = 'E'; break;
	    case 'E': $this->direction = 'S'; break;
	    case 'S': $this->direction = 'W'; break;
	    case 'W': $this->direction = 'N'; break;
			default: $this->outputError("Error in right handler");
		}
	}

	// Returns a failure message to the buffer
	private function outputError($message) {
		echo $message;
	}

}

?>
