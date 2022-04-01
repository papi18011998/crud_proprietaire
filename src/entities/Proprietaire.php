<?php

use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity 
 * @ORM\Table(name="proprietaires")
 */ 
class Proprietaire
{
    /**
     * @ORM\Id 
     * @ORM\Column(type="integer",name="id") 
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string",name="nom")
     */
    private $nom;
    /**
     * @ORM\Column(type="string",name="prenom",nullable=true)
    */
    private $prenom;
    /**
     * @ORM\Column(type="string",name="adresse")
     */
    private $adresse;
    /**
     * @ORM\Column(type="string",name="telephone")
     */
    private $telephone;
    /**
     * @ORM\Column(type="string",name="lieu_de_naissance",nullable=true)
    
     */

    private $lieu;
    /**
     * @ORM\Column(type="string",name="date_de_naissance",nullable=true)
     */
    private $date_naissance;
    /**
     * @ORM\Column(type="string",name="cni",nullable=true)
     */
    private $cni;
    /**
     * @ORM\Column(type="string",name="civilite",nullable=true)
     */
    private $civilite;
    /**
     * @ORM\Column(type="string",name="photo")
     */
    private $photo;
    /**
     * @ORM\Column(type="string",name="nationalite",nullable=true)
     */
    private $nationalite;
    /**
     * @ORM\Column(type="string",name="code_propritetaire")
     */
    private $code_proprietaire;
    /**
     * @ORM\ManyToOne(targetEntity="TypePropritetaire", inversedBy="proprietaires")
     * @ORM\JoinColumn(name="type_proprietaire_id", referencedColumnName="id")
     */
    private $type_proprietaire;

    public function __construct()
    {
        
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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     *
     * @return  self
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     *
     * @return  self
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     *
     * @return  self
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get the value of dateNaissance
     */ 
    public function getDateNaissance()
    {
        return $this->dateNaissance;
    }

    /**
     * Set the value of dateNaissance
     *
     * @return  self
     */ 
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get the value of cni
     */ 
    public function getCni()
    {
        return $this->cni;
    }

    /**
     * Set the value of cni
     *
     * @return  self
     */ 
    public function setCni($cni)
    {
        $this->cni = $cni;

        return $this;
    }

    /**
     * Get the value of civilite
     */ 
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Set the value of civilite
     *
     * @return  self
     */ 
    public function setCivilite($civilite)
    {
        $this->civilite = $civilite;

        return $this;
    }

    /**
     * Get the value of photo
     */ 
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set the value of photo
     *
     * @return  self
     */ 
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get the value of nationalite
     */ 
    public function getNationalite()
    {
        return $this->nationalite;
    }

    /**
     * Set the value of nationalite
     *
     * @return  self
     */ 
    public function setNationalite($nationalite)
    {
        $this->nationalite = $nationalite;

        return $this;
    }

    /**
     * Get the value of code_proprietaire
     */ 
    public function getCode_proprietaire()
    {
        return $this->code_proprietaire;
    }

    /**
     * Set the value of code_proprietaire
     *
     * @return  self
     */ 
    public function setCode_proprietaire($code_proprietaire)
    {
        $this->code_proprietaire = $code_proprietaire;

        return $this;
    }

    /**
     * Get the value of type_proprietaire
     */ 
    public function getType_proprietaire()
    {
        return $this->type_proprietaire;
    }

    /**
     * Set the value of type_proprietaire
     *
     * @return  self
     */ 
    public function setType_proprietaire($type_proprietaire)
    {
        $this->type_proprietaire = $type_proprietaire;

        return $this;
    }
}
