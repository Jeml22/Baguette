function button1(){}
const btnAbrir = document.getElementById('button1'),
	overlays = document.getElementById('overlay'),
	popups = document.getElementById('popup');

btnAbrir.addEventListener('click', () => {
	overlays.classList.add('active');
	popups.classList.add('active');
});
function datos() {
	const btn = document.getElementById('botn2'),
		overlay = document.getElementById('Titular'),
		popup = document.getElementById('tipo');

	overlays.classList.remove('active');
	popups.classList.remove('active');
	overlays.classList.add('desactive');
	popups.classList.add('desactive');
	overlay.classList.add('active');
	popup.classList.add('active');
}
function date() {
	const btn2 = document.getElementById('boton4'),
		overla = document.getElementById('e-form'),
		popu = document.getElementById('puts');

	overlays.classList.remove('active');
	popups.classList.remove('active');
	overlays.classList.add('desactive');
	popups.classList.add('desactive');
	overla.classList.add('active');
	popu.classList.add('active');
};
function info() {
	const btpon3 = document.getElementById('boton3'),
		over = document.getElementById('primero'),
		popes = document.getElementById('segundo');

		overlays.classList.remove('active');
		popups.classList.remove('active');
		overlays.classList.add('desactive');
		popups.classList.add('desactive');
	over.classList.add('active');
	popes.classList.add('active');
};

function confirma(){
	const btpon4 = document.getElementById('confi'),
	fondo = document.getElementById('fondo'),
	parte = document.getElementById('parte');

	fondo.classList.add('active');
	parte.classList.add('active');
}