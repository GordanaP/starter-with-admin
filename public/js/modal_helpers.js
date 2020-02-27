/**
 * Open the modal.
 */
$.fn.open = function()
{
    $(this).modal('show');
}

/**
 * Close the modal.
 */
$.fn.close = function()
{
    $(this).modal('hide');
}

/**
 * The modal's form autofocus field.
 *
 * @param string elementId
 */
$.fn.autofocus = function(elementId)
{
    $(this).on('shown.bs.modal', function () {
        $(this).find(elementId).focus();
    })
}