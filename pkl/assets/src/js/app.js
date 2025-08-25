// Import library pihak ketiga
import "flowbite";
import jQuery from "jquery";
import moment from 'moment';

// Import modul lokal
import { initializeDataTables } from './datatables/init.js';
import { initializeToastFromElement } from './components/toast.js';
import './components/theme-toggle.js'; // Cukup di-import untuk langsung berjalan

// Inisialisasi komponen saat DOM siap
document.addEventListener('DOMContentLoaded', () => {
    initializeToastFromElement();
    initializeDataTables();
});