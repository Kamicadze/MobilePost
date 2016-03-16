<?php
namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\Route;
use FOS\RestBundle\Controller\Annotations\Prefix;
use FOS\RestBundle\Controller\Annotations\NamePrefix;
use FOS\RestBundle\Controller\Annotations\RouteResource;
use FOS\RestBundle\Controller\Annotations\View;
use FOS\RestBundle\Controller\Annotations\QueryParam;
use Symfony\Component\HttpFoundation\Request;

use AppBundle\Entity\Product;

/**
 * Description of productController
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */

/**
 * @Route("/product", name="controller_product")
 */
class productController extends FOSRestController{
  
  /**
   * @Route("/", name="controller_product_index", defaults={"_format" = "json"})
   */
  public function indexAction(){
    $em = $this->getDoctrine()->getManager();
    $products = $em->getRepository("AppBundle:Product")->findAll();
    
    $view = $this->view($products,200);
    return $this->handleView($view);
  }
  
  /**
   * @Route("/add", name="controller_product_add", defaults={"_format" = "json"})
   */
  public function addAction(Request $request){
    $em = $this->getDoctrine()->getManager();
    $name = $request->get('name');
    $description = $request->get('description');
    
    //var_dump($paramFetcher->getParams());
    $product = new Product;
    $product->setName($name);
    $product->setDescription($description);
    
    $em->persist($product);
    $em->flush();
    
    $view = $this->view($product,200);
    return $this->handleView($view);
  }
}
