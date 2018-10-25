<!DOCTYPE html>
<html>
    <head>
        <title>LGPO:: DASHBOARD</title>
        <meta charset="utf-8">
        <meta name="author" content="Gustavo Braz; Jacson Fagundes; Lucas Luz; Maicon Souza; Rebeca Yonara">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, maximum-scale=1,">
        <meta name="description" content="Modo gráfico da Linux Group Policy">
        <link rel="icon" href="img/polyHatsune_recorte.png" type="image/x-icon">
        <!-- FOLHAS DE ESTILOS -->
        <link rel="stylesheet" href="css/lgpoStyle.css"><!--substituto do mapadoestilo.css(inutilizado)-->
        <link rel="stylesheet" href="BOOTSTRAP/css/bootstrap.min.css">
        <!-- javascript links -->
        <script src="js/jquery-2.0.3.min.js"></script>
        <script src="BOOTSTRAP/js/bootstrap.min.js"></script>
        <script src="js/lgpoScript.js"></script>
    </head>

    <body class="lgpoStyle-body">
        <!--<div class="container">-->
<!-- MENU DE CONTEXTO -->
  <!--RIGHTCLICK-->
          <ul class="rightclickmenu">
            <li>
              <button type="button" class="btn btn-primary rightclickobject" data-toggle="modal" data-target="#exampleModal">
              Gerenciar usuários
              </button>
            </li>
            <li>
              <button type="button" class="btn btn-primary lgpoStyle-rightClickMarginTop rightclickobject" data-toggle="modal" data-target="#exampleModal">
              Gerenciar grupos
              </button>
            </li>
            <li>
              <button type="button" class="btn btn-primary lgpoStyle-rightClickMarginTop rightclickobject" data-toggle="modal" data-target="#novaOUModal">
              Nova OU
              </button>
            </li>
            <li>
              <button type="button" class="btn btn-primary lgpoStyle-rightClickMarginTop rightclickobject" data-toggle="modal" data-target="#cadastroModal">
              Novo usuário
              </button>
            </li>
          </ul>
  <!--RIGHTCLICK-->


  <!-- EXAMPLE MODAL CONFIG. -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
  <!-- FIM DE EXAMPLE MODAL CONFIG. -->

  <!-- MODAL DE NOVA OU -->
          <div class="modal fade" id="novaOUModal" tabindex="-1" role="dialog" aria-labelledby="novaOULDAPModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="novaOULDAPModal">NOVA UNIDADE ORGANIZACIONAL</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container">
                  <form action="php/scriptNovaOU.php" method="post"> <!-- FORMULÁRIO DE PREENCHIMENTO PARA ADCIONAR USUÁRIOS A BASE DE DADOS LDAP -->
                    <div class="row">
                      <div class="col">
                        <label id="localDeCriacaoDaNovaOULDAP">LOCAL DE CRIAÇÃO: /itemPrimario/itemSecundário</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="nomeNovaOULDAP" class="lgpoStyle-titulo">Nome:</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" id="nomeNovaOULDAP" name="nomeNovaOULDAP" placeholder="Insira o nome da nova Unidade Organizacional">
                      </div>
                    </div>
                    <ul class="nav justify-content-end lgpoStyle-titulo"><!-- NAV PARA POSICIONAMENTO ADEQAUDO DOS BOTÕES E INTERAÇÃO COM O FORMULÁRIO -->
                      <li class="nav-item">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      </li>
                      <li class="nav-item lgpoStyle-tituloComMarginLeft">
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                      </li>
                    </ul><!-- end of NAV PARA POSICIONAMENTO ADEQAUDO DOS BOTÕES E INTERAÇÃO COM O FORMULÁRIO -->
                  </form> <!-- end of FORMULÁRIO DE PREENCHIMENTO PARA ADCIONAR USUÁRIOS A BASE DE DADOS LDAP -->
                  </div>
                </div>
              </div>
            </div>
          </div>
  <!-- FIM DE MODAL DE NOVA OU -->

  <!-- MODAL CADASTRO -->
          <div class="modal fade" id="cadastroModal" tabindex="-1" role="dialog" aria-labelledby="cadastroLDAPModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="cadastroLDAPModal">ADICIONAR UM USUÁRIO À BASE DE DADOS LDAP</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="container">
                  <form action="php/scriptCadastro.php" method="post"> <!-- FORMULÁRIO DE PREENCHIMENTO PARA ADCIONAR USUÁRIOS A BASE DE DADOS LDAP -->
                    <div class="row">
                      <div class="col">
                        <label for="nomeCadastroUsuariosLDAP">Nome:</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" id="nomeCadastroUsuariosLDAP" name="nomeCadastroUsuariosLDAP" placeholder="Primeiro nome">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="sobrenomeCadastroUsuariosLDAP" class="lgpoStyle-titulo">Sobrenome:</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" id="sobrenomeCadastroUsuariosLDAP" name="sobrenomeCadastroUsuariosLDAP" placeholder="Sobrenome">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="nomeDeUsuarioCadastroUsuariosLDAP" class="lgpoStyle-titulo">Nome de usuário:</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" id="nomeDeUsuarioCadastroUsuariosLDAP" name="nomeDeUsuarioCadastroUsuariosLDAP" placeholder="Nome de usuário">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="departamentoUsuarioCadastroUsuariosLDAP" class="lgpoStyle-titulo">Departamento:</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" id="departamentoUsuarioCadastroUsuariosLDAP" name="departamentoUsuarioCadastroUsuariosLDAP" placeholder="Departamento do usuário">
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <label for="passwordCadastroUsuariosLDAP" class="lgpoStyle-titulo">Senha:</label>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col">
                        <input type="password" class="form-control" id="passwordCadastroUsuariosLDAP" name="passwordCadastroUsuariosLDAP" placeholder="Insira a senha do usuário">
                      </div>
                    </div>
                    <ul class="nav justify-content-end lgpoStyle-titulo"><!-- NAV PARA POSICIONAMENTO ADEQAUDO DOS BOTÕES E INTERAÇÃO COM O FORMULÁRIO -->
                      <li class="nav-item">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                      </li>
                      <li class="nav-item lgpoStyle-tituloComMarginLeft">
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                      </li>
                    </ul><!-- end of NAV PARA POSICIONAMENTO ADEQAUDO DOS BOTÕES E INTERAÇÃO COM O FORMULÁRIO -->
                  </form> <!-- end of FORMULÁRIO DE PREENCHIMENTO PARA ADCIONAR USUÁRIOS A BASE DE DADOS LDAP -->
                  </div>
                </div>
              </div>
            </div>
          </div>
  <!-- FIM DE MODAL CADASTRO -->

<!-- FIM DO MENU DE CONTEXTO -->

            <div class="flex-row lgpoStyle-titulo"><!-- LINHA LINUX GROUP POLICY -->
                <div class="d-flex justify-content-center">
                    <h4>LINUX GROUP POLICY</h4>
                    <span class="badge badge-dark height-badge lgpoStyle-backgroundBadge">LGPO</span>
                </div>
            </div>


            <div class="row"><!-- DIV DA LINHA DOS BOTÕES DE NAVEGAÇÃO -->
                <div class="col align-self-start"><!-- COLUNA UNICA DOS BOTÕES DE NAVEGAÇÃO -->
                    <input type="button" value="&#8592;" onClick="history.go(-1)" class="lgpoStyle-botoesDeNavegacao"><!--VOLTAR-->
                    <input type="button" value="&#8594;" onCLick="history.forward()" class="lgpoStyle-botoesDeNavegacao"><!--PRÓXIMO-->
                    <input type="button" value="&#8634;" onClick="history.go(0)" class="lgpoStyle-botoesDeNavegacao"><!--RECARREGAR-->
                </div>
            </div><!--end da div da linha dos botoes de navegação-->


            <div class="row lgpoStyle-linhaDaTreeeviewEDaDashboard"> <!-- LINHA DA TREEVIEW E DA DASHBOARD -->
<!--TREEVIEW-->
                <div class="col-4 lgpoStyle-colunaTreeviewBackground"> <!-- COLUNA DA TREEVIEW -->
                    <div class="container float-left height-seiscentos">
                        <P style="font-weight: bold;">ETEC EMBU</p>
                        <p class="pDaTree">BIBLIOTECA</p>
                        <p class="p2DaTree">MAQ FUNCIONÁRIOS</p>
                        <p class="p3DaTree">MAQ 01</p>
                        <p class="p3DaTree">MAQ 02</p>
                        <p class="p2DaTree">MAQ ALUNOS</p>
                        <p class="p3DaTree">MAQ 01</p>
                        <p class="p3DaTree">MAQ 02</p>
                        <p class="p3DaTree">MAQ 03</p>
                        <p class="p3DaTree">MAQ 04</p>
                        <p class="p3DaTree">MAQ 05</p>
                        <p class="p3DaTree">MAQ 06</p>
                        <p class="pDaTree">RH</p>
                        <p class="p2DaTree">MAQ 01</p>
                        <p class="p2DaTree">MAQ 02</p>
                        <p class="p2DaTree">MAQ 03</p>
                        <p class="pDaTree">SECRETARIA</p>
                        <p class="p2DaTree">MAQ 01</p>
                        <p class="p2DaTree">MAQ 02</p>
                        <p class="p2DaTree">MAQ 03</p>
                        <p class="p2DaTree">MAQ 04</p>
                        <p class="p2DaTree">MAQ 05</p>
                        <p class="pDaTree">LABORATÓRIOS</p>
                        <p class="p2DaTree">LAB 01</p>
                        <p class="p2DaTree">LAB 02</p>
                        <p class="p2DaTree">LAB 03</p>
                        <p class="p2DaTree">LAB 04</p>
                        <p class="p2DaTree">LAB 05</p>
                        <p class="p2DaTree">LAB 06</p>
                        <p class="pDaTree">CPD</p>
                        <p class="p2DaTree">MAQ 01</p>
                        <p class="p2DaTree">MAQ 02</p>
                    </div><!--end da div container float-left-->
                </div><!--end da div da coluna da treeview-->
<!--DASHBOARD-->
                <div class="col-8"> <!-- COLUNA DA DASHBOARD -->
                    <div class="container float-right">
                      <nav> <!-- NAV-BAR DA DASHBOARD -->
                          <ul class="pagination justify-content-center"> <!-- UL DO CONTEUDO DA NAV DA DASHBOARD -->
                            <li><input type="button" value="1" onClick="AlteraPropriedadeUm()" class="lgpoStyle-botoesDeNavegacao"></li>
                            <li><input type="button" value="2" onClick="AlteraPropriedadeDois()" class="lgpoStyle-botoesDeNavegacao"></li>
                            <li><input type="button" value="3" onClick="AlteraPropriedadeTres()" class="lgpoStyle-botoesDeNavegacao"></li>
                            <!--
                              <li class="page-item"><a class="page-link" href="#" onClick="AlteraPropriedadeUm()">1</a></li>
                              <li class="page-item"><a class="page-link" href="#" onClick="AlteraPropriedadeDois()">2</a></li>
                              <li class="page-item"><a class="page-link" href="#" onClick="AlteraPropriedadeTres()">3</a></li>
                            -->
                          </ul><!--end da ul do conteudo da nav da dashboad-->
                      </nav><!--end da nav-bar da dashboard-->

                        <div class="embed-responsive embed-responsive-4by3 lgpoStyle-iframeDashboard"> <!-- DIV DO IFRAME DA DASHBOARD -->
                            <iframe id="grafico_iframe" src="Dashboard/dash-linhas.html"></iframe>
                        </div><!-- end da div do iframe da dashboard -->


                    </div><!--end da div container da dashboard-->
                </div><!--end da div da coluna da dashboard-->
            </div><!--end da div da linha da treeview e da dashboard-->
        <!--</div>--><!--end da div container principal-->



    </body>
</html>
