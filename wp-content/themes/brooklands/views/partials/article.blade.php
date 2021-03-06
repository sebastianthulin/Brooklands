<?php global $post; ?>
<article class="clearfix">

    @if (isset(get_extended($post->post_content)['main']) && strlen(get_extended($post->post_content)['main']) > 0 && isset(get_extended($post->post_content)['extended']) && strlen(get_extended($post->post_content)['extended']) > 0)

        {!! apply_filters('the_lead', get_extended($post->post_content)['main']) !!}
        {!! apply_filters('the_content', get_extended($post->post_content)['extended']) !!}

    @else
        @if (substr($post->post_content, -11) == '<!--more-->')
        {!! apply_filters('the_lead', get_extended($post->post_content)['main']) !!}
        @else
        {!! the_content() !!}
        @endif

    @endif

</article>
