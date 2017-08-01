        <footer class="footer">
            <div class="footer__wrapper">
                <ul class="social-medias__list">
                    <li class="social-medias__item">
                        <a href="https://www.behance.net/stephecloutier" class="social-medias__link" title="<?= __('Aller sur mon Behance', 'sp'); ?>">Behance</a>
                    </li>
                    <li class="social-medias__item">
                        <a href="https://github.com/stephecloutier" class="social-medias__link" title="<?= __('Aller sur mon Github', 'sp'); ?>">Github</a>
                    </li>
                    <li class="social-medias__item">
                        <a href="https://www.linkedin.com/in/stephecloutier/" class="social-medias__link" title="<?= __('Aller sur mon LinkedIn', 'sp'); ?>">LinkedIn</a>
                    </li>
                </ul>
                <ul class="contact__list">
                    <li class="contact__item contact__item--mail">
                        <a href="mailto:stephecloutier@gmail.com" class="contact__link" title="<?= __('M’envoyer un mail', 'sp'); ?>">stephecloutier@gmail.com</a>
                    </li>
                    <li class="contact__item contact__item--phone">
                        +32&nbsp;(0)&nbsp;487&nbsp;20&nbsp;43&nbsp;73
                    </li>
                </ul>
                <span class="credits">
                    <?= __('Design et développement par ', 'sp'); ?><a href="https://github.com/stephecloutier/portfolio" class="credits__link">Stéphanie Cloutier</a>

                    <span class="palmtree" title="<?= __('Coucou Leny&nbsp;!', 'sp'); ?>">
                        <svg id="palmtree" class="palmtree__svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 312 595">
                            <path class="palmtree" d="M13.3 588c0-141.1-3.6-280.6 1.6-419.8 2.4-65.8 31.2-124.6 100.3-150.9 67-25.4 139.5-5.4 183.8 55.4-14.1 8.7-28.2 17.4-42.9 26.6-33.4-38.5-74.2-50.1-122.3-34.8-45.3 14.4-68.9 77.8-69.1 118.3-.5 120.8-.3 396.4-.3 405.2H13.3z"/>
                        </svg>
                    </span>
                </span>

            </div>
        </footer>
        <script src="<?= get_template_directory_uri(); ?>/assets/js/lightbox-plus-jquery.js"></script>
    </body>
</html>
