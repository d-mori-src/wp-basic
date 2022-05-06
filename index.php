<?php 
  $uri = get_theme_file_uri(); 
  $site_url = home_url();
?>

<?php get_header(); ?>
    <main>
        top
        <?php if(have_posts()): while(have_posts()): the_post();?>
            <ul>
                <li>
                    <a href="<?=$site_url?>/<?php the_id(); ?>"><?php the_title(); ?></a>
                </li>
            </ul>
        <?php endwhile; endif;?>
    </main>
<?php get_footer(); ?>