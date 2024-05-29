const parentDiv = document.querySelectorAll(".passwordParent");

const openedEye = `  <i class="fa-solid fa-eye  text-gray-600" id='passwordEye'></i>`;
const closedEye = `  <i class="fa-solid fa-eye-slash  text-gray-600" id='passwordEye'></i>`;
parentDiv.forEach((item, index) => {
    item.querySelector(".passwordEyeBtn").innerHTML = openedEye;
    let isViewPassword = false;
    const toggleViewPassword = () => {
        if (isViewPassword) {
            item.querySelector(".password").type = "text";
            item.querySelector(".passwordEyeBtn").innerHTML = closedEye;
            isViewPassword = false;
        } else {
            item.querySelector(".password").type = "password";
            item.querySelector(".passwordEyeBtn").innerHTML = openedEye;
            isViewPassword = true;
        }
    };
    item.querySelector(".passwordEyeBtn").addEventListener("click", (e) => {
        e.preventDefault();

        toggleViewPassword();
    });
});