<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anime Gua</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(to right, #1f1c2c, #928dab);
            color: #fff;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
            font-size: 3em;
            margin-bottom: 30px;
            color: #fbc531;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(8px);
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.3);
        }

        th, td {
            padding: 15px;
            text-align: center;
        }

        th {
            background-color: rgba(255, 255, 255, 0.1);
            font-size: 1.2em;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        tr:nth-child(even) {
            background-color: rgba(255, 255, 255, 0.03);
        }

        tr:hover {
            background-color: rgba(255, 255, 255, 0.1);
            transition: 0.3s;
        }

        img {
            max-height: 100px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5);
        }

        @media (max-width: 768px) {
            table, thead, tbody, th, td, tr {
                display: block;
            }

            thead {
                display: none;
            }

            td {
                position: relative;
                padding-left: 50%;
                text-align: left;
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            td:before {
                position: absolute;
                top: 12px;
                left: 15px;
                width: 45%;
                white-space: nowrap;
                font-weight: bold;
                color: #fbc531;
            }

            td:nth-of-type(1):before { content: "#"; }
            td:nth-of-type(2):before { content: "Nama Anime"; }
            td:nth-of-type(3):before { content: "Ranking"; }
            td:nth-of-type(4):before { content: "Episode"; }
            td:nth-of-type(5):before { content: "Preview"; }
        }
    </style>
</head>
<body>
    <h1>Anime Gua🔥</h1>
    <table> 
        <thead> 
            <tr> 
                <th>#</th> 
                <th>Nama Anime</th> 
                <th>Ranking</th> 
                <th>Episode</th> 
                <th>Preview</th> 
            </tr> 
        </thead> 
        <tbody> 
            @foreach ($data as $anime)
                <tr> 
                    <td>{{ $loop->iteration }}</td> 
                    <td>{{ $anime['title'] }}</td> 
                    <td>{{ $anime['ranking'] }}</td> 
                    <td>{{ $anime['episodes'] }}</td> 
                    <td><img src="{{ $anime['image'] }}" alt=""></td> 
                </tr> 
            @endforeach 
        </tbody> 
    </table>
</body>
</html>
