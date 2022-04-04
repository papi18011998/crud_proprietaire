<div>
    <h1>Liste des propriétaires</h1>
    <hr>
    <center> <h2>Liste des propriétaires particuliers</h2></center>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Code du propritaire</th>
      <th scope="col">Prénom(s) et Nom</th>
      <th scope="col">Numero de CNI</th>
      <th scope="col">Date de naissance</th>
      <th scope="col">Lieu de naissance</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
   
    <?php
    foreach($data as $value) {
        if($value->getType_proprietaire()->getLibelle()=='particulier'){?>
      <tr>
        <td><?=$value->getCode_proprietaire() ?></td>
        <td><?=$value->getPrenom().' '.$value->getNom() ?></td>
        <td><?=$value->getCni() ?></td>
        <td><?=$value->getDateNaissance() ?></td>
        <td><?=$value->getLieu() ?></td>
        <td><?=$value->getTelephone() ?></td>
        <?php echo $value->getDateNaissance(); ?>
        <td>
            <a href="Proprietaires/edit/<?=$value->getId() ?>"><i class="bi bi-pen-fill text-success" title="Modifier"></i></a>
            <a href="Proprietaires/delete/<?=$value->getId() ?>"><i class="bi bi-x-circle text-danger" title="Supprimer"></i></a>
        </td>
      </tr>
    <?php }} ?>
  </tbody>
</table>
<hr>
<!-- les propritaires de type entreprise -->
<center> <h2>Liste des propriétaires entreprise</h2></center>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Code du propritaire</th>
      <th scope="col">Raison sociale</th>
      <th scope="col">Siege sociale</th>
      <th scope="col">Téléphone</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($data as $value) {
        if($value->getType_proprietaire()->getLibelle()=='entreprise'){?>
      <tr>
        <td><?=$value->getCode_proprietaire() ?></td>
        <td><?=$value->getNom() ?></td>
        <td><?=$value->getAdresse() ?></td>
        <td><?=$value->getTelephone() ?></td>
        <td>
            <a href="Proprietaires/edit/<?=$value->getId() ?>"><i class="bi bi-pen-fill text-success" title="Modifier"></i></a>
            <a href="Proprietaires/delete/<?=$value->getId() ?>"><i class="bi bi-x-circle text-danger" title="Supprimer"></i></a>
        </td>
      </tr>
    <?php }} ?>
    </tr>
  </tbody>
</table>
</div>