@include('components.page-header', [
    'title' => $title ?? __('index.qa'),
    'breadcrumbs' => [
        ['label' => __('index.home'), 'url' => url(app()->getLocale())],
        ['label' => __('index.qa'), 'url' => url(app()->getLocale().'/qa')],
        ['label' => $title ?? __('index.qa')],
    ],
])
