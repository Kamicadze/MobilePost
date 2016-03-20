<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Parcel
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ParcelRepository")
 * @ORM\Table(name="parcel")
 */
class Parcel {

  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id_parcel;

  /**
   *
   * @ORM\Column(type="integer")
   */
  protected $width;

  /**
   *
   * @ORM\Column(type="integer")
   */
  protected $height;

  /**
   *
   * @ORM\Column(type="integer")
   */
  protected $length;

  /**
   *
   * @ORM\Column(type="string")
   */
  protected $content;

  /**
   *
   * @ORM\Column(type="integer")
   */
  protected $weight;

  /**
   * Get idParcel
   *
   * @return integer
   */
  public function getIdParcel() {
    return $this->id_parcel;
  }

  /**
   * Set width
   *
   * @param integer $width
   *
   * @return Parcel
   */
  public function setWidth($width) {
    $this->width = $width;

    return $this;
  }

  /**
   * Get width
   *
   * @return integer
   */
  public function getWidth() {
    return $this->width;
  }

  /**
   * Set height
   *
   * @param integer $height
   *
   * @return Parcel
   */
  public function setHeight($height) {
    $this->height = $height;

    return $this;
  }

  /**
   * Get height
   *
   * @return integer
   */
  public function getHeight() {
    return $this->height;
  }

  /**
   * Set length
   *
   * @param integer $length
   *
   * @return Parcel
   */
  public function setLength($length) {
    $this->length = $length;

    return $this;
  }

  /**
   * Get length
   *
   * @return integer
   */
  public function getLength() {
    return $this->length;
  }

  /**
   * Set content
   *
   * @param string $content
   *
   * @return Parcel
   */
  public function setContent($content) {
    $this->content = $content;

    return $this;
  }

  /**
   * Get content
   *
   * @return string
   */
  public function getContent() {
    return $this->content;
  }

  /**
   * Set weight
   *
   * @param integer $weight
   *
   * @return Parcel
   */
  public function setWeight($weight) {
    $this->weight = $weight;

    return $this;
  }

  /**
   * Get weight
   *
   * @return integer
   */
  public function getWeight() {
    return $this->weight;
  }

}
