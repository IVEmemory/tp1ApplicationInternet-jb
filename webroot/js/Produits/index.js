// Update the produits data list
function getProduits() {
    $.ajax({
        type: 'GET',
        url: urlToRestApi,
        dataType: "json",
        success:
                function (data) {
                    var produitTable = $('#produitData');
                    produitTable.empty();
                    $.each(data.produits, function (key, value)
                    {
                        var editDeleteButtons = '</td><td>' +
                                '<a href="javascript:void(0);" class="btn btn-warning" rowID="' +
                                    value.id + 
                                    '" data-type="edit" data-toggle="modal" data-target="#modalProduitAddEdit">' + 
                                    'edit</a>' +
                                '<a href="javascript:void(0);" class="btn btn-danger"' +
                                    'onclick="return confirm(\'Are you sure to delete data?\') ?' + 
                                    'produitAction(\'delete\', \'' + 
                                    value.id + 
                                    '\') : false;">delete</a>' +
                                '</td></tr>';
                        produitTable.append('<tr><td>' + value.id + '</td><td>' + value.actionPro + '</td><td>' + value.code + editDeleteButtons);
 
                    });

                }

    });
}

 /* Function takes a jquery form
 and converts it to a JSON dictionary */
function convertFormToJSON(form) {
    var array = $(form).serializeArray();
    var json = {};

    $.each(array, function () {
        json[this.name] = this.value || '';
    });

    return json;
}


function produitAction(type, id) {
    id = (typeof id == "undefined") ? '' : id;
    var statusArr = {add: "added", edit: "updated", delete: "deleted"};
    var requestType = '';
    var produitData = '';
    var ajaxUrl = urlToRestApi;
    frmElement = $("#modalProduitAddEdit");
    if (type == 'add') {
        requestType = 'POST';
        produitData = convertFormToJSON(frmElement.find('form'));
    } else if (type == 'edit') {
        requestType = 'PUT';
        ajaxUrl = ajaxUrl + "/" + id;
        produitData = convertFormToJSON(frmElement.find('form'));
    } else {
        requestType = 'DELETE';
        ajaxUrl = ajaxUrl + "/" + id;
    }
    frmElement.find('.statusMsg').html('');
    $.ajax({
        type: requestType,
        url: ajaxUrl,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify(produitData),
        success: function (msg) {
            if (msg) {
                frmElement.find('.statusMsg').html('<p class="alert alert-success">Product data has been ' + statusArr[type] + ' successfully.</p>');
                getProduits();
                if (type == 'add') {
                    frmElement.find('form')[0].reset();
                }
            } else {
                frmElement.find('.statusMsg').html('<p class="alert alert-danger">Some problem occurred, please try again.</p>');
            }
        }
    });
}

// Fill the produit's data in the edit form
function editProduit(id) {
    $.ajax({
        type: 'GET',
        url: urlToRestApi + "/" + id,
        dataType: 'JSON',
//        data: 'action_type=data&id=' + id,
        success: function (data) {
            $('#id').val(data.produit.id);
            $('#actionPro').val(data.produit.actionPro);
            $('#code').val(data.produit.code);
        }
    });
}

// Actions on modal show and hidden events
$(function () {
    $('#modalProduitAddEdit').on('show.bs.modal', function (e) {
        var type = $(e.relatedTarget).attr('data-type');
        var produitFunc = "produitAction('add');";
        $('.modal-title').html('Add new product');
        if (type == 'edit') {
            var rowId = $(e.relatedTarget).attr('rowID');
            produitFunc = "produitAction('edit')" + rowId + ");";
            $('.modal-title').html('Edit product');
            editProduit(rowId);
        }
        $('#produitSubmit').attr("onclick", produitFunc);
    });

    $('#modalProduitAddEdit').on('hidden.bs.modal', function () {
        $('#produitSubmit').attr("onclick", "");
        $(this).find('form')[0].reset();
        $(this).find('.statusMsg').html('');
    });
});


