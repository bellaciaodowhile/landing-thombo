console.log('Landing Page')
const overlay = document.querySelector('.overlay');
const sidebar = document.querySelector('.sidebar');
const triggerSidebar = document.querySelector('.trigger-sidebar');
const closeSidebar = document.querySelector('.close-sidebar');
triggerSidebar.onclick = (e) => {
    sidebar.classList.remove('hidden');
    console.log('Open sidebar')
}
[overlay, closeSidebar].map(item => {
    item.onclick = (e) => {
        console.log('Close sidebar')
        sidebar.classList.add('hidden');
    }
})