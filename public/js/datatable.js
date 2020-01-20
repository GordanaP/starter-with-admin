function table(records)
{
    return $('#table'+records);
}

function resourceUrl(records, parentRecords = null, parentId = null)
{
    return parentId
        ? '/admin/' + parentRecords + '/' + parentId + '/' + records.toLowerCase() + '/list'
        : '/admin/' + records.toLowerCase() + '/list';
}

$.fn.rowsCount = function() {
    return $(this).data().count();
};

$.fn.columnCount = function() {
    return $('th', $(this).find('thead')).length;
};

$.fn.columnIndex = function(index = 1) {
    return $(this).columnCount() - index;
};