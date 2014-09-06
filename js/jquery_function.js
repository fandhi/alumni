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

//NAMBAH FIELD INPUT
    var MaxInputs = 3; //maximum input boxes allowed
    var InputsWrapper = $("#InputsWrapper"); //Input boxes wrapper ID
    var AddButton = $("#AddMoreFileBox"); //Add button ID

    var x = InputsWrapper.length; //initlal text box count
    var FieldCount = 1; //to keep track of text box added

    $(AddButton).click(function(e)  //on add input button click
    {
        if (x <= MaxInputs) //max input box allowed
        {
            FieldCount++; //text box added increment
            //add input box
            $(InputsWrapper).append('<div class="relative append-bottom-1"><input class="form-control" type="text" name="mytext[]" id="phone-no_' + FieldCount + '" value="" ' + FieldCount + '"/><a href="#" class="removeinput glyphicon glyphicon-minus-sign">&nbsp;</a></div>');
            x++; //text box increment
        }
        return false;
    });

    $("body").on("click", ".removeinput", function(e) { //user click on remove text
        if (x > 1) {
            $(this).parent('div').remove(); //remove text box
            x--; //decrement textbox
        }
        return false;
    });

//    CROPPING GAMBAR UNTUK GAMBAR PROFIL
    var croppicHeaderOptions = {
        uploadUrl: 'img_save_to_file.php',
        cropData: {
            "dummyData": 1,
            "dummyData2": "asdas"
        },
        cropUrl: 'img_crop_to_file.php',
        customUploadButtonId: 'cropContainerHeaderButton',
        modal: false,
        loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
        onBeforeImgUpload: function() {
            console.log('onBeforeImgUpload');
        },
        onAfterImgUpload: function() {
            console.log('onAfterImgUpload');
        },
        onImgDrag: function() {
            console.log('onImgDrag');
        },
        onImgZoom: function() {
            console.log('onImgZoom');
        },
        onBeforeImgCrop: function() {
            console.log('onBeforeImgCrop');
        },
        onAfterImgCrop: function() {
            console.log('onAfterImgCrop');
        }
    };
    var croppic = new Croppic('croppic', croppicHeaderOptions);
    var croppicContainerModalOptions = {
        uploadUrl: 'img_save_to_file.php',
        cropUrl: 'img_crop_to_file.php',
        modal: true,
        imgEyecandyOpacity: 0.4,
        loaderHtml: '<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> '
    };
    var cropContainerModal = new Croppic('cropContainerModal', croppicContainerModalOptions);
});//END DOCUMENT

$(
        function() {
            // Get a reference to the content div (into which we will load content).
            var jContent = $("#newsFeed");

            // Hook up link click events to load content.
            $("ul.menu_profile li a.ajax-menu").click(
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
