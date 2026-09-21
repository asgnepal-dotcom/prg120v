<?php    /* Eksempel 3 */
/*
/*    Programmet mottar 2 tall fra et HTML-skjema ved POST-metoden
/*    Programmet skriver ut de 2 tallene og summen og differansen av/mellom tallene
*/
  $tall1=$_POST ["tall1"];
  $tall2=$_POST ["tall2"];  /* variable gitt verdier fra feltene i HTML-skjemaet */
	
  $sum=$tall1 + $tall2   /* beregning av summen utført  */
  $differanse=$tall1 - $tall2;  /* beregning av differansen utført  */
			
  print ("Tall 1 er $tall1 <br />");
  print ("Tall 2 er $tall2 <br />");
  print ("<br />");
  print ("Summen er $sum <br />");
  print ("Differansen er $differanse <br />");  /* resultater skrevet ut  */
?> <?php     /* Eksempel 5 */
/*
/*    Programmet deler opp en tekststreng ved bruk av oppdelingsfunksjonen explode
*/
  $tekst="Geir Bjarvin Universitetslektor USN";
  
  $del=explode (" " , $tekst);     
  $fornavn=$del[0];     
  $etternavn=$del[1];    
  $yrke=$del[2];    
  $arbeidssted=$del[3];     

  print ("Hele tekststrengen er: $tekst <br /> <br />");
  print ("Fornavn er:  $fornavn <br />");
  print ("Etternavn er:  $etternavn <br />");
  print ("Yrke er er:  $yrke <br />");
  print ("Arbeidssted er:  $arbeidssted <br />");
?>
