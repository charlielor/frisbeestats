$(document).ready(function() {
    $("#newGameModal").on("shown.bs.modal", function() {
        $("#week").focus();
    });

    $("#creatingGameModal").on("hidden.bs.modal", function() {
        $("#createingGame").text("Creating a new game...");
    });

    $("#newGame").on("click", function() {
        $("#newGameModal").modal({
            backdrop: "static"
        });
    });

    $("#startNewGame").on("click", function() {
        $("#weekDiv").removeClass("has-error");
        $("#dayDiv").removeClass("has-error");
        $("#oTeamNameDiv").removeClass("has-error");

        if ($("#week").val().replace(/\s/g, "").length === 0) {
            $("#weekDiv").addClass("has-error");
            $("#week").focus();
            return;
        } else if ($("#day").val().replace(/\s/g, "").length === 0) {
            $("#dayDiv").addClass("has-error");
            $("#day").focus();
            return;
        } else if ($("#oTeamName").val().replace(/\s/g, "").length === 0) {
            $("#oTeamNameDiv").addClass("has-error");
            $("#oTeamName").focus();
            return;
        }

        $("#newGameModal").modal("hide");
        $("#creatingGameModal").modal("show");

        $.post("/games/new", {
            week: $("#week").val(),
            day: $("#day").val(),
            oTeamName: $("#oTeamName").val()
        })
            .done(function(results) {
                if (results["result"] === "error") {
                    $("#createingGame").text(results["message"]);
                }
            });
    });
});