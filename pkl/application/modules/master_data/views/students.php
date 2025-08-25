<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="mt-14">
	<nav class="flex" aria-label="Breadcrumb">
		<ol class="inline-flex items-center space-x-2 md:space-x-2 rtl:space-x-reverse">
			<li class="inline-flex items-center">
				<a href="<?php echo base_url(); ?>" class="inline-flex items-center text-base font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
					<svg class="w-3 h-3 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
						<path d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z" />
					</svg>
					Home
				</a>
			</li>
			<li>
				<div class="flex items-center">
					<svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
					</svg>
					<span class="ms-1 text-base font-medium text-gray-500 md:ms-2 dark:text-gray-400">Master Data</span>
				</div>
			</li>
			<li aria-current="page">
				<div class="flex items-center">
					<svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4" />
					</svg>
					<span class="ms-1 text-base font-medium text-gray-500 md:ms-2 dark:text-gray-400"><?php echo $title; ?></span>
				</div>
			</li>
		</ol>
	</nav>

	<div id="toast" data-message="Data berhasil disimpan!" data-type="success"></div>

	<div class="mt-2 bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
		<div class="flex justify-between items-center mb-4">
			<h1 class="text-xl font-semibold text-gray-900 dark:text-white"><?php echo $title; ?> Data</h1>
			<button data-modal-target="add-data-modal" data-modal-toggle="add-data-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
				Create
			</button>
		</div>

		<table id="studentDB" class="cell-border w-full text-sm text-left text-gray-900 dark:text-white">
			<thead>
				<tr>
					<th>NIM</th>
					<th>Nama</th>
					<th>Email</th>
					<th>Program Studi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>
</div>

<!-- Main modal -->
<div id="add-data-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
	<div class="relative p-4 w-full max-w-md max-h-full">
		<!-- Modal content -->
		<div class="relative bg-white rounded-lg shadow-sm dark:bg-gray-700">
			<!-- Modal header -->
			<div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600 border-gray-200">
				<h3 class="text-lg font-semibold text-gray-900 dark:text-white">
					Create Data <?php echo rtrim($title, 's'); ?>
				</h3>
				<button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="add-data-modal">
					<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
						<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
					</svg>
					<span class="sr-only">Close modal</span>
				</button>
			</div>
			<!-- Modal body -->
			<?php echo form_open(base_url('master_data/students/create'), ['id' => 'form-add-student', 'class' => 'p-4 md:p-5']); ?>
			<div class="grid gap-4 mb-4 grid-cols-2">
				<div class="col-span-2">
					<label for="id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIM</label>
					<input type="text" name="id" id="id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
				</div>
				<div class="col-span-2">
					<label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email UB</label>
					<input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
				</div>
				<div class="col-span-2">
					<label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
					<input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
				</div>
				<div class="col-span-2">
					<label for="study_program_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Program Studi</label>
					<select id="study_program_id" name="study_program_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="">
						<option selected="">Pilih Program Studi</option>
						<option value="1">Sarjana Matematika</option>
						<option value="3">Sarjana Ilmu Aktuaria</option>
					</select>
				</div>
			</div>
			<button type="submit" class="text-white mt-2 inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
				<svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
					<path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
				</svg>
				Add new <?php echo rtrim($title, 's'); ?>
			</button>
			<?php echo form_close(); ?>
		</div>
	</div>
</div>