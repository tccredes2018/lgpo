//FUNÇÕES UTILIZADAS PARA ALTERAÇÃO DO "src" DO IFRAME DA DASHBOARD
  function AlteraPropriedadeUm(){
    var iframe = document.getElementById('grafico_iframe');
    iframe.src = 'Dashboard/dash-linhas.html';

  }
  function AlteraPropriedadeDois(){
    var iframe = document.getElementById('grafico_iframe');
    iframe.src = 'Dashboard/dash-bar.html';
  }
  function AlteraPropriedadeTres(){
    var iframe = document.getElementById('grafico_iframe');
    iframe.src = 'Dashboard/dash-doughnut.html';
  }

//SCRIPT DO MENU DE CONTEXTO -->
    window.addEventListener('contextmenu', function(e) {
        $('.rightclickmenu').css({
            "margin-left": e.clientX-110,
            "margin-top": e.clientY+5,
        }).show();
        e.preventDefault();
        window.addEventListener('click', function(){
            $('.rightclickmenu').hide();
        });
    });
