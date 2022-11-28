<?php
    include_once '../Model/questionM.php';
    include_once '../Controller/questionsC.php';

    $error = "";

    // create courses
    $question = null;
  
    // create an instance of the controller
    $questionC = new questionC();
    if (
        isset($_POST["Id_Question"]) &&
		isset($_POST["Questions"]) &&
        isset($_POST["Reponse_Correcte"]) && 
        isset($_POST["Reponse_Fausse"]) && 
		isset($_POST["idtable"]) 

    ) {
        if (
            !empty($_POST["Id_Question"]) && 
			!empty($_POST['Questions']) &&
            !empty($_POST["Reponse_Correcte"]) && 
            !empty($_POST["Reponse_Fausse"]) &&
			!empty($_POST["idtable"]) 
        ) {
            $question = new question(
                $_POST['Id_Question'],
				$_POST['Questions'],
                $_POST['Reponse_Correcte'],
                $_POST['Reponse_Fausse'],
				$_POST['idtable']
            );
            $questionC->modifierquestion($question, $_POST["Id_Question"]);
            header('Location:question_back.php'); 
        }
        else
            $error = "Missing information";
    } 
    $listequiz=$questionC->afficherquiz();   
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Display</title>
    
</head>
    <body>
        <button><a href="afficherquestion.php">Return to the list of files</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['Id_Question'])){
				$question = $questionC->recupererquestion($_POST['Id_Question']);
				
		?>
       
        <form action="" method="POST">
            <table border="1" align="center">
            
                        <input  type="hidden" name="Id_Question" id="Id_Question" value="<?php echo $question['Id_Question']; ?>">
                    <tr>
                    <td>
                        <label for="Questions">Quiz Name:
                        </label>
                    </td>
                    <td>
                        <input type="string" name="Questions" id="Questions" value="<?php echo $question['Questions']; ?>">
                      
                    </td>
                </tr>  
                <tr>
                    <td>
                        <label for="Reponse_Correcte">Correct Answer:
                        </label>
                    </td>
                    <td>
                        <input type="string" name="Reponse_Correcte" id="Reponse_Correcte" value="<?php echo $question['Reponse_Correcte']; ?>">
                      
                    </td>
                </tr>        
                <tr>
                    <td>
                        <label for="Reponse_Fausse">False Answer:
                        </label>
                    </td>
                    <td>
                        <input type="string" name="Reponse_Fausse" id="Reponse_Fausse" value="<?php echo $question['Reponse_Fausse']; ?>">
                      
                    </td>
                </tr>        
                   

                <tr>
                <td>
                <label>Table ID</label>
                                                    
                                                     <select  name="idtable" id="idtable">
                                                                    <option value="select">Select</option>
																	<?php
															
															foreach($listequiz as $quiz)
															{
															?>
                                                                    <option value="<?php echo $quiz['idquiz']; ?>"><?php echo $quiz['idquiz']; ?></option>
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