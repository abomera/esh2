<?php

// echo lang 
function lang($input1, $input2)
{
    $CI = &get_instance();
    $CI->load->library('session');
    $lang = $CI->session->userdata('lang');
    echo ($lang != 'arabic') ? $input1 : $input2;
}

// Return lang 
function rlang($input1, $input2)
{
    $CI = &get_instance();
    $CI->load->library('session');
    $lang = $CI->session->userdata('lang');
    return ($lang != 'arabic') ? $input1 : $input2;
}

// menu
function menu($m)
{
    $CI = &get_instance();
    // get child
    $where = array('m_parent' => $m->m_id);
    $child = $CI->data->get_data_where('menu', $where, 'm_order','asc')->result();
    // get childs num
    $num = $CI->data->get_data_where('menu', $where, 'm_id')->num_rows();
    // if num == 0
    if ($num == 0) {
        // check menu type
        if ($m->m_link_type == 0 or $m->m_link_type == 1) {
            $title = rlang($m->m_title, $m->m_ar_title);
            if ($m->m_parent_for == 0) {
                if ($m->m_link_type == 0) {
                    $link = $m->m_link;
                } else {
                    $link = base_url($m->m_link);
                }
?>
                <li class="nav__item">
                    <a href="<?php echo $link ?>" class="dropdown-toggle nav__item-link"><?php echo $title ?></a>
                </li>
            <?php
            } else {
                $where = array('s_status' => 1);
                $service = $CI->data->get_data_where('services', $where, 's_order', 'asc')->result();
                $service_num = $CI->data->get_data_where('services', $where, 's_id')->num_rows();
            ?>
                <li class="nav__item with-dropdown">
                    <a href="#" class="dropdown-toggle nav__item-link"><?php echo $title ?></a>
                    <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                    <ul class="dropdown-menu">
                        <?php
                        if ($service_num > 0) {
                            foreach ($service as $s) {
                                $title = rlang($s->s_title, $s->s_ar_title);
                        ?>
                                <li class="nav__item"><a href="<?php echo base_url('service/' . $s->s_id) ?>" class="nav__item-link"><?php echo $title ?></a></li>
                        <?php
                            }
                        }
                        ?>
                        <!-- /.nav-item -->
                    </ul><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
            <?php
            }
        } else {
            $where = array('p_id' => $m->m_link_type);
            $page = $CI->data->get_data_where('pages', $where, 'p_id')->row();
            $page_num = $CI->data->get_data_where('pages', $where, 'p_id')->num_rows();
            $title = rlang($page->p_title, $page->p_ar_title);
            if ($page_num > 0) {
            ?>
                <li class="nav__item <?php echo ($page->p_status == 0) ? 'd-none' : '' ?>">
                    <a href="<?php echo base_url('page/' . $page->p_link) ?>" class="dropdown-toggle nav__item-link"><?php echo $title ?></a>
                </li>
        <?php
            }
        }
        // print menu

    } else {
        // else
        $title = rlang($m->m_title, $m->m_ar_title);
        ?>
        <li class="nav__item with-dropdown">
            <a href="#" class="dropdown-toggle nav__item-link"><?php echo $title ?></a>
            <i class="fa fa-angle-right" data-toggle="dropdown"></i>
            <ul class="dropdown-menu">
                <?php
                // fetch childs
                foreach ($child as $ch) {
                    // send child var to menu() function 
                    menu($ch);
                }
                ?>
                <!-- /.nav-item -->
            </ul><!-- /.dropdown-menu -->
        </li><!-- /.nav-item -->
        <?php
        
    }
}

// upload

function myup($name, $path = '', $types = 'jpg|jpeg|png|gif')
{
    $ci = &get_instance();

    $ci->load->library('upload');
    $image = array();
    $result = [];
    $err = '';
    // File upload configuration
    $uploadPath = './upload/';
    $config['upload_path'] = $uploadPath;
    $config['allowed_types'] = $types;
    $config['encrypt_name'] = true;

    // Load and initialize upload library
    $ci->load->library('upload', $config);
    $ci->upload->initialize($config);

    // Upload file to server
    if ($ci->upload->do_upload($name)) {
        // Uploaded file data
        $imageData = $ci->upload->data();
        $image[] = 'upload/' . $imageData['file_name'];
        if ($path != 'upload/13.png') {
            @unlink($path);
        }
    } else {
        $result = $ci->upload->display_errors();
        $err = $result;
    }
    if (!empty($image)) {
        $result = array('status' => true, 'imgs' => implode(',', $image));
    } else {
        $result = array('status' => false, 'imgs' => $err);
    }

    return $result;
}

function callAPI($method, $url, $data='',$auth='')
{
    $curl = curl_init();
    $postData = '';
    //create name value pairs seperated by &
    // foreach ($data as $k => $v) {
    //     $postData .= $k . '=' . $v . '&';
    // }
    // $postData = rtrim($postData, '&');
    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data)
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data != '')
                curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
            break;
        default:
            if ($data)
                $url = sprintf("%s?%s", $url, $auth);
    }
    // OPTIONS:
    
    if($auth != ''){
        $headers = array(
            'Content-Type: application/json',
            'AccessToken:'.$auth
        );
    }else{
        $headers = array(
            'Content-Type: application/json',
        );
    }
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    // EXECUTE:
    $result = curl_exec($curl);
    if (!$result) {
        die("Connection Failure");
    }
    curl_close($curl);
    return  $result;
}