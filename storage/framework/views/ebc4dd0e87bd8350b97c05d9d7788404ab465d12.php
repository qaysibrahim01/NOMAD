
<?php $__env->startSection('content'); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bora Bora - Destination Details</title>
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
    <img src="assets/img/bora1.JPG" alt="Beautiful beach in Bora Bora">
    <h1>Explore the Best Beautiful Beaches</h1>
    <p>Discover the beauty of crystal-clear waters, luxurious resorts, and stunning sunsets.</p>
    <button>Explore</button>
</div>

<div class="container">
    <div class="title">
        <h1>Bora Bora Island</h1>
        <img src="assets/img/bora2.JPG" alt="Luxury resort in Bora Bora" style="width: 100%; max-height: 300px; object-fit: cover; margin: 20px 0;">
        <img src="assets/img/bora3.JPG" alt="Sea in Bora Bora" style="width: 100%; max-height: 300px; object-fit: cover; margin: 20px 0;">
    </div>

    <div class="packages">
        <div class="package">
            <h3>Luxury Overwater Villa</h3>
            <p>Stay in a luxurious overwater villa with direct access to the lagoon.</p>
            <p><strong>Price:</strong> $4,999 per person</p>
            <button>Book Now</button>
        </div>
        <div class="package">
            <h3>Snorkeling Adventure</h3>
            <p>Explore vibrant coral reefs and exotic marine life with a guided tour.</p>
            <p><strong>Price:</strong> $999 per person</p>
            <button>Book Now</button>
        </div>
        <div class="package">
            <h3>Sunset Cruise</h3>
            <p>Enjoy a romantic cruise with stunning views of Bora Bora's sunset.</p>
            <p><strong>Price:</strong> $499 per person</p>
            <button>Book Now</button>
        </div>
    </div>
</div>

<footer>
    
</footer>

</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project_1\resources\views/bora.blade.php ENDPATH**/ ?>