/**
 * Remove the error message upon triggering an event on a given element.
 *
 * @param  string el
 */
function removeErrorUponTriggeringEvent(el="span.invalid-feedback.")
{
    $("input, textarea").on('keydown', function () {
         removeErrorMessage($(this).attr('name'), el);
    });

    $("select").on('change', function () {
         removeErrorMessage($(this).attr('name'), el);
    });

    $("input[type=radio]").on('click', function() {
         removeErrorMessage($(this).attr('name'), el);
    });

    $("input[type=checkbox]").on('click', function() {
        var name = $(this).attr('name').slice(0,-2);
        removeErrorMessage($(this).attr('name'), el);
    });
}

/**
 * Remove the error message.
 *
 * @param  string error
 * @param  string el
 */
function  removeErrorMessage(error, el) {
    $(el+error).empty().hide();
}

/**
 * Display errors.
 *
 * @param  array errors
 * @param  string htmlEl
 */
function displayErrors(errors, el = 'span.invalid-feedback.')
{
    for (error in errors) {
        var errorMessage = errors[error][0];
        $(el + error).show().text(errorMessage);
    }
}

/**
 * Remove the error.
 *
 * @param  string field
 */
function removeError(field = '.invalid-feedback')
{
    $(field).empty().hide();
}