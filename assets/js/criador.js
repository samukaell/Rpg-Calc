window.onload = function(){

	//Calcula o modificador, baseado no valor do atributo:

	var attr = document.querySelectorAll(".atributos tr td input");

	var mods = document.querySelectorAll(".atributos tr td:last-of-type");

	for(var x = 0; x < attr.length; x++){

		var attrX;
		var modsX;
		attrX = attr[x];

		attrX.addEventListener('blur', function(){

			for(var y = 0; y < attr.length; y++){

				attrX = attr[y]; 

				modsX = mods[y];

				modValue = Math.floor((Number(attrX.value)-10)/2);

				if (modValue >= 0) {
					modsX.innerText = `+${modValue}`;
				}
				else if (modValue < 0) {
					modsX.innerText = `${modValue}`;
				}
				else modsX.innerText = `+0`;

			}

		});

	}

	//Final da funcionalidade
	//__________________________________________________________________________________________________


	//Adiciona e remove classes:

	var classe;
	var n = 1;
	var classes = document.getElementById('classes');

	var addClass = document.getElementById('addclass');
	var rmClass = document.getElementById('rmclass');

	function criarClasse () {

		n++;

		classe = document.createElement('input');
		classe.type = "text";
		classe.id = `classe${n}`;
		classe.name = classe.id;

		classes.insertBefore(classe, classes.childNodes[n]);

	}

	function removerClasse () {
		if (n>0) {

			classes.removeChild(classes.childNodes[n]);

			n--;
			
		}
	}

	addclass.addEventListener('click', criarClasse);
	rmclass.addEventListener('click', removerClasse);

}