<?php $__env->startSection('content'); ?>

<div class="content">
	<div class="content-header">
		<div class="page-title">
			<h3>Barang</h3>
		</div>
		<div class="page-breadcumb">
			
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="#">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Barang</li>
			  </ol>
			</nav>
		</div>
	</div>			
	<div class="content-body">
		
		<section  class="chart">
			<div class="panel">
				<div class="panel-header d-flex align-items-center justify-content-between">
						<div class="panel-title">
							<i class="fa fa-balance-scale">Daftar Barang</i> 	   
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
									<th>Nama</th>
									<th>Berat</th>
									<th>Gudang</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<tr>
									<td><?php echo e($loop->iteration); ?></td>
									<td><?php echo e($barang->nama); ?></td>
									<td><?php echo e($barang->berat); ?> KG</td>
									<td><?php echo e($barang->gudang->nama); ?></td>
									<td>
										<a href="barang/edit/<?php echo e($barang->id); ?>"><i class="fa fa-edit">Edit</i> </a>
										<a href="barang/delete/<?php echo e($barang->id); ?>"><i class="fa fa-trash">Delete</i> </a>
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
        <h5 class="modal-title" id="exampleModalLabel">Tambah barang</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form method="POST" action="<?php echo e(url('barang/add')); ?>">
        	<?php echo csrf_field(); ?>
	      <div class="modal-body">
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Nama Barang:</label>
	            <input class="form-control" name="nama"></input>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Berat:</label>
	            <input class="form-control" type="number" name="berat"></input>
	          </div>
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label">Gudang:</label>
	            <select class="form-control" name="gudang_id">
	            	<option>Pilih salah satu..</option>
	            	<?php $__currentLoopData = $gudangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gudang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	            	<option value="<?php echo e($gudang->id); ?>"><?php echo e($gudang->nama); ?></option>
	            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	            </select>
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