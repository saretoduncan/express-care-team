import axios from "axios";

const startDate = document.getElementById("startDate");
const endDate = document.getElementById("endDate");
const reqCerts = document.getElementById("requiredCerts");
const certInput = document.getElementById("certInput");
const jobPostForm = document.getElementById("jobPost");
const certHolderDiv = document.getElementById("certHolder");
const innerCertHolderDiv = document.getElementById("innerCertHolder");
const submitBtn = document.getElementById("submitForm");
const qualificationArr = [];
startDate.min = new Date().toISOString().slice(0, 10);

startDate.addEventListener("change", (e) => {
    let minDate = new Date(startDate.value);
    minDate.setDate(minDate.getDate() + 1);
    endDate.min = minDate.toISOString().slice(0, 10);
});

certInput.addEventListener("keyup", (e) => {
    if (e.target.value.trim() !== "") {
        if (e.key === "Enter") {
            const certs = document.createElement("div");
            certs.classList.add(
                "px-2",
                "py-1",
                "text-white",
                "bg-orange-400",
                "rounded-md",
                "flex",
                "me-1"
            );
            certs.innerHTML = `<p class="text-sm">${e.target.value.trim()}</p>
            <div class="text-sm flex cursor-pointer items-center bg-orange-600 px-1 rounded-full
            ms-1"><i class="fa-solid fa-close delete"></i>
            <input type="checkbox" name="certificates_needed[]" checked hidden value="${e.target.value.trim()}" />
          
            </div>`;
            innerCertHolderDiv.appendChild(certs);

            qualificationArr.push(e.target.value);
            certInput.innerText=""
        }
    }
});
jobPostForm.addEventListener("submit", (e) => {
    e.preventDefault();
});

submitBtn.addEventListener("click", (e) => {
    // const docsInput = document.createElement("input");
    // docsInput.type = "hidden";
    // docsInput.name = "certificates_needed";
    // docsInput.value = `[${qualificationArr}]`;
    // jobPostForm.appendChild(docsInput);
    
    const formData = new FormData(jobPostForm);
    formData.add
    formData.forEach((value, key) => {
        console.log([`${key}: ${value}`]);
    });
    jobPostForm.submit();
});
