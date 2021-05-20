function ShowStaticsForLoanNew() {
    $.ajax({
        type: "POST",
        url: "/Home/ShowStaticsForLoanNew",
    }).done(function (data) {
        $('#divStaticsForLoanNew').html(data);
    });
}

function ShowStaticsForInviteLoanNew() {
    $.ajax({
        type: "POST",
        url: "/Home/ShowStaticsForInviteLoanNew",
    }).done(function (data) {
        $('#divStaticsForInviteLoanNew').html(data);
    });
}


function ShowListNewsInHomePage() {
    if (isMobile == 0) {
        $.ajax({
            type: "POST",
            url: "/Home/NewsInHomePage",
        }).done(function (data) {
            $('#topnewsinhomepage').html(data);
        });
    }

}



function GetTopNewsInListPage() {
    $.ajax({
        type: "POST",
        url: "/News/TopNewInList",
    }).done(function (data) {
        $('#topnewsinlistpage').html(data);
    });
}


function ShowListLoanLatest() {

    $.ajax({
        type: "POST",
        url: "/Home/ListLoanLatest",
    }).done(function (data) {
        $('#ListLoanLatest').replaceWith(data);
        // Đơn vay mới nhất
        var tm_table_swiper = new Swiper('.tm-table-swiper', {
            loop: true,
            slidesPerView: 7,
            direction: 'vertical',
            // centeredSlides: true,
            autoplay: 3500,
            autoplayDisableOnInteraction: false
        });
    });

}



function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
function guid() {
    function s4() {
        return Math.floor((1 + Math.random()) * 0x10000)
            .toString(16)
            .substring(1);
    }
    return s4() + s4() + '-' + s4() + '-' + s4() + '-' + s4() + '-' + s4() + s4() + s4();
}

//Luu cookie UrlSourceTima_V2
var utm_source = getParameterByName('utm_source');
var referrer = document.referrer;
if (referrer.indexOf(".google.") > -1)
    referrer = "google";
else
    referrer = document.referrer.split("/")[2];
if (utm_source.indexOf("dungbv") > -1)
    setCookie('UrlSourceTima_V2', utm_source, 30);

var aff = getParameterByName('aff');
var campaign = getParameterByName('campaign');


(function () {
    if (getCookie('UrlSourceTima_V2') == '') {
        if (utm_source == "") {
            setCookie('UrlSourceTima_V2', referrer, 30);
        } else {
            setCookie('UrlSourceTima_V2', utm_source, 30);
        }

    }
    if (getCookie('Tima_aff') == '') {
        if (aff != "") {
            setCookie('Tima_aff', aff, 30);
        }
    }

    if (campaign != "") {
        setCookie('Campaign', campaign, 30);
    }

    if (getCookie('Tima_aff_clk') == '') {
        if (aff != "") {
            setCookie('Tima_aff_clk', aff, 30);
            $.ajax({
                type: "POST",
                url: "https://aff.tima.vn/api/View/Count",
                contentType: "application/json",
                dataType: "json",
                data: JSON.stringify({
                    AffCode: aff,
                    IpAddress: tmIp
                }),
                success: function (response) {
                    console.log(response);
                },
                error: function (response) {
                    console.log(response);
                }
            });
        }
    }


})();
//break iframe
if (this != top) {
    top.document.location.href = this.document.location.href;
}


if (getCookie('tkld') == '') {
    setCookie('tkld', guid(), 18250);
}