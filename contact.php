<!DOCTYPE html>
<html lang="en">

<head>
    <?=!require('./cdn.php') ?>
    <script src="/script/loader.js" defer></script>
    <script src="/script/contact.js" defer></script>
</head>

<body class="overflow-hidden">
    <?=!require('./header2.php') ?>
    <div id="loader" style="width: 100vw; height: 100vh; z-index: 9;"
        class="top-0 d-flex justify-content-center align-items-center position-absolute bg-white">
        <img src="/images/d3f472b06590a25cb4372ff289d81711_w200.gif" alt="">
    </div>
    <section style="height: 75vh" class="d-flex justify-content-center align-items-center">
        <div class="d-flex w-75">
            <div class="w-100 mt-5 p-3 h-100">
                <div class="row justify-content-center w-100 h-100">
                    <h4>Contact Us</h4>
                    <form id="contact">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="to" required>
                        </div>
                        <div class="form-group">
                            <label for="object">Object</label>
                            <input type="text" class="form-control" id="object" name="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <iframe class="w-50"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2597.4015406735484!2d1.0729677160149542!3d49.38239587934232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e0dda5e15aae21%3A0x745811abc4f77adb!2sTraining%20Center%20CESI%20Rouen!5e0!3m2!1sen!2sfr!4v1677503042545!5m2!1sen!2sfr"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
</body>

</html>