<?php if (!defined('ABSPATH')) { exit; } ?>
</main>
<footer class="bg-dark text-white mt-auto">
    <div class="container pt-5 text-center text-md-start">
        <div class="row px-2">
            <div class="col-12 col-sm-6">
                <a class="navbar-brand me-4" href="<?php echo esc_url(home_url('/')); ?>">
                    <h5 class="mb-0 fw-bold"><?php bloginfo('name'); ?></h5>
                    <span class="d-block fs-6"><?php bloginfo('description'); ?></span>
                </a>
            </div>
            <div class="col-12 col-sm-6 text-center text-md-end mb-4">
                <a type="button" class="btn btn-secondary" href="<?php echo esc_url(home_url('/contact/')); ?>">যোগাযোগ</a>
                <a type="button" class="btn btn-secondary" href="<?php echo esc_url(home_url('/persona/')); ?>">সদস্য</a>
            </div>
        </div>
        <div class="pb-4 fs-6">এই সাইটের সমস্ত চিত্র ও ভিডিও কন্টেন্ট সিসি বাই-এসএ ৪.০ লাইসেন্সের আওতায় প্রকাশিত যদি না সংশ্লিষ্ট কনটেন্টে পৃথক লাইসেন্সের উল্লেখ থাকে। তবে এই সাইটের সমস্ত পাঠ্য কনটেন্ট মেধাসত্ত্বের অন্তর্ভুক্ত বলে গন্য হবে।<br>©২০২৬, সিসি বাই-এসএ ৪.০ <?php echo esc_html(date('Y')); ?> <?php bloginfo('name'); ?></div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
