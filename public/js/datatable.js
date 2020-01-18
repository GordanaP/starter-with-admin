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