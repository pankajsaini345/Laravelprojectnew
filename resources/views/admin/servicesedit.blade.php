@include('admin/header')


<!--end breadcrumb-->
<div class="row">
    <div class="col-xl-6 mx-auto">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">Bootstrap Validation</h5>
            </div>
            <div class="card-body p-4">
                <form class="row g-3 needs-validation" action="{{route('Serviceupdate')}}"  enctype='multipart/form-data' method="post">
                    @csrf
                    <div class="col-md-12">
                        <label for="bsValidation1" class="form-label">Icon</label>
                        <input type="hidden" value="{{$editser->id}}" name="id" class="form-control" id="bsValidation1" placeholder=" Name">
                        <input type="text" value="{{$editser->Icon}}" name="Icon" class="form-control" id="bsValidation1">
                    </div>

                 
                     
                    
                    <div class="col-md-12">
                        <label for="bsValidation1" class="form-label">heading</label>
                        <input type="text" value="{{$editser->heading}}" name="heading" class="form-control" id="bsValidation1">
                      
                    </div>
                    <div class="col-md-12">
                        <label for="bsValidation1" class="form-label">Subheading</label>
                        <input type="text" value="{{$editser->Subheading}}" name="Subheading" class="form-control" id="bsValidation1"  >
                      
                    </div>
                  
                   
                   
                    
                    <div class="col-md-12">
                        <div class="d-md-flex d-grid align-items-center gap-3">
                            <button type="submit" class="btn btn-primary px-4">Submit</button>
                           
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!--end row-->


@include('admin/footer')
