<?= $this->extend('Template/base'); ?>
<?= $this->Section('customtitel') ?>
<title>Liste des utilisateurs</title>
<?= $this->endSection() ?>
<?= $this->Section('custombody') ?>
<h1> Liste des utilisateurs</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>

      <th scope="col">email</th>
      <th scope="col">Action Modifier</th>
      <th scope="col">Action Suprimer</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($utilisateurs as $u): ?>
      <tr>
        <th><?= $u->idutilisateur ?></th>

        <td><?= $u->email_utilisateur ?></td>

        <td><a href="<?= base_url('/majutilisateur/') . $u->idutilisateur ?>">Modifier</a></td>
        <td> <button id="popup" onclick="supprimerPopup(<?= $u->idutilisateur ?>)">Supprimer</button></td>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<script>
  function supprimerPopup(idutilisateur) {
    if (confirm("Êtes-vous sûr de vouloir supprimer cet utilisateur ?") == true) {
      window.location.href = 'suputilisateur/' + idutilisateur;
    } else {
      document.getElementById("popup").style.block = "none";
    }
  }
</script>


<?= $this->endSection() ?>