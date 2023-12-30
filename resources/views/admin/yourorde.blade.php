@include('admin/header')
{{-- <div class="page-wrapper">
    
    <div class="page-content">
      
        <div class="container">
       
                    <div class="row">
                        <div class="col-md-2 col-lg-4 col-sm-4">
                            <img src="/homecss/images/demos/demo9/blog/4.jpg"width="30" height="40" style="background-color: #E4E8EB;">
                           <span>chilled jar</span>
                        </div>
                       
                          
                        <div class="col-md-8 col-lg-4 col-sm-4"></div>
                      
                        <div class="col-md-2 col-lg-4 col-sm-4">
                            <button type="button" class="btn btn-primary mb-5">Primary</button>
                       </div>
                    </div>
                 
               
                 <div class="row">
                   <div class="col-md-2 col-lg-4 col-sm-4 ms-auto">
                    <img src="/homecss/images/demos/demo9/blog/4.jpg"width="30" height="40" style="background-color: #E4E8EB;">
                   <span>capsule jar</span>
                 </div>
               
                  
                <div class="col-md-8 col-lg-4 col-sm-4"></div>
              
                <div class="col-md-2 col-lg-4 col-sm-4 mt-3">
                    <button type="button" class="btn btn-primary">Primary</button>
               </div>
          
         
       </div>  
           
        </div>
    </div>
</div>				 --}}




<!--start page wrapper -->
<div class="page-wrapper">
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Applications</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Invoice</li>
                    </ol>
                </nav>
            </div>
            <div class="ms-auto">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary">order</button>
                  
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
                        
                    </div>
                </div>
            </div>
        </div>
        <!--end breadcrumb-->
        <div class="card">
            <div class="card-body">
                <div id="invoice">
                    <div class="toolbar hidden-print">
                        <img src="/homecss/images/demos/demo9/blog/4.jpg"width="30" height="40" style="background-color: #E4E8EB;">
                        <span>chilled jar</span>
                    </div>
                        <div class="text-end">
                            <p style="margin-top:-44px"> <button type="button" class="btn btn-dark" ><i class="fa fa-print"></i> 2</button></p>
                           
                           
                        </div>
                        <hr/>
                 
                   
                </div>

                <div id="invoice">
                    <div class="toolbar hidden-print">
                        <img src="/homecss/images/demos/demo9/blog/4.jpg"width="30" height="40" style="background-color: #E4E8EB;">
                        <span>capsule jar</span>
                    </div>
                        <div class="text-end">
                            <p style="margin-top: -44px"> <button type="button" class="btn btn-dark" ><i class="fa fa-print"></i> 1</button></p>
                           
                           
                        </div>
                        <hr/>
                 
                   
                </div>
            </div>
        </div>
    </div>
</div>
<!--end page wrapper -->
@include('admin/footer')