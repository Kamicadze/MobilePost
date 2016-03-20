<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Address
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AddressRepository")
 * @ORM\Table(name="address")
 */
class Address {

  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id_address;

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
   * @ORM\Column(type="string")
   */
  protected $street;

  /**
   *
   * @ORM\Column(type="string", length=32)
   */
  protected $flat_number;

  /**
   *
   * @ORM\Column(type="string", length=8)
   */
  protected $postal_code;

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
   * Get idAddress
   *
   * @return integer
   */
  public function getIdAddress() {
    return $this->id_address;
  }

  /**
   * Set firstName
   *
   * @param string $firstName
   *
   * @return Address
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
   * @return Address
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
   * @return Address
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
   * Set street
   *
   * @param string $street
   *
   * @return Address
   */
  public function setStreet($street) {
    $this->street = $street;

    return $this;
  }

  /**
   * Get street
   *
   * @return string
   */
  public function getStreet() {
    return $this->street;
  }

  /**
   * Set flatNumber
   *
   * @param string $flatNumber
   *
   * @return Address
   */
  public function setFlatNumber($flatNumber) {
    $this->flat_number = $flatNumber;

    return $this;
  }

  /**
   * Get flatNumber
   *
   * @return string
   */
  public function getFlatNumber() {
    return $this->flat_number;
  }

  /**
   * Set postalCode
   *
   * @param string $postalCode
   *
   * @return Address
   */
  public function setPostalCode($postalCode) {
    $this->postal_code = $postalCode;

    return $this;
  }

  /**
   * Get postalCode
   *
   * @return string
   */
  public function getPostalCode() {
    return $this->postal_code;
  }

  /**
   * Set phone
   *
   * @param string $phone
   *
   * @return Address
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
   * @return Address
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
