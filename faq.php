<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rudranshi Automobile</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <main>

        <section class="banner navi">
            <div class="container">
                <h1>Professional Auto <br> Repair & Maintenance</h1>
                <p>We are dedicated to providing high-quality auto repair and maintenance to <br> keep you and your car
                    safe on the road. We give your car the care it deserves.</p>
                <button><a href="">Contact Us</a></button>
            </div>
        </section>

        <?php include 'head.php'; ?>

        <section class="faq">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>FAQ's</h2>
                    </div>
                </div>
                <div class="box">
                    <div class="row">
                        <div class="col-12 pb-3">
                            <h3>Is there a speed limit?</h3>
                            <p>Revv allows up to 125 km/hr. However it is 80 km/hr in a few cities where some cars might
                                be equipped with speed governors as per government directives. Revv strictly advises to
                                follow local speed limits.</p>
                        </div>
                        <hr>
                        <div class="col-12 pb-3">
                            <h3>Can I extend/ cancel/ modify?</h3>
                            <p>Yes, extensions are possible subject to availability & charges. Cancellations &
                                modifications will attract nominal charges as per our policy.</p>
                        </div>
                        <hr>
                        <div class="col-12 pb-3">
                            <h3>Booking criteria & documents?</h3>
                            <p>Min. 21 years old, have valid original government ID (Aadhar, Passport, or PAN only) and
                                a valid driving licence for “Light Motor Vehicles”, which is min. 1 year old at the time
                                of starting the trip.</p>
                        </div>
                        <hr>
                        <div class="col-12">
                            <h3>Are there any restricted areas?</h3>
                            <p>Leh/Ladhakh, Spiti Valley & Kaza/Nako regions are not permitted to take Revv cars.
                                Customer will be fully liable for any damages incurred to the car in that region.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

       


    </main>


    <footer>
        <?php include 'foot.php'; ?>
    </footer>


    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>