<?php $__env->startSection('content'); ?>
Pencarian : | <?php echo e(link_to('home/add_new' ,'Input baru ', ['class' => 'none'])); ?><br>
Selamat datang di website list mahasiswa
	<table border="1">
		<tr bgcolor="grey">
			<td>ID</td>
			<td>Nama</td>
			<td>Alamat</td>
			<td>Jurusan</td>
			<td>Foto</td>
			<td>Action</td>
		</tr>
		<?php foreach($list_mahasiswa as $val) { ?>
		<tr>
			<td><?php echo e($val->id); ?></td>
			<td><?php echo e($val->nama); ?></td>
			<td><?php echo e($val->alamat); ?></td>
			<td><?php echo e($val->jurusan); ?></td>
			<td><?php echo e($val->foto); ?></td>
			<td><?php echo e(link_to('home/'.$val->id ,'Detail', ['class' => 'none'])); ?> | Ubah | Hapus</td>
		</tr>
		<?php } ?>
	</table>
	Total : <?php echo e($total_mahasiswa); ?> <br>
	Halaman : 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>