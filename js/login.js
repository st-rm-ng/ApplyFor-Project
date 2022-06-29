$("#comp").hide();
$(document).ready(function() {
    $(".btn_user").click(function() {
        $("#user").show();
        $("#comp").hide();
    });
    $(".btn_comp").click(function() {
        $("#user").hide();
        $("#comp").show();
    });
});