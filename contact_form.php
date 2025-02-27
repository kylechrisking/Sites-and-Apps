<h2>Send us a message</h2>
<div id="form-container">
    <form action="send_email.php" method="POST" id="contact-form">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" required placeholder="Your Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required placeholder="Your Email">
        </div>
        <div class="form-group">
            <label for="service">Service Interested In</label>
            <select id="service" name="service" required>
                <option value="">Select a service</option>
                <option value="it-services">IT Services</option>
                <option value="web-development">Web Development</option>
                <option value="software-development">Software Development</option>
                <option value="cybersecurity">Cybersecurity</option>
                <option value="3d-printing">3D Printing</option>
                <option value="laser-engraving">Laser Engraving</option>
            </select>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" required placeholder="Your Message"></textarea>
        </div>

        <!-- reCAPTCHA widget;testing-->
        <div class="g-recaptcha" data-sitekey="<?php echo getenv('RECAPTCHA_SITE_KEY'); ?>"></div> <!-- Use the site key from the environment variable -->

        <button type="submit" class="submit-btn" id="submit-button">Send Message</button>
    </form>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>