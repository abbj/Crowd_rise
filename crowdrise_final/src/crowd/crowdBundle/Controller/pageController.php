<?php

namespace crowd\crowdBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;



use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
class pageController extends Controller
{
    public function acceuilAction()
    {
        return $this->render('crowdBundle:Default:page/acceuil.html.twig');
    }
    
    

            public function List_projetsAction()
    {
        return $this->render('crowdBundle:Default:Projets/List_projets.html.twig');
    }
    
         public function detail_projetsAction()
    {
        return $this->render('crowdBundle:Default:Projets/detail_projets.html.twig');
    }           
    public function Calendrier_evenementsAction()
    {
        return $this->render('crowdBundle:Default:Evenement/Calendrier_evenements.html.twig');
    }   
      public function detail_evenementAction()
    {
        return $this->render('crowdBundle:Default:Evenement/detail_evenement.html.twig');
    }  
       public function contactAction()
    {
        return $this->render('crowdBundle:Default:Contact/contact.html.twig');
    }  
    
    
    public function testAction()
              {
        
          if (!$this->get('security.context')->isGranted('ROLE_ADMIN')) {
      // Sinon on déclenche une exception « Accès interdit »
   

// Si l'utilisateur courant est anonyme, $user vaut « anon. »
$userManager = $this->get('fos_user.user_manager');

// Pour charger un utilisateur
$user = $userManager->findUserBy(array('username' => 'jat'));
// Sinon, c'est une instance de notre entité User, on peut l'utiliser normalement
$id=$userManager->findUsers();

// nous donne le nom de user connecte
$c = $this->container->get('security.context')->getToken()->getUser();
$connecte=$c->getId();

              }
        return $this->render('crowdBundle:Default:test/test.html.twig',array('id'=>$id,'connecte'=>$connecte));
    }  
    
    
    
    
    
    
    
}
