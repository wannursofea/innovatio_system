<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Update Certification</h3>
        <div class="card-toolbar">
            <?php if(isLoggedIn()): ?>
            <a href="<?php echo URLROOT;?>/certifications" class="btn btn-light-primary">Manage Certification</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="card-body">
        <form action="<?php echo URLROOT; ?>/certifications/update/<?php echo $data['certifications']->certification_id ?>" method="POST">
            <div class="mb-10">
                <label for="exampleFormControlInput1" class="required form-label">Certification Name</label>
                <input type="text" name="certName" class="form-control form-control-solid"
                    value="<?php echo $data['certifications']->certName ?>" required />
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">Valid until</label>
                <div class="position-relative">
                <div class="required position-absolute top-0"></div>
                <input type="date" name="validity" class="form-control" value="<?php echo $data['certifications']->validity;?>" required>
            </div>
    </div>


            <button type="submit" class="btn btn-primary font-weight-bold">Submit</button>

        </form>

    </div>
    <div class="card-footer">
        Footer
    </div>
</div>