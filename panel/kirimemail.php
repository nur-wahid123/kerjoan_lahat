<?php
$koneksi = new mysqli("localhost", "pilihjur1_admin", "lahatbro123", "pilihjur1_lahat");

// $koneksi = new mysqli("localhost", "kecamata4_kecamata4", "lahatbro123", "kecamata4_lahat");
// $koneksi = new mysqli("localhost", "root", "", "kerjoan_lahat");
function send_email($id, $to, $subject, $message, $headers)
{
    global $koneksi;
    if ($id == 0) {
        $ot = $koneksi->query("select username from user where iduser=$to");
        $data = $ot->fetch_assoc();
        $to = $data['username'];
    }
    // Check if the email is valid
    if (filter_var($to, FILTER_VALIDATE_EMAIL)) {
        // Try to send the email
        if (mail($to, $subject, $message, $headers)) {
            // Return true if successful
            return true;
        } else {
            // echo "<script>alert('tidak bisa $to');</script>";
            // Return false if failed
            return false;
        }
    } else {
        // echo "<script>alert('tidak ada $to');</script>";
        // Return false if the email is invalid
        return false;
    }
}
