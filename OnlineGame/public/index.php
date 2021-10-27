<?php get_header();?>
   <div class="container">
        <div class="banner row">
            <div class="col-sm-12 col-md-6">
                <h1 class="heading">Great <span class="secondary-color">design</span> is the language we speak</h1>
            </div>
            <div class="col-sm-12 col-md-6">
                <p class="text-block">
                    We are a leading branding agency. We lead the creative strategies and development process for our clients. 
                    Our initial product and strategy workshops will deliver a much better understanding of your customer’s needs. 
                    We help brands to feel social by default optimize for generations of consumers wanting to connect with people with brands.
                </p>
            </div>
        </div>

        <div class="posts">
            <div class="row">
                <h5>Latest Posts</h5>
            </div>
            <br>
            <div class="row mb-2">
                <?php if(have_posts()):?>
                    <?php while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part("template-parts/content")?>

                    <?php endwhile;?>
                <?php else:?>
                    <div class="col-12">
                        <div class="text-center">
                            <h1>No content found!</h1>
                        </div>
                    </div>
                <?php endif;?>
            </div>
        </div>

        <div class="contact">
            <div class="inner">
                <div class="bg-text">
                    Get in touch
                    <a href="#">gonlinesoftware@gmail.com</a>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();?>