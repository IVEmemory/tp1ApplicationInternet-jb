$(document).ready(function () {
    // The path to action from CakePHP is in urlToLinkedListFilter 
    $('#kraj-region-id').change(function () {
        var krajRegionId = $(this).val();
        if (krajRegionId) {
            $.ajax({
                url: urlToLinkedListFilter,
                data: 'produit_id=' + krajRegionId,
                success: function (actions) {
                    $select = $('#okres-county-id');
                    $select.find('option').remove();
                    $.each(actions, function (key, value)
                    {
                        $.each(value, function (childKey, childValue) {
                            $select.append('<option value=' + childValue.id + '>' + childValue.actionPro + '</option>');
                        });
                    });
                }
            });
        } else {
            $('#okres-county-id').html('<option value="">Select KrajRegion first</option>');
        }
    }).change();
});


