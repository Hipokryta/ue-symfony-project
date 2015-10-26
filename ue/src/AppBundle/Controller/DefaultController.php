<?php

namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use db\DbBundle\Entity\Suspect;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends FOSRestController
{
    /**
     * @Route("/default/create")
     */
    public function createAction()
    {
        $suspect = new Suspect();
        $suspect->setFirstName('A Foo Bar');
        $suspect->setPrice('19.99');
        $suspect->setDescription('Lorem ipsum dolor');

        $em = $this->getDoctrine()->getManager();

        $em->persist($suspect);
        $em->flush();

        return new Response('Created suspect id '.$suspect->getId());
    }

    /**
     * @Route("/default/create1")
     */
    public function create1Action()
    {
        $html = $this->container->get('templating')->render(
            'lucky/number.html.twig',
            array('luckyNumberList' => 5)
            );

        return new Response($html);
    }
}
