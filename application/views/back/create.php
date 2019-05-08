<?php
/**
 * Created by PhpStorm.
 * User: ASUS PC
 * Date: 10/10/2018
 * Time: 21:39
 */
?>
<div style="padding-top: 100px;">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="<?php echo base_url() ?>index.php?c=Administrator&m=addDept" method="post">
                <div class="modal-header">
                    <h4 class="modal-title">Add Department</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>

                <div class="modal-body">
                    <div class="form-group">
                        <label>Name</label>
                        <input name="name" id="editName" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>School</label>
                        <select class="form-control" name="id_sch" id="editId_sch">
                            <?php
                            foreach ($listSch as $item)
                            {
                                ?>
                                <option value="<?php echo $item['id']; ?>"><?php echo $item['name'] ?></option>
                                <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Director</label>
                        <input name="director" id="editDirector" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Founded in</label>
                        <input name="fi" id="editFi" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input name="description" id="editDescription" type="text" class="form-control">
                    </div>
                </div>

                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                </div>
            </form>
        </div>
    </div>
</div>
