var json_test = [
	['hola','hello'],
	['soy', 'be'],
	['tu', 'you'],
	['amigo', 'friend']
];

function construirSpan(original, traduccion){
	var span = document.createElement("span"); 
    span.appendChild(document.createTextNode(original));
    span.setAttribute("title", traduccion);
	return span;
}

function construirParrafo(texto_traducido){
	var parrafo = document.createElement("p"); 
	for (var i = 0; i < texto_traducido.length; i++) {
		parrafo.appendChild(construirSpan(texto_traducido[i][0], texto_traducido[i][1]));
		parrafo.appendChild(document.createTextNode("\u00A0"));
	}
	return parrafo;
}

