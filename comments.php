<div class="py-12">
  <div>
    <h2 class="text-center text-2xl font-bold">
      <?php 
        if(!have_comments()) {
          echo "Leave a Comment!";
        } else {
          echo get_comments_number() . " Comments";
        }
      ?>
    </h2>
  </div>
  <div class="mt-12 py-6 max-w-5xl mx-auto">
    <?php 
      wp_list_comments(
        array(
          "avatar_size" => 120,
          "style" => "div",
          "callback" => "custom_comments"
        )
      );
    ?>
  </div>
  <div class="border-t border-gray-200 dark:border-gray-800 mt-12 py-6">
    <div class="max-w-2xl mx-auto">
      <?php 
        if(comments_open()) {
          comment_form(
            array(
              "fields" => array(
                "author" => '<p class="comment-form-author mb-4"><input id="author" name="author" class="outline-none border-b-2 w-full py-2 px-4 bg-gray-100 dark:bg-gray-900 focus:border-green-500 dark:focus:border-green-500 transition-all border-gray-200 dark:border-gray-800" type="text" value="" size="30" maxlength="245" placeholder="Name*" required="required"></p>',
                "email" => '<p class="comment-form-email mb-4"><input id="email" name="email" class="outline-none border-b-2 w-full py-2 px-4 bg-gray-100 dark:bg-gray-900 focus:border-green-500 dark:focus:border-green-500 transition-all border-gray-200 dark:border-gray-800" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" placeholder="Email*" required="required"></p>',
                "cookies" => '<p class="comment-form-cookies-consent mb-2 px-4"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="" checked=""> <label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time I comment.</label></p>'
              ),
              "comment_field" => '<p class="comment-form-comment mb-2"><textarea id="comment" name="comment" class="outline-none border-b-2 w-full py-2 px-4 bg-gray-100 dark:bg-gray-900 focus:border-green-500 dark:focus:border-green-500 transition-all border-gray-200 dark:border-gray-800" cols="45" rows="1" maxlength="65525" placeholder="Comments*" required="required"></textarea></p>',
              "title_reply_before" => '<h2 id="reply-title" class="font-bungee text-2xl mb-4">',
              "title_reply_after" => '</h2>',
              "submit_button" => '<input name="%1$s" type="submit" id="%2$s" class="rounded-lg w-full py-2 px-4 my-2 bg-green-500 font-semibold font-kanit text-white hover:bg-green-700 transition-all" value="%4$s" />',
              "comment_notes_before" => '<p class="comment-notes mb-4"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>'
            )
          );
        }
      ?>
    </div>
  </div>
</div>