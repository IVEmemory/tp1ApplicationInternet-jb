<?php
$urlToRestApi = $this->Url->build('/api/produits', true);
echo $this->Html->scriptBlock('var urlToRestApi = "' . $urlToRestApi . '";', ['block' => true]);
echo $this->Html->script('Produits/index', ['block' => 'scriptBottom']);
?>
        <div class="container">
            <div class="row">
                <div class="col-md-12 head">
                    <h5>Tâches possible</h5>
                    <!-- Add link -->
                    <div class="float-right">
                        <a href="javascript:void(0);" class="btn btn-success" data-type="add" data-toggle="modal" data-target="#modalProduitAddEdit"><i class="plus"></i> Nouvelle tâche vague </a>
                    </div>
                </div>
                <div class="statusMsg"></div>
                <!-- List the Produits -->
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Tâche vague</th>
                            <th>Code de tâche</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="krajRegionData">
                        <?php if (!empty($produits)) {
                            foreach ($produits as $row) { ?>
                                <tr>
                                    <td><?php echo '#' . $row['id']; ?></td>
                                    <td><?php echo $row['actionPro']; ?></td>
                                    <td><?php echo $row['code']; ?></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-warning" 
                                           rowID="<?php echo $row['id']; ?>" data-type="edit" 
                                           data-toggle="modal" data-target="#modalProduitAddEdit">
                                            edit
                                        </a>
                                        <a href="javascript:void(0);" class="btn btn-danger" 
                                           onclick="return confirm('Are you sure to delete data?') ? 
                                               produitAction('delete', '<?php echo $row['id']; ?>') : false;">
                                            delete
                                        </a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr><td colspan="5">aucune tâche vague trouvé...</td></tr>
<?php } ?>
                    </tbody>
                </table>
            </div>
        </div>



        <!-- Modal Add and Edit Form -->
        <div class="modal fade" id="modalProduitAddEdit" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Add new region (kraj)</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <div class="statusMsg"></div>
                        <form role="form">
                            <div class="form-group">
                                <label for="actionPro">Nom de la tâche vague</label>
                                <input type="text" class="form-control" name="actionPro" id="actionPro" placeholder="Enter the name (actionPro)">
                            </div>
                            <div class="form-group">
                                <label for="code">Code de la tâche</label>
                                <input type="text" class="form-control" name="code" id="code" placeholder="Enter the code (code)">
                            </div>
                            <input type="hidden" class="form-control" name="id" id="id"/>
                        </form>
                    </div>

                    <!-- Modal Footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" id="krajRegionSubmit">SUBMIT</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
