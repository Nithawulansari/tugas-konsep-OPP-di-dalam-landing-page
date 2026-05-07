<!-- HERO -->

<section class="hero" id="home">

    <div class="hero-left">

        <img src="assets/images/hero.jpg" alt="">

    </div>

    <div class="hero-right">

        <h1>
            Explore The Beauty of Mount Bromo
        </h1>

        <p>
            Discover breathtaking sunrise views, jeep adventures,
            and unforgettable travel experiences in East Java.
        </p>

        <p>
            Enjoy beautiful mountain scenery, cool fresh air,
            and exciting journeys around Mount Bromo.
        </p>

        <div class="hero-button">

            <img src="assets/images/road.jpg" alt="">

            <a href="#tour">
                BOOK A TOUR NOW →
            </a>

        </div>

    </div>

</section>

<!-- ABOUT -->

<section class="about" id="about">

    <div class="about-left">

        <h1>
            About Mount Bromo
        </h1>

        <p>
            Mount Bromo is one of the most famous tourist destinations
            in Indonesia located in East Java.
        </p>

        <p>
            Known for its stunning sunrise views, active volcano crater,
            and beautiful sea of sand, Bromo attracts visitors from
            around the world every year.
        </p>

    </div>

    <div class="about-right">

        <img src="assets/images/about.jpg" alt="">

    </div>

</section>

<!-- FEATURES -->

<section class="features">

    <div class="title">

        <h1>
            Bromo Travel, The Easy Way!
        </h1>

        <p>
            Easy and comfortable travel for your adventure
        </p>

    </div>

    <div class="feature-container">

        <!-- EASY BOOKING -->

        <div class="feature-card">

            <div class="feature-top">

                <div class="icon">★</div>

                <h2>Easy Booking</h2>

            </div>

            <div class="feature-content">

                <h3>
                    Fast Booking, One Click Away
                </h3>

                <p>
                    From booking tickets to choosing jeep tours,
                    everything is simple and fast.
                    No more complicated reservations —
                    your Mount Bromo adventure starts easily.
                </p>

            </div>

        </div>

        <!-- ADVENTURE TOUR -->

        <div class="feature-card">

            <div class="feature-top">

                <div class="icon">▲</div>

                <h2>Adventure Tour</h2>

            </div>

            <div class="feature-content">

                <h3>
                    Exciting Jeep Adventure
                </h3>

                <p>
                    Experience thrilling jeep rides,
                    sunrise viewpoints, and unforgettable
                    exploration around Mount Bromo
                    with amazing scenery.
                </p>

            </div>

        </div>

        <!-- LOCAL GUIDE -->

        <div class="feature-card">

            <div class="feature-top">

                <div class="icon">▣</div>

                <h2>Local Guide</h2>

            </div>

            <div class="feature-content">

                <h3>
                    Friendly Local Experts
                </h3>

                <p>
                    Explore Mount Bromo safely with
                    experienced local guides who know
                    the best routes, hidden spots,
                    and beautiful photo locations.
                </p>

            </div>

        </div>

    </div>

</section>

<!-- TOUR -->

<section class="tour" id="tour">

    <div class="tour-title">

        <h1>Popular Destination</h1>

        <p>
            Discover Beautiful Places Around Mount Bromo
        </p>

    </div>

    <div class="tour-container">

        <?php foreach($tempat as $t): ?>

        <div class="tour-card">

            <img src="assets/images/<?= $t['gambar']; ?>" alt="">

            <div class="tour-body">

                <div class="rating">
                    ⭐ <?= $t['rating']; ?>
                </div>

                <h2><?= $t['nama']; ?></h2>

                <p><?= $t['lokasi']; ?></p>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</section>

<!-- PACKAGE -->

<section class="package" id="package">

    <h1>Tour Package</h1>

    <div class="package-container">

        <div class="package-card">

            <h2>Basic Package</h2>

            <p>1 Day Tour</p>

            <h1>Rp 450K</h1>

            <button>Choose</button>

        </div>

        <div class="package-card active">

            <h2>Premium Package</h2>

            <p>2 Day + Hotel</p>

            <h1>Rp 950K</h1>

            <button>Choose</button>

        </div>

        <div class="package-card">

            <h2>Family Package</h2>

            <p>Family Trip</p>

            <h1>Rp 1.5JT</h1>

            <button>Choose</button>

        </div>

    </div>

</section>

<!-- CONTACT -->

<section class="contact" id="contact">

    <h1>Contact Us</h1>

    <form>

        <input type="text" placeholder="Your Name">

        <input type="email" placeholder="Your Email">

        <textarea placeholder="Your Message"></textarea>

        <button type="submit">
            Send Message
        </button>

    </form>

</section>