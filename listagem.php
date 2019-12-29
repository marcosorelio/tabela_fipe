<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    @import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
* {
  
  padding: 0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  -webkit-font-smoothing: antialiased;
  -moz-font-smoothing: antialiased;
  -o-font-smoothing: antialiased;
  font-smoothing: antialiased;
  text-rendering: optimizeLegibility;
}

body {
  font-family: "Roboto", Helvetica, Arial, sans-serif;
  font-weight: 100;
  font-size: 12px;
  line-height: 30px;
  color: #777;
  background: #4272d7;
  
  
}
.container {
  max-width: 29 %;
  max-height: 100 %;
  width: 29%;
  height:100%;
 
  position: relative;
  float:left;
  
}

.container2 {
  max-width: 70%;
  width: 70%;
  
  position: relative;
  float:right;
  
}


#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact select,
#contact textarea,
#contact button[type="submit"] {
  font: 400 12px/16px "Roboto", Helvetica, Arial, sans-serif;
}

#contact {
  background: #F9F9F9;
  padding: 25px;
  margin: 30px 0;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}

#contact h3 {
  display: block;
  font-size: 30px;
  font-weight: 300;
  margin-bottom: 10px;
  margin-top: 0;
}

#contact h4 {
  margin: 5px 0 15px;
  display: block;
  font-size: 13px;
  font-weight: 400;
}

fieldset {
  border: medium none !important;
  /*margin: 0 0 10px;*/
  min-width: 100%;
  padding: 0;
  width: 100%;
}

#contact select{color:#8a7777}

#contact input[type="text"],
#contact input[type="email"],
#contact input[type="tel"],
#contact input[type="url"],
#contact select,
#contact textarea {
  width: 99%;
  border: 1px solid #ccc;
  background: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  float:left;
 }

#contact input[type="text"]:hover,
#contact input[type="email"]:hover,
#contact input[type="tel"]:hover,
#contact input[type="url"]:hover,
#contact select:hover,
#contact textarea:hover {
  -webkit-transition: border-color 0.3s ease-in-out;
  -moz-transition: border-color 0.3s ease-in-out;
  transition: border-color 0.3s ease-in-out;
  border: 1px solid #aaa;
}

#contact textarea {
  height: 100px;
  max-width: 100%;
  resize: none;
}

#contact button[type="submit"] {
  cursor: pointer;
  width: 100%;
  border: none;
  background: #4272d7;
  color: #FFF;
  margin: 0 0 5px;
  padding: 10px;
  font-size: 15px;
}

#contact button[type="submit"]:hover {
  background: #39639e;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

#contact button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}

.copyright {
  text-align: center;
}

#contact input:focus,
#contact select:focus,
#contact textarea:focus {
  outline: 0;
  border: 1px solid #aaa;
}

::-webkit-input-placeholder {
  color: #888;
}

:-moz-placeholder {
  color: #888;
}

::-moz-placeholder {
  color: #888;
}

:-ms-input-placeholder {
  color: #888;
}
    
    </style>
</head>
<body>



    <div class="container">

    <form id="contact" action="" method="post">
      
      <h3>Pesquisa Avançada</h3>
      <hr>
      <fieldset>
        <input placeholder="Palavra Chave" type="text" tabindex="1" required autofocus>
      </fieldset>
      <fieldset >
        <input style="width:49%;float:left;margin-right:1%" placeholder="Preço Mínimo" type="text" tabindex="1" required autofocus>
        <input style="width:49%;float:left; " placeholder="Preço Máximo" type="text" tabindex="1" required autofocus>
      </fieldset>
      
      <fieldset>
        <select id="selectModelo" name="selectModelo" >
        <option value="">Marca</option>
        </select>
      </fieldset>
      <fieldset>
        <select id="selectModelo" name="selectModelo" >
        <option value="">Modelo</option>
        </select>
      </fieldset>
      <fieldset>
        <select id="selectModelo" name="selectModelo" >
        <option value="">Ano</option>
        </select>
      </fieldset>
      <fieldset>
        <select id="selectModelo" name="selectModelo" >
        <option value="">Tipo</option>
        </select>
      </fieldset>
      <fieldset>
        <select id="selectModelo" name="selectModelo" >
        <option value="">Condição</option>
        </select>
      </fieldset> 
      <fieldset>
        <select id="selectModelo" name="selectModelo" >
        <option value="">Categoria</option>
        </select>
      </fieldset>
    <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Pesquisar</button>
  </fieldset>
      <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
    </form>
  </div>


  <div class="container2">

    <form id="contact" action="" method="post"> 
    <h3> Resultados da Pesquisa : </h3>
      <h4>Foram encontrados 15 itens coincidindo com sua pesquisa. </h4>
      <hr>

  <div style="background-color: #f9f1f1;border: 1px solid #ddd; margin-bottom: 20px;">
      <fieldset>
        <img src="noimage.png" style="float:left;margin-right: 12px;"><p>
      <h3>Carro de Exemplo 1</h3>
      <h4>30.000 Km / Semi-Automático / 6L SUV / Deisel</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ Desconhecido</p>
      
    </fieldset>
</div>

<div style="background-color: #f9f1f1;border: 1px solid #ddd; margin-bottom: 20px;">
      <fieldset>
        <img src="noimage.png" style="float:left;margin-right: 12px;"><p>
      <h3>Carro de Exemplo 1</h3>
      <h4>30.000 Km / Semi-Automático / 6L SUV / Deisel</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ Desconhecido</p>
      
    </fieldset>
</div>

<div style="background-color: #f9f1f1;border: 1px solid #ddd; margin-bottom: 20px;">
      <fieldset>
        <img src="noimage.png" style="float:left;margin-right: 12px;"><p>
      <h3>Carro de Exemplo 1</h3>
      <h4>30.000 Km / Semi-Automático / 6L SUV / Deisel</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ Desconhecido</p>
      
    </fieldset>
</div>

<div style="background-color: #f9f1f1;border: 1px solid #ddd; margin-bottom: 20px;">
      <fieldset>
        <img src="noimage.png" style="float:left;margin-right: 12px;"><p>
      <h3>Carro de Exemplo 1</h3>
      <h4>30.000 Km / Semi-Automático / 6L SUV / Deisel</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tempus eleifend risus ut congue. Pellentesque nec lacus elit. Pellentesque convallis nisi ac augue pharetra eu tristique neque consequ Desconhecido</p>
      
    </fieldset>
</div>

    
      <p class="copyright">Designed by <a href="" target="_blank" title="Colorlib">Mojunior</a></p>
    </form>
  </div>
 

</body>
</html>
