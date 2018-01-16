<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
require '/mpdf60/mpdf.php';


class Pdf_lib extends mPDF
{
    function __construct()
    {
        parent::__construct();
    }
}