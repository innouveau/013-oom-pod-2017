<?php
/**
 * Created by PhpStorm.
 * User: Arjen
 * Date: 10/04/2017
 * Time: 17:17
 */

class PostHandler
{
    protected $postData;
    protected $postId;
    protected $dataSource;
    /**
     * PostHandler constructor.
     * @param $postData
     * @param $dataSource
     */
    public function __construct($postData, $dataSource, $postId)
    {
        $this->postData = $postData;
        $this->postId = $postId;
        $this->dataSource = $dataSource;
    }

    public function process()
    {
        if ( ! wp_verify_nonce( $_POST['pod_nonce'], 'pod_nonce') )
        {
            return;
        }

        foreach($this->dataSource as $group)
        {
            if(array_key_exists('programs', $group))
            {
                foreach($group['programs'] as $item)
                {
                    foreach($item['fields'] as $field)
                    {
                        $this->saveMetaEntry($field['name']);
                    }
                }
            }
            else
            {
                foreach($group['fields'] as $field)
                {
                    $this->saveMetaEntry($field['name']);
                }
            }
        }
    }


    protected function saveMetaEntry($box_name)
    {
        if ( ! isset( $_POST[$box_name . '_value'] ) ) {
            return;
        }

        // If this is an autosave, our form has not been submitted, so we don't want to do anything.
        if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
            return;
        }

        // Check the user's permissions.
        if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) {
            if ( ! current_user_can( 'edit_page', $this->postId ) ) {
                return;
            }
        } else {
            if ( ! current_user_can( 'edit_post', $this->postId ) ) {
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
        update_post_meta( $this->postId, $box_name . '_value', $input_value );
    }
    
}