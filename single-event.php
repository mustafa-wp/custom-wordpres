<?php
// استدعاء ملف الهيدر (header.php)
get_header();

// حلقة عرض محتوى الحدث
while (have_posts()) {
    the_post();
    ?>
    <!-- بانر صفحة الحدث -->
    <div class="page-banner">
        <!-- خلفية البانر -->
        <div class="page-banner__bg-image"
            style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg'); ?>)">
        </div>
        <div class="page-banner__content container container--narrow">
            <h1 class="page-banner__title"><?php the_title(); // عنوان الحدث ?></h1>
            <div class="page-banner__intro">
                <p><?php echo get_the_date('F j, Y'); // تاريخ النشر ?> by <?php the_author_posts_link(); // اسم المؤلف ?></p>
            </div>
        </div>
    </div>

    <!-- محتوى صفحة الحدث -->
    <div class="container container--narrow page-section">
        <!-- رابط العودة لصفحة الأحداث -->
        <div class="metabox metabox--position-up metabox--with-home-link">
            <p>
                <a class="metabox__blog-home-link" href="<?php echo site_url('/events'); // رابط صفحة الأحداث الرئيسية ?>">
                    <i class="fa fa-home" aria-hidden="true"></i> Events Home
                </a>
                <span class="metabox__main">
                    <?php the_title(); // عنوان الحدث الحالي ?>
                </span>
            </p>
        </div>

        <!-- محتوى الحدث الرئيسي -->
        <div class="generic-content">
            <?php the_content(); // عرض محتوى الحدث ?>
        </div>
    </div>
    <?php
}

// استدعاء ملف الفوتر (footer.php)
get_footer();
?>