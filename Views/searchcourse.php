<?php

  $bdd = new PDO('mysql:host=localhost;dbname=test', 'root', "");
  $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 


 if (isset($_GET['user'])){
   
     $user=(string) trim($_GET['user']);
     $req = $bdd->prepare("SELECT * FROM `tabcourse` WHERE subjects LIKE ? ");
     
     $req->execute(array($user."%"));
    //  $req=$bdd->query("SELECT * FROM tabcourse WHERE subjects LIKE ? LIMIT 10", array("$user%"));

     $req = $req->fetchAll();
     ?>
     <div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<!-- <thead>
												<tr>
													<th>Course_ID</th>
													<th>Subject</th>
													<th>Number of Students</th>
													<th>Creation Date</th>
													<th>Description</th>
													<th>Image</th>
													
													
												</tr>
											</thead> -->
											
											<tbody>
     <?php
     foreach($req as $r){
        ?>
        <tr>
            <td><?php echo $r['idcourse']; ?></td>
            <td><?php echo $r['subjects']; ?></td>
            <td><?php echo $r['numof_students']; ?></td>
            <td><?php echo $r['dateof_creation']; ?></td>
            <td><?php echo $r['descriptionsC']; ?></td>
            <td><?php echo $r['pictureC']; ?></td>
     </tr>
 <?php           
     
     }      
     

 }
 



?>
</tbody>
										</table>
									</div>
								