console.log('Buy JS')

const realtimeCards = document.querySelectorAll('.realtime-card');
realtimeCards.forEach(item => {
    const realtimeInput = item.querySelector('.realtime-input');
    realtimeInput.onkeyup = (e) => {
        const value = e.target.value;
        const priceCoin = 1.02;
        const fee = 0.1;
        const elFee = item.querySelector('.fee');
        const elTotalPrice = item.querySelector('.total-price');
    
        const currentFee = ((value * fee) / 100);
        const currentTotal = (value * priceCoin);
    
        elFee.textContent = currentFee.toFixed(2);
        elTotalPrice.textContent = currentTotal.toFixed(2);
    }
    
})

const addNewCard = document.querySelector('.add-new-card');

addNewCard.onclick = (e) => {
    e.preventDefault();
    Toastify({
        text: 'Pop-up | Add new card!',
        className: "success",
    }).showToast();
}
// const expiration = document.querySelector('.expiration');
// expiration.oninput = (e) => validExpiration(e);

function validExpiration(event) {
    // Obtener el valor actual del input
    let valor = event.target.value;

    // Reemplazar cualquier carácter que no sea un número o una barra
    valor = valor.replace(/[^0-9\/]/g, '');

    // Limitar a 5 caracteres y agregar la barra en la posición correcta
    if (valor.length > 5) {
        valor = valor.slice(0, 5);
    }

    // Asegurarse de que la barra esté en la posición correcta
    if (valor.length >= 3) {
        valor = valor.slice(0, 2) + '/' + valor.slice(2);
    }

    // Actualizar el valor del input
    event.target.value = valor;
}

const nextAddNewCard = document.querySelector('.next-add-newcard');
const previousAddNewCard = document.querySelector('.previous-add-newcard');
const confirmAddNewCard = document.querySelector('.confirm-add-newcard');
const step1 = document.querySelector('.step-1');
const step2 = document.querySelector('.step-2');
const breadcumbCardNumber = document.querySelector('.breadcumb-cardnumber');
const successAddCard = document.querySelector('.add-card-success');

nextAddNewCard.onclick = (e) => {
    e.preventDefault();
    step1.classList.add('hidden');
    step2.classList.remove('hidden');
    breadcumbCardNumber.children[0].classList.remove('active-breadcumb')
    breadcumbCardNumber.children[1].classList.add('active-breadcumb')
}

previousAddNewCard.onclick = (e) => {
    e.preventDefault();
    step1.classList.remove('hidden');
    step2.classList.add('hidden');
    breadcumbCardNumber.children[0].classList.add('active-breadcumb')
    breadcumbCardNumber.children[1].classList.remove('active-breadcumb')
}
confirmAddNewCard.onclick = (e) => {
    e.preventDefault();
    console.log('Confirmado')
    successAddCard.classList.remove('hidden');
    setTimeout(() => {
        successAddCard.classList.add('hidden');
        step1.classList.remove('hidden');
        step2.classList.add('hidden');
        breadcumbCardNumber.children[0].classList.add('active-breadcumb')
        breadcumbCardNumber.children[1].classList.remove('active-breadcumb')
    }, 2000);
}

