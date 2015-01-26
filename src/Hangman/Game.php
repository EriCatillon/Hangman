<?php

namespace Hangman;

class Game{

	protected $word;

	public function run($num, $current)
	{
		return $num + $current;
	}
	public function getFirstCurrent($num, $current)
	{
		return $this->firstCurrent;
	}
}