function countWords() {
    let input = document.getElementById("input").value;
    input = input.replace(/(^\s*$)/gi, "");
    input = input.replace(/[ ]{2,}/gi, " ");
    input = input.replace(/\n /, "\n");

    document.getElementById("output").innerHTML = "Word Length: " + input.split(' ').length;
}