@include('admin/header')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="page-wrapper">
    <div class="page-content">
        <h6 class="text-uppercase"> home tables</h6>
        <div class="col text-end mb-5">
			<a href="Services">  <button type="button" class="btn btn-primary px-5">Services</button></a>
        </div>
						<hr/>
						<div class="card">
							<div class="card-body">
								<table class="table table-bordered mb-0">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Icon</th>
                                            <th scope="col">heading</th>
                                            <th scope="col">Subheading</th>
                                        
                                       
										</tr>
									</thead>
									<tbody>
                                        <?php

                                        $users = DB::table('services')->get();
                                        
                                        ?>
                                        
                                              @foreach($users as $value)
										<tr>
                                            <td>{{ $value->id }}</td>
                                            <td>{!! $value->Icon !!} </td>
                                            <td> {{$value->heading}}</td> 
                                            <td> {{$value->Subheading}}</td> 
                                            
                                           
                                       
                                             <td>	
                                                <td><a href="servicesedit/{{ $value->id }}" class="btn btn-success px-5">edit</a>
                                                
                                                    <td><a href="deleteService/{{ $value->id }}" class="btn btn-outline-danger">delete</a></td>   
                                             
                                           </td>
                                        @endforeach 
									</tbody>
								</table>
							</div>
						</div>
                    </div>
                </div>
                @include('admin/footer')