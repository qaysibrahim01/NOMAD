
<?php $__env->startSection('content'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout Page</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <style>

        .checkout-page {
            font-family: Arial, sans-serif;
            padding: 20px;
            background-color:hsl(190, 24%, 35%);
        }
        .checkout-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: hsl(190, 24%, 35%);
            padding: 20px;
            border-radius: 8px;
            
        }
        .checkout-title {
            text-align: center;
            font-size: 28px;
            margin-bottom: 20px;
        }
        .place-details {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .place-details img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .place-details h2 {
            margin-top: 15px;
            font-size: 24px;
        }
        .place-details p {
            font-size: 18px;
            color: #fff;
            text-align: center;
            margin-top: 10px;
        }
        .checkout-button {
            display: block;
            width: 100%;
            padding: 15px;
            margin-top: 30px;
            background-color: #4CAF50;
            color: white;
            font-size: 18px;
            text-align: center;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }
        .checkout-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body class="checkout-page">
   

    <div class="checkout-container">
        <h1 class="checkout-title">Checkout</h1>

        <div class="place-details">
            <!-- Displaying Place Details Dynamically -->
            <img id="place-image" src="" alt="Place Image">
            <h2 id="place-title">Loading...</h2>
            <p id="place-description">Please wait while we fetch the details for the place.</p>
        </div>

        <!-- Checkout Button -->
        <button class="checkout-button" id="checkout-button">Proceed to Payment</button>
    </div>

    <footer class="footer">
        <p>&copy; 2025 Checkout Page. All Rights Reserved.</p>
    </footer>

    <script>
        // Get the 'place' query parameter from the URL
        const urlParams = new URLSearchParams(window.location.search);
        const place = urlParams.get('place');

        // Set the content based on the 'place' value
        const placeDetails = {
            eiffel_tower: {
                title: "Eiffel Tower",
                description: "An iconic symbol of Paris, offering stunning city views.",
                image: "assets/img/eiffel.jpg"
            },
            great_wall_of_china: {
                title: "Great Wall of China",
                description: "A remarkable feat of ancient engineering and history.",
                image: "assets/img/GWOC.jpg"
            },
            taj_mahal: {
                title: "Taj Mahal",
                description: "A breathtaking monument to love in Agra, India.",
                image: "assets/img/taj_mahal.jpg"
            },
            statue_of_liberty: {
                title: "Statue of Liberty",
                description: "A symbol of freedom standing tall in New York City.",
                image: "assets/img/statue.jpg"
            },
            machu_picchu: {
                title: "Machu Picchu",
                description: "An ancient Incan city set high in the Andes Mountains.",
                image: "assets/img/machu.jpg"
            },
            sydney_opera_house: {
                title: "Sydney Opera House",
                description: "A masterpiece of modern architecture in Sydney, Australia.",
                image: "assets/img/sydney.jpg"
            },
            colosseum: {
                title: "Colosseum",
                description: "A grand amphitheater showcasing ancient Roman engineering.",
                image: "assets/img/colosseum.jpg"
            },
            pyramids_of_giza: {
                title: "Pyramids of Giza",
                description: "Timeless wonders of ancient Egypt in the desert sands.",
                image: "assets/img/pyramids.jpg"
            },
            burj_khalifa: {
                title: "Burj Khalifa",
                description: "The tallest skyscraper in the world, located in Dubai.",
                image: "assets/img/burj.jpg"
            },
            niagara_falls: {
                title: "Niagara Falls",
                description: "A majestic natural wonder straddling two countries.",
                image: "assets/img/niagara.jpg"
            },
            santorini: {
                title: "Santorini",
                description: "A Greek island famed for its whitewashed buildings and sunsets.",
                image: "assets/img/santorini.jpg"
            },
            angkor_wat: {
                title: "Angkor Wat",
                description: "A magnificent temple complex in Cambodia.",
                image: "assets/img/angkor.jpg"
            },
            mount_fuji: {
                title: "Mount Fuji",
                description: "Japan's iconic volcanic peak, surrounded by serene lakes.",
                image: "assets/img/fuji.jpg"
            },
            venice: {
                title: "Venice",
                description: "A romantic city of canals and gondolas in Italy.",
                image: "assets/img/venice.jpg"
            },
            maldives: {
                title: "Maldives",
                description: "An island with the most beautiful sea view.",
                image: "assets/img/maldives.jpg"
            }
        };

        // Set the page content based on the selected place
        if (place && placeDetails[place]) {
            const selectedPlace = placeDetails[place];
            document.getElementById("place-title").textContent = selectedPlace.title;
            document.getElementById("place-description").textContent = selectedPlace.description;
            document.getElementById("place-image").src = selectedPlace.image;
        } else {
            document.getElementById("place-title").textContent = "Unknown Destination";
            document.getElementById("place-description").textContent = "Sorry, we couldn't find details for the selected place.";
        }

        // Add an event listener for the checkout button
        document.getElementById("checkout-button").addEventListener("click", function () {
            alert("Proceeding to payment...");
            // Redirect to the payment page or handle payment logic
        });
    </script>
</body>
</html>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Project_1\resources\views/checkout.blade.php ENDPATH**/ ?>