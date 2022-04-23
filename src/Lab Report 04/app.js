function checkCase() {
    let text = document.getElementById("text").value;
    let pattern = /^[A-Z]/;
    let result = pattern.test(text);
    if (result) {
        document.getElementById("output").innerHTML = "String's first character is uppercase";
    } else {
        document.getElementById("output").innerHTML = "String's first character is not uppercase";
    }
}