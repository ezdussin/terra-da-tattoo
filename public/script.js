const checkHash = () => {
    if (window.location.hash.substr(1) == "dashboard" || window.location.hash.substr(1) == "") {
        $("#dashboard").show();
        $("#users").hide();
        $("#providers").hide();
        $("#clients").hide();
        $("#products").hide();
        $('a[href="#dashboard"]')[0].id = "active";
        $('a[href="#users"]')[0].id = "";
        $('a[href="#providers"]')[0].id = "";
        $('a[href="#clients"]')[0].id = "";
        $('a[href="#products"]')[0].id = "";
    }
    else if (window.location.hash.substr(1) == "users") {
        $("#dashboard").hide();
        $("#users").show();
        $("#providers").hide();
        $("#clients").hide();
        $("#products").hide();
        $('a[href="#dashboard"]')[0].id = "";
        $('a[href="#users"]')[0].id = "active";
        $('a[href="#providers"]')[0].id = "";
        $('a[href="#clients"]')[0].id = "";
        $('a[href="#products"]')[0].id = "";
    }
    else if (window.location.hash.substr(1) == "providers") {
        $("#dashboard").hide();
        $("#users").hide();
        $("#providers").show();
        $("#clients").hide();
        $("#products").hide();
        $('a[href="#dashboard"]')[0].id = "";
        $('a[href="#users"]')[0].id = "";
        $('a[href="#providers"]')[0].id = "active";
        $('a[href="#clients"]')[0].id = "";
        $('a[href="#products"]')[0].id = "";
    }
    else if (window.location.hash.substr(1) == "clients") {
        $("#dashboard").hide();
        $("#users").hide();
        $("#providers").hide();
        $("#clients").show();
        $("#products").hide();
        $('a[href="#dashboard"]')[0].id = "";
        $('a[href="#users"]')[0].id = "";
        $('a[href="#providers"]')[0].id = "";
        $('a[href="#clients"]')[0].id = "active";
        $('a[href="#products"]')[0].id = "";
    }
    else if (window.location.hash.substr(1) == "products") {
        $("#dashboard").hide();
        $("#users").hide();
        $("#providers").hide();
        $("#clients").hide();
        $("#products").show();
        $('a[href="#dashboard"]')[0].id = "";
        $('a[href="#users"]')[0].id = "";
        $('a[href="#providers"]')[0].id = "";
        $('a[href="#clients"]')[0].id = "";
        $('a[href="#products"]')[0].id = "active";
    }
}

checkHash();

$(document).ready(function () {
    document.getElementsByTagName("html")[0].style.visibility = "visible";
    window.addEventListener('hashchange', () => {
        checkHash();
        document.getElementById("users-table-form").style.display = "none";
        document.getElementById("users-add-button").style.display = "block";

        document.getElementById("providers-table-form").style.display = "none";
        document.getElementById("providers-add-button").style.display = "block";

        document.getElementById("clients-table-form").style.display = "none";
        document.getElementById("clients-add-button").style.display = "block";

        document.getElementById("products-table-form").style.display = "none";
        document.getElementById("products-add-button").style.display = "block";
    }, false);

    //Users
    document.getElementById("users-add-button").addEventListener('click', () => {
        document.getElementById("users-table-form").style.display = "table-row";
        document.getElementById("users-add-button").style.display = "none";
    })

    document.getElementById("users-remove-button").addEventListener('click', () => {
        document.getElementById("users-table-form").style.display = "none";
        document.getElementById("users-add-button").style.display = "block";
    })

    //Providers
    document.getElementById("providers-add-button").addEventListener('click', () => {
        document.getElementById("providers-table-form").style.display = "table-row";
        document.getElementById("providers-add-button").style.display = "none";
    })

    document.getElementById("providers-remove-button").addEventListener('click', () => {
        document.getElementById("providers-table-form").style.display = "none";
        document.getElementById("providers-add-button").style.display = "block";
    })

    // Clients
    document.getElementById("clients-add-button").addEventListener('click', () => {
        document.getElementById("clients-table-form").style.display = "table-row";
        document.getElementById("clients-add-button").style.display = "none";
    })

    document.getElementById("clients-remove-button").addEventListener('click', () => {
        document.getElementById("clients-table-form").style.display = "none";
        document.getElementById("clients-add-button").style.display = "block";
    })

    // Products
    document.getElementById("products-add-button").addEventListener('click', () => {
        document.getElementById("products-table-form").style.display = "table-row";
        document.getElementById("products-add-button").style.display = "none";
    })

    document.getElementById("products-remove-button").addEventListener('click', () => {
        document.getElementById("products-table-form").style.display = "none";
        document.getElementById("products-add-button").style.display = "block";
    })
}); 