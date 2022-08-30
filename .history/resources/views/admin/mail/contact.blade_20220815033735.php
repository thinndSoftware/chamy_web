<!DOCTYPE html>
<html lang="en" dir="ltr" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office" style="color-scheme:light dark;supported-color-schemes:light dark;">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1 user-scalable=yes">
    <meta name="format-detection" content="telephone=no, date=no, address=no, email=no, url=no">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="color-scheme" content="light dark">
    <meta name="supported-color-schemes" content="light dark">
    <title></title>
    <style>
        * {
            margin: 0;
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            box-sizing: border-box;
            font-size: 14px;
        }

        img {
            max-width: 100%;
        }

        body {
            -webkit-font-smoothing: antialiased;
            -webkit-text-size-adjust: none;
            width: 100% !important;
            height: 100%;
            line-height: 1.6em;

        }

        table td {
            vertical-align: top;
        }



        .content {
            max-width: 600px;
            margin: 0 auto;
            display: block;
            padding: 20px;
        }


        .main {
            background-color: #fff;
            border: 1px solid #e9e9e9;
            border-radius: 3px;
        }

        .content-wrap {
            padding: 20px;
        }

        .content-block {
            padding: 0 0 20px;
        }

        .header {
            width: 100%;
            margin-bottom: 20px;
        }

        .footer {
            width: 100%;
            clear: both;
            color: #999;
            padding: 20px;
        }

        .footer p,
        .footer a,
        .footer td {
            color: #999;
            font-size: 12px;
        }

        /* -------------------------------------
    TYPOGRAPHY
------------------------------------- */
        h1,
        h2,
        h3 {
            font-family: "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif;
            color: #000;
            margin: 40px 0 0;
            line-height: 1.2em;
            font-weight: 400;
        }

        h1 {
            font-size: 32px;
            font-weight: 500;
            /* 1.2em * 32px = 38.4px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
            /*line-height: 38px;*/
        }

        h2 {
            font-size: 24px;
            /* 1.2em * 24px = 28.8px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
            /*line-height: 29px;*/
        }

        h3 {
            font-size: 18px;
            /* 1.2em * 18px = 21.6px, use px to get airier line-height also in Thunderbird, and Yahoo!, Outlook.com, AOL webmail clients */
            /*line-height: 22px;*/
        }

        h4 {
            font-size: 14px;
            font-weight: 600;
        }

        p,
        ul,
        ol {
            margin-bottom: 10px;
            font-weight: normal;
        }

        p li,
        ul li,
        ol li {
            margin-left: 5px;
            list-style-position: inside;
        }

        /* -------------------------------------
    LINKS & BUTTONS
------------------------------------- */
        a {
            color: #348eda;
            text-decoration: underline;
        }

        .btn-primary {
            text-decoration: none;
            color: #FFF;
            background-color: #348eda;
            border: solid #348eda;
            border-width: 10px 20px;
            line-height: 2em;
            font-weight: bold;
            text-align: center;
            cursor: pointer;
            display: inline-block;
            border-radius: 5px;
            text-transform: capitalize;
        }


        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .aligncenter {
            text-align: center;
        }

        .alignright {
            text-align: right;
        }

        .alignleft {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .alert {
            font-size: 16px;
            color: #fff;
            font-weight: 500;
            padding: 20px;
            text-align: center;
            border-radius: 3px 3px 0 0;
        }

        .alert a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
        }

        .alert.alert-warning {
            background-color: #FF9F00;
        }

        .alert.alert-bad {
            background-color: #D0021B;
        }

        .alert.alert-good {
            background-color: #68B90F;
        }


        .invoice {
            margin: 40px auto;
            text-align: left;
            width: 80%;
        }

        .invoice td {
            padding: 5px 0;
        }

        .invoice .invoice-items {
            width: 100%;
        }

        .invoice .invoice-items td {
            border-top: #eee 1px solid;
        }

        .invoice .invoice-items .total td {
            border-top: 2px solid #333;
            border-bottom: 2px solid #333;
            font-weight: 700;
        }

        @media only screen and (max-width: 640px) {
            body {
                padding: 0 !important;
            }

            h1,
            h2,
            h3,
            h4 {
                font-weight: 800 !important;
                margin: 20px 0 5px !important;
            }

            h1 {
                font-size: 22px !important;
            }

            h2 {
                font-size: 18px !important;
            }

            h3 {
                font-size: 16px !important;
            }

            .container {
                padding: 0 !important;
                width: 100% !important;
            }

            .content {
                padding: 0 !important;
            }

            .content-wrap {
                padding: 10px !important;
            }

            .invoice {
                width: 100% !important;
            }
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        u+#body a {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        #MessageViewBody a {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        :root {
            color-scheme: light dark;
            supported-color-schemes: light dark;
        }

        tr {
            vertical-align: middle;
        }

        p,
        a,
        li {
            color: #000000;
            font-size: 16px;
            mso-line-height-rule: exactly;
            line-height: 24px;
            font-family: Arial, sans-serif;
        }

        p:first-child {
            margin-top: 0 !important;
        }

        p:last-child {
            margin-bottom: 0 !important;
        }

        a {
            text-decoration: underline;
            font-weight: bold;
            color: #0000ff
        }

        @media only screen and (max-width:599px) {
            .full-width-mobile {
                width: 100% !important;
                height: auto !important;
            }

            .mobile-padding {
                padding-left: 10px !important;
                padding-right: 10px !important;
            }

            .mobile-stack {
                display: block !important;
                width: 100% !important;
            }
        }

        @media (prefers-color-scheme:dark) {

            body,
            div,
            table,
            tr,
            td {
                background-color: #000000 !important;
                color: #ffffff !important;
            }

            .content {
                background-color: #222222 !important;
            }

            p,
            li {
                color: #B3BDC4 !important;
            }

            a {
                color: #84cfe2 !important;
            }
        }
    </style>
</head>

<body class="body" style="background-color:#f4f4f4;">
    <div
        style="display:none;font-size:1px;color:#f4f4f4;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">
    </div> <span
        style="display:none!important;visibility:hidden;mso-hide:all;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">
        &nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;</span>
    <div role="article" aria-roledescription="email" aria-label="Your Email" lang="en" dir="ltr"
        style="font-size:16px;font-size:1rem;font-size:max(16px,1rem);background-color:#f4f4f4;">
        <table align="center" role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%"
            style="border-collapse:collapse;max-width:600px;width:100%;background-color:#f4f4f4;">
            <tr style="vertical-align:middle;" valign="middle">
                <td>

                </td>
            </tr>
            <tr style="vertical-align:middle;" valign="middle">
                <td align="center" style="padding:30px 0;">
                    <table align="center" role="presentation" border="0" cellpadding="0" cellspacing="0"
                        width="600"
                        style="border-collapse:collapse;max-width:600px;width:100%;background-color:#fffffe;">
                        <tr style="vertical-align:middle;" valign="middle">
                            <td align="center" style="padding:30px;" class="content">
                                <table align="center" role="presentation" border="0" cellpadding="0" cellspacing="0"
                                    width="600"
                                    style="border-collapse:collapse;max-width:600px;width:100%;background-color:#fffffe;">
                                    <tr style="vertical-align:middle;" valign="middle">
                                        <td class="content">
                                            <p
                                                style="color:#000000;font-size:16px;mso-line-height-rule:exactly;line-height:24px;font-family:Arial,sans-serif;margin-top:0!important;">
                                                Please confirm your email address by clicking the link&nbsp;below.</p>
                                            <p
                                                style="color:#000000;font-size:16px;mso-line-height-rule:exactly;line-height:24px;font-family:Arial,sans-serif;">
                                                We may need to send you critical information about our service and it is
                                                important that we have an accurate email&nbsp;address.</p>
                                            <p
                                                style="color:#000000;font-size:16px;mso-line-height-rule:exactly;line-height:24px;font-family:Arial,sans-serif;">
                                                <a href="http://www.mailgun.com/"
                                                    style="font-size:16px;mso-line-height-rule:exactly;line-height:24px;font-family:Arial,sans-serif;text-decoration:underline;font-weight:bold;color:#0000ff;">Confirm
                                                    email&nbsp;address</a>
                                            </p>
                                            <p
                                                style="color:#000000;font-size:16px;mso-line-height-rule:exactly;line-height:24px;font-family:Arial,sans-serif;margin-bottom:0!important;">
                                                &mdash; The&nbsp;Mailgunners</p>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                    <table align="center" role="presentation" border="0" cellpadding="0" cellspacing="0"
                        width="600" style="border-collapse:collapse;max-width:600px;width:100%;">
                        <tr style="vertical-align:middle;" valign="middle">
                            <td align="center" style="padding-top:30px;">
                                <p
                                    style="mso-line-height-rule:exactly;line-height:24px;font-family:Arial,sans-serif;font-size:14px;color:#999;margin-top:0!important;margin-bottom:0!important;">
                                    Follow <a href="http://twitter.com/mail_gun"
                                        style="mso-line-height-rule:exactly;line-height:24px;font-family:Arial,sans-serif;text-decoration:underline;font-weight:bold;font-size:14px;color:#999;">@Mail_Gun</a>
                                    on&nbsp;Twitter.</p>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

        </table>
    </div>
</body>

</html>
