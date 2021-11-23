<?php
if( ! function_exists( 'custom_comments' ) ):
function custom_comments($comment, $args, $depth) {
    ?>
   <div <?php comment_class(); ?> id="comment-<?php comment_ID() ?>">
    <div class="comment flex flex-row mb-6">
        <div class="mr-4">
            <?php echo get_avatar($comment,$size='80',$default='http://0.gravatar.com/avatar/36c2a25e62935705c5565ec465c59a70?s=32&d=mm&r=g', "", array(
                "class" => "rounded-lg"
            ) ); ?>
        </div>
        <div class="comment-block flex-grow">
            <div class="comment-arrow"></div>
                <?php if ($comment->comment_approved == '0') : ?>
                    <em><?php esc_html_e('Your comment is awaiting moderation.','5balloons_theme') ?></em>
                    <br />
                <?php endif; ?>
                <span class="comment-by">
                    <strong class="mr-4"><?php echo get_comment_author() ?></strong>
                    <span class="float-right text-gray-600">
                        <span> <a href="#"><i class="fas fa-reply"></i> <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></a></span>
                    </span>
                </span>
            <p> <?php comment_text() ?></p>
            <span class="date float-right text-sm"><?php printf(/* translators: 1: date and time(s). */ esc_html__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></span>
        </div>
        </div>

<?php
        }
endif;