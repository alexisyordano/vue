      // Creamos nuestro objeto Vue principal
      var imc = new Vue({
          el: '#imc',
          data:
          {

            altura : '',
            peso : '',
            result : 0

          },

          methods:
          {
            calcular: function ()
            {
              this.alt = (this.altura)*(this.altura);
              this.result = this.peso / this.alt;
            }
          }

      });

