<div id="menu">
    <div class="menu__top">
        <!-- <a href="#"> <img src="images/logo-icon-white.png" alt="logo" /> </a> -->
        <div class="menu--close toggle-menu">
            <?= svg('close-menu'); ?>
        </div>
    </div>

    <nav class="menu-content">
        <ul>
            <li>
                <a href="<?= home_url(); ?>">Hjem</a>
            </li>
            <li class="dropdown">
                <a href="#">Om os</a>
                <div class="dropdown-content">
                    <a href="#">Vores historie</a>
                    <a href="#">Sponsorer</a>
                    <a href="#">Andre</a>
                </div>
            </li>
            <li>
                <a href="#">Events</a>
            </li>
            <li>
                <a href="#">Galleri</a>
            </li>
            <li>
                <a href="#" class="menu-link">Book nu</a>
            </li>
        </ul>



        <div class="social-links-container">
            <h4>Følg med</h4>
            <div class="menu-social-links">
                <a href="https://www.facebook.com/provita.fo/" target="_blank">
                    <?= svg('icon-facebook'); ?>
                </a>
                <a href="https://www.instagram.com/fyrilivi/" target="_blank">
                    <?= svg('icon-instagram'); ?>
                </a>
            </div>
        </div>
    </nav>
</div>