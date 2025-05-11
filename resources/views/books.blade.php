<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
    <style>
        body {
            background-image: url('https://images.hdqwalls.com/download/anime-scenery-field-4k-9j-2560x1440.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            align-items: center;
        }

        h1 {
            text-align: center;
            color: white; 
            font-size: 40px;
            margin-top : 50px;
            margin-bottom: 0px;
        }

        p {
            text-align: center;
            color: white;
            font-size: 20px;
        }

        ul {
            width: 50%;
            margin: 20px auto;
            padding: 20px;
            background: rgba(95, 85, 85, 0.15);
            border-radius: 15px;
            border: 2px solid white;
            padding-left: 50px;
        }

        li {
            color: white;
            font-size: 16px;
            padding: 5px 0;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        li:last-child {
            border-bottom: none;
        }

        ul:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transition: 0.3s;
        }

        @media (max-width: 768px) {
            ul {
                width: 90%;
                font-size: 14px;
            }

            li {
                font-size: 14px;
            }

            h1 {
                font-size: 28px;
            }

            p {
                font-size: 16px;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 24px;
            }

            p {
                font-size: 14px;
            }

            li {
                font-size: 12px;
            }
        }
    </style>
</head>
<body>
    <h1>Selamat Datang di toko BookSales!</h1>
    <p>ini adalah halaman buku dari toko buku</p>
    @foreach($books as $item)
        <ul>
            <li>{{$item['title']}}</li>
            <li>{{$item['description']}}</li>
            <li>{{$item['price']}}</li>
            <li>{{$item['stock']}}</li>
        </ul>
    @endforeach
</body>
</html>