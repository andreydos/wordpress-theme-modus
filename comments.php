<?php if (comments_open()) { ?>
    <h3 class="comments-caption"><a name="comments"><?php comments_number('Comments', '1 Comment', '% Comments'); ?></a></h3>
    <?php if (get_comments_number() == 0) { ?>
        <ul class="list">
            <li>Add your comment...</li>
        </ul>
    <?php } else { ?>
        <ul class="commentlist">
            <?php
            function markup_comment($comment, $args, $depth){
            $GLOBALS['comment'] = $comment; ?>
            <li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
                <div id="comment-<?php comment_ID(); ?>">
                    <div class="comment-author vcard clearfix">
                        <div class="avatar-wrapper">
                            <?php echo get_avatar($comment,$size='70',$default='http://dfdfdfdf.esy.es/wp-content/uploads/2016/05/avatar.png' ); ?>
                        </div>
                        <?php printf(__('<div><strong class="fn">%s</strong></div>'), get_comment_author_link()) ?>
                        <div class="comment-meta commentmetadata">
                            <div><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></div>
                        </div>
                        <div class="reply">
                            <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                        </div>
                    </div>
                    <?php if ($comment->comment_approved == '0') : ?>
                        <em><?php _e('Your comment is awaiting moderation.') ?></em>
                        <br>
                    <?php endif; ?>
                    <?php comment_text() ?>

                </div>
                <?php }
                $args = array(
                    'reply_text' => '<span class="post__comment-reply"><i class="fa fa-repeat fa-flip-horizontal" aria-hidden="true"></i> REPLY</span> ',
                    'callback' => 'markup_comment'
                );
                wp_list_comments($args);
                ?>
        </ul>
    <?php } ?>

    <?php
    $fields = array(
        'author' => '<p class="comment-form-author"><input type="text" id="author" name="author" class="author" value="' . esc_attr($commenter['comment_author']) . '" placeholder=""  autocomplete="on" tabindex="1" required><label for="author">' . __( 'Name ' ) . ($req ? '<span class="required"></span>' : '') . '</label></p>',
        'email' => '<p class="comment-form-email"><input type="email" id="email" name="email" class="email" value="' . esc_attr($commenter['comment_author_email']) . '"   autocomplete="on" tabindex="2" required><label for="email">' . __( 'Email ') . ($req ? '<span class="required"></span>' : '') . '</label></p>',
        'url' => '<p class="comment-form-url"><input type="url" id="url" name="url" class="site" value="' . esc_attr($commenter['comment_author_url']) . '" tabindex="3" autocomplete="on"><label for="url">' . __( 'Website ' ) . '</label></p>'
    );

    $args = array(
        'comment_notes_after' => '',
        'comment_field' => '<p class="comment-form-comment"><textarea id="comment" name="comment" class="comment-form" rows="8" aria-required="true"></textarea></p>',
        'label_submit' => 'SEND',
        'fields' => apply_filters('comment_form_default_fields', $fields)
    );
    comment_form($args);
    ?>
<?php } else { ?>
    <h3>Обсуждения закрыты для данной страницы</h3>
<?php }
?>