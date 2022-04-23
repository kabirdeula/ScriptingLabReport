function checkMail() {
    let input = document.getElementById("input").value;
    let pattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    let result = pattern.test(input);
    if (result) {
        document.getElementById("output").innerHTML = "It is valid email";
    } else {
        document.getElementById("output").innerHTML = "It is not valid email";
    }
}