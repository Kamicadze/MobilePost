<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\PostmanInterface;

/**
 * Description of PostmanRepository
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */
class PostmanRepository extends EntityRepository {

  public function save(PostmanInterface $postman) {
    $em = $this->getEntityManager();
    $em->persist($postman);
    $em->flush();
  }

}
