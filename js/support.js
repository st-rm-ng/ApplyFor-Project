$(".p").slideUp();

$("h2").click(function() {
    $(this).parent().find(".p").slideUp();
    $(this).next().not(":visible").slideDown();
});