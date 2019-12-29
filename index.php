<!DOCTYPE html>
<html>
<head>
	<title>app</title>
</head>
<body>
   
    <style type="text/css">

      .response
      {
        position: relative;
        width: 30%;
        padding: 3px;
        height: auto;
        top: 200px;
        border: 2px solid #fff;
        margin: 0 auto;
        border-radius: 10px 10px 10px 10px;
        box-shadow: 10px 20px 20px 20px #00f3;


      }

      body
      {
        margin: 0;
        background-color: #eee;
      }

      input
      {
        position: relative;
        padding: 2px;
        max-width: 160px; 
      }

      button
      {
        position: relative;
        padding: 3px;
        background-color: blue;
        color: #fff;
      }

      .result
      {
        position: relative;
        font-size: 24px;
        font-weight: bold;
        top: 5px;
      }

    
      
    </style>
  <div class="response">
    <div id="imc" align="center">
        <h1>hola</h1>
        <input  v-model.number="altura" type="tex" id="altura" placeholder="su altura">
        <br/><br/>
        
        <input  v-model.number="peso" type="tex" id="peso" placeholder="Peso">
        <br/><br/>
        <button v-on:click="calcular">Calcular</button>
      <div class="result">
        {{ result }}
      </div>

    </div>
  </div>

</body>
<script src="vue/vue.js"></script>
<script src="vue/app.js"></script>
</html>