let menue = document.querySelector('#menu-bars'),
    navbar = document.querySelector('.navbar'),
    search = document.querySelector("#search-icon"),
    close = document.querySelector("#close"),
    searchForm = document.querySelector("#search-form");
menue.onclick = function() {
    this.classList.toggle("fa-times");
    navbar.classList.toggle("active");

}
window.onscroll = function() {
    menue.classList.remove("fa-times");
    navbar.classList.remove("active");



}
search.onclick = function() {
    searchForm.classList.toggle("active");
}
close.onclick = function() {
        searchForm.classList.toggle("active");
    }
    /* Swiper Bundle */
var swiper = new Swiper(".home-slider", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
        delay: 7500,
        disableOnInteraction: true,
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true
});