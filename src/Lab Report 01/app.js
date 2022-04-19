function getName() {
    let x = document.getElementById("form");
    for (let i in x) {
        if (x.elements[i].value != 'Submit') {
            console.log(x.elements[i].value);
        }
    }
    return false;
}