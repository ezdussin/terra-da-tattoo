$(document).ready(function () {
    document.getElementById("add-button").addEventListener('click', () => {
        document.getElementById("table-form").style.display = "table-row";
        document.getElementById("add-button").style.display = "none";
    })

    document.getElementById("remove-button").addEventListener('click', () => {
        document.getElementById("table-form").style.display = "none";
        document.getElementById("add-button").style.display = "block";
    })
}); 