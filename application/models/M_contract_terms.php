<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_contract_terms extends CI_Model
{
    function get_data()
    {
        $table = "cp_master_contract_terms";
        $id = "id";
        $field = array('title', 'contract_terms');
        $url = 'C_contract_terms';
        $action = '<a href="' . site_url($url . "/form/xid") . '" class="btn btn-info"> <i class="fa fa-edit"></i></a> <a href="' . site_url($url . "/delete/xid") . '" class="btn btn-danger"> <i class="fas fa-trash-alt"></i></a>';
        $jfield = join(', ', $field);
        $start = (@$_POST['start'] == '') ? 0 : $_POST['start'];
        $length = (@$_POST['length'] == '') ? 10 : $_POST['length'];
        $limit = "LIMIT $start, $length";
        $join = "";
        if (@$arrjoin != "") {
            foreach ($arrjoin as $jkey => $jvalue) {
                $arrjoin2[] = $jvalue;
            }
            $join = join(' ', $arrjoin2);
        }
        $where = "";
        $where2 = "";
        $search = $_POST['search']['value'];
        $arrwhere2 = @$arrwhere;
        if (@$arrwhere2 != '') $where2 = 'WHERE ' . join(' AND ', $arrwhere2);
        if (@$search != "") {
            foreach ($field as $key => $value) {
                $arrfield[] = "$value LIKE '%$search%'";
            }
            $arrwhere[] = '(' . join(' OR ', $arrfield) . ')';
        }
        if (@$arrwhere != '') $where = 'WHERE ' . join(' AND ', $arrwhere);
        $ix = '0';
        foreach (@$_POST['order'] as $key2 => $value2) {
            if ($value2['column'] != "0") {
                if ($ix == '0') $arrorder = array();
                $ix++;
            }
            $arrorder[] = ($value2['column'] + 1) . ' ' . $value2['dir'];
        }
        $order = 'ORDER BY ' . join(', ', $arrorder);
        $data = array();
        $jum_all = $this->db->query("SELECT COUNT($id) as jum FROM $table $join $where2")->row_array();
        $jum_filter = $this->db->query("SELECT COUNT($id) as jum FROM $table $join $where")->row_array();
        $result = $this->db->query("SELECT $id, $jfield FROM $table $join $where $order $limit")->result_array();

        $i = $start;
        $dataxy = array();
        foreach ($result as $keyr => $valuer) {
            $i++;
            $datax = array();
            $datax[] = $i;
            foreach ($field as $keyfield) {
                if ($keyfield == 'contract_terms') {
                    $datax[] = substr($valuer[$keyfield], 0, 50) . '...';
                } else {
                    $datax[] = $valuer[$keyfield];
                }
            }
            $datax[] = str_replace('xid', $valuer[$id], $action);
            $dataxy[] = $datax;
        }
        $data = array(
            'draw' => $_POST['draw'],
            'recordsTotal' => (int)$jum_all['jum'],
            'recordsFiltered' => (int)$jum_filter['jum'],
            'data' => @$dataxy
        );

        echo json_encode($data);
    }

    function add($input)
    {
        $this->db->insert('cp_master_contract_terms', $input);
    }

    function edit($input, $id)
    {
        $this->db->update('cp_master_contract_terms', $input, ['id' => $id]);
    }

    function delete($id)
    {
        $this->db->delete('cp_master_contract_terms', ['id' => $id]);
    }

    function get_id($id)
    {
        return $this->db->get_where('cp_master_contract_terms', ['id' => $id])->row_array();
    }
}
