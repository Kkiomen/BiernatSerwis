<div class="content">
    @if($content['type'] == 'text')
        @include('cms_page.partials.type.text', ['element' => $content])
    @elseif($content['type'] == 'image' || $content['type'] == 'img')
        @include('cms_page.partials.type.image', ['element' => $content, 'type' => $content['type']])
    @elseif($content['type'] == 'button')
        @include('cms_page.partials.type.button', ['element' => $content, 'type' => $content['type']])
    @endif

    @if(!empty($content['content']))
        @foreach($content['content'] as $subContent)
            @include('cms_page.partials.content', ['content' => $subContent])
        @endforeach
    @endif
</div>