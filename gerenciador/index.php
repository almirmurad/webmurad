<?php session_start(); include 'php/verifica.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link type="text/css" href="estilo.css" rel="stylesheet" media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sistema Gerenciador de Conteúdo - Web Murad - Desenvolvimento Web</title>
</head>
<body>
	<div id="container">

<?php 
$pagina="index";
include 'php/cabecalho.php';

?>

		
	<div id="corpo">
<h2 class="noti">PRODUTOS</h2>
    
          <aside id="left">

      <nav id="mnProdutos">
        <ul>
                       <!-- <li><a href="inserirProduto.php">INSERIR PRODUTOS</a></li>
                        <li><a href="listarProdutos.php">LISTAR PRODUTOS</a></li>
                        <li><a href="pesquisarProduto.php">PESQUISAR PRODUTOS</a></li> -->
                    <li><a href="#">INSERIR PRODUTOS</a></li>
                    <li><a href="#">LISTAR PRODUTOS</a></li>
                    <li><a href="#">PESQUISAR PRODUTOS</a></li>
                </ul>
        
      </nav>

              <nav id="mnGaleria">
                  <h2>GALERIA</h2>
                  <ul>
                      <li><a href="#">INSERIR GALERIAs</a></li>
                      <li><a href="#">LISTAR GALERIAS</a></li>
                      <li><a href="#">PESQUISAR GALERIAS</a></li>
                  </ul>
              </nav>
         
              <nav id="mnPacotes">
                  <h2>PACOTES</h2>
                  <ul>
                      <li><a href="php/inserirPacote.php">INSERIR PACOTE</a></li>
                      <li><a href="php/listarPacotes.php">LISTAR PACOTE</a></li>
                      <li><a href="php/pesquisarPacotes.php">PESQUISAR PACOTE</a></li>
                  </ul>
              </nav>
             

            <nav id="mnNoticias">
                <h2>USUÁRIOS</h2>
                  <ul>
                     <?php
  if( ! isset($_SESSION['nivel']) || $_SESSION['nivel'] == 'A')
    {
       echo "<li><a href='php/inserirUsuario.php'>INSERIR USUÁRIO</a></li>
                        <li><a href='php/listarUsuarios.php'>LISTAR USUÁRIOS</a></li>
                        <li><a href='php/pesquisarUsuario.php'>PESQUISAR USUÁRIOS</a></li>";
    }
    ?>
                    </ul>
                    
            </nav>
  <!--
            <nav id="mnPublicidade">
                <h2>PUBLICIDADE</h2>
                    <ul>
                        <li><a href="#">INSERIR PUBLICIDADE</a></li>
                        <li><a href="#">LISTAR PUBLICIDADE</a></li>
                        <li><a href="#">PESQUISAR PUBLICIDADE</a></li>
                    </ul>
            </nav>

            <nav id="mnNewsletter">
                <h2>NEWSLETTER</h2>
                    <ul>
                        <li><a href="#">LISTAR EMAILS</a></li>
                        <li><a href="#">EXPORTAR PLANILHA</a></li>
                    </ul>
            </nav>
    -->
    </aside>
	<h2 class="titcontinicio"><span id="titulo">Início</span></h2>
        <section id= "conteudo">
        <span class="avisos" id="avisos">Instruções</span><br>
        <p>
          Navegue no menu lateral para ter acesso aos formulários de gerenciamento de conteúdo do seu site.<br>
          Os links funcionais são relativos aos produtos contratados com a WebMurad.<br>
        </p>
        <p>
          Neste caso os links disponíveis no menu são os de, administração de pacotes e de usuários.<br>
          Para inserir um pacote de diarias ou informações nos banners da página <strong>Inicial</strong> e simultanemamente na página <strong>A Pousada</strong>, clique no menu pacotes->Inserir Pacotes.<br>
          <strong>Preencha todos os campos do formulário para que não falte informações importantes para o usuario final(hóspedes).</strong><br>
          O campo <strong>Resumo</strong> refere-se ao resumo do pacote que será apresentado no banner da página inicial do site.<br>
          Os campos <strong>Título</strong> e <strong>Descrição</strong>, são as informações que estarão visíveis na página <strong>A Pousada</strong>, onde estarão vísiveis os pacotes.
        </p>
        <p>
          O link <strong>Listar Pacotes</strong>, listará todos os pacotes cadastrados no sistesma.
          O link <strong>Pesquisar Pacotes</strong>, dará acesso a pesquisa de pacotes tanto por código do pacote ou pelo título, para que seja encontrado um pacote específico.<br>
          Tanto através do link <strong>Listar Pacotes</strong> e <strong>Pesquisar Pacotes</strong> você terá acesso aos botões de alteração do pacote ou de exclusão do pacote.<br>
          <strong>Importante!</strong><br>
          Ao clicar no link Alterar Pacote, será aberto o formulário para alteração do pacote referido. As alterções só serão validadas, caso você clique no botão Alterar. É importante ressaltar que neste caso a imagem do pacote deva ser trocada por outra ou deva ser inserida a mesma imagem, mas nunca deixar de inserir uma imagem na alteração de pacote, caso isso aconteça e você submeta o formulário de alteração sem imagem, o pacote alterado aparecerá na tela do site sem imagem.
        </p>
        <p>
          No menu <strong>Usuários</strong>, você poderá cadastrar, alterar, excluir e pesquisar um usuário do sistema, ustilizando os mesmos princípios do menu de Pacotes.<br>
          <strong>Importante!</strong><br>
          Os usuários devem ser cadastrados com nível A(administrador) ou B(funcionario), sendo que o Usuário administrador pode visualizar o menu de usuários, assim podendo excluir um usuario de nivel B.<br>

        </p>
        <p>
          Caso tenha alguma dúvida entre em contato atravé do telefone/whatsapp (41)98902-1385 ou pelo e-mail almir_murad@hotmail.com.<br>
          Estou a disposição para ajudar, sempre.<br>
          Atenciosamente.<br>
          <strong>Almir Murad.</strong><br>
          <strong>Web Master Responsável.</strong><br>
        </p>

 </section>       
<?php 
include 'php/footer.php';
?>
	</div></div>
</body>
</html>