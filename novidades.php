<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link
      rel="shortcut icon"
      href="img/spotify-2015-logo-560E071CB7-seeklogo.com.png"
      type="image/x-icon"
    />
    <title>Novidades do Spotify</title>
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="estilos/style.css" />
    <title></title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css"
      integrity="..."
      crossorigin="anonymous"
    />
  </head>
  <body>
    <header class="cabeca">
      <h1 class="musica">S<strong class="caixa-forte">POTIFY</strong></h1>
    </header>

    <nav class="nav-hor">
      <ul>
        <li><a class="active" href="novidades.php">Novidades</a></li>
        <li><a href="index.html">Página Inicial</a></li>

        <li><a href="sobre.html">Sobre</a></li>
        <li><a href="servicos.php">Serviços</a></li>
        <li><a href="contato.html">Contato</a></li>
      </ul>
    </nav>
    <main>
    <article class="novidades-evento">
        <p> STREAM <strong>ON</strong></p>
<br/> 
<h1>Esse ano o <strong>Stream On</strong> surgiu com grandes 
novidades, O <strong>Spotify</strong> anunciou que a edição tem como 
objetivo mostrar “os desenvolvimentos e ferramentas 
mais recentes para ajudar mais criadores a traçar seus 
caminhos para o sucesso, serem descobertos por novos públicos, 
criar uma comunidade engajada e se conectar com fãs em todo o 
mundo”. Tudo isso por meio de ferramentas, 
recursos e programação de definição vertical. 
O evento, no Arts District, em Los Angeles, 
teve transmissão ao vivo no For the Record.</h1>
      </article>
      <br/> <br/>
    <h1 class="novidades">Novidades</h1>
		<section class="novidades-um">
            <table class="table table-striped table-success">
                <thead class="table-dark">
                    <tr><td>Número</td><td>Resumo</td><td>Novidade</td></tr>
                </thead>
                <tbody>
            <?php
                $conexao = new mysqli("localhost","root","","empresa");
                $consulta = $conexao->query("select * from novidades");
                $resultado = $consulta->fetch_all(MYSQLI_ASSOC);
                foreach($resultado as $linha)
                    echo("<tr><td>".$linha['id_nov']."</td><td>".$linha['resumo']
                  ."</td><td>".$linha['descricao']."</td></tr>");
                $conexao->close();
            ?>
                </tbody>
            </table>    
            
     
		</section>
    </main>
    <footer>
      <p>2023 &copy; Feito por Beatriz Kloss</p>
    </footer>
    <script src="js/jquery.min.js"></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
