<?php

  require_once 'SubClassOne.php';
  require_once 'SubClassTwo.php';
  require_once 'SubClassThree.php';

  // A facade doesn't create an object unlike the factory
  // This is a structural pattern and groups functions from 
  // Different classes into one function 
  class Facade {

    // This is a function that contains smaller functions that contain
    // Similar functionality from each class
    public function process() {
      (new SubClassOne)->isOpen();
      (new SubClassTwo)->isOpen();
      (new SubClassThree)->isOpen();
    }

  }

?>
