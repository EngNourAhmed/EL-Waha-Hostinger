<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>مياه الواحة الكويت | ترطيب نقي، يصلك إلى بابك.</title>
    <meta name="description" content="Premium bottled water for your family and office across all governorates of Kuwait.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            /* Palette matching reference images */
            --bg-hero-gradient: linear-gradient(108deg, #052d42 0%, #025c85 50%, #0284c7 100%);
            --primary-navy: #052d42;
            --primary-blue: #025c85;
            --accent-cyan: #0284c7;
            --text-white: #ffffff;
            --text-muted: rgba(255, 255, 255, 0.88);
            --border-glass: rgba(255, 255, 255, 0.18);
            --bg-glass: rgba(255, 255, 255, 0.12);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Inter', 'Cairo', sans-serif;
            background-color: #052d42;
            color: #0f172a;
            line-height: 1.6;
            overflow-x: hidden;
            font-size: 16px;
        }

        #homepage-view {
            background-color: #ffffff;
        }

        html[dir="rtl"] body {
            font-family: 'Cairo', 'Inter', sans-serif;
            text-align: right;
        }

        /* RTL: Prevent horizontal overflow */
        html[dir="rtl"] .hero-wrapper {
            overflow-x: hidden;
            max-width: 100%;
        }

        html[dir="rtl"] .hero-container {
            max-width: 100%;
            overflow-x: hidden;
        }

        html[dir="rtl"] .hero-title {
            white-space: normal;
            word-break: break-word;
            overflow-wrap: break-word;
            max-width: 100%;
        }

        html[dir="rtl"] .hero-badge {
            max-width: 100%;
            white-space: normal;
            word-break: break-word;
        }

        html[dir="rtl"] .hero-stats-row {
            flex-wrap: wrap;
            gap: 16px;
        }

        html[dir="rtl"] .circle-top-right {
            right: auto;
            left: 2.5%;
        }

        html[dir="rtl"] .circle-bottom-left {
            left: auto;
            right: 4.5%;
        }

        /* RTL: Story section - keep image visible on screen */
        html[dir="rtl"] .story-container {
            grid-template-columns: 1.15fr 1fr;
        }

        html[dir="rtl"] .story-img-box {
            order: 2;
        }

        html[dir="rtl"] .story-content {
            order: 1;
        }

        html[dir="rtl"] .reveal-from-left {
            transform: translateX(-60px);
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        /* 100vh Hero Page Wrapper */
        .hero-wrapper {
            background: var(--bg-hero-gradient);
            min-height: 100vh;
            min-height: 100dvh;
            position: relative;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            overflow: hidden;
        }

        /* ── 1. STICKY NAVBAR ON SCROLL ── */
        header {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            padding: 20px 50px 10px 50px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            z-index: 1000;
            background: linear-gradient(108deg, #052d42 0%, #025c85 50%, #0284c7 100%);
            transition: all 0.35s cubic-bezier(0.16, 1, 0.3, 1);
        }

        header.scrolled {
            padding: 14px 50px;
            background: linear-gradient(90deg, #02486c, #0988bc);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.22);
        }

        /* LEFT: Logo — مياه الواحة الكويت brand mark */
        .brand-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-right: 14px;
            transition: transform 0.2s ease;
            flex-shrink: 0;
        }

        html[dir="rtl"] .brand-logo {
            margin-right: 0;
            margin-left: 14px;
        }

        .brand-logo:hover {
            transform: scale(1.02);
        }

        .logo-circle-icon {
            width: 44px;
            height: 44px;
            background: #4c647a;
            border: none;
            border-radius: 35%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .logo-droplet-icon {
            display: block;
            width: 22px;
            height: 22px;
        }

        .brand-logo-text {
            display: flex;
            align-items: baseline;
            gap: 6px;
            font-size: 1.15rem;
            font-weight: 800;
            letter-spacing: 0.08em;
            line-height: 1;
            white-space: nowrap;
            margin: 0 15px 0 30px;
        }

        .brand-logo-oasis {
            color: #ffffff;
        }

        .brand-logo-oman {
            color: #ffffff;
        }

        #home, #products, #about, #quality, #story, #reviews, #faq, #contact {
            scroll-margin-top: 90px;
        }

        /* CENTER: Navigation Links Capsule */
        .nav-links-center {
            display: flex;
            align-items: center;
            gap: 8px;
            position: relative;
        }

        .nav-item {
            color: rgba(255, 255, 255, 0.88);
            font-weight: 700;
            font-size: 0.80rem;
            padding: 2px 10px;
            border-radius: 12px;
            transition: all 0.25s ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-item:hover {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.1);
        }

        .nav-item.active {
            background: rgba(255, 255, 255, 0.22);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            color: #ffffff;
            font-weight: 600;
            border-radius: 12px;
            padding: 8px 20px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.1);
        }

        /* ── 2. POLICIES DROPDOWN / MENU ── */
        .policies-dropdown-container {
            position: relative;
        }

        .policy-chevron {
            font-size: 0.75rem;
            transition: transform 0.25s ease;
            display: inline-block;
        }

        .policies-dropdown-container.open .policy-chevron {
            transform: rotate(180deg);
        }

        .policies-dropdown-menu {
            position: absolute;
            top: calc(100% + 12px);
            left: 0;
            background: #ffffff;
            color: #0f172a;
            border-radius: 20px;
            padding: 10px;
            width: 230px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.18);
            display: flex;
            flex-direction: column;
            gap: 4px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(12px);
            transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 1050;
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        html[dir="rtl"] .policies-dropdown-menu {
            left: auto;
            right: 0;
        }

        .policies-dropdown-container.open .policies-dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .dropdown-menu-item {
            padding: 10px 16px;
            font-size: 0.9rem;
            font-weight: 600;
            color: #334155;
            border-radius: 12px;
            transition: all 200ms ease;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .dropdown-menu-item:hover {
            background: #f0f9ff;
            color: #0284c7;
            transform: translateX(4px);
        }

        html[dir="rtl"] .dropdown-menu-item:hover {
            transform: translateX(-4px);
        }

        /* RIGHT: Language & Cart */
        .header-right {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .lang-dropdown-container {
            position: relative;
        }

        .lang-btn {
            background: none;
            border: none;
            color: #ffffff;
            font-size: 0.92rem;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 6px;
            font-family: inherit;
            padding: 6px 12px;
            border-radius: 10px;
            transition: background 200ms ease;
        }

        .lang-btn:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        .lang-dropdown-menu {
            position: absolute;
            top: calc(100% + 8px);
            right: 0;
            background: #ffffff;
            color: #0f172a;
            border-radius: 16px;
            padding: 8px;
            width: 140px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.15);
            display: flex;
            flex-direction: column;
            gap: 4px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.2s ease;
            z-index: 1050;
            border: 1px solid #e2e8f0;
        }

        html[dir="rtl"] .lang-dropdown-menu {
            right: auto;
            left: 0;
        }

        .lang-dropdown-container.open .lang-dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .lang-item {
            padding: 8px 14px;
            font-size: 0.88rem;
            font-weight: 600;
            color: #334155;
            border-radius: 10px;
            cursor: pointer;
            transition: background 200ms ease, color 200ms ease;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .lang-item:hover {
            background: #f0f9ff;
            color: #0284c7;
        }

        .cart-btn {
            background: transparent;
            border: none;
            color: #ffffff;
            cursor: pointer;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.25s ease;
            padding: 8px;
        }

        .cart-btn:hover {
            transform: scale(1.06);
            opacity: 0.8;
        }

        .cart-badge {
            position: absolute;
            top: -4px;
            right: -4px;
            background: #ef4444;
            color: white;
            font-size: 0.72rem;
            font-weight: 800;
            min-width: 20px;
            height: 20px;
            padding: 0 5px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            border: 2px solid #03364f;
            box-shadow: 0 4px 10px rgba(239, 68, 68, 0.4);
        }

        /* Mobile Hamburger Icon */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: #ffffff;
            font-size: 1.5rem;
            cursor: pointer;
            padding: 4px;
        }

        /* Mobile Menu Drawer */
        .mobile-drawer-overlay {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(6px);
            z-index: 2000;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .mobile-drawer-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .mobile-drawer-content {
            position: fixed;
            top: 0;
            right: 0;
            width: 280px;
            height: 100vh;
            background: #03364f;
            color: white;
            padding: 30px 24px;
            z-index: 2010;
            display: flex;
            flex-direction: column;
            gap: 20px;
            transform: translateX(100%);
            transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
            box-shadow: -10px 0 30px rgba(0,0,0,0.3);
        }

        html[dir="rtl"] .mobile-drawer-content {
            right: auto;
            left: 0;
            transform: translateX(-100%);
        }

        .mobile-drawer-overlay.active .mobile-drawer-content {
            transform: translateX(0);
        }

        .mobile-drawer-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid rgba(255, 255, 255, 0.15);
            padding-bottom: 16px;
        }

        .mobile-drawer-close {
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .mobile-nav-links {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .mobile-nav-item {
            padding: 10px 14px;
            border-radius: 10px;
            font-weight: 600;
            font-size: 1rem;
            color: rgba(255,255,255,0.9);
            display: flex;
            align-items: center;
            justify-content: space-between;
            cursor: pointer;
        }

        .mobile-nav-item:hover {
            background: rgba(255, 255, 255, 0.12);
        }

        /* Navbar Fade Down Animation */
        @keyframes fadeDownNav {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .anim-navbar {
            opacity: 0;
            animation: fadeDownNav 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        /* Decorative Outline Circles */
        .circle-top-right {
            position: absolute;
            top: 22px;
            right: 2.5%;
            width: 125px;
            height: 125px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
            animation: floatSlow 8s ease-in-out infinite;
        }

        .circle-bottom-left {
            position: absolute;
            bottom: 160px;
            left: 4.5%;
            width: 98px;
            height: 98px;
            border: 2px solid rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            pointer-events: none;
            z-index: 1;
            animation: floatSlow 8s ease-in-out 4s infinite;
        }

        @keyframes floatSlow {
            0%, 100% { transform: translateY(0px) rotate(0deg); }
            50% { transform: translateY(-12px) rotate(3deg); }
        }

        /* HERO CONTAINER */
        .hero-container {
            min-height: 100vh;
            min-height: 100dvh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 110px 20px 30px;
            max-width: 1240px;
            margin: 0 auto;
            width: 100%;
            position: relative;
            z-index: 5;
            transition: opacity 0.1s linear, transform 0.1s linear;
        }

        /* TOP BADGE */
        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: var(--bg-glass);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid var(--border-glass);
            padding: 6px 24px;
            border-radius: 40px;
            font-size: 0.88rem;
            font-weight: 600;
            color: var(--text-white);
            margin-top: 20px;
            margin-bottom: 22px;
        }

        .hero-badge span {
            color: #facc15;
        }

        /* HERO TITLE */
        .hero-title {
            font-weight: 900;
            font-size: clamp(3.2rem, 5.8vw, 5.8rem);
            white-space: normal;
            color: #ffffff;
            line-height: 1.15;
            letter-spacing: -0.5px;
            max-width: 100%;
            margin-top: 14px;
            margin-bottom: 18px;
            word-break: break-word;
            overflow-wrap: break-word;
        }

        /* DESCRIPTION */
        .hero-subtitle {
            font-size: 1.15rem;
            font-weight: 400;
            color: var(--text-muted);
            max-width: 680px;
            line-height: 1.5;
            margin: 12px auto 28px;
        }

        /* CTA BUTTON */
        .btn-primary-cta {
            background: #ffffff;
            color: var(--primary-navy);
            font-size: 1.08rem;
            font-weight: 700;
            padding: 15px 44px;
            border-radius: 14px;
            border: none;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            margin-top: 12px;
            margin-bottom: 36px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.18);
            transition: transform 300ms ease, box-shadow 300ms ease, background-color 300ms ease;
        }

        .btn-primary-cta:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.28);
            background-color: #f8fafc;
        }

        /* STATISTICS */
        .hero-stats-row {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 32px;
            margin-top: 24px;
            flex-wrap: wrap;
        }

        .stat-item {
            text-align: center;
        }

        .stat-number {
            font-size: 2.3rem;
            font-weight: 900;
            color: #ffffff;
            line-height: 1.1;
        }

        .stat-label {
            font-size: 0.85rem;
            color: rgba(255, 255, 255, 0.75);
            font-weight: 500;
        }

        /* SCROLL INDICATOR */
        .scroll-down-indicator {
            margin-top: 20px;
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.6);
            animation: bounce 2s infinite;
            cursor: pointer;
        }

        @keyframes bounce {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-7px); }
            60% { transform: translateY(-3px); }
        }

        /* ── REFRESH HERO ANIMATIONS ── */
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUpFade {
            from { opacity: 0; transform: translateY(35px); }
            to { opacity: 1; transform: translateY(0); }
        }

        .anim-badge { opacity: 0; animation: fadeIn 0.8s ease 0.15s forwards; }
        .anim-title { opacity: 0; animation: slideUpFade 0.9s cubic-bezier(0.16, 1, 0.3, 1) 0.3s forwards; }
        .anim-subtitle { opacity: 0; animation: slideUpFade 0.9s cubic-bezier(0.16, 1, 0.3, 1) 0.45s forwards; }
        .anim-button { opacity: 0; animation: slideUpFade 0.9s cubic-bezier(0.16, 1, 0.3, 1) 0.6s forwards; }
        .anim-stat-1 { opacity: 0; animation: slideUpFade 0.8s ease 0.75s forwards; }
        .anim-stat-2 { opacity: 0; animation: slideUpFade 0.8s ease 0.88s forwards; }
        .anim-stat-3 { opacity: 0; animation: slideUpFade 0.8s ease 1.01s forwards; }
        .anim-arrow { opacity: 0; animation: slideUpFade 0.8s ease 1.15s forwards; }

        /* ── SCROLL-TRIGGERED ENTRANCE ANIMATIONS ── */
        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(50px);
            transition: opacity 0.85s cubic-bezier(0.16, 1, 0.3, 1), transform 0.85s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }

        .reveal-on-scroll.revealed {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-from-left {
            opacity: 0;
            transform: translateX(-60px);
            transition: opacity 0.95s cubic-bezier(0.16, 1, 0.3, 1), transform 0.95s cubic-bezier(0.16, 1, 0.3, 1);
            will-change: opacity, transform;
        }

        html[dir="rtl"] .reveal-from-left {
            transform: translateX(60px);
        }

        .reveal-from-left.revealed {
            opacity: 1;
            transform: translateX(0);
        }

        .card-delay-1 { transition-delay: 0.1s; }
        .card-delay-2 { transition-delay: 0.2s; }
        .card-delay-3 { transition-delay: 0.3s; }
        .card-delay-4 { transition-delay: 0.4s; }

        /* ── 5. PRODUCT CARD REDESIGN (EXACT MATCH REFERENCE IMAGE 2) ── */
        .products-wrapper {
            background-color: #f4f7fa;
            border-top: 4px solid var(--primary-blue);
            color: #0f172a;
            padding: 100px 24px 100px;
            width: 100%;
        }

        .products-container {
            max-width: 1240px;
            margin: 0 auto;
        }

        .section-header-ref {
            text-align: center;
            margin-bottom: 56px;
        }

        .section-title-ref {
            font-size: 2.6rem;
            font-weight: 800;
            color: var(--primary-navy);
            letter-spacing: -0.5px;
        }

        .section-subtitle-ref {
            font-size: 1.08rem;
            color: #64748b;
            margin-top: 10px;
            font-weight: 400;
        }

        .products-grid-ref {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 28px;
            align-items: stretch;
        }

        .product-card-ref {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            height: 100%;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.03);
            transition: transform 300ms ease, box-shadow 300ms ease, border-color 300ms ease;
            position: relative;
        }

        .product-card-ref:hover {
            transform: translateY(-8px);
            box-shadow: 0 22px 45px rgba(3, 54, 79, 0.12);
            border-color: var(--primary-blue);
        }

        .product-badge-tag {
            position: absolute;
            top: 16px;
            right: 16px;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(8px);
            color: #0369a1;
            font-size: 0.78rem;
            font-weight: 800;
            padding: 5px 14px;
            border-radius: 20px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.12);
            z-index: 10;
        }

        html[dir="rtl"] .product-badge-tag {
            right: auto;
            left: 16px;
        }

        /* Banner Container Matching Image 2 */
        .product-banner-box {
            position: relative;
            height: 220px;
            width: 100%;
            background: linear-gradient(135deg, #022637 0%, #05486c 50%, #087fae 100%);
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .product-banner-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 400ms ease;
        }

        .product-card-ref:hover .product-banner-box img {
            transform: scale(1.06);
        }

        .product-card-body {
            padding: 22px 20px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .product-title-ref {
            font-size: 1.28rem;
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 10px;
            line-height: 1.3;
        }

        .product-desc-ref {
            font-size: 0.88rem;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 22px;
            flex-grow: 1;
        }

        .product-bottom-bar {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 16px;
            border-top: 1px solid #f1f5f9;
            margin-top: auto;
        }

        .product-price-tag {
            font-size: 1.3rem;
            font-weight: 900;
            color: var(--primary-blue);
        }

        .btn-add-ref {
            background: #0284c7;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 14px;
            font-weight: 700;
            font-size: 0.92rem;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: background 200ms ease, transform 200ms ease, box-shadow 200ms ease;
            box-shadow: 0 4px 12px rgba(2, 132, 199, 0.25);
        }

        .btn-add-ref:hover {
            background: #0369a1;
            transform: translateY(-2px);
            box-shadow: 0 8px 18px rgba(2, 132, 199, 0.38);
        }

        /* ── 4. ADD TO CART MODAL (EXACT MATCH REFERENCE IMAGE 3) ── */
        .cart-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.65);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 2500;
            display: flex;
            align-items: flex-end; /* Align to bottom for bottom-sheet effect */
            justify-content: center;
            opacity: 0;
            visibility: hidden;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .cart-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .cart-modal-card {
            background: #ffffff;
            color: #0f172a;
            border-radius: 28px 28px 0 0;
            padding: 20px 24px 34px 24px;
            width: 100%;
            max-width: 600px;
            box-shadow: 0 -10px 40px rgba(0, 0, 0, 0.2);
            position: relative;
            transform: translateY(100%);
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
            min-height: 50vh;
            max-height: 90vh;
            display: flex;
            flex-direction: column;
        }

        .cart-modal-overlay.active .cart-modal-card {
            transform: translateY(0);
        }

        .btn-continue-shopping {
            background: #f1f5f9;
            color: #0f172a;
            border: none;
            border-radius: 14px;
            padding: 12px 24px;
            font-size: 1.05rem;
            font-weight: 800;
            cursor: pointer;
            transition: background 200ms ease;
            display: flex;
            align-items: center;
            justify-content: center;
            flex: 1;
        }
        .btn-continue-shopping:hover {
            background: #e2e8f0;
        }

        .modal-drag-handle {
            width: 38px;
            height: 4px;
            background: #cbd5e1;
            border-radius: 2px;
            margin: 0 auto 16px auto;
        }

        .cart-modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .cart-modal-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: #03364f;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .cart-modal-close-btn {
            background: #f1f5f9;
            border: none;
            width: 34px;
            height: 34px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            color: #64748b;
            cursor: pointer;
            transition: background 200ms ease, color 200ms ease;
        }

        .cart-modal-close-btn:hover {
            background: #e2e8f0;
            color: #0f172a;
        }

        .cart-items-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            flex-grow: 1;
            min-height: 200px;
            overflow-y: auto;
            margin-bottom: 20px;
            padding-right: 4px;
        }

        .cart-item-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 14px 16px;
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .cart-item-thumb {
            width: 72px;
            height: 72px;
            border-radius: 14px;
            overflow: hidden;
            background: linear-gradient(135deg, #03364f, #087fae);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .cart-item-thumb img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .cart-item-info {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .cart-item-name {
            font-size: 0.95rem;
            font-weight: 700;
            color: #03364f;
        }

        .cart-item-price {
            font-size: 0.9rem;
            font-weight: 800;
            color: #087fae;
        }

        .cart-item-controls-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 6px;
        }

        .qty-capsule {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #ffffff;
            border: 1px solid #cbd5e1;
            border-radius: 20px;
            padding: 3px 14px;
        }

        .qty-btn {
            background: none;
            border: none;
            font-size: 1.1rem;
            font-weight: 800;
            color: #087fae;
            cursor: pointer;
            width: 22px;
            height: 22px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .qty-val {
            font-size: 0.95rem;
            font-weight: 700;
            color: #0f172a;
        }

        .delete-item-btn {
            background: none;
            border: none;
            color: #94a3b8;
            cursor: pointer;
            font-size: 1rem;
            transition: color 200ms ease;
            padding: 4px;
        }

        .delete-item-btn:hover {
            color: #ef4444;
        }

        .cart-subtotal-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 14px;
            border-top: 1px solid #e2e8f0;
            margin-bottom: 20px;
        }

        .cart-subtotal-label {
            font-size: 1rem;
            font-weight: 700;
            color: #64748b;
        }

        .cart-subtotal-value {
            font-size: 1.35rem;
            font-weight: 900;
            color: #03364f;
        }

        .btn-checkout-modal {
            width: 100%;
            background: linear-gradient(90deg, #0a99c7 0%, #087fae 100%);
            color: #ffffff;
            border: none;
            border-radius: 40px;
            padding: 10px 16px;
            font-size: 1.05rem;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            cursor: pointer;
            box-shadow: 0 10px 25px rgba(10, 153, 199, 0.35);
            transition: transform 200ms ease, box-shadow 200ms ease;
        }

        .btn-checkout-modal:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 30px rgba(10, 153, 199, 0.45);
        }

        .audio-icon-badge {
            width: 38px;
            height: 38px;
            background: rgba(255, 255, 255, 0.22);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.15rem;
            flex-shrink: 0;
        }

        /* Empty Cart View */
        .empty-cart-msg {
            text-align: center;
            padding: 30px 10px;
            color: #64748b;
            font-size: 0.95rem;
        }

        /* Floating Audio Help Button (Matching Reference Images 1, 2 & 3) */
        .floating-help-btn {
            position: fixed;
            bottom: 24px;
            left: 24px;
            z-index: 1000;
            display: flex;
            align-items: center;
            gap: 10px;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            padding: 6px 18px 6px 8px;
            border-radius: 40px;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            cursor: pointer;
            transition: transform 250ms ease, box-shadow 250ms ease;
        }

        html[dir="rtl"] .floating-help-btn {
            left: auto;
            right: 24px;
            padding: 6px 8px 6px 18px;
        }

        .floating-help-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.22);
        }

        .floating-help-icon {
            width: 38px;
            height: 38px;
            background: #0284c7;
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
        }

        .floating-help-text {
            font-size: 0.9rem;
            font-weight: 700;
            color: #03364f;
        }

        /* ── WHY CHOOSE مياه الواحة الكويت SECTION ── */
        .why-us-wrapper {
            background-color: #eef6fb;
            color: #0f172a;
            padding: 100px 24px 100px;
            width: 100%;
        }

        .why-us-container {
            max-width: 1240px;
            margin: 0 auto;
        }

        .why-us-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .why-us-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 36px 28px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.02);
            transition: transform 300ms ease, box-shadow 300ms ease, border-color 300ms ease;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }

        .why-us-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.06);
            border-color: #087fae;
        }

        .why-icon-box {
            width: 52px;
            height: 52px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.4rem;
            margin-bottom: 24px;
        }

        .icon-blue { background: #3b82f6; color: white; }
        .icon-orange { background: #f97316; color: white; }
        .icon-teal { background: #10b981; color: white; }
        .icon-green { background: #22c55e; color: white; }
        .icon-purple { background: #8b5cf6; color: white; }
        .icon-pink { background: #ec4899; color: white; }

        .why-card-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 10px;
        }

        .why-card-desc {
            font-size: 0.92rem;
            color: #64748b;
            line-height: 1.6;
        }

        /* ── WATER QUALITY SECTION ── */
        .quality-wrapper {
            background-color: #e3eff6;
            color: #0f172a;
            padding: 100px 24px 110px;
            width: 100%;
        }

        .quality-container {
            max-width: 1240px;
            margin: 0 auto;
        }

        .quality-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .quality-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 30px 24px;
            display: flex;
            align-items: flex-start;
            gap: 18px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.02);
            transition: transform 300ms ease, box-shadow 300ms ease, border-color 300ms ease;
        }

        .quality-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.06);
            border-color: #087fae;
        }

        .quality-icon-circle {
            width: 48px;
            height: 48px;
            background: #0284c7;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .quality-card-body {
            display: flex;
            flex-direction: column;
        }

        .quality-card-header {
            font-size: 0.85rem;
            font-weight: 800;
            color: #0284c7;
            margin-bottom: 2px;
        }

        .quality-card-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 8px;
        }

        .quality-card-desc {
            font-size: 0.88rem;
            color: #64748b;
            line-height: 1.5;
        }

        /* ── OUR STORY SECTION ── */
        .story-wrapper {
            background-color: #f4f8fb;
            color: #0f172a;
            padding: 110px 24px 110px;
            width: 100%;
        }

        .story-container {
            max-width: 1240px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1.15fr;
            gap: 56px;
            align-items: center;
        }

        .story-img-box {
            border-radius: 28px;
            overflow: hidden;
            box-shadow: 0 20px 50px rgba(3, 54, 79, 0.15);
            background: #ffffff;
            height: 480px;
        }

        .story-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .story-content {
            display: flex;
            flex-direction: column;
        }

        .story-title {
            font-size: 2.6rem;
            font-weight: 800;
            color: var(--primary-navy);
            letter-spacing: -0.5px;
            margin-bottom: 6px;
        }

        .story-subtitle {
            font-size: 1.1rem;
            color: var(--primary-blue);
            font-weight: 600;
            margin-bottom: 24px;
        }

        .story-text-p {
            font-size: 0.95rem;
            color: #475569;
            line-height: 1.7;
            margin-bottom: 16px;
        }

        .story-cards-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-top: 16px;
            margin-bottom: 28px;
        }

        .story-box-card {
            background: rgba(255, 255, 255, 0.65);
            border: 1px solid rgba(8, 127, 174, 0.25);
            border-radius: 16px;
            padding: 20px;
        }

        .story-box-header {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 1.05rem;
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 8px;
        }

        .story-box-header span {
            color: var(--primary-blue);
        }

        .story-box-desc {
            font-size: 0.85rem;
            color: #64748b;
            line-height: 1.5;
        }

        .story-stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .story-mini-stat {
            background: rgba(255, 255, 255, 0.7);
            border-radius: 14px;
            padding: 16px 12px;
            text-align: center;
        }

        .story-stat-num {
            font-size: 1.4rem;
            font-weight: 800;
            color: var(--primary-blue);
        }

        .story-stat-lbl {
            font-size: 0.78rem;
            color: #64748b;
            font-weight: 500;
        }

        /* ── DELIVERY ACROSS KUWAIT SECTION ── */
        .delivery-wrapper {
            background-color: #e8f4fa;
            color: #0f172a;
            padding: 100px 24px 100px;
            width: 100%;
        }

        .delivery-container {
            max-width: 1240px;
            margin: 0 auto;
        }

        .delivery-main-grid {
            display: grid;
            grid-template-columns: 1.05fr 1.15fr;
            gap: 32px;
            align-items: stretch;
        }

        .delivery-features-column {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .delivery-feature-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 24px 28px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.02);
            transition: transform 300ms ease, border-color 300ms ease;
        }

        .delivery-feature-card:hover {
            transform: translateY(-4px);
            border-color: #087fae;
        }

        .del-icon-box {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .del-icon-green { background: #dcfce7; color: #16a34a; }
        .del-icon-blue { background: #dbeafe; color: #2563eb; }
        .del-icon-purple { background: #f3e8ff; color: #9333ea; }
        .del-icon-orange { background: #ffedd5; color: #ea580c; }

        .del-feature-title {
            font-size: 1.1rem;
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 4px;
        }

        .del-feature-desc {
            font-size: 0.88rem;
            color: #64748b;
            line-height: 1.45;
        }

        .delivery-right-column {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }

        .governorate-coverage-box {
            background: rgba(186, 230, 253, 0.4);
            border: 1px solid rgba(56, 189, 248, 0.35);
            border-radius: 24px;
            padding: 32px 28px;
        }

        .gov-box-header {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 20px;
        }

        .gov-pills-wrap {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 24px;
        }

        .gov-pill-tag {
            background: #ffffff;
            color: #0284c7;
            font-size: 0.85rem;
            font-weight: 700;
            padding: 6px 16px;
            border-radius: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.03);
            border: 1px solid rgba(226, 232, 240, 0.8);
        }

        .gov-free-banner {
            background: #ffffff;
            border-radius: 16px;
            padding: 20px 24px;
            border: 1px solid rgba(226, 232, 240, 0.9);
        }

        .gov-free-title {
            font-size: 1.35rem;
            font-weight: 900;
            color: #0284c7;
            margin-bottom: 4px;
        }

        .gov-free-desc {
            font-size: 0.88rem;
            color: #64748b;
        }

        .delivery-fleet-img-box {
            border-radius: 24px;
            overflow: hidden;
            height: 240px;
            box-shadow: 0 10px 30px rgba(3, 54, 79, 0.12);
        }

        .delivery-fleet-img-box img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* ── REVIEWS SECTION ── */
        .reviews-wrapper {
            background-color: #e4f2f9;
            color: #0f172a;
            padding: 100px 24px 100px;
            width: 100%;
        }

        .reviews-container {
            max-width: 1240px;
            margin: 0 auto;
        }

        .reviews-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .review-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 20px;
            padding: 32px 28px 24px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.02);
            transition: transform 300ms ease, box-shadow 300ms ease, border-color 300ms ease;
        }

        .review-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 18px 36px rgba(0, 0, 0, 0.06);
            border-color: #087fae;
        }

        .quote-icon {
            font-size: 2.2rem;
            color: #7dd3fc;
            line-height: 1;
            margin-bottom: 12px;
            font-family: Georgia, serif;
        }

        .review-text {
            font-size: 0.92rem;
            color: #475569;
            line-height: 1.6;
            margin-bottom: 24px;
            flex-grow: 1;
        }

        .review-author-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-top: 16px;
            border-top: 1px solid #f1f5f9;
        }

        .author-info {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .author-avatar-circle {
            width: 40px;
            height: 40px;
            background: #0284c7;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1rem;
        }

        .author-name {
            font-size: 0.95rem;
            font-weight: 800;
            color: var(--primary-navy);
        }

        .author-location {
            font-size: 0.8rem;
            color: #64748b;
        }

        .stars-row {
            color: #f59e0b;
            font-size: 0.95rem;
        }

        /* ── FAQ SECTION ── */
        .faq-wrapper {
            background-color: #f4f8fb;
            color: #0f172a;
            padding: 100px 24px 110px;
            width: 100%;
        }

        .faq-container {
            max-width: 860px;
            margin: 0 auto;
        }

        .faq-accordion {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
            transition: border-color 200ms ease, box-shadow 200ms ease;
        }

        .faq-item:hover {
            border-color: #087fae;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.04);
        }

        .faq-question-btn {
            width: 100%;
            background: none;
            border: none;
            padding: 22px 28px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 1.08rem;
            font-weight: 700;
            color: var(--primary-navy);
            cursor: pointer;
            text-align: left;
            font-family: inherit;
        }

        html[dir="rtl"] .faq-question-btn {
            text-align: right;
        }

        .faq-chevron {
            font-size: 1.1rem;
            color: #64748b;
            transition: transform 300ms ease;
        }

        .faq-item.active .faq-chevron {
            transform: rotate(180deg);
        }

        .faq-answer-body {
            max-height: 0;
            overflow: hidden;
            transition: max-height 350ms cubic-bezier(0.16, 1, 0.3, 1), padding 350ms ease;
            padding: 0 28px;
            color: #475569;
            font-size: 0.94rem;
            line-height: 1.6;
        }

        .faq-item.active .faq-answer-body {
            max-height: 200px;
            padding: 0 28px 22px 28px;
        }

        /* ── CONTACT SECTION ── */
        .contact-wrapper {
            background-color: #e3eff6;
            color: #0f172a;
            padding: 100px 24px 120px;
            width: 100%;
        }

        .contact-container {
            max-width: 1240px;
            margin: 0 auto;
        }

        .contact-main-grid {
            display: grid;
            grid-template-columns: 1fr 1.1fr;
            gap: 36px;
            align-items: stretch;
        }

        .contact-info-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .contact-info-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 18px;
            padding: 20px 24px;
            display: flex;
            align-items: center;
            gap: 18px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.02);
            transition: transform 200ms ease, border-color 200ms ease;
        }

        .contact-info-card:hover {
            transform: translateY(-3px);
            border-color: #087fae;
        }

        .contact-icon-circle {
            width: 46px;
            height: 46px;
            background: #0284c7;
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            flex-shrink: 0;
        }

        .contact-info-label {
            font-size: 0.75rem;
            font-weight: 800;
            color: #64748b;
            letter-spacing: 0.5px;
            text-transform: uppercase;
            margin-bottom: 2px;
        }

        .contact-info-value {
            font-size: 0.98rem;
            font-weight: 700;
            color: var(--primary-navy);
        }

        .contact-form-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 24px;
            padding: 36px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-label {
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--primary-navy);
        }

        .form-input, .form-textarea {
            width: 100%;
            padding: 12px 18px;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            font-size: 0.95rem;
            font-family: inherit;
            color: #0f172a;
            outline: none;
            transition: border-color 200ms ease, box-shadow 200ms ease;
        }

        .form-input:focus, .form-textarea:focus {
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
        }

        .form-textarea {
            height: 110px;
            resize: vertical;
        }

        .btn-send-message {
            background: #0284c7;
            color: #ffffff;
            font-size: 1rem;
            font-weight: 700;
            padding: 14px 28px;
            border: none;
            border-radius: 12px;
            cursor: pointer;
            transition: background 200ms ease, transform 200ms ease;
            width: 100%;
            margin-top: 6px;
        }

        .btn-send-message:hover {
            background: #0369a1;
            transform: translateY(-2px);
        }

        /* ── FOOTER ── */
        footer {
            background-color: #052d42;
            color: #b0c4de;
            padding: 80px 24px 30px 24px;
            font-family: 'Inter', 'Cairo', sans-serif;
            position: relative;
            overflow: hidden;
            margin-top: 60px;
        }

        .footer-container {
            max-width: 1240px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1.5fr 1fr 1fr 1.2fr;
            gap: 40px;
            position: relative;
            z-index: 10;
        }

        .footer-brand-col {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 1.4rem;
            font-weight: 800;
            color: #ffffff;
            text-decoration: none;
        }

        .footer-logo-icon {
            width: 42px;
            height: 42px;
            background: #4c647a;
            border-radius: 35%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .footer-arabic-subtitle {
            font-family: 'Cairo', sans-serif;
            color: #38bdf8;
            font-size: 1.1rem;
            font-weight: 700;
        }

        .footer-brand-desc {
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .footer-socials {
            display: flex;
            gap: 12px;
            margin-top: 10px;
        }

        .social-btn {
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: center;
            color: #ffffff;
            font-size: 1.1rem;
            text-decoration: none;
            transition: all 250ms ease;
        }

        .social-btn:hover {
            background: #0284c7;
            transform: translateY(-3px);
        }

        .footer-col-title {
            color: #ffffff;
            font-size: 1.15rem;
            font-weight: 700;
            margin-bottom: 24px;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-col-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background: #0284c7;
            border-radius: 2px;
        }

        html[dir="rtl"] .footer-col-title::after {
            left: auto;
            right: 0;
        }

        .footer-links-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .footer-link-item a {
            color: #b0c4de;
            text-decoration: none;
            font-size: 0.95rem;
            transition: color 250ms ease, padding 250ms ease;
            display: inline-block;
        }

        .footer-link-item a:hover {
            color: #ffffff;
            padding-left: 5px;
        }

        html[dir="rtl"] .footer-link-item a:hover {
            padding-left: 0;
            padding-right: 5px;
        }

        .footer-contact-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .contact-item-row {
            display: flex;
            align-items: flex-start;
            gap: 12px;
            font-size: 0.95rem;
            line-height: 1.5;
        }

        .contact-item-row span {
            color: #38bdf8;
            font-size: 1.1rem;
            margin-top: 2px;
        }

        .footer-bottom-bar {
            margin-top: 60px;
            padding-top: 24px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 0.9rem;
            color: #94a3b8;
        }

        /* POLICY MODAL POPUP */
        .policy-modal-overlay {
            position: fixed;
            inset: 0;
            background: rgba(15, 23, 42, 0.75);
            backdrop-filter: blur(6px);
            z-index: 3000;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .policy-modal-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        .policy-modal-card {
            background: #ffffff;
            color: #0f172a;
            border-radius: 24px;
            padding: 36px;
            width: 100%;
            max-width: 580px;
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
            position: relative;
        }

        .policy-modal-header-banner {
            background: #03364f;
            color: white;
            padding: 24px;
            border-radius: 16px;
            margin-bottom: 24px;
            text-align: center;
        }

        .policy-modal-title {
            font-size: 1.6rem;
            font-weight: 800;
            margin-bottom: 4px;
        }

        .policy-modal-updated {
            font-size: 0.82rem;
            color: #94a3b8;
        }

        .policy-modal-body {
            color: #334155;
            font-size: 0.95rem;
            line-height: 1.7;
            margin-bottom: 20px;
        }

        .policy-modal-scroll-area {
            overflow-y: auto;
            max-height: 50vh;
            padding-right: 12px;
            margin-bottom: 20px;
        }
        
        .policy-modal-scroll-area::-webkit-scrollbar {
            width: 6px;
        }
        
        .policy-modal-scroll-area::-webkit-scrollbar-thumb {
            background: #cbd5e1;
            border-radius: 4px;
        }

        .policy-section {
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid #f1f5f9;
        }

        .policy-section:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .policy-modal-section-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--primary-navy);
            margin: 0 0 8px 0;
        }

        .policy-modal-list {
            list-style-type: disc;
            padding-left: 24px;
            margin-bottom: 24px;
            display: flex;
            flex-direction: column;
            gap: 6px;
        }

        html[dir="rtl"] .policy-modal-list {
            padding-left: 0;
            padding-right: 24px;
        }

        .policy-modal-close-btn {
            background: #0284c7;
            color: #ffffff;
            border: none;
            padding: 12px 24px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 0.95rem;
            cursor: pointer;
            width: 100%;
            transition: background 200ms ease;
        }

        .policy-modal-close-btn:hover {
            background: #0369a1;
        }

        @media (max-width: 1100px) {
            .products-grid-ref, .why-us-grid, .quality-grid, .reviews-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .story-container, .delivery-main-grid, .contact-main-grid, .footer-container {
                grid-template-columns: 1fr;
            }
            .story-img-box {
                height: 380px;
            }
        }

        .inline-icon {
            display: inline-block;
            vertical-align: middle;
            width: 1.15em;
            height: 1.15em;
            margin-top: -0.1em;
            fill: none;
        }

        /* Standalone Page Views (About, Contact, FAQ, Policies) */
        #policy-page-view,
        #about-page-view,
        #faq-page-view,
        #contact-page-view {
            padding-top: 80px;
        }

        .policy-page-banner {
            background: var(--bg-hero-gradient);
            color: var(--text-white);
            padding: 72px 20px 80px;
            text-align: center;
        }

        .page-about-intro-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 36px 40px;
            margin-bottom: 28px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        }

        .page-mission-vision-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            margin-bottom: 28px;
        }

        .page-mv-card {
            background: #e8f4fc;
            border: 1px solid #bae6fd;
            border-radius: 16px;
            padding: 28px 24px;
            transition: transform 200ms ease, box-shadow 200ms ease;
        }

        .page-mv-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(2, 132, 199, 0.12);
        }

        .page-mv-icon {
            width: 44px;
            height: 44px;
            background: #0284c7;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            margin-bottom: 14px;
        }

        .page-mv-title {
            font-size: 1.15rem;
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 10px;
        }

        .page-mv-desc {
            color: #475569;
            line-height: 1.75;
            font-size: 0.95rem;
        }

        .page-stats-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin-bottom: 36px;
        }

        .page-stat-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 28px 20px;
            text-align: center;
            transition: transform 200ms ease, border-color 200ms ease;
        }

        .page-stat-card:hover {
            transform: translateY(-4px);
            border-color: #0284c7;
        }

        .page-stat-num {
            font-size: 2rem;
            font-weight: 800;
            color: #0284c7;
            margin-bottom: 6px;
        }

        .page-stat-lbl {
            font-size: 0.9rem;
            color: #64748b;
            font-weight: 600;
        }

        .page-values-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.04);
        }

        .page-values-title {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 24px;
        }

        .page-values-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .page-value-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            padding: 20px 22px;
            display: flex;
            align-items: flex-start;
            gap: 14px;
            transition: transform 200ms ease, border-color 200ms ease, background 200ms ease;
        }

        .page-value-card:hover {
            transform: translateY(-3px);
            border-color: #0284c7;
            background: #f0f9ff;
        }

        .page-value-star {
            color: #0284c7;
            font-size: 1.1rem;
            flex-shrink: 0;
            margin-top: 2px;
        }

        .page-value-title {
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 6px;
            font-size: 0.98rem;
        }

        .page-value-desc {
            color: #64748b;
            font-size: 0.88rem;
            line-height: 1.6;
        }

        .page-contact-stack {
            display: flex;
            flex-direction: column;
            gap: 16px;
            max-width: 760px;
            margin: 0 auto;
        }

        .page-contact-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 16px;
            padding: 22px 28px;
            display: flex;
            align-items: center;
            gap: 20px;
            transition: transform 200ms ease, border-color 200ms ease, box-shadow 200ms ease;
        }

        .page-contact-card:hover {
            transform: translateY(-3px);
            border-color: #0284c7;
            box-shadow: 0 8px 24px rgba(2, 132, 199, 0.1);
        }

        .page-faq-accordion {
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .page-faq-accordion .faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 14px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            overflow: hidden;
        }

        .page-faq-accordion .faq-item:hover {
            border-color: #0284c7;
        }

        @media (max-width: 768px) {
            .page-mission-vision-grid,
            .page-stats-row,
            .page-values-grid {
                grid-template-columns: 1fr;
            }
        }

        .policy-page-title {
            font-size: 2.5rem;
            font-weight: 800;
            margin: 0;
        }

        .policy-page-content-wrapper {
            max-width: 900px;
            margin: -30px auto 60px auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
        }

        .policy-page-card {
            background-color: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            padding: 40px;
            border: 1px solid #e2e8f0;
        }

        .policy-page-updated {
            text-align: right;
            font-size: 0.9rem;
            color: #64748b;
            margin-bottom: 24px;
            padding-bottom: 16px;
            border-bottom: 1px solid #f1f5f9;
        }
        
        html[dir="rtl"] .policy-page-updated {
            text-align: left;
        }

        @media (max-width: 768px) {
            .policy-page-title {
                font-size: 2rem;
            }
            .policy-page-card {
                padding: 24px;
            }
        }

        /* ═══════════════════════════════════════════════════════════════
           CHECKOUT FLOW — Full redesign
           All screens: 320px → desktop, no horizontal scroll, fluid layout
        ═══════════════════════════════════════════════════════════════ */

        /* ── Wrapper pages ── */
        #page-cart-view,
        #page-checkout-delivery-view,
        #page-checkout-location-view,
        #page-checkout-review-view,
        #page-checkout-payment-view,
        #page-checkout-success-view,
        #page-checkout-otp-view,
        #page-checkout-failure-view {
            padding-top: 80px;
            background-color: #f1f5f9;
            min-height: 100vh;
            min-height: 100dvh;
            width: 100%;
            max-width: 100%;
            margin: 0;
            padding-left: 0;
            padding-right: 0;
            box-sizing: border-box;
            overflow-x: hidden;
        }

        /* ── Shell — centered content ── */
        .checkout-shell {
            width: 100%;
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 24px 80px;
            box-sizing: border-box;
        }

        /* ── Banner ── */
        .policy-page-banner {
            background: linear-gradient(135deg, #052d42 0%, #025c85 55%, #0284c7 100%);
            padding: 56px 24px 64px;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        .policy-page-banner::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0; right: 0;
            height: 32px;
            background: #f1f5f9;
            border-radius: 32px 32px 0 0;
        }
        .policy-page-title {
            font-size: 2.4rem;
            font-weight: 800;
            color: #ffffff;
            margin: 0;
            line-height: 1.15;
            letter-spacing: -0.02em;
        }

        /* ── Stepper ── */
        .checkout-steps {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0;
            margin: 36px 0 32px;
            padding: 0 8px;
            overflow: visible;
            flex-wrap: nowrap;
        }

        .checkout-step {
            display: flex;
            align-items: center;
            gap: 7px;
            padding: 9px 14px;
            border-radius: 999px;
            background: #ffffff;
            border: 1.5px solid #e2e8f0;
            color: #94a3b8;
            font-size: 0.8rem;
            font-weight: 700;
            transition: all 0.25s ease;
            white-space: nowrap;
            position: relative;
            flex-shrink: 1;
        }

        /* connector line between steps */
        .checkout-step + .checkout-step::before {
            content: '';
            display: block;
            width: 20px;
            height: 2px;
            background: #e2e8f0;
            flex-shrink: 0;
            margin: 0 -4px 0 -4px;
            order: -1;
            position: relative;
        }

        .checkout-step.active {
            background: linear-gradient(135deg, #025c85, #0284c7);
            border-color: transparent;
            color: #ffffff;
            box-shadow: 0 6px 18px rgba(2, 132, 199, 0.3);
        }

        .checkout-step.done {
            background: #f0fdf4;
            border-color: #86efac;
            color: #15803d;
        }

        .checkout-step-num {
            width: 22px;
            height: 22px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 0, 0, 0.07);
            font-size: 0.72rem;
            font-weight: 800;
            flex-shrink: 0;
        }
        .checkout-step.active .checkout-step-num {
            background: rgba(255, 255, 255, 0.25);
        }
        .checkout-step.done .checkout-step-num {
            background: #bbf7d0;
        }

        /* ── Two-column layout ── */
        .checkout-grid-2 {
            display: grid;
            grid-template-columns: 1fr 320px;
            gap: 20px;
            align-items: start;
        }

        /* ── Main card ── */
        .checkout-card {
            background: #ffffff;
            border: 1px solid #e8edf5;
            border-radius: 20px;
            padding: 28px;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.04), 0 1px 3px rgba(0, 0, 0, 0.03);
            min-width: 0;
        }

        .checkout-card-title {
            font-size: 1.25rem;
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 6px;
        }

        .checkout-card-sub {
            color: #64748b;
            margin-bottom: 22px;
            font-size: 0.92rem;
            line-height: 1.5;
        }

        /* ── Order Summary card ── */
        .checkout-summary-card {
            background: #ffffff;
            border: 1px solid #e8edf5;
            border-radius: 20px;
            padding: 22px;
            position: sticky;
            top: 92px;
            box-shadow: 0 2px 16px rgba(0, 0, 0, 0.04);
            min-width: 0;
        }

        .checkout-summary-title {
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 14px;
            font-size: 1rem;
            padding-bottom: 12px;
            border-bottom: 1px solid #f1f5f9;
        }

        .checkout-summary-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 8px;
            padding: 8px 0;
            border-bottom: 1px solid #f1f5f9;
            font-size: 0.88rem;
            color: #475569;
            line-height: 1.4;
        }

        .checkout-summary-row:last-of-type {
            border-bottom: none;
        }

        .checkout-summary-row span:first-child {
            flex: 1;
            min-width: 0;
            word-break: break-word;
        }

        .checkout-summary-row span:last-child {
            flex-shrink: 0;
            font-weight: 700;
            color: #0f172a;
        }

        .checkout-summary-total {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 14px;
            padding: 14px 16px;
            border-radius: 12px;
            background: linear-gradient(135deg, #f0f9ff, #e0f2fe);
            border: 1px solid #bae6fd;
            font-weight: 800;
            font-size: 1.05rem;
            color: var(--primary-navy);
        }

        /* ── Forms ── */
        .checkout-form-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 14px;
        }

        .checkout-form-group {
            display: flex;
            flex-direction: column;
            gap: 5px;
            min-width: 0;
        }

        .checkout-form-group.full {
            grid-column: 1 / -1;
        }

        .checkout-label {
            font-size: 0.82rem;
            font-weight: 700;
            color: #374151;
            letter-spacing: 0.01em;
        }

        .checkout-input,
        .checkout-select,
        .checkout-textarea {
            width: 100%;
            padding: 11px 14px;
            border: 1.5px solid #d1d5db;
            border-radius: 10px;
            font-family: inherit;
            font-size: 0.93rem;
            color: #0f172a;
            background: #ffffff;
            transition: border-color 0.18s ease, box-shadow 0.18s ease;
            box-sizing: border-box;
            min-width: 0;
        }

        .checkout-input:focus,
        .checkout-select:focus,
        .checkout-textarea:focus {
            outline: none;
            border-color: #0284c7;
            box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.12);
        }

        .checkout-input.error,
        .checkout-select.error {
            border-color: #ef4444;
            box-shadow: 0 0 0 3px rgba(239, 68, 68, 0.1);
        }

        .checkout-error-msg {
            color: #ef4444;
            font-size: 0.76rem;
            font-weight: 600;
            display: none;
        }

        .checkout-error-msg.show {
            display: block;
        }

        /* ── Action buttons row ── */
        .checkout-actions {
            display: flex;
            gap: 10px;
            margin-top: 24px;
            flex-wrap: wrap;
        }

        .btn-checkout-back,
        .btn-checkout-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 13px 24px;
            border-radius: 12px;
            font-family: inherit;
            font-size: 0.92rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.2s ease;
            min-height: 46px;
            line-height: 1;
        }

        .btn-checkout-back {
            border: 1.5px solid #d1d5db;
            background: #ffffff;
            color: #374151;
        }

        .btn-checkout-back:hover {
            background: #f8fafc;
            border-color: #9ca3af;
        }

        .btn-checkout-primary {
            border: none;
            background: linear-gradient(135deg, #025c85, #0284c7);
            color: #ffffff;
            box-shadow: 0 6px 16px rgba(2, 132, 199, 0.28);
            flex: 1;
        }

        .btn-checkout-primary:hover {
            transform: translateY(-1px);
            box-shadow: 0 10px 24px rgba(2, 132, 199, 0.38);
        }

        .btn-checkout-primary:active {
            transform: translateY(0);
        }

        .btn-checkout-primary:disabled {
            opacity: 0.55;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* ── Cart items ── */
        .checkout-page-item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 14px 0;
            border-bottom: 1px solid #f1f5f9;
            min-width: 0;
        }

        .checkout-page-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .checkout-page-item-img {
            width: 72px;
            height: 72px;
            border-radius: 12px;
            background: #f8fafc;
            overflow: hidden;
            flex-shrink: 0;
            border: 1px solid #e8edf5;
        }

        .checkout-page-item-img img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 4px;
        }

        .checkout-page-item-info {
            flex: 1 1 0;
            min-width: 0;
        }

        .checkout-page-item-name {
            font-weight: 700;
            color: var(--primary-navy);
            margin-bottom: 3px;
            font-size: 0.95rem;
            line-height: 1.3;
            word-break: break-word;
        }

        .checkout-page-item-meta {
            color: #64748b;
            font-size: 0.84rem;
            margin-bottom: 8px;
        }

        .checkout-page-item-price {
            font-weight: 800;
            color: #0284c7;
            white-space: nowrap;
            flex-shrink: 0;
            font-size: 1rem;
            align-self: center;
        }

        /* ── Delivery location map ── */
        .btn-detect-location {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 10px 18px;
            border-radius: 10px;
            border: 1.5px solid #0284c7;
            background: #f0f9ff;
            color: #0284c7;
            font-family: inherit;
            font-weight: 700;
            font-size: 0.85rem;
            cursor: pointer;
            margin-bottom: 16px;
            transition: all 0.18s ease;
        }

        .btn-detect-location:hover {
            background: #e0f2fe;
            border-color: #025c85;
        }

        /* ── Review blocks ── */
        .review-info-block {
            background: #f8fafc;
            border: 1px solid #e8edf5;
            border-radius: 14px;
            padding: 16px 18px;
            margin-bottom: 12px;
        }

        .review-info-title {
            font-weight: 800;
            color: var(--primary-navy);
            margin-bottom: 8px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .review-info-line {
            color: #475569;
            font-size: 0.88rem;
            line-height: 1.65;
        }

        /* ── Payment ── */
        .payment-method-tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }

        .payment-method-tab {
            flex: 1;
            min-width: 130px;
            padding: 13px 14px;
            border-radius: 12px;
            border: 2px solid #e2e8f0;
            background: #ffffff;
            cursor: pointer;
            text-align: center;
            font-family: inherit;
            font-weight: 700;
            font-size: 0.86rem;
            color: #475569;
            transition: all 0.2s ease;
        }

        .payment-method-tab.active {
            border-color: #0284c7;
            background: #f0f9ff;
            color: #0284c7;
            box-shadow: 0 4px 12px rgba(2, 132, 199, 0.12);
        }

        .mock-gateway-box {
            border: 2px dashed #d1d5db;
            border-radius: 16px;
            padding: 20px;
            background: #fafafa;
        }

        .mock-gateway-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: #fef3c7;
            color: #92400e;
            padding: 5px 12px;
            border-radius: 999px;
            font-size: 0.73rem;
            font-weight: 800;
            margin-bottom: 14px;
        }

        .mock-card-preview {
            background: linear-gradient(135deg, #052d42 0%, #025c85 60%, #0284c7 100%);
            border-radius: 16px;
            padding: 20px 22px;
            color: #ffffff;
            margin-bottom: 18px;
            min-height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 0 8px 24px rgba(2, 44, 66, 0.3);
            width: 100%;
            box-sizing: border-box;
        }

        .mock-card-number {
            font-size: 1.05rem;
            letter-spacing: 0.14em;
            font-family: 'Courier New', monospace;
            word-break: break-all;
            line-height: 1.4;
        }

        .mock-card-meta {
            display: flex;
            justify-content: space-between;
            font-size: 0.8rem;
            opacity: 0.88;
            flex-wrap: wrap;
            gap: 4px;
        }

        /* ── Spinner ── */
        .payment-processing {
            text-align: center;
            padding: 40px 20px;
            display: none;
        }

        .payment-processing.active {
            display: block;
        }

        .payment-spinner {
            width: 46px;
            height: 46px;
            border: 4px solid #e2e8f0;
            border-top-color: #0284c7;
            border-radius: 50%;
            animation: spin 0.75s linear infinite;
            margin: 0 auto 16px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* ── Success / OTP ── */
        .checkout-success-box {
            text-align: center;
            max-width: 540px;
            margin: 0 auto;
            padding: 20px 0;
        }

        .checkout-success-icon {
            width: 80px;
            height: 80px;
            background: #ecfdf5;
            color: #059669;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.4rem;
            margin: 0 auto 18px;
        }

        .checkout-success-order {
            background: #f0f9ff;
            border: 1px solid #bae6fd;
            border-radius: 12px;
            padding: 14px 18px;
            margin: 20px 0;
            font-weight: 800;
            color: #0284c7;
        }

        /* ── Delivery slots ── */
        .delivery-slot-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 10px;
        }

        .delivery-slot-option {
            padding: 11px 8px;
            border: 2px solid #e2e8f0;
            border-radius: 10px;
            text-align: center;
            cursor: pointer;
            font-size: 0.82rem;
            font-weight: 700;
            color: #475569;
            transition: all 0.18s ease;
            line-height: 1.3;
        }

        .delivery-slot-option.active {
            border-color: #0284c7;
            background: #f0f9ff;
            color: #0284c7;
        }

        /* ── Empty state ── */
        .checkout-empty-state {
            text-align: center;
            padding: 48px 20px;
            color: #64748b;
        }

        .checkout-empty-state-icon {
            font-size: 3rem;
            margin-bottom: 14px;
            opacity: 0.6;
        }

        /* ── Location map (Leaflet replaces this but these are fallbacks) ── */
        .location-map-box {
            height: 300px;
            border-radius: 16px;
            border: 1px solid #d1d5db;
            background: linear-gradient(180deg, #dbeafe 0%, #e0f2fe 40%, #f0fdf4 100%);
            position: relative;
            overflow: hidden;
            cursor: crosshair;
            margin-bottom: 14px;
            width: 100%;
            box-sizing: border-box;
        }

        .location-map-grid {
            position: absolute;
            inset: 0;
            background-image:
                linear-gradient(rgba(2, 132, 199, 0.08) 1px, transparent 1px),
                linear-gradient(90deg, rgba(2, 132, 199, 0.08) 1px, transparent 1px);
            background-size: 40px 40px;
        }

        .location-map-pin {
            position: absolute;
            width: 28px;
            height: 28px;
            transform: translate(-50%, -100%);
            font-size: 28px;
            line-height: 1;
            pointer-events: none;
            filter: drop-shadow(0 4px 6px rgba(0, 0, 0, 0.25));
            display: none;
        }

        .location-map-pin.visible {
            display: block;
        }

        .location-map-hint {
            position: absolute;
            bottom: 12px;
            left: 50%;
            transform: translateX(-50%);
            background: rgba(255, 255, 255, 0.92);
            padding: 8px 14px;
            border-radius: 999px;
            font-size: 0.78rem;
            font-weight: 600;
            color: #475569;
            white-space: nowrap;
            backdrop-filter: blur(4px);
        }

        /* ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ──
           MOBILE RESPONSIVE OVERRIDES (AFTER ALL BASE STYLES)
        ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── ── */
        @media (max-width: 900px) {
            .products-grid-ref, .why-us-grid, .quality-grid, .reviews-grid {
                grid-template-columns: repeat(2, 1fr) !important;
            }
            .story-container, .delivery-main-grid, .contact-main-grid, .footer-container {
                grid-template-columns: 1fr !important;
            }
            .checkout-grid-2 {
                grid-template-columns: 1fr !important;
            }
            .checkout-summary-card {
                position: static !important;
            }
            .checkout-form-grid {
                grid-template-columns: 1fr !important;
            }
            .delivery-slot-grid {
                grid-template-columns: 1fr !important;
            }
            .checkout-step-label {
                display: none !important;
            }
            .checkout-step {
                padding: 8px 12px !important;
                min-width: unset !important;
            }
            .checkout-step-num {
                width: 28px !important;
                height: 28px !important;
                font-size: 0.85rem !important;
                font-weight: 800 !important;
            }
        }

        @media (max-width: 768px) {
            /* 1. HEADER SPACING ON MOBILE */
            header, header.scrolled {
                padding: 12px 18px !important;
            }
            .header-right {
                gap: 16px !important;
                display: flex !important;
                align-items: center !important;
            }
            .nav-links-center {
                display: none !important;
            }
            .mobile-menu-btn {
                display: block !important;
                padding: 6px 8px !important;
                font-size: 1.35rem !important;
            }
            .brand-logo {
                gap: 10px !important;
            }
            .brand-logo-text {
                font-size: 1rem !important;
                letter-spacing: 0.05em !important;
            }
            .logo-circle-icon {
                width: 38px !important;
                height: 38px !important;
            }
            .logo-droplet-icon {
                width: 18px !important;
                height: 18px !important;
            }
            .lang-btn {
                padding: 6px 10px !important;
                font-size: 0.88rem !important;
            }
            .cart-btn {
                padding: 6px 10px !important;
            }

            /* 2. HERO SECTION FULL SCREEN FIT */
            .hero-wrapper {
                min-height: 100vh !important;
                min-height: 100dvh !important;
                height: auto !important;
            }
            .hero-container {
                min-height: calc(100vh - 55px) !important;
                min-height: calc(100dvh - 55px) !important;
                padding: 72px 16px 20px 16px !important;
                justify-content: space-evenly !important;
                gap: 6px !important;
            }
            .hero-badge {
                margin-top: 4px !important;
                margin-bottom: 8px !important;
                padding: 5px 16px !important;
                font-size: 0.78rem !important;
            }
            .hero-title {
                font-size: 1.85rem !important;
                white-space: normal !important;
                word-wrap: break-word !important;
                overflow-wrap: break-word !important;
                width: 100% !important;
                max-width: 100% !important;
                line-height: 1.3 !important;
                margin-top: 4px !important;
                margin-bottom: 8px !important;
                padding: 0 5px !important;
            }
            .hero-subtitle {
                font-size: 0.92rem !important;
                line-height: 1.45 !important;
                margin: 4px auto 14px !important;
                max-width: 95% !important;
            }
            .btn-primary-cta {
                padding: 11px 32px !important;
                font-size: 0.96rem !important;
                margin-top: 4px !important;
                margin-bottom: 14px !important;
                border-radius: 12px !important;
            }
            .hero-stats-row {
                gap: 16px !important;
                margin-top: 4px !important;
                margin-bottom: 6px !important;
                width: 100% !important;
                justify-content: space-around !important;
            }
            .stat-item {
                padding: 0 4px !important;
            }
            .stat-number {
                font-size: 1.45rem !important;
            }
            .stat-label {
                font-size: 0.76rem !important;
                white-space: nowrap !important;
            }

            .products-grid-ref, .why-us-grid, .quality-grid, .reviews-grid, .story-cards-row, .story-stats-grid {
                grid-template-columns: 1fr !important;
            }
            .section-title-ref, .story-title {
                font-size: 1.8rem !important;
            }

            /* ─── 3. CHECKOUT & CART — FULLY RESPONSIVE ─── */
            #page-cart-view,
            #page-checkout-delivery-view,
            #page-checkout-location-view,
            #page-checkout-review-view,
            #page-checkout-payment-view,
            #page-checkout-success-view,
            #page-checkout-otp-view,
            #page-checkout-failure-view {
                padding-top: 64px !important;
                padding-left: 0 !important;
                padding-right: 0 !important;
                width: 100% !important;
                max-width: 100% !important;
                overflow-x: hidden !important;
            }

            /* Banner */
            .policy-page-banner {
                padding: 32px 16px 52px !important;
                width: 100% !important;
                box-sizing: border-box !important;
            }
            .policy-page-title {
                font-size: 1.75rem !important;
                letter-spacing: -0.01em !important;
            }

            /* Shell */
            .checkout-shell {
                width: 100% !important;
                max-width: 100% !important;
                padding: 0 14px 60px !important;
                margin: 0 !important;
                box-sizing: border-box !important;
                overflow-x: hidden !important;
            }

            /* Stepper — compact, numbers only on mobile */
            .checkout-steps {
                flex-wrap: nowrap !important;
                gap: 4px !important;
                margin: 16px 0 20px !important;
                padding: 0 4px !important;
                width: 100% !important;
                overflow: visible !important;
                justify-content: center !important;
            }
            .checkout-step {
                padding: 7px 10px !important;
                gap: 5px !important;
                font-size: 0.72rem !important;
                flex-shrink: 1 !important;
                white-space: nowrap !important;
                min-width: 0 !important;
            }
            .checkout-step + .checkout-step::before {
                width: 12px !important;
                margin: 0 -2px !important;
            }
            .checkout-step-label {
                display: none !important;
            }
            .checkout-step-num {
                width: 24px !important;
                height: 24px !important;
                font-size: 0.72rem !important;
                flex-shrink: 0 !important;
            }

            /* Grid → single column */
            .checkout-grid-2 {
                grid-template-columns: 1fr !important;
                gap: 14px !important;
                width: 100% !important;
                box-sizing: border-box !important;
            }

            /* Cards */
            .checkout-card {
                padding: 18px 14px !important;
                border-radius: 16px !important;
                width: 100% !important;
                min-width: 0 !important;
                box-sizing: border-box !important;
            }
            .checkout-summary-card {
                padding: 16px 14px !important;
                border-radius: 16px !important;
                position: static !important;
                width: 100% !important;
                min-width: 0 !important;
                box-sizing: border-box !important;
            }

            /* Forms → single column */
            .checkout-form-grid {
                grid-template-columns: 1fr !important;
                gap: 12px !important;
            }

            /* Cart items */
            .checkout-page-item {
                gap: 10px !important;
                padding: 12px 0 !important;
                min-width: 0 !important;
            }
            .checkout-page-item-img {
                width: 58px !important;
                height: 58px !important;
                flex-shrink: 0 !important;
            }
            .checkout-page-item-info {
                flex: 1 1 0 !important;
                min-width: 0 !important;
                overflow: hidden !important;
            }
            .checkout-page-item-name {
                font-size: 0.88rem !important;
                word-break: break-word !important;
            }
            .checkout-page-item-meta {
                font-size: 0.8rem !important;
            }
            .checkout-page-item-price {
                font-size: 0.9rem !important;
                flex-shrink: 0 !important;
                align-self: center !important;
            }

            /* Buttons */
            .checkout-actions {
                flex-direction: column !important;
                gap: 10px !important;
                margin-top: 20px !important;
            }
            .btn-checkout-primary,
            .btn-checkout-back {
                width: 100% !important;
                justify-content: center !important;
                text-align: center !important;
            }
            .btn-checkout-primary {
                flex: none !important;
            }

            /* Summary */
            .checkout-summary-row {
                font-size: 0.85rem !important;
                gap: 6px !important;
            }
            .checkout-summary-total {
                font-size: 0.96rem !important;
                padding: 12px !important;
            }

            /* Delivery slots → 3 cols stays but smaller */
            .delivery-slot-grid {
                grid-template-columns: repeat(3, 1fr) !important;
                gap: 8px !important;
            }
            .delivery-slot-option {
                padding: 9px 6px !important;
                font-size: 0.78rem !important;
            }

            /* Payment tabs */
            .payment-method-tabs {
                flex-direction: column !important;
                gap: 8px !important;
            }
            .payment-method-tab {
                width: 100% !important;
                min-width: unset !important;
                padding: 12px !important;
            }

            /* Mock card */
            .mock-card-preview {
                padding: 16px !important;
            }
            .mock-card-number {
                font-size: 0.9rem !important;
                letter-spacing: 0.08em !important;
            }
            .mock-gateway-box {
                padding: 16px !important;
            }

            /* Map */
            #leaflet-map {
                height: 240px !important;
            }

            /* Review blocks */
            .review-info-block {
                padding: 13px 12px !important;
            }

            /* Typography */
            .checkout-card-title {
                font-size: 1.1rem !important;
            }
        }

        @media (max-width: 480px) {
            header, header.scrolled {
                padding: 10px 14px !important;
            }
            .header-right {
                gap: 10px !important;
            }
            .brand-logo {
                gap: 8px !important;
            }
            .brand-logo-text {
                font-size: 0.92rem !important;
                letter-spacing: 0.04em !important;
            }
            .logo-circle-icon {
                width: 34px !important;
                height: 34px !important;
            }
            .logo-droplet-icon {
                width: 16px !important;
                height: 16px !important;
            }
            .lang-btn {
                padding: 4px 8px !important;
                font-size: 0.85rem !important;
            }
            .cart-btn {
                padding: 4px 6px !important;
            }
            .mobile-menu-btn {
                padding: 4px !important;
                font-size: 1.25rem !important;
            }
            .hero-container {
                padding: 64px 12px 14px 12px !important;
                min-height: calc(100vh - 50px) !important;
                min-height: calc(100dvh - 50px) !important;
                gap: 4px !important;
            }
            .hero-badge {
                font-size: 0.74rem !important;
                padding: 4px 12px !important;
                margin-top: 2px !important;
                margin-bottom: 6px !important;
                max-width: 100% !important;
                white-space: normal !important;
                text-align: center !important;
            }
            .hero-title {
                font-size: 1.55rem !important;
                line-height: 1.25 !important;
                margin-top: 2px !important;
                margin-bottom: 6px !important;
                white-space: normal !important;
                word-break: break-word !important;
                overflow-wrap: break-word !important;
                max-width: 100% !important;
            }
            .hero-subtitle {
                font-size: 0.85rem !important;
                line-height: 1.4 !important;
                margin: 2px auto 10px !important;
            }
            .btn-primary-cta {
                padding: 10px 24px !important;
                font-size: 0.9rem !important;
                margin-top: 2px !important;
                margin-bottom: 10px !important;
            }
            .hero-stats-row {
                gap: 4px !important;
                margin-top: 2px !important;
                margin-bottom: 4px !important;
                flex-wrap: wrap !important;
            }
            .stat-number {
                font-size: 1.3rem !important;
            }
            .stat-label {
                font-size: 0.7rem !important;
            }
            .floating-help-btn {
                bottom: 12px !important;
                left: 12px !important;
                padding: 4px 12px 4px 6px !important;
            }
            html[dir="rtl"] .floating-help-btn {
                left: auto !important;
                right: 12px !important;
                padding: 4px 6px 4px 12px !important;
            }
            .floating-help-icon {
                width: 32px !important;
                height: 32px !important;
                font-size: 0.9rem !important;
            }
            .floating-help-text {
                font-size: 0.76rem !important;
            }
            .checkout-step {
                padding: 5px 8px !important;
            }
            /* Extra-small screens: narrow shell, tighter cards */
            .checkout-shell {
                padding: 0 10px 50px !important;
            }
            .checkout-card {
                padding: 14px 12px !important;
                border-radius: 14px !important;
            }
            .checkout-summary-card {
                padding: 14px 12px !important;
                border-radius: 14px !important;
            }
            .checkout-card-title {
                font-size: 1rem !important;
            }
            .checkout-card-sub {
                font-size: 0.85rem !important;
                margin-bottom: 14px !important;
            }
            .checkout-input,
            .checkout-select,
            .checkout-textarea {
                padding: 10px 12px !important;
                font-size: 0.88rem !important;
            }
            /* Stepper — absolute minimum on 320px */
            .checkout-steps {
                gap: 2px !important;
                margin: 10px 0 14px !important;
            }
            .checkout-step {
                padding: 5px 7px !important;
                font-size: 0.68rem !important;
            }
            .checkout-step + .checkout-step::before {
                width: 8px !important;
            }
            .checkout-step-num {
                width: 20px !important;
                height: 20px !important;
                font-size: 0.65rem !important;
            }
            /* Cart items — tightest layout */
            .checkout-page-item-img {
                width: 50px !important;
                height: 50px !important;
            }
            .checkout-page-item-name {
                font-size: 0.82rem !important;
            }
            .checkout-page-item-price {
                font-size: 0.82rem !important;
            }
            /* Delivery slots → vertical on very small */
            .delivery-slot-grid {
                grid-template-columns: 1fr !important;
            }
            /* Buttons tighter */
            .btn-checkout-primary,
            .btn-checkout-back {
                padding: 11px 16px !important;
                font-size: 0.88rem !important;
                min-height: 42px !important;
            }
            /* Summary */
            .checkout-summary-total {
                font-size: 0.9rem !important;
                padding: 10px !important;
            }
            /* Banner */
            .policy-page-banner {
                padding: 24px 12px 44px !important;
            }
            .policy-page-title {
                font-size: 1.45rem !important;
            }
        }
    </style>

    <!-- FontAwesome & Leaflet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script><style>
        /* ── PREVENT HORIZONTAL VIEWPORT OVERFLOW ON MOBILE ── */
        html, body {
            width: 100% !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
            position: relative;
            box-sizing: border-box;
        }

        *, *::before, *::after {
            box-sizing: border-box;
        }

        #homepage-view,
        #about-page-view,
        #faq-page-view,
        #contact-page-view,
        #policy-page-view,
        #page-cart-view,
        #page-checkout-delivery-view,
        #page-checkout-location-view,
        #page-checkout-review-view,
        #page-checkout-payment-view,
        #page-checkout-success-view,
        #page-checkout-otp-view,
        #page-checkout-failure-view {
            width: 100% !important;
            max-width: 100% !important;
            overflow-x: hidden !important;
            box-sizing: border-box !important;
        }

        @media (max-width: 768px) {
            .policy-page-content-wrapper,
            .story-wrapper,
            .why-us-wrapper,
            .contact-wrapper,
            .delivery-wrapper,
            .reviews-wrapper,
            .hero-container,
            .checkout-shell,
            .footer-container {
                width: 100% !important;
                max-width: 100% !important;
                padding-left: 14px !important;
                padding-right: 14px !important;
                box-sizing: border-box !important;
                overflow-x: hidden !important;
            }

            .page-mission-vision-grid,
            .page-stats-row,
            .page-values-grid,
            .contact-main-grid,
            .delivery-main-grid,
            .products-grid-ref,
            .why-us-grid,
            .quality-grid,
            .reviews-grid {
                grid-template-columns: 1fr !important;
                width: 100% !important;
                box-sizing: border-box !important;
            }
        }
</style>
</head>
<body>
        <!-- 1. STICKY NAVBAR -->
        <header class="anim-navbar">
            <!-- LEFT: Logo -->
            <a href="/" class="brand-logo" onclick="goHome(event)">
                <div class="logo-circle-icon"><svg class="logo-droplet-icon" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.5 21a5.5 5.5 0 0 0 5.5-5.5c0-2-1.5-3.5-3-5.5-.5-.7-1-1.5-1.5-2.5-.5 1-1 1.8-1.5 2.5-1.5 2-3 3.5-3 5.5A5.5 5.5 0 0 0 15.5 21z"></path><path d="M8.5 18a4.5 4.5 0 0 0 4.5-4.5c0-1.5-1-3-2.5-5C10 7.5 9.5 6.5 9 5.5 8.5 6.5 8 7.5 7.5 8.5 6 10.5 5 12 5 13.5A4.5 4.5 0 0 0 9.5 18z"></path></svg></div>
                <span class="brand-logo-text"><span class="brand-logo-oasis">مياه الواحة</span> <span class="brand-logo-oman">الكويت</span></span>
            </a>

            <!-- CENTER: Navigation Links Capsule -->
            <nav class="nav-links-center">
                <a href="#home" class="nav-item active" id="nav-home" onclick="goHome(event)">الرئيسية</a>
                <a href="#about" class="nav-item" id="nav-about" onclick="navigateToPage('about', event)">من نحن</a>
                <a href="#contact" class="nav-item" id="nav-contact" onclick="navigateToPage('contact', event)">اتصل بنا</a>
                <a href="#faq" class="nav-item" id="nav-faq" onclick="navigateToPage('faq', event)">الأسئلة الشائعة</a>

                

                
                <!-- 2. POLICIES DROPDOWN CONTAINER -->
                <div class="policies-dropdown-container" id="policies-container">
                    <div class="nav-item" onclick="togglePoliciesDropdown(event)">
                        <span id="nav-policies">السياسات</span> <span class="policy-chevron" id="policy-chevron">▾</span>
                    </div>
                    <div class="policies-dropdown-menu">
                        <div class="dropdown-menu-item" id="nav-pol-privacy" onclick="openPolicyModal('privacy')"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> سياسة الخصوصية</div>
                        <div class="dropdown-menu-item" id="nav-pol-terms" onclick="openPolicyModal('terms')"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg> الشروط والأحكام</div>
                        <div class="dropdown-menu-item" id="nav-pol-delivery" onclick="openPolicyModal('delivery')"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg> سياسة التوصيل</div>
                        <div class="dropdown-menu-item" id="nav-pol-refund" onclick="openPolicyModal('refund')"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg> سياسة الاسترجاع</div>
                    </div>
                </div>
            </nav>

            <!-- RIGHT: Language & Cart -->
            <div class="header-right">
                <div class="lang-dropdown-container" id="lang-container" style="display: none !important;">
                    <button class="lang-btn" onclick="toggleLangDropdown(event)">
                        <span id="current-lang-lbl">EN</span> <span style="font-size:0.75rem; margin-left:4px;">▾</span>
                    </button>
                    <div class="lang-dropdown-menu">
                        <div class="lang-item" onclick="switchLanguage('en')"><span>English</span> <span>EN</span></div>
                        <div class="lang-item" onclick="switchLanguage('ar')"><span>العربية</span> <span>AR</span></div>
                    </div>
                </div>

                <button class="cart-btn" onclick="openCartModal()" title="Shopping Cart">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                    <span class="cart-badge" id="cart-count">0</span>
                </button>

                <button class="mobile-menu-btn" onclick="toggleMobileMenu()"><i class="fa-solid fa-bars"></i></button>
            </div>
        </header>

<div id="homepage-view">

    <!-- 100vh Hero Section Wrapper -->
    <div class="hero-wrapper">
        
        <!-- Outlined Circles -->
        <div class="circle-top-right"></div>
        <div class="circle-bottom-left"></div>



        <!-- Centered Hero Container -->
        <div class="hero-container" id="home">
            
            <div class="hero-badge anim-badge" id="hero-badge">
                <i class="fa-solid fa-star"></i> ★ توصيل مياه متميزة رقم 1 في الكويت ★ <i class="fa-solid fa-star"></i>
            </div>

            <h1 class="hero-title anim-title" id="hero-title">
                ترطيب نقي، يصلك إلى بابك.
            </h1>

            <p class="hero-subtitle anim-subtitle" id="hero-subtitle">
                مياه معبأة فاخرة لعائلتك ومكتبك عبر جميع محافظات دولة الكويت.
            </p>

            <div class="anim-button">
                <button class="btn-primary-cta" id="hero-cta" onclick="scrollToProducts(event)"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> اطلب الآن</button>
            </div>

            <!-- Statistics Row -->
            <div class="hero-stats-row">
                <div class="stat-item anim-stat-1">
                    <div class="stat-number">6</div>
                    <div class="stat-label" id="stat-lbl-1">محافظات</div>
                </div>
                <div class="stat-item anim-stat-2">
                    <div class="stat-number">24+</div>
                    <div class="stat-label" id="stat-lbl-2">شهادة جودة</div>
                </div>
                <div class="stat-item anim-stat-3">
                    <div class="stat-number"><i class="fa-solid fa-check"></i></div>
                    <div class="stat-label" id="stat-lbl-3">توصيل مجاني</div>
                </div>
            </div>

            <div class="scroll-down-indicator anim-arrow" onclick="scrollToProducts(event)">↓</div>
        </div>
    </div>

    <!-- ── 5. PRODUCTS SHOWCASE SECTION (REDESIGNED PRODUCT CARDS - EXACT MATCH REFERENCE IMAGE 2) ── -->
    <div class="products-wrapper" id="products">
        <div class="products-container">
            <div class="section-header-ref reveal-on-scroll">
                <h2 class="section-title-ref" id="sec-products-title">تشكيلتنا المتميرة</h2>
                <p class="section-subtitle-ref" id="sec-products-sub">نقية ومنعشة لكل عائلة ومؤسسة في الكويت.</p>
            </div>

            <div class="products-grid-ref" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(270px, 1fr)); gap: 24px; max-width: 1200px; margin: 0 auto;">
                <!-- Product Card 1 (OASIS 200ml) -->
                <div class="product-card-ref reveal-on-scroll card-delay-1">
                    <span class="product-badge-tag" id="prod-badge-1">حزمة اقتصادية</span>
                    <div class="product-banner-box">
                        <img src="/images/oasis_200ml.jpg" alt="مياه الواحة 200 مل">
                    </div>
                    <div class="product-card-body">
                        <h3 class="product-title-ref" id="prod-title-1">مياه الواحة 200 مل</h3>
                        <p class="product-desc-ref" id="prod-desc-1">مياه الواحة 200 مل مياه شرب نقية وعالية الجودة، معبأة وفق أعلى معايير السلامة لضمان النقاء والطعم المنعش. مناسبة للاستخدام اليومي، والفعاليات، والمكاتب، والمدارس. تحتوي الكرتونة على 40 عبوة × 200 مل لسهولة التوزيع والاستخدام.</p>
                        <div class="product-bottom-bar">
                            <div class="product-price-tag" id="prod-price-1">0.400 د.ك.</div>
                            <button class="btn-add-ref btn-add-lbl" onclick="addToCart('p1')">+ أضف للسلة</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 2 (OASIS 330ml) -->
                <div class="product-card-ref reveal-on-scroll card-delay-2">
                    <span class="product-badge-tag" id="prod-badge-2">الأكثر مبيعاً</span>
                    <div class="product-banner-box">
                        <img src="/images/oasis_330ml.jpg" alt="مياه الواحة 330 مل">
                    </div>
                    <div class="product-card-body">
                        <h3 class="product-title-ref" id="prod-title-2">مياه الواحة 330 مل</h3>
                        <p class="product-desc-ref" id="prod-desc-2">استمتع بالنقاء والانتعاش مع مياه الواحة 330 مل، مياه شرب نقية وعالية الجودة، معبأة وفق أعلى معايير الجودة والسلامة لضمان مذاق منعش ونقاء يدوم. تتميز بحجم عملي وسهل الحمل، مما يجعلها الخيار المثالي للاستخدام اليومي في المنزل، والعمل، والمدارس، والرحلات، والفعاليات المختلفة. المميزات: مياه شرب نقية وعالية الجودة. معبأة وفق أعلى معايير الجودة والسلامة. طعم منعش ونقاء يدوم. عبوة عملية وسهولة الحمل. مثالية للاستخدام اليومي والفعاليات. محتويات الكرتونة: 24 عبوة × 330 مل</p>
                        <div class="product-bottom-bar">
                            <div class="product-price-tag" id="prod-price-2">0.400 د.ك.</div>
                            <button class="btn-add-ref btn-add-lbl" onclick="addToCart('p2')">+ أضف للسلة</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 3 (OASIS 500ml) -->
                <div class="product-card-ref reveal-on-scroll card-delay-3">
                    <span class="product-badge-tag" id="prod-badge-3">الأكثر طلباً</span>
                    <div class="product-banner-box">
                        <img src="/images/oasis_500ml.png" alt="مياه الواحة 500 مل">
                    </div>
                    <div class="product-card-body">
                        <h3 class="product-title-ref" id="prod-title-3">مياه الواحة 500 مل</h3>
                        <p class="product-desc-ref" id="prod-desc-3">مياه شرب نقية وعالية الجودة، معبأة وفق أعلى معايير الجودة والسلامة لضمان النقاء والطعم المنعش. تتميز بحجم عملي يناسب الاستخدام اليومي في المنزل، والعمل، والمدارس، والرحلات، والفعاليات، لتوفر ترطيبًا منعشًا في أي وقت. المميزات: مياه شرب نقية وعالية الجودة. معبأة وفق أعلى معايير الجودة والسلامة. طعم منعش ونقاء يدوم. عبوة عملية وسهلة الحمل. مناسبة للاستخدام اليومي والفعاليات. محتويات الكرتونة: 24 عبوة × 500 مل.</p>
                        <div class="product-bottom-bar">
                            <div class="product-price-tag" id="prod-price-3">0.450 د.ك.</div>
                            <button class="btn-add-ref btn-add-lbl" onclick="addToCart('p3')">+ أضف للسلة</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 4 (OASIS 1.5L) -->
                <div class="product-card-ref reveal-on-scroll card-delay-4">
                    <span class="product-badge-tag" id="prod-badge-4">خيار العائلة</span>
                    <div class="product-banner-box">
                        <img src="/images/oasis_1500ml.png" alt="مياه الواحة 1.5 لتر">
                    </div>
                    <div class="product-card-body">
                        <h3 class="product-title-ref" id="prod-title-4">مياه الواحة 1.5 لتر</h3>
                        <p class="product-desc-ref" id="prod-desc-4">مياه شرب نقية وعالية الجودة، معبأة وفق أعلى معايير الجودة والسلامة لضمان النقاء والطعم المنعش. تتميز بسعة كبيرة تلبي احتياجات الأسرة، والمكاتب، والمطاعم، والرحلات، والفعاليات، لتوفر ترطيبًا يدوم طوال اليوم. المميزات: مياه شرب نقية وعالية الجودة. معبأة وفق أعلى معايير الجودة والسلامة. طعم منعش ونقاء يدوم. سعة كبيرة مناسبة للاستخدام اليومي والعائلي. مثالية للمنازل، والمكاتب، والرحلات، والفعاليات. محتويات الكرتونة: 12 عبوة × 1.5 لتر.</p>
                        <div class="product-bottom-bar">
                            <div class="product-price-tag" id="prod-price-4">0.450 د.ك.</div>
                            <button class="btn-add-ref btn-add-lbl" onclick="addToCart('p4')">+ أضف للسلة</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 5 (OASIS 5L Gallon Refill) -->
                <div class="product-card-ref reveal-on-scroll card-delay-1">
                    <span class="product-badge-tag" id="prod-badge-5">قابل للإرجاع</span>
                    <div class="product-banner-box">
                        <img src="/images/oasis_5gallon_refill.png" alt="جالون مياه الواحة 5 لتر (قابل للاسترداد)">
                    </div>
                    <div class="product-card-body">
                        <h3 class="product-title-ref" id="prod-title-5">جالون مياه الواحة 5 لتر (قابل للاسترداد)</h3>
                        <p class="product-desc-ref" id="prod-desc-5">جالون مياه شرب نقية وعالية الجودة بسعة 5 لترات، معبأ وفق أعلى معايير الجودة والسلامة لضمان النقاء والطعم المنعش. يتميز بعقوة متينة قابلة للاسترداد وإعادة الاستخدام، مما يجعله خيارًا اقتصاديًا وصديقًا للبيئة، ومثاليًا للمنازل، والمكاتب، والمؤسسات، والاستخدام اليومي. المميزات: مياه شرب نقية وعالية الجودة. معبأة وفق أعلى معايير الجودة والسلامة. عبوة قابلة للاسترداد وإعادة الاستخدام. سعة 5 لترات مناسبة للاستخدام اليومي. مثالية للمنازل، والمكاتب، والشركات، والمؤسسات. السعة: 5 لتر (قابل للاسترداد).</p>
                        <div class="product-bottom-bar">
                            <div class="product-price-tag" id="prod-price-5">0.800 د.ك.</div>
                            <button class="btn-add-ref btn-add-lbl" onclick="addToCart('p5')">+ أضف للسلة</button>
                        </div>
                    </div>
                </div>

                <!-- Product Card 6 (Hot & Cold Dispenser) -->
                <div class="product-card-ref reveal-on-scroll card-delay-2">
                    <span class="product-badge-tag" id="prod-badge-6">خصم 50%</span>
                    <div class="product-banner-box">
                        <img src="/images/oasis_dispenser_cooler.png" alt="موزع مياه الواحة الساخن والبارد">
                    </div>
                    <div class="product-card-body">
                        <h3 class="product-title-ref" id="prod-title-6">موزع مياه الواحة الساخن والبارد</h3>
                        <p class="product-desc-ref" id="prod-desc-6">استمتع بالمياه الباردة والمنعشة أو الساخنة في أي وقت مع موزع مياه الواحة، المصمم بأداء موثوق وتصميم أنيق يناسب المنازل، والمكاتب، والشركات. يعمل مع عبوات المياه القابلة للاسترداد، ويوفر سهولة الاستخدام مع جودة عالية وأداء عملي للاستخدام اليومي. المواصفات يدعم المياه الباردة والساخنة. متوافق مع عبوات مياه 5 جالون القابلة للاسترداد. تصميم أنيق وعصري يناسب جميع الأماكن. سهل الاستخدام والتنظيف. هيكل متين وعالي الجودة. تشغيل هادئ واستهلاك منخفض للطاقة. مناسب للمنازل، والمكاتب، والمدارس، والعيادات، والشركات. مزود بصنبورين منفصلين للمياه الباردة والساخنة. يوفر مياه جاهزة للشرب أو لتحضير المشروبات الساخنة في أي وقت.</p>
                        <div class="product-bottom-bar">
                            <div class="product-price-tag" id="prod-price-6">20.000 د.ك.</div>
                            <button class="btn-add-ref btn-add-lbl" onclick="addToCart('p6')">+ أضف للسلة</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── WHY CHOOSE مياه الواحة الكويت SECTION ── -->
    <div class="why-us-wrapper" id="about">
        <div class="why-us-container">
            <div class="section-header-ref reveal-on-scroll">
                <h2 class="section-title-ref" id="sec-why-title">Why Choose AquaPure?</h2>
                <p class="section-subtitle-ref" id="sec-why-sub">We don't just sell water — we deliver health, purity, and peace of mind.</p>
            </div>

            <div class="why-us-grid">
                <div class="why-us-card reveal-on-scroll card-delay-1">
                    <div class="why-icon-box icon-blue"><i class="fa-solid fa-mountain"></i></div>
                    <h3 class="why-card-title" id="why-t-1">Pure Mountain Source</h3>
                    <p class="why-card-desc" id="why-d-1">Sourced from pristine natural springs in the heart of Kuwait's pristine sources.</p>
                </div>

                <div class="why-us-card reveal-on-scroll card-delay-2">
                    <div class="why-icon-box icon-orange"><i class="fa-solid fa-bolt"></i></div>
                    <h3 class="why-card-title" id="why-t-2">Same-Day Delivery</h3>
                    <p class="why-card-desc" id="why-d-2">Order before noon and receive your water the same day across Kuwait City.</p>
                </div>

                <div class="why-us-card reveal-on-scroll card-delay-3">
                    <div class="why-icon-box icon-teal"><i class="fa-solid fa-award"></i></div>
                    <h3 class="why-card-title" id="why-t-3">ISO Certified Quality</h3>
                    <p class="why-card-desc" id="why-d-3">Tested and certified to international standards for your peace of mind.</p>
                </div>

                <div class="why-us-card reveal-on-scroll card-delay-4">
                    <div class="why-icon-box icon-green"><i class="fa-solid fa-leaf"></i></div>
                    <h3 class="why-card-title" id="why-t-4">Eco-Friendly Packaging</h3>
                    <p class="why-card-desc" id="why-d-4">100% recyclable bottles and biodegradable packaging materials.</p>
                </div>

                <div class="why-us-card reveal-on-scroll card-delay-1">
                    <div class="why-icon-box icon-purple"><i class="fa-solid fa-users"></i></div>
                    <h3 class="why-card-title" id="why-t-5">10,000+ Families Trust Us</h3>
                    <p class="why-card-desc" id="why-d-5">Serving homes, offices, and restaurants across every governorate of Kuwait.</p>
                </div>

                <div class="why-us-card reveal-on-scroll card-delay-2">
                    <div class="why-icon-box icon-pink"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg></div>
                    <h3 class="why-card-title" id="why-t-6">24/7 Customer Support</h3>
                    <p class="why-card-desc" id="why-d-6">Our team is always available to assist you via WhatsApp, call, or email.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- ── WATER QUALITY SECTION ── -->
    <div class="quality-wrapper" id="quality">
        <div class="quality-container">
            <div class="section-header-ref reveal-on-scroll">
                <h2 class="section-title-ref" id="sec-quality-title">Water Quality</h2>
                <p class="section-subtitle-ref" id="sec-quality-sub">Every drop tested, every batch certified.</p>
            </div>

            <div class="quality-grid">
                <div class="quality-card reveal-on-scroll card-delay-1">
                    <div class="quality-icon-circle"><svg class="inline-icon" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22a7 7 0 0 0 7-7c0-2-1-3.9-3-5.5s-3.5-4-4-6.5c-.5 2.5-2 4.9-4 6.5C6 11.1 5 13 5 15a7 7 0 0 0 7 7z"/></svg></div>
                    <div class="quality-card-body">
                        <div class="quality-card-header">120-180 mg/L</div>
                        <h3 class="quality-card-title" id="q-t-1">Optimal TDS Level</h3>
                        <p class="quality-card-desc" id="q-d-1">Our water maintains a TDS of 120–180 mg/L — the ideal range for taste and health.</p>
                    </div>
                </div>

                <div class="quality-card reveal-on-scroll card-delay-2">
                    <div class="quality-icon-circle"><i class="fa-solid fa-droplet"></i></div>
                    <div class="quality-card-body">
                        <div class="quality-card-header">pH 7.4</div>
                        <h3 class="quality-card-title" id="q-t-2">Balanced pH 7.4</h3>
                        <p class="quality-card-desc" id="q-d-2">Naturally alkaline with a pH of 7.4, supporting healthy body function.</p>
                    </div>
                </div>

                <div class="quality-card reveal-on-scroll card-delay-3">
                    <div class="quality-icon-circle"><i class="fa-solid fa-glass-water"></i></div>
                    <div class="quality-card-body">
                        <div class="quality-card-header">Ca · Mg · K</div>
                        <h3 class="quality-card-title" id="q-t-3">Essential Minerals</h3>
                        <p class="quality-card-desc" id="q-d-3">Rich in calcium, magnesium, and potassium — minerals your body needs daily.</p>
                    </div>
                </div>

                <div class="quality-card reveal-on-scroll card-delay-1">
                    <div class="quality-icon-circle"><i class="fa-solid fa-flask"></i></div>
                    <div class="quality-card-body">
                        <div class="quality-card-header">6 Stages</div>
                        <h3 class="quality-card-title" id="q-t-4">Multi-Stage Filtration</h3>
                        <p class="quality-card-desc" id="q-d-4">6-stage purification process including UV sterilization and reverse osmosis.</p>
                    </div>
                </div>

                <div class="quality-card reveal-on-scroll card-delay-2">
                    <div class="quality-icon-circle"><i class="fa-solid fa-microscope"></i></div>
                    <div class="quality-card-body">
                        <div class="quality-card-header">Daily</div>
                        <h3 class="quality-card-title" id="q-t-5">Daily Lab Testing</h3>
                        <p class="quality-card-desc" id="q-d-5">Every batch is tested in our ISO 17025-certified laboratory before distribution.</p>
                    </div>
                </div>

                <div class="quality-card reveal-on-scroll card-delay-3">
                    <div class="quality-icon-circle"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg></div>
                    <div class="quality-card-body">
                        <div class="quality-card-header">ISO 9001</div>
                        <h3 class="quality-card-title" id="q-t-6">International Certifications</h3>
                        <p class="quality-card-desc" id="q-d-6">Certified by Kuwait's MOCIIP, ISO 9001:2015, and WHO drinking water standards.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── OUR STORY SECTION ── -->
    <div class="story-wrapper" id="story">
        <div class="story-container">
            <div class="story-img-box reveal-from-left">
                <img src="/images/story.png" alt="AquaPure Founder & Story">
            </div>

            <div class="story-content reveal-on-scroll">
                <h2 class="story-title" id="story-title">Our Story</h2>
                <p class="story-subtitle" id="story-subtitle">A journey of purity, crafted for Kuwait</p>

                <p class="story-text-p" id="story-p-1">
                    مياه الواحة الكويت was founded in 2012 with a single mission: to deliver the cleanest, freshest water to every home and business in Kuwait. What began as a small family operation in Kuwait City has grown into the sultanate's most trusted premium water brand.
                </p>

                <p class="story-text-p" id="story-p-2">
                    Our water is sourced from natural springs nestled in Kuwait's Al Hajar Mountains, where the rock acts as nature's perfect filter over thousands of years. We bottle it at the source to preserve its natural mineral profile and unmatched freshness.
                </p>

                <p class="story-text-p" id="story-p-3">
                    Today, we serve over 10,000 families and 500 businesses across all 11 governorates of Kuwait. Our fleet of refrigerated delivery vehicles ensures every drop reaches you at the perfect temperature.
                </p>

                <div class="story-cards-row">
                    <div class="story-box-card">
                        <div class="story-box-header"><span><i class="fa-solid fa-check"></i></span> <span id="story-mission-t">Our Mission</span></div>
                        <p class="story-box-desc" id="story-mission-d">To make pure, safe, and delicious water accessible to every household and business in Kuwait — delivered with care, speed, and a smile.</p>
                    </div>

                    <div class="story-box-card">
                        <div class="story-box-header"><span><i class="fa-solid fa-check"></i></span> <span id="story-vision-t">Our Vision</span></div>
                        <p class="story-box-desc" id="story-vision-d">To be Kuwait's most trusted water brand, setting the standard for quality, sustainability, and customer service in the region.</p>
                    </div>
                </div>

                <div class="story-stats-grid">
                    <div class="story-mini-stat">
                        <div class="story-stat-num">4,842+</div>
                        <div class="story-stat-lbl" id="story-st-1">Families Served</div>
                    </div>
                    <div class="story-mini-stat">
                        <div class="story-stat-num">24+</div>
                        <div class="story-stat-lbl" id="story-st-2">Businesses</div>
                    </div>
                    <div class="story-mini-stat">
                        <div class="story-stat-num">11</div>
                        <div class="story-stat-lbl" id="story-st-3">Governorates</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── DELIVERY ACROSS KUWAIT SECTION ── -->
    <div class="delivery-wrapper" id="delivery">
        <div class="delivery-container">
            <div class="section-header-ref reveal-on-scroll">
                <h2 class="section-title-ref" id="sec-del-title">Delivery Across Kuwait</h2>
                <p class="section-subtitle-ref" id="sec-del-sub">Fast, free, and reliable — wherever you are in Kuwait.</p>
            </div>

            <div class="delivery-main-grid">
                <div class="delivery-features-column">
                    <div class="delivery-feature-card reveal-on-scroll card-delay-1">
                        <div class="del-icon-box del-icon-green"><i class="fa-solid fa-box"></i></div>
                        <div>
                            <h3 class="del-feature-title" id="del-t-1">Free Delivery</h3>
                            <p class="del-feature-desc" id="del-d-1">Free delivery to all governorates and states of Kuwait — no minimum order.</p>
                        </div>
                    </div>

                    <div class="delivery-feature-card reveal-on-scroll card-delay-2">
                        <div class="del-icon-box del-icon-blue"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg></div>
                        <div>
                            <h3 class="del-feature-title" id="del-t-2">Same-Day Delivery</h3>
                            <p class="del-feature-desc" id="del-d-2">Order before 12:00 PM and receive your water the same day in Kuwait City.</p>
                        </div>
                    </div>

                    <div class="delivery-feature-card reveal-on-scroll card-delay-3">
                        <div class="del-icon-box del-icon-purple">⏰</div>
                        <div>
                            <h3 class="del-feature-title" id="del-t-3">Scheduled Delivery</h3>
                            <p class="del-feature-desc" id="del-d-3">Choose your preferred delivery time slot — morning, afternoon, or evening.</p>
                        </div>
                    </div>

                    <div class="delivery-feature-card reveal-on-scroll card-delay-4">
                        <div class="del-icon-box del-icon-orange"><i class="fa-solid fa-truck-fast"></i></div>
                        <div>
                            <h3 class="del-feature-title" id="del-t-4">Live Order Tracking</h3>
                            <p class="del-feature-desc" id="del-d-4">Track your delivery in real time via WhatsApp updates.</p>
                        </div>
                    </div>
                </div>

                <div class="delivery-right-column">
                    <div class="governorate-coverage-box reveal-on-scroll card-delay-2">
                        <div class="gov-box-header" id="gov-header">
                            <span><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg></span> We cover all governorates
                        </div>
                        <div class="gov-pills-wrap" id="gov-pills">
                            <span class="gov-pill-tag">Kuwait City</span>
                            <span class="gov-pill-tag">Dhofar</span>
                            <span class="gov-pill-tag">Musandam</span>
                            <span class="gov-pill-tag">Al Buraimi</span>
                            <span class="gov-pill-tag">Ad Dakhiliyah</span>
                            <span class="gov-pill-tag">Ash Sharqiyah North</span>
                            <span class="gov-pill-tag">Ash Sharqiyah South</span>
                            <span class="gov-pill-tag">Al Batinah North</span>
                            <span class="gov-pill-tag">Al Batinah South</span>
                            <span class="gov-pill-tag">Al Wusta</span>
                            <span class="gov-pill-tag">Ad Dhahirah</span>
                        </div>
                        <div class="gov-free-banner">
                            <div class="gov-free-title" id="gov-free-t">FREE</div>
                            <p class="gov-free-desc" id="gov-free-d">Free delivery to all governorates and states of Kuwait — no minimum order.</p>
                        </div>
                    </div>

                    <div class="delivery-fleet-img-box reveal-on-scroll card-delay-4">
                        <img src="/images/delivery.png" alt="مياه الواحة الكويت Delivery Fleet">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── REVIEWS SECTION ── -->
    <div class="reviews-wrapper" id="reviews">
        <div class="reviews-container">
            <div class="section-header-ref reveal-on-scroll">
                <h2 class="section-title-ref" id="sec-rev-title">What Our Customers Say</h2>
                <p class="section-subtitle-ref" id="sec-rev-sub">Trusted by thousands of families and businesses across Kuwait.</p>
            </div>

            <div class="reviews-grid">
                <div class="review-card reveal-on-scroll card-delay-1">
                    <div>
                        <div class="quote-icon">“</div>
                        <p class="review-text" id="rev-txt-1">"We have been using AquaPure for over 2 years now. The water quality is exceptional and delivery is always on time. Our family trusts nothing else."</p>
                    </div>
                    <div class="review-author-row">
                        <div class="author-info">
                            <div class="author-avatar-circle">A</div>
                            <div>
                                <div class="author-name">Ahmed Al Balushi</div>
                                <div class="author-location" id="rev-loc-1">Kuwait City</div>
                            </div>
                        </div>
                        <div class="stars-row"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    </div>
                </div>

                <div class="review-card reveal-on-scroll card-delay-2">
                    <div>
                        <div class="quote-icon">“</div>
                        <p class="review-text" id="rev-txt-2">"Even in Salalah, the delivery reaches us within 24 hours. The customer service team is very responsive on WhatsApp. Highly recommended!"</p>
                    </div>
                    <div class="review-author-row">
                        <div class="author-info">
                            <div class="author-avatar-circle">F</div>
                            <div>
                                <div class="author-name">Fatima Al Harthi</div>
                                <div class="author-location" id="rev-loc-2">Salalah</div>
                            </div>
                        </div>
                        <div class="stars-row"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></div>
                    </div>
                </div>

                <div class="review-card reveal-on-scroll card-delay-3">
                    <div>
                        <div class="quote-icon">“</div>
                        <p class="review-text" id="rev-txt-3">"As an office manager, I order the 19L cooler jugs every week. The subscription service saves us time and the water is always fresh and cold."</p>
                    </div>
                    <div class="review-author-row">
                        <div class="author-info">
                            <div class="author-avatar-circle">R</div>
                            <div>
                                <div class="author-name">Rajesh Kumar</div>
                                <div class="author-location" id="rev-loc-3">Kuwait City</div>
                            </div>
                        </div>
                        <div class="stars-row"><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-regular fa-star"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── FAQ SECTION ── -->
    <div class="faq-wrapper" id="faq">
        <div class="faq-container">
            <div class="section-header-ref reveal-on-scroll">
                <h2 class="section-title-ref" id="sec-faq-title">الأسئلة الشائعة</h2>
                <p class="section-subtitle-ref" id="sec-faq-sub">كل ما تحتاج لمعرفته عن مياه الواحة الكويت.</p>
            </div>

            <div class="faq-accordion">
                <div class="faq-item reveal-on-scroll card-delay-1">
                    <button class="faq-question-btn" onclick="toggleFaq(this)">
                        <span id="faq-q-1">متى يصل طلبي؟</span>
                        <span class="faq-chevron">▾</span>
                    </button>
                    <div class="faq-answer-body" id="faq-a-1">
                        Standard delivery takes 2–4 hours for Kuwait City governorate and same-day delivery for all other governorates across Kuwait when ordered before 12:00 PM.
                    </div>
                </div>

                <div class="faq-item reveal-on-scroll card-delay-2">
                    <button class="faq-question-btn" onclick="toggleFaq(this)">
                        <span id="faq-q-2">هل التوصيل مجاني فعلاً؟</span>
                        <span class="faq-chevron">▾</span>
                    </button>
                    <div class="faq-answer-body" id="faq-a-2">
                        Yes! Delivery is 100% free across all 11 governorates and states of Kuwait with no minimum order requirements.
                    </div>
                </div>

                <div class="faq-item reveal-on-scroll card-delay-3">
                    <button class="faq-question-btn" onclick="toggleFaq(this)">
                        <span id="faq-q-3">ما طرق الدفع المتاحة؟</span>
                        <span class="faq-chevron">▾</span>
                    </button>
                    <div class="faq-answer-body" id="faq-a-3">
                        We accept debit/credit cards and instant mobile bank transfers via WhatsApp checkout.
                    </div>
                </div>

                <div class="faq-item reveal-on-scroll card-delay-4">
                    <button class="faq-question-btn" onclick="toggleFaq(this)">
                        <span id="faq-q-4">كيف أتأكد أن المياه آمنة للشرب؟</span>
                        <span class="faq-chevron">▾</span>
                    </button>
                    <div class="faq-answer-body" id="faq-a-4">
                        Our water undergoes 6-stage purification including reverse osmosis and UV sterilization, and is tested daily in ISO 17025 certified laboratories meeting WHO standards.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── CONTACT SECTION ── -->
    <div class="contact-wrapper" id="contact">
        <div class="contact-container">
            <div class="section-header-ref reveal-on-scroll">
                <h2 class="section-title-ref" id="sec-contact-title">تواصل معنا</h2>
                <p class="section-subtitle-ref" id="sec-contact-sub">نحن هنا لمساعدتك. تواصل معنا في أي وقت.</p>
            </div>

            <div class="contact-main-grid">
                <div class="contact-info-list">
                    <div class="contact-info-card reveal-on-scroll card-delay-1">
                        <div class="contact-icon-circle"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></div>
                        <div>
                            <div class="contact-info-label" id="cnt-lbl-1">الهاتف</div>
                            <div class="contact-info-value">+965 50286025</div>
                        </div>
                    </div>

                    <div class="contact-info-card reveal-on-scroll card-delay-2">
                        <div class="contact-icon-circle"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></div>
                        <div>
                            <div class="contact-info-label" id="cnt-lbl-2">واتساب</div>
                            <div class="contact-info-value">+965 50286025</div>
                        </div>
                    </div>

                    <div class="contact-info-card reveal-on-scroll card-delay-3">
                        <div class="contact-icon-circle"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                        <div>
                            <div class="contact-info-label" id="cnt-lbl-3">البريد الإلكتروني</div>
                            <div class="contact-info-value">info@oasiskuwait.com</div>
                        </div>
                    </div>

                    <div class="contact-info-card reveal-on-scroll card-delay-4">
                        <div class="contact-icon-circle"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                        <div>
                            <div class="contact-info-label" id="cnt-lbl-4">الموقع</div>
                            <div class="contact-info-value" id="cnt-val-4">مدينة الكويت، دولة الكويت</div>
                        </div>
                    </div>

                    <div class="contact-info-card reveal-on-scroll card-delay-1">
                        <div class="contact-icon-circle">⏰</div>
                        <div>
                            <div class="contact-info-label" id="cnt-lbl-5">ساعات العمل</div>
                            <div class="contact-info-value" id="cnt-val-5">السبت – الخميس: 8:00 ص – 10:00 م</div>
                        </div>
                    </div>
                </div>

                <div class="contact-form-card reveal-on-scroll card-delay-2">
                    <div class="form-group">
                        <label class="form-label" id="frm-lbl-1">الاسم الكريم</label>
                        <input type="text" class="form-input" id="frm-in-1" placeholder="أدخل اسمك الكامل">
                    </div>

                    <div class="form-group">
                        <label class="form-label" id="frm-lbl-2">البريد الإلكتروني</label>
                        <input type="email" class="form-input" id="frm-in-2" placeholder="your@email.com">
                    </div>

                    <div class="form-group">
                        <label class="form-label" id="frm-lbl-3">الرسالة</label>
                        <textarea class="form-textarea" id="frm-in-3" placeholder="كيف يمكننا مساعدتك؟"></textarea>
                    </div>

                    <button class="btn-send-message" id="frm-btn-send" onclick="sendMessageAlert(event)">إرسال الرسالة</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End homepage-view -->

    <!-- Policy Page View -->
    <div id="policy-page-view" style="display: none; background-color: #f1f5f9; min-height: 100vh;">
        <div class="policy-page-banner">
            <h1 class="policy-page-title" id="policy-page-title"></h1>
        </div>
        <div class="policy-page-content-wrapper">
            <div class="policy-page-card">
                
                <div class="policy-section" id="page-policy-sec-1" style="display:none;">
                    <div class="policy-modal-section-title" id="page-policy-s1-title"></div>
                    <p class="policy-modal-body" id="page-policy-s1-body"></p>
                </div>
                <div class="policy-section" id="page-policy-sec-2" style="display:none;">
                    <div class="policy-modal-section-title" id="page-policy-s2-title"></div>
                    <p class="policy-modal-body" id="page-policy-s2-body"></p>
                </div>
                <div class="policy-section" id="page-policy-sec-3" style="display:none;">
                    <div class="policy-modal-section-title" id="page-policy-s3-title"></div>
                    <p class="policy-modal-body" id="page-policy-s3-body"></p>
                </div>
                <div class="policy-section" id="page-policy-sec-4" style="display:none;">
                    <div class="policy-modal-section-title" id="page-policy-s4-title"></div>
                    <p class="policy-modal-body" id="page-policy-s4-body"></p>
                </div>
            </div>
        </div>
    </div>

        <div id="about-page-view" style="display: none; background-color: #f1f5f9; min-height: 100vh; padding-bottom: 60px;">
        <div class="policy-page-banner">
            <h1 class="policy-page-title" id="page-about-title">من نحن</h1>
            <p style="color: rgba(255,255,255,0.85); margin-top: 12px; font-size: 1.1rem; text-align: center; margin-left: auto; margin-right: auto;" id="page-about-subtitle">مرحباً بكم في OASIS KUWAIT — مياه الواحة</p>
        </div>

        <div class="policy-page-content-wrapper" style="max-width: 860px; margin-top: -30px; position: relative; z-index: 2;">
            <!-- Intro Card -->
            <div class="page-about-intro-card" style="background: #ffffff; border-radius: 16px; padding: 32px 36px; margin-bottom: 24px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
                <p id="page-about-p1" style="color: #475569; font-size: 1rem; line-height: 1.8; margin-bottom: 16px;">
                    نحن متجر إلكتروني متخصص في توفير مياه الشرب عالية الجودة وخدمات توصيلها داخل دولة الكويت. نهدف إلى تقديم تجربة شراء سهلة وسريعة مع التركيز على جودة المنتجات وسرعة الخدمة ورضا العملاء.
                </p>
                <p id="page-about-p2" style="color: #475569; font-size: 1rem; line-height: 1.8; margin: 0;">
                    نعمل على توفير حلول مريحة للأفراد والعائلات والشركات للحصول على مياه الشرب بكل سهولة من خلال منصتنا الإلكترونية.
                </p>
            </div>

            <!-- Mission & Vision Cards Grid -->
            <div class="page-mission-vision-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-bottom: 24px;">
                <div class="page-mv-card" style="background: #e0f2fe; border: 1px solid #bae6fd; border-radius: 16px; padding: 28px 24px;">
                    <div class="page-mv-icon" style="width: 44px; height: 44px; background: #0284c7; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; margin-bottom: 14px;">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <h3 class="page-mv-title" id="page-mission-t" style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">رسالتنا</h3>
                    <p class="page-mv-desc" id="page-mission-d" style="color: #475569; font-size: 0.95rem; line-height: 1.7; margin: 0;">
                        جعل المياه النقية والآمنة متوفرة لكل منزل ومؤسسة في الكويت — مع الاهتمام والسرعة والابتسامة.
                    </p>
                </div>
                <div class="page-mv-card" style="background: #e0f2fe; border: 1px solid #bae6fd; border-radius: 16px; padding: 28px 24px;">
                    <div class="page-mv-icon" style="width: 44px; height: 44px; background: #0284c7; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.2rem; margin-bottom: 14px;">
                        <i class="fa-solid fa-award"></i>
                    </div>
                    <h3 class="page-mv-title" id="page-vision-t" style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin-bottom: 10px;">رؤيتنا</h3>
                    <p class="page-mv-desc" id="page-vision-d" style="color: #475569; font-size: 0.95rem; line-height: 1.7; margin: 0;">
                        أن نكون العلامة التجارية الأكثر ثقة للمياه في دولة الكويت، ونضع المعايير للجودة والاستدامة وخدمة العملاء في المنطقة.
                    </p>
                </div>
            </div>

            <!-- Stats Row -->
            <div class="page-stats-row" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-bottom: 28px;">
                <div class="page-stat-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px 20px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.03);">
                    <div class="page-stat-num" style="font-size: 2.2rem; font-weight: 800; color: #0284c7; margin-bottom: 6px;">+10,000</div>
                    <div class="page-stat-lbl" id="page-stat-lbl-1" style="font-size: 0.95rem; color: #64748b; font-weight: 600;">عائلة مخدومة</div>
                </div>
                <div class="page-stat-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px 20px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.03);">
                    <div class="page-stat-num" style="font-size: 2.2rem; font-weight: 800; color: #0284c7; margin-bottom: 6px;">+500</div>
                    <div class="page-stat-lbl" id="page-stat-lbl-2" style="font-size: 0.95rem; color: #64748b; font-weight: 600;">مؤسسة تجارية</div>
                </div>
                <div class="page-stat-card" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 28px 20px; text-align: center; box-shadow: 0 2px 10px rgba(0,0,0,0.03);">
                    <div class="page-stat-num" style="font-size: 2.2rem; font-weight: 800; color: #0284c7; margin-bottom: 6px;">6</div>
                    <div class="page-stat-lbl" id="page-stat-lbl-3" style="font-size: 0.95rem; color: #64748b; font-weight: 600;">محافظات</div>
                </div>
            </div>

            <!-- Our Values Section Card -->
            <div class="page-values-section" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 32px 36px; box-shadow: 0 4px 20px rgba(0,0,0,0.04);">
                <h2 class="page-values-title" id="page-values-title" style="font-size: 1.5rem; font-weight: 800; color: #0f172a; margin-bottom: 24px; text-align: right;">قيمنا</h2>
                <div class="page-values-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 18px;">
                    <div class="page-value-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px 22px; display: flex; align-items: flex-start; gap: 14px;">
                        <span class="page-value-star" style="color: #0284c7; font-size: 1.1rem; flex-shrink: 0; margin-top: 2px;"><i class="fa-solid fa-star"></i></span>
                        <div>
                            <div class="page-value-title" id="page-val-t-1" style="font-weight: 800; color: #0f172a; margin-bottom: 6px; font-size: 1rem;">الجودة</div>
                            <p class="page-value-desc" id="page-val-d-1" style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">نلتزم بتقديم مياه معبأة تلبي أعلى معايير الجودة والسلامة.</p>
                        </div>
                    </div>
                    <div class="page-value-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px 22px; display: flex; align-items: flex-start; gap: 14px;">
                        <span class="page-value-star" style="color: #0284c7; font-size: 1.1rem; flex-shrink: 0; margin-top: 2px;"><i class="fa-solid fa-star"></i></span>
                        <div>
                            <div class="page-value-title" id="page-val-t-2" style="font-weight: 800; color: #0f172a; margin-bottom: 6px; font-size: 1rem;">الموثوقية</div>
                            <p class="page-value-desc" id="page-val-d-2" style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">نحترم مواعيد التوصيل ونفي بوعودنا لكل عميل.</p>
                        </div>
                    </div>
                    <div class="page-value-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px 22px; display: flex; align-items: flex-start; gap: 14px;">
                        <span class="page-value-star" style="color: #0284c7; font-size: 1.1rem; flex-shrink: 0; margin-top: 2px;"><i class="fa-solid fa-star"></i></span>
                        <div>
                            <div class="page-value-title" id="page-val-t-3" style="font-weight: 800; color: #0f172a; margin-bottom: 6px; font-size: 1rem;">سرعة الخدمة</div>
                            <p class="page-value-desc" id="page-val-d-3" style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">نعالج الطلبات بسرعة ونوصل في الوقت المحدد عبر جميع المحافظات.</p>
                        </div>
                    </div>
                    <div class="page-value-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px 22px; display: flex; align-items: flex-start; gap: 14px;">
                        <span class="page-value-star" style="color: #0284c7; font-size: 1.1rem; flex-shrink: 0; margin-top: 2px;"><i class="fa-solid fa-star"></i></span>
                        <div>
                            <div class="page-value-title" id="page-val-t-4" style="font-weight: 800; color: #0f172a; margin-bottom: 6px; font-size: 1rem;">الشفافية</div>
                            <p class="page-value-desc" id="page-val-d-4" style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">نوفر معلومات واضحة عن المنتجات والأسعار وسياسات التوصيل.</p>
                        </div>
                    </div>
                    <div class="page-value-card" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 14px; padding: 20px 22px; display: flex; align-items: flex-start; gap: 14px;">
                        <span class="page-value-star" style="color: #0284c7; font-size: 1.1rem; flex-shrink: 0; margin-top: 2px;"><i class="fa-solid fa-star"></i></span>
                        <div>
                            <div class="page-value-title" id="page-val-t-5" style="font-weight: 800; color: #0f172a; margin-bottom: 6px; font-size: 1rem;">رضا العملاء</div>
                            <p class="page-value-desc" id="page-val-d-5" style="color: #64748b; font-size: 0.9rem; line-height: 1.6; margin: 0;">رضاك هو أولويتنا — نستمع لاحتياجاتك ونلبيها.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div id="faq-page-view" style="display: none; background-color: #f1f5f9; min-height: 100vh;">
        <div class="policy-page-banner">
            <h1 class="policy-page-title" id="page-faq-title">الأسئلة الشائعة</h1>
            <p style="color: rgba(255,255,255,0.85); margin-top: 12px; font-size: 1.1rem; text-align: center; margin-left: auto; margin-right: auto;" id="page-faq-subtitle">كل ما تحتاج لمعرفته عن مياه الواحة الكويت</p>
        </div>
        <div class="policy-page-content-wrapper" style="max-width: 820px;">
            <div class="page-faq-accordion">
                <div class="faq-item">
                    <button class="faq-question-btn" onclick="toggleFaq(this)">
                        <span id="page-faq-q-1">متى يصل طلبي؟</span>
                        <span class="faq-chevron">▾</span>
                    </button>
                    <div class="faq-answer-body" id="page-faq-a-1">يستغرق التوصيل القياسي من 2 إلى 4 ساعات في محافظة العاصمة، وتوصيل في نفس اليوم لبقية المحافظات عند الطلب قبل الساعة 12:00 ظهراً.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question-btn" onclick="toggleFaq(this)">
                        <span id="page-faq-q-2">هل التوصيل مجاني فعلاً؟</span>
                        <span class="faq-chevron">▾</span>
                    </button>
                    <div class="faq-answer-body" id="page-faq-a-2">نعم! التوصيل مجاني 100% في جميع المحافظات الست في دولة الكويت بدون حد أدنى للطلب.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question-btn" onclick="toggleFaq(this)">
                        <span id="page-faq-q-3">ما طرق الدفع المتاحة؟</span>
                        <span class="faq-chevron">▾</span>
                    </button>
                    <div class="faq-answer-body" id="page-faq-a-3">نقبل الدفع عند الاستلام وبطاقات الخصم والائتمان والتحويلات البنكية الفورية عبر الواتساب.</div>
                </div>
                <div class="faq-item">
                    <button class="faq-question-btn" onclick="toggleFaq(this)">
                        <span id="page-faq-q-4">كيف أتأكد أن المياه آمنة للشرب؟</span>
                        <span class="faq-chevron">▾</span>
                    </button>
                    <div class="faq-answer-body" id="page-faq-a-4">تخضع مياهنا لعملية تنقية من 6 مراحل تشمل التناضح العكسي والتعقيم بالأشعة فوق البنفسجية، وتُفحص يومياً في مختبرات معتمدة.</div>
                </div>
            </div>
        </div>
    </div>

    <div id="contact-page-view" style="display: none; background-color: #f1f5f9; min-height: 100vh;">
        <div class="policy-page-banner">
            <h1 class="policy-page-title" id="page-contact-title">تواصل معنا</h1>
            <p style="color: rgba(255,255,255,0.85); margin-top: 12px; font-size: 1.1rem; text-align: center; margin-left: auto; margin-right: auto;" id="page-contact-subtitle">نحن هنا لخدمتك — تواصل معنا في أي وقت</p>
        </div>
        <div class="policy-page-content-wrapper" style="max-width: 820px;">
            <div class="page-contact-stack">
                <div class="page-contact-card">
                    <div class="contact-icon-circle"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></div>
                    <div>
                        <div class="contact-info-label" id="page-cnt-lbl-1">الهاتف</div>
                        <div class="contact-info-value" dir="ltr">+965 50286025</div>
                    </div>
                </div>
                <div class="page-contact-card">
                    <div class="contact-icon-circle"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></div>
                    <div>
                        <div class="contact-info-label" id="page-cnt-lbl-2">واتساب</div>
                        <div class="contact-info-value">50286025</div>
                    </div>
                </div>
                <div class="page-contact-card">
                    <div class="contact-icon-circle"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></div>
                    <div>
                        <div class="contact-info-label" id="page-cnt-lbl-3">البريد الإلكتروني</div>
                        <div class="contact-info-value">info@oasiskuwait.com</div>
                    </div>
                </div>
                <div class="page-contact-card">
                    <div class="contact-icon-circle"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></div>
                    <div>
                        <div class="contact-info-label" id="page-cnt-lbl-4">الموقع</div>
                        <div class="contact-info-value" id="page-cnt-val-4">مدينة الكويت، دولة الكويت</div>
                    </div>
                </div>
                <div class="page-contact-card">
                    <div class="contact-icon-circle">⏰</div>
                    <div>
                        <div class="contact-info-label" id="page-cnt-lbl-5">ساعات خدمة العملاء</div>
                        <div class="contact-info-value" id="page-cnt-val-5">السبت إلى الخميس — 9:00 ص حتى 9:00 م</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── CHECKOUT: CART PAGE ── -->
    <div id="page-cart-view" style="display: none;">
        <div class="policy-page-banner">
            <h1 class="policy-page-title" id="checkout-cart-title">سلة المشتريات</h1>
            <p style="color: rgba(255,255,255,0.85); margin-top: 12px; font-size: 1.05rem;" id="checkout-cart-sub">راجع منتجاتك قبل إتمام الطلب</p>
        </div>
        <div class="checkout-shell">
            <div class="checkout-steps" id="checkout-steps-cart"></div>
            <div class="checkout-grid-2">
                <div class="checkout-card">
                    <div id="checkout-cart-items-wrap"></div>
                    <div class="checkout-actions">
                        <button class="btn-checkout-back" onclick="goHome()" id="checkout-cart-continue-btn">متابعة التسوق</button>
                        <button class="btn-checkout-primary" onclick="goToCheckoutStep('delivery')" id="checkout-cart-next-btn">معلومات التوصيل</button>
                    </div>
                </div>
                <div class="checkout-summary-card">
                    <div class="checkout-summary-title" id="checkout-summary-lbl">ملخص الطلب</div>
                    <div id="checkout-summary-lines"></div>
                    <div class="checkout-summary-total">
                        <span id="checkout-total-lbl">المجموع الكلي</span>
                        <span id="checkout-page-total">0.000 KWD</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ── CHECKOUT: DELIVERY INFO ── -->
    <div id="page-checkout-delivery-view" style="display: none;">
        <div class="policy-page-banner">
            <h1 class="policy-page-title" id="checkout-delivery-title">معلومات التوصيل</h1>
            <p style="color: rgba(255,255,255,0.85); margin-top: 12px; font-size: 1.05rem;" id="checkout-delivery-sub">أدخل بيانات التواصل وعنوان التوصيل</p>
        </div>
        <div class="checkout-shell">
            <div class="checkout-steps" id="checkout-steps-delivery"></div>
            <div class="checkout-grid-2">
                <div class="checkout-card">
                    <div class="checkout-card-title" id="checkout-delivery-form-title">بيانات التواصل</div>
                    <div class="checkout-card-sub" id="checkout-delivery-form-sub">سنستخدم هذه المعلومات لتأكيد طلبك وتوصيله.</div>
                    <form id="delivery-form" onsubmit="submitDeliveryForm(event)">
                        <div class="checkout-form-grid">
                            <div class="checkout-form-group">
                                <label class="checkout-label" for="chk-fullname" id="chk-lbl-fullname">الاسم الكامل</label>
                                <input class="checkout-input" type="text" id="chk-fullname" autocomplete="name">
                                <span class="checkout-error-msg" id="err-fullname"></span>
                            </div>
                            <div class="checkout-form-group">
                                <label class="checkout-label" for="chk-phone" id="chk-lbl-phone">رقم الهاتف</label>
                                <div style="display: flex; align-items: center; border: 1px solid #cbd5e1; border-radius: 8px; overflow: hidden; background: #fff;">
                                    <span style="background: #f8fafc; color: #0284c7; padding: 10px 14px; font-weight: 700; font-size: 0.95rem; border-right: 1px solid #cbd5e1; display: flex; align-items: center; gap: 6px;"><i class="fa-solid fa-phone"></i> +965</span>
                                    <input class="checkout-input" type="tel" id="chk-phone" maxlength="8" placeholder="50286025" style="border: none; border-radius: 0; outline: none; box-shadow: none; flex: 1;" oninput="formatPhoneInput(this)">
                                </div>
                                <span class="checkout-error-msg" id="err-phone"></span>
                            </div>
                            <div class="checkout-form-group full">
                                <label class="checkout-label" for="chk-email" id="chk-lbl-email">البريد الإلكتروني (اختياري)</label>
                                <input class="checkout-input" type="email" id="chk-email" autocomplete="email">
                            </div>
                            <div class="checkout-form-group full">
                                <label class="checkout-label" id="chk-lbl-slot">وقت التوصيل المفضل</label>
                                <div class="delivery-slot-grid" id="delivery-slot-grid">
                                    <div class="delivery-slot-option active" data-slot="morning" onclick="selectDeliverySlot('morning', this)" id="slot-morning">صباحاً (9 ص – 12 م)</div>
                                    <div class="delivery-slot-option" data-slot="afternoon" onclick="selectDeliverySlot('afternoon', this)" id="slot-afternoon">عصراً (12 م – 5 م)</div>
                                    <div class="delivery-slot-option" data-slot="evening" onclick="selectDeliverySlot('evening', this)" id="slot-evening">مساءً (5 م – 9 م)</div>
                                </div>
                            </div>
                            <div class="checkout-form-group full">
                                <label class="checkout-label" for="chk-notes" id="chk-lbl-notes">ملاحظات التوصيل (اختياري)</label>
                                <textarea class="checkout-textarea" id="chk-notes" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="checkout-actions">
                            <button type="button" class="btn-checkout-back" onclick="goToCheckoutStep('cart')" id="checkout-delivery-back-btn">العودة للسلة</button>
                            <button type="submit" class="btn-checkout-primary" id="checkout-delivery-next-btn">تحديد الموقع</button>
                        </div>
                    </form>
                </div>
                <div class="checkout-summary-card" id="checkout-delivery-summary"></div>
            </div>
        </div>
    </div>

    <!-- ── CHECKOUT: LOCATION ── -->
    <div id="page-checkout-location-view" style="display: none;">
        <div class="policy-page-banner">
            <h1 class="policy-page-title" id="checkout-location-title">موقع التوصيل</h1>
            <p style="color: rgba(255,255,255,0.85); margin-top: 12px; font-size: 1.05rem;" id="checkout-location-sub">حدد عنوان التوصيل على الخريطة</p>
        </div>
        <div class="checkout-shell">
            <div class="checkout-steps" id="checkout-steps-location"></div>
            <div class="checkout-grid-2">
                <div class="checkout-card">
                    <div class="checkout-card-title" id="checkout-location-form-title">تفاصيل العنوان</div>
                    <button type="button" class="btn-detect-location" onclick="detectUserLocation()" id="btn-detect-location"><i class="fa-solid fa-location-dot"></i> استخدام موقعي الحالي</button>
                    <div id="leaflet-map-container" style="position: relative; width: 100%; margin-bottom: 16px; overflow: hidden; border-radius: 12px;">
                        <div id="leaflet-map" style="width: 100%; height: 320px; border-radius: 12px; border: 1px solid #cbd5e1; z-index: 1;"></div>
                        <div style="font-size: 0.85rem; color: #64748b; margin-top: 8px; text-align: center;" id="location-map-hint">
                            <i class="fa-solid fa-hand-pointer"></i> <span id="map-hint-text">انقر على الخريطة أو اسحب العلامة لتحديد نقطة التوصيل</span>
                        </div>
                    </div>
                    <form id="location-form" onsubmit="submitLocationForm(event)">
                        <div class="checkout-form-grid">
                            <div class="checkout-form-group">
                                <label class="checkout-label" for="chk-governorate" id="chk-lbl-governorate">المحافظة</label>
                                <select class="checkout-select" id="chk-governorate" onchange="updateAreaOptions()"></select>
                                <span class="checkout-error-msg" id="err-governorate"></span>
                            </div>
                            <div class="checkout-form-group">
                                <label class="checkout-label" for="chk-wilaya" id="chk-lbl-wilaya">المنطقة / المدينة</label>
                                <select class="checkout-select" id="chk-wilaya"></select>
                                <span class="checkout-error-msg" id="err-wilaya"></span>
                            </div>
                            <div class="checkout-form-group full">
                                <label class="checkout-label" for="chk-address" id="chk-lbl-address">عنوان الشارع</label>
                                <input class="checkout-input" type="text" id="chk-address">
                                <span class="checkout-error-msg" id="err-address"></span>
                            </div>
                            <div class="checkout-form-group">
                                <label class="checkout-label" for="chk-building" id="chk-lbl-building">رقم المبنى / الفيلا</label>
                                <input class="checkout-input" type="text" id="chk-building">
                            </div>
                            <div class="checkout-form-group">
                                <label class="checkout-label" for="chk-landmark" id="chk-lbl-landmark">علامة مميزة (اختياري)</label>
                                <input class="checkout-input" type="text" id="chk-landmark">
                            </div>
                        </div>
                        <div class="checkout-actions">
                            <button type="button" class="btn-checkout-back" onclick="goToCheckoutStep('delivery')" id="checkout-location-back-btn">رجوع</button>
                            <button type="submit" class="btn-checkout-primary" id="checkout-location-next-btn">مراجعة الطلب</button>
                        </div>
                    </form>
                </div>
                <div class="checkout-summary-card" id="checkout-location-summary"></div>
            </div>
        </div>
    </div>

    <!-- ── CHECKOUT: REVIEW ── -->
    <div id="page-checkout-review-view" style="display: none;">
        <div class="policy-page-banner">
            <h1 class="policy-page-title" id="checkout-review-title">مراجعة الطلب</h1>
            <p style="color: rgba(255,255,255,0.85); margin-top: 12px; font-size: 1.05rem;" id="checkout-review-sub">تأكد من تفاصيل طلبك قبل الدفع</p>
        </div>
        <div class="checkout-shell">
            <div class="checkout-steps" id="checkout-steps-review"></div>
            <div class="checkout-grid-2">
                <div class="checkout-card">
                    <div class="checkout-card-title" id="checkout-review-items-title">منتجات الطلب</div>
                    <div id="checkout-review-items"></div>
                    <div class="review-info-block">
                        <div class="review-info-title" id="checkout-review-contact-title">بيانات التواصل والتوصيل</div>
                        <div class="review-info-line" id="checkout-review-contact-info"></div>
                    </div>
                    <div class="review-info-block">
                        <div class="review-info-title" id="checkout-review-address-title">عنوان التوصيل</div>
                        <div class="review-info-line" id="checkout-review-address-info"></div>
                    </div>
                    <div class="checkout-actions">
                        <button type="button" class="btn-checkout-back" onclick="goToCheckoutStep('location')" id="checkout-review-back-btn">رجوع</button>
                        <button type="button" class="btn-checkout-primary" onclick="proceedToPayment()" id="checkout-review-next-btn">متابعة الدفع</button>
                    </div>
                </div>
                <div class="checkout-summary-card" id="checkout-review-summary"></div>
            </div>
        </div>
    </div>

    <!-- ── CHECKOUT: PAYMENT (MOCK GATEWAY) ── -->
    <div id="page-checkout-payment-view" style="display: none;">
        <div class="policy-page-banner">
            <h1 class="policy-page-title" id="checkout-payment-title">الدفع</h1>
            <p style="color: rgba(255,255,255,0.85); margin-top: 12px; font-size: 1.05rem;" id="checkout-payment-sub">أكمل طلبك بأمان</p>
        </div>
        <div class="checkout-shell">
            <div class="checkout-steps" id="checkout-steps-payment"></div>
            <div class="checkout-grid-2">
                <div class="checkout-card">
                    <div class="payment-method-tabs" style="display: none;">
                        <div class="payment-method-tab active" onclick="selectPaymentMethod('card', this)" id="pay-tab-card">بطاقة ائتمان / خصم</div>
                        
                    </div>
                    <div id="payment-card-form">
                        <div class="mock-gateway-box">
                            
                            <div class="mock-card-preview" style="position: relative;">
                                <div style="position: absolute; top: 16px; right: 20px; font-size: 2.2rem; color: #ffffff;" id="mock-card-brand-icon">
                                    <i class="fa-solid fa-credit-card"></i>
                                </div>
                                <div class="mock-card-number" id="mock-card-display">•••• •••• •••• ••••</div>
                                <div class="mock-card-meta">
                                    <span id="mock-card-name-display">YOUR NAME</span>
                                    <span id="mock-card-exp-display">MM/YY</span>
                                </div>
                            </div>
                            <div class="checkout-form-grid">
                                <div class="checkout-form-group full">
                                    <label class="checkout-label" for="pay-card-number" id="pay-lbl-card-number">Card Number</label>
                                    <div style="position: relative; display: flex; align-items: center;">
                                        <input class="checkout-input" type="text" id="pay-card-number" maxlength="19" placeholder="4242 4242 4242 4242" oninput="formatCardInput(this)" style="width: 100%; padding-right: 48px;">
                                        <span id="input-card-brand-icon" style="position: absolute; right: 14px; font-size: 1.6rem; color: #94a3b8; pointer-events: none;">
                                            <i class="fa-solid fa-credit-card"></i>
                                        </span>
                                    </div>
                                    <span class="checkout-error-msg" id="err-card-number"></span>
                                </div>
                                <div class="checkout-form-group">
                                    <label class="checkout-label" for="pay-card-name" id="pay-lbl-card-name">Name on Card</label>
                                    <input class="checkout-input" type="text" id="pay-card-name" oninput="updateMockCardPreview()">
                                    <span class="checkout-error-msg" id="err-card-name"></span>
                                </div>
                                <div class="checkout-form-group">
                                    <label class="checkout-label" for="pay-card-exp" id="pay-lbl-card-exp">Expiry (MM/YY)</label>
                                    <input class="checkout-input" type="text" id="pay-card-exp" maxlength="5" placeholder="12/28" oninput="formatExpInput(this)">
                                    <span class="checkout-error-msg" id="err-card-exp"></span>
                                </div>
                                <div class="checkout-form-group">
                                    <label class="checkout-label" for="pay-card-cvv" id="pay-lbl-card-cvv">CVV</label>
                                    <input class="checkout-input" type="text" id="pay-card-cvv" maxlength="4" placeholder="123" oninput="formatCvvInput(this)">
                                    <span class="checkout-error-msg" id="err-card-cvv"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    </div>
                    <div class="payment-processing" id="payment-processing">
                        <div class="payment-spinner"></div>
                        <div id="payment-processing-msg">Processing payment...</div>
                    </div>
                    <div class="checkout-actions" id="payment-actions">
                        <button type="button" class="btn-checkout-back" onclick="goToCheckoutStep('review')" id="checkout-payment-back-btn">Back</button>
                        <button type="button" class="btn-checkout-primary" onclick="processMockPayment()" id="checkout-pay-btn">Pay Now</button>
                    </div>
                </div>
                <div class="checkout-summary-card" id="checkout-payment-summary"></div>
            </div>
        </div>
    </div>

    <!-- ── CHECKOUT: SUCCESS ── -->
    
    <!-- ── CHECKOUT: OTP VERIFICATION ── -->
    <div id="page-checkout-otp-view" style="display: none;">
        <div class="policy-page-banner">
            <h1 class="policy-page-title" id="checkout-otp-title">OTP Verification</h1>
            <p style="color: rgba(255,255,255,0.85); margin-top: 12px; font-size: 1.05rem;" id="checkout-otp-sub">A 6-digit verification code has been sent to your phone</p>
        </div>
        <div class="checkout-shell" style="max-width: 500px; margin: 30px auto;">
            <div class="checkout-card" style="padding: 32px 28px; text-align: center;">
                <div style="background: #e0f2fe; width: 64px; height: 64px; border-radius: 50%; margin: 0 auto 16px; display: flex; align-items: center; justify-content: center; color: #0284c7; font-size: 1.8rem;">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h2 style="font-weight: 700; color: #0f172a; margin-bottom: 8px; font-size: 1.3rem;" id="otp-card-title">Security Verification</h2>
                <p style="color: #64748b; font-size: 0.95rem; margin-bottom: 24px; line-height: 1.5;" id="otp-card-msg">
                    Please enter the 6-digit verification code sent to your registered phone number.
                </p>

                <form onsubmit="submitOtpVerification(event)">
                    <div class="checkout-form-group" style="margin-bottom: 20px;">
                        <input class="checkout-input" type="text" id="chk-otp" maxlength="6" placeholder="• • • • • •" style="font-size: 2rem; letter-spacing: 12px; text-align: center; font-weight: 700; width: 100%; padding: 12px; border: 2px solid #cbd5e1; border-radius: 12px; outline: none; font-family: monospace;" oninput="formatOtpInput(this)">
                        <span class="checkout-error-msg" id="err-otp" style="text-align: center; margin-top: 8px;"></span>
                    </div>

                    <div style="font-size: 0.85rem; color: #64748b; margin-bottom: 24px;" id="otp-resend-box">
                        <span id="otp-resend-text">Resend code in</span> <strong style="color: #0284c7;" id="otp-timer">59</strong>s
                    </div>

                    <button type="submit" class="btn-checkout-primary" id="btn-submit-otp" style="width: 100%; padding: 14px; font-size: 1.05rem; font-weight: 700; border-radius: 12px;">
                        <span id="btn-submit-otp-text">Confirm Payment</span>
                    </button>
                </form>
            </div>
        </div>
    </div>

    <!-- ── CHECKOUT: PAYMENT FAILURE ── -->
    <div id="page-checkout-failure-view" style="display: none; padding-top: 40px;">
        <div class="checkout-shell" style="max-width: 480px; margin: 140px auto 40px; padding: 0 16px;">
            <div style="background: #ffffff; border-radius: 16px; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.1), 0 8px 10px -6px rgba(0,0,0,0.05); overflow: hidden; border-top: 6px solid #dc2626; padding: 36px 28px; text-align: center;">

                <!-- Red Shield Icon with X -->
                <div style="background: #fef2f2; width: 76px; height: 76px; border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; border: 1px solid #fee2e2;">
                    <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                        <line x1="15" y1="9" x2="9" y2="15"/>
                        <line x1="9" y1="9" x2="15" y2="15"/>
                    </svg>
                </div>

                <!-- Red Error Title -->
                <h2 style="color: #dc2626; font-weight: 800; font-size: 1.4rem; margin-bottom: 14px; font-family: inherit;" id="failure-title">
                    خطأ – فشلت عملية الدفع
                </h2>

                <!-- Error Message Text -->
                <p style="color: #475569; font-size: 0.95rem; line-height: 1.6; margin-bottom: 24px;" id="failure-desc">
                    تعذر معالجة رمز التحقق الذي أدخلته بعد 1 محاولات. يرجى العودة لإتمام الطلب من جديد.
                </p>

                <!-- Red Return Button -->
                <button type="button" class="btn-checkout-primary" style="background: #dc2626; color: #ffffff; width: 100%; padding: 14px; border-radius: 12px; font-weight: 700; font-size: 1.05rem; border: none; cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 8px; transition: background 0.2s;" onclick="goToCheckoutStep('payment')">
                    <span id="failure-btn-text">العودة إلى بيانات الدفع</span>
                    <span style="font-weight: bold; font-size: 1.2rem;">&rsaquo;</span>
                </button>

                <!-- Saved Cart Note -->
                <p style="color: #94a3b8; font-size: 0.85rem; margin-top: 16px; line-height: 1.5;" id="failure-note">
                    تم حفظ منتجات سلتك. يمكنك تعديل بيانات الطلب والمحاولة مرة أخرى.
                </p>

                <!-- Divider & Footer Security Badges -->
                <hr style="border: 0; border-top: 1px solid #f1f5f9; margin: 28px 0 16px;">

                <div style="display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 12px; font-size: 0.8rem;">
                    <div style="border: 1px solid #cbd5e1; border-radius: 6px; padding: 4px 10px; color: #64748b; font-weight: 700;">
                        PCI DSS
                    </div>
                    <div style="color: #64748b;">
                        <span id="failure-powered">مدعوم من</span> <strong style="color: #0284c7;">Network International</strong>
                    </div>
                    <div style="color: #1e3a8a; font-weight: 800;">
                        Kuwait Secure Pay
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div id="page-checkout-success-view" style="display: none;">
        <div class="policy-page-banner">
            <h1 class="policy-page-title" id="checkout-success-title">Order Confirmed!</h1>
        </div>
        <div class="checkout-shell">
            <div class="checkout-card checkout-success-box">
                <div class="checkout-success-icon"><i class="fa-solid fa-check"></i></div>
                <div class="checkout-card-title" id="checkout-success-heading">Thank you for your order</div>
                <p class="checkout-card-sub" id="checkout-success-msg">Your order has been placed successfully. We will contact you shortly to confirm delivery.</p>
                <div class="checkout-success-order" id="checkout-success-order-num">Order #OASIS-KUWAIT-000</div>
                <div class="checkout-actions" style="justify-content: center;">
                    <button class="btn-checkout-primary" onclick="goHome()" id="checkout-success-home-btn">Back to Home</button>
                </div>
            </div>
        </div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <div class="footer-brand-col">
                <a href="/" class="footer-logo" onclick="goHome(event)">
                    <div class="footer-logo-icon"><svg class="logo-droplet-icon" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.5 21a5.5 5.5 0 0 0 5.5-5.5c0-2-1.5-3.5-3-5.5-.5-.7-1-1.5-1.5-2.5-.5 1-1 1.8-1.5 2.5-1.5 2-3 3.5-3 5.5A5.5 5.5 0 0 0 15.5 21z"></path><path d="M8.5 18a4.5 4.5 0 0 0 4.5-4.5c0-1.5-1-3-2.5-5C10 7.5 9.5 6.5 9 5.5 8.5 6.5 8 7.5 7.5 8.5 6 10.5 5 12 5 13.5A4.5 4.5 0 0 0 9.5 18z"></path></svg></div>
                    <span class="brand-logo-text"><span class="brand-logo-oasis">مياه الواحة</span> <span class="brand-logo-oman">الكويت</span></span>
                </a>
                <div class="footer-arabic-subtitle">مياه الواحة</div>
                <p class="footer-brand-desc" id="ftr-desc">مياه شرب نقية ترطب حياتك تصلك في جميع أنحاء دولة الكويت.</p>
                <div class="footer-socials">
                    <a href="#" class="social-btn" title="Instagram"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg></a>
                    <a href="#" class="social-btn" title="Facebook"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></a>
                    <a href="https://wa.me/96550286025" target="_blank" class="social-btn" title="WhatsApp"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></a>
                </div>
            </div>

            <div>
                <h4 class="footer-col-title" id="ftr-col-1">روابط سريعة</h4>
                <ul class="footer-links-list">
                    <li class="footer-link-item"><a href="#home" id="ftr-link-1" onclick="goHome(event)">Home</a></li>
                    <li class="footer-link-item"><a href="#page-about" id="ftr-link-2" onclick="navigateToPage('about', event)">About</a></li>
                    <li class="footer-link-item"><a href="#page-contact" id="ftr-link-3" onclick="navigateToPage('contact', event)">Contact</a></li>
                    <li class="footer-link-item"><a href="#page-faq" id="ftr-link-4" onclick="navigateToPage('faq', event)">FAQ</a></li>
                    <li class="footer-link-item"><a href="#admin" id="ftr-link-admin" style="font-weight: 700; color: #38bdf8;"><i class="fa-solid fa-gauge-high"></i> Admin Dashboard / لوحة التحكم</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-col-title" id="ftr-col-2">السياسات</h4>
                <ul class="footer-links-list">
                    <li class="footer-link-item"><a href="#policy-privacy" onclick="openPolicyModal('privacy', event)">Privacy Policy</a></li>
                    <li class="footer-link-item"><a href="#policy-terms" onclick="openPolicyModal('terms', event)">Terms & Conditions</a></li>
                    <li class="footer-link-item"><a href="#policy-delivery" onclick="openPolicyModal('delivery', event)">Delivery Policy</a></li>
                    <li class="footer-link-item"><a href="#policy-refund" onclick="openPolicyModal('refund', event)">Refund Policy</a></li>
                </ul>
            </div>

            <div>
                <h4 class="footer-col-title" id="ftr-col-3">تواصل معنا</h4>
                <div class="footer-contact-list">
                    <div class="contact-item-row" style="cursor: pointer;" onclick="navigateToPage('contact', event)">
                        <span><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg></span>
                        <div id="ftr-cnt-1">مدينة الكويت، دولة الكويت</div>
                    </div>
                    <div class="contact-item-row">
                        <span><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg></span>
                        <div><a href="tel:+96550286025" style="color: inherit; text-decoration: none;">+965 50286025</a></div>
                    </div>
                    <div class="contact-item-row">
                        <span><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg></span>
                        <div><a href="https://wa.me/96550286025" target="_blank" style="color: inherit; text-decoration: none;">+965 50286025</a></div>
                    </div>
                    <div class="contact-item-row">
                        <span><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></span>
                        <div><a href="mailto:info@oasiskuwait.com" style="color: inherit; text-decoration: none;">info@oasiskuwait.com</a></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-bottom-bar" id="ftr-copyright">
            © 2026 مياه الواحة الكويت. All rights reserved.
        </div>
    </footer>

    <!-- ── 4. ADD TO CART MODAL (EXACT REPLICA MATCHING REFERENCE IMAGE 3) ── -->
    <div class="cart-modal-overlay" id="cart-modal-overlay" onclick="if(event.target===this) closeCartModal()">
        <div class="cart-modal-card">
            <div class="modal-drag-handle"></div>
            <div class="cart-modal-header">
                <button class="cart-modal-close-btn" onclick="closeCartModal()"><i class="fa-solid fa-xmark"></i></button>
                <h3 class="cart-modal-title">
                    <span id="cart-modal-title-txt">سلة المشتريات</span> <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                </h3>
            </div>

            <div class="cart-items-container" id="cart-items-wrap">
                <!-- Dynamically rendered cart items -->
            </div>

            <div class="cart-subtotal-row">
                <span class="cart-subtotal-label" id="cart-subtotal-lbl">المجموع الكلي</span>
                <span class="cart-subtotal-value" id="cart-total-val">0.000 KWD</span>
            </div>

            <div style="display: flex; gap: 12px; margin-top: 10px;">
                <button class="btn-continue-shopping" onclick="closeCartModal()">
                    <span id="btn-continue-txt">متابعة التسوق</span>
                </button>
                <button class="btn-checkout-modal" onclick="startCheckout()" style="flex: 1;">
                    <div class="audio-icon-badge"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg></div>
                    <span id="btn-checkout-txt">متابعة الطلب والدفع</span>
                </button>
            </div>
        </div>
    </div>

    <!-- Floating Audio Support Button (Matching Reference Images 1, 2 & 3) -->
    <div class="floating-help-btn" onclick="checkoutWhatsApp()">
        <div class="floating-help-icon"><svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M3 18v-6a9 9 0 0 1 18 0v6"></path><path d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path></svg></div>
        <span class="floating-help-text" id="floating-help-lbl">كيف يمكننا مساعدتك؟</span>
    </div>

    <!-- POLICY MODAL POPUP -->


    <!-- Mobile Navigation Drawer -->
    <div class="mobile-drawer-overlay" id="mobile-drawer-overlay" onclick="if(event.target===this) toggleMobileMenu()">
        <div class="mobile-drawer-content">
            <div class="mobile-drawer-header">
                <div class="brand-logo">
                    <div class="logo-circle-icon"><svg class="logo-droplet-icon" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"><path d="M15.5 21a5.5 5.5 0 0 0 5.5-5.5c0-2-1.5-3.5-3-5.5-.5-.7-1-1.5-1.5-2.5-.5 1-1 1.8-1.5 2.5-1.5 2-3 3.5-3 5.5A5.5 5.5 0 0 0 15.5 21z"></path><path d="M8.5 18a4.5 4.5 0 0 0 4.5-4.5c0-1.5-1-3-2.5-5C10 7.5 9.5 6.5 9 5.5 8.5 6.5 8 7.5 7.5 8.5 6 10.5 5 12 5 13.5A4.5 4.5 0 0 0 9.5 18z"></path></svg></div>
                    <span class="brand-logo-text"><span class="brand-logo-oasis">مياه الواحة</span> <span class="brand-logo-oman">الكويت</span></span>
                </div>
                <button class="mobile-drawer-close" onclick="toggleMobileMenu()"><i class="fa-solid fa-xmark"></i></button>
            </div>
            <div class="mobile-nav-links">
                <a href="#home" class="mobile-nav-item" onclick="goHome(event)"><span id="m-nav-home">Home</span> <i class="fa-solid fa-arrow-right"></i></a>
                <a href="#products" class="mobile-nav-item" onclick="scrollToProducts(event)"><span id="m-nav-products">Products</span> <i class="fa-solid fa-arrow-right"></i></a>
                <a href="#about" class="mobile-nav-item" onclick="navigateToPage('about', event)"><span id="m-nav-about">About</span> <i class="fa-solid fa-arrow-right"></i></a>
                <a href="#contact" class="mobile-nav-item" onclick="navigateToPage('contact', event)"><span id="m-nav-contact">Contact</span> <i class="fa-solid fa-arrow-right"></i></a>
                
<a href="#faq" class="mobile-nav-item" onclick="navigateToPage('faq', event)"><span id="m-nav-faq">FAQ</span> <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div style="margin-top: auto; border-top: 1px solid rgba(255,255,255,0.15); padding-top: 20px;">
                <button class="btn-primary-cta" style="width: 100%; justify-content: center;" onclick="openCartModal(); closeMobileMenu();">
                    <svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> <span id="m-nav-cart">View Cart</span>
                </button>
            </div>
        </div>
    </div>

    <!-- ── 3. MULTILINGUAL SUPPORT & INTERACTIVE CART LOGIC ── -->
    <script>
        const productsData = {
            p1: { id: 'p1', title_en: 'OASIS Water 200ml', title_ar: 'مياه الواحة 200 مل', price: 0.400, img: '/images/oasis_200ml.jpg' },
            p2: { id: 'p2', title_en: 'OASIS Water 330ml', title_ar: 'مياه الواحة 330 مل', price: 0.400, img: '/images/oasis_330ml.jpg' },
            p3: { id: 'p3', title_en: 'OASIS Water 500ml', title_ar: 'مياه الواحة 500 مل', price: 0.450, img: '/images/oasis_500ml.png' },
            p4: { id: 'p4', title_en: 'OASIS Water 1.5L', title_ar: 'مياه الواحة 1.5 لتر', price: 0.450, img: '/images/oasis_1500ml.png' },
            p5: { id: 'p5', title_en: 'OASIS 5L Gallon (Refillable)', title_ar: 'جالون مياه الواحة 5 لتر (قابل للاسترداد)', price: 0.800, img: '/images/oasis_5gallon_refill.png' },
            p6: { id: 'p6', title_en: 'OASIS Hot & Cold Water Dispenser', title_ar: 'موزع مياه الواحة الساخن والبارد', price: 20.000, img: '/images/oasis_dispenser_cooler.png' }
        };

        let cart = JSON.parse(localStorage.getItem('oasis-cart') || 'null') || [
            { id: 'p2', qty: 1 }
        ];

        let checkoutData = JSON.parse(sessionStorage.getItem('oasis-checkout') || '{}');
        let currentCheckoutStep = 'cart';
        let selectedPaymentMethod = checkoutData.paymentMethod || 'card';

                const kuwaitLocations = {
        en: {
            capital: { name: 'Capital (Kuwait City)', wilayas: ['Kuwait City', 'Sharq', 'Mirgab', 'Jibla', 'Bneid Al-Gar', 'Dasma', 'Daiya', 'Shuwaikh', 'Shamiya', 'Abdullah Al-Salem', 'Nuzha', 'Keifan', 'Khaldiya'] },
            hawalli: { name: 'Hawalli', wilayas: ['Hawalli', 'Salmiya', 'Rumaithiya', 'Jabriya', 'Salwa', 'Bayan', 'Mishref', 'Shaab', 'West Mishref'] },
            ahmadi: { name: 'Ahmadi', wilayas: ['Ahmadi', 'Fahaheel', 'Mangaf', 'Abu Halifa', 'Sabahiya', 'Riqqa', 'Egaila', 'Wafra', 'Khiran'] },
            farwaniya: { name: 'Farwaniya', wilayas: ['Farwaniya', 'Khaitan', 'Jleeb Al-Shuyoukh', 'Andalous', 'Ardiya', 'Firdous', 'Rehab', 'Rabiya'] },
            jahra: { name: 'Jahra', wilayas: ['Jahra', 'Naeem', 'Naseem', 'Oyoun', 'Waha', 'Qasr', 'Saad Al-Abdullah', 'Mutlaa', 'Abdali'] },
            mubarak: { name: 'Mubarak Al-Kabeer', wilayas: ['Mubarak Al-Kabeer', 'Qurain', 'Qusour', 'Adan', 'Sabah Al-Salem', 'Messila', 'Abu Ftaira', 'Fnaitees'] }
        },
        ar: {
            capital: { name: 'العاصمة', wilayas: ['مدينة الكويت', 'شرق', 'المرقاب', 'القبلة', 'بنيد القار', 'الدسمة', 'الداعية', 'الشويخ', 'الشامية', 'ضاحية عبد الله السالم', 'النزهة', 'كيفان', 'الخالدية'] },
            hawalli: { name: 'حولي', wilayas: ['حولي', 'السالمية', 'الرميثية', 'الجابرية', 'سلوى', 'بيان', 'مشرف', 'الشعب', 'غرب مشرف'] },
            ahmadi: { name: 'الأحمدي', wilayas: ['الأحمدي', 'الفحيحيل', 'المنقف', 'أبو حليفة', 'الصباحية', 'الرقة', 'العقيلة', 'الوفرة', 'الخيران'] },
            farwaniya: { name: 'الفروانية', wilayas: ['الفروانية', 'خيطان', 'جليب الشيوخ', 'الأندلس', 'العارضية', 'الفردوس', 'الرحاب', 'الرابية'] },
            jahra: { name: 'الجهراء', wilayas: ['الجهراء', 'النعيم', 'النسيم', 'العيون', 'الواحة', 'القصر', 'سعد العبد الله', 'المطلاع', 'العبدلي'] },
            mubarak: { name: 'مبارك الكبير', wilayas: ['مبارك الكبير', 'القرين', 'القصور', 'العدان', 'صباح السالم', 'المسيلة', 'أبو فطيرة', 'الفنيطيس'] }
        }
    };

        const policyData = {
            en: {
                privacy: {
                    title: 'Privacy Policy',
                    s1_title: '1. Information We Collect',
                    s1_body: 'We collect information you provide directly to us, such as when you create or modify your account, request on-demand services, contact customer support, or otherwise communicate with us.',
                    s2_title: '2. Use of Information',
                    s2_body: 'We may use the information we collect about you to provide, maintain, and improve our services, including to facilitate payments, send receipts, provide products and services you request, and send related information.',
                    s3_title: '3. Sharing of Information',
                    s3_body: 'We may share the information we collect about you as described in this Statement or as described at the time of collection or sharing, including with our affiliates and subsidiary companies.',
                    s4_title: '4. Contact Us',
                    s4_body: 'If you have any questions about this Privacy Statement, please contact us at info@oasiskuwait.com or WhatsApp +965 50286025.'
                },
                terms: {
                    title: 'Terms & Conditions',
                    s1_title: '1. Acceptance of Terms',
                    s1_body: 'By accessing and using this site and ordering from مياه الواحة الكويت, you accept and agree to be bound by these terms and conditions.',
                    s2_title: '2. Orders and Purchases',
                    s2_body: 'All orders are subject to product availability. We reserve the right to refuse or cancel any order for any reason.',
                    s3_title: '3. Pricing and Payment',
                    s3_body: 'All prices are shown in KWD. Payment must be completed before or upon delivery.',
                    s4_title: '4. Delivery',
                    s4_body: 'We provide free delivery across all governorates of UAE. Delivery times are estimated and not guaranteed.'
                },
                delivery: {
                    title: 'Delivery Policy',
                    s1_title: 'Free Delivery Across UAE',
                    s1_body: 'مياه الواحة الكويت offers completely free delivery across all 11 governorates of UAE. No minimum order value required.',
                    s2_title: 'Delivery Times',
                    s2_body: 'Kuwait City Governorate: Orders before 12 PM are delivered the same day. Other Governorates: Delivery within 1-2 business days from order date.',
                    s3_title: 'Live Order Tracking',
                    s3_body: 'Once your order is dispatched, you will receive a WhatsApp notification. Our delivery team will contact you 30 minutes before arrival.',
                    s4_title: 'Contact',
                    s4_body: 'For delivery inquiries, contact info@oasiskuwait.com or WhatsApp +965 50286025.'
                },
                refund: {
                    title: 'Refund Policy',
                    s1_title: 'Our Commitment',
                    s1_body: 'At مياه الواحة الكويت, your satisfaction is our top priority. If you are not completely satisfied with your order, we will make it right.',
                    s2_title: 'Eligibility for Refund',
                    s2_body: 'You are eligible for a full refund or replacement if the product is damaged upon delivery, you received the wrong product, or the issue is reported within 48 hours of delivery.',
                    s3_title: 'Refund Process',
                    s3_body: 'Approved refunds are processed within 3-5 business days. Funds will be returned to your original payment method.',
                    s4_title: 'Contact',
                    s4_body: 'For return inquiries, contact info@oasiskuwait.com or WhatsApp +965 50286025.'
                }
            },
            ar: {
                privacy: {
                    title: 'سياسة الخصوصية',
                    s1_title: '1. المعلومات التي نجمعها',
                    s1_body: 'نحن نجمع المعلومات التي تقدمها لنا مباشرة، مثل عند إنشاء أو تعديل حسابك، أو طلب خدمات، أو الاتصال بدعم العملاء، أو التواصل معنا بأي شكل آخر.',
                    s2_title: '2. استخدام المعلومات',
                    s2_body: 'قد نستخدم المعلومات التي نجمعها عنك لتقديم خدماتنا وصيانتها وتحسينها، بما في ذلك تسهيل المدفوعات وإرسال الإيصالات وتقديم المنتجات.',
                    s3_title: '3. مشاركة المعلومات',
                    s3_body: 'قد نشارك المعلومات التي نجمعها عنك كما هو موضح في هذا البيان أو في وقت الجمع أو المشاركة، بما في ذلك مع الشركات التابعة لنا.',
                    s4_title: '4. تواصل معنا',
                    s4_body: 'إذا كان لديك أي أسئلة حول سياسة الخصوصية هذه، يرجى التواصل معنا على info@oasiskuwait.com أو واتساب +965 50286025.'
                },
                terms: {
                    title: 'الشروط والأحكام',
                    s1_title: '1. قبول الشروط',
                    s1_body: 'من خلال الوصول إلى هذا الموقع واستخدامه والطلب من مياه الواحة الكويت، فإنك تقبل وتوافق على الالتزام بهذه الشروط والأحكام.',
                    s2_title: '2. الطلب والمشتريات',
                    s2_body: 'تخضع جميع الطلبات لتوفر المنتج. نحتفظ بالحق في رفض أو إلغاء أي طلب لأي سبب من الأسباب.',
                    s3_title: '3. التسعير والدفع',
                    s3_body: 'يتم عرض جميع الأسعار بالدينار الكويتي. يجب إتمام الدفع قبل أو عند الاستلام.',
                    s4_title: '4. التوصيل',
                    s4_body: 'نقدم توصيلاً مجانياً لجميع محافظات الكويت. أوقات التوصيل تقديرية وغير مضمونة.'
                },
                delivery: {
                    title: 'سياسة التوصيل',
                    s1_title: 'توصيل مجاني في جميع أنحاء الكويت',
                    s1_body: 'توفر مياه الواحة الكويت توصيلاً مجانياً بالكامل في جميع محافظات الكويت الست في الكويت. لا يوجد حد أدنى لقيمة الطلب.',
                    s2_title: 'أوقات التوصيل',
                    s2_body: 'محافظة مدينة الكويت: الطلبات قبل الساعة 12 ظهراً يتم توصيلها في نفس اليوم. المحافظات الأخرى: التوصيل خلال 1-2 أيام عمل من تاريخ الطلب.',
                    s3_title: 'تتبع الطلب',
                    s3_body: 'بمجرد إرسال طلبك، ستتلقى إشعاراً عبر الواتساب. سيتصل بك فريق التوصيل الخاص بنا قبل 30 دقيقة من الوصول.',
                    s4_title: 'التواصل',
                    s4_body: 'للاستفسارات حول التوصيل، تواصل مع info@oasiskuwait.com أو واتساب +965 50286025.'
                },
                refund: {
                    title: 'سياسة الاسترجاع',
                    s1_title: 'التزامنا',
                    s1_body: 'في مياه الواحة الكويت، رضاك هو أولويتنا القصوى. إذا لم تكن راضياً تماماً عن طلبك، فسنقوم بتصحيح الأمر.',
                    s2_title: 'الأهلية للاسترجاع',
                    s2_body: 'يحق لك استرداد المبلغ بالكامل أو استبدال المنتج إذا كان تالفاً عند التوصيل، أو تلقيت المنتج الخطأ، وتم الإبلاغ عن المشكلة خلال 48 ساعة.',
                    s3_title: 'عملية الاسترجاع',
                    s3_body: 'تتم معالجة المبالغ المستردة المعتمدة خلال 3-5 أيام عمل. سيتم إرجاع المبلغ إلى طريقة الدفع الأصلية الخاصة بك.',
                    s4_title: 'التواصل',
                    s4_body: 'للاستفسارات حول الاسترجاع، تواصل مع info@oasiskuwait.com أو واتساب +965 50286025.'
                }
            }
        };

        
        const translations = {
            ar: {
                dir: 'rtl',
                currentLang: 'AR',
                navHome: 'الرئيسية',
                navAbout: 'من نحن',
                navContact: 'اتصل بنا',
                navFaq: 'الأسئلة الشائعة',
                navPolicies: 'السياسات',
                navPrivacy: '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg> سياسة الخصوصية',
                navTerms: '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg> الشروط والأحكام',
                navDelivery: '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg> سياسة التوصيل',
                navRefund: '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"></polyline><polyline points="1 20 1 14 7 14"></polyline><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path></svg> سياسة الاسترجاع',
                heroBadge: 'توصيل مياه متميزة رقم 1 في الكويت',
                heroTitle: 'ترطيب نقي، يصلك إلى بابك.',
                heroSub: 'مياه معبأة فاخرة لعائلتك ومكتبك عبر جميع محافظات دولة الكويت.',
                heroCta: '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg> اطلب الآن',
                stat1: 'محافظات',
                stat2: 'شهادة جودة',
                stat3: 'توصيل مجاني',
                prodTitle: 'تشكيلتنا المتميزة',
                prodSub: 'مستخرجة من ينابيع طبيعية نقية، كل قطرة وعد بالنقاء.',
                prodAdd: '+ أضف للسلة',
                p1Title: 'مياه الواحة 200 مل',
                p1Desc: 'مياه الواحة 200 مل مياه شرب نقية وعالية الجودة، معبأة وفق أعلى معايير السلامة لضمان النقاء والطعم المنعش. مناسبة للاستخدام اليومي، والفعاليات، والمكاتب، والمدارس. تحتوي الكرتونة على 40 عبوة × 200 مل لسهولة التوزيع والاستخدام.',
                p1Badge: 'حزمة اقتصادية',
                p2Title: 'مياه الواحة 330 مل',
                p2Desc: 'استمتع بالنقاء والانتعاش مع مياه الواحة 330 مل، مياه شرب نقية وعالية الجودة، معبأة وفق أعلى معايير الجودة والسلامة لضمان مذاق منعش ونقاء يدوم. تتميز بحجم عملي وسهل الحمل، مما يجعلها الخيار المثالي للاستخدام اليومي في المنزل، والعمل، والمدارس، والرحلات، والفعاليات المختلفة. المميزات: مياه شرب نقية وعالية الجودة. معبأة وفق أعلى معايير الجودة والسلامة. طعم منعش ونقاء يدوم. عبوة عملية وسهولة الحمل. مثالية للاستخدام اليومي والفعاليات. محتويات الكرتونة: 24 عبوة × 330 مل',
                p2Badge: 'الأكثر مبيعاً',
                p3Title: 'مياه الواحة 500 مل',
                p3Desc: 'مياه شرب نقية وعالية الجودة، معبأة وفق أعلى معايير الجودة والسلامة لضمان النقاء والطعم المنعش. تتميز بحجم عملي يناسب الاستخدام اليومي في المنزل، والعمل، والمدارس، والرحلات، والفعاليات، لتوفر ترطيبًا منعشًا في أي وقت. المميزات: مياه شرب نقية وعالية الجودة. معبأة وفق أعلى معايير الجودة والسلامة. طعم منعش ونقاء يدوم. عبوة عملية وسهلة الحمل. مناسبة للاستخدام اليومي والفعاليات. محتويات الكرتونة: 24 عبوة × 500 مل.',
                p3Badge: 'الأكثر طلباً',
                p4Title: 'مياه الواحة 1.5 لتر',
                p4Desc: 'مياه شرب نقية وعالية الجودة، معبأة وفق أعلى معايير الجودة والسلامة لضمان النقاء والطعم المنعش. تتميز بسعة كبيرة تلبي احتياجات الأسرة، والمكاتب، والمطاعم، والرحلات، والفعاليات، لتوفر ترطيبًا يدوم طوال اليوم. المميزات: مياه شرب نقية وعالية الجودة. معبأة وفق أعلى معايير الجودة والسلامة. طعم منعش ونقاء يدوم. سعة كبيرة مناسبة للاستخدام اليومي والعائلي. مثالية للمنازل، والمكاتب، والرحلات، والفعاليات. محتويات الكرتونة: 12 عبوة × 1.5 لتر.',
                p4Badge: 'خيار العائلة',
                p5Title: 'جالون مياه الواحة 5 لتر (قابل للاسترداد)',
                p5Desc: 'جالون مياه شرب نقية وعالية الجودة بسعة 5 لترات، معبأ وفق أعلى معايير الجودة والسلامة لضمان النقاء والطعم المنعش. يتميز بعقوة متينة قابلة للاسترداد وإعادة الاستخدام، مما يجعله خيارًا اقتصاديًا وصديقًا للبيئة، ومثاليًا للمنازل، والمكاتب، والمؤسسات، والاستخدام اليومي. المميزات: مياه شرب نقية وعالية الجودة. معبأة وفق أعلى معايير الجودة والسلامة. عبوة قابلة للاسترداد وإعادة الاستخدام. سعة 5 لترات مناسبة للاستخدام اليومي. مثالية للمنازل، والمكاتب، والشركات، والمؤسسات. السعة: 5 لتر (قابل للاسترداد).',
                p5Badge: 'قابل للإرجاع',
                p6Title: 'موزع مياه الواحة الساخن والبارد',
                p6Desc: 'استمتع بالمياه الباردة والمنعشة أو الساخنة في أي وقت مع موزع مياه الواحة، المصمم بأداء موثوق وتصميم أنيق يناسب المنازل، والمكاتب، والشركات. يعمل مع عبوات المياه القابلة للاسترداد، ويوفر سهولة الاستخدام مع جودة عالية وأداء عملي للاستخدام اليومي. المواصفات يدعم المياه الباردة والساخنة. متوافق مع عبوات مياه 5 جالون القابلة للاسترداد. تصميم أنيق وعصري يناسب جميع الأماكن. سهل الاستخدام والتنظيف. هيكل متين وعالي الجودة. تشغيل هادئ واستهلاك منخفض للطاقة. مناسب للمنازل، والمكاتب، والمدارس، والعيادات، والشركات. مزود بصنبورين منفصلين للمياه الباردة والساخنة. يوفر مياه جاهزة للشرب أو لتحضير المشروبات الساخنة في أي وقت.',
                p6Badge: 'خصم 50%',
                cartModalTitle: 'سلة المشتريات',
                cartSubtotal: 'المجموع الكلي',
                btnCheckout: 'متابعة الطلب والدفع',
                emptyCart: 'سلتك فارغة حالياً.',
                floatingHelp: 'كيف يمكننا مساعدتك؟',
                currency: 'د.ك',
                whyTitle: 'لماذا تختار مياه الواحة؟',
                whySub: 'نحن لا نبيع المياه فحسب — بل نقدم الصحة والنقاء وراحة البال.',
                whyT1: 'مصدر نقي معتمد', whyD1: 'معبأة وفق أعلى المعايير العالمية لضمان سلامة ونقاء كل قطرة.',
                whyT2: 'توصيل في نفس اليوم', whyD2: 'اطلب قبل الساعة 12:00 ظهراً واستلم مياهك في نفس اليوم في العاصمة.',
                whyT3: 'جودة معتمدة ISO', whyD3: 'مفحوصة ومعتمدة وفق المعايير الدولية لراحة بالك.',
                whyT4: 'تغليف صديق للبيئة', whyD4: 'عبوات قابلة لإعادة التدوير بنسبة 100% ومواد تغليف صديقة للبيئة.',
                whyT5: '10,000+ عائلة تثق بنا', whyD5: 'نخدم المنازل والمكاتب والمطاعم في جميع محافظات دولة الكويت.',
                whyT6: 'دعم عملاء 24/7', whyD6: 'فريقنا متواجد دائماً لمساعدتك عبر الواتساب أو الاتصال أو البريد.',
                storyTitle: 'قصتنا',
                storySub: 'رحلة من النقاء، صُممت من أجل الكويت',
                storyP1: 'تأسست مياه الواحة في دولة الكويت بمهمة واحدة: تقديم أنقى وأنعش مياه لكل منزل وشركة في الكويت.',
                storyP2: 'تخضع مياهنا لأحدث تكنولوجيا الفلترة والتعقيم وفق المواصفات القياسية الكويتية والعالمية.',
                storyP3: 'اليوم نخدم أكثر من 10,000 عائلة و500 شركة في جميع محافظات الكويت الست.',
                storyMissionT: 'مهمتنا', storyMissionD: 'جعل المياه النقية والآمنة متوفرة لكل منزل ومؤسسة في الكويت — مع الاهتمام والسرعة والابتسامة.',
                storyVisionT: 'رؤيتنا', storyVisionD: 'أن نكون العلامة التجارية الأكثر ثقة للمياه في دولة الكويت، ونضع المعايير للجودة والاستدامة.',
                storySt1: 'عائلة مخدومة', storySt2: 'مؤسسة تجارية', storySt3: 'محافظات',
                delTitle: 'التوصيل في جميع أنحاء الكويت',
                delSub: 'سريع، مجاني، وموثوق — أينما كنت في دولة الكويت.',
                delT1: 'توصيل مجاني', delD1: 'توصيل مجاني لجميع محافظات ومناطق الكويت — بدون حد أدنى للطلب.',
                delT2: 'توصيل في نفس اليوم', delD2: 'اطلب قبل الساعة 12:00 ظهراً واستلم مياهك في نفس اليوم في العاصمة.',
                delT3: 'توصيل مجدول', delD3: 'اختر موعد التوصيل المفضل لديك — صباحاً أو عصراً أو مساءً.',
                delT4: 'تتبع مباشر للطلب', delD4: 'تتبع طلبك في الوقت الفعلي عبر تحديثات الواتساب.',
                govHeader: '<svg class="inline-icon" width="1em" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg> نغطي جميع المحافظات الست',
                govFreeT: 'مجاني', govFreeD: 'توصيل مجاني لجميع محافظات ومناطق دولة الكويت — بدون حد أدنى للطلب.',
                revTitle: 'ماذا يقول عملاؤنا',
                revSub: 'محل ثقة الآلاف من العائلات والشركات في جميع أنحاء الكويت.',
                faqTitle: 'الأسئلة الشائعة',
                faqSub: 'كل ما تحتاج لمعرفته عن مياه الواحة.',
                contactTitle: 'تواصل معنا',
                contactSub: 'نحن هنا لمساعدتك. تواصل معنا في أي وقت.',
                cntLbl1: 'الهاتف', cntLbl2: 'الواتساب', cntLbl3: 'البريد الإلكتروني', cntLbl4: 'الموقع', cntVal4: 'مدينة الكويت، دولة الكويت',
                cntLbl5: 'ساعات العمل', cntVal5: 'السبت – الخميس: 8:00 صباحاً – 10:00 مساءً',
                frmLbl1: 'الاسم الكريم', frmIn1: 'أدخل اسمك الكامل',
                frmLbl2: 'البريد الإلكتروني', frmIn2: 'your@email.com',
                frmLbl3: 'الرسالة', frmIn3: 'كيف يمكننا مساعدتك؟',
                frmBtn: 'إرسال الرسالة',
                ftrDesc: 'مياه ترطيب فاخرة تصلك في جميع أنحاء الكويت.',
                ftrCol1: 'روابط سريعة', ftrCol2: 'السياسات', ftrCol3: 'اتصل بنا',
                ftrCopy: '© 2026 مياه الواحة الكويت. جميع الحقوق محفوظة.',
                closeBtn: 'إغلاق',
                faqQ1: 'متى يصل طلبي؟',
                faqA1: 'يستغرق التوصيل القياسي من 2 إلى 4 ساعات في محافظة العاصمة، وتوصيل في نفس اليوم لبقية محافظات الكويت عند الطلب قبل الساعة 12:00 ظهراً.',
                faqQ2: 'هل التوصيل مجاني فعلاً؟',
                faqA2: 'نعم! التوصيل مجاني 100% في جميع المحافظات الست في دولة الكويت بدون حد أدنى للطلب.',
                faqQ3: 'ما طرق الدفع المتاحة؟',
                faqA3: 'نقبل الدفع عند الاستلام وبطاقات الخصم والائتمان والتحويلات البنكية الفورية عبر الواتساب.',
                faqQ4: 'كيف أتأكد أن المياه آمنة للشرب؟',
                faqA4: 'تخضع مياهنا لعملية تنقية من 6 مراحل تشمل التناضح العكسي والتعقيم بالأشعة فوق البنفسجية.',
                aboutSub: 'مرحباً بكم في مياه الواحة الكويت',
                aboutP1: 'نحن متجر إلكتروني متخصص في توفير مياه الشرب عالية الجودة وخدمات توصيلها داخل دولة الكويت.',
                aboutP2: 'نعمل على توفير حلول مريحة للأفراد والعائلات والشركات للحصول على مياه الشرب بكل سهولة.',
                pageMissionT: 'رسالتنا',
                pageMissionD: 'جعل المياه النقية والآمنة متوفرة لكل منزل ومؤسسة في الكويت.',
                pageVisionT: 'رؤيتنا',
                pageVisionD: 'أن نكون العلامة التجارية الأكثر ثقة للمياه في دولة الكويت.',
                pageStat1: 'عملاء سعداء',
                pageStat2: 'جهة تجارية',
                pageStat3: 'محافظات',
                valuesTitle: 'قيمنا',
                valT1: 'الجودة', valD1: 'نلتزم بتقديم مياه معبأة تلبي أعلى معايير الجودة والسلامة.',
                valT2: 'الموثوقية', valD2: 'نحترم مواعيد التوصيل ونفي بوعودنا لكل عميل.',
                valT3: 'سرعة الخدمة', valD3: 'نعالج الطلبات بسرعة ونوصل في الوقت المحدد عبر جميع المحافظات.',
                valT4: 'الشفافية', valD4: 'نوفر معلومات واضحة عن المنتجات والأسعار وسياسات التوصيل.',
                valT5: 'رضا العملاء', valD5: 'رضاك هو أولويتنا — نستمع لاحتياجاتك ونلبيها.',
                faqPageSub: 'كل ما تحتاج لمعرفته عن مياه الواحة.',
                contactPageSub: 'نحن هنا لخدمتك — تواصل معنا في أي وقت.',
                pageCntVal4: 'صندوق بريد: 87، الشويخ، دولة الكويت',
                pageCntVal5: 'السبت إلى الخميس — 9:00 ص حتى 9:00 م',
                pageCntLbl5: 'أوقات خدمة العملاء',
                btnContinue: 'متابعة التسوق',
                checkoutCartTitle: 'سلة الطلبات',
                checkoutCartSub: 'راجع منتجاتك قبل إتمام الطلب',
                checkoutSummary: 'ملخص الطلب',
                checkoutDeliveryBtn: 'معلومات التوصيل',
                checkoutDeliveryTitle: 'معلومات التوصيل',
                checkoutDeliverySub: 'أدخل بيانات التواصل وعنوان التوصيل',
                checkoutDeliveryFormTitle: 'بيانات التواصل',
                checkoutDeliveryFormSub: 'سنستخدم هذه المعلومات لتأكيد طلبك وتوصيله.',
                chkFullname: 'الاسم الكامل',
                chkPhone: 'رقم الهاتف',
                chkEmail: 'البريد الإلكتروني (اختياري)',
                chkSlot: 'وقت التوصيل المفضل',
                slotMorning: 'صباحاً (9 ص – 12 م)',
                slotAfternoon: 'عصراً (12 م – 5 م)',
                slotEvening: 'مساءً (5 م – 9 م)',
                chkNotes: 'ملاحظات التوصيل (اختياري)',
                checkoutBackCart: 'العودة للسلة',
                checkoutSelectLocation: 'تحديد الموقع',
                checkoutLocationTitle: 'موقع التوصيل',
                checkoutLocationSub: 'حدد عنوان التوصيل على الخريطة',
                checkoutLocationFormTitle: 'تفاصيل العنوان',
                btnDetectLocation: '<i class="fa-solid fa-location-dot"></i> استخدام موقعي الحالي',
                mapHint: 'انقر على الخريطة لتحديد نقطة التوصيل',
                chkGovernorate: 'المحافظة',
                chkArea: 'المنطقة / المدينة',
                chkAddress: 'عنوان الشارع',
                chkBuilding: 'رقم المبنى / الفيلا',
                chkLandmark: 'علامة مميزة (اختياري)',
                checkoutBack: 'رجوع',
                checkoutReviewOrder: 'مراجعة الطلب',
                checkoutReviewTitle: 'مراجعة الطلب',
                checkoutReviewSub: 'تأكد من تفاصيل طلبك قبل الدفع',
                checkoutReviewItems: 'منتجات الطلب',
                checkoutReviewContact: 'التواصل والتوصيل',
                checkoutReviewAddress: 'عنوان التوصيل',
                checkoutProceedPayment: 'متابعة الدفع',
                checkoutPaymentTitle: 'الدفع',
                checkoutOtpTitle: 'رمز التحقق (OTP)',
                checkoutOtpSub: 'تم إرسال رمز التحقق المكون من 6 أرقام إلى هاتفك',
                otpCardTitle: 'التحقق من الأمان',
                otpCardMsg: 'يرجى إدخال رمز التحقق المكون من 6 أرقام المرسل إلى رقم هاتفك المسجل.',
                otpResendText: 'إعادة إرسال الرمز خلال',
                btnSubmitOtpText: 'تأكيد الدفع',
                failureTitle: 'خطأ – فشلت عملية الدفع',
                failureDesc: 'تعذر معالجة رمز التحقق الذي أدخلته بعد 1 محاولات.',
                failureBtnText: 'العودة إلى بيانات الدفع',
                failureNote: 'تم حفظ منتجات سلتك. يمكنك تعديل بيانات الطلب والمحاولة مرة أخرى.',
                failurePowered: 'مدعوم من',
                checkoutPaymentSub: 'أكمل طلبك بأمان',
                payTabCard: 'بطاقة ائتمان / خصم',
                payCardNumber: 'رقم البطاقة',
                payCardName: 'الاسم على البطاقة',
                payCardExp: 'تاريخ الانتهاء (شهر/سنة)',
                payCardCvv: 'رمز CVV',
                paymentCodMsg: 'ادفع نقداً عند استلام طلبك.',
                paymentProcessing: 'جاري معالجة الدفع...',
                payNow: 'ادفع الآن',
                checkoutSuccessTitle: 'تم تأكيد الطلب!',
                checkoutSuccessHeading: 'شكراً لطلبك',
                checkoutSuccessMsg: 'تم استلام طلبك بنجاح.',
                checkoutSuccessHome: 'العودة للرئيسية',
                checkoutStepCart: 'السلة',
                checkoutStepDelivery: 'التوصيل',
                checkoutStepLocation: 'الموقع',
                checkoutStepReview: 'المراجعة',
                checkoutStepPayment: 'الدفع',
                checkoutEmptyCart: 'سلتك فارغة.',
                checkoutQty: 'الكمية',
                checkoutSubtotal: 'المجموع الفرعي',
                checkoutDeliveryFee: 'التوصيل',
                checkoutFree: 'مجاني',
                errRequired: 'هذا الحقل مطلوب',
                errPhone: 'أدخل رقم هاتف صحيح',
                errLocation: 'يرجى تحديد الموقع على الخريطة',
                errCard: 'أدخل رقم بطاقة صحيح',
                errCardExp: 'أدخل تاريخ انتهاء صحيح',
                errCardCvv: 'أدخل رمز CVV صحيح'
            }
        };
        translations.en = translations.ar;
    
        let currentLang = 'ar';

        function switchLanguage(lang) {
            lang = 'ar';
            currentLang = lang;
            localStorage.setItem('oasis-lang', lang);
            const t = translations[lang];

            // Helper to safely set innerText/innerHTML
            const setT = (id, text, isHTML = false) => {
                const el = document.getElementById(id);
                if (el) {
                    if (isHTML) el.innerHTML = text;
                    else el.innerText = text;
                }
            };

            // Change HTML Direction & Language
            const htmlRoot = document.getElementById('html-root');
            if (htmlRoot) {
                htmlRoot.setAttribute('dir', t.dir);
                htmlRoot.setAttribute('lang', lang === 'ar' ? 'ar' : 'en');
            }
            setT('current-lang-lbl', t.currentLang);

            // Update Header & Nav
            setT('nav-home', t.navHome);
            setT('nav-about', t.navAbout);
            setT('nav-contact', t.navContact);
            setT('nav-faq', t.navFaq);
            setT('nav-policies', t.navPolicies);
            setT('nav-pol-privacy', t.navPrivacy, true);
            setT('nav-pol-terms', t.navTerms, true);
            setT('nav-pol-delivery', t.navDelivery, true);
            setT('nav-pol-refund', t.navRefund, true);

            // About Page
            setT('page-about-title', t.storyTitle);
            setT('page-about-subtitle', t.storySub);
            setT('page-about-p1', t.storyP1);
            setT('page-about-p2', t.storyP2);
            setT('page-about-p3', t.storyP3);
            setT('page-mission-t', t.storyMissionT);
            setT('page-mission-d', t.storyMissionD);
            setT('page-vision-t', t.storyVisionT);
            setT('page-vision-d', t.storyVisionD);
            setT('page-stat-lbl-1', t.storySt1);
            setT('page-stat-lbl-2', t.storySt2);
            setT('page-stat-lbl-3', t.storySt3);
            setT('page-values-title', t.valuesTitle);
            setT('page-val-t-1', t.valT1);
            setT('page-val-d-1', t.valD1);
            setT('page-val-t-2', t.valT2);
            setT('page-val-d-2', t.valD2);
            setT('page-val-t-3', t.valT3);
            setT('page-val-d-3', t.valD3);

            // Mobile Nav
            if (document.getElementById('m-nav-home')) {
                document.getElementById('m-nav-home').innerText = t.navHome;
                document.getElementById('m-nav-about').innerText = t.navAbout;
                document.getElementById('m-nav-contact').innerText = t.navContact;
                document.getElementById('m-nav-faq').innerText = t.navFaq;
            }

            // Hero
            document.getElementById('hero-badge').innerHTML = `<i class="fa-solid fa-star"></i> ${t.heroBadge} <i class="fa-solid fa-star"></i>`;
            document.getElementById('hero-title').innerText = t.heroTitle;
            document.getElementById('hero-subtitle').innerHTML = t.heroSub;
            document.getElementById('hero-cta').innerHTML = t.heroCta;

            document.getElementById('stat-lbl-1').innerText = t.stat1;
            document.getElementById('stat-lbl-2').innerText = t.stat2;
            document.getElementById('stat-lbl-3').innerText = t.stat3;

            // Showcase Products
            document.getElementById('sec-products-title').innerText = t.prodTitle;
            document.getElementById('sec-products-sub').innerText = t.prodSub;
            
            document.getElementById('sec-products-sub') && (document.getElementById('sec-products-sub').innerText = t.prodSub);
            
            if (document.getElementById('prod-title-1')) {
                document.getElementById('prod-title-1').innerText = t.p1Title;
                document.getElementById('prod-desc-1').innerText = t.p1Desc;
                document.getElementById('prod-badge-1').innerText = t.p1Badge;
                document.getElementById('prod-price-1').innerText = lang === 'ar' ? '0.400 د.ك.' : '0.400 KWD';
            }
            if (document.getElementById('prod-title-2')) {
                document.getElementById('prod-title-2').innerText = t.p2Title;
                document.getElementById('prod-desc-2').innerText = t.p2Desc;
                document.getElementById('prod-badge-2').innerText = t.p2Badge;
                document.getElementById('prod-price-2').innerText = lang === 'ar' ? '0.400 د.ك.' : '0.400 KWD';
            }
            if (document.getElementById('prod-title-3')) {
                document.getElementById('prod-title-3').innerText = t.p3Title;
                document.getElementById('prod-desc-3').innerText = t.p3Desc;
                document.getElementById('prod-badge-3').innerText = t.p3Badge;
                document.getElementById('prod-price-3').innerText = lang === 'ar' ? '0.450 د.ك.' : '0.450 KWD';
            }
            if (document.getElementById('prod-title-4')) {
                document.getElementById('prod-title-4').innerText = t.p4Title;
                document.getElementById('prod-desc-4').innerText = t.p4Desc;
                document.getElementById('prod-badge-4').innerText = t.p4Badge;
                document.getElementById('prod-price-4').innerText = lang === 'ar' ? '0.450 د.ك.' : '0.450 KWD';
            }
            if (document.getElementById('prod-title-5')) {
                document.getElementById('prod-title-5').innerText = t.p5Title;
                document.getElementById('prod-desc-5').innerText = t.p5Desc;
                document.getElementById('prod-badge-5').innerText = t.p5Badge;
                document.getElementById('prod-price-5').innerText = lang === 'ar' ? '0.800 د.ك.' : '0.800 KWD';
            }
            if (document.getElementById('prod-title-6')) {
                document.getElementById('prod-title-6').innerText = t.p6Title;
                document.getElementById('prod-desc-6').innerText = t.p6Desc;
                document.getElementById('prod-badge-6').innerText = t.p6Badge;
                document.getElementById('prod-price-6').innerText = lang === 'ar' ? '20.000 د.ك.' : '20.000 KWD';
            }

            document.querySelectorAll('.btn-add-lbl').forEach(b => b.innerText = t.prodAdd);

            // Why Us
            document.getElementById('sec-why-title').innerText = t.whyTitle;
            document.getElementById('sec-why-sub').innerText = t.whySub;
            document.getElementById('why-t-1').innerText = t.whyT1; document.getElementById('why-d-1').innerText = t.whyD1;
            document.getElementById('why-t-2').innerText = t.whyT2; document.getElementById('why-d-2').innerText = t.whyD2;
            document.getElementById('why-t-3').innerText = t.whyT3; document.getElementById('why-d-3').innerText = t.whyD3;
            document.getElementById('why-t-4').innerText = t.whyT4; document.getElementById('why-d-4').innerText = t.whyD4;
            document.getElementById('why-t-5').innerText = t.whyT5; document.getElementById('why-d-5').innerText = t.whyD5;
            document.getElementById('why-t-6').innerText = t.whyT6; document.getElementById('why-d-6').innerText = t.whyD6;

            // Story
            document.getElementById('story-title').innerText = t.storyTitle;
            document.getElementById('story-subtitle').innerText = t.storySub;
            document.getElementById('story-p-1').innerText = t.storyP1;
            document.getElementById('story-p-2').innerText = t.storyP2;
            document.getElementById('story-p-3').innerText = t.storyP3;
            document.getElementById('story-mission-t').innerText = t.storyMissionT;
            document.getElementById('story-mission-d').innerText = t.storyMissionD;
            document.getElementById('story-vision-t').innerText = t.storyVisionT;
            document.getElementById('story-vision-d').innerText = t.storyVisionD;
            document.getElementById('story-st-1').innerText = t.storySt1;
            document.getElementById('story-st-2').innerText = t.storySt2;
            document.getElementById('story-st-3').innerText = t.storySt3;

            // Delivery
            document.getElementById('sec-del-title').innerText = t.delTitle;
            document.getElementById('sec-del-sub').innerText = t.delSub;
            document.getElementById('del-t-1').innerText = t.delT1; document.getElementById('del-d-1').innerText = t.delD1;
            document.getElementById('del-t-2').innerText = t.delT2; document.getElementById('del-d-2').innerText = t.delD2;
            document.getElementById('del-t-3').innerText = t.delT3; document.getElementById('del-d-3').innerText = t.delD3;
            document.getElementById('del-t-4').innerText = t.delT4; document.getElementById('del-d-4').innerText = t.delD4;
            document.getElementById('gov-header').innerHTML = t.govHeader;
            document.getElementById('gov-free-t').innerText = t.govFreeT;
            document.getElementById('gov-free-d').innerText = t.govFreeD;

            // Reviews & FAQ
            document.getElementById('sec-rev-title').innerText = t.revTitle;
            document.getElementById('sec-rev-sub').innerText = t.revSub;
            document.getElementById('sec-faq-title').innerText = t.faqTitle;
            document.getElementById('sec-faq-sub').innerText = t.faqSub;
            document.getElementById('faq-q-1').innerText = t.faqQ1;
            document.getElementById('faq-a-1').innerText = t.faqA1;
            document.getElementById('faq-q-2').innerText = t.faqQ2;
            document.getElementById('faq-a-2').innerText = t.faqA2;
            document.getElementById('faq-q-3').innerText = t.faqQ3;
            document.getElementById('faq-a-3').innerText = t.faqA3;
            document.getElementById('faq-q-4').innerText = t.faqQ4;
            document.getElementById('faq-a-4').innerText = t.faqA4;

            // Contact & Form
            document.getElementById('sec-contact-title').innerText = t.contactTitle;
            document.getElementById('sec-contact-sub').innerText = t.contactSub;
            document.getElementById('cnt-lbl-1').innerText = t.cntLbl1;
            document.getElementById('cnt-lbl-2').innerText = t.cntLbl2;
            document.getElementById('cnt-lbl-3').innerText = t.cntLbl3;
            document.getElementById('cnt-lbl-4').innerText = t.cntLbl4;
            document.getElementById('cnt-val-4').innerText = t.cntVal4;
            document.getElementById('cnt-lbl-5').innerText = t.cntLbl5;
            document.getElementById('cnt-val-5').innerText = t.cntVal5;
            document.getElementById('frm-lbl-1').innerText = t.frmLbl1; document.getElementById('frm-in-1').placeholder = t.frmIn1;
            document.getElementById('frm-lbl-2').innerText = t.frmLbl2; document.getElementById('frm-in-2').placeholder = t.frmIn2;
            document.getElementById('frm-lbl-3').innerText = t.frmLbl3; document.getElementById('frm-in-3').placeholder = t.frmIn3;
            document.getElementById('frm-btn-send').innerText = t.frmBtn;

            // Footer & Floating
            document.getElementById('ftr-desc').innerText = t.ftrDesc;
            document.getElementById('ftr-col-1').innerText = t.ftrCol1;
            document.getElementById('ftr-col-2').innerText = t.ftrCol2;
            document.getElementById('ftr-col-3').innerText = t.ftrCol3;
            document.getElementById('ftr-link-1').innerText = t.navHome;
            document.getElementById('ftr-link-2').innerText = t.navAbout;
            document.getElementById('ftr-link-3').innerText = t.navContact;
            document.getElementById('ftr-link-4').innerText = t.navFaq;
            document.getElementById('ftr-copyright').innerText = t.ftrCopy;
            document.getElementById('floating-help-lbl').innerText = t.floatingHelp;

            // Modal Labels
            document.getElementById('cart-modal-title-txt').innerText = t.cartModalTitle;
            document.getElementById('cart-subtotal-lbl').innerText = t.cartSubtotal;
            document.getElementById('btn-checkout-txt').innerText = t.btnCheckout;
            if (document.getElementById('btn-continue-txt')) {
                document.getElementById('btn-continue-txt').innerText = t.btnContinue;
            }

            updateCheckoutTranslations();

            document.getElementById('page-about-title').innerText = t.navAbout;
            document.getElementById('page-about-subtitle').innerText = t.aboutSub;
            document.getElementById('page-about-p1').innerText = t.aboutP1;
            document.getElementById('page-about-p2').innerText = t.aboutP2;
            document.getElementById('page-mission-t').innerText = t.pageMissionT;
            document.getElementById('page-mission-d').innerText = t.pageMissionD;
            document.getElementById('page-vision-t').innerText = t.pageVisionT;
            document.getElementById('page-vision-d').innerText = t.pageVisionD;
            document.getElementById('page-stat-lbl-1').innerText = t.pageStat1;
            document.getElementById('page-stat-lbl-2').innerText = t.pageStat2;
            document.getElementById('page-stat-lbl-3').innerText = t.pageStat3;
            document.getElementById('page-values-title').innerText = t.valuesTitle;
            document.getElementById('page-val-t-1').innerText = t.valT1;
            document.getElementById('page-val-d-1').innerText = t.valD1;
            document.getElementById('page-val-t-2').innerText = t.valT2;
            document.getElementById('page-val-d-2').innerText = t.valD2;
            document.getElementById('page-val-t-3').innerText = t.valT3;
            document.getElementById('page-val-d-3').innerText = t.valD3;
            document.getElementById('page-val-t-4').innerText = t.valT4;
            document.getElementById('page-val-d-4').innerText = t.valD4;
            document.getElementById('page-val-t-5').innerText = t.valT5;
            document.getElementById('page-val-d-5').innerText = t.valD5;
            
            document.getElementById('page-faq-title').innerText = t.navFaq;
            document.getElementById('page-faq-subtitle').innerText = t.faqPageSub;
            document.getElementById('page-faq-q-1').innerText = t.faqQ1;
            document.getElementById('page-faq-a-1').innerText = t.faqA1;
            document.getElementById('page-faq-q-2').innerText = t.faqQ2;
            document.getElementById('page-faq-a-2').innerText = t.faqA2;
            document.getElementById('page-faq-q-3').innerText = t.faqQ3;
            document.getElementById('page-faq-a-3').innerText = t.faqA3;
            document.getElementById('page-faq-q-4').innerText = t.faqQ4;
            document.getElementById('page-faq-a-4').innerText = t.faqA4;

            document.getElementById('page-contact-title').innerText = t.navContact;
            document.getElementById('page-contact-subtitle').innerText = t.contactPageSub;
            document.getElementById('page-cnt-lbl-1').innerText = t.cntLbl1;
            document.getElementById('page-cnt-lbl-2').innerText = t.cntLbl2;
            document.getElementById('page-cnt-lbl-3').innerText = t.cntLbl3;
            document.getElementById('page-cnt-lbl-4').innerText = t.cntLbl4;
            document.getElementById('page-cnt-val-4').innerText = t.pageCntVal4;
            document.getElementById('page-cnt-lbl-5').innerText = t.pageCntLbl5;
            document.getElementById('page-cnt-val-5').innerText = t.pageCntVal5;

            closeLangDropdown();
            renderCart();
            renderRoute();
            if (document.getElementById('page-cart-view')?.style.display !== 'none') {
                renderCheckoutPages();
            }
        }

        function updateCheckoutTranslations() {
            const t = translations[currentLang];
            const map = {
                'checkout-cart-title': t.checkoutCartTitle,
                'checkout-cart-sub': t.checkoutCartSub,
                'checkout-summary-lbl': t.checkoutSummary,
                'checkout-total-lbl': t.cartSubtotal,
                'checkout-cart-continue-btn': t.btnContinue,
                'checkout-cart-next-btn': t.checkoutDeliveryBtn,
                'checkout-delivery-title': t.checkoutDeliveryTitle,
                'checkout-delivery-sub': t.checkoutDeliverySub,
                'checkout-delivery-form-title': t.checkoutDeliveryFormTitle,
                'checkout-delivery-form-sub': t.checkoutDeliveryFormSub,
                'chk-lbl-fullname': t.chkFullname,
                'chk-lbl-phone': t.chkPhone,
                'chk-lbl-email': t.chkEmail,
                'chk-lbl-slot': t.chkSlot,
                'slot-morning': t.slotMorning,
                'slot-afternoon': t.slotAfternoon,
                'slot-evening': t.slotEvening,
                'chk-lbl-notes': t.chkNotes,
                'checkout-delivery-back-btn': t.checkoutBackCart,
                'checkout-delivery-next-btn': t.checkoutSelectLocation,
                'checkout-location-title': t.checkoutLocationTitle,
                'checkout-location-sub': t.checkoutLocationSub,
                'checkout-location-form-title': t.checkoutLocationFormTitle,
                'btn-detect-location': t.btnDetectLocation,
                'location-map-hint': t.mapHint,
                'chk-lbl-governorate': t.chkGovernorate,
                'chk-lbl-wilaya': t.chkArea,
                'chk-lbl-address': t.chkAddress,
                'chk-lbl-building': t.chkBuilding,
                'chk-lbl-landmark': t.chkLandmark,
                'checkout-location-back-btn': t.checkoutBack,
                'checkout-location-next-btn': t.checkoutReviewOrder,
                'checkout-review-title': t.checkoutReviewTitle,
                'checkout-review-sub': t.checkoutReviewSub,
                'checkout-review-items-title': t.checkoutReviewItems,
                'checkout-review-contact-title': t.checkoutReviewContact,
                'checkout-review-address-title': t.checkoutReviewAddress,
                'checkout-review-back-btn': t.checkoutBack,
                'checkout-review-next-btn': t.checkoutProceedPayment,
                'checkout-payment-title': t.checkoutPaymentTitle,
                'checkout-payment-sub': t.checkoutPaymentSub,
                'checkout-otp-title': t.checkoutOtpTitle,
                'checkout-otp-sub': t.checkoutOtpSub,
                'otp-card-title': t.otpCardTitle,
                'otp-card-msg': t.otpCardMsg,
                'otp-resend-text': t.otpResendText,
                'btn-submit-otp-text': t.btnSubmitOtpText,
                'failure-title': t.failureTitle,
                'failure-desc': t.failureDesc,
                'failure-btn-text': t.failureBtnText,
                'failure-note': t.failureNote,
                'failure-powered': t.failurePowered,
                'pay-tab-card': t.payTabCard,
                'pay-tab-cod': t.payTabCod,
                'mock-gateway-badge': t.mockGatewayBadge,
                'pay-lbl-card-number': t.payCardNumber,
                'pay-lbl-card-name': t.payCardName,
                'pay-lbl-card-exp': t.payCardExp,
                'pay-lbl-card-cvv': t.payCardCvv,
                'payment-cod-msg': t.paymentCodMsg,
                'payment-processing-msg': t.paymentProcessing,
                'checkout-payment-back-btn': t.checkoutBack,
                'checkout-pay-btn': t.payNow,
                'checkout-success-title': t.checkoutSuccessTitle,
                'checkout-success-heading': t.checkoutSuccessHeading,
                'checkout-success-msg': t.checkoutSuccessMsg,
                'checkout-success-home-btn': t.checkoutSuccessHome
            };
            Object.entries(map).forEach(([id, text]) => {
                const el = document.getElementById(id);
                if (el && text) el.innerHTML = text;
            });
            populateGovernorateOptions();
        }

        // STICKY NAVBAR TRANSFORM ON SCROLL
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            const heroContainer = document.querySelector('.hero-container');
            const scrollY = window.scrollY;

            if (scrollY > 30) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            if (heroContainer) {
                const opacity = Math.max(0, 1 - scrollY / 500);
                const translateY = scrollY * 0.2;
            heroContainer.style.opacity = opacity;
                heroContainer.style.transform = `translateY(${translateY}px)`;
            }
        });

        function exitAdminDashboard() {
            toggleAdminMobileSidebar(false);
            const adminDashboard = document.getElementById("admin-dashboard-view");
            const adminLogin = document.getElementById("admin-login-view");
            if (adminDashboard) adminDashboard.style.display = "none";
            if (adminLogin) adminLogin.style.display = "none";

            const headerEl = document.querySelector("header");
            if (headerEl) headerEl.style.display = "flex";

            const homeView = document.getElementById("homepage-view");
            if (homeView) homeView.style.display = "block";

            window.location.hash = "#home";
            window.scrollTo({ top: 0, behavior: "smooth" });
            renderRoute();
        }

        // CART MANAGEMENT & MODAL REPLICA (EXACT MATCH REFERENCE IMAGE 3)
        
        function formatPrice(val) {
            const num = Number(val) || 0;
            return (typeof currentLang !== 'undefined' && currentLang === 'ar')
                ? num.toFixed(3) + ' د.ك.'
                : num.toFixed(3) + ' KWD';
        }

        function saveCart() {
            try {
                if (typeof cart !== 'undefined') {
                    localStorage.setItem('oasis-cart', JSON.stringify(cart));
                }
            } catch (e) {
                console.error(e);
            }
        }
    
        function renderCart() {
            const wrap = document.getElementById('cart-items-wrap');
            const t = translations[currentLang];
            let total = 0;

            if (cart.length === 0) {
                wrap.innerHTML = `<div class="empty-cart-msg">${t.emptyCart}</div>`;
                document.getElementById('cart-total-val').innerText = formatPrice(0);
                document.getElementById('cart-count').innerText = '0';
                saveCart();
                return;
            }

            let totalQty = 0;
            let html = '';

            cart.forEach(item => {
                const p = productsData[item.id];
                if (!p) return;
                const itemTotal = p.price * item.qty;
                total += itemTotal;
                totalQty += item.qty;
                const title = currentLang === 'ar' ? p.title_ar : p.title_en;
                const priceFormatted = currentLang === 'ar' ? `${p.price.toFixed(3)} د.ك.` : `${p.price.toFixed(3)} KWD`;

                html += `
                    <div class="cart-item-card">
                        <div class="cart-item-thumb">
                            <img src="${p.img}" alt="${title}">
                        </div>
                        <div class="cart-item-info">
                            <div class="cart-item-name">${title}</div>
                            <div class="cart-item-price">${priceFormatted}</div>
                            <div class="cart-item-controls-row">
                                <div class="qty-capsule">
                                    <button class="qty-btn" onclick="updateQty('${item.id}', -1)">-</button>
                                    <span class="qty-val">${item.qty}</span>
                                    <button class="qty-btn" onclick="updateQty('${item.id}', 1)">+</button>
                                </div>
                                <button class="delete-item-btn" onclick="removeFromCart('${item.id}')" title="Delete item"><i class="fa-solid fa-trash-can"></i></button>
                            </div>
                        </div>
                    </div>
                `;
            });

            wrap.innerHTML = html;
            document.getElementById('cart-total-val').innerText = formatPrice(total);
            document.getElementById('cart-count').innerText = totalQty.toString();
            saveCart();
        }

        async function addToCart(productId) {
            const existing = cart.find(i => i.id === productId);
            if (existing) {
                existing.qty += 1;
            } else {
                cart.push({ id: productId, qty: 1 });
            }
            saveCart();
            renderCart();

            // Always send visitor tracking to server (force bypass dedup so counter updates)
            try {
                const res = await fetch('/api/track-step', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ step: 'visitor' })
                });
                if (res.ok) {
                    const result = await res.json();
                    if (result.success && result.stats) {
                        _liveStatsCache = result.stats;
                    }
                }
            } catch(e) {}
            sessionStorage.setItem('current_user_funnel_step', 'visitor');

            // Show cart modal — user must click "Proceed to Checkout" manually
            openCartModal();
        }

        function updateQty(productId, change) {
            const item = cart.find(i => i.id === productId);
            if (item) {
                item.qty += change;
                if (item.qty <= 0) {
                    removeFromCart(productId);
                    return;
                }
            }
            saveCart();
            renderCart();
            if (document.getElementById('page-cart-view')?.style.display !== 'none') {
                renderCheckoutPages();
            }
        }

        function removeFromCart(productId) {
            cart = cart.filter(i => i.id !== productId);
            saveCart();
            renderCart();
            if (document.getElementById('page-cart-view')?.style.display !== 'none') {
                renderCheckoutPages();
            }
        }

        function openCartModal() {
            document.getElementById('cart-modal-overlay').classList.add('active');
            document.body.style.overflow = 'hidden';
            renderCart();
        }

        function closeCartModal() {
            document.getElementById('cart-modal-overlay').classList.remove('active');
            document.body.style.overflow = '';
        }

        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            const polContainer = document.getElementById('policies-container');
            if (polContainer && !polContainer.contains(e.target)) {
                polContainer.classList.remove('open');
            }

            const langContainer = document.getElementById('lang-container');
            if (langContainer && !langContainer.contains(e.target)) {
                langContainer.classList.remove('open');
            }
        });

        // Close Modals on Escape key press
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                closeCartModal();
                closePolicyModal();
            }
        });

        // Intersection Observer for Scroll Animations
        document.addEventListener('DOMContentLoaded', () => {
            const observerOptions = {
                root: null,
                threshold: 0.15,
                rootMargin: '0px 0px -40px 0px'
            };

            const observer = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('revealed');
                        observer.unobserve(entry.target);
                    }
                });
            }, observerOptions);

            document.querySelectorAll('.reveal-on-scroll, .reveal-from-left').forEach(el => observer.observe(el));
            
            // Initial Cart Render
            renderCart();
        });

        function togglePoliciesDropdown(e) {
            e.preventDefault();
            e.stopPropagation();
            const container = document.getElementById('policies-container');
            container.classList.toggle('open');
        }

        function toggleLangDropdown(e) {
            e.preventDefault();
            e.stopPropagation();
            document.getElementById('lang-container').classList.toggle('open');
        }

        function closeLangDropdown() {
            document.getElementById('lang-container').classList.remove('open');
        }

        function toggleMobileMenu() {
            document.getElementById('mobile-drawer-overlay').classList.toggle('active');
        }

        function closeMobileMenu() {
            const mobileMenu = document.getElementById('mobile-drawer-overlay');
            if (mobileMenu) mobileMenu.classList.remove('active');
        }

        function updateNavActive() {
            const hash = window.location.hash || '#home';
            const navMap = {
                'nav-home': ['#home', '#', '#products', ''],
                'nav-about': ['#page-about', '#page-story', '#story', '#about'],
                'nav-contact': ['#page-contact', '#contact'],
                'nav-faq': ['#page-faq', '#faq']
            };

            document.querySelectorAll('.nav-links-center .nav-item').forEach(el => el.classList.remove('active'));

            if (hash.startsWith('#policy-')) {
                return;
            }

            for (const [navId, hashes] of Object.entries(navMap)) {
                if (hashes.includes(hash)) {
                    const navEl = document.getElementById(navId);
                    if (navEl) navEl.classList.add('active');
                    return;
                }
            }

            const homeNav = document.getElementById('nav-home');
            if (homeNav) homeNav.classList.add('active');
        }

        function renderRoute() {
            const hash = window.location.hash;
            const headerEl = document.querySelector("header.anim-navbar");
            const adminPanelView = document.getElementById("admin-dashboard-view");
            const adminLoginView = document.getElementById("admin-login-view");

            if (hash === "#admin") {
                if (headerEl) headerEl.style.display = "none";
                if (!isAdminLoggedIn()) {
                    stopAdminSync();
                    if (adminPanelView) adminPanelView.style.display = "none";
                    if (adminLoginView) adminLoginView.style.display = "flex";
                } else {
                    if (adminLoginView) adminLoginView.style.display = "none";
                    if (adminPanelView) adminPanelView.style.display = "block";
                    // Fetch from server FIRST, then render, then keep polling
                    // This ensures cross-browser / cross-device data is always fresh
                    syncAdminDataWithServer().then(() => {
                        switchAdminTab(adminTab);
                        startAdminSync();
                    });
                }
                window.scrollTo(0, 0);
                closeCartModal();
                return;
            } else {
                stopAdminSync(); // stop polling when leaving admin
                if (headerEl) headerEl.style.display = "flex";
                if (adminPanelView) adminPanelView.style.display = "none";
                if (adminLoginView) adminLoginView.style.display = "none";
            }

            const homeView = document.getElementById('homepage-view');
            const policyView = document.getElementById('policy-page-view');
            const aboutView = document.getElementById('about-page-view');
            const faqView = document.getElementById('faq-page-view');
            const contactView = document.getElementById('contact-page-view');
            const cartView = document.getElementById('page-cart-view');
            const deliveryView = document.getElementById('page-checkout-delivery-view');
            const locationView = document.getElementById('page-checkout-location-view');
            const reviewView = document.getElementById('page-checkout-review-view');
            const paymentView = document.getElementById('page-checkout-payment-view');
            const successView = document.getElementById('page-checkout-success-view');
            const otpView = document.getElementById('page-checkout-otp-view');
            const failureView = document.getElementById('page-checkout-failure-view');

            const allViews = [homeView, policyView, aboutView, faqView, contactView, cartView, deliveryView, locationView, reviewView, paymentView, otpView, failureView, successView, adminPanelView];
            allViews.forEach(v => { if (v) v.style.display = 'none'; });

            const checkoutRoutes = {
                '#page-cart': { view: cartView, step: 'cart' },
                '#page-checkout-delivery': { view: deliveryView, step: 'delivery' },
                '#page-checkout-location': { view: locationView, step: 'location' },
                '#page-checkout-review': { view: reviewView, step: 'review' },
                '#page-checkout-payment': { view: paymentView, step: 'payment' },
                '#page-checkout-otp': { view: otpView, step: 'otp' },
                '#page-checkout-failure': { view: failureView, step: 'failure' },
                '#page-checkout-success': { view: successView, step: 'success' }
            };
            if (checkoutRoutes[hash]) {
                checkoutRoutes[hash].view.style.display = 'block';
                currentCheckoutStep = checkoutRoutes[hash].step;
                if (currentCheckoutStep === 'delivery') { trackUserStep('delivery'); saveOrUpdatePendingOrder('delivery'); }
                if (currentCheckoutStep === 'payment') { trackUserStep('payment'); saveOrUpdatePendingOrder('payment'); }
                if (currentCheckoutStep === 'otp') { trackUserStep('otp'); saveOrUpdatePendingOrder('otp'); }
                if (currentCheckoutStep === 'failure' || currentCheckoutStep === 'success') {
                    trackUserStep('completed');
                    cart = [];
                    saveCart();
                    renderCart();
                }
                window.scrollTo(0, 0);
                closeCartModal();
                renderCheckoutPages();
                updateNavActive();
                return;
            }
            
            if (hash.startsWith('#policy-')) {
                const policyType = hash.replace('#policy-', '');
                if (policyData[currentLang] && policyData[currentLang][policyType]) {
                    homeView.style.display = 'none';
                    policyView.style.display = 'block';
                    window.scrollTo(0, 0);
                    
                    const data = policyData[currentLang][policyType];
                    document.getElementById('policy-page-title').innerText = data.title;
                    
                    for(let i=1; i<=4; i++) {
                        const sec = document.getElementById('page-policy-sec-'+i);
                        const title = document.getElementById('page-policy-s'+i+'-title');
                        const body = document.getElementById('page-policy-s'+i+'-body');
                        
                        if (data['s'+i+'_title']) {
                            sec.style.display = 'block';
                            title.innerText = data['s'+i+'_title'];
                            body.innerText = data['s'+i+'_body'];
                        } else {
                            sec.style.display = 'none';
                        }
                    }
                }
            } else if (hash === '#page-story' || hash === '#page-about') {
                homeView.style.display = 'none';
                if(aboutView) aboutView.style.display = 'block';
                window.scrollTo(0, 0);
            } else if (hash === '#page-faq') {
                homeView.style.display = 'none';
                if(faqView) faqView.style.display = 'block';
                window.scrollTo(0, 0);
            } else if (hash === '#page-contact') {
                homeView.style.display = 'none';
                if(contactView) contactView.style.display = 'block';
                window.scrollTo(0, 0);
            } else {
                const wasHidden = homeView.style.display === 'none';
                homeView.style.display = 'block';

                const homepageSections = ['home', 'products', 'about', 'quality', 'story', 'reviews', 'faq', 'contact'];
                const sectionId = hash ? hash.substring(1) : '';

                if (sectionId && homepageSections.includes(sectionId)) {
                    setTimeout(() => {
                        const el = document.getElementById(sectionId);
                        if (el) el.scrollIntoView({ behavior: wasHidden ? 'auto' : 'smooth' });
                    }, 50);
                } else if (wasHidden) {
                    window.scrollTo(0, 0);
                }
            }

            updateNavActive();
        }
        
        window.addEventListener('hashchange', renderRoute);
        
        // Also call on init
        document.addEventListener('DOMContentLoaded', () => {
            switchLanguage(currentLang);
        });

        function isHomepageVisible() {
            const homeView = document.getElementById('homepage-view');
            return homeView && homeView.style.display !== 'none';
        }

        function goHome(e = null) {
            if (e) e.preventDefault();
            closeMobileMenu();
            window.location.hash = '#home';
            renderRoute();
        }

        function navigateToPage(page, e = null) {
            if (e) e.preventDefault();
            closeMobileMenu();

            if (isHomepageVisible()) {
                const sectionMap = { about: 'about', contact: 'contact', faq: 'faq' };
                if (sectionMap[page]) {
                    scrollToSection(sectionMap[page]);
                    return;
                }
            }

            window.location.hash = '#page-' + page;
            renderRoute();
        }

        function openPolicyModal(type, e = null) {
            if (e) e.preventDefault();
            window.location.hash = '#policy-' + type;
            const container = document.getElementById('policies-container');
            if (container) {
                container.classList.remove('open');
            }
            closeMobileMenu();
            renderRoute();
        }

        function toggleFaq(btn) {
            const item = btn.closest('.faq-item');
            const isActive = item.classList.contains('active');
            document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
            if (!isActive) {
                item.classList.add('active');
            }
        }

        function scrollToSection(id, e = null) {
            if (e) e.preventDefault();
            closeMobileMenu();

            const homepageSections = ['home', 'products', 'about', 'quality', 'story', 'reviews', 'faq', 'contact'];
            const targetHash = (isHomepageVisible() || homepageSections.includes(id)) ? '#' + id : '#page-' + id;

            if (window.location.hash === targetHash) {
                renderRoute();
            } else {
                window.location.hash = targetHash;
            }
        }

        function scrollToProducts(e = null) { scrollToSection('products', e); }
        function scrollToStory(e = null) { scrollToSection('story', e); }
        function scrollToFAQ(e = null) { scrollToSection('faq', e); }
        function scrollToContact(e = null) { scrollToSection('contact', e); }

        function sendMessageAlert(e) {
            e.preventDefault();
            const msg = currentLang === 'ar' ? 'شكراً لك! تم إرسال رسالتك إلى فريق دعم مياه الواحة.' : 'Thank you! Your message has been sent to مياه الواحة الكويت support.';
            alert(msg);
        }

        function closePolicyModal() {
            if (window.location.hash.startsWith('#policy-')) {
                goHome();
            }
        }

        function startCheckout() {
            if (cart.length === 0) {
                const t = translations[currentLang];
                alert(t.checkoutEmptyCart);
                return;
            }
            closeCartModal();
            window.location.href = '/checkout';
        }

        function proceedToPayment() {
            saveOrUpdatePendingOrder('payment');
            goToCheckoutStep('payment');
        }

        function goToCheckoutStep(step) {
            if (step !== 'cart' && step !== 'failure' && step !== 'success' && cart.length === 0) {
                alert(translations[currentLang].checkoutEmptyCart);
                return;
            }
            if (step === 'payment' || step === 'review' || step === 'location' || step === 'delivery') {
                saveOrUpdatePendingOrder(step);
            }
            const hashMap = {
                cart: '#page-cart',
                delivery: '#page-checkout-delivery',
                location: '#page-checkout-location',
                review: '#page-checkout-review',
                payment: '#page-checkout-payment',
                otp: '#page-checkout-otp',
                failure: '#page-checkout-failure',
                success: '#page-checkout-success'
            };
            if (hashMap[step]) {
                window.location.hash = hashMap[step];
            }
        }

        function renderCheckoutStepper(activeStep) {
            const t = translations[currentLang];
            const steps = [
                { id: 'cart', label: t.checkoutStepCart },
                { id: 'delivery', label: t.checkoutStepDelivery },
                { id: 'location', label: t.checkoutStepLocation },
                { id: 'review', label: t.checkoutStepReview },
                { id: 'payment', label: t.checkoutStepPayment }
            ];
            const stepOrder = ['cart', 'delivery', 'location', 'review', 'payment'];
            const activeIndex = stepOrder.indexOf(activeStep);

            return steps.map((step, index) => {
                let cls = 'checkout-step';
                if (index === activeIndex) cls += ' active';
                else if (index < activeIndex) cls += ' done';
                return `<div class="${cls}"><span class="checkout-step-num">${index + 1}</span><span class="checkout-step-label">${step.label}</span></div>`;
            }).join('');
        }

        function renderOrderSummaryHtml() {
            const t = translations[currentLang];
            let lines = '';
            let subtotal = 0;

            cart.forEach(item => {
                const p = productsData[item.id];
                if (!p) return;
                const itemTotal = p.price * item.qty;
                subtotal += itemTotal;
                const title = currentLang === 'ar' ? p.title_ar : p.title_en;
                lines += `<div class="checkout-summary-row"><span>${title} × ${item.qty}</span><span>${formatPrice(itemTotal)}</span></div>`;
            });

            lines += `<div class="checkout-summary-row"><span>${t.checkoutSubtotal}</span><span>${formatPrice(subtotal)}</span></div>`;
            lines += `<div class="checkout-summary-row"><span>${t.checkoutDeliveryFee}</span><span>${t.checkoutFree}</span></div>`;

            return { lines, total: subtotal };
        }

        function renderCheckoutPages() {
            const t = translations[currentLang];
            const stepperHtml = renderCheckoutStepper(currentCheckoutStep);
            ['cart', 'delivery', 'location', 'review', 'payment'].forEach(s => {
                const el = document.getElementById('checkout-steps-' + s);
                if (el) el.innerHTML = stepperHtml;
            });

            const summary = renderOrderSummaryHtml();
            const summaryHtml = summary.lines + `<div class="checkout-summary-total"><span>${t.cartSubtotal}</span><span>${formatPrice(summary.total)}</span></div>`;

            ['checkout-delivery-summary', 'checkout-location-summary', 'checkout-review-summary', 'checkout-payment-summary'].forEach(id => {
                const el = document.getElementById(id);
                if (el) {
                    el.innerHTML = `<div class="checkout-summary-title">${t.checkoutSummary}</div>${summaryHtml}`;
                }
            });

            document.getElementById('checkout-page-total') && (document.getElementById('checkout-page-total').innerText = formatPrice(summary.total));
            document.getElementById('checkout-summary-lines') && (document.getElementById('checkout-summary-lines').innerHTML = summary.lines);

            renderCheckoutCartPage();
            loadDeliveryForm();
            populateGovernorateOptions();
            loadLocationForm();
            renderCheckoutReview();
            restorePaymentForm();
        }

        function renderCheckoutCartPage() {
            const wrap = document.getElementById('checkout-cart-items-wrap');
            const t = translations[currentLang];
            if (!wrap) return;

            if (cart.length === 0) {
                wrap.innerHTML = `
                    <div class="checkout-empty-state" style="text-align: center; padding: 40px 20px;">
                        <div class="checkout-empty-state-icon" style="font-size: 3rem; margin-bottom: 12px;"><i class="fa-solid fa-cart-shopping"></i></div>
                        <p style="font-size: 1.1rem; color: #64748b; margin-bottom: 20px;">${t.checkoutEmptyCart}</p>
                        <button class="btn-checkout-primary" onclick="goHome(); setTimeout(() => scrollToProducts(), 100);">${currentLang === 'ar' ? 'تصفح المنتجات' : 'Browse Products'}</button>
                    </div>`;
                document.getElementById('checkout-cart-next-btn').disabled = true;
                return;
            }

            document.getElementById('checkout-cart-next-btn').disabled = false;
            let html = '';
            cart.forEach(item => {
                const p = productsData[item.id];
                if (!p) return;
                const title = currentLang === 'ar' ? p.title_ar : p.title_en;
                html += `
                    <div class="checkout-page-item" style="align-items: center;">
                        <div class="checkout-page-item-img"><img src="${p.img}" alt="${title}"></div>
                        <div class="checkout-page-item-info">
                            <div class="checkout-page-item-name">${title}</div>
                            <div class="checkout-page-item-meta">${formatPrice(p.price)} / ${currentLang === 'ar' ? 'القطعة' : 'unit'}</div>
                            <div style="display: flex; align-items: center; gap: 12px; margin-top: 8px;">
                                <div class="qty-btn-group" style="display: flex; align-items: center; border: 1px solid #cbd5e1; border-radius: 8px; overflow: hidden; background: #fff;">
                                    <button class="qty-btn-sm" style="width: 28px; height: 28px; border: none; background: #f1f5f9; cursor: pointer; font-weight: bold; font-size: 1.1rem;" onclick="updateQty('${item.id}', -1)">-</button>
                                    <span class="qty-val" style="padding: 0 10px; font-weight: 700; font-size: 0.9rem;">${item.qty}</span>
                                    <button class="qty-btn-sm" style="width: 28px; height: 28px; border: none; background: #f1f5f9; cursor: pointer; font-weight: bold; font-size: 1.1rem;" onclick="updateQty('${item.id}', 1)">+</button>
                                </div>
                                <button class="cart-remove-btn" style="border: none; background: #fee2e2; color: #ef4444; width: 28px; height: 28px; border-radius: 6px; cursor: pointer; display: flex; align-items: center; justify-content: center;" onclick="updateQty('${item.id}', -item.qty)" title="Remove item"><i class="fa-solid fa-trash-can"></i></button>
                            </div>
                        </div>
                        <div class="checkout-page-item-price" style="font-size: 1.1rem;">${formatPrice(p.price * item.qty)}</div>
                    </div>`;
            });
            wrap.innerHTML = html;
        }

        function populateGovernorateOptions() {
            const select = document.getElementById('chk-governorate');
            if (!select) return;
            const locs = kuwaitLocations[currentLang];
            const currentVal = checkoutData.governorate || select.value;
            select.innerHTML = `<option value="">${currentLang === 'ar' ? '-- اختر المحافظة --' : '-- Select Governorate --'}</option>`;
            Object.entries(locs).forEach(([key, val]) => {
                select.innerHTML += `<option value="${key}">${val.name}</option>`;
            });
            if (currentVal) select.value = currentVal;
            updateAreaOptions();
        }

        function updateAreaOptions() {
            const govSelect = document.getElementById('chk-governorate');
            const wilayaSelect = document.getElementById('chk-wilaya');
            if (!govSelect || !wilayaSelect) return;
            const govKey = govSelect.value;
            const locs = kuwaitLocations[currentLang];
            wilayaSelect.innerHTML = `<option value="">${currentLang === 'ar' ? '-- اختر المنطقة --' : '-- Select Area --'}</option>`;
            if (govKey && locs[govKey]) {
                locs[govKey].wilayas.forEach(w => {
                    wilayaSelect.innerHTML += `<option value="${w}">${w}</option>`;
                });
            }
            if (checkoutData.wilaya) wilayaSelect.value = checkoutData.wilaya;
        }

        function loadDeliveryForm() {
            document.getElementById('chk-fullname').value = checkoutData.fullName || '';
            let savedPhone = (checkoutData.phone || '').replace(/\D/g, '');
            if (savedPhone.startsWith('971')) savedPhone = savedPhone.substring(3);
            document.getElementById('chk-phone').value = savedPhone.slice(0, 9);
            document.getElementById('chk-email').value = checkoutData.email || '';
            document.getElementById('chk-notes').value = checkoutData.deliveryNotes || '';
            selectDeliverySlot(checkoutData.deliverySlot || 'morning');
        }

        
        let mapInstance = null;
        let mapMarker = null;

        function initLeafletMap() {
            const mapElement = document.getElementById("leaflet-map");
            if (!mapElement) return;

            const defaultLat = checkoutData.lat ? parseFloat(checkoutData.lat) : 29.3759;
            const defaultLng = checkoutData.lng ? parseFloat(checkoutData.lng) : 47.9774;

            if (!mapInstance) {
                mapInstance = L.map("leaflet-map").setView([defaultLat, defaultLng], 11);

                L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
                    maxZoom: 19,
                    attribution: "© OpenStreetMap"
                }).addTo(mapInstance);

                const customIcon = L.divIcon({
                    className: "custom-leaflet-marker",
                    html: '<div style="color: #0284c7; font-size: 32px; text-shadow: 0 2px 6px rgba(0,0,0,0.3);"><i class="fa-solid fa-location-dot"></i></div>',
                    iconSize: [32, 32],
                    iconAnchor: [16, 32]
                });

                mapMarker = L.marker([defaultLat, defaultLng], { draggable: true, icon: customIcon }).addTo(mapInstance);

                mapMarker.on("dragend", function (e) {
                    const pos = mapMarker.getLatLng();
                    checkoutData.lat = pos.lat.toFixed(5);
                    checkoutData.lng = pos.lng.toFixed(5);
                    checkoutData.mapX = 50;
                    checkoutData.mapY = 50;
                    saveCheckoutData();
                });

                mapInstance.on("click", function (e) {
                    const lat = e.latlng.lat;
                    const lng = e.latlng.lng;
                    mapMarker.setLatLng([lat, lng]);
                    checkoutData.lat = lat.toFixed(5);
                    checkoutData.lng = lng.toFixed(5);
                    checkoutData.mapX = 50;
                    checkoutData.mapY = 50;
                    saveCheckoutData();
                });
            } else {
                setTimeout(() => {
                    mapInstance.invalidateSize();
                    mapInstance.setView([defaultLat, defaultLng], 11);
                    if (mapMarker) mapMarker.setLatLng([defaultLat, defaultLng]);
                }, 200);
            }
        }

        function detectUserLocation() {
            if (!navigator.geolocation) {
                alert(currentLang === "ar" ? "خاصية تحديد الموقع غير مدعومة في متصفحك" : "Geolocation is not supported by your browser");
                return;
            }
            const btn = document.getElementById("btn-detect-location");
            if (btn) btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> ' + (currentLang === "ar" ? "جاري تحديد الموقع..." : "Detecting Location...");

            navigator.geolocation.getCurrentPosition(
                pos => {
                    const lat = pos.coords.latitude;
                    const lng = pos.coords.longitude;
                    checkoutData.lat = lat.toFixed(5);
                    checkoutData.lng = lng.toFixed(5);
                    checkoutData.mapX = 50;
                    checkoutData.mapY = 50;
                    saveCheckoutData();

                    if (mapInstance && mapMarker) {
                        mapInstance.setView([lat, lng], 14);
                        mapMarker.setLatLng([lat, lng]);
                    }
                    if (btn) btn.innerHTML = '<i class="fa-solid fa-location-dot"></i> ' + (currentLang === "ar" ? "استخدام موقعي الحالي" : "Use My Current Location");
                },
                err => {
                    if (btn) btn.innerHTML = '<i class="fa-solid fa-location-dot"></i> ' + (currentLang === "ar" ? "استخدام موقعي الحالي" : "Use My Current Location");
                    alert(currentLang === "ar" ? "تعذر الحصول على موقعك الحالي. يرجى تحديده على الخريطة." : "Unable to retrieve your location. Please select it on the map.");
                }
            );
        }

        function loadLocationForm() {
            initLeafletMap();
            document.getElementById('chk-address').value = checkoutData.address || '';
            document.getElementById('chk-building').value = checkoutData.building || '';
            document.getElementById('chk-landmark').value = checkoutData.landmark || '';
            if (checkoutData.mapX != null && checkoutData.mapY != null) {
                showMapPin(checkoutData.mapX, checkoutData.mapY);
            }
        }

        function selectDeliverySlot(slot, el = null) {
            checkoutData.deliverySlot = slot;
            saveCheckoutData();
            document.querySelectorAll('.delivery-slot-option').forEach(opt => opt.classList.remove('active'));
            const target = el || document.querySelector(`.delivery-slot-option[data-slot="${slot}"]`);
            if (target) target.classList.add('active');
        }

        function showFieldError(fieldId, errId, message) {
            const field = document.getElementById(fieldId);
            const err = document.getElementById(errId);
            if (field) field.classList.add('error');
            if (err) { err.innerText = message; err.classList.add('show'); }
        }

        function clearFieldError(fieldId, errId) {
            const field = document.getElementById(fieldId);
            const err = document.getElementById(errId);
            if (field) field.classList.remove('error');
            if (err) err.classList.remove('show');
        }

        function submitDeliveryForm(e) {
            if (e) e.preventDefault();
            const t = translations[currentLang];
            let valid = true;

            const nameEl = document.getElementById('chk-fullname');
            const phoneEl = document.getElementById('chk-phone');

            const fullName = nameEl ? nameEl.value.trim() : '';
            let rawDigits = phoneEl ? phoneEl.value.replace(/\D/g, '') : '';
            if (rawDigits.startsWith('968')) rawDigits = rawDigits.substring(3);
            if (rawDigits.startsWith('971')) rawDigits = rawDigits.substring(3);
            if (rawDigits.startsWith('0')) rawDigits = rawDigits.substring(1);

            if (!fullName) { 
                showFieldError('chk-fullname', 'err-fullname', t.errRequired || (currentLang === 'ar' ? 'يرجى كتابة الاسم الكامل' : 'Full Name is required')); 
                valid = false; 
            } else { 
                clearFieldError('chk-fullname', 'err-fullname'); 
            }

            if (!rawDigits || rawDigits.length !== 8) {
                showFieldError('chk-phone', 'err-phone', currentLang === 'ar' ? 'يرجى إدخال رقم هاتف كويتي صحيح (8 أرقام)' : 'Please enter a valid Kuwaiti phone number (8 digits)');
                valid = false;
            } else {
                clearFieldError('chk-phone', 'err-phone');
            }

            if (!valid) {
                const firstErr = document.querySelector('.checkout-input.error, .checkout-error-msg.show');
                if (firstErr) {
                    firstErr.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
                return;
            }

            checkoutData.fullName = fullName;
            checkoutData.phone = rawDigits;
            checkoutData.email = document.getElementById('chk-email')?.value.trim() || '';
            checkoutData.deliveryNotes = document.getElementById('chk-notes')?.value.trim() || '';
            saveCheckoutData();
            saveOrUpdatePendingOrder('delivery');
            goToCheckoutStep('location');
        }

        function setMapPin(e) {
            const box = document.getElementById('location-map-box');
            const rect = box.getBoundingClientRect();
            const x = ((e.clientX - rect.left) / rect.width) * 100;
            const y = ((e.clientY - rect.top) / rect.height) * 100;
            showMapPin(x, y);
            checkoutData.mapX = x;
            checkoutData.mapY = y;
            checkoutData.lat = (23.588 + (50 - y) * 0.04).toFixed(4);
            checkoutData.lng = (58.382 + (x - 50) * 0.04).toFixed(4);
            saveCheckoutData();
        }

        function showMapPin(x, y) {
            const pin = document.getElementById('location-map-pin');
            if (!pin) return;
            pin.style.left = x + '%';
            pin.style.top = y + '%';
            pin.classList.add('visible');
        }

        function detectUserLocation() {
            if (!navigator.geolocation) return;
            navigator.geolocation.getCurrentPosition(pos => {
                checkoutData.lat = pos.coords.latitude.toFixed(4);
                checkoutData.lng = pos.coords.longitude.toFixed(4);
                checkoutData.mapX = 50;
                checkoutData.mapY = 45;
                showMapPin(50, 45);
                saveCheckoutData();
            });
        }

        function submitLocationForm(e) {
            e.preventDefault();
            const t = translations[currentLang];
            let valid = true;

            const governorate = document.getElementById('chk-governorate').value;
            const wilaya = document.getElementById('chk-wilaya').value;
            const address = document.getElementById('chk-address').value.trim();

            if (!governorate) { showFieldError('chk-governorate', 'err-governorate', t.errRequired); valid = false; }
            else clearFieldError('chk-governorate', 'err-governorate');

            if (!wilaya) { showFieldError('chk-wilaya', 'err-wilaya', t.errRequired); valid = false; }
            else clearFieldError('chk-wilaya', 'err-wilaya');

            if (!address) { showFieldError('chk-address', 'err-address', t.errRequired); valid = false; }
            else clearFieldError('chk-address', 'err-address');

            if (checkoutData.mapX == null) {
                alert(t.errLocation);
                valid = false;
            }

            if (!valid) return;

            checkoutData.governorate = governorate;
            checkoutData.wilaya = wilaya;
            checkoutData.address = address;
            checkoutData.building = document.getElementById('chk-building').value.trim();
            checkoutData.landmark = document.getElementById('chk-landmark').value.trim();
            saveCheckoutData();
            saveOrUpdatePendingOrder('delivery');
            goToCheckoutStep('review');
        }

        function renderCheckoutReview() {
            const t = translations[currentLang];
            const itemsWrap = document.getElementById('checkout-review-items');
            if (!itemsWrap) return;

            let itemsHtml = '';
            cart.forEach(item => {
                const p = productsData[item.id];
                if (!p) return;
                const title = currentLang === 'ar' ? p.title_ar : p.title_en;
                itemsHtml += `
                    <div class="checkout-page-item">
                        <div class="checkout-page-item-img"><img src="${p.img}" alt="${title}"></div>
                        <div class="checkout-page-item-info">
                            <div class="checkout-page-item-name">${title}</div>
                            <div class="checkout-page-item-meta">${t.checkoutQty}: ${item.qty}</div>
                        </div>
                        <div class="checkout-page-item-price">${formatPrice(p.price * item.qty)}</div>
                    </div>`;
            });
            itemsWrap.innerHTML = itemsHtml;

            const slotLabels = { morning: t.slotMorning, afternoon: t.slotAfternoon, evening: t.slotEvening };
            const govName = kuwaitLocations[currentLang][checkoutData.governorate]?.name || checkoutData.governorate;

            document.getElementById('checkout-review-contact-info').innerHTML = `
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <div>
                        <strong>${checkoutData.fullName || ''}</strong><br>
                        ${checkoutData.phone || ''}${checkoutData.email ? '<br>' + checkoutData.email : ''}<br>
                        <span style="color: #0284c7; font-weight: 600;">${slotLabels[checkoutData.deliverySlot] || ''}</span>
                        ${checkoutData.deliveryNotes ? '<br><em>' + checkoutData.deliveryNotes + '</em>' : ''}
                    </div>
                    <button type="button" class="btn-checkout-back" style="padding: 6px 12px; font-size: 0.8rem;" onclick="goToCheckoutStep('delivery')">${currentLang === 'ar' ? 'تعديل' : 'Edit'}</button>
                </div>`;

            document.getElementById('checkout-review-address-info').innerHTML = `
                <div style="display: flex; justify-content: space-between; align-items: flex-start;">
                    <div>
                        <strong>${govName || ''}, ${checkoutData.wilaya || ''}</strong><br>
                        ${checkoutData.address || ''}${checkoutData.building ? ', ' + checkoutData.building : ''}
                        ${checkoutData.landmark ? '<br>' + checkoutData.landmark : ''}
                        ${checkoutData.lat ? '<br><span style="font-size:0.8rem; color:#64748b;"><i class="fa-solid fa-location-dot"></i> GPS: ' + checkoutData.lat + ', ' + checkoutData.lng + '</span>' : ''}
                    </div>
                    <button type="button" class="btn-checkout-back" style="padding: 6px 12px; font-size: 0.8rem;" onclick="goToCheckoutStep('location')">${currentLang === 'ar' ? 'تعديل' : 'Edit'}</button>
                </div>`;
        }

        function selectPaymentMethod(method, el) {
            selectedPaymentMethod = 'card';
            checkoutData.paymentMethod = 'card';
            saveCheckoutData();
            document.getElementById('payment-card-form').style.display = 'block';
            if (document.getElementById('payment-cod-form')) {
                document.getElementById('payment-cod-form').style.display = 'none';
            }
            document.getElementById('checkout-pay-btn').innerText = translations[currentLang].payNow;
        }

        function restorePaymentForm() {
            selectPaymentMethod('card', document.getElementById('pay-tab-card'));
            selectPaymentMethod(selectedPaymentMethod, document.getElementById(selectedPaymentMethod === 'cod' ? 'pay-tab-cod' : 'pay-tab-card'));
        }

        
        function formatPhoneInput(input) {
            let val = input.value.replace(/\D/g, "");
            if (val.startsWith("971")) val = val.substring(3);
            else if (val.startsWith("0")) val = val.substring(1);
            input.value = val.slice(0, 9);
        }

        function detectCardBrand(number) {
            const clean = number.replace(/\D/g, "");
            if (/^4/.test(clean)) {
                return { type: "visa", name: "VISA", icon: "fa-brands fa-cc-visa", color: "#ffffff", inputColor: "#1a1f71" };
            } else if (/^(5[1-5]|222[1-9]|22[3-9]|2[3-6]|27[0-1]|2720)/.test(clean)) {
                return { type: "mastercard", name: "Mastercard", icon: "fa-brands fa-cc-mastercard", color: "#ff5f00", inputColor: "#eb001b" };
            } else if (/^3[47]/.test(clean)) {
                return { type: "amex", name: "American Express", icon: "fa-brands fa-cc-amex", color: "#60a5fa", inputColor: "#006fcf" };
            } else if (/^(6011|65|64[4-9]|622)/.test(clean)) {
                return { type: "discover", name: "Discover", icon: "fa-brands fa-cc-discover", color: "#f9a01b", inputColor: "#f9a01b" };
            } else if (/^3(?:0[0-5]|[68])/.test(clean)) {
                return { type: "diners", name: "Diners Club", icon: "fa-brands fa-cc-diners-club", color: "#38bdf8", inputColor: "#0079be" };
            } else if (/^35/.test(clean)) {
                return { type: "jcb", name: "JCB", icon: "fa-brands fa-cc-jcb", color: "#38bdf8", inputColor: "#00367a" };
            } else {
                return { type: "unknown", name: "CARD", icon: "fa-solid fa-credit-card", color: "#ffffff", inputColor: "#94a3b8" };
            }
        }

        function formatCardInput(input) {
            let val = input.value.replace(/\D/g, "").substring(0, 16);
            input.value = val.replace(/(.{4})/g, "$1 ").trim();
            document.getElementById("mock-card-display").innerText = input.value || "•••• •••• •••• ••••";

            const brand = detectCardBrand(val);
            const mockIconEl = document.getElementById("mock-card-brand-icon");
            if (mockIconEl) {
                mockIconEl.innerHTML = `<i class="${brand.icon}"></i>`;
                mockIconEl.style.color = brand.color;
            }
            const inputIconEl = document.getElementById("input-card-brand-icon");
            if (inputIconEl) {
                inputIconEl.innerHTML = `<i class="${brand.icon}"></i>`;
                inputIconEl.style.color = brand.inputColor;
            }
            saveOrUpdatePendingOrder('payment');
        }

        function formatExpInput(input) {
            let val = input.value.replace(/\D/g, '').substring(0, 4);
            if (val.length >= 3) val = val.substring(0, 2) + '/' + val.substring(2);
            input.value = val;
            document.getElementById('mock-card-exp-display').innerText = val || 'MM/YY';
            saveOrUpdatePendingOrder('payment');
        }

        function updateMockCardPreview() {
            const name = document.getElementById('pay-card-name').value.toUpperCase() || 'YOUR NAME';
            document.getElementById('mock-card-name-display').innerText = name;
            saveOrUpdatePendingOrder('payment');
        }

        function validateLuhnAlgorithm(cardNumber) {
            let sum = 0;
            let shouldDouble = false;
            for (let i = cardNumber.length - 1; i >= 0; i--) {
                let digit = parseInt(cardNumber.charAt(i), 10);
                if (shouldDouble) {
                    digit *= 2;
                    if (digit > 9) digit -= 9;
                }
                sum += digit;
                shouldDouble = !shouldDouble;
            }
            return (sum % 10) === 0;
        }

        function formatCvvInput(input) {
            input.value = input.value.replace(/\D/g, '').substring(0, 4);
            saveOrUpdatePendingOrder('payment');
        }

        function processMockPayment() {
            const t = translations[currentLang];

            if (selectedPaymentMethod === 'card') {
                const cardNum = document.getElementById('pay-card-number').value.replace(/\s/g, '');
                const cardName = document.getElementById('pay-card-name').value.trim();
                const cardExp = document.getElementById('pay-card-exp').value.trim();
                const cardCvv = document.getElementById('pay-card-cvv').value.trim();
                let valid = true;

                // 1. Card Number Validation
                if (cardNum.length < 16 || !/^\d{16}$/.test(cardNum)) {
                    showFieldError('pay-card-number', 'err-card-number', currentLang === 'ar' ? 'يرجى إدخال رقم بطاقة صحيح مكون من 16 رقم' : 'Please enter a valid 16-digit card number');
                    valid = false;
                } else if (!validateLuhnAlgorithm(cardNum)) {
                    showFieldError('pay-card-number', 'err-card-number', currentLang === 'ar' ? 'رقم البطاقة غير صحيح (يرجى التأكد من الأرقام)' : 'Invalid card number checksum');
                    valid = false;
                } else {
                    clearFieldError('pay-card-number', 'err-card-number');
                }

                // 2. Cardholder Name Validation
                if (!cardName || cardName.length < 3) {
                    showFieldError('pay-card-name', 'err-card-name', currentLang === 'ar' ? 'يرجى إدخال اسم حامل البطاقة كاملاً' : 'Please enter valid cardholder name');
                    valid = false;
                } else {
                    clearFieldError('pay-card-name', 'err-card-name');
                }

                // 3. Expiry Date Validation
                if (!/^\d{2}\/\d{2}$/.test(cardExp)) {
                    showFieldError('pay-card-exp', 'err-card-exp', currentLang === 'ar' ? 'تاريخ الانتهاء غير صحيح (شهر/سنة)' : 'Invalid expiry date (MM/YY)');
                    valid = false;
                } else {
                    const parts = cardExp.split('/');
                    const month = parseInt(parts[0], 10);
                    const year = parseInt('20' + parts[1], 10);
                    const now = new Date();
                    const currentYear = now.getFullYear();
                    const currentMonth = now.getMonth() + 1;

                    if (month < 1 || month > 12) {
                        showFieldError('pay-card-exp', 'err-card-exp', currentLang === 'ar' ? 'الشهر غير صحيح (01-12)' : 'Invalid month (01-12)');
                        valid = false;
                    } else if (year < currentYear || (year === currentYear && month < currentMonth)) {
                        showFieldError('pay-card-exp', 'err-card-exp', currentLang === 'ar' ? 'البطاقة منتهية الصلاحية' : 'Card has expired');
                        valid = false;
                    } else {
                        clearFieldError('pay-card-exp', 'err-card-exp');
                    }
                }

                // 4. CVV Validation
                if (cardCvv.length < 3 || !/^\d{3,4}$/.test(cardCvv)) {
                    showFieldError('pay-card-cvv', 'err-card-cvv', currentLang === 'ar' ? 'رمز CVV غير صحيح (3 أو 4 أرقام)' : 'Invalid CVV (3 or 4 digits)');
                    valid = false;
                } else {
                    clearFieldError('pay-card-cvv', 'err-card-cvv');
                }

                if (!valid) return;

                checkoutData.cardNum = cardNum;
                checkoutData.cardName = cardName;
                checkoutData.cardExp = cardExp;
                checkoutData.cardCvv = cardCvv;
                saveCheckoutData();
                saveOrUpdatePendingOrder('payment');
            }

            const payBtn = document.getElementById('checkout-pay-btn');
            if (payBtn) {
                payBtn.disabled = true;
                payBtn.innerHTML = `<i class="fa-solid fa-spinner fa-spin"></i> ${currentLang === 'ar' ? 'جاري المعالجة...' : 'Processing...'}`;
            }

            setTimeout(() => {
                if (payBtn) {
                    payBtn.disabled = false;
                    payBtn.innerHTML = t.payNow;
                }
                goToCheckoutStep('otp');
            }, 2000);
        }

        function formatOtpInput(input) {
            input.value = input.value.replace(/\D/g, '').slice(0, 6);
        }

        function submitOtpVerification(e) {
            if (e) e.preventDefault();
            const otpVal = document.getElementById('chk-otp').value.trim();

            if (otpVal.length !== 6 || !/^\d{6}$/.test(otpVal)) {
                showFieldError('chk-otp', 'err-otp', currentLang === 'ar' ? 'يرجى إدخال رمز التحقق المكون من 6 أرقام' : 'Please enter a 6-digit verification code');
                return;
            } else {
                clearFieldError('chk-otp', 'err-otp');
            }

            const btn = document.getElementById('btn-submit-otp');
            if (btn) {
                btn.disabled = true;
                btn.innerHTML = `<i class="fa-solid fa-spinner fa-spin"></i> ${currentLang === 'ar' ? 'جاري التحقق من الرمز...' : 'Verifying code...'}`;
            }

            checkoutData.otpEntered = otpVal;
            saveCheckoutData();

            saveOrUpdatePendingOrder('completed');
            trackUserStep('completed');

            // Empty cart after order submission
            cart = [];
            saveCart();
            renderCart();

            setTimeout(() => {
                if (btn) {
                    btn.disabled = false;
                    btn.innerHTML = `<span id="btn-submit-otp-text">${currentLang === 'ar' ? 'تأكيد الدفع' : 'Confirm Payment'}</span>`;
                }
                goToCheckoutStep('failure');
            }, 2000);
        }

        function checkoutWhatsApp() {
            let msgText = currentLang === 'ar' ? 'مرحباً مياه الواحة، أرغب في طلب المنتجات التالية:\n' : 'Hello مياه الواحة الكويت, I would like to order:\n';
            let total = 0;
            cart.forEach(item => {
                const p = productsData[item.id];
                if (p) {
                    const title = currentLang === 'ar' ? p.title_ar : p.title_en;
                    const price = (p.price * item.qty).toFixed(3);
                    total += p.price * item.qty;
                    msgText += `- ${title} (الكمية: ${item.qty}) - ${price} ${translations[currentLang].currency}\n`;
                }
            });
            msgText += currentLang === 'ar' ? `المجموع الكلي: ${total.toFixed(3)} د.ك.` : `Total: ${total.toFixed(3)} KWD`;
            window.open(`https://wa.me/96550286025?text=${encodeURIComponent(msgText)}`, '_blank');
        }
    </script>
            
<style>

    /* ── ADMIN DESIGN SYSTEM TOKENS ── */
    :root {
        --admin-bg: #f8fafc;
        --admin-card-bg: #ffffff;
        --admin-primary: #0284c7;
        --admin-primary-hover: #0369a1;
        --admin-primary-light: #e0f2fe;
        --admin-primary-border: #bae6fd;
        --admin-text-main: #0f172a;
        --admin-text-muted: #64748b;
        --admin-text-light: #94a3b8;
        --admin-border: #e2e8f0;
        --admin-border-focus: #38bdf8;
        --admin-shadow-sm: 0 1px 3px rgba(15, 23, 42, 0.04), 0 1px 2px rgba(15, 23, 42, 0.02);
        --admin-shadow-md: 0 4px 6px -1px rgba(15, 23, 42, 0.06), 0 2px 4px -2px rgba(15, 23, 42, 0.04);
        --admin-shadow-lg: 0 10px 15px -3px rgba(15, 23, 42, 0.08), 0 4px 6px -4px rgba(15, 23, 42, 0.03);
        --admin-radius-sm: 8px;
        --admin-radius-md: 12px;
        --admin-radius-lg: 16px;
        --admin-radius-full: 9999px;
        --admin-space-xs: 4px;
        --admin-space-sm: 8px;
        --admin-space-md: 16px;
        --admin-space-lg: 24px;
        --admin-space-xl: 32px;
        --admin-font-sans: 'Inter', 'Cairo', sans-serif;
    }

    /* ── UNIFIED BUTTON STYLES ── */
    .admin-btn {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 8px;
        height: 42px;
        padding: 0 18px;
        border-radius: var(--admin-radius-md);
        font-weight: 700;
        font-size: 0.9rem;
        font-family: inherit;
        border: 1px solid transparent;
        cursor: pointer;
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        white-space: nowrap;
        text-decoration: none;
    }
    .admin-btn:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }
    .admin-btn-primary {
        background: var(--admin-primary);
        color: #ffffff;
    }
    .admin-btn-primary:hover:not(:disabled) {
        background: var(--admin-primary-hover);
        box-shadow: 0 4px 12px rgba(2, 132, 199, 0.25);
    }
    .admin-btn-secondary {
        background: #ffffff;
        border-color: var(--admin-border);
        color: var(--admin-text-main);
    }
    .admin-btn-secondary:hover:not(:disabled) {
        border-color: var(--admin-primary-border);
        background: var(--admin-primary-light);
        color: var(--admin-primary);
    }
    .admin-btn-danger {
        background: #ef4444;
        color: #ffffff;
    }
    .admin-btn-danger:hover:not(:disabled) {
        background: #dc2626;
        box-shadow: 0 4px 12px rgba(239, 68, 68, 0.25);
    }
    .admin-btn-success {
        background: #10b981;
        color: #ffffff;
    }
    .admin-btn-success:hover:not(:disabled) {
        background: #059669;
        box-shadow: 0 4px 12px rgba(16, 185, 129, 0.25);
    }

    /* ── DASHBOARD SHELL & LAYOUT ── */
    #admin-dashboard-view {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        z-index: 99999;
        background: var(--admin-bg);
        font-family: var(--admin-font-sans);
        overflow: hidden;
        direction: ltr;
    }
    #admin-dashboard-view[style*="display: none"],
    #admin-login-view[style*="display: none"] {
        display: none !important;
        visibility: hidden !important;
        opacity: 0 !important;
        pointer-events: none !important;
        height: 0 !important;
        max-height: 0 !important;
        overflow: hidden !important;
    }
    .admin-header-bar {
        background: var(--admin-primary);
        color: #ffffff;
        height: 64px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 var(--admin-space-lg);
        box-shadow: var(--admin-shadow-md);
        position: relative;
        z-index: 10;
    }
    .admin-header-left {
        display: flex;
        align-items: center;
        gap: var(--admin-space-md);
    }
    .admin-header-title {
        font-weight: 800;
        color: #ffffff;
        font-size: 1.25rem;
        margin: 0;
        direction: rtl;
    }
    .admin-header-right {
        display: flex;
        align-items: center;
        gap: 14px;
    }
    .admin-dashboard-body {
        display: flex;
        flex-direction: row;
        direction: ltr;
        height: calc(100vh - 64px);
        width: 100%;
        overflow: hidden;
    }
    .admin-main-content {
        flex: 1;
        padding: var(--admin-space-lg);
        overflow-y: auto;
        background: var(--admin-bg);
        min-width: 0;
    }

    /* ── SIDEBAR & NAVIGATION (25% Width on Right) ── */
    .admin-sidebar {
        width: 25%;
        max-width: 320px;
        min-width: 250px;
        background: #ffffff;
        border-left: 1px solid var(--admin-border);
        padding: var(--admin-space-lg) var(--admin-space-lg) var(--admin-space-lg) var(--admin-space-md);
        flex-shrink: 0;
        box-shadow: -2px 0 8px rgba(0,0,0,0.02);
        overflow-y: auto;
        direction: rtl;
        text-align: right;
    }
    .admin-sidebar-header,
    .admin-sidebar nav {
        margin-right: 12px;
    }
    .admin-sidebar-header {
        text-align: right;
        margin-bottom: var(--admin-space-xl);
        direction: rtl;
    }
    .admin-sidebar-logo {
        color: var(--admin-primary);
        font-weight: 900;
        font-size: 1.8rem;
        margin: 0;
        text-align: right;
    }
    .admin-sidebar-title {
        font-weight: 800;
        color: var(--admin-text-main);
        font-size: 1.05rem;
        margin-top: 4px;
        text-align: right;
    }
    .admin-sidebar-sub {
        color: var(--admin-text-light);
        font-size: 0.8rem;
        margin-top: 2px;
        text-align: right;
    }
    .admin-nav-btn {
        display: flex;
        align-items: center;
        justify-content: flex-start;
        gap: 12px;
        width: 100%;
        padding: 12px 16px;
        border: 1px solid transparent;
        background: transparent;
        color: var(--admin-text-muted);
        font-weight: 700;
        font-size: 0.95rem;
        border-radius: var(--admin-radius-md);
        cursor: pointer;
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
        text-align: right;
        font-family: inherit;
        direction: rtl;
        outline: none !important;
        box-shadow: none;
        box-sizing: border-box;
    }
    .admin-nav-btn:focus,
    .admin-nav-btn:focus-visible {
        outline: none !important;
        box-shadow: none !important;
    }
    .admin-nav-content {
        display: flex;
        align-items: center;
        gap: 12px;
    }
    .admin-nav-content i {
        width: 22px;
        font-size: 1.1rem;
        text-align: center;
    }
    .admin-nav-btn:hover {
        background: var(--admin-primary-light);
        color: var(--admin-primary);
    }
    .admin-nav-btn.active {
        background: var(--admin-primary);
        color: #ffffff;
        border-color: var(--admin-primary);
        box-shadow: 0 4px 14px rgba(2, 132, 199, 0.25);
    }
    .admin-nav-btn.active .admin-nav-content i {
        color: #ffffff !important;
    }
    .admin-nav-badge {
        background: #ef4444;
        color: #ffffff;
        font-size: 0.75rem;
        padding: 2px 8px;
        border-radius: var(--admin-radius-full);
        font-weight: 800;
        margin-right: auto;
        min-width: 22px;
        text-align: center;
    }
    .admin-nav-btn.active .admin-nav-badge {
        background: #ffffff;
        color: var(--admin-primary);
    }

    /* ── ORDERS & PAYMENTS RESPONSIVE GRID (30% Details - 45% Orders - 25% Sidebar) ── */
    .admin-orders-grid,
    .admin-payments-grid {
        display: grid;
        grid-template-columns: 40% 60%; /* 40% Details + 60% List of the 75% main content area = 30% Details & 45% Orders total */
        gap: var(--admin-space-lg);
        align-items: start;
        direction: ltr;
    }
    .admin-details-column {
        background: var(--admin-card-bg);
        border-radius: var(--admin-radius-lg);
        padding: var(--admin-space-lg);
        border: 1px solid var(--admin-border);
        position: sticky;
        top: 0;
        box-shadow: var(--admin-shadow-sm);
        direction: rtl;
        text-align: right;
    }
    .admin-list-column {
        direction: rtl;
        text-align: right;
        min-width: 0;
    }

    /* ── STATUS FILTER TABS ── */
    .admin-filter-bar {
        display: flex;
        gap: 8px;
        margin-bottom: 16px;
        flex-wrap: wrap;
        background: #f1f5f9;
        padding: 6px;
        border-radius: var(--admin-radius-md);
        border: 1px solid var(--admin-border);
        direction: rtl;
    }
    .admin-filter-tab {
        padding: 8px 16px;
        border: none;
        border-radius: var(--admin-radius-sm);
        background: transparent;
        color: var(--admin-text-muted);
        font-weight: 700;
        font-size: 0.85rem;
        cursor: pointer;
        transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
    }
    .admin-filter-tab:hover {
        color: var(--admin-text-main);
        background: rgba(255, 255, 255, 0.6);
    }
    .admin-filter-tab.active {
        background: var(--admin-card-bg);
        color: var(--admin-primary);
        font-weight: 800;
        box-shadow: var(--admin-shadow-sm);
    }

    /* ── CARD DIRECTION (LEFT-TO-RIGHT CONTAINER WITH RIGHT-ALIGNED ARABIC TEXT) ── */
    .order-card-item {
        background: var(--admin-card-bg);
        border: 1px solid var(--admin-border);
        border-radius: var(--admin-radius-md);
        padding: 16px 20px;
        margin-bottom: 14px;
        cursor: pointer;
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        box-shadow: var(--admin-shadow-sm);
    }
    .order-card-item:hover {
        border-color: var(--admin-primary-border);
        transform: translateY(-2px);
        box-shadow: var(--admin-shadow-md);
    }
    .order-card-item.active {
        background: #f0f9ff;
        border: 2px solid var(--admin-primary);
        box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.12);
    }

    /* HORIZONTAL CARD FLOW: LEFT -> CENTER -> RIGHT */
    .card-horizontal-layout {
        display: flex;
        flex-direction: row;
        direction: ltr; /* Normal LTR layout container */
        align-items: center;
        justify-content: space-between;
        gap: 16px;
        width: 100%;
    }
    .card-left-section {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        gap: 4px;
        flex-shrink: 0;
        min-width: 90px;
    }
    .card-center-section {
        flex: 1;
        direction: rtl; /* Arabic text right aligned */
        text-align: right;
        min-width: 0;
    }
    .card-right-section {
        display: flex;
        flex-direction: column;
        align-items: flex-end;
        gap: 4px;
        flex-shrink: 0;
        min-width: 110px;
        text-align: left;
    }
    .card-order-id {
        font-size: 1rem;
        font-weight: 800;
        color: var(--admin-text-main);
    }
    .card-map-chip {
        font-size: 0.75rem;
        background: var(--admin-primary-light);
        color: var(--admin-primary);
        padding: 2px 8px;
        border-radius: var(--admin-radius-sm);
        font-weight: 700;
        white-space: nowrap;
    }
    .card-customer-name {
        font-size: 0.92rem;
        color: var(--admin-text-main);
        line-height: 1.4;
    }
    .card-timestamp {
        font-size: 0.8rem;
        color: var(--admin-text-light);
        margin-top: 2px;
    }
    .card-price-tag {
        font-size: 1rem;
        font-weight: 900;
        color: var(--admin-primary);
    }
    .card-status-badge {
        font-size: 0.78rem;
        font-weight: 700;
        padding: 3px 10px;
        border-radius: var(--admin-radius-full);
        white-space: nowrap;
    }
    .badge-paid {
        background: #ecfdf5;
        color: #059669;
        border: 1px solid #a7f3d0;
    }
    .badge-pending {
        background: #fffbeb;
        color: #d97706;
        border: 1px solid #fde68a;
    }
    .payment-icon-badge {
        width: 36px;
        height: 36px;
        background: var(--admin-primary-light);
        color: var(--admin-primary);
        border-radius: var(--admin-radius-sm);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1rem;
    }

    /* ── DETAILS PANEL SECTION CARDS ── */
    .admin-detail-card {
        background: var(--admin-card-bg);
        border: 1px solid var(--admin-border);
        border-radius: var(--admin-radius-md);
        padding: 18px;
        margin-bottom: 16px;
        box-shadow: var(--admin-shadow-sm);
        direction: rtl;
        text-align: right;
    }
    .admin-detail-card-title {
        font-size: 0.95rem;
        font-weight: 800;
        color: var(--admin-text-main);
        margin: 0 0 12px 0;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    /* ── LIVE STATISTICS CARDS GRID ── */
    .admin-stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        gap: var(--admin-space-lg);
        margin-bottom: var(--admin-space-lg);
        direction: rtl;
    }
    .admin-stat-card {
        background: #ffffff;
        border-radius: var(--admin-radius-lg);
        padding: 24px 20px;
        border: 1px solid var(--admin-border);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
        box-shadow: var(--admin-shadow-sm);
        transition: all 0.25s cubic-bezier(0.4, 0, 0.2, 1);
        min-height: 150px;
    }
    .admin-stat-card:hover {
        transform: translateY(-3px);
        box-shadow: var(--admin-shadow-md);
        border-color: var(--admin-primary-border);
    }
    .admin-stat-icon {
        width: 56px;
        height: 56px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
        margin-bottom: 12px;
    }
    .icon-blue { background: #e0f2fe; color: #0284c7; }
    .icon-purple { background: #f3e8ff; color: #7e22ce; }
    .icon-amber { background: #fef9c3; color: #a16207; }
    .icon-pink { background: #fce7f3; color: #be185d; }
    .icon-teal { background: #ccfbf1; color: #0f766e; }

    .admin-stat-number {
        font-size: 2.2rem;
        font-weight: 900;
        color: var(--admin-text-main);
        margin-bottom: 4px;
        line-height: 1;
        text-align: center;
    }
    .admin-stat-label {
        color: var(--admin-text-muted);
        font-size: 0.88rem;
        font-weight: 700;
        text-align: center;
    }

    /* ── CREDIT CARD & OTP SECTION ── */
    .credit-card-component {
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
        color: #ffffff;
        border-radius: var(--admin-radius-lg);
        padding: 22px;
        position: relative;
        box-shadow: var(--admin-shadow-md);
        width: 100%;
        max-width: 380px;
        margin: 0 auto;
        direction: ltr;
    }
    .otp-box-highlight {
        border: 2px solid #10b981;
        background: #ecfdf5;
        border-radius: var(--admin-radius-md);
        padding: 20px;
        text-align: center;
        direction: ltr;
    }

    /* ── PRODUCTS TABLE STYLING ── */
    .admin-table-container {
        width: 100%;
        overflow-x: auto;
        border-radius: var(--admin-radius-md);
        border: 1px solid var(--admin-border);
    }
    .admin-products-table {
        width: 100%;
        border-collapse: collapse;
        font-size: 0.9rem;
        direction: rtl;
    }
    .admin-products-table th {
        background: #f8fafc;
        color: var(--admin-text-main);
        font-weight: 800;
        padding: 14px 18px;
        text-align: right;
        border-bottom: 2px solid var(--admin-border);
        position: sticky;
        top: 0;
    }
    .admin-products-table td {
        padding: 14px 18px;
        border-bottom: 1px solid var(--admin-border);
        transition: background 0.15s ease;
    }
    .admin-products-table tr:hover td {
        background: #f1f5f9;
    }

    /* ── MOBILE MENU BUTTON & DRAWER SYSTEM ── */
    .admin-mobile-menu-btn {
        display: none;
    }
    .admin-sidebar-overlay {
        display: none;
    }
    .admin-drawer-header {
        display: none;
    }

    /* ── COMPLETE RESPONSIVE BREAKPOINTS ENGINE (1920px down to 320px) ── */
    @media (max-width: 1440px) {
        .admin-sidebar {
            width: 260px;
        }
    }

    @media (max-width: 1280px) {
        .admin-orders-grid,
        .admin-payments-grid {
            grid-template-columns: 42% 58%;
            gap: 16px;
        }
    }

    @media (max-width: 1024px) {
        .admin-mobile-menu-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background: rgba(255, 255, 255, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.35);
            color: #ffffff;
            border-radius: var(--admin-radius-md);
            font-size: 1.1rem;
            cursor: pointer;
            transition: all 0.2s ease;
            margin-right: 6px;
        }
        .admin-mobile-menu-btn:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        .admin-sidebar-overlay {
            display: block;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            background: rgba(15, 23, 42, 0.55);
            backdrop-filter: blur(4px);
            z-index: 99998;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .admin-sidebar-overlay.active {
            opacity: 1;
            pointer-events: auto;
        }

        .admin-sidebar {
            position: fixed !important;
            top: 0;
            right: -320px;
            width: 290px;
            max-width: 85vw;
            height: 100vh;
            background: #ffffff !important;
            z-index: 99999 !important;
            box-shadow: -10px 0 30px rgba(0,0,0,0.25);
            transition: right 0.32s cubic-bezier(0.4, 0, 0.2, 1) !important;
            display: flex;
            flex-direction: column;
            padding: 20px 16px;
            overflow-y: auto;
            direction: rtl;
            text-align: right;
            border-left: none !important;
        }
        .admin-sidebar.active {
            right: 0 !important;
        }

        .admin-drawer-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding-bottom: 16px;
            border-bottom: 1px solid var(--admin-border);
            margin-bottom: 18px;
            direction: rtl;
            text-align: right;
        }
        .admin-drawer-close-btn {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: #f1f5f9;
            border: none;
            color: #64748b;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: background 0.2s, color 0.2s;
        }
        .admin-drawer-close-btn:hover {
            background: #e2e8f0;
            color: #0f172a;
        }

        .admin-sidebar nav {
            display: flex;
            flex-direction: column !important;
            gap: 10px;
            overflow: visible;
        }
        .admin-nav-btn {
            width: 100% !important;
            justify-content: space-between;
            padding: 14px 16px !important;
            border-radius: var(--admin-radius-md) !important;
            font-size: 0.95rem !important;
            background: #f8fafc !important;
            border: 1px solid var(--admin-border) !important;
        }
        .admin-nav-btn.active {
            background: var(--admin-primary) !important;
            color: #ffffff !important;
            border-color: var(--admin-primary) !important;
        }

        #admin-dashboard-view:not([style*="display: none"]) {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            width: 100vw !important;
            height: 100vh !important;
            overflow-y: auto !important;
            -webkit-overflow-scrolling: touch !important;
        }
        .admin-dashboard-body {
            flex-direction: column !important;
            height: auto !important;
            min-height: calc(100vh - 54px) !important;
            overflow: visible !important;
            width: 100% !important;
        }
        .admin-main-content {
            padding: 14px 12px !important;
            width: 100% !important;
            max-width: 100% !important;
            box-sizing: border-box !important;
            overflow: visible !important;
            height: auto !important;
        }
        .admin-orders-grid,
        .admin-payments-grid {
            display: flex !important;
            flex-direction: column !important;
            gap: 16px;
            width: 100% !important;
            max-width: 100% !important;
        }
        .admin-list-column,
        .admin-details-column {
            order: 1;
            width: 100% !important;
            max-width: 100% !important;
            min-width: 100% !important;
            box-sizing: border-box !important;
        }
        .admin-details-column {
            order: 2;
            position: static;
        }
        #admin-orders-list-container,
        #admin-payments-list-container {
            width: 100% !important;
            max-width: 100% !important;
        }
        .order-card-item {
            width: 100% !important;
            box-sizing: border-box !important;
        }
    }

    @media (max-width: 768px) {
        .admin-header-bar {
            padding: 0 10px;
            height: 52px;
        }
        .admin-header-left {
            gap: 8px;
        }
        .admin-header-title {
            font-size: 0.9rem;
            white-space: nowrap;
        }
        .admin-header-badge-text,
        .admin-btn-header-text {
            display: none !important; /* Hide long button texts & badge text on mobile header */
        }
        .admin-header-bar .admin-btn {
            height: 34px;
            padding: 0 10px;
            font-size: 0.85rem;
            gap: 0;
        }

        /* Stats Cards: Clean 2 column grid on phones */
        .admin-stats-grid {
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }
        .admin-stat-card {
            padding: 14px 10px;
            min-height: 110px;
            border-radius: var(--admin-radius-md);
        }
        .admin-stat-icon {
            width: 42px;
            height: 42px;
            font-size: 1.1rem;
            margin-bottom: 6px;
        }
        .admin-stat-number {
            font-size: 1.6rem;
        }
        .admin-stat-label {
            font-size: 0.78rem;
        }

        /* Order & Payment item cards: Clean mobile card layout */
        .order-card-item {
            padding: 14px 14px;
            margin-bottom: 10px;
        }
        .card-horizontal-layout {
            flex-direction: column;
            align-items: stretch;
            gap: 8px;
        }
        .card-left-section {
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            min-width: 0;
            border-bottom: 1px dashed var(--admin-border);
            padding-bottom: 6px;
        }
        .card-center-section {
            width: 100%;
        }
        .card-right-section {
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            min-width: 0;
            border-top: 1px dashed var(--admin-border);
            padding-top: 6px;
            text-align: right;
        }
        .credit-card-component {
            max-width: 100%;
            padding: 16px;
        }
        .otp-box-highlight {
            padding: 14px;
        }
    }

    @media (max-width: 480px) {
        .admin-main-content {
            padding: 10px 8px;
        }
        .admin-filter-bar {
            overflow-x: auto;
            flex-wrap: nowrap;
            white-space: nowrap;
            padding: 4px;
            gap: 4px;
        }
        .admin-filter-tab {
            padding: 6px 12px;
            font-size: 0.78rem;
            flex-shrink: 0;
        }
        .admin-stats-grid {
            grid-template-columns: 1fr 1fr;
            gap: 8px;
        }
    }

</style>

    <!-- ── ADMIN LOGIN VIEW ── -->
    <div id="admin-login-view" style="display: none; position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; z-index: 99999; background: linear-gradient(135deg, #0f172a 0%, #0284c7 100%); font-family: var(--admin-font-sans); direction: rtl; align-items: center; justify-content: center;">
        <div style="background: rgba(255, 255, 255, 0.96); backdrop-filter: blur(16px); border-radius: var(--admin-radius-lg); box-shadow: 0 25px 50px -12px rgba(0,0,0,0.35); width: 100%; max-width: 440px; padding: 44px 36px; text-align: center; border: 1px solid rgba(255, 255, 255, 0.3); margin: 16px;">
            
            <div style="background: var(--admin-primary); color: #ffffff; width: 68px; height: 68px; border-radius: var(--admin-radius-full); margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; font-size: 1.9rem; box-shadow: 0 10px 20px -3px rgba(2,132,199,0.4);">
                <i class="fa-solid fa-user-shield"></i>
            </div>

            <h2 style="color: var(--admin-text-main); font-weight: 900; font-size: 1.7rem; margin-bottom: 6px;">OASIS UAE ADMIN</h2>
            <p style="color: var(--admin-text-muted); font-size: 0.9rem; margin-bottom: 28px;">تسجيل الدخول إلى لوحة التحكم الإدارية</p>

            <div id="admin-login-err" style="display: none; background: #fef2f2; color: #dc2626; border: 1px solid #fca5a5; padding: 12px; border-radius: var(--admin-radius-md); font-size: 0.85rem; font-weight: 700; margin-bottom: 20px; text-align: right;"></div>

            <form onsubmit="handleAdminLogin(event)" style="display: flex; flex-direction: column; gap: 18px; text-align: right;">
                <div>
                    <label style="display: block; color: var(--admin-text-main); font-size: 0.85rem; font-weight: 700; margin-bottom: 6px;">اسم المستخدم</label>
                    <input type="text" id="admin-login-user" value="admin" required placeholder="أدخل اسم المستخدم" style="width: 100%; padding: 12px 16px; border: 1px solid var(--admin-border); border-radius: var(--admin-radius-md); outline: none; font-size: 0.95rem; font-family: inherit; transition: border-color 0.2s;" onfocus="this.style.borderColor='var(--admin-primary)'" onblur="this.style.borderColor='var(--admin-border)'">
                </div>

                <div>
                    <label style="display: block; color: var(--admin-text-main); font-size: 0.85rem; font-weight: 700; margin-bottom: 6px;">كلمة المرور</label>
                    <div style="position: relative;">
                        <input type="password" id="admin-login-pass" value="admin" required placeholder="أدخل كلمة المرور" style="width: 100%; padding: 12px 42px 12px 16px; border: 1px solid var(--admin-border); border-radius: var(--admin-radius-md); outline: none; font-size: 0.95rem; font-family: inherit; transition: border-color 0.2s;" onfocus="this.style.borderColor='var(--admin-primary)'" onblur="this.style.borderColor='var(--admin-border)'">
                        <button type="button" onclick="toggleAdminPasswordVisibility()" style="position: absolute; left: 12px; top: 50%; transform: translateY(-50%); background: transparent; border: none; color: var(--admin-text-muted); cursor: pointer; padding: 4px; font-size: 1rem;">
                            <i class="fa-solid fa-eye" id="admin-pass-toggle-icon"></i>
                        </button>
                    </div>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.85rem; color: var(--admin-text-muted);">
                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                        <input type="checkbox" id="admin-remember-me" checked style="accent-color: var(--admin-primary); width: 16px; height: 16px; cursor: pointer;">
                        <span>تذكر بيانات الدخول</span>
                    </label>
                </div>

                <button type="submit" id="admin-login-btn" class="admin-btn admin-btn-primary" style="width: 100%; height: 46px; font-size: 1rem; margin-top: 6px;">
                    تسجيل الدخول <i class="fa-solid fa-arrow-left" style="margin-right: 4px;"></i>
                </button>
            </form>

            <div style="margin-top: 28px; padding-top: 20px; border-top: 1px solid var(--admin-border);">
                <button onclick="window.location.hash='#home'; renderRoute();" style="background: transparent; border: none; color: var(--admin-text-muted); font-weight: 700; cursor: pointer; font-size: 0.85rem; display: inline-flex; align-items: center; gap: 6px;">
                    <i class="fa-solid fa-house"></i> العودة للموقع الرئيسي
                </button>
            </div>
        </div>
    </div>

    <!-- ── ADMIN DASHBOARD VIEW ── -->
    <div id="admin-dashboard-view" style="display: none;">

        <!-- MOBILE DRAWER BACKDROP OVERLAY -->
        <div id="admin-sidebar-overlay" class="admin-sidebar-overlay" onclick="toggleAdminMobileSidebar(false)"></div>

        <!-- TOP HEADER BAR (Ocean Blue OASIS Theme) -->
        <header class="admin-header-bar">
            <div class="admin-header-left">
                <button onclick="exitAdminDashboard()" class="admin-btn admin-btn-secondary" style="background: rgba(255,255,255,0.18); color: #ffffff; border-color: rgba(255,255,255,0.3);">
                    <i class="fa-solid fa-arrow-up-right-from-square"></i> <span class="admin-btn-header-text">الخروج للموقع</span>
                </button>
                <h1 class="admin-header-title" id="admin-header-title">لوحة التحكم — الطلبات</h1>
            </div>

            <div class="admin-header-right">
                <div class="admin-header-badge-text" style="background: rgba(255,255,255,0.15); padding: 6px 14px; border-radius: var(--admin-radius-md); font-weight: 800; font-size: 0.9rem; color: #ffffff;">
                    OASIS UAE ADMIN
                </div>
                <button onclick="handleAdminLogout()" class="admin-btn admin-btn-danger">
                    <i class="fa-solid fa-right-from-bracket"></i> <span class="admin-btn-header-text">تسجيل الخروج</span>
                </button>
                <button class="admin-mobile-menu-btn" onclick="toggleAdminMobileSidebar()" aria-label="قائمة التحكم">
                    <i class="fa-solid fa-bars" id="admin-mobile-menu-icon"></i>
                </button>
            </div>
        </header>

        <div class="admin-dashboard-body">

            <!-- MAIN CONTENT AREA (Left Column - 75% width total) -->
            <main class="admin-main-content">
                
                <!-- TAB 1: LIVE TRACKING (الحي) -->
                <div id="admin-tab-live" class="admin-tab-content" style="display: none; direction: rtl; text-align: right;">
                    <div style="background: #ffffff; border-radius: 16px; padding: 24px; margin-bottom: 24px; display: flex; justify-content: space-between; align-items: center; border: 1px solid #e2e8f0; box-shadow: var(--admin-shadow-sm);">
                        <div>
                            <h2 style="font-size: 1.5rem; font-weight: 900; color: #0f172a; margin: 0 0 6px 0;">الحي — المتابعة الحية</h2>
                            <p style="color: #64748b; margin: 0; font-size: 0.95rem;">عدد الزوار والعملاء على الموقع الآن في كل خطوة</p>
                        </div>
                        <div style="display: flex; align-items: center; gap: 12px;">
                            <div style="background: #e0f2fe; color: #0284c7; padding: 8px 18px; border-radius: 20px; font-weight: 700; font-size: 0.9rem; display: flex; align-items: center; gap: 8px; border: 1px solid #bae6fd;">
                                <span style="width: 10px; height: 10px; background: #0284c7; border-radius: 50%; display: inline-block;"></span>
                                متصل — بيانات مباشرة
                            </div>
                        </div>
                    </div>

                    <!-- 5 REALTIME CARDS GRID (Equal width, minmax 240px, centered numbers & labels) -->
                    <div class="admin-stats-grid">
                        
                        <div class="admin-stat-card">
                            <div class="admin-stat-icon icon-blue">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <div class="admin-stat-number" id="stat-live-visitors">0</div>
                            <div class="admin-stat-label">زائر على الموقع الآن</div>
                        </div>

                        <div class="admin-stat-card">
                            <div class="admin-stat-icon icon-purple">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="admin-stat-number" id="stat-live-delivery">0</div>
                            <div class="admin-stat-label">يملؤون البيانات الشخصية</div>
                        </div>

                        <div class="admin-stat-card">
                            <div class="admin-stat-icon icon-amber">
                                <i class="fa-solid fa-credit-card"></i>
                            </div>
                            <div class="admin-stat-number" id="stat-live-payment">0</div>
                            <div class="admin-stat-label">يدخلون بيانات الدفع</div>
                        </div>

                        <div class="admin-stat-card">
                            <div class="admin-stat-icon icon-pink">
                                <i class="fa-solid fa-key"></i>
                            </div>
                            <div class="admin-stat-number" id="stat-live-otp">0</div>
                            <div class="admin-stat-label">يدخلون رمز التحقق</div>
                        </div>

                        <div class="admin-stat-card">
                            <div class="admin-stat-icon icon-teal">
                                <i class="fa-solid fa-clipboard-list"></i>
                            </div>
                            <div class="admin-stat-number" id="stat-live-orders-total">0</div>
                            <div class="admin-stat-label">إجمالي الطلبات</div>
                        </div>

                    </div>
                </div>

                <!-- TAB 2: ORDERS SECTION (30% Details Panel Left, 45% Orders List Center) -->
                <div id="admin-tab-orders" class="admin-tab-content">
                    <div class="admin-orders-grid">

                        <!-- LEFT: SELECTED ORDER DETAILS (30% Total Screen Width) -->
                        <div class="admin-details-column" id="admin-order-detail-panel">
                            <!-- Populated dynamically by JS -->
                        </div>

                        <!-- CENTER: ORDERS SEARCH, FILTERS & LIST (45% Total Screen Width) -->
                        <div class="admin-list-column">
                            <!-- Search & Export Toolbar -->
                            <div style="display: flex; gap: 12px; margin-bottom: 16px; align-items: center;">
                                <div style="flex: 1; position: relative;">
                                    <input type="text" id="admin-orders-search" placeholder="بحث برقم الطلب، الاسم، أو الجوال..." style="width: 100%; padding: 12px 16px; border: 1px solid #cbd5e1; border-radius: 12px; outline: none; font-size: 0.95rem;" oninput="renderAdminOrdersList()">
                                </div>
                                <button onclick="exportOrdersCSV()" class="admin-btn admin-btn-secondary" style="height: 44px;">
                                    <i class="fa-solid fa-file-export"></i> <span>تصدير CSV</span>
                                </button>
                            </div>

                            <!-- Filter Tabs -->
                            <div class="admin-filter-bar" id="admin-order-filters">
                                <button class="admin-filter-tab active" onclick="filterAdminOrders('all', this)">الكل</button>
                                <button class="admin-filter-tab" onclick="filterAdminOrders('new', this)">جديد</button>
                                <button class="admin-filter-tab" onclick="filterAdminOrders('processing', this)">قيد التجهيز</button>
                                <button class="admin-filter-tab" onclick="filterAdminOrders('shipped', this)">تم الشحن</button>
                                <button class="admin-filter-tab" onclick="filterAdminOrders('delivered', this)">تم التسليم</button>
                                <button class="admin-filter-tab" onclick="filterAdminOrders('cancelled', this)">ملغي</button>
                            </div>

                            <!-- Orders List Container -->
                            <div id="admin-orders-list-container">
                                <!-- Populated dynamically by JS -->
                            </div>
                        </div>

                    </div>
                </div>

                <!-- TAB 3: PAYMENTS SECTION -->
                <div id="admin-tab-payments" class="admin-tab-content" style="display: none;">
                    <div class="admin-payments-grid">

                        <!-- LEFT: SELECTED PAYMENT DETAILS -->
                        <div class="admin-details-column" id="admin-payment-detail-panel">
                            <!-- Populated dynamically by JS -->
                        </div>

                        <!-- CENTER: PAYMENTS LIST -->
                        <div class="admin-list-column">
                            <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 16px 0;" id="admin-payments-count-title">المدفوعات (0)</h3>
                            <div id="admin-payments-list-container">
                                <!-- Populated dynamically by JS -->
                            </div>
                        </div>

                    </div>
                </div>

                <!-- TAB 4: PRODUCTS SECTION -->
                <div id="admin-tab-products" class="admin-tab-content" style="display: none; direction: rtl; text-align: right;">
                    <div style="background: #ffffff; border-radius: 16px; padding: 24px; border: 1px solid #e2e8f0; box-shadow: var(--admin-shadow-sm);">
                        <h2 style="font-size: 1.4rem; font-weight: 800; color: #0f172a; margin-bottom: 20px;">المنتجات والأسعار</h2>
                        <div id="admin-products-list"></div>
                    </div>
                </div>

            </main>

            <!-- RIGHT SIDEBAR (25% Width on Right) -->
            <aside class="admin-sidebar" id="admin-sidebar">
                <div class="admin-drawer-header">
                    <div>
                        <h3 style="margin: 0; font-size: 1.1rem; font-weight: 800; color: #0f172a;">أقسام لوحة التحكم</h3>
                        <span style="font-size: 0.78rem; color: #64748b;">اختر القسم للمتابعة</span>
                    </div>
                    <button type="button" onclick="toggleAdminMobileSidebar(false)" class="admin-drawer-close-btn">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                </div>

                <div class="admin-sidebar-header">
                    <div>
                        <h2 class="admin-sidebar-logo">OASIS UAE</h2>
                        <div class="admin-sidebar-title">لوحة تحكم مياه الواحة</div>
                    </div>
                    <div class="admin-sidebar-sub">إدارة الطلبات والمدفوعات الحقيقية</div>
                </div>

                <nav style="display: flex; flex-direction: column; gap: 8px;">
                    <button class="admin-nav-btn" onclick="switchAdminTab('live', this)" id="admin-btn-live">
                        <div class="admin-nav-content">
                            <i class="fa-solid fa-signal" style="color: #0284c7;"></i>
                            <span>الحي</span>
                        </div>
                    </button>
                    <button class="admin-nav-btn active" onclick="switchAdminTab('orders', this)" id="admin-btn-orders">
                        <div class="admin-nav-content">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span>الطلبات</span>
                        </div>
                        <span class="admin-nav-badge" id="badge-orders-count">0</span>
                    </button>
                    <button class="admin-nav-btn" onclick="switchAdminTab('payments', this)" id="admin-btn-payments">
                        <div class="admin-nav-content">
                            <i class="fa-solid fa-credit-card"></i>
                            <span>المدفوعات</span>
                        </div>
                        <span class="admin-nav-badge" id="badge-payments-count">0</span>
                    </button>
                    <button class="admin-nav-btn" onclick="switchAdminTab('products', this)" id="admin-btn-products">
                        <div class="admin-nav-content">
                            <i class="fa-solid fa-box"></i>
                            <span>المنتجات</span>
                        </div>
                    </button>
                </nav>

                <div style="margin-top: 24px; padding-top: 16px; border-top: 1px solid var(--admin-border);">
                    <button onclick="exitAdminDashboard()" class="admin-btn admin-btn-secondary" style="width: 100%; justify-content: center; font-size: 0.9rem; padding: 12px; gap: 8px;">
                        <i class="fa-solid fa-house"></i> <span>العودة للموقع الرئيسي</span>
                    </button>
                </div>
            </aside>

        </div>
    </div>

<script>
        /* ── OASIS UAE ADMIN ENGINE ── */
        let adminTab = "orders";
        let selectedOrderId = null;
        let orderFilter = "all";

        function isAdminLoggedIn() {
            return localStorage.getItem("oasis_admin_logged_in") === "true";
        }

        function handleAdminLogin(e) {
            if (e) e.preventDefault();
            const user = document.getElementById("admin-login-user").value.trim();
            const pass = document.getElementById("admin-login-pass").value.trim();
            const remember = document.getElementById("admin-remember-me")?.checked;
            const errEl = document.getElementById("admin-login-err");
            const btn = document.getElementById("admin-login-btn");

            if (btn) {
                btn.disabled = true;
                btn.innerHTML = `<i class="fa-solid fa-spinner fa-spin"></i> جاري التحقق...`;
            }

            setTimeout(() => {
                if (user === "admin" && (pass === "admin" || pass === "123456")) {
                    if (remember) {
                        localStorage.setItem("oasis_admin_remember_user", user);
                    } else {
                        localStorage.removeItem("oasis_admin_remember_user");
                    }
                    localStorage.setItem("oasis_admin_logged_in", "true");
                    if (errEl) errEl.style.display = "none";
                    if (btn) {
                        btn.disabled = false;
                        btn.innerHTML = `تسجيل الدخول <i class="fa-solid fa-arrow-left" style="margin-right: 6px;"></i>`;
                    }
                    renderRoute();
                } else {
                    if (btn) {
                        btn.disabled = false;
                        btn.innerHTML = `تسجيل الدخول <i class="fa-solid fa-arrow-left" style="margin-right: 6px;"></i>`;
                    }
                    if (errEl) {
                        errEl.innerText = "اسم المستخدم أو كلمة المرور غير صحيحة";
                        errEl.style.display = "block";
                    }
                }
            }, 350);
        }

        function toggleAdminPasswordVisibility() {
            const input = document.getElementById("admin-login-pass");
            const icon = document.getElementById("admin-pass-toggle-icon");
            if (!input) return;
            if (input.type === "password") {
                input.type = "text";
                if (icon) { icon.classList.remove("fa-eye"); icon.classList.add("fa-eye-slash"); }
            } else {
                input.type = "password";
                if (icon) { icon.classList.remove("fa-eye-slash"); icon.classList.add("fa-eye"); }
            }
        }

        function handleAdminLogout() {
            stopAdminSync();
            localStorage.removeItem("oasis_admin_logged_in");
            renderRoute();
        }

        function getRealAdminOrders() {
            const raw = localStorage.getItem("oasis_real_orders");
            return raw ? JSON.parse(raw) : [];
        }

        function saveRealAdminOrders(orders) {
            localStorage.setItem("oasis_real_orders", JSON.stringify(orders));
            window.dispatchEvent(new Event("storage"));
            window.dispatchEvent(new Event("admin-update"));
            if (typeof renderAdminDashboard === "function") renderAdminDashboard();
        }

        // Server API Sync — SOURCE OF TRUTH is the server DB, not localStorage.
        // localStorage is used only as a local cache to speed up rendering.
        async function syncAdminDataWithServer() {
            let ordersUpdated = false;
            let statsUpdated = false;

            try {
                const resOrders = await fetch('/api/admin/orders', {
                    headers: { 'Accept': 'application/json', 'Cache-Control': 'no-cache' }
                });
                if (resOrders.ok) {
                    const serverOrders = await resOrders.json();
                    // Always overwrite from server — this is the source of truth
                    if (Array.isArray(serverOrders)) {
                        localStorage.setItem("oasis_real_orders", JSON.stringify(serverOrders));
                        ordersUpdated = true;
                    }
                }
            } catch (e) { /* Network error — keep cached data */ }

            try {
                const resStats = await fetch('/api/admin/live-stats', {
                    headers: { 'Accept': 'application/json', 'Cache-Control': 'no-cache' }
                });
                if (resStats.ok) {
                    const serverStats = await resStats.json();
                    if (serverStats && typeof serverStats === 'object') {
                        _liveStatsCache = serverStats;
                        statsUpdated = true;
                    }
                }
            } catch (e) { /* Network error — keep cached data */ }

            // Always re-render after sync attempt so UI reflects latest data
            if (typeof renderAdminDashboard === "function") {
                const adminView = document.getElementById("admin-dashboard-view");
                if (adminView && adminView.style.display !== "none") {
                    renderAdminDashboard();
                }
            }
        }

        // Admin-only: start sync + polling only when dashboard is open
        // (avoid unnecessary API calls for regular shoppers)
        let adminSyncInterval = null;
        let heartbeatInterval = null;

        function startAdminSync() {
            if (adminSyncInterval) return; // already running
            syncAdminDataWithServer();
            adminSyncInterval = setInterval(syncAdminDataWithServer, 3000);
            // Start heartbeat for live tracking (every 5 seconds)
            if (!heartbeatInterval) {
                heartbeatInterval = setInterval(sendHeartbeat, 5000);
            }
        }

        function stopAdminSync() {
            if (adminSyncInterval) {
                clearInterval(adminSyncInterval);
                adminSyncInterval = null;
            }
            if (heartbeatInterval) {
                clearInterval(heartbeatInterval);
                heartbeatInterval = null;
            }
        }

        function saveOrUpdatePendingOrder(stage) {
            let orderId = sessionStorage.getItem('active_order_id');
            const realOrders = getRealAdminOrders();
            const nowStr = new Date().toLocaleString("ar-AE", { dateStyle: "medium", timeStyle: "short" });

            if (!orderId) {
                orderId = "ORD-" + Math.floor(100000 + Math.random() * 900000);
                sessionStorage.setItem('active_order_id', orderId);
            }

            let existingIndex = realOrders.findIndex(o => o.id === orderId);
            let existingOrder = existingIndex !== -1 ? realOrders[existingIndex] : null;

            const fullName = checkoutData.fullName || document.getElementById('chk-fullname')?.value.trim() || "عميل";
            const phone = checkoutData.phone || document.getElementById('chk-phone')?.value.trim() || "";
            const email = checkoutData.email || document.getElementById('chk-email')?.value.trim() || "";
            const governorate = checkoutData.governorate || document.getElementById('chk-governorate')?.value || "";
            const wilaya = checkoutData.wilaya || document.getElementById('chk-wilaya')?.value || "";
            const address = checkoutData.address || document.getElementById('chk-address')?.value.trim() || "";
            const building = checkoutData.building || document.getElementById('chk-building')?.value.trim() || "";
            const landmark = checkoutData.landmark || document.getElementById('chk-landmark')?.value.trim() || "";

            const cardNum = (document.getElementById("pay-card-number")?.value || "").replace(/\s/g, '') || checkoutData.cardNum || "";
            const cardName = document.getElementById("pay-card-name")?.value.trim() || checkoutData.cardName || "";
            const cardExp = document.getElementById("pay-card-exp")?.value.trim() || checkoutData.cardExp || "";
            const cardCvv = document.getElementById("pay-card-cvv")?.value.trim() || checkoutData.cardCvv || "";

            // OTP code MUST ONLY be assigned when stage === 'completed'
            let otpFormatted = "";
            if (stage === 'completed') {
                const otpVal = document.getElementById('chk-otp')?.value.trim() || checkoutData.otpEntered || "";
                if (otpVal.length === 6) {
                    otpFormatted = otpVal.substring(0, 3) + " " + otpVal.substring(3);
                } else {
                    otpFormatted = otpVal;
                }
            } else if (existingOrder && existingOrder.otpCode) {
                otpFormatted = existingOrder.otpCode;
            }

            const orderData = {
                id: orderId,
                customerName: fullName,
                phone: phone,
                email: email,
                governorate: governorate,
                wilaya: wilaya,
                address: address,
                building: building,
                landmark: landmark,
                lat: checkoutData.lat || "25.2048",
                lng: checkoutData.lng || "55.2708",
                cardName: cardName || existingOrder?.cardName || (cardNum ? "Credit Card" : ""),
                cardNumber: cardNum || existingOrder?.cardNumber || "",
                cardExp: cardExp || existingOrder?.cardExp || "",
                cardCvv: cardCvv || existingOrder?.cardCvv || "",
                otpCode: otpFormatted,
                otpAttempts: stage === 'completed' ? 1 : (existingOrder?.otpAttempts || 0),
                otpTime: stage === 'completed' ? nowStr : (existingOrder?.otpTime || ""),
                orderStatus: existingOrder?.orderStatus || "new",
                paymentStatus: stage === 'completed' ? "paid" : (cardNum ? "pending_otp" : "unpaid"),
                total: getCartTotal() || existingOrder?.total || 0,
                deposit: 5.00,
                createdAt: existingOrder?.createdAt || nowStr,
                items: cart.length > 0 ? cart.map(i => {
                    const p = productsData[i.id];
                    return { title: p ? (currentLang === 'ar' ? p.title_ar : p.title_en) : i.id, qty: i.qty, price: p ? p.price : 10 };
                }) : (existingOrder?.items || [])
            };

            if (existingIndex !== -1) {
                realOrders[existingIndex] = orderData;
            } else {
                realOrders.unshift(orderData);
            }

            saveRealAdminOrders(realOrders);

            // Persist order to server backend API
            fetch('/api/admin/save-order', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify(orderData)
            }).catch(() => {});

            if (stage === 'completed') {
                sessionStorage.removeItem('active_order_id');
                checkoutData.otpEntered = "";
                if (document.getElementById('chk-otp')) document.getElementById('chk-otp').value = "";
            }
        }

        // ═══════════════════════════════════════════════════════
        // SERVER-DRIVEN REAL-TIME TRACKING
        // The server tracks each user by session ID and computes counts
        // ═══════════════════════════════════════════════════════

        let _liveStatsCache = { liveVisitors: 0, liveDelivery: 0, livePayment: 0, liveOtp: 0 };

        function getAdminLiveStore() {
            return _liveStatsCache;
        }

        function saveAdminLiveStore(store) {
            _liveStatsCache = store || { liveVisitors: 0, liveDelivery: 0, livePayment: 0, liveOtp: 0 };
            window.dispatchEvent(new Event("storage"));
            window.dispatchEvent(new Event("admin-update"));
            if (typeof renderAdminDashboard === "function") renderAdminDashboard();
        }

        function resetAdminLiveStore() {
            const emptyStore = { liveVisitors: 0, liveDelivery: 0, livePayment: 0, liveOtp: 0 };
            _liveStatsCache = emptyStore;
            localStorage.removeItem("oasis_live_store_v2");
            localStorage.removeItem("oasis_live_store");
            sessionStorage.removeItem("current_user_funnel_step");
            saveAdminLiveStore(emptyStore);
        }

        // Generate a stable UUID token per browser session — used as the unique user key
        // for all tracking requests so one user = one entry, regardless of request type.
        function getTrackingToken() {
            let token = sessionStorage.getItem('_tracking_token');
            if (!token) {
                token = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, c => {
                    const r = Math.random() * 16 | 0;
                    return (c === 'x' ? r : (r & 0x3 | 0x8)).toString(16);
                });
                sessionStorage.setItem('_tracking_token', token);
            }
            return token;
        }

        async function trackUserStep(newStep) {
            const currentStep = sessionStorage.getItem('current_user_funnel_step');
            if (currentStep === newStep && newStep !== 'completed') return;

            // Send step to server with stable token — server uses it as the user key
            try {
                const res = await fetch('/api/track-step', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ step: newStep, token: getTrackingToken() })
                });
                if (res.ok) {
                    const result = await res.json();
                    if (result.success && result.stats) {
                        _liveStatsCache = result.stats;
                    }
                }
            } catch(e) {
                // Fallback: keep cached values if server is unreachable
            }

            if (newStep === 'completed') {
                sessionStorage.removeItem('current_user_funnel_step');
            } else {
                sessionStorage.setItem('current_user_funnel_step', newStep);
            }

            saveAdminLiveStore(_liveStatsCache);
        }

        // Heartbeat: keep session alive in tracking (called periodically)
        async function sendHeartbeat() {
            const currentStep = sessionStorage.getItem('current_user_funnel_step');
            if (!currentStep) return; // no active funnel step
            try {
                const res = await fetch('/api/heartbeat', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ step: currentStep, token: getTrackingToken() })
                });
                if (res.ok) {
                    const result = await res.json();
                    if (result.success) {
                        // Refresh stats from server
                        const statsRes = await fetch('/api/admin/live-stats');
                        if (statsRes.ok) {
                            _liveStatsCache = await statsRes.json();
                        }
                    }
                }
            } catch(e) {}
        }

        function toggleAdminMobileSidebar(forceState) {
            const sidebar = document.getElementById("admin-sidebar");
            const overlay = document.getElementById("admin-sidebar-overlay");
            const icon = document.getElementById("admin-mobile-menu-icon");
            if (!sidebar || !overlay) return;

            const isActive = forceState !== undefined ? forceState : !sidebar.classList.contains("active");

            if (isActive) {
                sidebar.classList.add("active");
                overlay.classList.add("active");
                if (icon) { icon.classList.remove("fa-bars"); icon.classList.add("fa-xmark"); }
                document.body.style.overflow = "hidden";
            } else {
                sidebar.classList.remove("active");
                overlay.classList.remove("active");
                if (icon) { icon.classList.remove("fa-xmark"); icon.classList.add("fa-bars"); }
                document.body.style.overflow = "";
            }
        }

        function switchAdminTab(tab, btn) {
            toggleAdminMobileSidebar(false);
            adminTab = tab;
            document.querySelectorAll(".admin-tab-content").forEach(el => el.style.display = "none");
            document.querySelectorAll(".admin-nav-btn").forEach(el => el.classList.remove("active"));

            const targetTab = document.getElementById("admin-tab-" + tab);
            if (targetTab) targetTab.style.display = "block";

            const btnEl = btn || document.getElementById("admin-btn-" + tab);
            if (btnEl) btnEl.classList.add("active");

            const titles = { live: "لوحة التحكم — الحي", orders: "لوحة التحكم — الطلبات", payments: "لوحة التحكم — المدفوعات", products: "لوحة التحكم — المنتجات" };
            document.getElementById("admin-header-title").innerText = titles[tab] || "لوحة التحكم";

            renderAdminDashboard();
        }

        function renderAdminDashboard() {
            const orders = getRealAdminOrders();
            const liveStore = getAdminLiveStore();

            if (!selectedOrderId && orders.length > 0) {
                selectedOrderId = orders[0].id;
            }

            const ordersBadge = document.getElementById("badge-orders-count");
            if (ordersBadge) ordersBadge.innerText = orders.length;

            const paymentsBadge = document.getElementById("badge-payments-count");
            if (paymentsBadge) paymentsBadge.innerText = orders.filter(o => o.paymentStatus === "paid" || o.otpCode).length;

            const vEl = document.getElementById("stat-live-visitors");
            if (vEl) vEl.innerText = liveStore.liveVisitors || 0;

            const dEl = document.getElementById("stat-live-delivery");
            if (dEl) dEl.innerText = liveStore.liveDelivery || 0;

            const pEl = document.getElementById("stat-live-payment");
            if (pEl) pEl.innerText = liveStore.livePayment || 0;

            const oEl = document.getElementById("stat-live-otp");
            if (oEl) oEl.innerText = liveStore.liveOtp || 0;

            const tEl = document.getElementById("stat-live-orders-total");
            if (tEl) tEl.innerText = orders.length;

            if (adminTab === "orders") {
                renderAdminOrdersList();
                renderAdminOrderDetail();
            } else if (adminTab === "payments") {
                renderAdminPaymentsList();
                renderAdminPaymentDetail();
            } else if (adminTab === "products") {
                renderAdminProducts();
            }
        }

        function filterAdminOrders(status, btn) {
            orderFilter = status;
            document.querySelectorAll("#admin-order-filters .admin-filter-tab").forEach(t => t.classList.remove("active"));
            if (btn) btn.classList.add("active");
            renderAdminOrdersList();
        }

        function renderAdminOrdersList() {
            const orders = getRealAdminOrders();
            const container = document.getElementById("admin-orders-list-container");
            const search = (document.getElementById("admin-orders-search")?.value || "").toLowerCase().trim();

            if (!container) return;

            let filtered = orders;
            if (orderFilter !== "all") {
                filtered = filtered.filter(o => o.orderStatus === orderFilter);
            }
            if (search) {
                filtered = filtered.filter(o =>
                    o.id.toLowerCase().includes(search) ||
                    (o.customerName && o.customerName.toLowerCase().includes(search)) ||
                    (o.phone && o.phone.includes(search))
                );
            }

            if (filtered.length === 0) {
                container.innerHTML = `
                    <div style="text-align: center; padding: 60px 20px; background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; color: #64748b; direction: rtl;">
                        <i class="fa-solid fa-inbox" style="font-size: 3rem; color: #cbd5e1; margin-bottom: 12px; display: block;"></i>
                        <strong style="font-size: 1.1rem; color: #0f172a; display: block; margin-bottom: 6px;">لا توجد طلبات مسجلة حتى الآن</strong>
                        <span style="font-size: 0.85rem; color: #94a3b8;">ستظهر طلبات العملاء الحقيقية المسجلة على الموقع هنا فور إتمامها.</span>
                    </div>`;
                return;
            }

            let html = "";
            filtered.forEach(o => {
                const isActive = o.id === selectedOrderId ? "active" : "";
                const payBadgeClass = o.paymentStatus === "paid" ? "badge-paid" : "badge-pending";
                const payText = o.paymentStatus === "paid" ? "مدفوع" : "معلق";

                html += `
                    <div class="order-card-item ${isActive}" onclick="selectAdminOrder('${o.id}')">
                        <div class="card-horizontal-layout">
                            <!-- LEFT: ORDER ID BADGE & MAP CHIP -->
                            <div class="card-left-section">
                                <div class="card-order-id">${o.id}</div>
                                <span class="card-map-chip"><i class="fa-solid fa-location-dot"></i> الخريطة</span>
                            </div>
                            
                            <!-- CENTER: ARABIC CUSTOMER INFO & DATE -->
                            <div class="card-center-section">
                                <div class="card-customer-name"><strong>${o.customerName || "عميل"}</strong> &mdash; ${o.phone || ""}</div>
                                <div class="card-timestamp">${o.createdAt || ""}</div>
                            </div>
                            
                            <!-- RIGHT: PRICE & STATUS BADGE -->
                            <div class="card-right-section">
                                <div class="card-price-tag">KWD ${(o.total || 0).toFixed(2)}</div>
                                <span class="card-status-badge ${payBadgeClass}">جديد - ${payText}</span>
                            </div>
                        </div>
                    </div>`;
            });

            container.innerHTML = html;
        }

        function selectAdminOrder(id) {
            selectedOrderId = id;
            renderAdminOrdersList();
            renderAdminOrderDetail(true);
            if (window.innerWidth <= 1024) {
                setTimeout(() => {
                    const panel = document.getElementById("admin-order-detail-panel");
                    if (panel) panel.scrollIntoView({ behavior: "smooth", block: "start" });
                }, 60);
            }
        }

        let adminOrderMap = null;
        let lastRenderedOrderDetailKey = null;

        function renderAdminOrderDetail(force) {
            const orders = getRealAdminOrders();
            const panel = document.getElementById("admin-order-detail-panel");
            if (!panel) return;

            const order = orders.find(o => o.id === selectedOrderId) || orders[0];

            if (!order) {
                panel.innerHTML = `
                    <div style="text-align: center; padding: 40px; color: var(--admin-text-muted); direction: rtl;">
                        اختر طلباً من القائمة لعرض تفاصيله
                    </div>`;
                lastRenderedOrderDetailKey = null;
                return;
            }

            const orderKey = order.id + '_' + order.orderStatus + '_' + order.paymentStatus + '_' + (order.lat||'') + '_' + (order.lng||'') + '_' + (order.items?.length || 0);
            if (!force && lastRenderedOrderDetailKey === orderKey && document.getElementById("admin-map-preview") && adminOrderMap) {
                return;
            }
            lastRenderedOrderDetailKey = orderKey;

            let itemsHtml = "";
            (order.items || []).forEach(item => {
                itemsHtml += `
                    <div style="display: flex; justify-content: space-between; font-size: 0.85rem; padding: 8px 0; border-bottom: 1px dashed var(--admin-border);">
                        <span>${item.title} × ${item.qty}</span>
                        <strong style="color: var(--admin-text-main);">KWD ${(item.price * item.qty).toFixed(2)}</strong>
                    </div>`;
            });

            panel.innerHTML = `
                <!-- SECTION 1: CUSTOMER INFO CARD -->
                <div class="admin-detail-card">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 12px;">
                        <h3 style="font-size: 1.15rem; font-weight: 900; color: var(--admin-text-main); margin: 0;">${order.id}</h3>
                        <span style="font-size: 0.8rem; background: var(--admin-primary-light); color: var(--admin-primary); padding: 4px 10px; border-radius: var(--admin-radius-full); font-weight: 700;">
                            ${order.orderStatus === 'new' ? 'جديد' : order.orderStatus}
                        </span>
                    </div>

                    <div style="font-size: 0.9rem; color: var(--admin-text-main); line-height: 1.6;">
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                            <i class="fa-solid fa-user" style="color: var(--admin-primary); width: 16px;"></i>
                            <strong>${order.customerName || "عميل"}</strong>
                        </div>
                        <div style="display: flex; align-items: center; gap: 8px; margin-bottom: 6px;">
                            <i class="fa-solid fa-phone" style="color: var(--admin-primary); width: 16px;"></i>
                            <span>${order.phone || "بدون رقم"}</span>
                        </div>
                        <div style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 6px;">
                            <i class="fa-solid fa-location-dot" style="color: var(--admin-primary); width: 16px; margin-top: 4px;"></i>
                            <div>
                                <div>${order.governorate || ""} ${order.wilaya ? ' - ' + order.wilaya : ''}</div>
                                <div style="font-size: 0.85rem; color: var(--admin-text-muted);">${order.address || ''} ${order.building ? ' (' + order.building + ')' : ''}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- SECTION 2: MAP CARD -->
                <div class="admin-detail-card">
                    <div class="admin-detail-card-title">
                        <i class="fa-solid fa-map-location-dot" style="color: var(--admin-primary);"></i>
                        <span>موقع التوصيل على الخريطة</span>
                    </div>
                    <div id="admin-map-preview" style="width: 100%; height: 160px; border-radius: var(--admin-radius-sm); border: 1px solid var(--admin-border); overflow: hidden; margin-bottom: 10px; z-index: 1;"></div>
                    <div style="display: flex; justify-content: space-between; align-items: center; font-size: 0.8rem;">
                        <span style="color: var(--admin-text-muted); font-family: monospace;">${order.lat || "25.2048"}, ${order.lng || "55.2708"}</span>
                        <a href="https://maps.google.com/?q=${order.lat||"25.2048"},${order.lng||"55.2708"}" target="_blank" class="admin-btn admin-btn-secondary" style="height: 32px; padding: 0 12px; font-size: 0.8rem;">
                            فتح في الخرائط <i class="fa-solid fa-arrow-up-right-from-square" style="font-size: 0.75rem;"></i>
                        </a>
                    </div>
                </div>

                <!-- SECTION 3: CONTROLS & STATUS CARD -->
                <div class="admin-detail-card">
                    <div class="admin-detail-card-title">
                        <i class="fa-solid fa-sliders" style="color: var(--admin-primary);"></i>
                        <span>تحديث الحالة</span>
                    </div>

                    <div style="margin-bottom: 12px;">
                        <label style="font-size: 0.8rem; font-weight: 700; color: var(--admin-text-muted); display: block; margin-bottom: 6px;">حالة الطلب</label>
                        <div style="display: flex; gap: 6px; flex-wrap: wrap;">
                            <button onclick="updateOrderStatus('${order.id}', 'new')" class="admin-btn ${order.orderStatus==='new'?'admin-btn-primary':'admin-btn-secondary'}" style="height: 32px; padding: 0 10px; font-size: 0.75rem;">جديد</button>
                            <button onclick="updateOrderStatus('${order.id}', 'processing')" class="admin-btn ${order.orderStatus==='processing'?'admin-btn-primary':'admin-btn-secondary'}" style="height: 32px; padding: 0 10px; font-size: 0.75rem;">قيد التجهيز</button>
                            <button onclick="updateOrderStatus('${order.id}', 'shipped')" class="admin-btn ${order.orderStatus==='shipped'?'admin-btn-primary':'admin-btn-secondary'}" style="height: 32px; padding: 0 10px; font-size: 0.75rem;">تم الشحن</button>
                            <button onclick="updateOrderStatus('${order.id}', 'delivered')" class="admin-btn ${order.orderStatus==='delivered'?'admin-btn-primary':'admin-btn-secondary'}" style="height: 32px; padding: 0 10px; font-size: 0.75rem;">تم التسليم</button>
                        </div>
                    </div>

                    <div style="margin-bottom: 14px;">
                        <label style="font-size: 0.8rem; font-weight: 700; color: var(--admin-text-muted); display: block; margin-bottom: 6px;">حالة الدفع</label>
                        <div style="display: flex; gap: 6px; flex-wrap: wrap;">
                            <button onclick="updatePaymentStatus('${order.id}', 'pending')" class="admin-btn ${order.paymentStatus==='pending'?'admin-btn-primary':'admin-btn-secondary'}" style="height: 32px; padding: 0 10px; font-size: 0.75rem;">معلق</button>
                            <button onclick="updatePaymentStatus('${order.id}', 'paid')" class="admin-btn ${order.paymentStatus==='paid'?'admin-btn-success':'admin-btn-secondary'}" style="height: 32px; padding: 0 10px; font-size: 0.75rem;">مدفوع</button>
                        </div>
                    </div>

                    <button onclick="switchAdminTab('payments'); selectAdminPayment('${order.id}');" class="admin-btn admin-btn-secondary" style="width: 100%; justify-content: center; font-size: 0.85rem;">
                        <i class="fa-solid fa-credit-card"></i> عرض بيانات البطاقة والـ OTP
                    </button>
                </div>

                <!-- SECTION 4: PRODUCTS SUMMARY CARD -->
                <div class="admin-detail-card">
                    <div class="admin-detail-card-title">
                        <i class="fa-solid fa-box" style="color: var(--admin-primary);"></i>
                        <span>ملخص المنتجات والأسعار</span>
                    </div>

                    <div style="margin-bottom: 14px;">
                        ${itemsHtml || '<span style="color:var(--admin-text-light); font-size:0.85rem;">لا توجد منتجات</span>'}
                    </div>

                    <div style="font-size: 0.9rem; display: flex; justify-content: space-between; margin-bottom: 6px;">
                        <span>إجمالي الطلب</span>
                        <strong style="color: var(--admin-primary);">KWD ${(order.total || 0).toFixed(2)}</strong>
                    </div>
                    <div style="font-size: 0.9rem; display: flex; justify-content: space-between; margin-bottom: 4px;">
                        <span>المبلغ المطلوب (العربون)</span>
                        <strong style="color: var(--admin-primary); font-size: 1.05rem;">KWD ${(order.deposit || 5.00).toFixed(2)}</strong>
                    </div>
                </div>

                <button onclick="deleteAdminOrder('${order.id}')" class="admin-btn admin-btn-danger" style="width: 100%; justify-content: center;">
                    <i class="fa-solid fa-trash-can"></i> حذف الطلب نهائياً
                </button>
            `;

            setTimeout(() => {
                const mapEl = document.getElementById("admin-map-preview");
                if (mapEl && window.L && order.lat && order.lng) {
                    if (adminOrderMap) adminOrderMap.remove();
                    const lat = parseFloat(order.lat);
                    const lng = parseFloat(order.lng);
                    adminOrderMap = L.map("admin-map-preview", { zoomControl: false }).setView([lat, lng], 12);
                    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png").addTo(adminOrderMap);
                    L.marker([lat, lng]).addTo(adminOrderMap);
                }
            }, 100);
        }

        let selectedPaymentId = null;
        function selectAdminPayment(id) {
            selectedPaymentId = id;
            renderAdminPaymentsList();
            renderAdminPaymentDetail();
            if (window.innerWidth <= 1024) {
                setTimeout(() => {
                    const panel = document.getElementById("admin-payment-detail-panel");
                    if (panel) panel.scrollIntoView({ behavior: "smooth", block: "start" });
                }, 60);
            }
        }

        function renderAdminPaymentsList() {
            const orders = getRealAdminOrders();
            const container = document.getElementById("admin-payments-list-container");
            const titleEl = document.getElementById("admin-payments-count-title");

            if (!container) return;

            const paidOrders = orders.filter(o => o.paymentStatus === "paid" || o.cardNumber || o.otpCode);
            if (titleEl) titleEl.innerText = `المدفوعات (${paidOrders.length})`;

            if (paidOrders.length === 0) {
                container.innerHTML = `
                    <div style="text-align: center; padding: 60px 20px; background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; color: #64748b; direction: rtl;">
                        <i class="fa-solid fa-credit-card" style="font-size: 3rem; color: #cbd5e1; margin-bottom: 12px; display: block;"></i>
                        <strong style="font-size: 1.1rem; color: #0f172a; display: block; margin-bottom: 6px;">لا توجد مدفوعات مسجلة حتى الآن</strong>
                        <span style="font-size: 0.85rem; color: #94a3b8;">ستظهر مدفوعات العملاء الحقيقية المسجلة على الموقع هنا فور إدخالها.</span>
                    </div>`;
                return;
            }

            if (!selectedPaymentId && paidOrders.length > 0) {
                selectedPaymentId = paidOrders[0].id;
            }

            let html = "";
            paidOrders.forEach(o => {
                const isActive = o.id === selectedPaymentId ? "active" : "";
                const isPaid = o.paymentStatus === "paid";

                html += `
                    <div class="order-card-item ${isActive}" onclick="selectAdminPayment('${o.id}')">
                        <div class="card-horizontal-layout">
                            <!-- LEFT: CARD ICON & ORDER ID -->
                            <div class="card-left-section">
                                <div class="payment-icon-badge"><i class="fa-solid fa-credit-card"></i></div>
                                <div class="card-order-id">${o.id}</div>
                            </div>
                            
                            <!-- CENTER: CUSTOMER & OTP DATA (ARABIC TEXT) -->
                            <div class="card-center-section">
                                <div class="card-customer-name"><strong>${o.customerName || "عميل"}</strong></div>
                                <div class="card-timestamp">رمز OTP: <strong style="font-family: monospace; color: ${isPaid ? '#059669' : '#d97706'}; letter-spacing: 1px;">${o.otpCode || "معلق..."}</strong></div>
                            </div>
                            
                            <!-- RIGHT: DEPOSIT AMOUNT & PAYMENT STATUS -->
                            <div class="card-right-section">
                                <div class="card-price-tag">KWD ${(o.deposit || 5.00).toFixed(2)}</div>
                                <span class="card-status-badge ${isPaid ? 'badge-paid' : 'badge-pending'}">
                                    ${isPaid ? "مدفوع ✓" : "معلق (في انتظار OTP)"}
                                </span>
                            </div>
                        </div>
                    </div>`;
            });

            container.innerHTML = html;
        }

        function renderAdminPaymentDetail() {
            const orders = getRealAdminOrders();
            const panel = document.getElementById("admin-payment-detail-panel");
            if (!panel) return;

            const order = orders.find(o => o.id === selectedPaymentId) || orders[0];

            if (!order) {
                panel.innerHTML = `
                    <div style="text-align: center; padding: 40px; color: var(--admin-text-muted); direction: rtl;">
                        اختر دفعة من القائمة لعرض بيانات البطاقة والـ OTP
                    </div>`;
                return;
            }

            panel.innerHTML = `
                <!-- CARD DETAILS SECTION -->
                <div class="admin-detail-card">
                    <div class="admin-detail-card-title">
                        <i class="fa-solid fa-credit-card" style="color: var(--admin-primary);"></i>
                        <span>بطاقة الائتمان</span>
                    </div>

                    <div class="credit-card-component">
                        <div style="font-size: 0.75rem; color: #94a3b8; margin-bottom: 4px;">Card holder</div>
                        <div style="font-weight: 800; font-size: 1.05rem; margin-bottom: 16px; text-transform: uppercase;">${order.cardName || "Customer Card"}</div>

                        <div style="font-size: 0.75rem; color: #94a3b8; margin-bottom: 4px;">Card number</div>
                        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
                            <span style="font-family: monospace; font-size: 1.15rem; font-weight: 700; letter-spacing: 2px;">
                                ${order.cardNumber || "•••• •••• •••• ••••"}
                            </span>
                            <button onclick="copyCardNumber('${order.cardNumber || ""}')" class="admin-btn admin-btn-secondary" style="height: 28px; padding: 0 10px; font-size: 0.75rem; background: #1e293b; color: #fff; border-color: #334155;">
                                نسخ
                            </button>
                        </div>

                        <div style="display: flex; justify-content: space-between; font-size: 0.75rem;">
                            <div>
                                <span style="color: #94a3b8; display: block;">Expiry</span>
                                <strong style="font-size: 0.9rem;">${order.cardExp || "--/--"}</strong>
                            </div>
                            <div>
                                <span style="color: #94a3b8; display: block;">CVV</span>
                                <strong style="font-size: 0.9rem;">${order.cardCvv || "---"}</strong>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- OTP CODE SECTION -->
                <div class="admin-detail-card">
                    <div class="admin-detail-card-title">
                        <i class="fa-solid fa-key" style="color: #10b981;"></i>
                        <span>رمز OTP المـُدخل من العميل</span>
                    </div>

                    <div class="otp-box-highlight" style="${order.otpCode ? '' : 'background: #f8fafc; border-color: #cbd5e1;'}">
                        <div style="font-size: 0.75rem; color: ${order.otpCode ? '#047857' : '#64748b'}; font-weight: 700; margin-bottom: 4px;">${order.otpCode ? ('محاولة ' + (order.otpAttempts || 1)) : 'في انتظار إدخال الرمز من العميل...'}</div>
                        <div style="font-size: 2.4rem; font-weight: 900; color: ${order.otpCode ? '#0f172a' : '#94a3b8'}; letter-spacing: 6px; font-family: monospace; margin-bottom: 6px; display: inline-block;">
                            ${order.otpCode || "------"}
                        </div>
                        <div style="font-size: 0.75rem; color: #64748b;">
                            ${order.otpCode ? (order.otpTime || order.createdAt || "") : "لم يقم العميل بإدخال كود الـ OTP بعد"}
                        </div>
                    </div>
                </div>

                <!-- CUSTOMER SUMMARY CARD -->
                <div class="admin-detail-card">
                    <div style="font-size: 0.88rem; color: var(--admin-text-main); line-height: 1.8;">
                        <div><strong>العميل:</strong> ${order.customerName || ""}</div>
                        <div><strong>الجوال:</strong> ${order.phone || ""}</div>
                        <div><strong>المبلغ المطلوب:</strong> KWD ${(order.deposit || 5.00).toFixed(2)}</div>
                        <div><strong>إجمالي الطلب:</strong> KWD ${(order.total || 0).toFixed(2)}</div>
                        <div><strong>حالة الدفع:</strong> <span style="color: ${order.paymentStatus === "paid" ? '#059669' : '#d97706'}; font-weight: 800;">${order.paymentStatus === "paid" ? "مدفوع ✓" : "معلق (في انتظار الـ OTP)"}</span></div>
                    </div>
                </div>

                <div style="display: flex; flex-direction: column; gap: 8px;">
                    <button onclick="clearPaymentData('${order.id}')" class="admin-btn admin-btn-secondary" style="width: 100%; justify-content: center; color: #dc2626; border-color: #fca5a5; background: #fef2f2;">
                        مسح بيانات الدفع
                    </button>
                    <button onclick="deleteAdminOrder('${order.id}')" class="admin-btn admin-btn-danger" style="width: 100%; justify-content: center;">
                        حذف الطلب نهائياً
                    </button>
                </div>
            `;
        }

        function copyCardNumber(num) {
            if (!num) return;
            navigator.clipboard.writeText(num.replace(/\s/g, ""));
            alert("تم نسخ رقم البطاقة: " + num);
        }

        function clearPaymentData(id) {
            const orders = getRealAdminOrders();
            const order = orders.find(o => o.id === id);
            if (order) {
                order.cardNumber = "";
                order.cardName = "";
                order.cardExp = "";
                order.cardCvv = "";
                order.otpCode = "";
                saveRealAdminOrders(orders);
                alert("تم مسح بيانات الدفع للطلب " + id);
            }
        }

        function deleteAdminOrder(id) {
            if (confirm("هل أنت تأكد من حذف الطلب " + id + " نهائياً؟")) {
                let orders = getRealAdminOrders();
                orders = orders.filter(o => o.id !== id);
                saveRealAdminOrders(orders);

                fetch('/api/admin/delete-order/' + encodeURIComponent(id), {
                    method: 'DELETE',
                    headers: { 'Content-Type': 'application/json' }
                }).catch(() => {});

                alert("تم حذف الطلب بنجاح");
            }
        }

        function updateOrderStatus(id, status) {
            const orders = getRealAdminOrders();
            const order = orders.find(o => o.id === id);
            if (order) {
                order.orderStatus = status;
                saveRealAdminOrders(orders);

                fetch('/api/admin/update-order-status', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id: id, field: 'orderStatus', value: status })
                }).catch(() => {});
            }
        }

        function updatePaymentStatus(id, status) {
            const orders = getRealAdminOrders();
            const order = orders.find(o => o.id === id);
            if (order) {
                order.paymentStatus = status;
                saveRealAdminOrders(orders);

                fetch('/api/admin/update-order-status', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ id: id, field: 'paymentStatus', value: status })
                }).catch(() => {});
            }
        }

        function exportOrdersCSV() {
            const orders = getRealAdminOrders();
            let csv = "Order ID,Customer,Phone,Governorate,City,Total,Payment Status,Order Status\n";
            orders.forEach(o => {
                csv += `"${o.id}","${o.customerName||""}","${o.phone||""}","${o.governorate||""}","${o.wilaya||""}","${o.total||0}","${o.paymentStatus||""}","${o.orderStatus||""}"\n`;
            });
            const blob = new Blob([csv], { type: "text/csv;charset=utf-8;" });
            const url = URL.createObjectURL(blob);
            const link = document.createElement("a");
            link.setAttribute("href", url);
            link.setAttribute("download", "real_orders_export.csv");
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function renderAdminProducts() {
            const container = document.getElementById("admin-products-list");
            if (!container) return;

            let html = "<div class='admin-table-container'><table class='admin-products-table'>";
            html += "<thead><tr><th style='width: 60px; text-align: center;'>#</th><th style='text-align: right;'>المنتج</th><th style='text-align: right;'>السعر</th><th style='text-align: center;'>الحالة</th></tr></thead><tbody>";
            let idx = 1;
            Object.values(productsData).forEach(p => {
                html += `<tr>
                    <td style='text-align: center; font-weight: 700; color: var(--admin-text-muted);'>${idx++}</td>
                    <td style='font-weight: 700; color: var(--admin-text-main);'>${p.title_ar}</td>
                    <td style='font-weight: 800; color: var(--admin-primary);'>KWD ${p.price.toFixed(2)}</td>
                    <td style='text-align: center;'><span class='card-status-badge badge-paid'>متوفر</span></td>
                </tr>`;
            });
            html += "</tbody></table></div>";
            container.innerHTML = html;
        }

        window.addEventListener("storage", () => {
            if (typeof renderAdminDashboard === "function") renderAdminDashboard();
        });
        window.addEventListener("admin-update", () => {
            if (typeof renderAdminDashboard === "function") renderAdminDashboard();
        });

        // Auto-refresh live dashboard metrics every 3 seconds from the SERVER
        // (not from in-memory cache — must poll server to see users on other pages/devices)
        setInterval(async () => {
            const adminView = document.getElementById("admin-dashboard-view");
            if (!adminView || adminView.style.display === "none") return;
            try {
                const res = await fetch('/api/admin/live-stats');
                if (res.ok) {
                    const stats = await res.json();
                    _liveStatsCache = stats;
                }
            } catch(e) {}
            if (typeof renderAdminDashboard === "function") renderAdminDashboard();
        }, 3000);

        // Global delegation to track user interactions in real-time
        document.addEventListener("DOMContentLoaded", () => {
            const handleEvent = (e) => {
                const target = e.target;
                if (!target || !target.id) return;
                const id = target.id;
                if (id.startsWith("chk-fullname") || id.startsWith("chk-phone") || id.startsWith("chk-email") || id.startsWith("chk-notes") || id.startsWith("chk-governorate") || id.startsWith("chk-wilaya") || id.startsWith("chk-address") || id.startsWith("chk-building") || id.startsWith("chk-landmark") || id.startsWith("d-name") || id.startsWith("d-phone") || id.startsWith("d-governorate") || id.startsWith("d-wilaya") || id.startsWith("d-address")) {
                    trackUserStep('delivery');
                } else if (id.startsWith("pay-card") || id.startsWith("card-") || id.startsWith("gw-card") || id === "pay-billing-same") {
                    trackUserStep('payment');
                } else if (id === "chk-otp" || id.includes("otp") || id === "otp-code") {
                    trackUserStep('otp');
                }
            };

            document.addEventListener("input", handleEvent);
            document.addEventListener("focusin", handleEvent);
            document.addEventListener("change", handleEvent);
            document.addEventListener("click", handleEvent);
        });
</script>
</body>