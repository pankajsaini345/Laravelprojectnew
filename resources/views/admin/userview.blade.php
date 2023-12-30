@include('admin/header')
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="text-uppercase">Bordered tables</h6>
        <div class="col text-end mb-5">
            <a href="user">  <button type="button" class="btn btn-primary px-5">Add User</button></a>
          
        </div>
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">name</th>
											<th scope="col">phone</th>
											<th scope="col">Username</th>
                                            <th scope="col">email</th>
											<th scope="col">Password</th>
											<th scope="col">Confirm_Password</th>
                                            <th scope="col">Country</th>
                                            <th scope="col">img</th>
                                            <th scope="col">Updete</th>
                                            <th scope="col">delete</th>
										</tr>
									</thead>
									<tbody>
                                        <?php
                                        $users = DB::table('customers')->get();
                                       ?>
                                              @foreach($users as $value)
										<tr>
                                       

                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->name }}</td>
                                            <td>{{ $value->phone}}</td>
                                            <td>{{ $value->Username}}</td>
                                            <td>{{ $value->email}}</td>
                                            <td>{{ $value->Password}}</td>
                                            <td>{{ $value->Confirm_Password}}</td>
                                            <td>{{ $value->Country}}</td>
                                            <td><img src="/uploads/{{ $value->img}}"  class="img-responsive" style="mix-heghit:100px; max-width:33px;"></td>
                                            <td><a href="/Update/{{ $value->id }}" class="btn btn-outline-primary">Update</a></td>
                                            <td><a href="delete/{{ $value->id }}" class="btn btn-outline-danger">delete</a></td>   
                                                
                                                <td>
                                                   {{-- <form action="/delete/{{ $value->id }}" method="post">
                                                          
                                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('are you sure')">delete</button>
                                                   @csrf
                                                   @method('delete')
                                                </form> --}}
                                          
                                        @endforeach 
									</tbody>
								</table>
							</div>
						</div>
                    </div>
                </div>
                @include('admin/footer')