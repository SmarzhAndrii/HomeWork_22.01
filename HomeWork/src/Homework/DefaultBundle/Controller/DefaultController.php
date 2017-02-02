<?php

namespace Homework\DefaultBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
    	



        return $this->render('HomeworkDefaultBundle:Default:index.html.twig');
    }
}
