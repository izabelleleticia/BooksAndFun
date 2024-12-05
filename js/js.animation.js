new WOW().init();

document.addEventListener('DOMContentLoaded', function () {
    new WOW().init();
  
    $('.galeria').slick({
      slidesToShow: 7,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 768,
          settings: { slidesToShow: 4 }
        },
        {
          breakpoint: 480,
          settings: { slidesToShow: 2 }
        }
      ]
    });
  });

  $('.banner').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    fade: true,
    cssEase: 'linear'
  });
document.getElementById('modoDark').addEventListener('click', function(event){
    event.preventDefault(); //Prevenção do comportamento padrão do link
    document.body.classList.toggle('dark'); //Acrescentar a class dark
});

//Função para mostrar a especialidad correta

function mostrarEspecialidade(clicada) {
  //Oculta todas as especialidades
    const todasEspecialidades = document.querySelectorAll('.conteudoEspecialidade > div');
    todasEspecialidades.forEach(especialidade => {
      especialidade.style.display = 'none';
    });
  //Mostra a especialidade clicada
    const especialidadeAtiva = document.querySelector(`.${clicada}`);
    if (especialidadeAtiva) {
      especialidadeAtiva.style.display = 'block';

    }
}
//Função para gerenciar a classe "ativo"

function atualizarClasseAtiva(linkAtivo) {
  //Remove a classe "ativo de todos os links"
    const todosLinks = document.querySelectorAll('.boxEspecialidade a div');
    todosLinks.forEach(link => {
      link.classList.remove('ativo');

  });
  //Adiciona a classe "ativo" ao link
linkAtivo.classList.add('ativo');

}

//Adiciona eventos de clique para todos os links de especialidades
document.querySelectorAll('.boxEspecialidade a').forEach(link => {
    link.addEventListener('click', function(event) {
      event.preventDefault(); //Previne o comportamento padrão do link
      //Extrai o número da especialidade do id
      const especialidadeId = this.id.replace('especialidade', 'especialidade-');
      //Mostra a especialidade correta
      mostrarEspecialidade(especialidadeId);
      //Atualiza a classe "ativo" no link clicado
      const linkDiv = this.querySelector('div');
      atualizarClasseAtiva(linkDiv);



    });
});

document.querySelector(".abrirmenu").onclick = function(){
  document.documentElement.classList.add("menuAtivo");
}
document.querySelector(".fecharmenu").onclick = function(){
  document.documentElement.classList.remove("menuAtivo");
}
document.addEventListener("DOMContentLoaded", function(){
  window.addEventListener('scroll', function(){
    if (window.scrollY >= document.querySelector('.banner').offsetHeight){
       document.querySelector('header>div').style.background = '#00000090';
    } else {
      document.querySelector('header>div').style.background = 'linear-gradient(#000000FF, #00000000, #00000000'
      document.querySelector('header>div').style.padding = '10px'
    
    }
  });
});




