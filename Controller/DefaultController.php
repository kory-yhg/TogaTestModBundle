<?php

namespace Toga\TestModBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TogaTestModBundle:Default:index.html.twig', array('name' => $name));
    }
}
