<?php
namespace src\model;

use libs\Model;

class ProprietaireDb extends Model
{
    public function findAll()
    {
        return $this->entityManager
                    ->createQuery('SELECT p FROM Proprietaire p')
                    ->getResult();
    }
    
    public function getType_proprietaire()
    {
        return $this->entityManager
                    ->createQuery('SELECT p FROM TypeProprietaire p')
                    ->getResult();
    }
    public function findTypeProprietaire($id)
    {
        $found = $this->entityManager
                    ->createQuery('SELECT p FROM TypeProprietaire p WHERE p.id = :id')
                    ->setParameter('id', $id)
                    ->getResult();
        return $found[0];
    }
    public function find($id)
    {
        $found = $this->entityManager
                    ->createQuery('SELECT p FROM Proprietaire p WHERE p.id = :id')
                    ->setParameter('id', $id)
                    ->getResult();
        return $found[0];
    }

    public function add($proprietaire)
    {
        $this->entityManager->persist($proprietaire);
        $this->entityManager->flush();
    }
    public function delete($proprietaire)
    {
        $this->entityManager->remove($proprietaire);
        $this->entityManager->flush();
    }
}
