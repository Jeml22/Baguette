function subtotal(){
	const btnAbrir = document.getElementById('subtotal');
	const cerrar =document.getElementById('bon');
	const	over = document.getElementById('over');
	const	lay = document.getElementById('lay');
	
	
		over.classList.add('active');
		lay.classList.add('active');
	
	cerrar.addEventListener('click', ()=>{
		over.classList.remove('active');
		lay.classList.remove('active');
	})};
