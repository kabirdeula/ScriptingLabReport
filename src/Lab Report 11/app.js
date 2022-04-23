function calcGCD() {
    let a = document.getElementById("value1").value;
    let b = document.getElementById("value2").value;
    while (a != b) {
        if (a > b) {
            a = a - b;
        } else {
            b = b - a;
        }
    }
    let gcd = a;
    document.getElementById("output").value = gcd;
}