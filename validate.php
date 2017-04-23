<script type="text/javascript">
            <!--
			function ValidationEdit(){
				var name = document.forms["edit_form"]["name"].value,
					email = document.forms["edit_form"]["mail"].value,
					surname =  document.forms["edit_form"]["surname"].value,
					emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/,
					charExpEN = /^[a-zA-Z0-9]/;
					
					
				if(!name.match(charExpEN) ){						
					window.alert("Το Όνομα δεν είναι έγκυρο. Παρακαλώ χρησιμοποιήστε λατινικούς χαρακτήρες ");
							document.edit_form.name.focus() ;	
							return false;
				}
				if(!surname.match(charExpEN)){						
					window.alert("Το Επώνυμο δεν είναι έγκυρο. Παρακαλώ χρησιμοποιήστε λατινικούς χαρακτήρες ");
							document.edit_form.surname.focus() ;	
							return false;
				}
				if(!email.match(emailExp)){						
					window.alert("Το e-mail δεν είναι έγκυρο");
							document.edit_form.mail.focus() ;	
							return false;
				}
				return true;
			}		
			
            function ValidationLog(){
				var loguname = document.forms["register_form"]["username"].value,
					logpass =  document.forms["register_form"]["password"].value,
					charExpEN = /^[a-zA-Z0-9]/;
					
					
				if(!loguname.match(charExpEN) ){						
					window.alert("Το username δεν είναι έγκυρο. Παρακαλώ χρησιμοποιήστε λατινικούς χαρακτήρες και αριθμούς");
							document.register_form.username.focus() ;	
							return false;
				}
				if(!logpass.match(charExpEN)){						
					window.alert("Παρακαλούμε συμπληρώστε τον κωδικό σας");
							document.register_form.password.focus() ;	
							return false;
				}
				return true;
			}
				
            function Validation(){
				var email = document.forms["my_form2"]["email"].value, 
					verify = document.forms["my_form2"]["verify_email"].value,               
					emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/,
					pass = document.forms["my_form2"]["password"].value,
					verifyPass = document.forms["my_form2"]["verify_password"].value,   
					phone = document.forms["my_form2"]["telephone"].value,
					uname = document.forms["my_form2"]["username"].value, 
					charExpEN = /^[a-zA-Z0-9]/, 
					charExpGR = /^[α-ωΑ-Ω]/, 
					phoneExp = /^[0-9]{10}$/,
					empty = / /,
					amkaExp = /^[0-9]{11}$/;
					
				
				if(!uname.match(charExpEN)){						
					window.alert("Το username δεν είναι έγκυρο. Παρακαλώ χρησιμοποιήστε λατινικούς χαρακτήρες και αριθμούς");
							document.my_form2.username.focus() ;	
							return false;
				}
				if(uname.length>20){						
					window.alert("Το username πρέπει να είναι μέχρι 20 χαρακτήρες");
							document.my_form2.username.focus() ;	
							return false;
				}
					
				if(!pass.match(charExpEN)){						
					window.alert("Το password δεν είναι έγκυρο. Παρακαλώ χρησιμοποιήστε λατινικούς χαρακτήρες και αριθμούς");
							document.my_form2.password.focus() ;	
							return false;
				}
				if(!verifyPass.match(charExpEN)){						
					window.alert("Το password δεν είναι έγκυρο. Παρακαλώ χρησιμοποιήστε λατινικούς χαρακτήρες και αριθμούς");
							document.my_form2.verify_password.focus() ;	
							return false;
				}
				if(pass.length<6 ||pass.lentgth>20){						
					window.alert("Το password πρέπει να είναι από 6 μέχρι 15 χαρακτήρες");
							document.my_form2.password.focus() ;	
							return false;
				}
					
				if (!verifyPass.match(pass)){
				window.alert("Το password που δώσατε δεν ταιριάζει με την επιβεβαίωση");
				return false;
				
				}

				if(!email.match(emailExp)){						
					window.alert("Το e-mail δεν είναι έγκυρο");
							document.my_form2.email.focus() ;	
							return false;
				}
					
				
				if(!verify.match(emailExp)){						
					window.alert("Το e-mail δεν είναι έγκυρο");
							document.my_form2.verify_email.focus() ;	
							return false;
				}
				if (!verify.match(email)){
				window.alert("Το e-mail που δώσατε δεν ταιριάζει με την επιβεβαίωση");
				return false;
				
				}				
			return true;
			}

        </script>