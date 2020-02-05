<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400" rel="stylesheet">
	<title>Thank you for signing up to wedBooker!</title>
	<style>

		/* cyrillic-ext */
		@font-face {
			font-family: 'Ubuntu';
			font-style: normal;
			font-weight: 300;
			src: local('Ubuntu Light'), local('Ubuntu-Light'), url(https://fonts.gstatic.com/s/ubuntu/v11/4iCv6KVjbNBYlgoC1CzjvWyNL4U.woff2) format('woff2');
			unicode-range: U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
		}
		/* cyrillic */
		@font-face {
			font-family: 'Ubuntu';
			font-style: normal;
			font-weight: 300;
			src: local('Ubuntu Light'), local('Ubuntu-Light'), url(https://fonts.gstatic.com/s/ubuntu/v11/4iCv6KVjbNBYlgoC1CzjtGyNL4U.woff2) format('woff2');
			unicode-range: U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
		}
		/* greek-ext */
		@font-face {
			font-family: 'Ubuntu';
			font-style: normal;
			font-weight: 300;
			src: local('Ubuntu Light'), local('Ubuntu-Light'), url(https://fonts.gstatic.com/s/ubuntu/v11/4iCv6KVjbNBYlgoC1CzjvGyNL4U.woff2) format('woff2');
			unicode-range: U+1F00-1FFF;
		}
		/* greek */
		@font-face {
			font-family: 'Ubuntu';
			font-style: normal;
			font-weight: 300;
			src: local('Ubuntu Light'), local('Ubuntu-Light'), url(https://fonts.gstatic.com/s/ubuntu/v11/4iCv6KVjbNBYlgoC1Czjs2yNL4U.woff2) format('woff2');
			unicode-range: U+0370-03FF;
		}
		/* latin-ext */
		@font-face {
			font-family: 'Ubuntu';
			font-style: normal;
			font-weight: 300;
			src: local('Ubuntu Light'), local('Ubuntu-Light'), url(https://fonts.gstatic.com/s/ubuntu/v11/4iCv6KVjbNBYlgoC1CzjvmyNL4U.woff2) format('woff2');
			unicode-range: U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
		}
		/* latin */
		@font-face {
			font-family: 'Ubuntu';
			font-style: normal;
			font-weight: 300;
			src: local('Ubuntu Light'), local('Ubuntu-Light'), url(https://fonts.gstatic.com/s/ubuntu/v11/4iCv6KVjbNBYlgoC1CzjsGyN.woff2) format('woff2');
			unicode-range: U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
		}
	</style>
</head>
<body style="background-color: #e7d8d1;padding: 60px 15px;text-align: center;font-weight: 300;font-family: 'Ubuntu', sans-serif;line-height: 1.6em;">
	<table class="container header" style="padding: 15px; max-width: 600px; margin: auto;background-color: #fff;width: 100%;margin: auto;-webkit-box-shadow: 0 0 3px 0 rgba(0,0,0,.1);box-shadow: 0 0 3px 0 rgba(0,0,0,.1);border-bottom: 1px solid #f1f1f1;">
		<tr>
			<td>
				<table class="center fullwidth" style="width: 100%;text-align: center;">
					<tr>
						<td style="height: 15px;"> </td>
					</tr>
					<tr>
						<td style="text-align: left;">
							<a href="{{ url('/') }}" style="text-decoration: none;"><span></span>
								<img style="max-width: 139px;" src="{{ asset('assets/images/logo-email.png') }}" alt="">
							</a>
						</td>
					</tr>
					<tr>
						<!-- <td style="height: 20px;"> </td> -->
						<td style="height: 15px;"> </td>
					</tr>
					<tr>
						<td class="line" style="border-bottom: 1px solid #f1f1f1;">
						</td>
					</tr>
				</table>
				<table class="fullwidth center" style="width: 100%;text-align: center;">
					<tr>
						<td style="text-align: left">
							<h1 style="font-family: 'Ubuntu', sans-serif;margin: 15px 0;font-size: 36px;font-weight: 300; line-height: normal;">Thank you for signing up to wedBooker!</h1>
						</td>
					</tr>
					<tr>
						<td style="text-align: left">
							@if ($user->account === 'couple')
							<p style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554; font-size: 14px;">We are excited to help you organise your wedding events. Get started by browsing our vetted network of Suppliers & Venues. You can request quotes directly from the ones you fancy, or can post a job and we will match you with the Suppliers & Venues best suited to your needs!</p>
							<p style="height: 10px; font-family: 'Ubuntu', sans-serif;"></p>
							<p style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554; font-size: 14px;"> Happy planning! <br><br> Laura and Belle xo <br>The wedBooker Co-Founders  </p>
							<p style="height: 30px; font-family: 'Ubuntu', sans-serif;"></p>
							@else
							<p style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554; font-size: 14px;">wedBooker is a professional network of Suppliers & Venues. As such, your registration is currently undergoing review by a member of our team. We will be in touch shortly.</p>
							<p style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554; font-size: 14px;">In the meantime, you can start setting up your business profile to showcase the amazing work you do. Be sure to add lots of photos and a thorough description of your services as these will help you win more work from couples.</p>
							<p style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554; font-size: 14px;">Please feel free to reach out to us if you have any questions.</p>
							<p style="height: 10px; font-family: 'Ubuntu', sans-serif;"></p>
							<p style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554; font-size: 14px;">Laura and Belle xo <br>The wedBooker Co-Founders </p>
							<p style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554; font-size: 14px;"></p>
							@endif
						</td>
					</tr>
				</table></td><td>
			</td><td style="height: 15px;"> </td>

		</tr><tr>
		<td style="text-align: left">
			@if ($user->account === 'couple')
			<a href="{{ url('/dashboard') }}"
				class="btn orange"
				style="font-family: 'Ubuntu', sans-serif;text-decoration: none;text-transform: uppercase;font-size: 14px;font-weight: 300;border-radius: 3px;padding: 11px 48px;background: #fe5e44;display: inline-block;color: #fff;">
				Start Planning
			</a>
			@endif
			@if ($user->account === 'vendor')
			<a href="{{ url(sprintf('vendors/%s', $profile->id)) }}"
				class="btn orange"
				style="font-family: 'Ubuntu', sans-serif;text-decoration: none;text-transform: uppercase;font-size: 14px;font-weight: 300;border-radius: 3px;padding: 11px 48px;background: #fe5e44;display: inline-block;color: #fff;">
				Setup My Profile
			</a>
			@endif
		</td>
	</tr>
</table>

<!-- /.container -->
<table>
	<tr>
		<td style="height: 10px;"></td>
	</tr>
</table>

<table class="container fullwidth center bg-white" style="padding: 15px; max-width: 600px; margin: auto;background-color: #fff;width: 100%;margin: auto;-webkit-box-shadow: 0 0 3px 0 rgba(0,0,0,.1);box-shadow: 0 0 3px 0 rgba(0,0,0,.1);text-align: center;">
	<tr>
		<td style="height: 20px;"></td>
	</tr>
	<tr>
		<td class="font-xs" style="text-align: left; color: #656565;line-height: 1.4em;font-family: 'Ubuntu', sans-serif;font-size: 12px;">
			<img style="max-width: 24px; float: left; margin-right: 10px;" src="http://dev.wedbooker.com/assets/images/emails/envelope.png" alt="">
			<div style="position:relative; top:-6px;">
				Have a question? Email us at...  <br>
				<a href="mailto:hello@wedbooker.com" style="color: #fe5e44;">hello@wedbooker.com</a>
			</div>
		</td>
	</tr>
	<tr>
		<td style="height: 20px;"> </td>
	</tr>
	<tr>
		<td class="social">
			<table class="fullwidth center" style="width: 100%;text-align: center;">
				<tr>
					<td style="text-align: left;">
						<a href="https://www.facebook.com/WedBooker/" target="_blank" style="text-decoration: none;padding: 7px; padding-left: 0">
							<img style="max-width: 29px;" src="http://dev.wedbooker.com/assets/images/emails/fb.png" alt="">
						</a>
						<a href="https://www.pinterest.com/wedbooker" target="_blank" style="text-decoration: none;padding: 7px;">
							<img style="max-width: 29px;" src="http://dev.wedbooker.com/assets/images/emails/pi.png" alt="">
						</a>
						<a href="https://www.instagram.com/wedbooker/" target="_blank" style="text-decoration: none;padding: 7px;">
							<img style="max-width: 29px;" src="http://dev.wedbooker.com/assets/images/emails/in.png" alt="">
						</a>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td class="font-sm" style="text-align: left; font-size: 14px;">
			<p style="color: #434343; font-family: 'Ubuntu', sans-serif;">Copyright &copy; {{ now()->year }} wedBooker Pty Ltd All Rights Reserved.</p>
		</td>
	</tr>
	<tr>
		<td class="font-sm center" style="text-align: left;font-size: 14px;">
			<p style="margin: auto; color: #434343; font-family: 'Ubuntu', sans-serif;">You are receiving this email because you have signed-up to <a href="{{ url('/') }}" style="color: #fe5e44;">wedBooker.com</a>. 
			</p>
		</td>
	</td>
	<tr>
		<td style="height: 10px;"></td>
	</tr>
	<tr>
		<td class="footer-menu font-sm" style="text-align: left; font-size: 14px;">
			<a style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554;" href="{{ url('/how-it-works') }}">How it Works</a> <span class="separator" style="color: #e0e0e0;">|</span>
			<a style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554;" href="{{ url('/suppliers-and-venues') }}">Suppliers & Venues</a> <span class="separator" style="color: #e0e0e0;">|</span>
			<a style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554;" href="https://wedbooker.com/inspiration">Wedding Inspo for Couples</a> <span class="separator" style="color: #e0e0e0;">|</span>
			<a style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554;" href="{{ url('/faqs') }}">FAQs</a> <span class="separator" style="color: #e0e0e0;">|</span>
			<a style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554;" href="{{ url('/contact-us') }}">Contact Us</a>
		</td>
	</tr>
	<tr>
		<td style="height: 50px; font-family: 'Ubuntu', sans-serif;"></td>
	</tr>
</table>
</body>
</html>