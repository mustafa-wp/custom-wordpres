<footer class="site-footer">
    <!-- قسم الفوتر -->
    <div class="site-footer__inner container container--narrow">
        <div class="group">
            <!-- العمود الأول: شعار الموقع ورقم الهاتف -->
            <div class="site-footer__col-one">
                <h1 class="school-logo-text school-logo-text--alt-color">
                    <a href="http://custom-wordprees.local"><strong>custom</strong> -themes</a>
                </h1>
                <p><a class="site-footer__link" href="#">555.555.5555</a></p>
            </div>

            <!-- العمود الثاني والثالث: روابط التصفح -->
            <div class="site-footer__col-two-three-group">
                <!-- عمود Explore -->
                <div class="site-footer__col-two">
                    <h3 class="headline headline--small">Explore</h3>
                    <nav class="nav-list">
                        <?php
                        // عرض قائمة التنقل الأولى (footerlocationOne)
                        wp_nav_menu(array(
                            'theme_location' => 'footerlocationOne'
                        ))
                        ?>
                    </nav>
                </div>
                <!-- عمود Learn -->
                <div class="site-footer__col-three">
                    <h3 class="headline headline--small">Learn</h3>
                    <nav class="nav-list">
                        <?php
                        // عرض قائمة التنقل الثانية (footerlocationTow)
                        wp_nav_menu(array(
                            'theme_location' => 'footerlocationTow'
                        ))
                        ?>
                    </nav>
                </div>
            </div>

            <!-- العمود الرابع: روابط وسائل التواصل -->
            <div class="site-footer__col-four">
                <h3 class="headline headline--small">Connect With Us mustafa</h3>
                <nav>
                    <ul class="min-list social-icons-list group">
                        <!-- أيقونة فيسبوك -->
                        <li>
                            <a href="#" class="social-color-facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        </li>
                        <!-- أيقونة تويتر -->
                        <li>
                            <a href="#" class="social-color-twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        </li>
                        <!-- أيقونة يوتيوب -->
                        <li>
                            <a href="#" class="social-color-youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                        </li>
                        <!-- أيقونة لينكدإن -->
                        <li>
                            <a href="#" class="social-color-linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        </li>
                        <!-- أيقونة إنستجرام -->
                        <li>
                            <a href="#" class="social-color-instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); // استدعاء وظيفة ووردبريس لإضافة أكواد في نهاية الصفحة ?>
</body>
</html>