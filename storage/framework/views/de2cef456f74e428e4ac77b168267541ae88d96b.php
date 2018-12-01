<?php $__env->startSection('content'); ?>

<div class="content">
	<div class="content-header">
		<div class="page-title">
			<h3>Barang</h3>
		</div>
		<div class="page-breadcumb">
			
			<nav aria-label="breadcrumb">
			  <ol class="breadcrumb">
			    <li class="breadcrumb-item"><a href="../">Home</a></li>
			    <li class="breadcrumb-item active" aria-current="page">Barang</li>
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
						 <form method="POST" action="<?php echo e(url('barang/update')); ?>">
				        	<?php echo csrf_field(); ?>
					      <div class="modal-body">
				        		<?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				        		<input type="hidden" value="<?php echo e($barang->id); ?>" name="id_barang"></input>
					          <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Nama Gudang:</label>
					            <input class="form-control" name="nama" value="<?php echo e($barang->nama); ?>"></input>
					          </div>
					          <div class="form-group">
					            <label for="recipient-name" class="col-form-label">Berat:</label>
					            <input type="number" name="berat" value="<?php echo e($barang->berat); ?>" class="form-control">
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