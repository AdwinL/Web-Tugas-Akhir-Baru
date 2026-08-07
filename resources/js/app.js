// resources/js/app.js
// Penjelasan (Indonesia):
// - File entry point JavaScript untuk inisialisasi Alpine.js dan mounting komponen React kecil
// - Mengimpor komponen hasil ekspor Framer untuk ditampilkan di halaman depan

import './bootstrap';

import Alpine from 'alpinejs';
import React from 'react';
import { createRoot } from 'react-dom/client';
import { motion } from 'framer-motion';

import Q3ukJyjo from './framer/Q3ukJyjo.js';
import Hlgmh5xpi from './framer/Hlgmh5xpi.js';
import T8fy7rg57 from './framer/T8fy7rg57.js';
import Ogjenw4bb from './framer/Ogjenw4bb.js';
import Qcetymkys from './framer/Qcetymkys.js';
import T8fy7rg572 from './framer/T8fy7rg572.js';
import Gkhxp7jno from './framer/Gkhxp7jno.js';
import Q3ukJyjo2 from './framer/Q3ukJyjo2.js';
import Rs from './framer/Rs.js';
import Hlgmh5xpi2 from './framer/Hlgmh5xpi2.js';
import Rs2 from './framer/Rs2.js';
import St4fztt4 from './framer/St4fztt4.js';

import './framer/tokens.css';
import './framer/_responsive-runtime.css';

window.Alpine = Alpine;
Alpine.start();

// daftar komponen Framer yang akan ditampilkan di showcase
const showcaseItems = [
    { component: Q3ukJyjo, label: 'Scenic Dining' },
    { component: Hlgmh5xpi, label: 'Signature Nights' },
    { component: T8fy7rg57, label: 'Curated Menus' },
    { component: Ogjenw4bb, label: 'Private Events' },
    { component: Qcetymkys, label: 'Sunset Service' },
    { component: T8fy7rg572, label: 'Beachside Lounge' },
    { component: Gkhxp7jno, label: 'Seasonal Specials' },
    { component: Q3ukJyjo2, label: 'Flexible Hosting' },
    { component: Rs, label: 'Guest Comfort' },
    { component: Hlgmh5xpi2, label: 'Chef’s Table' },
    { component: Rs2, label: 'Ocean View' },
    { component: St4fztt4, label: 'Fine Details' },
];

// Komponen React kecil yang merender grid showcase Framer
function FramerShowcase() {
    return React.createElement(
        'section',
        { className: 'mt-8 rounded-[2rem] border border-[#073842]/10 bg-white/80 p-6 shadow-[0_18px_60px_-24px_rgba(7,56,66,0.2)] backdrop-blur' },
        React.createElement(
            'div',
            { className: 'flex flex-col gap-4 md:flex-row md:items-end md:justify-between' },
            React.createElement(
                'div',
                null,
                React.createElement('p', { className: 'text-sm font-semibold uppercase tracking-[0.3em] text-[#E86F45]' }, 'Framer studio'),
                React.createElement('h3', { className: 'mt-2 text-2xl font-semibold text-[#073842]' }, 'A polished coastal experience, rendered in motion')
            ),
            React.createElement('p', { className: 'max-w-xl text-sm leading-7 text-[#315A5F]' }, 'The exported Framer pieces now live inside the landing experience as branded details, feature accents, and motion-rich highlights.')
        ),
        React.createElement(
            'div',
            { className: 'mt-6 grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4' },
            showcaseItems.map((item, index) => {
                const Component = item.component;
                return React.createElement(
                    motion.div,
                    {
                        key: item.label,
                        initial: { opacity: 0, y: 12 },
                        animate: { opacity: 1, y: 0 },
                        transition: { duration: 0.35, delay: index * 0.04 },
                        className: 'rounded-[1.25rem] border border-[#073842]/10 bg-[#FFF9F1] p-4',
                    },
                    React.createElement(
                        'div',
                        { className: 'flex h-12 w-12 items-center justify-center rounded-2xl bg-white' },
                        React.createElement(Component, { color: '#E86F45', height: 24, width: 24 })
                    ),
                    React.createElement('p', { className: 'mt-4 text-sm font-semibold text-[#073842]' }, item.label)
                );
            })
        )
    );
}

const showcaseMount = document.getElementById('framer-showcase');

if (showcaseMount) {
    createRoot(showcaseMount).render(
        React.createElement(React.StrictMode, null, React.createElement(FramerShowcase))
    );
}
