/**
 * Created by Saffe on 05.10.2016.
 */
$(document).ready(function () {

    // start and stop times
    $('#start_stop').on("click", function () {
        if ($(this).hasClass("btn-success")) {
            $(this).removeClass("btn-success");
            $(this).addClass("btn-danger");
            $(this).html("Zeiterfassung stoppen");
        }
        else {
            $(this).removeClass("btn-danger");
            $(this).addClass("btn-success");
            $(this).html("Zeiterfassung starten");
        }
    });

    // initialize pie-chart

    // usual hours working per day: 40
    var hoursToWorkDaily = 8;
    var hoursWorkedToday = 5;
    var calc = 100 / (hoursToWorkDaily / hoursWorkedToday);
    $("#hours-worked-daily").circliful({
        animationStep: 5,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: calc,
        noPercentageSign: 1,
    });

    // usual hours working per week: 40
    var hoursToWorkWeekly = 40;
    var hoursWorkedThisWeek = 34;
    var calc2 = 100 / (hoursToWorkWeekly / hoursWorkedThisWeek);
    $("#hours-worked-weekly").circliful({
        animationStep: 5,
        foregroundBorderWidth: 15,
        backgroundBorderWidth: 15,
        percent: calc2,
        noPercentageSign: 1,
    });


});