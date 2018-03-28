<body align="center">
    <h1>
    {!! $user['name'] !!} sent you a message.
    </h1>
    <table align="center" border="0" cellpadding="0" cellspacing="0" style="color:#222222 !important;font-family:arial,helvetica,sans-serif;font-size:16px;" width="500">
        <tr>
            <td style="padding-bottom:10px">
                Please reply to <b>{!! $user['email'] !!}</b>
            </td>
        </tr>
        <tr>
            <td style="padding-bottom:25px">
                The user sent this email from your <b>{!! $service->services_name !!}</b> service page.
            </td>
        </tr>
        <tr>
            <td>
                Message:
            </td>
        </tr>
        <tr>
            <td style="border:2px solid grey; border-radius:4px; padding:12px; vertical-align:top; text-align:left;">
                {!! $userText !!}
            </td>
        </tr>
        <tr>
            <td style="padding-top:30px;color:rgba(0,0,0,0.6)">
                You are receiving this email because you are providing a service on <a href="https://jumoyo.com">Jumoyo.com</a>.
            </td>
        </tr>
    </table>
</body>