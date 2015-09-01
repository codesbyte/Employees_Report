<?php
include 'include/global.inc.php';
if (empty($_SESSION['UserID'])) {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Employees_Report</title>

        <!-- Bootstrap core CSS -->

        <link href="<?php echo $con->getBaseUrl() . "assets/css/bootstrap.min.css"; ?>" rel="stylesheet">

        <link href="<?php echo $con->getBaseUrl() . "assets/fonts/css/font-awesome.min.css"; ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/animate.min.css"; ?>" rel="stylesheet">

        <!-- Custom styling plus plugins -->
        <link href="<?php echo $con->getBaseUrl() . "assets/css/custom.css"; ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/icheck/flat/green.css"; ?>" rel="stylesheet">
        <!-- editor -->
        <link href="http://netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/editor/external/google-code-prettify/prettify.css"; ?>" rel="stylesheet">
        <link href="<?php echo $con->getBaseUrl() . "assets/css/editor/index.css"; ?>" rel="stylesheet">
        <!-- select2 -->
        <link href="<?php echo $con->getBaseUrl() . "assets/css/select/select2.min.css"; ?>" rel="stylesheet">
        <!-- switchery -->
        <link rel="stylesheet" href="<?php echo $con->getBaseUrl() . "assets/css/switchery/switchery.min.css"; ?>" />

        <!-- time pick test code start -->
        <link rel="stylesheet" type="text/css" href="<?php echo $con->getBaseUrl()."time_pick/dist/bootstrap-clockpicker.min.css" ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo $con->getBaseUrl()."time_pick/assets/css/github.min.css" ?>">
        <!-- time pick test code close -->

        <script src="<?php echo $con->getBaseUrl() . "assets/js/jquery.min.js"; ?>"></script>

    </head>
    <?php include 'include/header.php'; ?>
    <?php include 'include/side_bar.php'; ?>
    <?php include 'include/top_navigation.php'; ?>


<!-- page content -->
<div class="right_col" role="main">
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="dashboard_graph">

                <div class="row x_title">
                    <div class="col-md-6">
                        <!--<h3>Network Activities <small>Graph title sub-title</small></h3>-->
                        <h3>Send Task</h3>
                    </div>
                    <!--<div class="col-md-6">
                        <div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                            <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                            <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                        </div>
                    </div>-->
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Today Task</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <br />
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">

                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Task Date <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input id="birthday" class="date-picker form-control col-md-7 col-xs-12" required="required" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">In Time <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="single-input_1" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Out Time <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <input type="text" id="single-input_2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Description <span class="required">*</span>
                            </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="20" data-parsley-maxlength="100" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.." data-parsley-validation-threshold="10"></textarea>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" class="btn btn-primary">Cancel</button>
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#birthday').daterangepicker({
                    singleDatePicker: true,
                    calender_style: "picker_4"
                }, function (start, end, label) {
                    console.log(start.toISOString(), end.toISOString(), label);
                });
            });
        </script>
    </div>
    <br />

    <!-- footer content -->
    <?php include 'include/footer.php'; ?>
    <!-- /footer content -->
</div>
<!-- /page content -->


</div>

</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
</div>



<script src="<?php echo $con->getBaseUrl() . "assets/js/bootstrap.min.js" ?>"></script>
<!-- chart js -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/chartjs/chart.min.js"; ?>"></script>
<!-- bootstrap progress js -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/progressbar/bootstrap-progressbar.min.js"; ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/nicescroll/jquery.nicescroll.min.js"; ?>"></script>
<!-- icheck -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/icheck/icheck.min.js"; ?>"></script>
<!-- tags -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/tags/jquery.tagsinput.min.js"; ?>"></script>
<!-- switchery -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/switchery/switchery.min.js"; ?>"></script>
<!-- daterangepicker -->
<script type="text/javascript" src="<?php echo $con->getBaseUrl() . "assets/js/moment.min2.js"; ?>"></script>
<script type="text/javascript" src="<?php echo $con->getBaseUrl() . "assets/js/datepicker/daterangepicker.js"; ?>"></script>
<!-- richtext editor -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/editor/bootstrap-wysiwyg.js"; ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/editor/external/jquery.hotkeys.js"; ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/editor/external/google-code-prettify/prettify.js"; ?>"></script>
<!-- select2 -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/select/select2.full.js"; ?>"></script>
<!-- form validation -->
<script type="text/javascript" src="<?php echo $con->getBaseUrl() . "assets/js/parsley/parsley.min.js"; ?>"></script>
<!-- textarea resize -->
<script src="<?php echo $con->getBaseUrl() . "assets/js/textarea/autosize.min.js"; ?>"></script>
<script>
            autosize($('.resizable_textarea'));
</script>
<!-- Autocomplete -->
<script type="text/javascript" src="<?php echo $con->getBaseUrl() . "assets/js/autocomplete/countries.js"; ?>"></script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/autocomplete/jquery.autocomplete.js"; ?>"></script>
<script type="text/javascript">
            $(function () {
                'use strict';
                var countriesArray = $.map(countries, function (value, key) {
                    return {
                        value: value,
                        data: key
                    };
                });
                // Initialize autocomplete with custom appendTo:
                $('#autocomplete-custom-append').autocomplete({
                    lookup: countriesArray,
                    appendTo: '#autocomplete-container'
                });
            });
</script>
<script src="<?php echo $con->getBaseUrl() . "assets/js/custom.js"; ?>"></script>


<!-- select2 -->
<script>
            $(document).ready(function () {
                $(".select2_single").select2({
                    placeholder: "Select a state",
                    allowClear: true
                });
                $(".select2_group").select2({});
                $(".select2_multiple").select2({
                    maximumSelectionLength: 4,
                    placeholder: "With Max Selection limit 4",
                    allowClear: true
                });
            });
</script>
<!-- /select2 -->
<!-- input tags -->
<script>
    function onAddTag(tag) {
        alert("Added a tag: " + tag);
    }

    function onRemoveTag(tag) {
        alert("Removed a tag: " + tag);
    }

    function onChangeTag(input, tag) {
        alert("Changed a tag: " + tag);
    }

    $(function () {
        $('#tags_1').tagsInput({
            width: 'auto'
        });
    });
</script>
<!-- /input tags -->
<!-- form validation -->
<script type="text/javascript">
    $(document).ready(function () {
        $.listen('parsley:field:validate', function () {
            validateFront();
        });
        $('#demo-form .btn').on('click', function () {
            $('#demo-form').parsley().validate();
            validateFront();
        });
        var validateFront = function () {
            if (true === $('#demo-form').parsley().isValid()) {
                $('.bs-callout-info').removeClass('hidden');
                $('.bs-callout-warning').addClass('hidden');
            } else {
                $('.bs-callout-info').addClass('hidden');
                $('.bs-callout-warning').removeClass('hidden');
            }
        };
    });

    $(document).ready(function () {
        $.listen('parsley:field:validate', function () {
            validateFront();
        });
        $('#demo-form2 .btn').on('click', function () {
            $('#demo-form2').parsley().validate();
            validateFront();
        });
        var validateFront = function () {
            if (true === $('#demo-form2').parsley().isValid()) {
                $('.bs-callout-info').removeClass('hidden');
                $('.bs-callout-warning').addClass('hidden');
            } else {
                $('.bs-callout-info').addClass('hidden');
                $('.bs-callout-warning').removeClass('hidden');
            }
        };
    });
    try {
        hljs.initHighlightingOnLoad();
    } catch (err) {
    }
</script>
<!-- /form validation -->
<!-- editor -->
<script>
    $(document).ready(function () {
        $('.xcxc').click(function () {
            $('#descr').val($('#editor').html());
        });
    });

    $(function () {
        function initToolbarBootstrapBindings() {
            var fonts = ['Serif', 'Sans', 'Arial', 'Arial Black', 'Courier',
                'Courier New', 'Comic Sans MS', 'Helvetica', 'Impact', 'Lucida Grande', 'Lucida Sans', 'Tahoma', 'Times',
                'Times New Roman', 'Verdana'],
                    fontTarget = $('[title=Font]').siblings('.dropdown-menu');
            $.each(fonts, function (idx, fontName) {
                fontTarget.append($('<li><a data-edit="fontName ' + fontName + '" style="font-family:\'' + fontName + '\'">' + fontName + '</a></li>'));
            });
            $('a[title]').tooltip({
                container: 'body'
            });
            $('.dropdown-menu input').click(function () {
                return false;
            })
                    .change(function () {
                        $(this).parent('.dropdown-menu').siblings('.dropdown-toggle').dropdown('toggle');
                    })
                    .keydown('esc', function () {
                        this.value = '';
                        $(this).change();
                    });

            $('[data-role=magic-overlay]').each(function () {
                var overlay = $(this),
                        target = $(overlay.data('target'));
                overlay.css('opacity', 0).css('position', 'absolute').offset(target.offset()).width(target.outerWidth()).height(target.outerHeight());
            });
            if ("onwebkitspeechchange" in document.createElement("input")) {
                var editorOffset = $('#editor').offset();
                $('#voiceBtn').css('position', 'absolute').offset({
                    top: editorOffset.top,
                    left: editorOffset.left + $('#editor').innerWidth() - 35
                });
            } else {
                $('#voiceBtn').hide();
            }
        }
        ;

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            } else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                    '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }
        ;
        initToolbarBootstrapBindings();
        $('#editor').wysiwyg({
            fileUploadError: showErrorAlert
        });
        window.prettyPrint && prettyPrint();
    });
</script>
<!-- /editor -->



<!-- time pick test code start -->
<script type="text/javascript" src="<?php echo $con->getBaseUrl()."time_pick/dist/bootstrap-clockpicker.min.js" ?>"></script>
<script type="text/javascript">
$('.clockpicker').clockpicker()
.find('input').change(function(){
console.log(this.value);
});
var input = $('#single-input_1').clockpicker({
placement: 'bottom',
align: 'left',
autoclose: true,
'default': 'now'
});
var input = $('#single-input_2').clockpicker({
placement: 'bottom',
align: 'left',
autoclose: true,
'default': 'now'
});
if (/mobile/i.test(navigator.userAgent)) {
$('input').prop('readOnly', true);
}
</script>
<script type="text/javascript" src="<?php echo $con->getBaseUrl()."time_pick/assets/js/highlight.min.js" ?>"></script>
<!-- time pick test code close -->



</body>

</html>
