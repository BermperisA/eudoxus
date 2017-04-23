 <?php include('header.php'); ?>
 
 

<div>
<table width="1038">
       <tr>
         <td width="170" >
           
               <div id="services_menu">
 
                      <ul>
                            <li id="highlited" onClick="window.location.href='user_profil.php';">Στοιχεία Φοιτητή
                            </li><br>
                            <li  onClick="window.location.href='list_of_books.php';"><a>Παραληφθέντα Συγγραμάτα</a>
                            </li><br>
                            <li  onClick="window.location.href='statement.php';">Δήλωση Συγγραμάτων
                            </li><br>
                            <li  onClick="window.location.href='fail2.php';">Ανταλλαγή Συγγραμάτων
                            </li><br>
                            <li onClick="window.location.href='searchmen.php';">Αναζήτηση Συγγραμάτων
                            </li><br>
                            <li  onClick="window.location.href='fail2.php';">Οδηγίες
                            </li>
		    
                     </ul>
 
              </div>
        
         </td>
         
         <td width="660">
                
               <div style="margin-left:30%; margin-top: -20%;">
                  Η καταχώρησή σας ηταν επυτηχής!!!<br>
                  <u style="margin-left:20%;color:blue;cursor:pointer;" onClick="window.location.href='user_profil.php';"><a>Επιστοφή</a></u>
               </div>
              
               <?php
		          include "./dbconnect.php";
						
		          $con = dbconnect();
		          $user = $_SESSION['logged_user'];
		          $surname = $_POST["surname"];
		          $name = $_POST["name"];
		          $mail = $_POST["mail"];
		          $sxoli = $_POST["sxoli"];
		          $idruma = $_POST["idruma"];
		          $tmhma = $_POST["tmhma"];
		
		         
		
		          $result = mysqli_query($con,"UPDATE users, usersextra SET sxoli = '".$sxoli."', tmhma = '".$tmhma."', idruma = '".$idruma."', name = '".$name."', surname = '".$surname."', email = '".$mail."' WHERE users.username = '".$user."' AND users.userId = usersextra.usersId");
					mysqli_close($con);
              ?>
              
              
                 
               
         </td>
         
         <td width="210">
           
                 
                  <div class="callendar" >

                    <?php include('calendar.php'); ?>

                  </div>
                 
             
         </td>
      
      
      </tr> 
</table> 
</div>  
	
 <?php include('footer.php'); ?>		