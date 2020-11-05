// Ecoute le chargement de la page
$(document).ready(function() {
    
    // LEARN MORE : JOB DESCRIPTION
    $(".learnMore").css('display', 'none');

    // ======================================

    // BTN APPLY : JOB DESCRIPTION
    $(".btn-apply").click(function() {
        $(".sectionApply").css("display", "initial");
    });

    $(".bi-x").click(function() {
        $(".sectionApply").css("display", "none");
    });

    $(".btnFormApply").click(function() {
        $(".sectionApply").css("display", "none");
    });

    // ======================================
    // ======================================
    // ======================================



    /* ================= */
    /*       ADMIN       */
    /* ================= */

    $(".btnReturn").css("display", "none");

    $(".btnReturn").click(function() {
        $(".sectionOfferAdmin").css("display", "none");
        $(".sectionUsersAdmin").css("display", "none");
        $(".sectionJobAppAdmin").css("display", "none");
        $(".sectionCompaniesAdmin").css("display", "none");
        $(".btnReturn").css("display", "none");
        $(".btnTable").css("display", "flex");
    });

    $(".sectionOfferAdmin").css("display", "none");

    $(".btnSectionOfferAdmin").click(function() {
        $(".sectionOfferAdmin").css("display", "flex");
        $(".btnReturn").css("display", "flex");
        $(".btnTable").css("display", "none");
    });

    $(".sectionUsersAdmin").css("display", "none");

    $(".btnSectionUsersAdmin").click(function() {
        $(".sectionUsersAdmin").css("display", "flex");
        $(".btnReturn").css("display", "flex");
        $(".btnTable").css("display", "none");
    });

    $(".sectionJobAppAdmin").css("display", "none");

    $(".btnSectionJobApp").click(function() {
        $(".sectionJobAppAdmin").css("display", "flex");
        $(".btnReturn").css("display", "flex");
        $(".btnTable").css("display", "none");
    });

    $(".sectionCompaniesAdmin").css("display", "none");

    $(".btnSectionCompaniesAdmin").click(function() {
        $(".sectionCompaniesAdmin").css("display", "flex");
        $(".btnReturn").css("display", "flex");
        $(".btnTable").css("display", "none");
    });

    function newFunction() {
        return "#findSearch";
    }

});
