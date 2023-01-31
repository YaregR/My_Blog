<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Posts List
                <a href="?page=add" class="btn btn-primary ml-2"><i class="fas fa-plus"></i></a>
            </h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Text</th>
                            <th>Preview</th>
                            <th>Created</th>                            
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Title</th>
                            <th>Text</th>
                            <th>Preview</th>
                            <th>Created</th>
                            <th>Options</th>
                        </tr>
                    </tfoot>

                    <tbody>
                        <?php
                            $sql = "SELECT * FROM posts";
                            $result = mysqli_query($conn, $sql);
                            while($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php echo $row['title']; ?></td>
                                    <td><?php echo $row['text']; ?></td>
                                    <td><?php echo $row['preview']; ?></td>
                                    <td><?php echo $row['created']; ?></td>
                                    <td>
                                        <a href="?page=edit&id=<?php echo $row['id']; ?>" class="btn btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                        <a href="/admin/modules/posts/delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</a>
                                    </td>
                                </tr>
                                <?php
                            }
                        ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>