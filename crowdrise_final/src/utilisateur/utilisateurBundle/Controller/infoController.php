<?php

namespace utilisateur\utilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class infoController extends Controller
{
    public function editinfoAction()
    {
        return $this->render('utilisateurBundle:Default:editinfo.html.twig');
    }
}
