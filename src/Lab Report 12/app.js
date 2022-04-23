function todayDate() {
    let today = new Date();
    let day = today.getDate();
    let month = today.getMonth() + 1;
    let year = today.getFullYear();

    if (day < 10) day = '0' + day;
    if (month < 10) month = '0' + month;

    document.getElementById("year").value = year;
    document.getElementById("month").value = month;
    document.getElementById("day").value = day;
}