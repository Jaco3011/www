var pasek = document.getElementById('lol') ;
function poszerz(){
	if(pasek.width>900) {
		pasek width=0 ;
	}
	pasek.width += 2 ;
	setTimeout(poszerz, 10);
}
poszerz() ;