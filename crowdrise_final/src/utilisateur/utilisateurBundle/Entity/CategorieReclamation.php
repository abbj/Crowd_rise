<?php

namespace utilisateur\utilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieReclamation
 *
 * @ORM\Table(name="categorie_reclamation")
 * @ORM\Entity
 */
class CategorieReclamation
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CATEGORIE_RECLAMATION", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorieReclamation;

    /**
     * @var string
     *
     * @ORM\Column(name="CONTENU", type="text", nullable=true)
     */
    private $contenu;



    /**
     * Get idCategorieReclamation
     *
     * @return integer 
     */
    public function getIdCategorieReclamation()
    {
        return $this->idCategorieReclamation;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return CategorieReclamation
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }
}
