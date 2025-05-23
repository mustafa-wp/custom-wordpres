<?php
// استدعاء ملف الهيدر (header.php)
get_header(); ?>

<!-- بانر صفحة الأرشفة -->
<div class="page-banner">
    <!-- خلفية البانر -->
    <div class="page-banner__bg-image"
        style="background-image: url(<?php echo get_theme_file_uri('images/ocean.jpg'); ?>)"></div>
    <div class="page-banner__content container container--narrow">
        <h1 class="page-banner__title">
            Past Events
            <?php /*the_archive_title(); */?>
             <?php /*
              if (is_category()) {
            single_cat_title();
        }
        if(is_author()) {
          echo 'posts by '; the_author();
        }*/
         ?> 
        </h1> <!-- عرض عنوان المقال -->
        <div class="page-banner__intro">
            <p>A recap of our past events</p> <!-- مقدمة قصيرة عن المقال -->
        </div>
    </div>
</div>

<!-- قسم عرض الأحداث -->
<div class="container container--narrow page-section">
    <?php
$pastEvents = new wp_Query(array(
    'post_type' => 'event'
));


    // حلقة عرض الأحداث
    while ($pastEvents->have_posts()) {
        $pastEvents->the_post(); ?>
        <div class="event-summary">
            <!-- تاريخ الحدث -->
            <a class="event-summary__date event-summary__date--beige t-center" href="<?php the_permalink(); ?>">
                <span class="event-summary__month"><?php the_time('M'); ?></span>
                <span class="event-summary__day"><?php the_time('d'); ?></span>
            </a>
            <!-- تفاصيل الحدث -->
            <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h5>
                <p>
                    <?php echo wp_trim_words(get_the_content(), 5); // عرض جزء من المحتوى (5 كلمة) ?>
                    <a href="<?php the_permalink(); ?>" class="nu gray">Read more</a>
                </p>
            </div>
        </div>
    <?php
    }
    // عرض روابط الترقيم (Pagination)
    echo paginate_links();
    ?>
</div>

<?php
// استدعاء ملف الفوتر (footer.php)
get_footer();
?>