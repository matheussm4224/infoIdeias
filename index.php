<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>teste</title>
  </head>
  <body>
    <ul id="ul"></ul>

    <script>
    (function() {
        let data = fetch('/routers/routers.php?url=conteudo');
        let ul = document.querySelector('#ul');

        data.then(response => {
          return response.json();
        }).then(result => {
          formatDom(result);
        })



      function formatDom(array) {
        array.forEach(x => {
          if(x.ConteudoID > 0) {
            let conteudo = document.querySelector(`#id-${x.ConteudoID}`);
            setSubConteudo(conteudo, x.ID, x.Titulo);
          } else {
            setLi(x.ID, x.Titulo);
          }
        })
      }
      
      function setLi(id, name) {
        let li =  document.createElement('li');
        let text = document.createTextNode(name);
        li.id = `id-${id}`;
        li.appendChild(text);
        ul.appendChild(li);
      }

      function setSubConteudo(conteudo, id, titulo) {
        let ul =  document.createElement('ul');
        let li =  document.createElement('li');
        let text = document.createTextNode(titulo);
        ul.id = `${conteudo.id}:${id}`;
        li.id = `id-${id}`;
        li.appendChild(text);
        ul.appendChild(li);
        conteudo.appendChild(ul);
      }
    })()
    </script>
  </body>
</html>
