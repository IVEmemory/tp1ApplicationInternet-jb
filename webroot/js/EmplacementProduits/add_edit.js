$(document).ready(function () {
    // The path to action from CakePHP is in urlToLinkedListFilter 
    $('#produit-id').on('change', function () {
        var produitId = $(this).val();
        if (produitId) {
            $.ajax({
                url: urlToLinkedListFilter,
                data: 'produit_id=' + produitId,
                success: function (actions) {
                    /**/      $select = $('#action_id');
                            $select.find('option').remove();
                            $.each(actions, function (key, value)
                                {
                                $.each(value, function (childKey, childValue) {
                                $select.append('<option value=' + childValue.id + '>' + childValue.actionPro + '</option>');
                                });
                            });
                    /**/
                    /*      $('#action_id').html(actions);
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }

                /**/                }
                 });
                 } else {
                 $('#action_id').html('<option value="">Select Product first</option>');
                 }
                 /**/});
});

