@extends('master.layout')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Page</title>
    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="assets/css/explore.css">
</head>
<body class="explore-page">


<main class="main">
    <section class="section">
        <h1 class="section__title">Discover New Places</h1>
        <div class="grid">
            <!-- Cards for various places with 'place' parameter -->
            <div class="card">
                <a href="/checkout?place=eiffel_tower">
                    <img src="assets/img/eiffel.jpg" alt="" class="card__img">
                    <h3 class="card__title">Eiffel Tower</h3>
                    <p class="card__description">An iconic symbol of Paris, offering stunning city views.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=great_wall_of_china">
                    <img src="assets/img/GWOC.jpg" alt="" class="card__img">
                    <h3 class="card__title">Great Wall of China</h3>
                    <p class="card__description">A remarkable feat of ancient engineering and history.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=taj_mahal">
                    <img src="assets/img/taj_mahal.jpg" alt="" class="card__img">
                    <h3 class="card__title">Taj Mahal</h3>
                    <p class="card__description">A breathtaking monument to love in Agra, India.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=statue_of_liberty">
                    <img src="assets/img/statue.jpg" alt="" class="card__img">
                    <h3 class="card__title">Statue of Liberty</h3>
                    <p class="card__description">A symbol of freedom standing tall in New York City.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=machu_picchu">
                    <img src="assets/img/machu.jpg" alt="" class="card__img">
                    <h3 class="card__title">Machu Picchu</h3>
                    <p class="card__description">An ancient Incan city set high in the Andes Mountains.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=sydney_opera_house">
                    <img src="assets/img/sydney.jpg" alt="Sydney Opera House" class="card__img">
                    <h3 class="card__title">Sydney Opera House</h3>
                    <p class="card__description">A masterpiece of modern architecture in Sydney, Australia.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=colosseum">
                    <img src="assets/img/colosseum.jpg" alt="" class="card__img">
                    <h3 class="card__title">Colosseum</h3>
                    <p class="card__description">A grand amphitheater showcasing ancient Roman engineering.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=pyramids_of_giza">
                    <img src="assets/img/pyramids.jpg" alt="" class="card__img">
                    <h3 class="card__title">Pyramids of Giza</h3>
                    <p class="card__description">Timeless wonders of ancient Egypt in the desert sands.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=burj_khalifa">
                    <img src="assets/img/burj.jpg" alt="" class="card__img">
                    <h3 class="card__title">Burj Khalifa</h3>
                    <p class="card__description">The tallest skyscraper in the world, located in Dubai.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=niagara_falls">
                    <img src="assets/img/niagara.jpg" alt="" class="card__img">
                    <h3 class="card__title">Niagara Falls</h3>
                    <p class="card__description">A majestic natural wonder straddling two countries.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=santorini">
                    <img src="assets/img/santorini.jpg" alt="" class="card__img">
                    <h3 class="card__title">Santorini</h3>
                    <p class="card__description">A Greek island famed for its whitewashed buildings and sunsets.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=angkor_wat">
                    <img src="assets/img/angkor.jpg" alt="" class="card__img">
                    <h3 class="card__title">Angkor Wat</h3>
                    <p class="card__description">A magnificent temple complex in Cambodia.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=mount_fuji">
                    <img src="assets/img/fuji.jpg" alt="" class="card__img">
                    <h3 class="card__title">Mount Fuji</h3>
                    <p class="card__description">Japan's iconic volcanic peak, surrounded by serene lakes.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=venice">
                    <img src="assets/img/venice.jpg" alt="" class="card__img">
                    <h3 class="card__title">Venice</h3>
                    <p class="card__description">A romantic city of canals and gondolas in Italy.</p>
                </a>
            </div>
            <div class="card">
                <a href="/checkout?place=maldives">
                    <img src="assets/img/maldives.jpg" alt="" class="card__img">
                    <h3 class="card__title">Maldives</h3>
                    <p class="card__description">An island with the most beautiful sea view.</p>
                </a>
            </div>
        </div>
    </section>
</main>

<footer class="footer">
  
</footer>

<!-- Add the JavaScript -->
<script>
    const navMenu = document.getElementById('nav-menu');
    const navToggle = document.getElementById('nav-toggle');
    const navClose = document.getElementById('nav-close');

    // Show menu when clicking on the hamburger icon
    navToggle.addEventListener('click', () => {
        navMenu.classList.add('show-menu');
    });

    // Hide menu when clicking on the close icon
    navClose.addEventListener('click', () => {
        navMenu.classList.remove('show-menu');
    });
</script>
</body>
</html>

@endsection