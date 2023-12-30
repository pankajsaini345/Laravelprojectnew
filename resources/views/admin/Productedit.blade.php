@include('admin/header')
<div class="page-wrapper">
    <div class="page-content">
<div class="row">
    <div class="col-lg-8 mx-auto">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">Product</h5>
            </div>
            <div class="card-body p-4">
                <form id="jQueryValidationForm" method="post" action="{{route('Productupdate')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="input35" class="col-sm-3 col-form-label"> Product</label>
                        <input type="hidden" value="{{$editweb->id}}" name="id" class="form-control" id="bsValidation1" placeholder=" Name">
                        <div class="col-sm-9">
                          
                            <input type="text" class="form-control" id="input35" value="{{$editweb->name}}" placeholder="Enter Your Name" name="name" required>
                           
                        </div>
                    </div>
 
                    <div class="row mb-3">
                        <label for="input40" class="col-sm-3 col-form-label">price</label>
                     
                        <div class="col-sm-9">
                            <input type="number"  value="{{$editweb->price}}" class="form-control" id="input35"  name="price" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="input40" class="col-sm-3 col-form-label">Quality</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" value="{{$editweb->Quality}}" id="input35" placeholder="Enter Your Name" name="Quality" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="input37" class="col-sm-3 col-form-label">images</label>
                        <div class="col-sm-9">
                            <input type="file" class="form-control"   value="{{$editweb->images}}"  id="input37" name="images" placeholder="Email Address"  required>
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
@include('admin/footer')