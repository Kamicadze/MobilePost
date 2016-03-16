<?php
namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Description of ProductTest
 *
 * @author Wiktor Pikosz <wiktor12348@gmail.com>
 */
class ProductTest extends WebTestCase{
  public function testIndex(){
    $client = static::createClient();
    $client->request('GET', '/product/');
    $request = $client->getResponse();
    
    echo $request->getStatusCode()."\n\n";
    echo $request->getCharset()."\n\n";
    echo $request->getContent()."\n\n";
  }
  
  public function testAdd(){
    $client = static::createClient();
    
    $param = array(
        'name' => "Chpisy",
        'description' => "Super fajny pojazd!"
    );
    
    $client->request('POST', '/product/add', $param);
    $request = $client->getResponse();
    //echo $request->getStatusCode()."\n\n";
    echo $request->getContent()."\n\n";

  }
}
