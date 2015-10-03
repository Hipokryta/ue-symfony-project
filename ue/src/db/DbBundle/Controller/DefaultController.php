<?php

namespace db\DbBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('dbDbBundle:Default:index.html.twig', array('name' => $name));
    }
}
