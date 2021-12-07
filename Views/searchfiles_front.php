<?php

  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', "");
  $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 


 if (isset($_GET['user'])){
   
     $user=(string) trim($_GET['user']);
     $req = $bdd->prepare("SELECT * FROM `tabfiles` WHERE nomfichier LIKE ? ");
     
     $req->execute(array($user."%"));
    //  $req=$bdd->query("SELECT * FROM tabcourse WHERE subjects LIKE ? LIMIT 10", array("$user%"));

     $req = $req->fetchAll();
     
											
											
     
     foreach($req as $r){
        ?>
         <div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
                                        <tbody>
        <tr>
              
				<td><?php echo $r['nomfichier']; ?></td>
				<td><?php echo $r['typefichier']; ?></td>
				
				<td><?php echo $r['lesson_level']; ?></td>
				
				<td>	<p class="button text-center"><a href="assets/img/<?php echo $r['uploadfichier']; ?>" class="btn btn-tertiary px-4 py-3">Open Lesson</a></p></td>
				
     </tr>
     </tbody>
										</table>
									</div>
 <?php           
     
     }      
     

 }
 



?>

								