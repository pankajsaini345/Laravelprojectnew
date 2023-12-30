@include('admin/header')
     <!--end breadcrumb-->
     <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>
<div class="row">
    <div class="col-xl-6 mx-auto">
        <div class="card">
            <div class="card-header px-4 py-3">
                <h5 class="mb-0">Bootstrap Validation</h5>
            </div>
            <div class="card-body p-4">
                <form class="row g-3 needs-validation"  enctype='multipart/form-data' method="post">
                    @csrf
                     

                   <div class="col-md-12">
                       <label for="bsValidation1" class="form-label">Contant </label>
                     <textarea name="Contant" id="editor"></textarea>
                    </div>
                    
                   <div class="col-md-12">
                        <label for="bsValidation1" class="form-label">slidebar</label>
                        <input type="file" name="images" class="form-control" id="bsValidation1" placeholder=" Name" required>
                      
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
<script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script>

<script>
        ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                        console.log( editor );
                } )
                .catch( error => {
                        console.error( error );
                } );
</script>