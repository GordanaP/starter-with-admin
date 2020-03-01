/**
 * Reset the modal content upon close.
 *
 * @param  array errors
 * @param  string el
 */
$.fn.reset = function(errors, el='span.invalid-feedback.')
{
    $(this).on("hidden.bs.modal", function() {

        $(this).clearFormContent()

        $(this).clearAllErrors(errors, el)

        // Remove timepicker
        // $(this).clearTimepicker(timepickerField)
    });
}

/**
 * Remove all errors.
 *
 * @param  array errors
 * @param  string el
 */
$.fn.clearAllErrors = function(errors, el) {
     $.each(errors, function (index, error) {
        removeErrorMessage(error, el);
    });
}

/**
 * Clear the form content.
 */
$.fn.clearFormContent = function()
{
    $(this).find('form').trigger('reset');
}

/**
 * Clear the timepicker.
 *
 * @param  string timepickerField
 */
$.fn.clearTimepicker = function(timepickerField)
{
    $(this).find(timepickerField).timepicker('remove');
}

/**
 * Open the modal.
 */
$.fn.open = function() {
    $(this).modal('show');
}

/**
 * Close the modal.
 */
$.fn.close = function() {
    $(this).modal('hide');
}

/**
 * The modal autofocus field.
 *
 * @param string elementId
 */
$.fn.autofocus = function(elementId) {
    $(this).on('shown.bs.modal', function () {
        $(this).find(elementId).focus();
    })
}