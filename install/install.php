<?php echo '<form action="" method="post" accept-charset="utf-8" id="installForm">'; ?>
<?php echo '<input type="hidden" name="step" value="' . $current_step . '">'; ?>
<?php echo '<input type="hidden" name="hostname" value="' . $_POST['hostname'] . '">'; ?>
<?php echo '<input type="hidden" name="username" value="' . $_POST['username'] . '">'; ?>
<?php echo '<input type="hidden" name="password" value="' . $_POST['password'] . '">'; ?>
<?php echo '<input type="hidden" name="database" value="' . $_POST['database'] . '">'; ?>

<div class="form-group">
    <div class="form-group">
        <label for="base_url" class="control-label"><strong>Business Name</strong>
            <!-- <a href="#" target="_blank">
                Read more...
            </a> -->
        </label>
        <input type="text" class="form-control" value="" name="business_name"
            id="" required>
    </div>
</div>

<div class="form-group">
    <div class="form-group">
        <label for="base_url" class="control-label"><strong>Base URL</strong>
            <!-- <a href="#" target="_blank">
                Read more...
            </a> -->
        </label>
        <input type="url" class="form-control" value="<?php echo $this->guess_base_url(); ?>" name="base_url"
            id="base_url" required>
    </div>
</div>

<div class="form-group">
    <div class="form-group">
        <label for="base_url" class="control-label"><strong>Software License | <a style="color:red;" href="https://cutt.ly/PLFZenO" target="_blank">NULLED Web Community</a></strong>
            <!-- <a href="#" target="_blank">
                Read more...
            </a> -->
        </label>
        <input type="text" class="form-control" value="nullcave" name="license"
            id="" required>
    </div>
</div>

<hr />
<h4>Admin User</h4>
<hr />

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="firstname" class="control-label">Firstname</label>
            <input type="text" class="form-control" name="firstname" id="firstname" required value="Super">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="lastname" class="control-label">Lastname</label>
            <input type="text" class="form-control" name="lastname" id="lastname" required value="Admin">
        </div>
    </div>
</div>
<div class="form-group">
    <label for="admin_email" class="control-label">Email</label>
    <input type="email" class="form-control" name="admin_email" id="admin_email" required value="admin@phptravels.com">
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="admin_password" class="control-label">Password</label>
            <input type="text" class="form-control" name="admin_password" id="admin_password" required value="demoadmin">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="admin_passwordr" class="control-label">Repeat Password</label>
            <input type="text" class="form-control" name="admin_passwordr" id="admin_passwordr" required value="demoadmin">
        </div>
    </div>
</div>

<!-- <h5>Other Settings</h5>
<hr /> -->

<!-- <div class="form-group">
    <label for="timezone" class="control-label">Timezone</label>
    <select name="timezone" data-live-search="true" id="timezone" class="form-control" required
        data-none-selected-text="Select system timezone">
        <option value=""></option>
        <?php //foreach ($this->get_timezones_list() as $key => $timezones) { ?>
        <optgroup label="<?php echo $key; ?>">
            <?php //foreach ($timezones as $timezone) { ?>
            <option value="<?php echo $timezone; ?>"><?php echo $timezone; ?></option>
            <?php //} ?>
        </optgroup>
        <?php //} ?>
    </select>
</div> -->

<hr class="-tw-mx-4" />

<div class="text-right">
    <button type="submit" class="btn btn-success" id="installBtn">Install</button>
</div>
</form>