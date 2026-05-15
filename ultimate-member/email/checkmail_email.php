<?php
/**
 * Template for the "Account Activation Email".
 * Sent when the user needs to verify their email address.
 *
 * Override of the Ultimate Member default template.
 * @version 2.8.3
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#f7f9fc;padding:40px 20px;font-family:Arial,Helvetica,sans-serif;">
  <tr>
    <td align="center">
      <table width="560" cellpadding="0" cellspacing="0" border="0" style="max-width:560px;width:100%;background:#FAF8F5;border-radius:8px;overflow:hidden;box-shadow:0 4px 20px rgba(42,80,200,0.10);">

        <!-- Header -->
        <tr>
          <td style="background:#1b3380;padding:30px 40px 26px;text-align:center;">
            <div style="font-family:Georgia,'Times New Roman',serif;font-size:38px;font-weight:900;color:#ffffff;letter-spacing:-0.04em;line-height:1;">{site_name}</div>
            <div style="font-family:Arial,Helvetica,sans-serif;font-size:10.5px;color:rgba(255,255,255,0.6);letter-spacing:0.14em;text-transform:uppercase;margin-top:6px;">Indiana Musician Mutual Aid Network</div>
            <div style="width:48px;height:3px;background:#e0a92e;margin:16px auto 0;border-radius:2px;"></div>
          </td>
        </tr>

        <!-- Body -->
        <tr>
          <td style="padding:40px 44px 36px;">

            <!-- Headline -->
            <h1 style="font-family:Georgia,'Times New Roman',serif;font-size:26px;font-weight:900;color:#1b3380;text-align:center;margin:0 0 10px;line-height:1.25;">Almost There!</h1>
            <p style="font-family:Arial,Helvetica,sans-serif;font-size:15px;color:#5c6470;text-align:center;line-height:1.65;margin:0 0 10px;">Thanks for signing up. Click the button below to verify your email address and activate your account.</p>

            <!-- CTA Button -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td align="center" style="padding:20px 0 36px;">
                  <a href="{account_activation_link}" style="display:inline-block;background:#e0a92e;color:#16181d;font-family:Georgia,'Times New Roman',serif;font-size:15px;font-weight:700;text-decoration:none;padding:14px 36px;border-radius:5px;letter-spacing:0.03em;">Activate Your Account</a>
                </td>
              </tr>
            </table>

            <!-- Info box -->
            <table width="100%" cellpadding="0" cellspacing="0" border="0">
              <tr>
                <td style="background:#e7ecf5;border-radius:6px;padding:16px 20px;font-family:Arial,Helvetica,sans-serif;font-size:14px;color:#5c6470;text-align:center;line-height:1.55;">
                  Didn't create an account? You can safely ignore this email, or <a href="mailto:{admin_email}" style="color:#2a50c8;text-decoration:none;font-weight:600;">contact us</a> if something seems off.
                </td>
              </tr>
            </table>

          </td>
        </tr>

        <!-- Footer -->
        <tr>
          <td style="background:#F3F0EB;border-top:2px solid #e7ecf5;padding:22px 44px;text-align:center;">
            <p style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#9aa3b0;margin:0 0 4px;">Thank you for being part of the community.</p>
            <p style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#9aa3b0;margin:0;">The <a href="{site_url}" style="color:#2a50c8;text-decoration:none;font-weight:600;">{site_name}</a> Team</p>
          </td>
        </tr>

      </table>
    </td>
  </tr>
</table>
