@include('admin/header')
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
								<li class="breadcrumb-item active" aria-current="page">To Do List</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="card">
					<div class="card-body">
						<h4 class="mb-0">To Do List</h4>
						<hr/>
						<div class="row gy-3">
							<div class="col-md-10">
								<input id="todo-input" type="text" class="form-control" value="">
							</div>
							<div class="col-md-2 text-end d-grid">
								<button type="button" onclick="CreateTodo();" class="btn btn-primary">Add todo</button>
							</div>
						</div>
						<div class="form-row mt-3">
							<div class="col-12">
								<div id="todo-container"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end page wrapper -->
@include('admin/footer')