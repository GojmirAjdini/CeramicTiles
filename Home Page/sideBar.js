function showSideBar(event){

    event.preventDefault();

    const sidebar = document.querySelector('.sideBar')

    sidebar.style.display = 'flex';

}

function closeSideBar(event){

    event.preventDefault();

    const sideBar = document.querySelector('.sideBar');

    sideBar.style.display = 'none';
     
}