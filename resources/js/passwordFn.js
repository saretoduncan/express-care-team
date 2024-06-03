const parentDiv = document.querySelectorAll(".passwordParent");

const openedEye = `  <i class="fa-solid fa-eye  text-gray-600" id='passwordEye'></i>`;
const closedEye = `  <i class="fa-solid fa-eye-slash  text-gray-600" id='passwordEye'></i>`;

parentDiv.forEach((item) => {
    const passwordField = item.querySelector(".password");
    const eyeButton = item.querySelector(".passwordEyeBtn");

    let isViewPassword = false;

    const toggleViewPassword = () => {
        isViewPassword = !isViewPassword;
        if (isViewPassword) {
            passwordField.type = "text";
            eyeButton.innerHTML = closedEye;
        } else {
            passwordField.type = "password";
            eyeButton.innerHTML = openedEye;
        }
    };

    eyeButton.innerHTML = openedEye;
    eyeButton.addEventListener("click", (e) => {
        
        toggleViewPassword();
        e.preventDefault();
    });
});
