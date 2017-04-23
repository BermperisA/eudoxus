
<?php include('header.php'); ?>

<?php if( empty( $_SESSION[ 'logged_user' ] ) )
						{?> 
						 
                        <p style="margin-left:34%;" ><strong>Πρέπει να Συνδεθείται για να δείτε αυτή τη σελίδα</strong></p><br>
                       <p style="margin-left:46%; cursor: pointer;color:blue;" onClick="window.location.href='eggrafh-sundesh.php';"><strong><u>Επιστροφή</u></strong></p><br> 
                      
					<?php } 
						else{?>
						

<div>
<table  width="1038" padding: 0; border-spacing: none;" cellspacing="0" cellpadding="0">

<table >

       <tr>
         <td width="137" height="504">
           
                
           
               <div id="services_menu">
                      <ul>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/user_profil.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='user_profil.php';">Στοιχεία Φοιτητή
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/list_of_books.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='list_of_books.php';"><a>Παρεληφθέντα Συγγραμάτα</a>
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/statement.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='statement.php';">Δήλωση Συγγραμμάτων
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/123" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='fail2.php';">Ανταλλαγή Συγγραμμάτων
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/searchmen.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='searchmen.php';">Αναζήτηση Συγγραμμάτων
                            </li><br>
                            <li id="<?php if( strcmp ( url() , "http://plai2.dyndns.org/eam/instructions.php" )==0 )
						      { echo "highlited";  }
	                        ?>" onClick="window.location.href='instructions.php';">Οδηγίες
		    
                     </ul>
 
              </div>
         </td>
         
         <td width="859">
                 
                
           
                
                <div id="list_of_books_form">
                	
		 
                  
                  <table style="margin-top:7%; margin-left:2%;">
                    <tr>
                      <td width="114">
                        <img  src ="./img/listbooks.jpg"  width=114 height=114 align="left"; style= "min-height:16.5px;"/>
                      </td>
                     </tr>
                    </table><br>
                   
               	       
                       
                      
                  <table style="margin-left:2%;margin-top:0%;border:2px solid #c3c3c3;border-radius:5px;" id="inform_table" width="95%" height="155" >    
                       <tr>	
		    
			
                    
                          <td height="20" style="outline:2px solid #c3c3c3;" >     
                             <h3 style="text-shadow: #909090  0.2em 0.3em 0.2em">Μάθημα</h3>
                          </td>
                          <td  style="outline: 2px solid #c3c3c3;">  
                        
                             <h3 style="text-shadow: #909090  0.2em 0.3em 0.2em">Σύγγραμμα</h3>
                         
                          </td>
			              <td  style="outline:2px solid #c3c3c3;">  
                        
                            <h3 style="text-shadow: #909090  0.2em 0.3em 0.2em">Κωδικός συγγράμματος</h3>
                         
                          </td>
			              <td  style="outline:2px solid #c3c3c3;">  
                        
                             <h3 style="text-shadow: #909090  0.2em 0.3em 0.2em">Κατάσταση</h3>
                         
                         </td>
                       </tr>
                       <?php
						include "./dbconnect.php";
						
						$con = dbconnect();
						$user = $_SESSION['logged_user'];
						
						if ($result = mysqli_query($con,"SELECT user_book.class, books.booksTitle, books.booksId,user_book.status FROM users ,books, user_book WHERE users.username = '".$user."'  AND users.userId = user_book.userid and books.booksId = user_book.bookid"))
						{ while ($row = mysqli_fetch_assoc($result)){
					?>
						 <?php
						 echo "<tr>"; 
						 echo "<td style=\"outline:2px solid #c3c3c3;\">",$row['class'], "</td><td style=\"outline:2px solid #c3c3c3;\">", $row['booksTitle'],"</td><td style=\"outline:2px solid #c3c3c3;\">", $row['booksId'],"</td><td style=\"outline:2px solid #c3c3c3;\">", $row['status'], "</td>"; 
								
						 echo "</tr>";
						 }?>
						 <br>
						<?php } mysqli_close($con); ?>
                      
			  </table><br><br>
              
              
           </div>
			 
            		
					
					
					
					
                    	
                    
                    
               
                
               
                    
                
                
         </td>
      
    </tr> 
</table> 
</div>  

<?php } ?>


<?php include('footer.php'); ?>
