$(document).ready(function() {
    //TAB
    //Get the height of the first item
    $('#mask').css({'height': $('#panel-1').height()});

    //Calculate the total width - sum of all sub-panels width
    //Width is generated according to the width of #mask * total of sub-panels
    $('#panel').width(parseInt($('#mask').width() * $('#panel div').length));

    //Set the sub-panel width according to the #mask width (width of #mask and sub-panel must be same)
    $('#panel > div').width($('#mask').width());

    //Get all the links with rel as panel
    $('a[rel=panel]').click(function() {

        //Get the height of the sub-panel
        var panelheight = $($(this).attr('href')).height();

        //Set class for the selected item
        $('a[rel=panel]').removeClass('selected');
        $(this).addClass('selected');

        //Resize the height
        $('#mask').animate({'height': panelheight}, {queue: false, duration: 500});

        //Scroll to the correct panel, the panel id is grabbed from the href attribute of the anchor
        $('#mask').scrollTo($(this).attr('href'), 800);

        //Discard the link default behavior
        return false;
    });
//    ajax tab
    //var countries=new ddajaxtabs("countrytabs", "countrydivcontainer")
    //countries.setpersist(true)
    //countries.setselectedClassTarget("link") //"link" or "linkparent"
    //countries.init()

//input checkbox inderteminate
document.getElementsByClassName(".indeterminate").indeterminate = true;

});//END DOCUMENT

$(
        function() {
            // Get a reference to the content div (into which we will load content).
            var jContent = $("#newsFeed");

            // Hook up link click events to load content.
            $("ul.menu_profile li a").click(
                    function(objEvent) {
                        var jLink = $(this);

                        // Clear status list.
                        //$("#ajax-status").empty();

                        // Launch AJAX request.
                        $.ajax(
                                {
                                    // The link we are accessing.
                                    url: jLink.attr("href"),
                                    // The type of request.
                                    type: "get",
                                    // The type of data that is getting returned.
                                    dataType: "html",
                                    error: function() {
                                        //ShowStatus("AJAX - error()");

                                        // Load the content in to the page.
                                        jContent.html("<p>Page Not Found!!</p>");
                                    },
                                    /*beforeSend: function() {
                                        ShowStatus("AJAX - beforeSend()");
                                    },
                                    complete: function() {
                                        ShowStatus("AJAX - complete()");
                                    },*/
                                    success: function(strData) {
                                        //ShowStatus("AJAX - success()");

                                        // Load the content in to the page.
                                        jContent.html(strData);
                                    }
                                }
                        );

                        // Prevent default click.
                        return(false);
                    }
            );

        }
);


// I show the status on the screen.
function ShowStatus(strStatus) {
    var jStatusList = $("#newsFeed");

    // Prepend the paragraph.
    jStatusList.prepend("<p>" + strStatus + "</p>");
}
