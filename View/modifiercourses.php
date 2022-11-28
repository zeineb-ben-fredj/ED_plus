<?php
    include_once '../Model/courses.php';
    include_once '../Controller/coursesC.php';

    $error = "";

    // create courses
    $courses = null;
    
    // create an instance of the controller
    $coursesC = new coursesC();
    if (
        // isset($_POST["idcourse"]) &&
		isset($_POST["subjects"]) &&		
        isset($_POST["numof_students"]) && 
        isset($_POST["dateof_creation"]) && 
		isset($_POST["descriptionsC"]) &&
		isset($_POST["pictureC"]) 
         
    ) {
        if (
            // !empty($_POST["idcourse"]) && 
			!empty($_POST['subjects']) &&
            !empty($_POST["numof_students"]) && 
            !empty($_POST["dateof_creation"]) &&
			!empty($_POST["descriptionsC"]) &&
			!empty($_POST["pictureC"]) 
            

        ) {
            $courses = new courses(
               // $_POST['idcourse'],
				$_POST['subjects'],
                $_POST['numof_students'],
                $_POST['dateof_creation'],
				$_POST['descriptionsC'],
				$_POST['pictureC']
            
            );
            $coursesC->modifiercourses($courses, $_POST["idcourse"]);
            header('Location:Courses_table2.php');
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
    <script type="text/javascript" src="verifier.js"></script>
</head>
    <body>
        <button><a href="affichercourses.php">Retour à la liste des coursess</a></button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
			
		<?php
			if (isset($_POST['idcourse'])){
				$courses = $coursesC->recuperercourses($_POST['idcourse']);
				
		?>
       
        <form action="" method="POST">
            <table border="1" align="center">
               <input  type="hidden" name="idcourse" id="idcourse" value="<?php echo $courses['idcourse']; ?>" >
                   
               
				<tr>
                <td>
                <label>Subject</label>
																	<select onblur="saisirsubject()" name="subjects" id="subjects">
                                                                    <option value="select">Select</option>
                                                                    <option value="Math">Math</option>
                                                                   <option value="Biology">Biology</option>
                                                                  <option value="Physics">Physics</option>
                                                                 <option value="Astronomy">Astronomy</option>
                                                                 <option value="Chemistry">Chemistry</option>
                                                                <option value="Human Biology">Human Biology</option>
                                                                 </select><br>
                                                                  <p id="erroraddPosition" class="error"></p>
                    
                </tr>
                <tr>
                    <td>
                        <label  for="numof_students">numof_students:
                        </label>
                    </td>
                    <td>
                        <input onblur="saisirnbstudent()" type="number" name="numof_students" id="numof_students" value="<?php echo $courses['numof_students']; ?>">
                        <p id="erroraddOffice" class="error"></p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="dateof_creation">dateof_creation:
                        </label>
                    </td>
                    <td>
                        <input onblur="saisirdateof_creation()" type="date" name="dateof_creation" id="dateof_creation" value="<?php echo $courses['dateof_creation']; ?>">
                        <p id="errordate" class="error"></p>
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label for="descriptionsC">Description:
                        </label>
                    </td>
                    <td>
                        <input type="string" name="descriptionsC" id="descriptionsC" value="<?php echo $courses['descriptionsC']; ?>">
                        
                    </td>
                </tr> 
                <tr>
                    <td>
                        <label for="pictureC">Image:
                        </label>
                    </td>
                    <td>
                        <input type="file" name="pictureC" id="pictureC" value="<?php echo $courses['pictureC']; ?>">
                        
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