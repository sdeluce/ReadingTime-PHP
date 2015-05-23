<?php

/**
* Class de calcul du temps de lecture d'un article
*/
class TimeToRead
{
	
	private $article;
	private $words_per_second = 2.5;
	private $nbword;

	public $secondes;

	public function __construct($article)
	{
		$this->article = strip_tags($article);
		$this->nbword = str_word_count($this->article);

		$this->secondes = round($this->nbword / $this->words_per_second);
	}

	public function get_time(){
		$t = $this->secondes;
  		return sprintf('%02d:%02d:%02d', ($t/3600),($t/60%60), $t%60);
	}

	public function get_minutes()
	{
  		return round($this->secondes/60);
	}

}