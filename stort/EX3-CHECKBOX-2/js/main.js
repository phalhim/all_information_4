const checkBoxs = document.querySelectorAll('.category');
for (const checkBox of checkBoxs) {
    checkBox.addEventListener('change', showValue)
    
}

function showValue() {
    let arrays = getValue(checkBoxs)
    const boxs = document.querySelectorAll('.product');
    for (const array of arrays) {
        let name = array.lastElementChild.textConten.split(':')[1];
        if (name.checked) {
            array.style.disply="block"
        } else {
            array.style.disply="none"
        }
    }
}

function getValue(elements) {
    let res = []
    for (const element of elements) {
        if (checkBox.checked) {
           res.push(element.value)
        }
    }
    return res
}