var botao = document.querySelector('#botao');
var nav = document.querySelector('nav');

botao.addEventListener('click', (event) => {

	if (nav.classList[0] == 'active') {

		nav.setAttribute('class', '');

	}

	else{

		nav.setAttribute('class', 'active');
		
	}

});