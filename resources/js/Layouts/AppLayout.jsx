import React from 'react';
import { Head, Link } from '@inertiajs/react';

export default function AppLayout({ title, children }) {
    return (
        <div className="app-shell">
            <Head title={title ?? 'RBRU Law'} />
            <header className="app-nav">
                <div className="brand">RBRU LAW</div>
                <nav className="nav-links">
                    <Link href="/app">Inertia</Link>
                    <a href="/">Blade</a>
                    <a href="/news">News</a>
                </nav>
            </header>
            <main className="app-main">{children}</main>
        </div>
    );
}
