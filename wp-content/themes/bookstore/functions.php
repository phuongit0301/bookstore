<?php
    include('inc/wp_bootstrap_navwalker.php');
    include('inc/simple_html_dom.php');

    // Retrieve the DOM from a given URL
    
    /*$title = '';
    $chapter = '';
    $content = '';
    $urls = array(
        'http://thichdoctruyen.com/doc-truyen/dai-la-thien-ton/chuong-128-186676.html',

    );
    $html = file_get_html('http://thichdoctruyen.com/doc-truyen/sa-vao-treu-gheo-vo-yeu-tong-giam-doc-vo-cung-cung-chieu/chuong-1-190802.html');
    foreach($html->find('.wapcat') as $e) {
        foreach($e->find('span.focus') as $elem) {
            $title = $elem;
        }

        foreach($e->find('p.tenchuong') as $elem) {
            $chapter = $elem;
        }
    }

    foreach($html->find('div.boxview') as $elem) {
        $content = $elem;
    }*/

    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ) );

/*    add_theme_support( 'post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'status',
        'audio',
        'chat',
    ) );*/

    add_theme_support( 'post-thumbnails', array( 'post', 'page', 'company_relate', 'product_feature', 'product_worker' ) );
    add_image_size( 'feature-image', 960, 500, true ); 
    add_image_size( 'medium-thumb', 300, 156, true );
    add_image_size( 'small-thumb', 120, 120, true );

    function register_menu() {
        register_nav_menu('primary-menu', __('Primary Menu'));
    }
    add_action('init', 'register_menu');

    //add css js to admin dashboard

    function add_to_author_profile( $contactmethods ) {
    
        $contactmethods['rss_url'] = 'RSS URL';
        $contactmethods['google_profile'] = 'Google Profile URL';
        $contactmethods['twitter_profile'] = 'Twitter Profile URL';
        $contactmethods['facebook_profile'] = 'Facebook Profile URL';
        $contactmethods['linkedin_profile'] = 'Linkedin Profile URL';
        
        return $contactmethods;
    }
    add_filter( 'user_contactmethods', 'add_to_author_profile', 10, 1);
    
    add_theme_support( 'admin-bar', array( 'callback' => '__return_false') );



    /*
    ==============
        add metabox to post    
    ================
    */
    function bookstore_featured_meta() {
        add_meta_box( 'bookstore_meta', __( 'Info Story', 'bookstore' ), 'bookstore_meta_callback', 'post', 'side', 'high' );
    }
    add_action( 'add_meta_boxes', 'bookstore_featured_meta' );
     
    /**
     * Outputs the content of the meta box
     */
     
    function bookstore_meta_callback( $post ) {
        wp_nonce_field( basename( __FILE__ ), 'bookstore_nonce' );
        $bookstore_stored_meta = get_post_meta( $post->ID );
        ?>
     
     <p>
        <div class="bookstore-row-content">
            <label for="chapter">
                <?php _e('Chapter', 'bookstore'); ?>
                <input type="text" name="chapter" id="chapter" value="<?php echo isset ( $bookstore_stored_meta['chapter'] ) ? $bookstore_stored_meta['chapter'][0] : ''; ?>" />
            </label>
            <br />
            <label for="book">
                <?php _e('Book Number', 'bookstore'); ?>
                <input type="text" name="book" id="book" value="<?php echo isset ( $bookstore_stored_meta['book'] ) ? $bookstore_stored_meta['book'][0] : 1; ?>" />
            </label>
     
        </div>
    </p>   
     
        <?php
    }
     
    /**
     * Saves the custom meta input
     */
    function bookstore_meta_save( $post_id ) {
     
        // Checks save status - overcome autosave, etc.
        $is_autosave = wp_is_post_autosave( $post_id );
        $is_revision = wp_is_post_revision( $post_id );
        $is_valid_nonce = ( isset( $_POST[ 'bookstore_nonce' ] ) && wp_verify_nonce( $_POST[ 'bookstore_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
     
        // Exits script depending on save status
        if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
            return;
        }
     
        // Checks for input and saves - save checked as yes and unchecked at no
        if( isset( $_POST[ 'chapter' ] ) ) {
            update_post_meta( $post_id, 'chapter', $_POST[ 'chapter' ] );
        } else {
            update_post_meta( $post_id, 'chapter', 0 );
        }

        if( isset( $_POST[ 'book' ] ) ) {
            update_post_meta( $post_id, 'book', $_POST[ 'book' ] );
        } else {
            update_post_meta( $post_id, 'book', 0 );
        }
     
    }
    add_action( 'save_post', 'bookstore_meta_save' );

    /*
    ==============
        end add metabox to post    
    ================
    */

    /*============== ADD COLUMN TO ADMIN SCREEN ===============*/

    add_filter('manage_posts_columns', 'bs_custom_edit_columns_head', 10);
    add_action('manage_posts_custom_column', 'bs_add_columns_content', 10, 2);

    function bs_custom_edit_columns_head($columns)
    {
        $columns['chapter'] = __( 'Chapter', 'bookstore' );
        $columns['book'] = __( 'Book Number', 'bookstore' );

        return $columns;
    }

    function bs_add_columns_content($column, $post_id) 
    {
        switch ( $column ) {
            case 'chapter' :
                echo get_post_meta( $post_id , 'chapter' , true );
                break;
            case 'book' :
                //var_dump(get_post_meta( $post_id ));exit;
                echo get_post_meta( $post_id , 'book' , true ); 
                break;

        }
    }
    /*============== END ADD COLUMN TO ADMIN SCREEN ===============*/
    function add_categories_for_attachments() { 
     register_taxonomy_for_object_type( 'category', 'attachment' ); } 
     add_action( 'init' , 'add_categories_for_attachments' ); 
     // add tags for attachments 
     function add_tags_for_attachments() {     
        register_taxonomy_for_object_type( 'post_tag', 'attachment' ); 
    } 
    add_action( 'init' , 'add_tags_for_attachments' );

    function get_dataa($url) {
      $ch = curl_init();
        $timeout = 5;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
        $data = curl_exec($ch);
        curl_close($ch);
        return $data;
    }

    add_action('init', 'insertData');

    function insertData()
    {
        wp_defer_term_counting(true);

        $tag = '';
        $title = '';
        $chapter = 0;
        $bookNumber = 0;
        $content = '';
        $html = file_get_html('http://goctruyen.com/dai-la-thien-ton/dau-khi_333230.html');
        foreach($html->find('ul.w3-ul') as $e) {
            foreach($e->find('li>h1>a') as $elem) {
                $tag = strtolower($elem->plaintext);
            }

            foreach($e->find('li>h3') as $elem) {
                $arr = explode('-', $elem);
                $arrBook = explode('.', $arr[0]);
                $bookNumber = (int) $arrBook[1];
                $arrChapter = explode(':', $arr[1]);

                $chapter = explode(' ', $arrChapter[0])[2];
                $title = str_replace('</h3>', '', $arrChapter[1]);
            }
        }

        foreach($html->find('#content') as $e) {
            $content = $e->inntertext;
        }
        $post_arr = array(
            'post_title'   => $title,
            'post_content' => $content,
            'post_status'  => 'publish',
            'post_type' => 'post',
            'post_author' => get_current_user_id(),
            'post_category' => array(7),
            'tags_input' => $tag
        );
        $post_id = wp_insert_post($post_arr);

        update_post_meta( $post_id, 'chapter', $chapter );   
        update_post_meta( $post_id, 'book', $bookNumber );   
    }