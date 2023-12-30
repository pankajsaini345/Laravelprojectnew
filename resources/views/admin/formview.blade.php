@include('admin/header')
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="text-uppercase">Bordered tables</h6>
        <div class="col text-end mb-5">
            <a href="form">  <button type="button" class="btn btn-primary px-5">Add  form User</button></a>
                
        </div>
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">header</th>
                                            <th scope="col">Logo</th>
                                            <th scope="col">slide</th>
                                       
										</tr>
									</thead>
									<tbody>
                                        <?php
                                        $users = DB::table('webdatas')->get();
                                       ?>
                                              @foreach($users as $value)
										<tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{{ $value->header }}</td>
                                            <td><img src="{{url('logoimages/'.$value->image)}}" width="33px" alt=""></td>
                                           
                                             <td>	
                                                <td><a href="formedit/{{ $value->id }}" class="btn btn-success px-5">edit</a>
                                             
                                           </td>
                                        @endforeach 
									</tbody>
								</table>
							</div>
						</div>
                    </div>
                </div>
                @include('admin/footer')