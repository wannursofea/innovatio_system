<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Update Reward</h3>
        <div class="card-toolbar">
            <?php if (isLoggedIn()): ?>
                <a href="<?php echo URLROOT; ?>/rewards/manage" class="btn btn-light-primary">Update Rewards</a>
            <?php endif; ?>
        </div>
    </div>

        <!-- <form action="<?//php echo URLROOT; ?>/rewards/update/<?//php echo $data['badge']->badge_id ?>/rewards/create" method="POST">         -->
        <form action="<?php echo URLROOT; ?>/rewards/update/<?php echo $data['badge']->badge_id ?>" method="POST">

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">Gold Badge</label>
                <input type="number" name="goldBadge" class="form-control form-control-solid" 
                    value="<?php echo $data['badge']->goldBadge ?>" required /> 
                    
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">Silver Badge</label>
                <input type="number" name="silverBadge" class="form-control form-control-solid" 
                    value="<?php echo $data['badge']->silverBadge ?>" required />
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">Bronze Badge</label>
                <input type="number" name="bronzeBadge" class="form-control form-control-solid" 
                    value="<?php echo $data['badge']->bronzeBadge ?>" required />
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">Claim Status</label>
                <select name="claimStatus" class="form-select form-select-solid" required>
                    <option value="1" <?php echo ($data['badge']->claimStatus == 1) ? 'selected' : ''; ?>>Eligible</option>
                    <option value="0" <?php echo ($data['badge']->claimStatus == 0) ? 'selected' : ''; ?>>Not Eligible</option>
                </select>
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">Date</label>
                <input type="date" name="dateAwarded" class="form-control form-control-solid" value="<?php echo $data['badge']->dateAwarded ?>"/>
            </div>
            <button type="submit" id="submitButton" class="btn btn-lg btn-primary font-weight-bold">Update Rewards</button>

        </form>
    </div>
    <div class="card-footer">
        Footer
    </div>
</div>
