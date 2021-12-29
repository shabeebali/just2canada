<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use PHPMailer\PHPMailer\PHPMailer;

class HomeController extends Controller
{
    public function submitCallbackForm(Request $request)
    {
        Validator::make($request->toArray(), [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'g-recaptcha-response' => [
                'required',
                function ($attribute, $value, $fail) {
                    $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
                        'secret' => env('CAPTCHA_SECRET_KEY'),
                        'response' => $value,
                        'remoteip' => $_SERVER['REMOTE_ADDR']
                    ]);/*
                    Log::debug($value);
                    Log::debug(env('CAPTCHA_SECRET_KEY'));
                    Log::debug(json_decode($response->body(), TRUE));
                    $fail('Failed');
                    */
                    $result = json_decode($response->body(), TRUE);
                    if (!$result['success']) {
                        $fail('Spamming detected. Try Again');
                    }
                }
            ]
        ], [
            'g-recaptcha-response.required' => 'You must verify the Recaptcha'
        ])->validate();

        $mailer = new PHPMailer();
        $mailer->CharSet = 'utf-8';
        // $mailer->addAddress('info@just2canada.ca');
        // $mailer->addAddress('info@tastechnologies.com');
        $mailer->addAddress('shabeeboali@gmail.com');
        $mailer->Subject = "Just To Canada from $request->name";
        $mailer->From = $request->email;
        $mailer->FromName = $request->name;
        $mailer->AddReplyTo($request->email);
        $message = $this->getMessage($request);

        $textMsg = trim(strip_tags(preg_replace('/<(head|title|style|script)[^>]*>.*?<\/\\1>/s', '', $message)));

        $mailer->AltBody = @html_entity_decode($textMsg, ENT_QUOTES, "UTF-8");

        $mailer->MsgHTML($message);
        if (!$mailer->Send()) {

            Log::error('Failed sending email!: Sender:' . $request->email . ', Name:' . $request->name . ', Phone:' . $request->phone);

            return redirect(route('cb.error'));
        }
        return redirect(route('cb.thank'));
    }

    protected function GetHTMLHeaderPart()

    {

        $retstr = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">' . "\n" .

            '<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><title></title>' .

            '';

        $retstr .= $this->GetMailStyle();

        $retstr .= '<table align="center" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff; font-family:Arial, Helvetica, sans-serif; font-size:12px; border:1px solid #006; color:#000;" width="650">

	    <tbody>

		<tr>

			<td align="center" style="padding:10px;" valign="top">

			<table border="0" cellpadding="0" cellspacing="0" width="100%">

				<tbody>

					<tr>

						<td align="center"><img src="https://just2canada.ca/images/logo.png" /></td>

						

						

					</tr>

				</tbody>

			</table>

			</td>

		</tr>';

        $retstr .= '</head><body>';

        return $retstr;
    }

    protected function GetMailStyle()

    {

        $retstr = "\n<style>" .

            "body,.label,.value { font-family:Arial,Verdana; } " .

            ".label {font-weight:bold; margin-top:5px; font-size:1em; color:#333;} " .

            ".value {margin-bottom:15px;font-size:1.0em;padding-left:5px;} " .

            "</style>\n";



        return $retstr;
    }

    protected function GetHTMLFooterPart()

    {

        $retstr = '<tr>

			<td align="center" bgcolor="#1c3e93" height="70" style="font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#ffffff;font-weight:normal; " valign="middle">

			<table border="0" cellpadding="0" cellspacing="0" width="95%">

				<tbody>

					<tr>

						<td width="53%">Call Us: <a href="tel:9055860440" value="9055860440" target="_blank" style="color:#fff"> (905) 586 0440 </a><br />
						
						Email Id: <a href="mailto:info@just2canada.ca" style="color:#fff;"> info@just2canada.ca</a>

						&nbsp;</td>

						

						<td align="right" width="47%">  Address: 1200 Derry Rd E, Mississauga, ON L5T 1B6, Canada  
               </td>

					</tr>

				</tbody>

			</table>

			</td>

		</tr>

	</tbody>

</table>



</body>

</html>';

        return $retstr;
    }

    protected function getMessage(Request $request)

    {

        $header = $this->GetHTMLHeaderPart();

        $formsubmission = '<tr><td height="20" style="padding-left:10px;" width="40%"><b>Name</b></td><td width="5%">:</td><td width="65%">' . $request->name . '</td></tr>';
        $formsubmission .= '<tr><td height="20" style="padding-left:10px;" width="40%"><b>Phone</b></td><td width="5%">:</td><td width="65%">' . $request->phone . '</td></tr>';
        $formsubmission .= '<tr><td height="20" style="padding-left:10px;" width="40%"><b>Email</b></td><td width="5%">:</td><td width="65%">' . $request->email . '</td></tr>';

        $footer = $this->GetHTMLFooterPart();



        //$message = $header."<div style='background:#fff; color:#000; font-size:18px; padding:10px; text-align:left;'><center><img src=\"http://seowithus.com/webmaster1/EB-service/10-march-2017/images/logo.png\"></center><p>$formsubmission</p><p><h1><center>Thank you for contacting us.<br /><br /></center></h1><center>We have received your Form Submission our Staff will be contacting you within 24 hours.<br /><br /><strong>Have a great day ahead!</strong></center></p></div>".$footer;

        $message = $header;

        $message .=
            '<tr>

			<td style="padding:10px 20px; " valign="top">

			<table border="0" cellpadding="0" cellspacing="0" width="100%">

				<tbody>

					<tr>

						<td height="20" style="background-color:#ECECEC;font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#000;padding:7px 0 6px 13px;text-transform:uppercase; border:1px solid #ECECEC; border-bottom:0px;">Detail:</td>

					</tr>

					<tr>

						<td bgcolor="#fff" style="padding:10px 10px; border:1px solid #ECECEC;">

						<table border="0" cellpadding="0" cellspacing="0" width="100%">

							<tbody>

								<tr>

									<td valign="top" width="80%">

									<table cellpadding="0" cellspacing="0" width="100%">

										<tbody>';

        $message .= $formsubmission;

        $message .=
            '</tbody>

									</table>

									</td>

								</tr>

							</tbody>

						</table>

						</td>

					</tr>

					<tr>

						<td>&nbsp;</td>

					</tr>

					<tr>

						<td bgcolor="#FFFFFF" height="5">&nbsp;</td>

					</tr>

					

				</tbody>

			</table>

			</td>

		</tr>';

        $message .= $footer;



        return $message;
    }
}
