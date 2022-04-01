<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity 
 * @ORM\Table(name="type_proprietaires")
 */ 
class TypeProprietaire
{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer",name="id") 
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string",name="libelle")
     */
    private $libelle;
    /**
     * One TypePropritetaire has Many Proprietaires.
     * @ORM\OneToMany(targetEntity="Proprietaire", mappedBy="type_proprietaire")
     */
    private $proprietaires;

    public function __construct()
    {
        $this->proprietaires = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }
    

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }
    

    /**
     * Get the value of proprietaires
     */ 
    public function getProprietaires()
    {
        return $this->proprietaires;
    }

    /**
     * Set the value of proprietaires
     *
     * @return  self
     */ 
    public function setProprietaires($proprietaires)
    {
        $this->proprietaires = $proprietaires;

        return $this;
    }
}
