@include('admin/header')
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="text-uppercase"> home tables</h6>
        <div class="col text-end mb-5">
          
        </div>
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">#</th>
                                            <th scope="col">lago images</th>
                                        
                                       
										</tr>
									</thead>
                                    <tbody>
                                        <?php
                                        $users = DB::table('logos')->get();
                                       ?>
                                              @foreach($users as $value)
										<tr>
                                            <td>{{ $value->id }}</td>
                                            <td><img src="{{url('logoimages/'.$value->images)}}" width="33px" alt=""></td>
                                           
                                       
                                             <td>	
                                                <td><a href="logoedit/{{ $value->id }}" class="btn btn-success px-5">edit</a>
                                             
                                           </td>
                                        @endforeach 
									</tbody>
								</table>
							</div>
						</div>
                    </div>
                </div>
                @include('admin/footer')