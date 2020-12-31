<form action="" method="post">
    <div class="card">
        <div class="card-header">
            <p class="h3">Add New Member</p>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="">Id</label>
                <input type="text" name="id" class="form-control" readonly>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Designation</label>
                        <input type="text" name="designation" class="form-control" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Contact</label>
                        <input type="text" name="contact" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Date of Birth</label>
                        <input type="date" name="dob" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nationality</label>
                        <input type="text" name="nationality" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea class="form-control" name="address" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="">Date of Joining</label>
                <input type="text" name="date_of_joining" class="form-control">
            </div>
            <div class="form-group">
                <label for="">Date of Leaving</label>
                <input type="text" name="date_of_leaving" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-success" type="submit"><i class="fa fa-plus"></i> Add</button>
        </div>
    </div>
</form>