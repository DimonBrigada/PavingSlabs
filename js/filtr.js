const smena = document.querySelectorAll(".smena");
const tabsItems = document.querySelectorAll(".services__element");

serv.forEach(function (item) {
    item.addEventListener("click", function(){
        let servBtn = item;
        let tabId = servBtn.getAttribute("data-tab");
        let servTab = document.querySelector(tabId);

        serv.forEach(function(item){
            item.classList.remove("services-active");
        })

        tabsItems.forEach(function(item){
            item.classList.remove("actv");
        })

        servBtn.classList.add("services-active");
        servTab.classList.add("actv");
    });
});

const actt = document.querySelectorAll(".categories__item");

actt.forEach(function (item) {
    item.addEventListener("click", function(){
        let curBtn = item;

        actt.forEach(function(item){
            item.classList.remove("active-item");
        })

        curBtn.classList.add("active-item");
    });
});



const filterBox = document.querySelectorAll('.products__box');

document.querySelector('.categories').addEventListener('click', (event) => {

    if (event.target.tagName !== 'LI') return false;
    let filterClass = event.target.dataset['f'];

    filterBox.forEach(elem => {
        elem.classList.remove('hide');
        if (!elem.classList.contains(filterClass) && filterClass !== 'all') {
            elem.classList.add('hide');
        }
    });

});