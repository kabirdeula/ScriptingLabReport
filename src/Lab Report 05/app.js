function checkNaN() {
    let input = document.getElementById("input").value;
    let pattern = /^[A-Za-z0-9]+$/;
    let result = pattern.test(input);
    if (result) {
        document.getElementById("output").innerHTML = "It is Alpha Numeric";
    } else {
        document.getElementById("output").innerHTML = "It is not Alpha Numeric";
    }
}