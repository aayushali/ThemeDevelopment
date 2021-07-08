<?php
// Getting Next Adjacent Post
$next_post = get_adjacent_post(false, '', false, 'category');
//Getting Previous Adjacent Post
$previous_post = get_adjacent_post();
?>
<div class="next-previous-articles">
    <?php if (!empty($previous_post)): ?>
        <div class="previous-article">
            <h4><?php _e('Previous Article', 'codewithme'); ?></h4>
            <?php aayush_output_post_thumb_and_title($previous_post->ID) ?>
        </div>
    <?php endif; ?>
    <?php if (!empty($next_post)): ?>
        <div class="next-article">
            <h4><?php _e('Next Article', 'codewithme'); ?></h4>
            <?php aayush_output_post_thumb_and_title($next_post->ID) ?>
        </div>
    <?php endif; ?>
</div>
