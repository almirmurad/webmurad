// JavaScript Document

		window.onload = SetaEventos;
		
		function Elm(x)
		{
			return document.getElementById(x);
		}
		
		function Elms(x)
		{
			return document.getElementsByTagname(x);
		}
		
		function SetaEventos()
		{
			Elm('nome').onblur = nome_onblur;
			<!--Elm('nome').onkeyup = nome_onkeyup;-->
			
			Elm('email').onblur = onblur;
			<!--Elm('email').onkeyup = email_onkeyup;-->
			
			Elm('telefone').onchange = telefone_onchange;
			Elm('telefone').onkeyup = telefone_onkeyup;
			
			Elm('celular').onchange = celular_onchange;
			Elm('celular').onkeyup = celular_onkeyup;
			
			Elm('form_orcamento').onsubmit = form_orcamento_onsubmit;
		}
		
			function nome_onblur()
				{
					if(Elm('nome').value == '')
						{
							alert('O campo nome está vazio!');
							Elm('nome').focus();
						}
				}
			
			function email_onblur()
				{
					if(Elm('email').value == '')
						{
							alert('O campo email está vazio!');
							Elm('email').focus();
						}
				}
				
			function telefone_onchange()
				{
					if(Elm('telefone').value == '')
						{
							alert('O campo telefone está vazio!');
						}
				}
				
			function telefone_onkeyup(){
				if(isNaN(Elm('telefone').value))
					{
						alert('O campo telefone deve conter apenas números!');
						Elm('telefone').focus();
						Elm('telefone').select();
						return false;
					}
				}		
			
			function celular_onchange()
				{
					if(Elm('celular').value == '')
						{
							alert('O campo celular está vazio!');
						}
				}
				
			function celular_onkeyup(){
				if(isNaN(Elm('celular').value))
					{
						alert('O campo celular deve conter apenas números!');
						Elm('celular').focus();
						Elm('celular').select();
						return false;
					}
				}
				
			function form_orcamento_onsubmit()
				{
					var envia = true;
					
					envia = campoobrigatorio('nome',envia);
					
					envia = campoobrigatorio('email',envia);
					
					envia = campoobrigatorio('telefone',envia);
					
					envia = campoobrigatorio('celular',envia);
					
					return envia;
				}
				
			function campoobrigatorio(x,envia)
				{
					if(envia == false)
						{
							return false;
						}
					
					if(Elm(x).value == '')
						{
							alert ('campo' + x + 'é obrigatório');
							Elm(x).focus();
							return false;
						}
				}