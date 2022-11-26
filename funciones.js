window.addEventListener('load', (event) => {
		
	function agregarEvento(id,letra)
	{
		document.getElementById(id).addEventListener("click", function()
		{
			texto = letra;
			agregarTexto(texto);
		}); 
	}

	agregarEvento("btn1","{");
	agregarEvento("btn2","}");
	agregarEvento("btn3",",");
	agregarEvento("btn4","A");
	agregarEvento("btn5","B");
	agregarEvento("btn6","C");
	agregarEvento("btn7","D");
	agregarEvento("btn10","∅");
	agregarEvento("btn11","∩");
	agregarEvento("btn12","∪");
	agregarEvento("btn13","∖");
	agregarEvento("btn14","∆");
	agregarEvento("btn15","ᶜ");
	agregarEvento("btn16","×");
	agregarEvento("btn17","=");
	agregarEvento("btn18","U");
	agregarEvento("btn19","(");
	agregarEvento("btn20",")");
	agregarEvento("btn21",";");
	agregarEvento("btn22","\u000A");
	
	function agregarTexto(texto)
	{
		var t = document.getElementById('f');
		
		caretStart = t.selectionStart;
		caretEnd = t.selectionEnd;
		
		// set text area value to: text before caret + desired text + text after caret
		t.value = (t.value.substring(0, caretStart)
					+ texto
				  + t.value.substring(caretEnd)
				  );
	
		// put caret at right position again
		t.selectionStart = t.selectionEnd = caretStart + texto.length
	}
	
	var caretStart, caretEnd;

	/*document.getElementById('f').addEventListener('blur', function(e) {
		caretStart = this.selectionStart;
		caretEnd = this.selectionEnd;
	});*/
	document.getElementById("btn_ayuda").addEventListener("click",function(){
		var div_ayuda = document.getElementById("div_ayuda");
		div_ayuda.hidden = !div_ayuda.hidden;
		if(div_ayuda.hidden)
		{
			this.classList.add("btn_ayuda");
			this.classList.remove("btn_ayuda_activo");
		}
		else
		{
			this.classList.remove("btn_ayuda");
			this.classList.add("btn_ayuda_activo");
		}
	});
	document.addEventListener("mousedown",function(e){
		var elem = e.target;
		if(elem.classList.contains("borde") && elem.nodeName == "BUTTON")
		{
			e.preventDefault();
		}
	});
});
