<!-- Page Title -->
@include('components.page-header', [
    'title' => $title ?? __('index.about'),
    'breadcrumbs' => [
        ['label' => 'หน้าแรก', 'url' => url('/')],
        ['label' => __('index.about'), 'url' => url('/about')],
        ['label' => $title ?? __('index.about')],
    ],
])
