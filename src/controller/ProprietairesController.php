<?php
// namespace src\controller;

use libs\Controller;
use src\model\ProprietaireDb;

class ProprietairesController extends Controller
{
    public  function  index()
    {
        $propriteaireDao = new ProprietaireDb();
        $proprietaires = $propriteaireDao->findAll();
        return $this->view->load('proprietaires/index', $proprietaires);
    }
    public function create()
    {
        $proprietaireDao = new ProprietaireDb();
        $type_proprietaire = $proprietaireDao->getType_proprietaire();
        $this->view->load('proprietaires/create', $type_proprietaire);
    }
    public function add()
    {   $erreur =[];
        if ($_POST['type_proprietaire'] == '1') {
            $adresse = htmlspecialchars($_POST['adresse']);
            $nom = htmlspecialchars($_POST['nom']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $type_proprietaire = $_POST['type_proprietaire'];
            $code_proprietaire = 'PROPRIO-'.rand(100, 999).time();
            
            $proprietaireDao = new ProprietaireDb();
            $type_proprietaire_object = $proprietaireDao->findTypeProprietaire($type_proprietaire);
            require_once 'src/entities/Proprietaire.php';
            $proprietaire = new Proprietaire();
            $proprietaire->setAdresse($adresse);
            $proprietaire->setNom($nom);
            $proprietaire->setTelephone($telephone);
            $proprietaire->setType_proprietaire($type_proprietaire_object);
            $proprietaire->setCode_proprietaire($code_proprietaire);
            $proprietaireDao->add($proprietaire);
            $this->view->load('proprietaires/index',$proprietaireDao->findAll());
        }elseif ($_POST['type_proprietaire'] == '2') {
            $type_proprietaire = $_POST['type_proprietaire'];
            $civilite = $_POST['civilite'];
            $prenom = htmlspecialchars($_POST['prenom']);
            $nom = htmlspecialchars($_POST['nom']);
            $date_naissance = $_POST['date_naissance'];
            $lieu_naissance = htmlspecialchars($_POST['lieu_naissance']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $code_proprietaire = 'PROPRIO-'.rand(100, 999).time();
            $cni = htmlspecialchars($_POST['cni']);

            $proprietaireDao = new ProprietaireDb();
            $type_proprietaire_object = $proprietaireDao->findTypeProprietaire($type_proprietaire);
            $nationalite = htmlspecialchars($_POST['nationalite']);
            require_once 'src/entities/Proprietaire.php';
            $proprietaire = new Proprietaire();
            $proprietaire->setCivilite($civilite);
            $proprietaire->setPrenom($prenom);
            $proprietaire->setNom($nom);
            $proprietaire->setDateNaissance($date_naissance);
            $proprietaire->setLieu($lieu_naissance);
            $proprietaire->setAdresse($adresse);
            $proprietaire->setTelephone($telephone);
            $proprietaire->setNationalite($nationalite);
            $proprietaire->setCni($cni);
            $proprietaire->setType_proprietaire($type_proprietaire_object);
            $proprietaire->setCode_proprietaire($code_proprietaire);
            $proprietaireDao->add($proprietaire);

            $this->view->load('proprietaires/index', $proprietaireDao->findAll());
        }else{
            $erreur['non_type'] = 'Veuillez choisir un type de proprietaire précisé sur le formulaire';
        }
    }
    public function delete($id)
    {
        $proprietaireDao = new ProprietaireDb();
        $proprietaire = $proprietaireDao->find($id);
        $proprietaireDao->delete($proprietaire);
        $this->view->load('proprietaires/index',$proprietaireDao->findAll());
    }
    public function edit($id)
    {
        $proprietaireDao = new ProprietaireDb();
        $proprietaire = $proprietaireDao->find($id);
        $type_proprietaire = $proprietaireDao->findTypeProprietaires();
        $this->view->load('proprietaires/edit',[$proprietaire,$type_proprietaire]);
    }
    public function update()
    {
        $proprietaireDao = new ProprietaireDb();
        $proprietaire = $proprietaireDao->find($_POST['id']);
        $code_proprietaire = $proprietaire->getCode_proprietaire();
        require_once 'src/entities/Proprietaire.php';
        if ($_POST['type_proprietaire'] == '1') {

            $adresse = htmlspecialchars($_POST['adresse']);
            $nom = htmlspecialchars($_POST['nom']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $type_proprietaire = $_POST['type_proprietaire'];

            $type_proprietaire_object = $proprietaireDao->findTypeProprietaire($type_proprietaire);

            $proprietaire->setAdresse($adresse);
            $proprietaire->setNom($nom);
            $proprietaire->setTelephone($telephone);
            $proprietaire->setType_proprietaire($type_proprietaire_object);
            $proprietaire->setCode_proprietaire($code_proprietaire);
            $proprietaire->setCivilite(null);
            $proprietaire->setPrenom(null);
            $proprietaire->setDateNaissance(null);
            $proprietaire->setLieu(null);
            $proprietaire->setCni(null);
            $proprietaireDao->update($proprietaire);

            return $this->index();
        }
        elseif ($_POST['type_proprietaire'] == '2') {
            $type_proprietaire = $_POST['type_proprietaire'];
            $civilite = $_POST['civilite'];
            $prenom = htmlspecialchars($_POST['prenom']);
            $nom = htmlspecialchars($_POST['nom']);
            $date_naissance = $_POST['date_naissance'];
            $lieu_naissance = htmlspecialchars($_POST['lieu_naissance']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $telephone = htmlspecialchars($_POST['telephone']);
            $cni = htmlspecialchars($_POST['cni']);
            $nationalite = htmlspecialchars($_POST['nationalite']);

            $type_proprietaire_object = $proprietaireDao->findTypeProprietaire($type_proprietaire);
            
            $proprietaire->setCivilite($civilite);
            $proprietaire->setPrenom($prenom);
            $proprietaire->setNom($nom);
            $proprietaire->setDateNaissance($date_naissance);
            $proprietaire->setLieu($lieu_naissance);
            $proprietaire->setAdresse($adresse);
            $proprietaire->setTelephone($telephone);
            $proprietaire->setNationalite($nationalite);
            $proprietaire->setCni($cni);
            $proprietaire->setType_proprietaire($type_proprietaire_object);
            $proprietaire->setCode_proprietaire($code_proprietaire);
            var_dump($proprietaireDao->update($proprietaire));

            $proprietaireDao->update($proprietaire);

            return $this->index();
        }
        
        
    }
}

