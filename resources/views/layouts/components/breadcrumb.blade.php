@php
    $_breadcrumb = [
        'title' => $title ?? null,
        
        'path' => [],
        'html' => null,
    ];
    
    if(isset($path)) {
        if(is_array($path)) {
            foreach($path as $item) {
                $is_active = '';
                if ($item === end($path)) {
                    $is_active = ' active';
                }
                if(isset($item['url'])) {
                    if(isset($item['name'])) {
                        $_breadcrumb['path'][] = '<li class="breadcrumb-item'.$is_active.'"><a href="'.$item['url'].'">'.$item['name'].'</a></li>';
                    }
                } else {
                    $_breadcrumb['path'][] = '<li class="breadcrumb-item'.$is_active.'">'.$item.'</li>';
                }
            }
        } else if($path) {
            if(trim($path)) {
                $_breadcrumb['path'][] = '<li class="breadcrumb-item active">'.$path.'</li>';
            } else {
                $_breadcrumb['path'][] = '';
            }
        }
        if(count($_breadcrumb['path'])) {
            $_breadcrumb['html'] = '<li class="breadcrumb-item"><a href="'.route('home.index').'">'.__('menu.home').'</a></li>' . implode('', $_breadcrumb['path']);
        }
    } else {
        $_breadcrumb['html'] = '<li class="breadcrumb-item"><a href="'.route('home.index').'">'.__('menu.home').'</a></li>';
    }

@endphp

<div class="breadcrumb-section bgc-offset mb-full">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <nav class="breadcrumb">
                    {!! $_breadcrumb['html'] !!}
                    @if($_breadcrumb['title'])
                    <span class="breadcrumb-item active">{!! $_breadcrumb['title'] !!}</span>
                    @endif
                </nav>
            </div>
        </div>
    </div>
</div>