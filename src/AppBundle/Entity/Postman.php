<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Postman
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PostmanRepository")
 * @ORM\Table(name="postman")
 */
class Postman {

  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id_postman;

  /**
   *
   * @ORM\Column(type="string")
   */
  protected $first_name;

  /**
   *
   * @ORM\Column(type="string")
   */
  protected $last_name;

  /**
   *
   * @ORM\Column(type="string")
   */
  protected $city;

  /**
   *
   * @ORM\Column(type="string", length=8)
   */
  protected $phone;

  /**
   *
   * @ORM\Column(type="string")
   */
  protected $email;

  /**
   * Get idPostman
   *
   * @return integer
   */
  public function getIdPostman() {
    return $this->id_postman;
  }

  /**
   * Set firstName
   *
   * @param string $firstName
   *
   * @return Postman
   */
  public function setFirstName($firstName) {
    $this->first_name = $firstName;

    return $this;
  }

  /**
   * Get firstName
   *
   * @return string
   */
  public function getFirstName() {
    return $this->first_name;
  }

  /**
   * Set lastName
   *
   * @param string $lastName
   *
   * @return Postman
   */
  public function setLastName($lastName) {
    $this->last_name = $lastName;

    return $this;
  }

  /**
   * Get lastName
   *
   * @return string
   */
  public function getLastName() {
    return $this->last_name;
  }

  /**
   * Set city
   *
   * @param string $city
   *
   * @return Postman
   */
  public function setCity($city) {
    $this->city = $city;

    return $this;
  }

  /**
   * Get city
   *
   * @return string
   */
  public function getCity() {
    return $this->city;
  }

  /**
   * Set phone
   *
   * @param string $phone
   *
   * @return Postman
   */
  public function setPhone($phone) {
    $this->phone = $phone;

    return $this;
  }

  /**
   * Get phone
   *
   * @return string
   */
  public function getPhone() {
    return $this->phone;
  }

  /**
   * Set email
   *
   * @param string $email
   *
   * @return Postman
   */
  public function setEmail($email) {
    $this->email = $email;

    return $this;
  }

  /**
   * Get email
   *
   * @return string
   */
  public function getEmail() {
    return $this->email;
  }

}
