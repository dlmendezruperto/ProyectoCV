const boton1 = document.getElementById('abc1');
const boton2 = document.getElementById('abc2');
const oculto1 = document.getElementById('oculto1');
const oculto2 = document.getElementById('oculto2');

boton1.addEventListener('click', () => {
    oculto1.style.display = 'block';
    boton1.style.display = 'none';
    boton2.style.display = 'block';
});

boton2.addEventListener('click', () => {
  oculto2.style.display = 'block';
  boton2.style.display = 'none';
});



