<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

	<!-- Logika untuk Dark Mode -->
	<script>
		if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
			document.documentElement.classList.add('dark');
		} else {
			document.documentElement.classList.remove('dark')
		}
	</script>
</head>

<body class="bg-gray-50 dark:bg-gray-900 antialiased">
	<!-- 
    Navbar component from Flowbite
    -->
	<nav class="fixed top-0 z-50 w-full bg-white border-b border-gray-200 dark:bg-gray-800 dark:border-gray-700">
		<div class="px-3 py-3 lg:px-5 lg:pl-3">
			<div class="flex items-center justify-between">
				<div class="flex items-center justify-start rtl:justify-end">
					<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
						<span class="sr-only">Open sidebar</span>
						<svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
							</path>
						</svg>
					</button>
					<a href="https://flowbite.com" class="flex ms-2 md:me-24">
						<img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
						<span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Flowbite</span>
					</a>
				</div>
				<div class="flex items-center">
					<button id="theme-toggle" type="button" class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
						<svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
						</svg>
						<svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
							<path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path>
						</svg>
					</button>
					<div class="flex items-center ms-3">
						<div>
							<button type="button" class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600" aria-expanded="false" data-dropdown-toggle="dropdown-user">
								<span class="sr-only">Open user menu</span>
								<img class="w-8 h-8 rounded-full" src="https://placehold.co/32x32/1e429f/ffffff?text=U" alt="user photo">
							</button>
						</div>
						<div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-sm shadow-sm dark:bg-gray-700 dark:divide-gray-600" id="dropdown-user">
							<div class="px-4 py-3" role="none">
								<p class="text-sm text-gray-900 dark:text-white" role="none">
									Neil Sims
								</p>
								<p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
									neil.sims@flowbite.com
								</p>
							</div>
							<ul class="py-1" role="none">
								<li>
									<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Dashboard</a>
								</li>
								<li>
									<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Settings</a>
								</li>
								<li>
									<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Earnings</a>
								</li>
								<li>
									<a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white" role="menuitem">Sign out</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</nav>

	<!-- 
    Sidebar component from Flowbite
    -->
	<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
		<div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
			<ul class="space-y-2 font-medium">
				<li>
					<a href="#" class="bg-gray-100 dark:bg-gray-700 flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
						<svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
							<path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
							<path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
						</svg>
						<span class="ms-3">Dashboard</span>
					</a>
				</li>
				<li>
					<button type="button" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-master-data" data-collapse-toggle="dropdown-master-data">
						<svg class="shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
							<path d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z" />
							<path d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z" />
						</svg>
						<span class="flex-1 ms-3 text-left whitespace-nowrap">Master Data</span>
						<svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
						</svg>
					</button>
					<ul id="dropdown-master-data" class="hidden py-2 space-y-2">
						<li>
							<a href="<?php echo site_url('master_data/lecturers'); ?>" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lecturers</a>
						</li>
						<li>
							<a href="<?php echo site_url('master_data/modules'); ?>" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Modules</a>
						</li>
						<li>
							<a href="<?php echo site_url('master_data/roles'); ?>" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Roles</a>
						</li>
						<li>
							<a href="<?php echo site_url('master_data/role_access'); ?>" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Role Access</a>
						</li>
						<li>
							<a href="<?php echo site_url('master_data/staffs'); ?>" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Staffs</a>
						</li>
						<li>
							<a href="<?php echo site_url('master_data/students'); ?>" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Students</a>
						</li>
						<li>
							<a href="<?php echo site_url('master_data/study_programs'); ?>" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Study Programs</a>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</aside>

	<!-- 
    Main component from Flowbite
    -->
	<main class="p-4 sm:ml-64 min-h-screen">
		<div class="mt-14 space-y-4">
			<div>
				<h1 class="text-2xl font-bold text-gray-900 dark:text-white">Dashboard Overview</h1>
				<p class="text-gray-500 dark:text-gray-400">Welcome back, Neil Sims!</p>
			</div>

			<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
				<div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
					<h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Total Revenue</h3>
					<p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">$45,231.89</p>
				</div>
				<div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
					<h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Subscriptions</h3>
					<p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">+2,350</p>
				</div>
				<div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
					<h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Sales</h3>
					<p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">+12,234</p>
				</div>
				<div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
					<h3 class="text-sm font-medium text-gray-500 dark:text-gray-400">Active Users</h3>
					<p class="text-3xl font-bold text-gray-900 dark:text-white mt-2">972</p>
				</div>
			</div>

			<div class="bg-white dark:bg-gray-800 p-4 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
				<h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-4">Recent Transactions</h3>
				<div class="relative overflow-x-auto">
					<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
						<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
							<tr>
								<th scope="col" class="px-6 py-3">Product name</th>
								<th scope="col" class="px-6 py-3">Date</th>
								<th scope="col" class="px-6 py-3">Price</th>
								<th scope="col" class="px-6 py-3">Status</th>
							</tr>
						</thead>
						<tbody>
							<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
								<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple
									MacBook Pro 17"</th>
								<td class="px-6 py-4">Aug 22, 2025</td>
								<td class="px-6 py-4">$2999</td>
								<td class="px-6 py-4"><span class="bg-green-100 text-green-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">Completed</span>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</main>

	<!-- 
    Footer component from Flowbite
    -->
	<footer class="p-4 sm:ml-64">
		<div class="bg-white rounded-lg shadow-sm dark:bg-gray-800">
			<div class="w-full mx-auto max-w-screen p-4 md:flex md:items-center md:justify-between">
				<span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2025 <a href="https://flowbite.com/" class="hover:underline">Flowbite™</a>. All Rights Reserved.
				</span>
				<ul class="flex flex-wrap items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0">
					<li>
						<a href="#" class="hover:underline me-4 md:me-6">About</a>
					</li>
					<li>
						<a href="#" class="hover:underline me-4 md:me-6">Privacy Policy</a>
					</li>
					<li>
						<a href="#" class="hover:underline me-4 md:me-6">Licensing</a>
					</li>
					<li>
						<a href="#" class="hover:underline">Contact</a>
					</li>
				</ul>
			</div>
		</div>
	</footer>

	<script src="<?php echo base_url('assets/js/flowbite.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>
</body>

</html>