// carrega a pagina inicial da loja
window.onload = function(){
		Ger('inicio', 0);
	}
	
//envia a requisição ao servidor, de acordo com a ação do usuario
function Ger(secao, parametro){
		Aviso(1);//exibe o aviso "Aguarde..."
		var url="php/gerencia.php?"+secao+"="+encodeURIComponent(parametro);
		requisicaoHTTP("GET",url,true);
	}
	
		
//envia a nova quantidade do produto, ara atualização no carrinho de compras
function atualizaQuantidade(campo){
		var id = campo.name;
		var quant = campo.value;
		Ger('quantidade',id+'-'+quant);
}

//exibe ou oculta a mensagem de espera
function Aviso(exibir){
		var saida = document.getElementById("avisos");
		if(exibir){
			saida.className = "aviso";
			saida.innerHTML = "Aguarde... processando!";
			}
			else{
			saida.className = "";
			saida.innerHTML = "";
			}
	}	
	
//exibe a resposta do servidor
function trataDados(){
	var info = ajax.responseText;
	var saida = document.getElementById("conteudo");
	saida.innerHTML = info;
	Aviso(0);
	}	
	
//altera o titulo da sessão da pagina
function titulo(parametro){
		var saida = document.getElementById("titulo");
			
		
			saida.className = "tit";
			saida.innerHTML = parametro;
}