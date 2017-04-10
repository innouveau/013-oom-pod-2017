<?php
/**
 * Created by PhpStorm.
 * User: Arjen
 * Date: 10/04/2017
 * Time: 17:12
 */

class InterfaceBuilder
{
    protected $dataSource;

    public function __construct($dataSource)
    {
        $this->dataSource = $dataSource;
    }

    public function init()
    {
        $screens = ['post'];

        foreach ($screens as $screen)
        {
            foreach ($this->dataSource as $box)
            {
                add_meta_box(
                    $box['title'] . '_id',
                    $box['title'],
                    [$this, 'createMetaBox'],
                    $screen,
                    'normal',
                    'low',
                    ['box' => $box]
                );
            }
        }
    }

    public function createMetaBox($post, $data)
    {
//        var_dump($data['args']['box']['fields']); die();

        if(array_key_exists('programs', $data['args']['box']))
        {
            foreach($data['args']['box']['programs'] as $title => $program)
            {
                $this->setTitle($title);
                foreach($program['fields'] as $field)
                {
                    $this->createFormElement($post ,$field);
                }
//
            }
        }
        else
        {
            foreach($data['args']['box']['fields'] as $field)
            {
                $this->createFormElement($post, $field);
            }
        }
    }

    public function createFormElement($post, $field)
    {
        wp_nonce_field('pod_nonce', 'pod_nonce');

        $input_value = get_post_meta($post->ID, $field['name']. '_value', true );
        $type = $field['type'];

        if ($type == 'input') {
            echo '<input type="text" size="' . $field['size'] . '" placeholder="' . $field['placeholder'] .'" id="' . $field['name'] .'" name="' . $field['name'] .'_value" value="' . esc_attr( $input_value  ) . '">';
            echo "<br />";
        } else if ($type == 'textarea') {
             echo '<textarea style="resize:none" cols="40" rows="' . $field['size'] . '" placeholder="' . $field['placeholder'] .'" id="' . $field['name'] .'" name="' . $field['name'] .'_value">' . esc_attr( $input_value  ) . '</textarea>';
            echo "<br />";
        }
    }

    protected function setTitle($title)
    {
        echo "<h2>" . $title . "</h2>";
    }
}