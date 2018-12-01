<?php $__env->startSection('content'); ?>

<div class="content">
	<div class="content-header">
		<div class="page-title">
			<h3>Gudang</h3>
		</div>
		<div class="page-breadcumb">
			
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="../">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Gudang</li>
			    <li class="breadcrumb-item active" aria-current="page">Edit</li>
			  </ol>
			</nav>
		</div>
	</div>			
	<div class="content-body">
		
		<section  class="chart">
			<div class="panel">
				<div class="panel-header d-flex align-items-center justify-content-between">
						<div class="panel-title">
							<i class="fa fa-book"></i> 	   Ubah Gudang
						</div>
						<div>
							
						</div>
				</div>
				<div class="panel-body">
					<div class="form">
						 <form method="POST" action="<?php echo e(url('gudang/update')); ?>">
				        	<?php echo csrf_field(); ?>
					      <div class="modal-body">
				        		<?php $__currentLoopData = $gudangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gudang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				        		<input type="hidden" value="<?php echo e($gudang->id); ?>" name="id_gudang"></input>
					          <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Nama Gudang:</label>
					            <input class="form-control" name="nama" value="<?php echo e($gudang->nama); ?>"></input>
					          </div>
					          <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Alamat:</label>
					            <textarea class="form-control" name="alamat"><?php echo e($gudang->alamat); ?></textarea>
					          </div>
					          <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Kapasitas:</label>
					            <input class="form-control" name="kapasitas" type="number" value="<?php echo e($gudang->kapasitas); ?>"></input>
					          </div>
					          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					      <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					        <button type="submit" class="btn btn-primary">Ubah</button>
					      </div>
				       </form>
					</div>			
				</div>
			</div>
		</section>
	</div>			
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>