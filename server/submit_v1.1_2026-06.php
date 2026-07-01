<?php
// ACE Communities — Form Submission Handler
// Powered by Resend API
// Deploy to: public_html/submit.php

$resend_api_key = 're_7jJQdcKV_9RmvN8gRXQXvPyJ15q1Hb9sp';
$from_address   = 'noreply@acecommunities.org';
$founders_email = 'founders@acecommunities.org';
$info_email     = 'info@acecommunities.org';

// Collect and sanitize form fields
$name    = isset($_POST['name'])    ? htmlspecialchars(strip_tags(trim($_POST['name'])))    : '';
$email   = isset($_POST['email'])   ? htmlspecialchars(strip_tags(trim($_POST['email'])))   : '';
$role    = isset($_POST['role'])    ? htmlspecialchars(strip_tags(trim($_POST['role'])))    : '';
$message = isset($_POST['message']) ? htmlspecialchars(strip_tags(trim($_POST['message']))) : '';
$source  = isset($_POST['source'])  ? htmlspecialchars(strip_tags(trim($_POST['source'])))  : '';

// Basic validation
if (empty($name) || empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['error' => 'Name and a valid email address are required.']);
    exit;
}

// ── REACT PAGE SUBMISSIONS ─────────────────────────────────────────────────
if ($source === 'react-page') {
    $location    = isset($_POST['location'])    ? htmlspecialchars(strip_tags(trim($_POST['location'])))    : '';
    $doc_read    = isset($_POST['doc_read'])    ? htmlspecialchars(strip_tags(trim($_POST['doc_read'])))    : '';
    $resonated   = isset($_POST['resonated'])   ? htmlspecialchars(strip_tags(trim($_POST['resonated'])))   : '';
    $questions   = isset($_POST['questions'])   ? htmlspecialchars(strip_tags(trim($_POST['questions'])))   : '';
    $would_share = isset($_POST['would_share']) ? htmlspecialchars(strip_tags(trim($_POST['would_share']))) : '';

    $subject = 'ACE React to the Plan — ' . $name . ($doc_read ? ' — Read: ' . $doc_read : '');

    $html_body = '
<div style="font-family:Georgia,serif;max-width:600px;margin:0 auto;padding:2rem;background:#ffffff;">
  <div style="border-top:4px solid #DA121A;border-bottom:2px solid #FCD116;padding:1rem 0;margin-bottom:2rem;">
    <h1 style="font-size:1.2rem;color:#000000;margin:0;">ACE — React to the Plan Submission</h1>
  </div>
  <table style="width:100%;border-collapse:collapse;margin-bottom:1.5rem;">
    <tr><td style="padding:0.5rem 0;font-weight:bold;color:#000;width:140px;">Name</td><td style="padding:0.5rem 0;color:#333;">' . $name . '</td></tr>
    <tr><td style="padding:0.5rem 0;font-weight:bold;color:#000;">Email</td><td style="padding:0.5rem 0;color:#333;"><a href="mailto:' . $email . '" style="color:#DA121A;">' . $email . '</a></td></tr>
    <tr><td style="padding:0.5rem 0;font-weight:bold;color:#000;">Location</td><td style="padding:0.5rem 0;color:#333;">' . ($location ? $location : 'Not provided') . '</td></tr>
    <tr><td style="padding:0.5rem 0;font-weight:bold;color:#000;">Document Read</td><td style="padding:0.5rem 0;color:#333;">' . ($doc_read ? $doc_read : 'Not specified') . '</td></tr>
    <tr><td style="padding:0.5rem 0;font-weight:bold;color:#000;">Would Share</td><td style="padding:0.5rem 0;color:#333;">' . ($would_share ? $would_share : 'Not answered') . '</td></tr>
  </table>
  ' . ($resonated ? '<div style="background:#f9f9f9;padding:1rem;border-left:3px solid #DA121A;margin-bottom:1rem;"><p style="margin:0 0 0.5rem;font-weight:bold;color:#000;">What resonated most</p><p style="margin:0;color:#333;">' . nl2br($resonated) . '</p></div>' : '') . '
  ' . ($questions ? '<div style="background:#f9f9f9;padding:1rem;border-left:3px solid #09A03A;margin-bottom:1rem;"><p style="margin:0 0 0.5rem;font-weight:bold;color:#000;">Questions raised</p><p style="margin:0;color:#333;">' . nl2br($questions) . '</p></div>' : '') . '
  <div style="border-top:1px solid #eee;padding-top:1rem;font-size:0.8rem;color:#999;">
    <p style="margin:0;">Submitted: ' . date('F j, Y g:i A T') . '</p>
  </div>
  <div style="margin-top:2rem;padding-top:1rem;border-top:2px solid #FCD116;text-align:center;">
    <p style="margin:0;font-size:0.85rem;color:#000;font-style:italic;">For Our People, By Our People</p>
    <p style="margin:0.25rem 0 0;font-size:0.75rem;color:#999;">Alliance for Collective Empowerment and Development</p>
  </div>
</div>
';

    $payload = json_encode([
        'from'    => 'ACE Communities <' . $from_address . '>',
        'to'      => [$founders_email],
        'replyto' => [$email],
        'subject' => $subject,
        'html'    => $html_body,
    ]);

    $ch = curl_init('https://api.resend.com/emails');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Authorization: Bearer ' . $resend_api_key,
        'Content-Type: application/json',
    ]);

    $response    = curl_exec($ch);
    $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_status === 200 || $http_status === 201) {
        $csv_file = __DIR__ . '/reactions.csv';
        $is_new   = !file_exists($csv_file);
        $fh       = fopen($csv_file, 'a');
        if ($fh) {
            if ($is_new) {
                fputcsv($fh, ['Timestamp', 'Name', 'Email', 'Location', 'Document Read', 'Would Share', 'What Resonated', 'Questions Raised']);
            }
            fputcsv($fh, [
                date('Y-m-d H:i:s T'),
                $name,
                $email,
                $location,
                $doc_read,
                $would_share,
                $resonated,
                $questions,
            ]);
            fclose($fh);
        }
        http_response_code(200);
        echo json_encode(['success' => true]);
    } else {
        http_response_code(500);
        echo json_encode(['error' => 'Email could not be sent. Please try again.']);
    }
    exit;
}

// ── STANDARD GET INVOLVED SUBMISSIONS (below) ─────────────────────────────

// Routing logic — high-value roles go to founders@
$founders_roles = [
    'Tribal Leader',
    'Attorney',
    'Investor',
    'Major Donor',
    'Community Minister',
    'Pastor',
    'Professional',
    'Builder',
];

$to_email = $info_email;
foreach ($founders_roles as $founders_role) {
    if (stripos($role, $founders_role) !== false) {
        $to_email = $founders_email;
        break;
    }
}

// Build email body
$subject = 'ACE Communities — New Contact: ' . ($role ? $role : 'General') . ' — ' . $name;

$html_body = '
<div style="font-family:Georgia,serif;max-width:600px;margin:0 auto;padding:2rem;background:#ffffff;">
  <div style="border-top:4px solid #DA121A;border-bottom:2px solid #FCD116;padding:1rem 0;margin-bottom:2rem;">
    <h1 style="font-size:1.2rem;color:#000000;margin:0;">ACE Communities — New Contact Form Submission</h1>
  </div>
  <table style="width:100%;border-collapse:collapse;margin-bottom:1.5rem;">
    <tr>
      <td style="padding:0.5rem 0;font-weight:bold;color:#000;width:120px;">Name</td>
      <td style="padding:0.5rem 0;color:#333;">' . $name . '</td>
    </tr>
    <tr>
      <td style="padding:0.5rem 0;font-weight:bold;color:#000;">Email</td>
      <td style="padding:0.5rem 0;color:#333;"><a href="mailto:' . $email . '" style="color:#DA121A;">' . $email . '</a></td>
    </tr>
    <tr>
      <td style="padding:0.5rem 0;font-weight:bold;color:#000;">Role</td>
      <td style="padding:0.5rem 0;color:#333;">' . ($role ? $role : 'Not specified') . '</td>
    </tr>
  </table>
  ' . ($message ? '<div style="background:#f9f9f9;padding:1rem;border-left:3px solid #09A03A;margin-bottom:1.5rem;"><p style="margin:0 0 0.5rem;font-weight:bold;color:#000;">Message</p><p style="margin:0;color:#333;">' . nl2br($message) . '</p></div>' : '') . '
  <div style="border-top:1px solid #eee;padding-top:1rem;font-size:0.8rem;color:#999;">
    <p style="margin:0;">Routed to: ' . $to_email . '</p>
    <p style="margin:0.25rem 0 0;">Submitted: ' . date('F j, Y g:i A T') . '</p>
  </div>
  <div style="margin-top:2rem;padding-top:1rem;border-top:2px solid #FCD116;text-align:center;">
    <p style="margin:0;font-size:0.85rem;color:#000;font-style:italic;">For Our People, By Our People</p>
    <p style="margin:0.25rem 0 0;font-size:0.75rem;color:#999;">Alliance for Collective Empowerment and Development</p>
  </div>
</div>
';

// Send via Resend API
$payload = json_encode([
    'from'    => 'ACE Communities <' . $from_address . '>',
    'to'      => [$to_email],
    'replyto' => [$email],
    'subject' => $subject,
    'html'    => $html_body,
]);

$ch = curl_init('https://api.resend.com/emails');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . $resend_api_key,
    'Content-Type: application/json',
]);

$response    = curl_exec($ch);
$http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($http_status === 200 || $http_status === 201) {
    // Log submission to CSV
    $csv_file = __DIR__ . '/submissions.csv';
    $is_new   = !file_exists($csv_file);
    $fh       = fopen($csv_file, 'a');
    if ($fh) {
        if ($is_new) {
            fputcsv($fh, ['Timestamp', 'Name', 'Email', 'Role', 'Routed To']);
        }
        fputcsv($fh, [
            date('Y-m-d H:i:s T'),
            $name,
            $email,
            $role ? $role : 'General',
            $to_email,
        ]);
        fclose($fh);
    }
    http_response_code(200);
    echo json_encode(['success' => true]);
} else {
    http_response_code(500);
    echo json_encode(['error' => 'Email could not be sent. Please try again.']);
}
?>