const mobileMenuBtn = document.querySelector('#mobile-menu');
const sidebar = document.querySelector('.sidebar');
const cerrarMenuBtn = document.querySelector('#cerrar-menu');

if(mobileMenuBtn){
    mobileMenuBtn.addEventListener('click', () => {
        sidebar.classList.add('mostrar');
    });
}

if(cerrarMenuBtn){
    cerrarMenuBtn.addEventListener('click', () => {
        sidebar.classList.add('ocultar');
        setTimeout(() => {
            sidebar.classList.remove('mostrar');
            sidebar.classList.remove('ocultar');
        }, 500);
    });
}

//Elimina clase mostrar desde tamaño tablet

window.addEventListener('resize', () => {
    const anchoPantalla = document.body.clientWidth;
    if(anchoPantalla >= 768){
        sidebar.classList.remove('mostrar');
    }
});
