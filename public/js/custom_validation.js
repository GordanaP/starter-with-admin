function maxLength(field)
{
    $(field).maxlength({
      alwaysShow: true,
      warningClass: "badge mt-1 badge-success",
      limitReachedClass: "badge mt-1 badge-danger"
    });
}