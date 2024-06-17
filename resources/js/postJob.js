const startDate = document.getElementById("startDate");
const endDate = document.getElementById("endDate");
const reqCerts = document.getElementById("requiredCerts");
const certInput = document.getElementById("certInput");
const jobPostForm = document.getElementById("jobPost");
const certHolderDiv = document.getElementById("certHolder");
startDate.min = new Date().toISOString().slice(0, 10);

startDate.addEventListener("change", (e) => {
    let minDate = new Date(startDate.value);
    minDate.setDate(minDate.getDate() + 1);
    endDate.min = minDate.toISOString().slice(0, 10);
});
certInput.addEventListener("keyup", (e) => {
    if (e.target.value.trim() !== "") {
        if (e.key === "Enter") {
            console.log(e.key);
            //     const des = ` <div class="px-2 py-1 text-white bg-orange-400  rounded-md flex me-1">
            //     <p class="text-sm">${e.target.value.trim()}</p>
            //     <div class="text-sm flex cursor-pointer items-center bg-orange-600 px-1 rounded-full ms-1"><i class="fa-solid fa-close delete"></i></div>
            // </div>`;
            certHolderDiv.appendChild(des);
            certHolderDiv.innerHTML += ` <div class="px-2 py-1 text-white bg-orange-400  rounded-md flex me-1">
                <p class="text-sm">${e.target.value.trim()}</p>
                <div class="text-sm flex cursor-pointer items-center bg-orange-600 px-1 rounded-full ms-1"><i class="fa-solid fa-close delete"></i></div>
            </div>`;
        }
    }
});
jobPostForm.addEventListener("submit", (e) => {
    e.preventDefault();
});
