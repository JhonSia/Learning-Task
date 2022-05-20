let menu = document.querySelector('.#menu-btn');
let header = document.querySelector('.header');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  header.classList.toggle('active');
}

let themToggler = document.querySelector('#theme-toggler');

themeToggler.onclick = () =>{
  themeToggler.classList.toggle('fa-sun');
  if(themeToggler.classList.toggle('fa-sun')
     document.body.classList.add('activate');
  }else{
  document.body.classList.remove('active');
}
