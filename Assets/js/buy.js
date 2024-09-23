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

const sellItems = document.querySelectorAll('.sell-item');
const currentSellImage = document.querySelector('.current-sell-image');
const currentSellCoin = document.querySelectorAll('.current-sell-coin');
const currentBuyImage = document.querySelector('.current-buy-image');
const currentBuyCoin = document.querySelectorAll('.current-buy-coin');

sellItems.forEach(sellItem => {
    sellItem.onclick = (e) => {
        e.preventDefault();
        
        const coinCurrent = sellItem.querySelector('.coin-current').textContent;
        const coinCurrentPrice = sellItem.querySelector('.coin-current-price');
        const coinCurrentImage = sellItem.querySelector('.coin-current-image');

        if (sellItem.parentElement.classList.contains('cryptocurrencies-buy')) {
            currentBuyCoin.forEach(current => {
                current.textContent = coinCurrent;
            });
            currentBuyImage.src = coinCurrentImage.src;
        } else {
            currentSellCoin.forEach(current => {
                current.textContent = coinCurrent;
            });
            currentSellImage.src = coinCurrentImage.src;
        }
    }
});

const sellSend = document.querySelector('.sell-send');
// const sellWallet = document.querySelector('.sell-wallet');
const sellValue = document.querySelector('.sell-value');

sellSend.onclick = (e) => {
    e.preventDefault();

    // if (sellWallet.value.trim() == '') {
    //     Toastify({
    //         text: 'Wallet required',
    //         className: "success",
    //     }).showToast();
    // }
    if (sellValue.value.trim() == '' || sellValue.value.trim() == 0) {
        Toastify({
            text: 'Cannot sell 0 currency',
            className: "success",
        }).showToast();
        
    } else {
        Swal.fire({
            title: "Are you sure?",
            text: `You are selling ${sellValue.value.trim()} ${currentSellCoin[0].textContent.toUpperCase()}`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, sell!"
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire({
                title: "Sold",
                text: "Your sale has been processed.",
                icon: "success"
              });
            }
          });
    }
}


const tradeValueOne = document.querySelector('.select-one');
const tradeValueTwo = document.querySelector('.select-two');
const tradeInvert = document.querySelector('.trade-invert');
const tradeConvert = document.querySelector('.trade-convert');

tradeInvert.onclick = (e) => {
    e.preventDefault();
    console.log('Change');

    // Obtener los elementos de las monedas y sus imágenes
    const coinOne = tradeValueOne.querySelector('.select-current-coin');
    const imgOne = tradeValueOne.querySelector('.select-current-image');
    const coinTwo = tradeValueTwo.querySelector('.select-current-coin');
    const imgTwo = tradeValueTwo.querySelector('.select-current-image');

    // Guardar los valores actuales para el intercambio
    const tempCoin = coinOne.textContent;
    const tempImg = imgOne.src;

    // Intercambiar el contenido de las monedas
    coinOne.textContent = coinTwo.textContent;
    coinTwo.textContent = tempCoin;

    // Intercambiar las imágenes
    imgOne.src = imgTwo.src;
    imgTwo.src = tempImg;
}



tradeConvert.onclick = (e) => {
    e.preventDefault();
    Swal.fire({
        title: "Are you sure?",
        text: `You are convert`,
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, convert!"
      }).then((result) => {
        if (result.isConfirmed) {
          Swal.fire({
            title: "Converted",
            text: "Your convert has been processed.",
            icon: "success"
          });
        }
      });
}



var chart    = document.getElementById('chart').getContext('2d'),
    gradient = chart.createLinearGradient(0, 0, 0, 450);

gradient.addColorStop(0, 'rgba(255, 0,0, 0.5)');
gradient.addColorStop(0.5, 'rgba(255, 0, 0, 0.25)');
gradient.addColorStop(1, 'rgba(255, 0, 0, 0)');


// var data  = {
//     labels: [ 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun' ],
//     datasets: [{
// 			label: 'Custom Label Name',
// 			backgroundColor: '#0C122A',
// 			pointBackgroundColor: 'white',
//       pointBorderWidth: 3,
//       pointRadius: 1,
// 			borderWidth: 5,
// 			borderColor: '#1B6BFA',
// 			data: [50, 55, 80, 81, 54, 50]
//     }]
// };

var data = {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
    datasets: [{
        label: 'Custom Label Name',
        backgroundColor: '#0C122A',
        pointBackgroundColor: 'white',
        pointBorderWidth: 3,
        pointRadius: 1,
        borderWidth: 5,
        borderColor: '#1B6BFA',
        data: generateRandomData(10) // Generar 10 datos aleatorios
    }]
};

// Función para generar un arreglo de números aleatorios
function generateRandomData(length) {
    let randomData = [];
    for (let i = 0; i < length; i++) {
        randomData.push(Math.floor(Math.random() * 100)); // Genera números entre 0 y 99
    }
    return randomData;
}




var options = {
	responsive: true,
	maintainAspectRatio: true,
	animation: {
		easing: 'easeInOutQuad',
		duration: 520
	},
	scales: {
		xAxes: false,
		yAxes: false
	},
	elements: {
		line: {
			tension: 0
		}
	},
	legend: {
		display: false
	},
	point: {
		backgroundColor: 'white'
	},
	tooltips: {
		titleFontFamily: 'Open Sans',
		backgroundColor: 'rgba(0,0,0,0.3)',
		titleFontColor: 'white',
		caretSize: 5,
		cornerRadius: 2,
		xPadding: 10,
		yPadding: 10
	}
};


var chartInstance = new Chart(chart, {
    type: 'line',
    data: data,
		options: options
});
// Actualizar los datos cada segundo
setInterval(() => {
    chartInstance.data.datasets[0].data = generateRandomData(10); // Actualizar con nuevos datos aleatorios
    chartInstance.update();
}, 1000);


const selectsMain = document.querySelectorAll('.select-main');

if (selectsMain) {
    selectsMain.forEach(select => {
        console.log(select)
        const content = select.parentElement.querySelector('.trade-cryptos');
        const items = content.querySelectorAll('.trade-item');

        const currentImage = select.querySelector('.select-current-image');
        const currentCoin = select.querySelector('.select-current-coin');

        select.onclick = (e) => {
            e.preventDefault();

            if (content.classList.contains('hidden')) {
                content.classList.remove('hidden')
            } else {
                content.classList.add('hidden')
            }

        }

  

        items.forEach(item => {
            item.onclick = (e) => {
                e.preventDefault();

                currentImage.src = item.querySelector('img').src;
                currentCoin.textContent = item.children[1].textContent;

                if (content.classList.contains('hidden')) {
                    content.classList.remove('hidden')
                } else {
                    content.classList.add('hidden')
                }
            }
        });




    });
}

const triggerTrade = document.querySelectorAll('.content-trade button');
triggerTrade.forEach(btn => {
    btn.onclick = (e) => {
        e.preventDefault();

        const imageTradeSelectOne = document.querySelector('.select-one img');
        const currentCoinSelectOne = document.querySelector('.select-one .select-current-coin');

        const currentImage = btn.parentElement.parentElement.children[1].querySelector('img')
        const currentCoin = btn.parentElement.parentElement.children[1].children[2]

        imageTradeSelectOne.src = currentImage.src
        currentCoinSelectOne.textContent = currentCoin.textContent

        const color = btn.attributes.color.textContent
        console.log(chartInstance.data.datasets[0].borderColor)
        chartInstance.data.datasets[0].borderColor = color
        chartInstance.update();

    }

});