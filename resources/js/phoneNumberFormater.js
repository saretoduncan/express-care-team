const phoneNumberInputs = document.querySelectorAll(".phoneNumber");
phoneNumberInputs.forEach((item, index) => {
    item.addEventListener("input", () => {
        item.value = phoneNumber(item.value);
    });
});

const isLastCharNumeric = (value) => {
    const lastChar = value[value.length - 1];
    return !isNaN(lastChar);
};
let num = "";
const returnNumbers = (value) => {
    for (i of value) {
        console.log(i);
    }
};
const phoneNumber = (value) => {
    let numberValue = value.replace(/[^0-9]/g, "");
    const number =
        numberValue.length > 10 ? numberValue.match(/\d{10}/)[0] : numberValue;
    console.log(number);
    if (number.length < 3) {
        return number;
    } else if (number.length <= 6) {
        return number.replace(/(\d{3})(\d)/, "($1) $2");
    } else if (number.length > 6) {
        return number.replace(/(\d{3})(\d{3})(\d)/, "($1) $2-$3");
    }
};
