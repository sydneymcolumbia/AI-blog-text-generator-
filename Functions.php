function handle_generate_blog_post() {
    if (!isset($_POST['text'])) {
        wp_send_json_error('No text provided');
    }
    $text = sanitize_text_field($_POST['text']);
    $result = call_openai_api($text); // This should be your function to call the API
    wp_send_json_success($result);
}
add_action('wp_ajax_generate_blog_post', 'handle_generate_blog_post');
add_action('wp_ajax_nopriv_generate_blog_post', 'handle_generate_blog_post');
