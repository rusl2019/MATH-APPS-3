import DataTable from 'datatables.net-dt';
import 'datatables.net-responsive-dt';
import { createButton } from '../utils/datatable-helpers.js';

export function initializeDataTables() {
    // Inisialisasi tabel statis
    if (document.getElementById('myTable')) {
        new DataTable('#myTable', {
            responsive: true,
        });
    }

    // Inisialisasi tabel Mahasiswa
    if (document.getElementById('studentDB')) {
        new DataTable('#studentDB', {
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: `${window.location.origin}/pkl/master_data/students/get_data`,
                type: "POST",
            },
            columns: [
                { data: "id" }, { data: "name" }, { data: "email" }, { data: "study_program" },
                {
                    data: null, orderable: false, searchable: false,
                    render: (data, type, row) => createButton(row)
                }
            ],
        });
    }

    // Inisialisasi tabel Dosen
    if (document.getElementById('lecturerDB')) {
        new DataTable('#lecturerDB', {
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: `${window.location.origin}/pkl/master_data/lecturers/get_data`,
                type: "POST",
            },
            columns: [
                { data: "id" }, { data: "name" }, { data: "email" }, { data: "rank" }, { data: "position" },
                {
                    data: null, orderable: false, searchable: false,
                    render: (data, type, row) => createButton(row)
                }
            ],
        });
    }

    // Inisialisasi tabel Staff
    if (document.getElementById('staffDB')) {
        new DataTable('#staffDB', {
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: {
                url: `${window.location.origin}/pkl/master_data/staffs/get_data`,
                type: "POST",
            },
            columns: [
                { data: "id" }, { data: "name" }, { data: "email" },
                {
                    data: null, orderable: false, searchable: false,
                    render: (data, type, row) => createButton(row)
                }
            ],
        });
    }
}