<?php
// আপনার ডাটাবেজ বা টেক্সট ফাইলে থাকা UID লিস্ট
$whitelisted_uids = ["15587820373", "123456789"]; 

$uid = $_GET['uid']; // লোডার থেকে আসা UID

if (in_array($uid, $whitelisted_uids)) {
    // যদি UID মিলে যায়
    echo json_encode(["status" => "success", "message" => "whitelisted"]);
} else {
    // যদি UID না থাকে
    echo json_encode(["status" => "error", "message" => "not whitelisted"]);
}
?>
