function checkNum() {
    for (var x = 0; x <= 15; x++) {
        if (x === 0) {
            document.getElementsByClassName("even").innerHTML = x + "is even.\n";
            // document.getElementById("even").innerHTML = x + " is even.\n";
        } else if (x % 2 === 0) {
            document.getElementById("even").innerHTML = x + " is even.\n";
        } else {
            document.getElementsByClassName("odd").innerHTML = x + " is odd.\n";
            // document.getElementById("odd").innerHTML = x + " is odd.\n";
        }
    }
}