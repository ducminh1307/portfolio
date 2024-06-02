<?php
function slugify($str)
{
    // Chuyển chuỗi sang chữ thường
    $str = strtolower($str);

    // Loại bỏ ký tự đặc biệt
    $str = preg_replace('/[^a-zA-Z0-9\s]/', '', $str);

    // Đổi các ký tự tiếng Việt thành không dấu
    $str = str_replace(
        array('à', 'á', 'ạ', 'ả', 'ã', 'â', 'ầ', 'ấ', 'ậ', 'ẩ', 'ẫ', 'ă', 'ằ', 'ắ', 'ặ', 'ẳ', 'ẵ'),
        array('a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
        $str
    );
    $str = str_replace(
        array('è', 'é', 'ẹ', 'ẻ', 'ẽ', 'ê', 'ề', 'ế', 'ệ', 'ể', 'ễ'),
        array('e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e', 'e'),
        $str
    );
    $str = str_replace(
        array('ì', 'í', 'ị', 'ỉ', 'ĩ'),
        array('i', 'i', 'i', 'i', 'i'),
        $str
    );
    $str = str_replace(
        array('ò', 'ó', 'ọ', 'ỏ', 'õ', 'ô', 'ồ', 'ố', 'ộ', 'ổ', 'ỗ', 'ơ', 'ờ', 'ớ', 'ợ', 'ở', 'ỡ'),
        array('o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o'),
        $str
    );
    $str = str_replace(
        array('ù', 'ú', 'ụ', 'ủ', 'ũ', 'ư', 'ừ', 'ứ', 'ự', 'ử', 'ữ'),
        array('u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u', 'u'),
        $str
    );
    $str = str_replace(
        array('ỳ', 'ý', 'ỵ', 'ỷ', 'ỹ'),
        array('y', 'y', 'y', 'y', 'y'),
        $str
    );
    $str = str_replace(
        array('đ'),
        array('d'),
        $str
    );

    // Đổi khoảng trắng thành dấu gạch ngang
    $str = preg_replace('/\s+/', '-', $str);

    return $str;
}
