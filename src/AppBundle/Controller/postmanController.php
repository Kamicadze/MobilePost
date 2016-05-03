<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\HttpFoundation\Response;

/**
 * Description of postmanController
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */
class postmanController extends FOSRestController {

  public function postPostmanAction(Request $request) {
    $postman = $this->container->get("postman_form.handler");
    return $postman->post($request->request->all());
  }

  public function getPostmanAction($id) {
    $em = $this->getDoctrine()->getManager();
    $postman = $em->find("AppBundle:Postman", $id);

    return $postman;
  }

}
