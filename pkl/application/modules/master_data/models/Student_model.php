<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_model extends CI_Model
{
    private $table_name;

    public function __construct()
    {
        parent::__construct();
        $this->table_name = 'apps_students';
    }

    public function create(array $data): bool
    {
        return $this->db->insert($this->table_name, $data);
    }

    public function read(int $id): array
    {
        $query = $this->db->get_where($this->table_name, ['id' => $id]);
        if ($query->num_rows() > 0) {
            return $query->row_array();
        }
        return [];
    }

    public function update(int $id, array $data): bool
    {
        return $this->db->update($this->table_name, $data, ['id' => $id]);
    }

    public function delete(int $id): bool
    {
        return $this->db->update($this->table_name, ['deleted_at' => date('Y-m-d H:i:s')], ['id' => $id]);
    }

    public function get_data(): array
    {
        $this->load->library('DataTables');

        $column = [
            "{$this->table_name}.id",
            "{$this->table_name}.name",
            "{$this->table_name}.email",
            'apps_study_programs.name as study_program',
        ];
        $filter = [];
        $where = [];
        $joins = [
            ['apps_study_programs', "apps_study_programs.id = {$this->table_name}.study_program_id", 'left']
        ];
        $search = [
            "{$this->table_name}.id",
            "{$this->table_name}.name",
            "{$this->table_name}.email",
            'apps_study_programs.name',
        ];
        $order_columns = [
            "{$this->table_name}.id",
            "{$this->table_name}.name",
            "{$this->table_name}.email",
            'apps_study_programs.name',
        ];
        $or_where = [];

        return $this
            ->datatables
            ->get_data($this->table_name, $column, $filter, $where, $joins, $search, $order_columns, $or_where);
    }
}
