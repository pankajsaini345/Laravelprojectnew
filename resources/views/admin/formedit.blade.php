@include('admin/header')

<!--end breadcrumb-->
<div class="row">
    <div class="col-xl-6 mx-auto">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">Bootstrap Validation</h5>
            </div>
            <div class="card-body p-4">
                <form class="row g-3 needs-validation" action="{{route('update')}}"  enctype='multipart/form-data' method="post">
                    @csrf
                    <div class="col-md-12">
                        <label for="bsValidation1" class="form-label">header </label>
                        <input type="hidden" value="{{$editweb->id}}" name="id" class="form-control" id="bsValidation1" placeholder=" Name"  >
                        <input type="text" value="{{$editweb->header}}" name="header" class="form-control" id="bsValidation1" placeholder=" Name"  >
                      
                    </div>

                   <div class="col-md-12">
                        <label for="bsValidation1" class="form-label">Logo</label>
                        <input type="file" value="{{$editweb->image}}" name="image" class="form-control" id="bsValidation1" placeholder=" Name" >
                      
                    </div>
                    
                    <div class="col-md-12">
                        <label for="bsValidation1" class="form-label">slide</label>
                        <input type="file" value="{{$editweb->slide}}" name="slide" class="form-control" id="bsValidation1" placeholder=" slide" >
                      
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
