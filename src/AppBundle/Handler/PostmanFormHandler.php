<?php

namespace AppBundle\Handler;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormFactoryInterface;
use AppBundle\Entity\Postman;
use AppBundle\Form\PostmanType;

/**
 * Description of PostmanFormHandler
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */
class PostmanFormHandler {

  private $repository;
  private $formFactory;

  public function __construct(ObjectManager $repository, FormFactoryInterface $formFactory) {
    $this->repository = $repository;
    $this->formFactory = $formFactory;
  }

  public function post(array $parameters) {
    $postman = new Postman;
    return $this->processForm($postman, $parameters);
  }

  protected function processForm($postman, $parameters) {
    $form = $this->formFactory->create('AppBundle\Form\PostmanType', $postman);
    $form->submit($parameters);
    $em = $this->repository;

    if ($form->isValid()) {
      $em->getRepository("AppBundle:Postman")->save($postman);
      return $postman;
    }
    return $form;
  }

}
