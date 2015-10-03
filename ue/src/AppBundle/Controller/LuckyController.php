<?php
/**
 * Created by PhpStorm.
 * User: michal
 * Date: 10/2/2015
 * Time: 9:03 PM
 */
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends FOSRestController
{
    /**
     * @Route("/lucky/number/{count}")
     */
    public function numberAction($count)
    {
        $numbers = array();
        for ($i = 0; $i < $count; $i++) {
            $numbers[] = rand(0, 100);
        }

        $numbersList = implode(', ', $numbers);

        $html = $this->container->get('templating')->render(
            'lucky/number.html.twig',
            array('luckyNumberList' => $numbersList)
        );

        return new Response($html);
    }
}