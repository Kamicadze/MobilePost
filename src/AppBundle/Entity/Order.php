<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Order
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderRepository")
 * @ORM\Table(name="order")
 */
class Order {

  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id_order;

  /**
   * @ORM\ManyToOne(targetEntity="Parcel", cascade={"all"}, fetch="EAGER")
   * @ORM\JoinColumn(name="id_parcel", referencedColumnName="id_parcel")
   */
  protected $parcel;

  /**
   * @ORM\ManyToOne(targetEntity="Address", cascade={"all"}, fetch="EAGER")
   * @ORM\JoinColumn(name="id_from_address", referencedColumnName="id_address")
   */
  protected $from_address;

  /**
   * @ORM\ManyToOne(targetEntity="Address", cascade={"all"}, fetch="EAGER")
   * @ORM\JoinColumn(name="id_to_address", referencedColumnName="id_address")
   */
  protected $to_address;

  /**
   *
   * @ORM\Column(type="date")
   */
  protected $pickup_date;

  /**
   * Get idOrder
   *
   * @return integer
   */
  public function getIdOrder() {
    return $this->id_order;
  }

  /**
   * Set pickupDate
   *
   * @param \DateTime $pickupDate
   *
   * @return Order
   */
  public function setPickupDate($pickupDate) {
    $this->pickup_date = $pickupDate;

    return $this;
  }

  /**
   * Get pickupDate
   *
   * @return \DateTime
   */
  public function getPickupDate() {
    return $this->pickup_date;
  }

  /**
   * Set parcel
   *
   * @param \AppBundle\Entity\Parcel $parcel
   *
   * @return Order
   */
  public function setParcel(\AppBundle\Entity\Parcel $parcel = null) {
    $this->parcel = $parcel;

    return $this;
  }

  /**
   * Get parcel
   *
   * @return \AppBundle\Entity\Parcel
   */
  public function getParcel() {
    return $this->parcel;
  }

  /**
   * Set fromAddress
   *
   * @param \AppBundle\Entity\Address $fromAddress
   *
   * @return Order
   */
  public function setFromAddress(\AppBundle\Entity\Address $fromAddress = null) {
    $this->from_address = $fromAddress;

    return $this;
  }

  /**
   * Get fromAddress
   *
   * @return \AppBundle\Entity\Address
   */
  public function getFromAddress() {
    return $this->from_address;
  }

  /**
   * Set toAddress
   *
   * @param \AppBundle\Entity\Address $toAddress
   *
   * @return Order
   */
  public function setToAddress(\AppBundle\Entity\Address $toAddress = null) {
    $this->to_address = $toAddress;

    return $this;
  }

  /**
   * Get toAddress
   *
   * @return \AppBundle\Entity\Address
   */
  public function getToAddress() {
    return $this->to_address;
  }

}
