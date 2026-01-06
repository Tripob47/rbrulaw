import './bootstrap';
import '../css/app.css';

import { createInertiaApp } from '@inertiajs/react';
import { InertiaProgress } from '@inertiajs/progress';
import { createRoot } from 'react-dom/client';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => (title ? `${title} | ${appName}` : appName),
    resolve: (name) => {
        const pages = require.context('./Pages', true, /\.jsx$/);

        return pages(`./${name}.jsx`).default;
    },
    setup({ el, App, props }) {
        createRoot(el).render(<App {...props} />);
    },
});

InertiaProgress.init({ color: '#0d6efd' });
