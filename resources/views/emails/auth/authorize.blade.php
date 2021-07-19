<!DOCTYPE html>
<html lang="en">
    <head>
      <title>Authorize</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <style>
          body {
            background: #fff;
            background-image: none;
            font-size: 12px;
            font-family: sans-serif;
          }
          h2 {
            font-size:22px;
            line-height:40px;
            color:#5a5a5a;

          }
          .align-center{
            text-align: center;
          }
          .table th {
            vertical-align: bottom;
            font-weight: bold;
            padding: 8px;
            line-height: 20px;
            text-align: left;
          }
          .table td {
            padding: 8px;
            line-height: 20px;
            text-align: left;
            vertical-align: top;
            border-top: 1px solid #dddddd;
          }
          .font-style{
            font-size:14px;
            line-height:22px;
            color:#5a5a5a;
          }
          .btn-authorize{
            padding:15px 25px;
            background-color:#ea413a;
            color:#ffffff;
            border-radius:3px;
            text-decoration:none;
            margin-top:20px;
          }
      </style>
    </head>
    <body>
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td align="center">
                    <table align="center" width="798" border="0" cellspacing="0" cellpadding="0">
                        <tr><td height="20"></td></tr>
                        <tr>
                            <td align="left">
                              <div>
                                <h2>Autoriser un nouvel appareil</h2>
                                <hr>
                                <p class="font-style">
                                    Un appareil ou un emplacement que nous n'avons jamais vu auparavant, ou depuis un certain temps, demande l'accès à votre compte :
                                </p>

                                <p class="font-style">
                                  <strong>Adresse IP: </strong> {{ $authorize->ip_address }} <br>
                                  <strong>Navigateur: </strong> {{ $authorize->browser }} ({{ $authorize->os }})<br>
                                  <strong>Localisation: </strong> {{ $authorize->location }}
                                </p>
                                <p class="font-style">
                                    Pour autoriser cet appareil à se connecter veuillez cliquer sur le lien ci-dessous.
                                </p>

                                <div style="padding: 20px 0;">
                                  <a href="{{ route('authorize.device', $authorize->token) }}" class="btn-authorize" target="_blank" data-saferedirecturl="{{ route('authorize.device', $authorize->token) }}">
                                    Autoriser l'appareil
                                  </a>
                                </div>

                                <p>
                                  <a href="{{ route('authorize.device', $authorize->token) }}" target="_blank">{{ route('authorize.device', $authorize->token) }}</a>
                                </p>
                                <p>
                                  Ou copiez le lien ci-dessus.
                                </p>
                              </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>