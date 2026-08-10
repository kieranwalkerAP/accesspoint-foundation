<?php 
    $related_posts_title = get_field('related_posts_title', 'option');
    $related_posts_content = get_field('related_posts_content', 'option');
?>

<section class="blog__related-posts">
    <div class="blog__related-posts--inner container">
        <h2 class="blog__related-posts--title"><?php echo ($related_posts_title)?></h2>
        <?php if ($related_posts_content): ?>
            <div class="blog__related-posts--content">
                <?php echo ($related_posts_content)?>
            </div>
        <?php endif; ?>
    </div>
</section>