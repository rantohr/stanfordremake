<?php
/**
 * Created by PhpStorm.
 * User: Ranto_hr
 * Date: 4/29/2019
 * Time: 1:57 PM
 */
?>
<section class="contact--us-area section-padding-100-0" style="margin-bottom: 100px; padding-top: 150px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Departments</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline" role="grid">
                                <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" aria-describedby="dataTables-example_info">
                                    <thead>
                                    <tr>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">Ref.
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">name
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">school
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">director
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">founded in
                                        </th>
                                        <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                            colspan="1" aria-label="Browser: activate to sort column ascending">description
                                        </th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $i=0;
                                    foreach($output as $donnees)
                                    {
                                        ?>
                                        <tr>
                                            <td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="id<?php echo $i; ?>"><?php echo($donnees['id']); ?></td>
                                            <td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="name<?php echo $i; ?>"><?php echo($donnees['name']); ?></td>
                                            <td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending">
                                                <?php echo $donnees['school']; ?></td><div hidden="hidden" id="id_sch<?php echo $i; ?>"><?php echo $donnees['id_sch']; ?></div>
                                            <td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="director<?php echo $i; ?>"><?php echo($donnees['director']); ?></td>
                                            <td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="fi<?php echo $i; ?>"><?php echo($donnees['founded_in']); ?></td>
                                            <td class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1"
                                                colspan="1" aria-label="Browser: activate to sort column ascending"
                                                id="description<?php echo $i; ?>"><?php echo($donnees['description']); ?></td>
                                            <td class="center">
                                                <a href="#editProduitModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit" onclick="edit(<?php echo $i; ?>)">&#xE254;</i></a>
                                                <a href="#deleteProduitModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete" onclick="fafana(<?php echo $i; ?>)">&#xE872;</i></a>
                                            </td>
                                        </tr>
                                        <?php
                                        $i++;
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div id="editProduitModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="<?php echo base_url(); ?>index.php?c=Administrator&m=updateDept">
                        <input type="hidden" name="id" id="idMisc" value="">
                        <div class="modal-header">
                            <h4 class="modal-title">Edit Department</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Ref.</label>
                                <input name="id" id="editId" type="text" class="form-control" readonly="readonly">
                            </div>
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
                            <input type="submit" class="btn btn-info" value="Save">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div id="deleteProduitModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form method="post" action="<?php echo base_url(); ?>index.php?c=Administrator&m=deleteDept">
                        <input type="hidden" name="id" id="idDept" value="">
                        <div class="modal-header">
                            <h4 class="modal-title">Delete Department</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <p id="idProd">  </p>
                            <p class="text-warning"><small></small></p>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <script>
            function fafana(num)
            {
                var msg = "Are you sure, you want to delete "+document.getElementById("name" + num).innerHTML+"?";
                document.getElementById("idDept").value = document.getElementById("id" + num).innerHTML;
                document.getElementById("idProd").innerText = msg;
            }
            function edit(num)
            {
                document.getElementById("editId").value = document.getElementById("id" + num).innerHTML;
                document.getElementById("editName").value = document.getElementById("name" + num).innerHTML;
                document.getElementById("editDirector").value = document.getElementById("director" + num).innerHTML;
                document.getElementById("editFi").value = document.getElementById("fi" + num).innerHTML;
                document.getElementById("editDescription").value = document.getElementById("description" + num).innerHTML;
                document.getElementById("editId_sch").value = document.getElementById("id_sch" + num).innerHTML;
            }
        </script>
    </div>
</section>