<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="mt-14 space-y-4">
	<div>
		<h1 class="text-2xl font-bold text-gray-900 dark:text-white">Dashboard</h1>
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
			<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
				<thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
					<tr>
						<th scope="col" class="px-6 py-3">
							Product name
						</th>
						<th scope="col" class="px-6 py-3">
							Color
						</th>
						<th scope="col" class="px-6 py-3">
							Category
						</th>
						<th scope="col" class="px-6 py-3">
							Price
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							Apple MacBook Pro 17"
						</th>
						<td class="px-6 py-4">
							Silver
						</td>
						<td class="px-6 py-4">
							Laptop
						</td>
						<td class="px-6 py-4">
							$2999
						</td>
					</tr>
					<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							Microsoft Surface Pro
						</th>
						<td class="px-6 py-4">
							White
						</td>
						<td class="px-6 py-4">
							Laptop PC
						</td>
						<td class="px-6 py-4">
							$1999
						</td>
					</tr>
					<tr class="bg-white dark:bg-gray-800">
						<th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
							Magic Mouse 2
						</th>
						<td class="px-6 py-4">
							Black
						</td>
						<td class="px-6 py-4">
							Accessories
						</td>
						<td class="px-6 py-4">
							$99
						</td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
</div>