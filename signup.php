<?php
include_once 'header.php';
?>
        <section class="main-container">
            <div class="main-wrapper-signup default-width">
                <h3>Sign up</h3>
                <p>Please fill in this form to create an account.</p>
                <form class="signup-form " action="includes/signup.inc.php" method="post">
                    <input type="text" name="first" placeholder="First Name" />
                    <input type="text" name="last" placeholder="Last Name" />
                    <input type="text" name="email" placeholder="Email" />
                    <input type="text" name="uid" placeholder="Username" />
                    <input type="password" name="pwd" placeholder="Password" />
                    <button type="submit" name="submit" class="button round-button signup-button">Sign up</button>
                </form>
            </div>
        </section>

        <?php
include_once 'footer.php';
?>