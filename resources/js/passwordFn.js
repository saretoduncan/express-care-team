const passwordInput = document.getElementById("password");
const viewPasswordBtn = document.getElementById("passwordEyeBtn");
let isViewPassword = false;
viewPasswordBtn.innerHTML = `  <i class="fa-solid fa-eye  text-gray-600" id='passwordEye'></i>`;
const toggleViewPassword = () => {
    if (isViewPassword) {
        passwordInput.type = "text";
        viewPasswordBtn.innerHTML = ` <i class="fa-solid fa-eye-slash  text-gray-600" id='passwordEye'></i>`;
        isViewPassword = false;
    } else {
        passwordInput.type = "password";
        viewPasswordBtn.innerHTML = `  <i class="fa-solid fa-eye  text-gray-600" id='passwordEye'></i>`;
        isViewPassword = true;
    }
};

viewPasswordBtn.addEventListener("click", (e) => {
    e.preventDefault()
    toggleViewPassword();
});
