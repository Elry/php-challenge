<?php declare(strict_types=1);
  error_reporting(E_ALL);

  require_once 'Mapper.php';
  
  class Showing extends Mapper{
    public function getResult(){
      return $this->setResult();
    }
  }

  $show = new Showing();
  print_r($show->getResult());
?>