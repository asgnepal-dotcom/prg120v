<?php    /*Eksampel 5 */
/*
/*  Programmet deler opp en tekststreng ved bruk av oppdelingsfunksjonen explode
*/
$tekst="Geir Bjarvin Universitetsleketor USN";

$del=explode ("", $tekst);
$fornavn=$del[0]; 
$etternavn=$del[1];
$yrke=$del[2];
$arbeidssted=$del[3];

print ("Hele tekstrengen er: $tekst <br /> <br />");
Print ("fornavn er: $fornavn <br /> ");
print ("Etternavn er: $etternavn <br />");
Print ("yrke er: $yrke <br />");
Print ("Arbeidssted er: $arbeidssted <br />");
?>