<?php get_header(); ?>

    <div class="wrapper">
        
                    <h1>Hi. I'm Ben.</h1>
                    <div class="photo"><img class="profile-pic" src="images/me.jpg" /></div>
                    <h2>A Northern Digital Account Manager who has found himself down South working with awesome people on cool things for the web.</h2>
        
                    <hr>

                    <h2>Recently I've been talking about...</h2>

                        <?php 
                        
                        $args = array (
                            'post_type'         => 'post',
                            'posts_per_page'    => 2
                        );

                         $the_query = new WP_Query ($args);

                        if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <ul class="homepage-blogs">
                                <li><a href="<?php the_permalink ?>"><?php the_title(); ?></a></li> 
                            </ul>
                        <?php endwhile; else : ?>
                            <p><?php echo ("Whoops, guess I haven't been talking about anything!");?></p>
                        <?php endif; ?>
    </div>


<?php get_footer(); ?>