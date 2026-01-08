@include('components.page-header', [
    'title' => $title ?? __('index.qa'),
    'breadcrumbs' => [
        ['label' => 'หน้าแรก', 'url' => url('/')],
        ['label' => __('index.qa'), 'url' => url('/qa')],
        ['label' => $title ?? __('index.qa')],
    ],
])
