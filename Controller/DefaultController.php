<?php

namespace TS\Bundle\HomepageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TSHomepageBundle:Default:index.html.twig');
    }
    
    public function projectsAction()
    {
        return $this->render('TSHomepageBundle:Default:projects.html.twig');
    }
    
    public function imprintAction()
    {
        return $this->render('TSHomepageBundle:Default:imprint.html.twig');
    }
    
    public function contactAction()
    {
        return $this->render('TSHomepageBundle:Default:contact.html.twig');
    }
}
