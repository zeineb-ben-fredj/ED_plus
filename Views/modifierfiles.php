<?php
    include_once '../Model/Files.php';
    include_once '../Controller/FilesC.php';

    $error = "";

    // create courses
    $files = null;
   
    // create an instance of the controller
    $filesC = new filesC();
    if (
        isset($_POST["nomfichier"]) &&
		isset($_POST["typefichier"]) &&
        isset($_POST["dateof_publication"]) && 
        isset($_POST["lesson_level"]) && 
		isset($_POST["descriptionfichier"]) &&
        isset($_POST["uploadfichier"]) &&
        isset($_POST["filepic"]) &&
        isset($_POST["id_cc"])

    ) {
        if (
            !empty($_POST["nomfichier"]) && 
			!empty($_POST['typefichier']) &&
            !empty($_POST["dateof_publication"]) && 
            !empty($_POST["lesson_level"]) &&
			!empty($_POST["descriptionfichier"]) &&
            !empty($_POST["uploadfichier"]) &&
            !empty($_POST["filepic"]) &&
            !empty($_POST["id_cc"])
        ) {
            $files = new files(
                $_POST['nomfichier'],
				$_POST['typefichier'],
                $_POST['dateof_publication'],
                $_POST['lesson_level'],
				$_POST['descriptionfichier'],
				$_POST['uploadfichier'],
                $_POST['filepic'],
                $_POST['id_cc']
            );
            $filesC->modifierfiles($files, $_POST["idfichier"]);
            header('Location:Files_Table.php'); 
        }
        else
            $error = "Missing information";
    } 
    $listecours=$filesC->affichercourses();   
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    <script type="text/javascript" src="verifier.js"></script>
</head>
    <body>
        <button><a href="afficherfiles.php">Return to the list of files</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['idfichier'])){
				$files = $filesC->recupererfiles($_POST['idfichier']);
				
		?>
       
        <form action="" method="POST">
            <table border="1" align="center">
            
                        <input  type="hidden" name="idfichier" id="idfichier" value="<?php echo $files['idfichier']; ?>">
                    <tr>
                    <td>
                        <label for="nomfichier">Name:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="nomfichier" id="nomfichier" value="<?php echo $files['nomfichier']; ?>">
                      
                    </td>
                </tr>     
                   
               
				<tr>
                <td>
                <label>Type</label>
                <select onblur="saisirtype()" name="typefichier" id="typefichier">
                                                                    <option value="select">Select</option>
                                                                    <option value="Video">Video</option>
                                                                   <option value="lecture">Lecture</option>
                                                                 </select><br>
                                                                  <p id="erroraddPosition" class="error"></p>
                    
                </tr>
              
                <tr>
                    <td>
                        <label for="dateof_publication">Publication Date:
                        </label>
                    </td>
                    <td>
                        <input onblur="saisirCreation_date()" type="date" name="dateof_publication" id="dateof_publication" value="<?php echo $files['dateof_publication']; ?>">
                        <p id="errordate" class="error"></p>
                    </td>
                </tr> 
              

                <tr>
                <td>
                <label>lesson_level</label>
                                                     <select onblur="saisirlevel()" name="lesson_level" id="lesson_level">
                                                     <option value="select">Select</option>
                                                                    <option value="Beginner">Beginner</option>
                                                                   <option value="Intermediate ">Intermediate</option>
                                                                   <option value="Advanced ">Advanced</option>
                                                                 </select><br>
                                                                  <p id="erroraddPosition" class="error"></p>
                    
                </tr>
               

                <tr>
                    <td>
                        <label for="descriptionfichier">Description:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="descriptionfichier" id="descriptionfichier" value="<?php echo $files['descriptionfichier']; ?>">
                        
                    </td>
                </tr> 
                
                <tr>
                    <td>
                        <label for="uploadfichier">Upload File:
                        </label>
                    </td>
                    <td>
                        <input type="file" name="uploadfichier" id="uploadfichier" value="<?php echo $files['uploadfichier']; ?>">
                        
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label for="filepic">Picture:
                        </label>
                    </td>
                    <td>
                        <input type="file" name="filepic" id="filepic" value="<?php echo $files['filepic']; ?>">
                        
                    </td>
                </tr> 

                <tr>
                <td>
                <label>Course ID</label>
                                                    
                                                     <select  name="id_cc" id="id_cc">
                                                                    <option value="select">Select</option>
																	<?php
															
															foreach($listecours as $cours)
															{
															?>
                                                                    <option value="<?php echo $cours['idcourse']; ?>"><?php echo $cours['idcourse']; ?></option>
																	<?php
															}
															?>
                                                                   
                                                                 </select><br>
                                                                                                                    
                    
                </tr>
                 
               
                <tr>
                    <td></td>
                    <td>
                        <input onclick="ajout(event)" type="submit" value="Modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		}
		?>
    </body>
</html>