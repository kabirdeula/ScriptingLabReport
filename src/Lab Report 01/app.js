function getName() {
    let x = document.getElementById("fName").value;
    let y = document.getElementById("lName").value;

    document.getElementById("output").innerHTML = "Name: " + x + ' ' + y;
    return false
}