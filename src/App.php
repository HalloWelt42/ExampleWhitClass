<?php

namespace EWC;

use EWC\model\Color;
use EWC\model\Person;
use EWC\model\PersonList;

class App
{

  /**
   * App constructor.
   */
  public function __construct()
  {


    $persons = new PersonList(Person::class);
    $marcel = (new Person())
        ->setName('Marcel')
        ->setEyeColor(
            (new Color())
            ->setR(255)
            ->setG(000)
            ->setB(111)
        )
        ->setHight(172)
    ->setHobby(['coding','bike']);
    $ar = $marcel->getHobby();


    $persons[] = $marcel;


    $marcel2 = clone $marcel;
    $marcel2->setHight(195);
    $marcel2->getEyeColor()->setR(10);
    $marcel2->addHobby();


    $persons[] = $marcel2;


    print_r($persons);


  }

}