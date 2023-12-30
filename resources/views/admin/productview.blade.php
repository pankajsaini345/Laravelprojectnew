@include('admin/header')
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="text-uppercase">Product tables</h6>
        <div class="col text-end mb-5">
            <a href="product">  <button type="button" class="btn btn-primary px-5">Add Product</button></a>
          
        </div>
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">name</th>
											<th scope="col">price</th>
											<th scope="col">Quality</th>
                                            <th scope="col">img</th>
                              <?php
                                        $users = DB::table('products')->get();
                                       ?>
                                              @foreach($users as $value)
										<tr>
                                       

                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->price}}</td>
                                            <td>{{ $value->Quality}}</td>
                                            
                                            <td><img src="{{url('cardimages/'.$value->images)}}"  class="images -responsive" style="mix-heghit:100px; max-width:33px;"></td>
                                            
                                            <td><a href="Productupdate/{{ $value->id }}" class="btn btn-outline-primary">Update</a></td>
                                         
                                            <td><a href="deleteproduct/{{ $value->id }}" class="btn btn-outline-danger">delete</a></td>   
                                                
                                                <td>
                                                   {{-- <form action="/delete/{{ $value->id }}" method="post">
                                                          
                                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('are you sure')">delete</button>
                                                   @csrf
                                                   @method('delete')
                                                </form> --}}
                                          
                                        @endforeach              
										</tr>
									</thead>
									<tbody>
                                       
									</tbody>
								</table>
							</div>
						</div>
                    </div>
                </div>
                @include('admin/footer')