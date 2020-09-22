<aside class="col-4 sidebar">
    <div class="newsletterfrom">
        <div class="icon">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
</svg>
        </div>
        <h4>Get the best viral stories straight into your inbox!</h4>
        <form action="">
            <input type="email" placeholder="Your email address" id="email" name="email">
            <input type="submit" value="SIGN UP" name="submit">
        </form>
    </div>
    <div id="popular">
    <h3>Popular</h3>
    <div class="post">
        <div class="image">
            <a href="#"><img src="https://bimber.bringthepixel.com/main/wp-content/uploads/sites/17/2015/11/cat_04_07_v01-364x156.jpg" alt=""></a>
            <div class="number">1</div>
        </div>
        <div class="title">
            <a href="#"><h4>Sexy Hot Yoga & Fitness Girls. You’re Welcome</h4></a>
        </div>
    </div>
    <div class="post">
        <div class="image">
            <a href="#"><img src="http://localhost/wp/wp-content/uploads/2020/09/cat_02_01_v01-758x426-1.jpg" alt=""></a>
            <div class="number">2</div>
        </div>
        <div class="title">
            <a href="#"><h4>25 Breathtaking Views Of The Himalayas, You Will Want To Forget ASAP</h4></a>
        </div>
    </div>
    <div class="post">
        <div class="image">
            <a href="#"><img src="https://bimber.bringthepixel.com/main/wp-content/uploads/sites/17/2015/11/cat_03_01_v01-364x156.jpg" alt=""></a>
            <div class="number">3</div>
        </div>
        <div class="title">
            <a href="#"><h4>This Hilarious Cat Eats Nothing But Pizza For Every Single Meal</h4></a>
        </div>
    </div>
    <div class="post">
        <div class="image">
            <a href="#"><img src="https://bimber.bringthepixel.com/main/wp-content/uploads/sites/17/2015/12/cat_01_02_v01-364x156.jpg" alt=""></a>
            <div class="number">4</div>
        </div>
        <div class="title">
            <a href="#"><h4>POLL: Are Your Habits Like Everyone Else’s?</h4></a>
        </div>
    </div>
    <div class="post">
        <div class="image">
            <a href="#"><img src="https://bimber.bringthepixel.com/main/wp-content/uploads/sites/17/2015/12/cat_01_06_v01-364x205.jpg" alt=""></a>
            <div class="number">5</div>
        </div>
        <div class="title">
            <a href="#"><h4>15 Unbelievable Facts About Sushi You Probably Don’t Know</h4></a>
        </div>
    </div>
</div>
    <div class="list-pages">
    <ul>
    <?php wp_list_pages('title_li=') ?>
    </ul>
    </div>
    <?php if(is_active_sidebar( 'main_sidebar' )) {
        dynamic_sidebar( 'main_sidebar' );
    } else { ?>
        <div class="widget">
            <h3 class="widget-title"><?php _e('Buscar', 'apk'); ?></h3>
            <?php get_search_form(); ?>
        </div>
    <?php } ?>
</aside>