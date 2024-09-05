console.log('Buy JS')
const realtimeInput = document.querySelector('.realtime-input');
realtimeInput.onkeyup = (e) => {
    const value = e.target.value;
    const priceCoin = 1.02;
    const fee = 0.1;
    const elFee = document.querySelector('.fee');
    const elTotalPrice = document.querySelector('.total-price');

    const currentFee = ((value * fee) / 100);
    const currentTotal = (value * priceCoin);

    elFee.textContent = currentFee.toFixed(2);
    elTotalPrice.textContent = currentTotal.toFixed(2);
    console.log(value)
}
const addNewCard = document.querySelector('.add-new-card');

addNewCard.onclick = (e) => {
    e.preventDefault();
    Toastify({
        text: 'Pop-up | Add new card!',
        className: "success",
    }).showToast();
}