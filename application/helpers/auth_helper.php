<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!function_exists('isLogin')) {

    function isLogin()
    {
        $CI = get_instance();
        $user_id = $CI->session->userdata('vendor');
        //print_r($user_id);die();
        if (!empty($user_id)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('isUserLogin')) {

    function isUserLogin()
    {
        $CI = get_instance();
        $user_id = $CI->session->userdata('user');
        //print_r($user_id);die();
        if (!empty($user_id)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('selectedProfile')) {

    function selectedProfile()
    {
        $CI = get_instance();
        $user_id = $CI->session->userdata('vendor');
        //print_r($user_id);die();
        $CI->db->select('*');
        $CI->db->where('user_id', $user_id['vendor']->id);
        $CI->db->where('active', 'Y');
        $query = $CI->db->get('brand_profile');
        if (!empty($user_id)) {
            return $query->row();
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('userID')) {

    function userID()
    {
        $CI = get_instance();
        $vendor_id = $CI->session->userdata('vendor');
        $user_id = $CI->session->userdata('user');
        //print_r($user_id);
        if (!empty($vendor_id)) {
            $a = $vendor_id['vendor']->id;
            return $a;
        } else if (!empty($user_id)) {
            $a = $user_id['user']->id;
            return $a;
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('phoneNumber')) {

    function phoneNumber($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('phone');
            $CI->db->where('id', $vid);
            $query = $CI->db->get('user');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('emailID')) {

    function emailID($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('email');
            $CI->db->where('id', $vid);
            $query = $CI->db->get('user');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('userName')) {

    function userName($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('name');
            $CI->db->where('id', $vid);
            $query = $CI->db->get('user');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('getCategories')) {

    function getCategories()
    {
        $CI = get_instance();
        $CI->db->select('*');
        $query = $CI->db->get('categories');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('getCities')) {

    function getCities()
    {
        $CI = get_instance();
        $CI->db->select('*');
        $CI->db->order_by('city_name', 'asc');
        $query = $CI->db->get('cities');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('verificationCode')) {

    function verificationCode($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('verification_code');
            $CI->db->where('id', $vid);
            $query = $CI->db->get('user');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('getCategoryStatus')) {

    function getCategoryStatus($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('*');
            $CI->db->where('user_id', $vid);
            $query = $CI->db->get('brand_profile');
            if ($query->num_rows() > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('getUserFlag')) {

    function getUserFlag($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('flag');
            $CI->db->where('id', $vid);
            $query = $CI->db->get('user');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('getSlug')) {

    function getSlug($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('slug');
            $CI->db->where('id', $vid);
            $query = $CI->db->get('user');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('isVerified')) {

    function isVerified($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $condition = array('id' => $vid, 'status' => 'Y');
            $CI->db->select('status');
            $CI->db->where($condition);
            $query = $CI->db->get('user');
            if ($query->num_rows() > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('getAlbumImageCount')) {

    function getAlbumImageCount($aid = NULL)
    {
        $CI = get_instance();
        if (!empty($aid)) {
            $CI->db->select('*');
            $CI->db->where('album_id', $aid);
            $query = $CI->db->get('album_details');
            if ($query->num_rows() > 0) {
                $a = count($query->result_array());
                return $a;
            } else {
                return "0";
            }
        }
    }
}

if (!function_exists('getVideoCount')) {

    function getVideoCount($uid = NULL, $bid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('user_id', $uid);
            $CI->db->where('brand_id', $bid);
            $query = $CI->db->get('video');
            if ($query->num_rows() > 0) {
                $a = count($query->result_array());
                return $a;
            } else {
                return "0";
            }
        }
    }
}

if (!function_exists('getBrandProfile')) {

    function getBrandProfile($pid = NULL)
    {
        $CI = get_instance();
        if (!empty($pid)) {
            $CI->db->select('*');
            $CI->db->where('id', $pid);
            $query = $CI->db->get('brand_profile');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            } else {
                return $query->row();
            }
        }
    }
}

if (!function_exists('getBrandName')) {

    function getBrandName($bid = NULL)
    {
        $CI = get_instance();
        if (!empty($bid)) {
            $CI->db->select('category_name');
            $CI->db->where('id', $bid);
            $query = $CI->db->get('categories');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('checkIfBrandAdded')) {

    function checkIfBrandAdded($uid = NULL, $bid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('brand_category_id', $uid);
            $CI->db->where('user_id', $bid);
            $query = $CI->db->get('brand_profile');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getBrandPricing')) {

    function getBrandPricing($bid = NULL)
    {
        $CI = get_instance();
        if (!empty($bid)) {
            $CI->db->select('*');
            $CI->db->where('brand_id', $bid);
            $query = $CI->db->get('pricing_info');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getUserReferalCode')) {

    function getUserReferalCode($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('id', $uid);
            $query = $CI->db->get('user');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getSubscriptionDetails')) {

    function getSubscriptionDetails($uid = NULL, $bid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('subscription.*, packages.*');
            $CI->db->where('subscription.user_id', $uid);
            $CI->db->where('subscription.brand_id', $bid);
            $CI->db->where('subscription.status', 'AC');
            $CI->db->from('subscription');
            $CI->db->join('packages', 'packages.id=subscription.plan_id');
            $query = $CI->db->get();
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getJoinDate')) {

    function getJoinDate($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('id', $uid);
            $query = $CI->db->get('user');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getUserBrandData')) {

    function getUserBrandData($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('user_id', $uid);
            $query = $CI->db->get('brand_profile');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getAlbumCover')) {

    function getAlbumCover($aid = NULL)
    {
        $CI = get_instance();
        if (!empty($aid)) {
            $CI->db->select('*');
            $CI->db->where('album_id', $aid);
            $CI->db->where('is_cover', 'Y');
            $query = $CI->db->get('album_details');
            if ($query->num_rows() > 0) {
                return $query->result_array();
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('countTotalPortfolio')) {

    function countTotalPortfolio($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('user_id', $uid);
            $query = $CI->db->get('portfolio');
            if ($query->num_rows() > 0) {
                return count($query->result_array());
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('countTotalAlbum')) {

    function countTotalAlbum($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('user_id', $uid);
            $query = $CI->db->get('album_info');
            if ($query->num_rows() > 0) {
                return count($query->result_array());
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('countTotalVideo')) {

    function countTotalVideo($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('user_id', $uid);
            $query = $CI->db->get('video');
            if ($query->num_rows() > 0) {
                return count($query->result_array());
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('profileCompleted')) {

    function profileCompleted($uid = NULL)
    {
        $CI = get_instance();
        $percentage = 0;
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('user_id', $uid);
            $query = $CI->db->get('brand_profile');
            $sql = $query->result_array();
            //print_r($sql);
            $mou = 0;
            if ($query->num_rows() > 0) {
                $notEmpty = 0;
                $totalField = 6;
                foreach ($query->result() as $row) {
                    if (!empty($row->contact_email)) {
                        $notEmpty++;
                    }
                }
                if ($notEmpty > 0) {
                    return 'Y';
                } else {
                    return 'N';
                }
            }
        }
    }
}

if (!function_exists('thisprofileCompleted')) {

    function thisprofileCompleted($uid = NULL, $bid = NULL)
    {
        $CI = get_instance();
        $percentage = 0;
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('id', $bid);
            $CI->db->where('user_id', $uid);
            $query = $CI->db->get('brand_profile');
            return $sql = $query->result_array();
        }
    }
}

if (!function_exists('getBrandName')) {

    function getBrandName($bid = NULL)
    {
        $CI = get_instance();
        $percentage = 0;
        if (!empty($uid)) {
            $CI->db->select('category_name');
            $CI->db->where('id', $bid);
            $query = $CI->db->get('categories');
            $sql = $query->row();
            return $sql->category_name;
        }
    }
}
if (!function_exists('getBrandProfileName')) {

    function getBrandProfileName($bid = NULL)
    {
        $CI = get_instance();
        $percentage = 0;
        if (!empty($bid)) {
            $CI->db->select('brand_name');
            $CI->db->where('id', $bid);
            $query = $CI->db->get('brand_profile');
            $sql = $query->row();
            return $sql->brand_name;
        }
    }
}
if (!function_exists('getProfileImage')) {

    function getProfileImage($uid = NULL, $bid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('user_id', $uid);
            $CI->db->where('brand_id', $bid);
            $query = $CI->db->get('user_images');
            $sql = $query->row();
            return $sql;
        }
    }
}

if (!function_exists('countTotalBrand')) {

    function countTotalBrand($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('user_id', $uid);
            $query = $CI->db->get('brand_profile');
            $sql = $query->result_array();
            return $sql;
        }
    }
}

if (!function_exists('getSubInfo')) {

    function getSubInfo($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('subscription.*, packages.package_name');
            $CI->db->where('subscription.user_id', $uid);
            $CI->db->where('subscription.status', 'AC');
            $CI->db->from('subscription');
            $CI->db->join('packages', 'packages.id=subscription.plan_id');
            //$CI->db->join('brand_profile', 'brand_profile.id=subscription.brand_id');
            $sql = $CI->db->get();
            return $sql;
        }
    }
}
if (!function_exists('getSubscriptionData')) {

    function getSubscriptionData($bid = NULL)
    {
        $CI = get_instance();
        if (!empty($bid)) {
            $CI->db->select('subscription.*, packages.package_name');
            $CI->db->where('subscription.brand_id', $bid);
            $CI->db->where('subscription.status', 'AC');
            $CI->db->from('subscription');
            $CI->db->join('packages', 'packages.id=subscription.plan_id');
            //$CI->db->join('brand_profile', 'brand_profile.id=subscription.brand_id');
            $sql = $CI->db->get();
            return $sql->result_array();
        }
    }
}
if (!function_exists('getBrandProfileImage')) {

    function getBrandProfileImage($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('brand_id', $uid);
            $query = $CI->db->get('user_images');
            if ($query->num_rows() > 0) {
                $sql = $query->row();
                return $sql->profile_image;
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getSubscriptionDates')) {

    function getSubscriptionDates($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('brand_id', $uid);
            $query = $CI->db->get('subscription');
            if ($query->num_rows() > 0) {
                $sql = $query->row();
                return $sql;
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getAlbumCover')) {

    function getAlbumCover($aid = NULL)
    {
        $CI = get_instance();
        if (!empty($aid)) {
            $CI->db->select('*');
            $CI->db->where('album_id', $aid);
            $CI->db->where('is_cover', 'Y');
            $query = $CI->db->get('album_details');
            if ($query->num_rows() > 0) {
                $sql = $query->row();
                return $sql;
            } else {
                return FALSE;
            }
        }
    }
}


if (!function_exists('getBrandImage')) {

    function getBrandImage($bid = NULL)
    {
        $CI = get_instance();
        if (!empty($bid)) {
            $CI->db->select('cover_image');
            $CI->db->where('brand_id', $bid);
            $query = $CI->db->get('user_images');
            if ($query->num_rows() > 0) {
                $sql = $query->row();
                return $sql;
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getPricing')) {

    function getPricing($bid = NULL)
    {
        $CI = get_instance();
        if (!empty($bid)) {
            $CI->db->select('*');
            $CI->db->where('brand_id', $bid);
            $query = $CI->db->get('pricing_info');
            if ($query->num_rows() > 0) {
                $sql = $query->row();
                return $sql;
            } else {
                return FALSE;
            }
        }
    }
}


if (!function_exists('getLastFiveImages')) {

    function getLastFiveImages($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('brand_id', $uid);
            $CI->db->order_by('id', 'desc');
            $CI->db->limit(1);
            $query = $CI->db->get('album_details');
            if ($query->num_rows() > 0) {
                $sql = $query->result_array();
                return $sql;
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getLastFivePorts')) {

    function getLastFivePorts($uid = NULL)
    {
        $CI = get_instance();
        if (!empty($uid)) {
            $CI->db->select('*');
            $CI->db->where('brand_id', $uid);
            $CI->db->limit(5);
            $query = $CI->db->get('portfolio');
            return $query;
        }
    }
}

if (!function_exists('getTheTags')) {

    function getTheTags()
    {
        $CI = get_instance();
        $CI->db->select('*');
        $query = $CI->db->get('brand_profile');
        if ($query->num_rows() > 0) {
            $sql = $query->result_array();
            return $sql;
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('getTheTags_album')) {

    function getTheTags_album()
    {
        $CI = get_instance();
        $CI->db->select('admin_tags');
        $query = $CI->db->get('album_details');
        if ($query->num_rows() > 0) {
            $sql = $query->result_array();
            return $sql;
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('getTheTags_port')) {

    function getTheTags_port()
    {
        $CI = get_instance();
        $CI->db->select('admin_tags');
        $query = $CI->db->get('portfolio');
        if ($query->num_rows() > 0) {
            $sql = $query->result_array();
            return $sql;
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('getColors')) {

    function getColors()
    {
        $CI = get_instance();
        $CI->db->select('*');
        $query = $CI->db->get('color_codes');
        if ($query->num_rows() > 0) {
            $sql = $query->result_array();
            return $sql;
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('getColorName')) {

    function getColorName($cid = NULL)
    {
        $CI = get_instance();
        $CI->db->select('color_name');
        $CI->db->where('id', $cid);
        $query = $CI->db->get('color_codes');
        if ($query->num_rows() > 0) {
            $sql = $query->row();
            return $sql;
        } else {
            return FALSE;
        }
    }
}
if (!function_exists('getCategories')) {

    function getCategories()
    {
        $CI = get_instance();
        $CI->db->select('*');
        $query = $CI->db->get('categories');
        if ($query->num_rows() > 0) {
            $sql = $query->result_array();
            return $sql;
        } else {
            return FALSE;
        }
    }
}

if (!function_exists('getAlbumImage')) {

    function getAlbumImage($aid = NULL)
    {
        $CI = get_instance();
        if (!empty($aid)) {
            $CI->db->select('*');
            $CI->db->where('album_id', $aid);
            $CI->db->where('is_cover', 'Y');
            $query = $CI->db->get('album_details');
            if ($query->num_rows() > 0) {
                $sql = $query->row();
                return $sql;
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getPlanDetails')) {

    function getPlanDetails($pid = NULL)
    {
        $CI = get_instance();
        if (!empty($pid)) {
            $CI->db->select('*');
            $CI->db->where('id', $pid);
            $query = $CI->db->get('packages');
            if ($query->num_rows() > 0) {
                $sql = $query->row();
                return $sql;
            } else {
                return FALSE;
            }
        }
    }
}


if (!function_exists('getLastTwoImages')) {

    function getLastTwoImages($aid = NULL)
    {
        $CI = get_instance();
        if (!empty($aid)) {
            $CI->db->select('*');
            $CI->db->where('album_id', $aid);
            $CI->db->order_by('id', 'desc');
            $CI->db->limit(2);
            $query = $CI->db->get('album_details');
            if ($query->num_rows() > 0) {
                $sql = $query->result_array();
                return $sql;
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getImageAlbumTags')) {

    function getImageAdminTags($aid = NULL)
    {
        $CI = get_instance();
        if (!empty($aid)) {
            $CI->db->select('*');
            $CI->db->where('image_id', $aid);
            $CI->db->limit(2);
            $query = $CI->db->get('album_image_tags');
            if ($query->num_rows() > 0) {
                $sql = $query->result_array();
                return $sql;
            } else {
                return FALSE;
            }
        }
    }
}


if (!function_exists('getthePriceagainstCategory')) {

    function getthePriceagainstCategory($bid = NULL, $bcid)
    {
        $CI = get_instance();
        if (!empty($bid)) {
            $CI->db->select('*');
            $CI->db->where('brand_id', $bid);
            $query = $CI->db->get('pricing_fields');
            if ($query->num_rows() > 0) {
                $bprice = $query->row();
            }
        }
        if (isset($bprice)) {
            //print_r($bprice);
            if ($bprice->show_price == 'Y') {
                $min_val = min($bprice->field0, $bprice->field1, $bprice->field2, $bprice->field3, $bprice->field4, $bprice->field5, $bprice->field6, $bprice->field7);
                if (!empty($min_val) || $min_val != 0 || $min_val != '' || $min_val != null) {
                    return "Starts from : <i class='fa fa-inr' aria-hidden='true'></i>" . $min_val;
                } else {
                    return "Request for Quote";
                }
            } else {
                return "Request for Quote";
            }
        } else {
            return "Request for Quote";
        }
    }
}


if (!function_exists('getCategoryIDbyBrandID')) {

    function getCategoryIDbyBrandID($bid = NULL)
    {
        $CI = get_instance();
        if (!empty($bid)) {
            $CI->db->select('brand_category_id');
            $CI->db->where('id', $bid);
            $query = $CI->db->get('brand_profile');
            if ($query->num_rows() > 0) {
                $sql = $query->row();
                return $sql;
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('getVendorLeads')) {

    function getVendorLeads($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('*');
            $CI->db->where('vendor_id', $vid);
            $query = $CI->db->get('leads');
            if ($query->num_rows() > 0) {
                $sql = $query->result_array();
                return $sql;
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('increase_pageview_count')) {

    function increase_pageview_count($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('*');
            $CI->db->where('vendor_id', $vid);
            $query1 = $CI->db->get('pageviews');
            if ($query1->num_rows() > 0) {
                $CI->db->set('view_count', 'view_count+1', FALSE);
                $CI->db->where('vendor_id', $vid);
                $query2 = $CI->db->update('pageviews');
            } else {
                $val = array("vendor_id" => $vid, "view_count" => 1);
                $CI->db->insert('pageviews', $val);
            }
        }
    }
}

if (!function_exists('get_my_pageview')) {

    function get_my_pageview($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('view_count');
            $CI->db->where('vendor_id', $vid);
            $query = $CI->db->get('pageviews');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        }
    }
}


if (!function_exists('getAdminLeadDetails')) {

    function getAdminLeadDetails($lid = NULL)
    {
        $CI = get_instance();
        if (!empty($lid)) {
            $CI->db->select('*');
            $CI->db->where('id', $lid);
            $query = $CI->db->get('admin_leads');
            if ($query->num_rows() > 0) {
                return $query->row();
            } else {
                return FALSE;
            }
        }
    }
}

if (!function_exists('maskData')) {

    function maskData($str = NULL)
    {
        $CI = get_instance();
        if (!empty($str)) {
            $mask_data = str_repeat("*", strlen($str) - 4) . substr($str, -4);
            return $mask_data;
        }
    }
}

if (!function_exists('getAverageRatingScore')) {

    //SELECT ROUND((AVG(`service1`)+AVG(`service2`)+AVG(`service3`))/3, 2) AS avgrtng FROM`review` WHERE `vendor_id`=8
    function getAverageRatingScore($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('ROUND((AVG(`service1`)+AVG(`service2`)+AVG(`service3`))/3, 2) AS avgrtng');
            $CI->db->where('vendor_id', $vid);
            $query = $CI->db->get('review');
            if ($query->num_rows() > 0) {
                return $query->row()->avgrtng;
            } else {
                return "0";
            }
        }
    }
}

if (!function_exists('getReviewCount')) {

    //SELECT ROUND((AVG(`service1`)+AVG(`service2`)+AVG(`service3`))/3, 2) AS avgrtng FROM`review` WHERE `vendor_id`=8
    function getReviewCount($vid = NULL)
    {
        $CI = get_instance();
        if (!empty($vid)) {
            $CI->db->select('COUNT(id) AS rtngcnt');
            $CI->db->where('vendor_id', $vid);
            $query = $CI->db->get('review');
            if ($query->num_rows() > 0) {
                return $query->row()->rtngcnt;
            } else {
                return "0";
            }
        }
    }
}

if (!function_exists('getBrandCity')) {

    //SELECT ROUND((AVG(`service1`)+AVG(`service2`)+AVG(`service3`))/3, 2) AS avgrtng FROM`review` WHERE `vendor_id`=8
    function getBrandCity()
    {
        $CI = get_instance();
        $CI->db->select('city');
        $CI->db->where('city!=', 'NULL');
        $CI->db->group_by('city');
        $query = $CI->db->get('brand_profile');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return "0";
        }
    }
}

/* if (!function_exists('getBrandCityByUserByCat')) {
    function getBrandCityByUserByCat()
    {
        $CI = get_instance();
        // $CI->db->select('city_name');
        // $CI->db->join('brand_profile', 'brand_profile.id = vendor_city_operation.brand_id');
        // $CI->db->join('categories', 'categories.id = brand_profile.brand_category_id');
        $CI->db->group_by('city_name');
        $query = $CI->db->get('vendor_city_operation');
        return $query->result_array();
    }
} */

if (!function_exists('getBrandbyCat')) {

    //SELECT ROUND((AVG(`service1`)+AVG(`service2`)+AVG(`service3`))/3, 2) AS avgrtng FROM`review` WHERE `vendor_id`=8
    function getBrandbyCat($cid = NULL)
    {
        $CI = get_instance();
        $CI->db->select('*');
        $CI->db->join('user', 'user.id = brand_profile.user_id');
        $CI->db->where('brand_category_id', $cid);
        $CI->db->limit(4);
        $query = $CI->db->get('brand_profile');
        // echo($CI->db->last_query()); exit();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return "0";
        }
    }
}


if (!function_exists('getCartValues')) {

    function getCartValues($uid = NULL)
    {
        $CI = get_instance();
        $CI->db->select('*');
        $CI->db->where('user_id', $uid);
        $query = $CI->db->get('cart');
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return null;
        }
    }
}


if (!function_exists('checkLikebyUser')) {

    function checkLikebyUser($uid = NULL, $bid = NULL)
    {
        $CI = get_instance();
        $CI->db->select('*');
        $CI->db->where('user_id', $uid);
        $CI->db->where('brand_id', $bid);
        $query = $CI->db->get('favourite_vendor');
        return $query;
    }
}
