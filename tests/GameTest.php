<?php

use Hangman\Game;
use Hangman\Word;

/**
* 
*/
class GameTest extends PHPUnit_Framework_TestCase
{
	
	protected $game ;
	protected function setUp() {
		$this->game = new Game(new Word('phpunit')) ; 
	}

	
}
