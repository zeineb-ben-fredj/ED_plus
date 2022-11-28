<?php
	include '../Controller/utilisateurc.php';
	$utilisateurC=new utilisateurC();
	$listeutilisateur=$utilisateurC->afficherutilisateur(); 
?>
<html lang="en" class="">
<head>

</head>
<body>

<

      
      <div class="card-content">
        <table>
          <thead>
          <tr>
        
              </label>
            </th>
            <th class="image-cell"></th>
            <th>Nom</th>
            <th>Prenom</th>
            <th>Cin</th>
            <th>Daten</th>
            <th> Type1</th>
            <th> Email</th>
            <th>Tel</th>
            <th>Motpasse</th>
          </tr>
          <?php
				foreach($listeutilisateur as $utilisateur){
?>
          </thead>
          <tbody>
          <tr>
            <td class="checkbox-cell">
              <label class="checkbox">
                <input type="checkbox">
                <span class="check"></span>
              </label>
            </td>
           
           
            <td data-label="Nom"><?php echo $utilisateur['Nom']; ?></td>
            <td data-label="Prenom"><?php echo $utilisateur['Prenom']; ?></td>
            <td data-label="Cin"><?php echo $utilisateur['Cin']; ?></td>
            <td data-label="Daten"><?php echo $utilisateur['Daten']; ?></td>
            <td data-label="Type1"><?php echo $utilisateur['Type1']; ?></td>
            <td data-label="Email"><?php echo $utilisateur['Email']; ?></td>
            <td data-label="Tel"><?php echo $utilisateur['Tel']; ?></td>
            <td data-label="Motpasse"><?php echo $utilisateur['Motpasse']; ?></td>
            <td class="actions-cell">
              <div class="">
                
 
              <form method="GET" action="modifier.php">
                        <input type="submit" name="Modifier" value="Modifier"class="button light">
						<input type="hidden" value=<?PHP echo $utilisateur['Cin']; ?> name="Cin">
              </form>
                  <button class="button light"><a href="supprimeruser.php?id_user=<?php echo $utilisateur['Cin']; ?>">Supprimer</a></button>
                  
              </div>
            </td>
            <div id="sample-modal" class="modal">
  <div class=""></div>
  </div>
</div>


          </tr>
          
          <?php
				}
			?>
        </table>


            
           



<!-- Scripts below are for demo only -->
<script type="text/javascript" src="js/main.min.js?v=1628755089081"></script>




<!-- Icons below are for demo only. Feel free to use any icon pack. Docs: https://bulma.io/documentation/elements/icon/ -->
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css">

</body>
</html>
