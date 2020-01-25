function clearErrorOnNewInput()
{
    $("input, textarea").on('keydown', function () {
        clearError(errorBox($(this).attr('name')));
        clearError(errorBox($(this).attr('name'), 'p.'));
    });

    $("select").on('change', function () {
        clearError(errorBox($(this).attr('name')));
        clearError(errorBox($(this).attr('name'), 'p.'));
    });

    $("input[type=radio]").on('click', function() {
        clearError(errorBox($(this).attr('name')));
        clearError(errorBox($(this).attr('name'), 'p.'));
    });

    $("input[type=checkbox]").on('click', function() {

        var name = $(this).attr('name').slice(0,-2);

        clearError(errorBox(name));
        clearError(errorBox(name, 'p.'));
    })
}

function displayErrors(errors, htmlEl = 'span.')
{
    for (error in errors) {
        var errorMessage = errors[error][0];
        displayError(errorBox(error, htmlEl), errorMessage);
    }
}

function clearErrors(fields)
{
    $.each(fields, function(index, name) {
        clearError(errorBox(name))
    });
}

function displayError(field, message)
{
    field.show().text(message);
}

function clearError(field)
{
    field.hide().text('');
}

function reloadLocation(location)
{
    $(location).load(' '+location );
}

function reloadDataTable(datatable)
{
    datatable.ajax.reload();
}

function errorBox(name, htmlEl)
{
    return $(htmlEl+name);
}

function clearForm()
{
    $("form").trigger('reset');
}

function redirectTo(url)
{
    location.href = url;
}

function showElement(el)
{
    el.removeClass('hidden')
}

function hideElement(el)
{
    el.addClass('hidden')
}

function resetInput(input)
{
    input.val('');
}

function emptyElement(el)
{
    el.empty();
}

function isEmptyInput( input )
{
    return input.val() == '';
}

function isEmptyElement( el )
{
    return ! $.trim(el.html());
}

function inputType(type)
{
    return $("input:"+type);
}

function optionValue(option)
{
    return option.val();
}

function makeArray(data)
{
    return $.map(data, function(value, index){
        return [value];
    });
}

function createById(name)
{
    return $('#'+name);
}