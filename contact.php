<?php session_start();?>
<?php include_once('header.php'); ?>
        <h1>Contactez nous</h1>
        <form>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" aria-describedby="email-help">
                <div id="email-help" class="form-text">Nous ne revendrons pas votre email.</div>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Votre message</label>
                <textarea class="form-control" placeholder="Exprimez vous" id="message" name="textarea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">envoyer</button>     
        </form>
        <br />
    </div>

    <?php 
    getLocation();

    include_once('footer.php'); ?>
</body>
</html>
