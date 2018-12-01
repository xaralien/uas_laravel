<?php $__env->startSection('content'); ?>

<div class="content">
	<div class="content-header">
		<div class="page-title">
			<h3>Gudang</h3>
		</div>
		<div class="page-breadcumb">
			
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Gudang</li>
			  </ol>
			</nav>
		</div>
	</div>			
	<div class="content-body">
		
		<section  class="chart">
			<div class="panel">
				<div class="panel-header d-flex align-items-center justify-content-between">
						<div class="panel-title">
							<i class="fa fa-cogs">Daftar gudang</i> 	   
						</div>
						<div>
							<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo"><i class="fa fa-plus-square">Tambah</i></button>
						</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-6">

						</div>
						<div class="col-md-6">
							<div class="form">
								
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>ID</th>
									<th>Alamat</th>
									<th>Kapasitas</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $gudang; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gudangs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($gudangs->id); ?></td>
									<td><?php echo e($gudangs->alamat); ?></td>
									<td><?php echo e($gudangs->kapasitas); ?></td>
									<td>
										<a href="gudang/edit/<?php echo e($gudangs->id); ?>"><i class="fa fa-edit">Edit</i> </a>
										<a href="gudang/delete/<?php echo e($gudangs->id); ?>"><i class="fa fa-trash">Delete</i> </a>
									</td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</section>
	</div>			
</div>
<div class="modal fade tambah-exam" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add new Exam</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="POST" action="<?php echo e(url('gudang')); ?>">
        	<?php echo csrf_field(); ?>
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Nama Gudang:</label>
	            <input class="form-control" name="nama"></input>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Alamat Gudang:</label>
	            <textarea class="form-control" name="alamat"></textarea>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Kapasitas:</label>
	            <input type="number" name="kapasitas" class="form-control" id="recipient-name">
	          </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Tambah</button>
	      </div>
       </form>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>