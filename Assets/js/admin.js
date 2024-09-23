console.log('Admin JS')

const itemsExpandMore = document.querySelectorAll('.item-menu.expand-more');

itemsExpandMore.forEach(item => {
    const content = item.parentElement.querySelector('.content-item-menu');
    item.onclick = (e) => {
        e.preventDefault();
        const heightContent = content.attributes.heightContent.textContent;

        if (content.classList.contains('h-[0px]')) {
            content.classList.add(`h-[${heightContent}]`, 'visible')
            content.classList.remove('h-[0px]', 'invisible')
        } else {
            content.classList.add('h-[0px]', 'invisible')
            content.classList.remove(`h-[${heightContent}]`, 'visible')
        }
    }
});

const uploadContainer = document.getElementById('uploadContainer');
const uploadInput = document.getElementById('uploadData');
const dataPreview = document.querySelector('.data-upload');
if (dataPreview) {
    dataPreview.innerHTML = '';
    if (uploadContainer) {
        uploadContainer.addEventListener('click', () => {
            uploadInput.click();
        });
        
        uploadInput.addEventListener('change', (event) => {
            const file = event.target.files[0];
            if (file) {
                // alert(`Archivo seleccionado: ${file.name}`);
                
                dataPreview.innerHTML += `
                <div class="flex justify-between items-center p-3 border border-green-500 rounded-lg border-dashed">
                    <div class="flex items-center gap-2">
                        <i class="material-icons-outlined text-blue-500 text-md">upload_file</i>
                        <span class="text-white">${file.name}</span>
                    </div>
                    <i class="material-icons-outlined text-red-500 text-md cursor-pointer delete-file">delete</i>
                </div>`;
                    
                const deleteFile = document.querySelectorAll('.delete-file');
                deleteFile.forEach(item => {
                    item.addEventListener('click', () => {
                        if (confirm('Deleted file?')) {
                            item.parentElement.remove();
                            Toastify({
                                text: 'Deleted file!',
                              }).showToast();
                        }
                    });
                });
                
    
    
    
            }
        });
    }
}


// function updateFormattedOutput(e) {
//     const numberInput = e.value;
//     let value = numberInput.value // Eliminar puntos y cambiar comas por puntos
//     value = parseFloat(value);

//     if (!isNaN(value)) {
//         numberInput.value = formatCurrency(value);
//     } else {
//         numberInput.value = '';
//     }
// }

// function formatCurrency(value) {
//     // Formatear el número como moneda en formato $600.000,00
//     return '$' + value.toLocaleString('es-CO', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
// }

const confirmTransaction = document.querySelector('.confirm-add-transaction');
if (confirmTransaction) {
    confirmTransaction.onclick = (e) => {
        e.preventDefault();
    
        
        Swal.fire({
            title: "Are you sure?",
            text: `To make the transaction`,
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes!"
          }).then((result) => {
            if (result.isConfirmed) {
              Swal.fire({
                title: "Success",
                text: "Your transaction has been processed.",
                icon: "success"
              });
            }
          });
    }
}
const saveTime = document.querySelector('.save-time');
if (saveTime) {
    saveTime.onclick = (e) => {
        e.preventDefault();
    
        Toastify({
            text: 'Saved successfull'
        }).showToast()
       
    }
}

const listServers = document.querySelector('.list__servers');
const formAddServer = document.querySelector('form.add-server');

listServers.innerHTML = '';
submit({
    el: formAddServer,
    res: function (res) {
        let server = formAddServer.querySelector('input[name="server"]').value
        if (server == '') {
            Toastify({
                text: 'Required field server'
            }).showToast()
        } else {
            listServers.innerHTML += `
            <div class="p-3 rounded-lg border border-slate-300 text-black flex items-center justify-between mb-3">
                <span><span class="font-bold">Server:</span> ${ server }</span>
                <i class="material-icons-outlined cursor-pointer text-slate-300">content_copy</i>
            </div>`
        }
    }
});

const sliders = document.querySelectorAll('.slider')
sliders.forEach(slider => {
    const rangeInput = slider.querySelector('#minmax-range');
    const rangeValue = slider.querySelector('#range-value .number');
    
    rangeInput.addEventListener('input', function() {
        rangeValue.textContent = rangeInput.value;
    });
});


const addWhiteBlack = document.querySelector('.add-whiteblacklist');
const whiteListInput = document.querySelector('input[name="whitelist"]');
const blackListInput = document.querySelector('input[name="blacklist"]');
const whiteList = document.querySelector('.white-list');
const blackList = document.querySelector('.black-list');

whiteList.innerHTML = '<span class="text-gray-500 text-sm">Empty list</span>';
blackList.innerHTML = '<span class="text-gray-500 text-sm">Empty list</span>';

addWhiteBlack.onclick = (e) => {
    e.preventDefault();
    if (whiteListInput.value.trim() == '' && blackListInput.value.trim() == '') {
        Toastify({
            text: 'Required fields'
        }).showToast()
        return
    }

    if (whiteListInput.value.trim() != '') {
        whiteList.innerHTML += `
        <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
            <span class="ip">${whiteListInput.value.trim()}</span>
            <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
        </div>`;
    }

    if (blackListInput.value.trim() != '') {
        blackList.innerHTML += `
        <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
            <span class="ip">${blackListInput.value.trim()}</span>
            <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
        </div>`;
    }
    whiteListInput.value = ''
    blackListInput.value = ''
}

const addEndpoint = document.querySelector('.add-endpoint');
const endpointName = document.querySelector('input[name="name_endpoint"]');
const endpointURL = document.querySelector('input[name="url_endpoint"]');
const endpointCredencials = document.querySelector('input[name="credencials_endpoint"]');
const endpointList = document.querySelector('.enpoints_list');

endpointList.innerHTML = ''

addEndpoint.onclick = (e) => {
    e.preventDefault();

    if (endpointName.value.trim() == '' || endpointURL.value.trim() == '' || endpointCredencials.value.trim() == '') {
        Toastify({
            text: 'Required fields'
        }).showToast()
        return
    }

    endpointList.innerHTML += `
    <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2">
        <span class="text-md font-semibold block">Name: ${endpointName.value.trim()}</span>
        <span class="text-md font-semibold block mt-1">URL: ${endpointURL.value.trim()}</span>
        <span class="text-md font-semibold block mt-1">
            Credencials: ${endpointCredencials.value.trim()}
        </span>
    </div>`;

    endpointName.value = ``
    endpointURL.value = ``
    endpointCredencials.value = ``
}

const webhookInput = document.querySelector('input[name="url_webhook"]');
const webhookList = document.querySelector('.webhooks_list');
const addWebhook = document.querySelector('.add-webhook');
webhookList.innerHTML = ``

addWebhook.onclick = (e) => {
    e.preventDefault();

    if (webhookInput.value.trim() == '') {
        Toastify({
            text: 'Required field'
        }).showToast()
        return
    }

    webhookList.innerHTML += `
     <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2">
        <span class="text-md font-semibold block mt-1">URL: ${webhookInput.value.trim()}</span>
    </div>`

    webhookInput.value = ``

}

const addPortip = document.querySelector('.add-portip');
const port = document.querySelector('input[name="port"]');
const ip = document.querySelector('input[name="ip"]');
const listenPorts = document.querySelector('.listen-ports');
const listenIp = document.querySelector('.listen-ip');

listenPorts.innerHTML = '<span class="text-gray-500 text-sm">Empty list</span>';
listenIp.innerHTML = '<span class="text-gray-500 text-sm">Empty list</span>';

addPortip.onclick = (e) => {
    e.preventDefault();
    if (port.value.trim() == '' && ip.value.trim() == '') {
        Toastify({
            text: 'Required fields'
        }).showToast()
        return
    }

    if (port.value.trim() != '') {
        listenPorts.innerHTML += `
        <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
            <span class="ip">${port.value.trim()}</span>
            <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
        </div>`;
    }

    if (ip.value.trim() != '') {
        listenIp.innerHTML += `
        <div class="p-3 rounded-lg bg-gray-100 text-slate-600 mt-2 flex justify-between items-center">
            <span class="ip">${ip.value.trim()}</span>
            <i class="material-icons-outlined cursor-pointer text-sm text-red-400">delete</i>
        </div>`;
    }
    port.value = ''
    ip.value = ''
}
