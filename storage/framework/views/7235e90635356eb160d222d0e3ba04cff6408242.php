<?php $__env->startSection('content'); ?>
Detail mahasiswa
	<table border="1">
		<tr>
			<td>ID</td>
			<td>:</td>
			<td><?php echo e($detail_mahasiswa->id); ?></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo e($detail_mahasiswa->nama); ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo e($detail_mahasiswa->alamat); ?></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><?php echo e($detail_mahasiswa->jurusan); ?></td>
		</tr>
	<table>
		<?php echo e(link_to('/','Back')); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>