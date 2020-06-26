<?php
// Get dropdown option list form db.
function getDropdownList($table, $columns)
{
    $CI =& get_instance();
    $query = $CI->db->select($columns)->where($columns[0].'!=', 'null')->from($table)->get();

    if ($query->num_rows() > 0) {
        $options1 = ['' => '- Pilih -'];
        $options2 = array_column(
            $query->result_array(),
            $columns[1],
            $columns[0]
        );
        $options  = $options1 + $options2;
        return $options;
    }

    return $options = ['' => '- Pilih -'];
}

function getDropdownListKhusus($table, $columns)
{
    $CI =& get_instance();
    $query = $CI->db->select($columns)->where($columns[0].'!=', 'null')->from($table)->get();

    if ($query->num_rows() > 0) {
        $options1 = ['' => '- Pilih -'];
        $options2 = array_column(
            $query->result_array(),
            $columns[1],
            $columns[0]
        );
        $options  = $options1 + $options2;
        return $options;
    }

    return $options = ['' => '- Pilih -'];
}

// Set style in textbox based on validation status.
function setValidationStyle($field)
{
    if (!$_POST) {
        return;
    }

    $validationStyle = '';
    if (form_error($field)) {
        $validationStyle = 'has-error';
    } else {
        $validationStyle = 'has-success';
    }

    return $validationStyle;
}

// Show icon in textbox based on validation status.
function setValidationIcon($field)
{
    if (!$_POST) {
        return;
    }

    $validationIcon = '';
    if (form_error($field)) {
        $validationIcon = '<span class="fa fa-times form-control-feedback" aria-hidden="true" style="margin-top: -1px;
        margin-right: 8px;"></span>';
    } else {
        $validationIcon = '<span class="fa fa-check form-control-feedback" aria-hidden="true" style="margin-top: -1px;
        margin-right: 8px;"></span>';
    }

    return $validationIcon;
}

/* Validasi Upload */

// Show form error validation message for "file" input.
function fileFormError($field, $prefix = '', $suffix = '')
{
    $CI =& get_instance();
    $error_field = $CI->form_validation->error_array();

    if (!empty($error_field[$field])) {
        return $prefix . $error_field[$field] . $suffix;
    }
    return '';
}