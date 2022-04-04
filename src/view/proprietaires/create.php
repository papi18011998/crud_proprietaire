<div class="container">
<form action='../Proprietaires/add' method="post">
    <!-- type de propritetaire -->
    <div class="row p-2">
        <select name="type_proprietaire" id="type_proprietaire" class="form-select form-select-lg mb-3">
            <?php
                foreach($data as $type_proprietaire)
                {
                    echo '<option value="'.$type_proprietaire->getId().'">'.$type_proprietaire->getLibelle().'</option>';
                }
            ?>
        </select>
    </div>
    <!-- nom et prenom -->
  <div class="row">
    <div class="col">
      <select name="civilite" id="civilite" class="form-select">
        <option value="Monsieur">Monsieur</option>
        <option value="Madame">Madame</option>
        <option value="Mademoiselle">Mademoiselle</option>
      </select>
    </div>
    <div class="col">
      <input type="text" name="prenom" id='prenom' class="form-control" placeholder="Prenom">
    </div>
    <div class="col">
      <input type="text" name='nom' id="nom" class="form-control" placeholder="Nom">
    </div>

  </div>
    <!-- date et lieu de naissance -->
  <div class="row my-4">
    <div class="col">
      <input type="date" name="date_naissance" id="date_naissance" class="form-control" placeholder="Date de naissance">
    </div>
    <div class="col">
      <input type="text" name="lieu_naissance" class="form-control" id="lieu" placeholder="Lieu de naissance">
    </div>
  </div>
  <!-- adresse et telephone -->
  <div class="row my-4">
    <div class="col">
      <input type="text" name="adresse" class="form-control" id="adresse" placeholder="Adresse">
    </div>
    <div class="col">
      <input type="text" name="telephone" class="form-control" id="telephone" placeholder="Téléphone">
    </div>
  </div>
    <!-- cni et nationalite -->
  <div class="row my-4">
    <div class="col">
      <input type="text" name="cni" class="form-control" id="cni" placeholder="Numero de CNI">
    </div>
    <div class="col">
      <input type="text" name="nationalite" class="form-control" id="nationalite" placeholder="Nationalité">
    </div>
   </div>
   <div class="row my-4">
    <div class="col text-center">
      <input type="submit" class="btn btn-success col-6"  value="Entegistrer ce proprietaire">
    </div>
    <div class="col text-center">
      <input type="reset" class="btn btn-danger col-6" value="Vider les champs">
    </div>
   </div>
  </div> 
</form>
</div>
<script>
    let type_proprietaire = document.getElementById('type_proprietaire');
    type_proprietaire.addEventListener("change",()=>{
        if (type_proprietaire.value=='1') {
            let prenom = document.getElementById('prenom');
            let nom = document.getElementById('nom');
            let date_naissance = document.getElementById('date_naissance');
            let lieu = document.getElementById('lieu');
            let civilite = document.getElementById('civilite');
            let cni = document.getElementById('cni');
            let nationalite = document.getElementById('nationalite');
            prenom.setAttribute('disabled','disabled');
            date_naissance.setAttribute('disabled','disabled');
            lieu.setAttribute('disabled','disabled');
            cni.setAttribute('disabled','disabled');
            nationalite.setAttribute('disabled','disabled');
            civilite.setAttribute('disabled','disabled');
            nom.setAttribute('placeholder','Raison sociale');

        }else{
            let prenom = document.getElementById('prenom');
            let nom = document.getElementById('nom');
            let date_naissance = document.getElementById('date_naissance');
            let lieu = document.getElementById('lieu');
            let civilite = document.getElementById('civilite');
            let cni = document.getElementById('cni');
            let nationalite = document.getElementById('nationalite');
            prenom.removeAttribute('disabled');
            date_naissance.removeAttribute('disabled');
            lieu.removeAttribute('disabled');
            cni.removeAttribute('disabled');
            nationalite.removeAttribute('disabled');
            civilite.removeAttribute('disabled');
            nom.setAttribute('placeholder','Nom');
        }
    })

</script>