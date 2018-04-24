<!-- Nav -->
<div class="container nav-heading">
    <ul class="nav nav-pills">
        <li role="presentation"><a href="<?=base_url()?>">Home</a></li>
        <li role="presentation" class="active"><a href="Students">Students</a></li>
    </ul>
    <hr>
</div>
<!-- Nav -->

<!-- Content -->
<div class="container">

    <div class="alert alert-success" role="alert">
        <div class="row">
            <div class="col-lg-4">
                <form action="Students" method="post" id="searchForm" role="form">
                    <div class="input-group">
                        <input type="text" name="search" id="search" class="form-control" placeholder="Search for name...">
                        <span class="input-group-btn">
                           <button class="btn btn-default" type="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>

            <div class="col-lg-8">
                <div class="input-group">
                    <button type="button" class="btn btn-success" onclick="{location.href='Students/add'}">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Create
                    </button>
                </div>
            </div>
        </div>


        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Student Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach ($student_list->result() as $row)
                    {
                        echo '
                          <tr>
                              <td>'.$row->id.'</td>
                              <td>'.$row->first_name.'&nbsp;'.$row->last_name.'</td>
                              <td>'.$row->email.'</td>
                              <td>'.$row->phone_num.'</td>
                              <td>
                                 <button type="button" class="btn btn-primary" aria-label="Left Align" onclick="{location.href=\'Students/update?id='.$row->id.'\'}">
                                     <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Update
                                 </button>
                                 
                                 <button type="button" class="btn btn-danger" onclick="del_student('.$row->id.')">
                                     <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Remove
                                 </button>
                              </td>
                          </tr>
                        ';
                    }
                ?>
            </tbody>
        </table>
    </div>
</div>
<!-- Content -->