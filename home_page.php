<!DOCTYPE html>
<html lang="en">

<head>
    <title>CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Roboto', sans-serif;
            line-height: 1.6;
            background-color: #f4f7fc;
        }

        /* Header style */
        header {
            background-color: #2c3e50;
            padding: 40px;
            text-align: center;
            color: white;
            border-bottom: 5px solid #2980b9;
        }

        header h2 {
            font-size: 36px;
            font-weight: 500;
        }

        /* Section containing navigation and content */
        section {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            padding: 40px;
            justify-content: space-between;
        }

        nav {
            background: #ecf0f1;
            width: 30%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        nav ul {
            list-style-type: none;
        }

        nav ul li {
            margin-bottom: 15px;
        }

        nav ul li a {
            color: #34495e;
            text-decoration: none;
            font-size: 18px;
            transition: color 0.3s ease;
        }

        nav ul li a:hover {
            color: #2980b9;
        }

        article {
            background-color: #ffffff;
            width: 65%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            min-height: 300px;
        }

        /* Footer style */
        footer {
            background-color: #34495e;
            color: white;
            text-align: center;
            padding: 20px;
            margin-top: 30px;
            font-size: 16px;
        }

        /* Responsive Design */
        @media (max-width: 768px) {

            nav,
            article {
                width: 100%;
            }

            section {
                flex-direction: column;
                align-items: center;
                padding: 20px;
            }

            footer {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <header>
        <h2>Cities</h2>
    </header>

    <section>
        <nav>
            <ul>
                <li><a href="home_page.php?page=london">London</a></li>
                <li><a href="home_page.php?page=paris">Paris</a></li>
                <li><a href="home_page.php?page=tokyo">Tokyo</a></li>
            </ul>
        </nav>

        <article>
            <!-- Content Area -->
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                switch ($page) {
                    case 'london':
                        include 'london.php';
                        break;
                    case 'paris':
                        include 'paris.php';
                        break;
                    case 'tokyo':
                        include 'tokyo.php';
                        break;
                }
            }
            ?>
        </article>
    </section>

    <footer>
        <p>Footer</p>
    </footer>

</body>

</html>