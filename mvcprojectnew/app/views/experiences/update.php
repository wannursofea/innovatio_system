<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Update Experience</h3>
        <div class="card-toolbar">
            <?php if(isLoggedIn()): ?>
            <a href="<?php echo URLROOT;?>/experiences" class="btn btn-light-primary">Manage Experience</a>
            <?php endif; ?>
        </div>
    </div>
    <div class="card-body">
        <form action="<?php echo URLROOT; ?>/experiences/update/<?php echo $data['experiences']->experience_id ?>" method="POST">
            <div class="mb-10">
                <label for="exampleFormControlInput1" class="required form-label">Job Title</label>
                <input type="text" name="jobtitle" class="form-control form-control-solid"
                    value="<?php echo $data['experiences']->jobtitle ?>" required />
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="required form-label">Company</label>
                <input type="text" name="company" class="form-control form-control-solid"
                    value="<?php echo $data['experiences']->company ?>" required />
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">From</label>
                <div class="position-relative">
                <div class="required position-absolute top-0"></div>
                <input type="date" name="from_date" class="form-control" value="<?php echo $data['experiences']->from_date?>" required>
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">To</label>
                <div class="position-relative">
                <div class="required position-absolute top-0"></div>
                <input type="date" name="to_date" class="form-control" value="<?php echo $data['experiences']->to_date?>" required>
            </div>
    </div>


            <button type="submit" class="btn btn-primary font-weight-bold">Submit</button>

        </form>

    </div>
    <div class="card-footer">
        Footer
    </div>
</div>