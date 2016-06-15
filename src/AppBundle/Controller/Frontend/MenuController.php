<?php

namespace AppBundle\Controller\Frontend;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MenuController extends Controller {
    /**
     * @Route("/", name="menu")
     */
    public function renderTemplate() {
        return $this->render('menu.html.twig');
    }
}