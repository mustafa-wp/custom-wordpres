<?php get_header(); // استدعاء ملف الهيدر (header.php) ?> 

<!-- قسم البانر الرئيسي -->
<!-- هذا القسم يحتوي على البانر الرئيسي للصفحة، ويضم صورة خلفية ورسائل ترحيبية -->
<div class="page-banner">
    <!-- خلفية البانر -->
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('/images/library-hero.jpg') ?>)"></div>

    <!-- محتوى البانر -->
    <div class="page-banner__content container t-center c-white">
        <h1 class="headline headline--large">Welcome!</h1>
        <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
        <h3 class="headline headline--small">
            Why don&rsquo;t you check out the <strong>major</strong> you&rsquo;re interested in?
        </h3>

        <!-- زر اختيار التخصص -->
        <a href="#" class="btn btn--large btn--blue">Find Your Major</a>
    </div>
</div>

<!-- قسم الأحداث والمدونة -->
<!-- هذا القسم يحتوي على قسمين: قسم الأحداث القادمة وقسم المدونة -->
<div class="full-width-split group">
    <!-- قسم الأحداث القادمة -->
    <div class="full-width-split__one">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>
           
            <?php 
            // استعلام لعرض آخر حدثين
            $homepageEvents = new WP_Query(array(
                'posts_per_page' => 2, // عدد الأحداث المعروضة
                'post_type' => 'event' // نوع المحتوى: أحداث
            ) );
            
            // حلقة عرض الأحداث
            while($homepageEvents->have_posts()){
                $homepageEvents->the_post(); ?>
                <div class="event-summary">
                    <!-- تاريخ الحدث -->
                    <a class="event-summary__date t-center" href="#">
                        <span class="event-summary__month"><?php the_time('M'); ?></span>
                        <span class="event-summary__day"><?php the_time('d'); ?></span>
                    </a>

                    <!-- تفاصيل الحدث -->
                    <div class="event-summary__content">
                        <h5 class="event-summary__title headline headline--tiny">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h5>
                        <p>
                            <?php echo wp_trim_words(get_the_content(), 10); // عرض جزء من المحتوى (18 كلمة) ?>
                            <a href="<?php the_permalink(); ?>" class="nu gray">Learn more</a>
                        </p>
                    </div>
                </div>
           <?php } 
            wp_reset_postdata(); // إعادة تعيين بيانات الاستعلام
            ?>

            <!-- رابط عرض جميع الأحداث -->
            <p class="t-center no-margin">
                <a href="<?php echo site_url('/events') ?>" class="btn btn--blue">View All Events</a>
            </p>
        </div>
    </div>

    <!-- قسم المدونة -->
    <div class="full-width-split__two">
        <div class="full-width-split__inner">
            <h2 class="headline headline--small-plus t-center">From Our Blogs</h2>

            <?php
            // استعلام لعرض آخر مقالين
            $homepagePosts = new WP_Query(array(
                'posts_per_page' => 2
            ));

            // حلقة عرض المقالات
            while ($homepagePosts->have_posts()) {
                $homepagePosts->the_post(); ?>
                <div class="event-summary">
                    <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                        <span class="event-summary__month"><?php the_time('M'); ?></span>
                        <span class="event-summary__day"><?php the_time('d'); ?></span>
                    </a>
                    <div class="event-summary__content">
                        <h5 class="event-summary__title headline headline--tiny">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h5>
                        <p><?php echo wp_trim_words(get_the_content(), 18); ?>
                            <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a>
                        </p>
                    </div>
                </div>
            <?php }
            wp_reset_postdata(); // إعادة تعيين بيانات الاستعلام
            ?>

            <!-- رابط عرض جميع المقالات -->
            <p class="t-center no-margin">
                <a href="<?php echo site_url('blog') ?>" class="btn btn--yellow">View All Blog Posts</a>
            </p>
        </div>
    </div>
</div>

<!-- قسم السلايدر -->
<!-- هذا القسم يحتوي على سلايدر يظهر ثلاث شرائح مختلفة -->
<div class="hero-slider">
    <div data-glide-el="track" class="glide__track">
        <div class="glide__slides">
            <!-- شريحة النقل المجاني -->
            <div class="hero-slider__slide"
                style="background-image: url(<?php echo get_theme_file_uri('images/bus.jpg'); ?>)">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">Free Transportation</h2>
                        <p class="t-center">All students have free unlimited bus fare.</p>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div>

            <!-- شريحة التفاح -->
            <div class="hero-slider__slide"
                style="background-image: url(<?php echo get_theme_file_uri('images/apples.jpg'); ?>)">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">An Apple a Day</h2>
                        <p class="t-center">Our dentistry program recommends eating apples.</p>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div>

            <!-- شريحة الطعام المجاني -->
            <div class="hero-slider__slide"
                style="background-image: url(<?php echo get_theme_file_uri('images/bread.jpg'); ?>)">
                <div class="hero-slider__interior container">
                    <div class="hero-slider__overlay">
                        <h2 class="headline headline--medium t-center">Free Food</h2>
                        <p class="t-center">Fictional University offers lunch plans for those in need.</p>
                        <p class="t-center no-margin"><a href="#" class="btn btn--blue">Learn more</a></p>
                    </div>
                </div>
            </div>
        </div>

        <!-- نقاط التنقل بين الشرائح -->
        <div class="slider__bullets glide__bullets" data-glide-el="controls[nav]"></div>
    </div>
</div>

<?php get_footer(); // استدعاء ملف الفوتر (footer.php) ?>