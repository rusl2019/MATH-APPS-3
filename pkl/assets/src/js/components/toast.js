/**
 * Menampilkan notifikasi toast.
 * @param {string} message - Pesan yang akan ditampilkan.
 * @param {'info'|'success'|'warning'|'error'} type - Tipe toast.
 * @param {number} duration - Durasi toast dalam milidetik.
 */
export function showToast(message, type = 'info', duration = 5000) {
    // 1. Buat Container jika belum ada
    // Ini memastikan kita hanya punya satu area untuk semua toast
    let toastContainer = document.getElementById('toast-container');
    if (!toastContainer) {
        toastContainer = document.createElement('div');
        toastContainer.id = 'toast-container';
        // Styling untuk container: pojok kanan atas, z-index tinggi, dll.
        toastContainer.className = 'fixed top-5 right-5 z-[100] space-y-3 w-full max-w-xs';
        document.body.appendChild(toastContainer);
    }

    // 2. Buat elemen Toast baru
    const toast = document.createElement('div');
    toast.id = `toast-${Date.now()}`; // ID unik untuk setiap toast

    // 3. Konfigurasi Ikon dan Warna berdasarkan Tipe
    const toastTypes = {
        success: {
            icon: `<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>`,
            classes: 'bg-green-100 text-green-700 dark:bg-green-800 dark:text-green-200'
        },
        error: {
            icon: `<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path></svg>`,
            classes: 'bg-red-100 text-red-700 dark:bg-red-800 dark:text-red-200'
        },
        warning: {
            icon: `<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.21 3.03-1.742 3.03H4.42c-1.532 0-2.492-1.696-1.742-3.03l5.58-9.92zM10 13a1 1 0 100-2 1 1 0 000 2zm-1-4a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>`,
            classes: 'bg-yellow-100 text-yellow-700 dark:bg-yellow-800 dark:text-yellow-200'
        },
        info: {
            icon: `<svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>`,
            classes: 'bg-blue-100 text-blue-700 dark:bg-blue-800 dark:text-blue-200'
        }
    };

    const config = toastTypes[type];

    // 4. Isi HTML untuk Toast
    toast.innerHTML = `
                <div class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                    <div class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 rounded-lg ${config.classes}">
                        ${config.icon}
                        <span class="sr-only">${type} icon</span>
                    </div>
                    <div class="ml-3 text-sm font-normal">${message}</div>
                    <button type="button" class="ml-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" aria-label="Close">
                        <span class="sr-only">Close</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/></svg>
                    </button>
                </div>
            `;

    // Tambahkan class untuk animasi masuk (mulai dari tidak terlihat)
    toast.className = 'transition-all duration-300 ease-in-out transform opacity-0 translate-x-full';

    // 5. Tambahkan ke DOM
    toastContainer.prepend(toast); // Gunakan prepend agar toast baru muncul di atas

    // 6. Jalankan animasi masuk
    // Diberi sedikit delay agar transisi bisa berjalan
    setTimeout(() => {
        toast.classList.remove('opacity-0', 'translate-x-full');
        toast.classList.add('opacity-100', 'translate-x-0');
    }, 100);

    // 7. Fungsi untuk menghapus Toast
    const removeToast = () => {
        // Animasi keluar
        toast.classList.remove('opacity-100', 'translate-x-0');
        toast.classList.add('opacity-0', 'translate-x-full');

        // Hapus elemen dari DOM setelah animasi selesai
        setTimeout(() => {
            toast.remove();
            // Hapus container jika sudah tidak ada toast di dalamnya
            if (toastContainer.children.length === 0) {
                toastContainer.remove();
            }
        }, 300); // Durasi harus sama dengan transisi
    };

    // 8. Event Listener untuk tombol close
    toast.querySelector('button').addEventListener('click', removeToast);

    // 9. Hapus otomatis setelah durasi tertentu
    setTimeout(removeToast, duration);
}

/**
 * Mencari elemen #toast di DOM dan menampilkan notifikasi berdasarkan
 * atribut data-nya. Berguna untuk flash message dari server.
 */
export function initializeToastFromElement() {
    const toastElement = document.getElementById('toast');
    if (toastElement) {
        const message = toastElement.dataset.message;
        const type = toastElement.dataset.type;
        if (message) {
            showToast(message, type);
        }
    }
}