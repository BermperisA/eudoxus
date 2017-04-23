<?php include('header.php'); ?>

<script>
window.onload = function() {
    document.getElementById( 'scroll' ).scrollIntoView();    
};


</script>



<table  width="1038" padding: 0; border-spacing: none;" cellspacing="0" cellpadding="0">

<table >

       <tr>
         <td width="137" height="504">
           
                
           
                <div id="sideButtons">
                 <div id="button"> 
                    <a href='user_profil.php'><img src="img/stud.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>
                 
                 <div id="button"> 
                   <a href='fail.php'><img src="img/trade.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>


                 <div id="button"> 
                   <a href='searchmen2.php'><img src="img/search.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>
                 
                 <div id="button"> 
                   <a href='fail.php'><img src="img/faq.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>
                 
                 <div id="button"> 
                   <a href='fail.php'><img src="img/help.png" width="141" height="70" type="submit" value=""  /></a>
                 </div>
 
              </div>
         </td>
         
         <td width="859">
                 
                
           
                
                <div id="search_form" style="margin-top:-150px;">
                	
		 
                  
                  <table style="margin-top:0px; margin-left:2%;">
                    <tr>
                      <td width="114">
                        <img  src ="./img/search_lib.jpg"  width=114 height=114 align="left"; style= "min-height:16.5px;"/>
                      </td>
                     </tr>
                    </table><br>
                   
               	       
                       
                      
                  <table id="scroll" style="margin-left:2%;margin-top:0%;border:2px solid #c3c3c3;border-radius:5px;" id="inform_table" width="95%" height="155" >    
                       <tr>	
		    
			
                    
                          <td height="20" style="outline:2px solid #c3c3c3;" >     
                             <h3 style="text-shadow: #909090  0.2em 0.3em 0.2em">ID</h3>
                          </td>
                          <td  style="outline: 2px solid #c3c3c3;">  
                        
                             <h3 style="text-shadow: #909090  0.2em 0.3em 0.2em">Τίτλος</h3>
                         
                          </td>
			              <td  style="outline:2px solid #c3c3c3;">  
                        
                            <h3 style="text-shadow: #909090  0.2em 0.3em 0.2em">ISBN</h3>
                         
                          </td>
			              <td  style="outline:2px solid #c3c3c3;">  
                        
                             <h3 style="text-shadow: #909090  0.2em 0.3em 0.2em">Εκδοτικός Οίκος</h3>
                         
                         </td>
                       </tr>
                      
<?php

include "./dbconnect.php";



    
$button = $_GET ['searchbt'];
$search = $_GET ['searchtx'];
$isbn = $_GET ['isbntx'];
$publisher = $_GET ['publtx'];
$department = $_GET ['departmentx']; 
  

	$con = dbconnect();
	$search_exploded = explode (" ", $search);
	$x = 0;	
	foreach($search_exploded as $search_each)
	{
		$x++;
		if($x==1)
		$construct =" bookstitle LIKE '%$search_each%'";
		else
		$construct =" AND bookstitle LIKE '%$search_each%'";
		
	}
	if (!empty($isbn))
		$construct .=" AND isbn LIKE '%$isbn%'";
	if (!empty($department))
		$construct .=" AND tmhma LIKE '%$department%'";
	if (!empty($publisher))
		$construct .=" AND publisher LIKE '%$publisher%'";
		
	$constructs ="SELECT * FROM books WHERE $construct";
	$run = mysqli_query($con,$constructs);
		
	$foundnum = mysqli_num_rows($run);
		
	if ($foundnum==0){
	echo "<tr><td>Sorry, there are no matching result for <b>$search</b>.</br></br>1. 
	Try more general words. for example: If you want to search 'how to create a website'
	then use general keyword like 'create' 'website'</br>2. Try different words with similar
	 meaning</br>3. Please check your spelling</td></tr>";}
	else
	{ 
		  
		$per_page = 5;
		$start = $_GET['start'];
		$max_pages = ceil($foundnum / $per_page);
		if(!$start)
			$start=0;
		
		$getquery = mysqli_query($con,"SELECT * FROM books WHERE $construct LIMIT $start, $per_page");
		  
		while($runrows = mysqli_fetch_assoc($getquery))
		{	$id = $runrows ['booksId'];
			$title = $runrows ['booksTitle'];
			$isbn = $runrows ['ISBN'];
			$publ = $runrows ['publisher'];
			   
			echo "
			<tr style=\"outline:2px solid #c3c3c3;\"><td style=\"outline:2px solid #c3c3c3;\"><strong><b> $id </b></td><td  style=\"outline:2px solid #c3c3c3;\"><b> $title </b></td><td style=\"outline:2px solid #c3c3c3;\"><b> $isbn </b></td><td style=\"outline:2px solid #c3c3c3;\"><b>$publ</b></td></strong></tr>
			";
			
		}
		  
		//Pagination Starts
		echo "<table><tr><td width=\"859\" ><center>";
		  
		$prev = $start - $per_page;
		$next = $start + $per_page;
							   
		$adjacents = 3;
		$last = $max_pages - 1;
		  
		if($max_pages > 1)
		{   
			//previous button
			if (!($start<=0)) 
			echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$prev'>Prev</a> ";    
					  
			//pages 
			if ($max_pages < 7 + ($adjacents * 2))   //not enough pages to bother breaking it up
			{
				$i = 0;   
				for ($counter = 1; $counter <= $max_pages; $counter++)
				{
					if ($i == $start){
						echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$i'><b>$counter</b></a> ";
					}
					else {
						echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$i'>$counter</a> ";
					}  
					$i = $i + $per_page;                 
				}
			}
			elseif($max_pages > 5 + ($adjacents * 2))    //enough pages to hide some
			{
				//close to beginning; only hide later pages
				if(($start/$per_page) < 1 + ($adjacents * 2))        
				{
					$i = 0;
					for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
					{
						if ($i == $start){
							echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$i'><b>$counter</b></a> ";
						}
						else {
							echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$i'>$counter</a> ";
						} 
						$i = $i + $per_page;                                       
					}
										  
				}
				//in middle; hide some front and some back
				elseif($max_pages - ($adjacents * 2) > ($start / $per_page) && ($start / $per_page) > ($adjacents * 2))
				{
					echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=0'>1</a> ";
					echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$per_page'>2</a> .... ";
				 
					$i = $start;                 
					for ($counter = ($start/$per_page)+1; $counter < ($start / $per_page) + $adjacents + 2; $counter++)
					{
						if ($i == $start){
							echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$i'><b>$counter</b></a> ";
						}
						else {
							echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$i'>$counter</a> ";
						}   
					$i = $i + $per_page;                
					}
												  
				}
				//close to end; only hide early pages
				else
				{
					echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=0'>1</a> ";
					echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$per_page'>2</a> .... ";
				 
					$i = $start;                
					for ($counter = ($start / $per_page) + 1; $counter <= $max_pages; $counter++)
					{
					if ($i == $start){
						echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$i'><b>$counter</b></a> ";
					}
					else {
						echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$i'>$counter</a> ";   
					} 
					$i = $i + $per_page;              
					}
				}
			}
					  
			//next button
			if (!($start >=$foundnum-$per_page))
			echo " <a href='search.php?searchtx=$search&searchbt=Search+source+code&start=$next'>Next</a> ";    
		}   
		echo "</center></td></tr></table>";
	} 

?>
                     
			  </table><br><br>
              
              
           </div>
			 
         </td>
      
    </tr> 
</table> 

















<?php include('footer.php'); ?>




