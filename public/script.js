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
    window.addEventListener('hashchange', () =>  {
        checkHash();    
    }, false);
}); 