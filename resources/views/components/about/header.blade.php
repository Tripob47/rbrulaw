<!-- Page Title -->
@include('components.page-header', [
    'title' => $title ?? __('index.about'),
    'breadcrumbs' => [
        ['label' => __('index.home'), 'url' => url(app()->getLocale())],
        ['label' => __('index.about'), 'url' => url(app()->getLocale().'/about')],
        ['label' => $title ?? __('index.about')],
    ],
])
