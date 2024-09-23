console.log('History JS')

const filtersHistory = document.querySelectorAll('.filter-history');

filtersHistory.forEach(filter => {
    filter.onclick = (e) => {
        e.preventDefault();
        [...filtersHistory].map(x => x.classList.remove('bg-blue-500'))
        filter.classList.add('bg-blue-500');
    }
});