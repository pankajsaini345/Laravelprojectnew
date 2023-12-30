@include('admin/header')
<div class="page-wrapper">
    <div class="page-content">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header px-4 py-3">
                    <h5 class="mb-0">Services</h5>
                </div>
                <div class="card-body p-4">
                    <form   method="post"  enctype="multipart/form-data">
                        @csrf
                        {{ csrf_field() }}
                                   <div class="row mb-3">
                            <label for="input35" class="col-sm-3 col-form-label">Icon</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input35" placeholder="Icon link" name="Icon" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input36" class="col-sm-3 col-form-label">Heading</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input36" name="heading" placeholder="Heading"  required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="input37" class="col-sm-3 col-form-label">SubHeading</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" id="input37" placeholder="Subheading" name="Subheading" required>
                            </div>
                        </div>
                     
                       
                     
                        </div>
                     
                        <div class="row">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <div class="d-md-flex d-grid align-items-center gap-3">
    
                                    <button type="submit" class="btn btn-primary px-4" name="submit">Submit</button>
                             
                                </div>
                            </div>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>
    </div>
</div>
    <!--start overlay-->
@include('admin/footer')