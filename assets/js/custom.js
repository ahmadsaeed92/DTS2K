$(document).ready(function () {
// Comparison Table Start
    $('#myTable01').fixedHeaderTable({footer: false, cloneHeadToFoot: false, autoShow: true, autoResize: true});
    console.log("In True");
    var tr = $("#myTable01 tr").length - 1;
    var tc = $("#myTable01 tr td").length;
    var sc = (tc / tr) / 2;
    var rc = sc + 1;
    console.log(sc);
    if (!isNaN(sc)) {
        $(".fancyTable th:nth-child(" + rc + ")").css("border-top-left-radius", "12px");
        $(".fancyTable th:nth-child(" + sc + ")").css("border-top-right-radius", "12px");
        $(".fancyTable tbody tr td:nth-child(" + sc + ")").css("border-right", "solid 1px #2f3b4c");

        if (tr >= 14) {
            $(".fht-table-init").css("width", "101%");
            console.log("if");
        }
        else {
            $(".fht-table-init").css("");
            console.log("else");

        }
    }
// Comparison Table End
    $(".close-menu").click(function () {
        $(this).hide();
        $(".nav-btn").show();
        $(".main-nav").toggle("slide");
        $(".main-container").animate({"padding-left": '0'});

    });
    $(".nav-btn").click(function () {
        $(this).hide();
        $('.close-menu').show();
        //$(".content-container").removeAttr("style");	
        //$(".nav-back").show();
        $(".main-nav").toggle("slide");
        $(".main-container").animate({"padding-left": '276px'});
    });

    var url = $(location).attr('href');
    if (url.indexOf("yearly") >= 0) {
        console.log("if");
        $(".ui-datepicker-calendar").hide();
        setTimeout(hide_month_for_yearly, 2000);

    }
    else if (url.indexOf("monthly") >= 0) {
        console.log("elseif");
        $(".ui-datepicker-calendar").hide();
    }
    else {
        console.log("else");
        $(".ui-datepicker-calendar, .ui-datepicker-month").show();
    }
    $("#red_target_input, #green_target_input").bind('keyup mouseup', function () {
        $("#red_target_hidden").val($("#red_target_input").val().trim());
        $("#green_target_hidden").val($("#green_target_input").val().trim());
    });
    $(".start_end_form").on("submit", function (e) {
        e.preventDefault();
        var start_date = $(".datepicker_start").val().trim();
        var end_date = $(".datepicker_end").val().trim();
        var d1 = new Date(start_date);
        var d2 = new Date(end_date);
//        console.log(d1);
//        console.log(d2);
        if (start_date == "" || end_date == "" || isNaN(Date.parse(start_date)) || isNaN(Date.parse(end_date))
                || start_date.indexOf("/") == -1 || end_date.indexOf("/") == -1
                ) {
            alert("Please enter valid start date and end date");
            $(".submit_button").addClass("disabled");
            return false;
        }
        else if (d1 >= d2) {
            alert("Start Date should be less than End Date");
            $(".submit_button").addClass("disabled");
            return false;
        }
        else {
            $(".submit_button").removeClass("disabled");
            this.submit();
        }
    });
    $(".single_form").on("submit", function (e) {
        e.preventDefault();
        var start_date = $(".datepicker_start").val().trim();
        if (start_date == "" || start_date.indexOf("/") == -1 || isNaN(Date.parse(start_date))) {
            alert("Please enter valid date");
            $(".submit_button").addClass("disabled");
            return false;
        }
        else {
            $(".submit_button").removeClass("disabled");
            this.submit();
        }
    });
    $(".datepicker").keyup(function () {
        $(".submit_button").removeClass("disabled");
    });
});
// hour_pickup
$(function () {
    $("#hour_pickup").each(function () {
        $(this).datetimepicker({
            showOn: "button",
            maxDate: 0,
            buttonImage: base_url + "assets/images/calendaricon.png",
            buttonImageOnly: true,
            buttonText: "Select date",
            onSelect: function (date) {
                $(".submit_button").removeClass("disabled");
            }
        });
    });
});

// Daypart daypart_date_picker and // Daily day_pickup

$(function () {
    $("#daypart_date_picker, #day_pickup").each(function () {
        $(this).datepicker({
            showOn: "button",
            maxDate: 0,
            buttonImage: base_url + "assets/images/calendaricon.png",
            buttonImageOnly: true,
            buttonText: "Select date",
            onSelect: function (date) {
                $(".submit_button").removeClass("disabled");
            }
        });
    });
});

//Week Picker

$(function () {

    $("#week_start_date_picker").datepicker({
        showOn: "button",
        maxDate: 0,
        buttonImage: base_url + "assets/images/calendaricon.png",
        buttonImageOnly: true,
        buttonText: "Select date",
        onSelect: function (date) {
            $(".submit_button").removeClass("disabled");
            var dt2 = $('#week_end_date_picker');
            var startDate = $(this).datepicker('getDate');
            var minDate = $(this).datepicker('getDate');
            dt2.datepicker('setDate', minDate + 7);
            startDate.setDate(startDate.getDate() + 7);
            //sets week_end_date_picker maxDate to the last day of 7 days window
            dt2.datepicker('option', 'maxDate', startDate);
            dt2.datepicker('option', 'minDate', minDate);
        }
    });
    $('#week_end_date_picker').datepicker({
        showOn: "button",
        maxDate: 0,
        buttonImage: base_url + "assets/images/calendaricon.png",
        buttonImageOnly: true,
        buttonText: "Select date"
    });
});


// month picker month_pickup

$(function () {
    $('#month_pickup').datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        buttonImage: base_url + "assets/images/calendaricon.png",
        buttonImageOnly: true,
        buttonText: "Select date",
        showOn: "button",
        maxDate: 0,
        dateFormat: 'M yy',
        onSelect: function (date) {
            $(".submit_button").removeClass("disabled");
        }
    }).focus(function () {
        var thisCalendar = $(this);
        $('.ui-datepicker-calendar').detach();
        $('.ui-datepicker-close').click(function () {
            var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            thisCalendar.datepicker('setDate', new Date(year, month, 1));
        });
    });
});

// Year Picker

$(function () {
    $('#year_pickup').datepicker({
        changeYear: true,
        changeMonth: false,
        showButtonPanel: true,
        buttonImage: base_url + "assets/images/calendaricon.png",
        buttonImageOnly: true,
        buttonText: "Select date",
        showOn: "button",
        maxDate: 0,
        dateFormat: 'yy',
        stepMonths: 0,
        onSelect: function (date) {
            $(".submit_button").removeClass("disabled");
        }
    }).focus(function () {
        var thisCalendar = $(this);
        $(".ui-datepicker-month").hide();
        $(".ui-datepicker-next").hide();
        $(".ui-datepicker-prev").hide();
        $("button.ui-datepicker-current").hide();
        $('.ui-datepicker-calendar').detach();
        $('.ui-datepicker-close').click(function () {
            var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
            thisCalendar.datepicker('setDate', new Date(year, 0, 1));
        });
    });
});

// Custom Picker $ Cars Details

$(function () {

    $(".datepicker_start").datetimepicker({
        showOn: "button",
        maxDate: 0,
        buttonImage: base_url + "assets/images/calendaricon.png",
        buttonImageOnly: true,
        buttonText: "Select date",
        onSelect: function (date) {
            $(".submit_button").removeClass("disabled");
            var dt2 = $('.datepicker_end');
            var startDate = $(this).datetimepicker('getDate');
            var minDate = $(this).datetimepicker('getDate');
//            dt2.datepicker('setDate', minDate + 7);
            startDate.setDate(startDate.getDate() + 7);
            //sets week_end_date_picker maxDate to the last day of 7 days window
//            dt2.datepicker('option', 'maxDate', startDate);
            dt2.datepicker('option', 'minDate', minDate);
        }
    });
    $('.datepicker_end').datetimepicker({
        showOn: "button",
        maxDate: 0,
        buttonImage: base_url + "assets/images/calendaricon.png",
        buttonImageOnly: true,
        buttonText: "Select date",
        onSelect: function (date) {
            $(".submit_button").removeClass("disabled");
        }
    });
});

$(function () {
    $(".date_only_picker").each(function () {
        $(this).datepicker({
            showOn: "button",
            maxDate: 0,
            buttonImage: base_url + "assets/images/calendaricon.png",
            buttonImageOnly: true,
            buttonText: "Select date"
        });
    });
});

//$(function () {
//    $(".datepicker").each(function () {
//        $(this).datetimepicker({
//            showOn: "button",
//            maxDate: 0,
//            buttonImage: base_url + "assets/images/calendaricon.png",
//            buttonImageOnly: true,
//            buttonText: "Select date"
//        });
//    });
//});

function hide_month_for_yearly() {
    console.log($(".ui-datepicker-month").length);
    $(".ui-datepicker-month").hide();
}

