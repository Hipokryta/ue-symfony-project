<?php

namespace db\DbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DbBundle\Entity\Suspect;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('dbDbBundle:Default:index.html.twig', array('name' => $name));
    }

	public function createAction()
	{
	    $product = new Suspect();
	    $product->setName('A Foo Bar');
	    $product->setPrice('19.99');
	    $product->setDescription('Lorem ipsum dolor');

	    $em = $this->getDoctrine()->getManager();

	    $em->persist($product);
	    $em->flush();

	    return new Response('Created product id '.$product->getId());
	}
}
