<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Description of TaskHistory
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */

/**
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskHistoryRepository")
 * @ORM\Table(name="task_history")
 */
class TaskHistory {

  /**
   * @ORM\Column(type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id_task_history;

  /**
   * @ORM\OneToOne(targetEntity="Task", cascade={"all"}, fetch="EAGER")
   * @ORM\JoinColumn(name="id_task", referencedColumnName="id_task")
   */
  protected $task;

  /**
   * Dostarczona, odebrana, w doręczeniu
   * @ORM\Column(type="string", columnDefinition="ENUM('delivered', 'received', 'delivery', 'location_changed')")
   */
  protected $status;

  /**
   *
   * @ORM\Column(type="datetime")
   */
  protected $date;

  /**
   *
   * @ORM\Column(type="string", nullable=true)
   */
  protected $localization;

  /**
   *
   * @ORM\Column(type="text", nullable=true)
   */
  protected $comment;

  /**
   * Get idTaskHistory
   *
   * @return integer
   */
  public function getIdTaskHistory() {
    return $this->id_task_history;
  }

  /**
   * Set status
   *
   * @param string $status
   *
   * @return TaskHistory
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
   * Set date
   *
   * @param \DateTime $date
   *
   * @return TaskHistory
   */
  public function setDate($date) {
    $this->date = $date;

    return $this;
  }

  /**
   * Get date
   *
   * @return \DateTime
   */
  public function getDate() {
    return $this->date;
  }

  /**
   * Set localization
   *
   * @param string $localization
   *
   * @return TaskHistory
   */
  public function setLocalization($localization) {
    $this->localization = $localization;

    return $this;
  }

  /**
   * Get localization
   *
   * @return string
   */
  public function getLocalization() {
    return $this->localization;
  }

  /**
   * Set comment
   *
   * @param string $comment
   *
   * @return TaskHistory
   */
  public function setComment($comment) {
    $this->comment = $comment;

    return $this;
  }

  /**
   * Get comment
   *
   * @return string
   */
  public function getComment() {
    return $this->comment;
  }

  /**
   * Set task
   *
   * @param \AppBundle\Entity\Task $task
   *
   * @return TaskHistory
   */
  public function setTask(\AppBundle\Entity\Task $task = null) {
    $this->task = $task;

    return $this;
  }

  /**
   * Get task
   *
   * @return \AppBundle\Entity\Task
   */
  public function getTask() {
    return $this->task;
  }

}
