<?php

namespace SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SiteController extends Controller
{
    public function showHomepageAction()
    {
        return $this->render('SiteBundle:Site:index.html.twig');
    }
}
