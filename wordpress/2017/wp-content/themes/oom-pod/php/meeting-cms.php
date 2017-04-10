?<

function savePost ($box_name, $post_id ) {
    // Check if our nonce is set.
    if ( ! isset( $_POST[$box_name . '_value'] ) ) {
        return;
    }

    // Verify that the nonce is valid.
    if ( ! wp_verify_nonce( $_POST[$box_name . '_nonce'], $box_name . '_box' ) ) {
        return;
    }

    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check the user's permissions.
    if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
        if ( ! current_user_can( 'edit_page', $post_id ) ) {
            return;
        }
    } else {
        if ( ! current_user_can( 'edit_post', $post_id ) ) {
            return;
        }
    }

    // OK, it's safe for us to save the data now
    // Make sure that it is set.
    if ( ! isset( $_POST[$box_name . '_value'] ) ) {
        return;
    }

    // Sanitize user input.
    $input_value = sanitize_text_field( $_POST[$box_name . '_value'] );

    // Update the meta field in the database.
    update_post_meta( $post_id, $box_name . '_value', $input_value );
}

function createCMSinput($box_name) {
    wp_nonce_field( $box_name. '_value', $box_name . '_nonce' );
    $input_value = get_post_meta( $post->ID, $box_name. '_value', true );
    echo $input_value . ':';
    echo '<input type="text" id="' . $box_name .'" name="' . $box_name .'_value" value="' . esc_attr( $input_value  ) . '">';
}



// collection of meta boxes saving posts

$cmsValues = ['meeting_date', 'meeting_location', 'meeting_city', 'meeting_street', 'meeting_zipcode', 'meeting_lng', 'meeting_lat'];

function savePostMetaBoxes($post_id) {
    for ($i = 0; $i < $count($cmsValues); $i++) {
        $item = $cmsValues[$i];
        savePost($item, $post_id);

    }
}



function createAllCMSinputs() {
    $l = $count($cmsValues);
    for ($i = 0; $i < $l; $i++) {
        $item = $cmsValues[$i];
        $screens = array( 'post');
        foreach ( $screens as $screen ) {
            add_meta_box(
                $item . '_id',
                $item,
                createCMSinput,
                $screen
            );
        }
    }
}

add_action( 'save_post', 'savePostMetaBoxes' );
add_action( 'add_meta_boxes', 'createAllCMSinputs' );