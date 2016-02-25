<?php

namespace utilisateur\utilisateurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class adminController extends Controller
{
    public function adminacceuilAction()
    {
        return $this->render('utilisateurBundle:admin:adminacceuil.html.twig');
    }
    
    
     public function afficherUserAdminAction(){
        
          $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('utilisateurBundle:User')->findAll();

        return $this->render('utilisateurBundle:admin:afficherUserAdmin.html.twig', array(
            'entities' => $entities,
        ));
        
        
    }
    
        public function afficherProjetAdminAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('utilisateurBundle:Projet')->findAll();

        return $this->render('utilisateurBundle:admin:afficherProjetAdmin.html.twig', array(
            'entities' => $entities,
        ));
    }
    
     public function afficherUnProjetAdminAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('utilisateurBundle:Projet')->find($id);

      

        return $this->render('utilisateurBundle:admin:afficherUnProjetAdmin.html.twig', array(
            'entity'      => $entity,
            
        ));
    
    }
    
    
    public function afficherLesUtilisateurAction(){
        
        
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('utilisateurBundle:User')->findAll();

        return $this->render('utilisateurBundle:admin:afficherutilisateur.html.twig', array(
            'entities' => $entities,
        ));
    }
    

}
