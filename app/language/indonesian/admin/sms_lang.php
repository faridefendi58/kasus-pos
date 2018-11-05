<?php defined('BASEPATH') OR exit('No direct script access allowed');

/*
 * Language: English - Module: SMS
 * Translated & willing to share? please email to support@tecdiary.com
 */

/* ****************************************************************************
    Please keep the translation line length below 140 as only 160 character per sms
    otherwise there could be multiple sms charges

    Available variable options for sales related sms:
        1. {customer} for Customer Company/Contact Person
        2. {sale_reference} for sale reference number
        3. {grand_total} for sale grand total amount

    Payment related sms as sale with:
        1. {payment_reference} for payment reference
        2. {amount} for payment amount

    Delivery related sms as sale with:
        1. {delivery_reference} for deliver reference
        2. (received_by} for delivery received by field
**************************************************************************** */

$lang['new_sale']           = "Kepada {customer}, pesanan Anda (Ref. {Sale_reference}) telah diterima, lanjutkan ke pembayaran sebesar {grand_total}. Terima kasih";
$lang['payment_received']   = "Kepada {customer}, pembayaran Anda (Ref. {Payment_reference}, Amt: {amount}) telah diterima, kami akan segera memproses pesanan Anda. Terima kasih";
$lang['delivering']         = "Kepada {customer}, Kami mengirimkan pesanan Anda (Ref. {Delivery_reference}). Silakan periksa kembali jika Anda tidak menerima pesanan dalam 5 hari.";
