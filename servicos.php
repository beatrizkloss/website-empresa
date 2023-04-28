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
    <title>Serviços do Spotify</title>
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
        <li><a class="active" href="servicos.html">Serviços</a></li>
        <li><a href="index.html">Página Inicial</a></li>

        <li><a href="sobre.html">Sobre</a></li>
        <li><a href="novidades.php">Novidades</a></li>
        <li><a href="contato.html">Contato</a></li>
      </ul>
    </nav>
    <main>
      <h1 class="planos">PLANOS</h1>
      <section class="servicos-um">
        <table class="table table-striped table-success">
          <thead class="table-dark">
            <tr>
              <td>Codigo</td>
              <td>Nome</td>
              <td>Valor</td>
              <td>Quantidade</td>
            </tr>
          </thead>
          <tbody>
            <?php
                $conexao = new mysqli("localhost","root","","empresa");
                $consulta = $conexao->query("select * from produtos");
            $resultado = $consulta->fetch_all(MYSQLI_ASSOC); foreach($resultado
            as $linha) echo("
            <tr>
              <td>".$linha['id_prod']."</td>
              <td>".$linha['nome'] ."</td>
              <td>".$linha['valor']."</td>
              <td>".$linha['qtdestoque']."</td>
            </tr>
            "); $conexao->close(); ?>
          </tbody>
        </table>
      
      </section>
      <article class="plano-gratis">
        <h2 class="gratis"><strong>SPOTIFY </strong>FREE</h2>
<br/> <br/>
        <p>
          Você também pode escutar de graça com interrupções por anúncios e qualidade de som inferior.
        </p>
      </article>
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
