@include('admin/header')
<div class="page-wrapper">
    <div class="page-content">
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">jQuery Validation</h5>
            </div>
            <div class="card-body p-4">
                <form id="jQueryValidationForm" method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-3 col-form-label">Enter Your Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input35" placeholder="Enter Your Name" name="name" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input36" class="col-sm-3 col-form-label">Phone No</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input36" name="phone" placeholder="Phone No" name="phone" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input37" class="col-sm-3 col-form-label">Username</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="input37" placeholder="Email Address" name="Username" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input37" class="col-sm-3 col-form-label">Email Address</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="input37" name="email" placeholder="Email Address"  required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input38" class="col-sm-3 col-form-label">Choose Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="input38"  placeholder="Choose Password" name="Password" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input38" class="col-sm-3 col-form-label">Confirm Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="input38" placeholder="Confirm Password" name="Confirm_Password" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input39" class="col-sm-3 col-form-label">Select Country</label>
                        <div class="col-sm-9">
                            <select class="form-select" id="input39" name="country" required>
                                <option selected="" disabled=""  value="">Choose...</option>
                                <option value="jaipur">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                              </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input40" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="input40" name="address" rows="3" placeholder="Address"></textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input37" class="col-sm-3 col-form-label">images</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control" id="input37" name="img" placeholder="Email Address"  required>
                        </div>
                    </div>
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <div class="d-md-flex d-grid align-items-center gap-3">

                                <button type="submit" class="btn btn-primary px-4" name="submit2">Submit</button>
                         
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@include('admin/footer')