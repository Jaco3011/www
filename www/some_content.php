<?php
$hea="" ;
$con="" ;
if (isset($number)){
	switch ($number){
		case 1 :
		$hea = "Kim jestem" ;
		$con = "Licealista z Kieleckiego &guot;Śniadka&quot; chętny do podjęcia pracy w WebDevie." ;
		break ;
		case 2 :
		$hea = "Moja oferta" ;
		$con = "Oferuję tworzenie stron internetowych na frameworku WordPress lub bez." ;
		break ;
		case 3 :
		$hea = "Moje CV" ;
		$con = "Wykształcenie:<br/><ul><li>II LO im. Jana Śniadeckiego w Kielcach</li>
		<li>Lekcje mgr. Grzegorza Jarosa</li></ul><br/>
		Inne kompetencje:<ul><li>Znajomość języka angielskiego: poziom B2</li><li>Znajomość języka niemieckiego: poziom A2</li></ul>" ;
		break ;
		case 4 :
		$hea = "Kontakt" ;
		$con = "Adres mailowy:<br/>jhozejowski@sbs.sniadek.pl<br/>Kontakt przez facebooka: patrz link na dole" ;
		break ;
		case 0 :
		default :
		$hea = "Zatrudnij programistę!" ;
		$con = "Jacek Hożejowski - programista webowy, tworzenie stron internetowych." ;
	} ;
} else {
	echo "switch nie działa" ;
} ;
echo <<<END
<h3>$hea</h3>$con
END;
?>