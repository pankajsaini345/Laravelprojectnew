@include('admin/header')
<div class="container">
    <div class="page-wrapper">
        <div class="page-content">
       
           
                <form method="POST">
                    @csrf
                    
                    <div class="mt-0">
                    
                      <label class="form-label">name</label>
                      <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                   
                    </div>
                    <div class="">
                    
                        <label  class="form-label">phone</label>
                        <input type="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                      </div>
                      <div class="">
                    
                        <label class="form-label">Username</label>
                        <input type="Username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        
                      </div>
                      <div class="">
                    
                        <label for="exampleInputEmail1" class="form-label">Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                      </div>
                     
                    <div class="">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="">
                        <label for="exampleInputPassword1" class="form-label">Confirm_Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                      </div>
                    
                      <div class="">
                        <label for="exampleInputPassword1" class="form-label">img</label>
                        <input type="img" class="form-control" id="exampleInputPassword1">
                      </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@include('admin/footer')




