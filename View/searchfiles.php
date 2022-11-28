<?php

  $bdd = new PDO('mysql:host=localhost;dbname=order_managment', 'root', "");
  $bdd ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
 


 if (isset($_GET['user'])){
   
     $user=(string) trim($_GET['user']);
     $req = $bdd->prepare("SELECT * FROM `tabfiles` WHERE nomfichier LIKE ? ");
     
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
               <td><?php echo $r['idfichier']; ?></td>
				<td><?php echo $r['nomfichier']; ?></td>
				<td><?php echo $r['typefichier']; ?></td>
				<td><?php echo $r['dateof_publication']; ?></td>
				<td><?php echo $r['lesson_level']; ?></td>
				<td><?php echo $r['descriptionfichier']; ?></td>
				<td><?php echo $r['uploadfichier']; ?></td>
				<td><?php echo $r['filepic']; ?></td>
                <td><?php echo $r['id_cc']; ?></td>
     </tr>
 <?php           
     
     }      
     

 }
 



?>
</tbody>
										</table>
									</div>
								