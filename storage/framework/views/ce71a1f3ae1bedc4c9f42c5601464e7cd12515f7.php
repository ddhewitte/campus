<?php $__env->startSection('content'); ?>
Selamat datang di website list mahasiswa
	<table border="1">
		<tr>
			<td>ID</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Jurusan</td>
		</tr>
		<?php foreach($list_mahasiswa as $val) { ?>
		<tr>
			<td><?php echo e($val->id); ?></td>
			<td><?php echo e($val->nama); ?></td>
			<td><?php echo e($val->alamat); ?></td>
			<td><?php echo e($val->jurusan); ?></td>
		</tr>
		<?php } ?>
	<table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>