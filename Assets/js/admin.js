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

