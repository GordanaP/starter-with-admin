/**
 * Delete a single record.
 *
 * @param  string records
 * @param  Datatable.js datatable
 */
function deleteSingleRecord(records, datatable)
{
    $(document).on('click', deleteSingle(records), function() {

        var record = $(this).attr('data-record');

        $.ajax({
            type: 'DELETE',
            url: deleteUrl(records, record),
            success: function(response) {
                handleSuccessResponse(records, datatable);
            },
            error: function(response) {
                displayErrors(response.responseJSON.errors, 'div.');
                reloadDataTable(datatable);
            }
        });
    });
}

/**
 * Delete many records.
 *
 * @param  string records
 * @param  Datatable.js datatable
 */
function deleteManyRecords(records, datatable)
{
    $(document).on('click', deleteMany(records), function() {

        var checkbox = records.toLowerCase();

        $.ajax({
            type: 'DELETE',
            url: deleteUrl(records),
            data: {
                ids: getCheckedValues(checkbox)
            },
            success: function(response) {
                handleSuccessResponse(records, datatable);
            },
            error: function(response) {
                displayErrors(response.responseJSON.errors, 'div.');
                handleResponse(records, datatable);
            }
        });
    });
}

/**
 * Mark checkboxes.
 *
 * @param  string records
 */
function markCheckboxes(records)
{
    var singleCheckbox = '.checkitem'+records;
    var checkbox = records.toLowerCase();

    table(records).on('click', checkAll(records), function () {

        $(singleCheckbox).prop('checked', $(this).prop("checked"));
        deleteButton(records).show();

        if(isNotChecked($(this))) {
            deleteButton(records).hide();
        }
    });

    table(records).on('click', singleCheckbox, function () {

        if(isChecked($(this))) {
            deleteButton(records).show();
        }

        if(isNotChecked($(this))) {
            uncheck($(checkAll(records)))
        }

        if(allChecked(singleCheckbox)) {
            check($(checkAll(records)))
        }

        if(noneChecked(checkbox)) {
            deleteButton(records).hide();
        }
    });
}

/**
 * Check all records.
 *
 * @param  string records
 */
function checkAll(records)
{
    return '#checkAll'+records;
}

/**
 * The delete many records button.
 *
 * @param  string records
 */
function deleteButton(records)
{
    return $('#delete'+records);
}

/**
 * The delete records url.
 *
 * @param  string records
 * @param  string record | null
 */
function deleteUrl(records, record = null)
{
    return record ? '/admin/' + records.toLowerCase() + '/' + record
        : '/admin/'+ records.toLowerCase();
}

/**
 * Delete many records.
 *
 * @param  string records
 */
function deleteMany(records)
{
    return '#delete'+records;
}

/**
 * Delete a single record.
 *
 * @param  string records
 */
function deleteSingle(records)
{
    return '#delete'+pluralize.singular(records);
}

/**
 * Handle the success response.
 *
 * @param  string records
 * @param  Datatable.js datatable
 */
function handleSuccessResponse(records, datatable)
{
    reloadLocation(records)
    handleResponse(records, datatable);
    removeError();
}

/**
 * Handle the delete response.
 *
 * @param  string records
 * @param  Datatable.js datatable
 */
function handleResponse(records, datatable)
{
    reloadDataTable(datatable);
    deleteButton(records).hide();
    uncheck($(checkAll(records)));
}

/**
 * Reload the location.
 *
 * @param  string loc
 */
function reloadLocation(loc)
{
    $(loc).load(location.href +  ' '+loc);
}
