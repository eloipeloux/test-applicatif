// Basic JS for faster rendering

const paintBtn = document.getElementById('paint');

paintBtn.addEventListener('click', () => {
    var elem = document.getElementsByClassName('house');
    for(var i = 0; i < elem.length; i++){
		elem[i].style.backgroundColor = "red";
	}
})