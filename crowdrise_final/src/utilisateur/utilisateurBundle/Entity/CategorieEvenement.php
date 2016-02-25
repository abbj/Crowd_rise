<?php

namespace utilisateur\utilisateurBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategorieEvenement
 *
 * @ORM\Table(name="categorie_evenement")
 * @ORM\Entity
 */
class CategorieEvenement
{
    /**
     * @var integer
     *
     * @ORM\Column(name="ID_CATEGORIE_EVENEMENT", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorieEvenement;

    /**
     * @var string
     *
     * @ORM\Column(name="CATEGORIE", type="string", length=255, nullable=true)
     */
    private $categorie;



    /**
     * Get idCategorieEvenement
     *
     * @return integer 
     */
    public function getIdCategorieEvenement()
    {
        return $this->idCategorieEvenement;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return CategorieEvenement
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
