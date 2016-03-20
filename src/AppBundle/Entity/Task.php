<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of Task
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskRepository")
 * @ORM\Table(name="task")
 */
class Task {

  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id_task;

  /**
   * @ORM\ManyToOne(targetEntity="Postman", cascade={"all"}, fetch="EAGER")
   * @ORM\JoinColumn(name="id_postman", referencedColumnName="id_postman")
   */
  protected $postman;

  /**
   * @ORM\ManyToOne(targetEntity="Order", cascade={"all"}, fetch="EAGER")
   * @ORM\JoinColumn(name="id_order", referencedColumnName="id_order")
   */
  protected $order;

  /**
   * Dostarczona, odebrana, w doręczeniu
   * @ORM\Column(type="string", columnDefinition="ENUM('delivered', 'received', 'delivery')")
   */
  protected $status;

  /**
   * Get idTask
   *
   * @return integer
   */
  public function getIdTask() {
    return $this->id_task;
  }

  /**
   * Set status
   *
   * @param string $status
   *
   * @return Task
   */
  public function setStatus($status) {
    $this->status = $status;

    return $this;
  }

  /**
   * Get status
   *
   * @return string
   */
  public function getStatus() {
    return $this->status;
  }

  /**
   * Set postman
   *
   * @param \AppBundle\Entity\Postman $postman
   *
   * @return Task
   */
  public function setPostman(\AppBundle\Entity\Postman $postman = null) {
    $this->postman = $postman;

    return $this;
  }

  /**
   * Get postman
   *
   * @return \AppBundle\Entity\Postman
   */
  public function getPostman() {
    return $this->postman;
  }

  /**
   * Set order
   *
   * @param \AppBundle\Entity\Order $order
   *
   * @return Task
   */
  public function setOrder(\AppBundle\Entity\Order $order = null) {
    $this->order = $order;

    return $this;
  }

  /**
   * Get order
   *
   * @return \AppBundle\Entity\Order
   */
  public function getOrder() {
    return $this->order;
  }

}
