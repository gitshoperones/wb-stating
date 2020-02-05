<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400" rel="stylesheet">
	<title>{{ optional($notification)->subject }}</title>
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
							<img style="max-width: 139px;" src="{{ asset('assets/images/logo-email.png') }}" alt="">
						</td>
					</tr>
					<tr>
						<td style="height: 15px;"> </td>
						<!-- <td style="height: 20px;"> </td> -->
					</tr>
				</table>
				<table class="fullwidth center" style="width: 100%;text-align: center;">
				</table></td><td>
			</td>
			<td style="height: 15px;"> </td>

			</tr>
			<tr>
				<td style="height: 20px; font-family: 'Ubuntu', sans-serif;"></td>
			</tr>
			<tr>
			<td style="text-align: left;">
				{!! optional($notification)->body !!}
			</td>
			</tr>
			<tr>
				<td style="height: 20px; font-family: 'Ubuntu', sans-serif;"></td>
			</tr>
			<tr>
				<td style="text-align: left;">
					<a href="{{ url(sprintf('/vendor-review/%s', $review->code)) }}" class="btn orange" style="font-family: 'Ubuntu', sans-serif;text-decoration: none;text-transform: uppercase;font-size: 14px;font-weight: 300;border-radius: 3px;padding: 11px 48px;background: #fe5e44;display: inline-block;color: #fff;">{{ $notification->button }}</a>
				</td>
			</tr>
			<tr>
				<td style="text-align: left;">
					<p style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554; font-size: 14px;">Thank you so much for your time. Have a lovely day!</p>
					<p style="font-family: 'Ubuntu', sans-serif;text-decoration: none;color: #353554; font-size: 14px;">The wedBooker Team</p>
				</td>
			</tr>
		</table>
	</body>
</html>