<?php

namespace TS\Bundle\HomepageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TSHomepageBundle:Default:index.html.twig');
    }
}
