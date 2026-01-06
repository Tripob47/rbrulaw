import React from 'react';
import AppLayout from '../Layouts/AppLayout';

export default function Home() {
    const highlights = [
        { title: 'Single-page feel', detail: 'Navigate between Laravel routes without losing state or reloading scripts.' },
        { title: 'Reuse controllers', detail: 'Return Inertia responses from the same routes/controllers you already use.' },
        { title: 'Progressive migration', detail: 'Move Blade screens to React one by one without a big bang rewrite.' },
    ];

    const quickLinks = [
        { href: '/news', label: 'ข่าวสาร' },
        { href: '/about', label: 'ข้อมูลคณะ' },
        { href: '/aeasearch', label: 'ระบบค้นหา' },
    ];

    return (
        <AppLayout title="Inertia + React">
            <section className="hero">
                <div>
                    <div className="pill">Now running on Inertia + React</div>
                    <h1>เริ่มย้าย UI ไป React ได้เลย</h1>
                    <p>
                        สแตก Inertia ถูกตั้งค่าแล้ว คุณสามารถสร้างเพจ React ใหม่ และส่งข้อมูลจากคอนโทรลเลอร์เดิมได้ทันที
                        โดยไม่ต้องเปลี่ยนแปลง API ฝั่งเซิร์ฟเวอร์
                    </p>
                    <a className="cta" href="/app">
                        ดูหน้าแรก Inertia
                    </a>
                </div>
                <div className="card">
                    <h3>ขั้นตอนถัดไป</h3>
                    <ul>
                        <li>เปลี่ยน Route ให้ return Inertia::render()</li>
                        <li>สร้างเพจใน resources/js/Pages</li>
                        <li>ใช้ AppLayout เพื่อแชร์ UI ส่วนกลาง</li>
                    </ul>
                </div>
            </section>

            <div className="card-grid">
                {highlights.map((item) => (
                    <div className="card" key={item.title}>
                        <h3>{item.title}</h3>
                        <p>{item.detail}</p>
                    </div>
                ))}
            </div>

            <div className="grid-footer">
                {quickLinks.map((link) => (
                    <a className="button-ghost" key={link.href} href={link.href}>
                        {link.label}
                    </a>
                ))}
            </div>
        </AppLayout>
    );
}
