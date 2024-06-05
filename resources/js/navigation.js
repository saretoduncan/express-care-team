export const displayColors = () => console.log("navigation js is being logged");

const menuBar = document.getElementById("menuBar");
const sidebar = document.getElementById("sideNav");
const profileBtn = document.getElementById('profileBtn')
const profileDropDown = document.getElementById('profileDropDown')
let sideOpen = false;
menuBar.addEventListener("click", (ev) => {
    sideOpen = !sideOpen;
    if (sideOpen) {
        sidebar.classList.remove("translate-y-[-150%]");
        sidebar.classList.add("translate-y-[0%]");
    } else {
        sidebar.classList.remove("translate-y-[0%]");
        sidebar.classList.add("translate-y-[-150%]");
    }
});
profileBtn.addEventListener('click',()=>{
    profileDropDown.classList.toggle('max-h-0')
})
