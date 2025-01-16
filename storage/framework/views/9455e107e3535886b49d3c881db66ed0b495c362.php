
<?php $__env->startSection('content'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bali - Destination Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: 'Roboto', sans-serif;
            background-color: #001F1E;
            color: #fff;
        }

        header {
            background-color: #003D3A;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        header a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        header a:hover {
            text-decoration: underline;
        }

        .hero {
            background-color: #001F1E;
            text-align: center;
            padding: 100px 20px;
        }

        .hero img {
            width: 100%;
            max-height: 500px;
            object-fit: cover;
        }

        .hero h1 {
            font-size: 3rem;
            margin: 20px 0;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }

        .hero button {
            background-color: #00ADB5;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
        }

        .hero button:hover {
            background-color: #007B7F;
        }

        .container {
            padding: 20px;
        }

        .title {
            text-align: center;
            margin-bottom: 30px;
        }

        .packages {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 30px;
        }

        .package {
            background-color: #003D3A;
            border-radius: 10px;
            padding: 20px;
            width: 300px;
            text-align: center;
        }

        .package h3 {
            color: #00ADB5;
        }

        .package p {
            font-size: 0.9rem;
            line-height: 1.5;
            margin: 10px 0;
        }

        .package button {
            background-color: #00ADB5;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 14px;
            border-radius: 5px;
            cursor: pointer;
        }

        .package button:hover {
            background-color: #007B7F;
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #003D3A;
            margin-top: 40px;
        }

        footer a {
            color: #00ADB5;
            text-decoration: none;
        }
    </style>
</head>
<body>



<div class="hero">
    <img src="assets/img/bali1.JPG" alt="Beautiful beach in Bali">
    <h1>Explore the Best Beautiful Beaches</h1>
    <p>Discover your place and enjoy the most beautiful beaches around the world.</p>
    <button>Explore</button>
</div>

<div class="container">
    <div class="title">
        <h1>Bali, Indonesia</h1>
        <img src="assets/img/bali2.JPG" alt="Luxury resort in Bali" style="width: 100%; max-height: 300px; object-fit: cover; margin: 20px 0;">
        <img src="assets/img/bali3.JPG" alt="Temple in Bali" style="width: 100%; max-height: 300px; object-fit: cover; margin: 20px 0;">
    </div>

    <div class="packages">
        <div class="package">
            <h3>Standard Package</h3>
            <p>Includes 3 nights stay at a 3-star hotel, daily breakfast, and airport transfers.</p>
            <p>Starting at $2499</p>
            <button>Book Now</button>
        </div>
        <div class="package">
            <h3>Deluxe Package</h3>
            <p>Includes 5 nights stay at a 4-star hotel, daily breakfast, guided tours, and airport transfers.</p>
            <p>Starting at $3499</p>
            <button>Book Now</button>
        </div>
        <div class="package">
            <h3>Luxury Package</h3>
            <p>Includes 7 nights stay at a 5-star resort, all meals, private tours, and premium airport transfers.</p>
            <p>Starting at $4999</p>
            <button>Book Now</button>
        </div>
    </div>
</div>



</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project_1\resources\views/bali.blade.php ENDPATH**/ ?>