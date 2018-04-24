<!-- Nav -->
<div class="container nav-heading">
    <ul class="nav nav-pills">
        <li role="presentation"><a href="<?=base_url()?>">Home</a></li>
        <li role="presentation" class="active"><a href="<?=base_url()?>Students/add">Students</a></li>
    </ul>
    <hr>
</div>
<!-- Nav -->

<!-- Content -->
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <form action="<?=base_url()?>Students/updateStudent" method="post" id="stForm" role="form">
                    <div class="form-group">
                        <input class="form-control" type="hidden" name="st_id" id="st_id" value="<?php echo $row['id'];?>" required />
                    </div>

                    <div class="form-group">
                        <label for="firstname"><span class="req">* </span> First name: </label>
                        <input class="form-control" type="text" name="firstName" id = "firstName" value="<?php echo $row['first_name'];?>" required />
                        <div id="errFirst"></div>
                    </div>

                    <div class="form-group">
                        <label for="lastname"><span class="req">* </span> Last name: </label>
                        <input class="form-control" type="text" name="lastName" id = "lastName" value="<?php echo $row['last_name'];?>" required />
                        <div id="errLast"></div>
                    </div>

                    <div class="form-group">
                        <label for="email">Email Address: </label>
                        <input class="form-control"  type="text" name="email" id = "email"  onchange="email_validate(this.value);"  value="<?php echo $row['email'];?>" />
                        <div class="status" id="status"></div>
                    </div>

                    <div class="form-group">
                        <label for="phonenumber"> Phone Number: </label>
                        <input  type="text" name="phone" id="phone" class="form-control phone" maxlength="28"  value="<?php echo $row['phone_num'];?>" />
                    </div>

                    <div class="form-group">
                        <input class="btn btn-success" type="button" name="submit_st" value="Submit" onclick="update_student(); return false;">

                        <input class="btn btn-danger" type="button" name="cancel_st" value="Cancel" onclick="{location.href='<?=base_url()?>Students'}">
                    </div>

                </fieldset>
            </form><!-- ends register form -->

        </div><!-- ends col-6 -->

        <div class="col-md-7">
            <h1 class="page-header">Update Student</h1>
            <p>Student information</p>

        </div>

    </div>
</div>
<!-- Content -->