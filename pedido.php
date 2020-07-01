
<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8"/>
        <title>STORE GAME</title>   
        <link rel="stylesheet" type="text/css"href="_css/estilo.css"/>
        <link rel="stylesheet" href="_css/form.css"/>	
        <script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=fGWcebLLs-YYqTGqajn-v2PuQeB9Epsd3WJe8aum4v59zMNM3ccxZ4nkQARWu5pUwmAIGyC4UO9rQzuHNuRyMA" charset="UTF-8"></script><script language="javascript" src="_javascript/funcoes.js"></script>

        <script>

        </script>
    </head>

    <body>
        <div id="interface">

            <header id="cabecalho">
                <hgroup>
                    <h1>Store Game</h1>
                    <h2>Sua Melhor Opção Em Compras De Jogos.</h2>
                </hgroup>

                <img id="icone" src="_imagens/contato.png"/>   
                <nav id="menu">
                    <h1>Menu Principal</h1>
                    <ul type="1" start="1">	
                        <li onmouseover="mudaFoto('_imagens/home.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="index.php">Home</a></li>
                        <li onmouseover="mudaFoto('_imagens/playstation-icon.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="playstation.php">PS4</a></li>
                        <li onmouseover="mudaFoto('_imagens/xbox.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="xbox.php">XBoxOne</a></li>
                        <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="pedido.php">Pedidos</a></li>
                        <li onmouseover="mudaFoto('_imagens/contato.png')" onmouseout="mudaFoto('_imagens/papel6.png')"><a href="login.php">Login</a></li>
                    </ul>
                </nav>
            </header>
            <section id="corpo-full">
                <article id="noticia-principal">
                    <header id="cabecalho-artigo">
                        <hgroup>
                            <h3>Cadastro / Compras > </h3>
                            <h1>Pedidos</h1>
                            <h3 class="direita">Atualizado em Junho 2020</h3>
                        </hgroup>
                    </header>
                    </form>
                    <form method="post" id="fContato" action="mailto:raphaeljeronimo84@gmail.com" oninput="calc_total();">
                        <fieldset id="usuario"><legend>Identificação do Comprador</legend>
                            <p><label for="cNome">Nome:</label><input type="text" name="tNome" id="cNome" size="20" maxlength="30" placeholder="Nome Completo"/></p>
                            <p><label for="cMail">Celular:</label><input type="text" name="tCel" id="cCel" size="20" maxlength="40" placeholder="Celular"/></p>
                            <p><label for="cMail">E-mail:</label><input type="email" name="tMail" id="cMail" size="20" maxlength="40" placeholder="Email"/></p>
                            <p><label for="cNasc">Data de Nasc.:</label> <input type="date" name="tNasc" id="cNasc"/></p>
                            <fieldset id="sexo"><legend>Sexo</legend>
                                <input type="radio" name="tSexo" id="cMasc"> <label for="cMasc">Masculino</label><br/>
                                <input type="radio" name="tSexo" id="cFem"><label for="cFem">Feminino</label></fieldset>
                            
                        </fieldset>

                        <fieldset id="endereco"><legend>Endereço do Comprador</legend>
                            <p><label for="cRua">Logradouro:</label><input type="text" name="tRua" id="cRua" size="20" maxlength="80" placeholder="Rua, Av, Trav, ..."/></p>
                            <p><label for="cNum">Número:</label><input type="number" name="tNum" id="cNum" min="0" max="99999"</p>
                            <p><label for="cEst">Estado:</label>
                                <select name="tEst" id="cEst">
                                    <optgroup label="Região Sudeste">
                                        <option value="RJ">Rio de Janeiro </option>
                                        <option value="SP" selected>São paulo </option>
                                        <option value="MG">Minas Gerais </option>
                                    </optgroup>
                                    <optgroup label="Região Sul">
                                        <option value="RS">Rio Grande do Sul </option>
                                        <option value="PR">Paraná </option>
                                        <option value="SC">Santa Catarina </option>
                                    </optgroup>
                                </select>
                            </p>
                            <p><label for="cCid">Cidade:</label><input type="text" name="tCid" id="cCid" maxlength="40" size="20" placeholder="Sua Cidade" list="cidades"/></p>
                            <datalist id="cidades">
                                <option value="Cruzeiro"></option>
                                <option value="Lavrinhas"></option>
                                <option value="Cachoeira Paulista"></option>
                                <option value="Lorena"></option>
                            </datalist>
                        </fieldset>

                        <fieldset id="mensagem"><legend>Insira os Códigos dos Produtos</legend>
                            <p><label for="cMsg"></label><textarea name="tMsg" id="cMsg" cols="35" rows="5" placeholder="Cóodigos dos Pedidos"></textarea></p>
                        </fieldset>
                        
                        <p><input type="submit" style="font-size: 20px; background-color: #404040;  color: #e6e6e6;" name="bt1" value="Enviar Pedidos"></p>
                        <br>
                        
                        <fieldset id="mensagem"><legend>Contato com Vendedores</legend>
                            
                            <p> <img src="_imagens/qrcode.png" width="200" height="200" /><p>
                        </fieldset>
                    </form>

                </article>
            </section>

            <footer id="rodape">
                <p>Copyright &copy; 2020<br/>
            </footer>
        </div>
    </body>

</html>

