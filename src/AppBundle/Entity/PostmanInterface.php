<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

/**
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */
interface PostmanInterface {

  public function getIdPostman();

  public function setFirstName($firstName);

  public function getFirstName();

  public function setLastName($lastName);

  public function getLastName();

  public function setCity($city);

  public function getCity();

  public function setPhone($phone);

  public function getPhone();

  public function setUser(\AppBundle\Entity\User $user = null);

  public function getUser();
}
