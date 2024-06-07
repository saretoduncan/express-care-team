const logoutBtn = document.getElementById("logoutInput");
const logoutForm = document.getElementById("logoutForm");
logoutBtn.addEventListener("click", (e) => {
    e.preventDefault();
    window.history.replaceState(null, null, "/login");
    logoutForm.submit();
});
