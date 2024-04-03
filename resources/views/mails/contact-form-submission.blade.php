<!DOCTYPE html>
<html lang="de-ch">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission</title>
</head>

<body>
    <h1>Neue Anfrage von thaitastic.ch</h1>

    <p>
        <strong>Name:</strong><br />
        {{ $data['name'] }}
    </p>

    <p>
        <strong>Email:</strong><br />
        {{ $data['email'] }}
    </p>

    <p>
        <strong>Handy:</strong><br />
        {{ $data['mobile'] }}
    </p>

    <p>
        <strong>Festnetz:</strong><br />
        {{ $data['landline'] }}
    </p>

    <p>
        <strong>Nachricht:</strong><br />
        {{ $data['message'] }}
    </p>
</body>

</html>
