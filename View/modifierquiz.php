<?php
    
    include_once '../Controller/quizC.php';

    $error = "";

    // create courses
    $quiz = null;
    	

    // create an instance of the controller
    $quizC = new quizC();
    if (
        // isset($_POST["idquiz"]) &&
		isset($_POST["quiz_nom"]) &&		
        isset($_POST["date_de_creation"]) && 
        isset($_POST["descriptions"]) && 
		isset($_POST["images"]) 
		
         
    ) {
        if (
            // !empty($_POST["idquiz"]) && 
			!empty($_POST['quiz_nom']) &&
            !empty($_POST["date_de_creation"]) && 
            !empty($_POST["descriptions"]) &&
			!empty($_POST["images"]) 
			
            

        ) {
            $quiz = new quiz(
               // $_POST['idquiz'],
				$_POST['quiz_nom'],
                $_POST['date_de_creation'],
                $_POST['descriptions'],
				$_POST['images']
				
            
            );
            $quizC->modifierquiz($quiz, $_POST["idquiz"]);
            header('Location:quiz_back.php');
        }
        else
            $error = "Missing information";
    }    
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    
</head>
    <body>
        <button><a href="afficherquiz.php">Retour à la liste des quizs</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['idquiz'])){
				$quiz = $quizC->recupererquiz($_POST['idquiz']);
				
		?>
       
        <form action="" method="POST">
            <table border="1" align="center">
               <input  type="hidden" name="idquiz" id="idquiz" value="<?php echo $quiz['idquiz']; ?>" >
             	

              
                <tr>
                    <td>
                        <label  for="date_de_creation">date_de_creation:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="date_de_creation" id="date_de_creation" value="<?php echo $quiz['date_de_creation']; ?>">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="descriptions">descriptions:
                        </label>
                    </td>
                    <td>
                        <input  type="string" name="descriptions" id="descriptions" value="<?php echo $quiz['descriptions']; ?>">
                        
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label for="images">image:
                        </label>
                    </td>
                    <td>
                        <input type="file" name="images" id="images" value="<?php echo $quiz['images']; ?>">
                        
                    </td>
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