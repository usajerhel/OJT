const submit = document.querySelector('#submit');
const modalContent = document.querySelector("#feedback .modal-body");

const email = document.querySelector('#email');
const name = document.querySelector('#name');
const comment= document.querySelector('#comment');

submit.addEventListener('click', () => {
   modalContent.innerHTML = `<p>Email: ${email.value}</p> <p>Name: ${name.value}</p> <p>Content:${content.value}</p>`;
});
