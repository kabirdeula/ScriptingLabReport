function calcVol() {
    let input = document.getElementById("input").value;
    input = Math.abs(input);
    let volume = (4 / 3) * Math.PI * Math.pow(input, 3);
    document.getElementById("output").value = volume.toFixed(2);
}