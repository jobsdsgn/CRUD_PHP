<!DOCTYPE html>
<html lang="pt-br">
<html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Cairo|Exo&display=swap" rel="stylesheet">
    <style>
      p{color: white;}
      body { background-image: url("img/background2.jpg");background-color: #cccccc;background-attachment: fixed;;
      background-size:cover;
      background-repeat:no-repeat;}
      img{display: block; margin-left: auto; margin-right: auto;}
      h1{text-align: center;font-family: 'Cairo', sans-serif;color: darkgray;}
      h6{font-family: 'Exo', sans-serif;color:seashell;text-align: center;}
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Pesquisa</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <style>
      p{color: white;}
      body { background-image: url("img/background2.jpg");background-color: #cccccc;background-attachment: fixed;;
      background-size:cover;
      background-repeat:no-repeat;}
      img{display: block; margin-left: auto; margin-right: auto;}
      h1{text-align: center;font-family: 'Cairo', sans-serif;color: darkgray;}
      h6{font-family: 'Exo', sans-serif;color:seashell;text-align: center;}
  </style>
  <style>
      .plano01, .plano02, .blue {
    color: #fff;
    display: block;
    line-height: 200px;
    /*
    position: absolute;
    text-align: center;
    width: 1300px;
    height: 30px;
    */
}

.plano01 {
  background-image: url("img/vd.jpg");
    background-attachment: fixed;
    background-size: cover;
    background-repeat: repeat-x;
    left: 0px;
    top: 0px;
    z-index: 0;
    /*
    opacity:0.5;
    */
}

.plano02 {
  background-image: url("img/background2.jpg");
    background-attachment: scroll;
    background-size: 1300px 260px;
    background-repeat: repeat-x;
    left: 0px;
    top: 0px;
    z-index: 1;
    opacity:0.6;
    
}

.blue {
    background: blue;
    left: 100px;
    top: 100px;
    z-index: 2;
  opacity:0.7;
}
.search-box{
  top: 0%;
  left: 0%
  transform: translate(-50%,-50%);
  background: #28a4a0;
  height: 35px;
  border-radius: 40px;
}
.search-btn{
  color: #e84118;
  float: right;
  width: 40px;
  height: 40;
  border-radius: 50%;
  background: #2f3640;
  display: flex;
}

body {
  color: #777;
}
    </style>
 </head>
 <body>
     <div>
        <div>
            <span class="plano01"><img src="img/logo.png"/>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="#">Menu</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
     <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home<span class="sr-only">(Página atual)</span></a>
      <a class="nav-item nav-link" href="cadastrolivros.php">Cadastrar livros</a>
      <a class="nav-item nav-link" href="pesquisalivros.php">Buscar livros</a>
      <a class="nav-item nav-link" href="cadastrolivraria.php">Cadastrar Livraria</a>
      <a class="nav-item nav-link" href="pesquisalivraria.php">Buscar Livraria</a>
    </div>
  </div>
</nav>
        <div>
          <span class="plano02">
              <div class="container mt-2 mb-4 p-2 shadow bg-black">
                  <h6>Pesquisa de Livros</h6>
              </span>
              </div>
        </div>
      <div class="container">
      <br /><br />
      <label>Entre com um valor para pesquisar</label>
      <div id="search_area">
      <input type="text" name="employee_search" id="employee_search" class="form-control input-lg" autocomplete="off" placeholder="Nome,isbn,autor..." />
      </div>
      <br />
      <br />
      <div id="employee_data"></div>
      </div>
      </div>
      </div>
            <div class="container mt-2 mb-4 p-2 shadow bg-black">
              <p>
                  A livraria mais antiga do mundo em atividade contínua no local atual: a Livraria Bertrand, situada desde 1773 na rua Garret 73/75 em Lisboa, Portugal.

                  A Livraria Bertrand foi fundada em 1732, na rua Direita do Loreto, por Pedro Faure. Em 1755 veio a ser destruída por um enorme terremoto e maremoto seguidos de um incêndio que assolaram Lisboa, tendo sido instalada em outro local. Dezoito anos depois, após a reconstrução da cidade, a Livraria Bertrand foi instalada no local onde ainda hoje existe, completando assim 238 anos de funcionamento continuado.
              </p>
              <p>
                  Desde então a Livraria Bertrand faz parte do património cultural da cidade. Por lá passaram gerações de escritores portugueses, como Alexandre Herculano, Oliveira Martins, Eça de Queirós, Antero de Quental e Ramalho Ortigão ou, mais recentemente, Fernando Namora e José Cardoso Pires.
              </p>
              <p>
                  A Livraria Bertrand não só comercializa livros e artigos relacionados, mas é também uma editora prestigiada. Apesar da livraria original se encontrar no Chiado, perto do local onde Fernando Pessoa nasceu e do café A Brasileira que Pessoa frequentou, a Bertrand expandiu-se tornando-se uma cadeia de atualmente com 53 lojas em Portugal.

                  A célebre livraria Galignani de Paris reivindica ser a mais antiga do mundo, por ter sido fundada em 1520, na cidade italiana de Veneza. Contudo, apenas foi instalada em 1856 na sua atual localização, rue de Rivoli 224, pelo que a sua congênere lisboeta possui uma história de laboração contínua no mesmo local de mais 83 anos.
              </p>
                <h6>DESENVOLVEDORES - JARDEL CASTRO | JOBS TI</h6>
            </span>
        </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 load_data('');
 
 function load_data(query, typehead_search = 'yes')
 {
  $.ajax({
   url:"fetch.php",
   method:"POST",
   data:{query:query, typehead_search:typehead_search},
   success:function(data)
   {
    $('#employee_data').html(data);
   }
  });
 }
 
 $('#employee_search').typeahead({
  source: function(query, result){
   $.ajax({
    url:"fetch.php",
    method:"POST",
    data:{query:query},
    dataType:"json",
    success:function(data){
     result($.map(data, function(item){
      return item;
     }));
     load_data(query, 'yes');
    }
   });
  }
 });
 
 $(document).on('click', 'li', function(){
  var query = $(this).text();
  load_data(query);
 });
 
});
</script>
