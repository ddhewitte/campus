<?php $__env->startSection('content'); ?>
Tambah mahasiswa
<?php echo Form::open(['url' => 'home']); ?>

	<table border="1">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?php echo Form::text('nama'); ?></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td>:</td>
			<td><?php echo Form::text('alamat'); ?></td>
		</tr>
		<tr>
			<td>Jurusan</td>
			<td>:</td>
			<td><?php echo Form::text('jurusan'); ?></td>
		</tr>
		<tr>
			<td></td>
			<td>:</td>
			<td><?php echo Form::submit('input'); ?></td>
		</tr>
	</table>
		<?php echo form::close(); ?>

		<?php echo e(link_to('/','Back')); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>