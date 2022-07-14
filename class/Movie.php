<?php

class Movie {
  public $title;
  public $director;
  public $year;
  public $budget;
  public $boxOffice;
  public $profit;

  // costruttore
  function __construct(string $_title, string $_director, int $_year, int $_budget, int $_boxOffice) {
    $this->title = $_title;
    $this->director = $_director;
    $this->year = $_year;
    $this->budget = $_budget;
    $this->boxOffice = $_boxOffice;
  }

  // metodi
  /**
   * Get the value of title
   */ 
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set the value of title
   *
   * @return  self
   */ 
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get the value of director
   */ 
  public function getDirector()
  {
    return $this->director;
  }

  /**
   * Set the value of director
   *
   * @return  self
   */ 
  public function setDirector($director)
  {
    $this->director = $director;

    return $this;
  }

  /**
   * Get the value of year
   */ 
  public function getYear()
  {
    return $this->year;
  }

  /**
   * Set the value of year
   *
   * @return  self
   */ 
  public function setYear($year)
  {
    $this->year = $year;

    return $this;
  }

  /**
   * Get the value of budget
   */ 
  public function getBudget()
  {
    return $this->budget;
  }

  /**
   * Set the value of budget
   *
   * @return  self
   */ 
  public function setBudget($budget)
  {
    $this->budget = $budget;

    return $this;
  }

  /**
   * Get the value of boxOffice
   */ 
  public function getBoxOffice()
  {
    return $this->boxOffice;
  }

  /**
   * Set the value of boxOffice
   *
   * @return  self
   */ 
  public function setBoxOffice($boxOffice)
  {
    $this->boxOffice = $boxOffice;

    return $this;
  }

  /**
   * Get the value of profit
   */ 
  public function getProfit()
  {
    return $this->profit;
  }

  /**
   * Set the value of profit
   *
   * @return  self
   */ 
  public function setProfit()
  {
    $this->profit = $this->boxOffice - $this->budget;

    return $this;
  }
}

?>