<div class="card shadow-sm">
    <div class="card-header">
        <h3 class="card-title">Create Reward</h3>
        <div class="card-toolbar">
            <?php if (isLoggedIn()): ?>
                <a href="<?php echo URLROOT; ?>/rewards" class="btn btn-light-primary">Manage Rewards</a>
            <?php endif; ?>
        </div>
    </div>

        <form action="<?php echo URLROOT; ?>/rewards/create" method="POST">
            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">Gold Badge</label>
                <input type="number" name="goldBadge" class="form-control form-control-solid" placeholder="Gold Badge" required />
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">Silver Badge</label>
                <input type="number" name="silverBadge" class="form-control form-control-solid" placeholder="Silver Badge" required />
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">Bronze Badge</label>
                <input type="number" name="bronzeBadge" class="form-control form-control-solid" placeholder="Bronze Badge" required />
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">Claim Status</label>
                <select name="claimStatus" class="form-select form-select-solid" required>
                    <option value="1">Eligible</option>
                    <option value="0">Not Eligible</option>
                </select>
            </div>

            <div class="mb-10">
                <label for="exampleFormControlInput1" class="form-label">Date</label>
                <input type="datetime-local" name="dateAwarded" class="form-control form-control-solid" />
            </div>

            <button type="submit" class="btn btn-primary font-weight-bold">Add</button>
        </form>
    </div>
    <div class="card-footer">
        Footer
    </div>
</div>
