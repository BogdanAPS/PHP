<!-- Modal Edit-->
<div class="modal fade" id="editModal<?php echo $value1['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Редактировать <?php echo $value1['id'] ?></h5>
                <button type="button" class="close" data-dismiss="modal1" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="?id=<?php echo$value1['id'] ?>" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="edit_name" value="<?php echo $value1['name'] ?>" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="edit_description" value="<?php echo $value1['description'] ?>" placeholder="Описание">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="edit_story" value="<?php echo $value1['story'] ?>" placeholder="История">
                    </div>
                    <div class="modal-footer">
                        <button type="submit" name="edit-submit" class="btn btn-primary">Обновить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- DELETE MODAL -->
<div class="modal fade" id="deleteModal<?php echo $value1['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content shadow">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Удалить запись № <?php echo $value1['id'] ?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Отмена</button>
                <form action="?id=<?php echo $value1['id'] ?>" method="post">
                    <button type="submit" name="delete_submit" class="btn btn-danger">Удалить</button>
                </form>
            </div>
        </div>
    </div>
</div>

