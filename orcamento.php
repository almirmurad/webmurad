﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="estilos/style.css" />
<style type="text/css">
form{
	width:600px;
	height:auto;
	margin:0 auto;
	background:#EEEEEE;
	padding:5px;
	}
	
form fieldset{
	border:none;
	}
	
form fieldset legend{
	float:left;
    width:200px;
	display:block;
	margin-right:400px;
	font:bold 16px Arial, Helvetica, sans-serif;
 	color:#333333;		
	}

form label{
	width:500px;
    display:block;
    float:left;
    margin-left:30px;
    padding:5px 0;
	}	
	
form label span{
	font:bold 12px Arial, Helvetica, sans-serif;
 	color:#333333;
	float:left;
	}	
	
.campos{
	background:#FC0;
	border:3px solid #333333;
	width:200px;
	float:right;
	font-weight:bold;
    color: #FFF;
	}	

.btn{
	background:#FC0;
	border:3px solid #333333;
	width:100px;
    margin:10px;
	font-weight:bold;
    color: #FFF;
	}	
	
hr{
	widows:900px;
	border:1px dotted #ccc;
	}	
	
</style>
<title>WEB MURAD-DESENVOLVIMENTO WEB</title>
</head>

<body>
<?php include_once("analyticstracking.php") ?>
<div id="wrap">
 
<?php
include('top.php');
include('admin/conexao.php');
?>
<div id="service">
     <h2>Orçamento</h2>
     <p class="p">Solicite um orçamento através do formulário ou entre em contato conosco pelos fones a seguir:     </p>  
     <h3 align="left">Fone: (13) 3426-4136</h3>
     <h3 align="left">Fone: (13) 9211-3169</h3>
     <br />
     <p class="p">Se prefirir encaminhe um e-mail para <mailto> contato@webmurad.com.br </mailto> ou preencha o formulário a seguir</p>  


                  <form id='form_orcamento' action="envia_orcamento.php" method="post" name="form_contato">
                   <fieldset>
                     <legend>Solicite um Orçamento:</legend>
                       <label>
                        <span>NOME:</span>
                        <input type="text" id="nome" name="nome" maxlength="60" size="40" class="campos" />
                       </label>
                         <label>
                        <span>E-mail:</span>
                        <input type="text" id="email" name="email" maxlength="60" size="40" class="campos" />
                       </label>
                        <label>
                        <span>Telefone com DDD: </span><span class="ex">Exemplo:1334264136</span>
                        <input type="text" id="telefone" name="telefone" maxlength="10" size="40" class="campos" />
                       </label>
                        <label>
                        <span>Celular com DDD: </span><span class="ex">Exemplo:1392113169</span>
                        <input type="text" id="celular" name="celular" maxlength="60" size="40" class="campos" />
                       </label>
                       <label>
                        <span>Site atual (se houver): </span>
                        <input type="text" name="site" maxlength="60" size="40" class="campos" />
                       </label>
                       <label>
                        <span>Algum site que você goste (uma referência ou um concorrente): </span>
                        <input type="text" name="site2" maxlength="60" size="40" class="campos" />
                       </label>
                        <label>
                        <span>Descreva como você gostaria que fosse seu site:</span>
                        <textarea name="descricao" rols="30" cols="30" class="campos">
                        </textarea>
                        </label>
                        <input type="submit" value="ENVIAR" class="btn" />
                        <input type="reset" value="LIMPAR" class="btn" />
                   </fieldset>
                  </form>



</div>
  						<div id="siderbar">
					   
					      <ul>
                            <?php
							include('ler_destaques.php');
							?>
						  </ul>
						  
    			        </div>            
            <div id="cont">
 
          <hr />     
                     
         <?php 
		 include('conteudo.php');
		 ?>       
                
         <hr class="hr" />
         
         <div id="footer">
         
         <div id="contfooter">
       
       <p>
    <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="CSS válido!" />
    </a>
</p>
                 <p>
    <a href="http://validator.w3.org/check?uri=referer"><img
      src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /></a>
  </p>
         </div>
  </div> 
         
</div>
        
                
</body>
</html>