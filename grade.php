<?php
   $per=80;
   if($per>=75)
   { 
   	 if($per<100)
   	 {
   	   echo "Distinction";   
   	 }
   }	 
   elseif($per>=60)
   {
   	 if($per<75)
   	 {
   	     echo "First Class";
   	 }
   }
   elseif($per>=40)
   {
   	 if($per<60)
   	 {
       	 echo "Second Class";
     }
   }
   elseif($per<=40)
   {
   	 if($per>=00)
     {    
     	 echo "Fail";
     }
   }
   else
   {
   	 echo "Invalid Percentage";
   }	
?>