const openModal = document.querySelector('.btn-agregar');
const modal = document.querySelector('.modal');
const closeModal = document.querySelector('.cancel');

openModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.add('modal--show');
});

closeModal.addEventListener('click', (e)=>{
    e.preventDefault();
    modal.classList.remove('modal--show');
});