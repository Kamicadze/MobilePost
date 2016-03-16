<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Product
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */

/**
 * @ORM\Entity
 * @ORM\Table(name="product")
 */
class Product {

  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   *
   * @ORM\Column(type="string", length=100)
   */
  protected $name;

  /**
   *
   * @ORM\Column(type="text")
   */
  protected $description;

  /**
   * Get id
   *
   * @return integer
   */
  public function getId() {
    return $this->id;
  }

  /**
   * Set name
   *
   * @param string $name
   *
   * @return Product
   */
  public function setName($name) {
    $this->name = $name;

    return $this;
  }

  /**
   * Get name
   *
   * @return string
   */
  public function getName() {
    return $this->name;
  }

  /**
   * Set description
   *
   * @param string $description
   *
   * @return Product
   */
  public function setDescription($description) {
    $this->description = $description;

    return $this;
  }

  /**
   * Get description
   *
   * @return string
   */
  public function getDescription() {
    return $this->description;
  }

}
