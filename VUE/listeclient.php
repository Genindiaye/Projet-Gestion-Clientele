<!DOCTYPE html>
<html>
<head>
  <title>Liste des clients</title>
  <link rel="stylesheet" href="../Asset/style/style2.css">
</head>
<body>
  <div class="container">
    <h2>Liste des clients</h2>
    <div class="filter">
  <label for="search">Filtrer par nom :</label>
  <input type="text" id="search" name="search" placeholder="Rechercher un client...">
  <button type="button" id="filterBtn">Filtrer</button>

  <label for="sort">Trier par :</label>
  <select id="sort" name="sort">
    <option value="nom">Nom</option>
    <option value="adresse">Adresse</option>
    <option value="telephone">Numéro de téléphone</option>
    <option value="statut">Statut</option>
  </select>
  <button type="button" id="sortBtn">Trier</button>
</div>


    <table>
      <tr>
        <th>Nom</th>
        <th>Adresse</th>
        <th>Numéro de téléphone</th>
        <th>E-mail</th>
        <th>Sexe</th>
        <th>Statut</th>
      </tr>
      <tr>
        <td>Geneviève Ndiaye</td>
        <td>Maristes Cité Elisabeth</td>
        <td>781138071</td>
        <td>genindiaye15@gmail.com</td>
        <td>Feminin</td>
        <td>Active</td>
      </tr>
      <tr>
        <td>Mouhamadou Rassoul Sow</td>
        <td>DUNYA</td>
        <td>785352649</td>
        <td>sowrassoul2004@gmail.com</td>
        <td>Masculin</td>
        <td>Inactif</td>
      </tr>
      <tr>
        <td>Rokhaya Cathy Diop</td>
        <td>Keur Mbaye Fall</td>
        <td>775917538</td>
        <td>catybae@gmail.com</td>
        <td>Feminin</td>
        <td>Active</td>
      </tr>
      <tr>
        <td>Tadabel Cissokho</td>
        <td>Point E</td>
        <td>780179594</td>
        <td>beldacissokho@gmail.com</td>
        <td>Feminin</td>
        <td>Active</td>
      </tr>
      <tr>
        <td>Saer Ben Cheikh </td>
        <td>Grand Medine</td>
        <td>764903986</td>
        <td>saerben@gmail.com</td>
        <td>Masculin</td>
        <td>Actif</td>
      </tr>
      <tr>
        <td>AKA EVY TRAORE</td>
        <td>Fann Residence</td>
        <td>773392202</td>
        <td>akaevy@gmail.com</td>
        <td>Masculin</td>
        <td>Inactif</td>
      </tr>
      <tr>
        <td>Agaicha Dione</td>
        <td>Nord foire</td>
        <td>775948375</td>
        <td>agaicha@gmail.com</td>
        <td>Feminin</td>
        <td>Active</td>
      </tr>
      <tr>
        <td>Adama Diarra</td>
        <td>Ouakam</td>
        <td>783036655</td>
        <td>adamadiarra@gmail.com</td>
        <td>Masculin</td>
        <td>Actif</td>
      </tr>
    </table>
  </div>
  <script src="../Asset/style/script1.js"></script>
</body>
</html>
