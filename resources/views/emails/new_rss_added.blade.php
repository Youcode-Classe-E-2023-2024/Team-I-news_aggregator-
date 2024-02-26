<!DOCTYPE html>
<html>

<head>
    <title>New RSS Feed Added</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }

        h2 {
            color: #007bff;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <h2>New RSS Feed Added</h2>
    <p>A new RSS feed has been added to the site:</p>
    <ul>
        <li><strong>Name:</strong> {{ $rssLink->name }}</li>
    </ul>
    <p>Thank you!</p>
</body>

</html>