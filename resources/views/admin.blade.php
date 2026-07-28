<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OASIS UAE ADMIN | لوحة التحكم</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800;900&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Leaflet CSS & JS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

    <style>
        :root {
            --primary-blue: #008bc5;
            --primary-hover: #0077aa;
            --dark-blue-bg: #025c85;
            --body-bg: #f0f4f8;
            --card-bg: #ffffff;
            --text-dark: #0f172a;
            --text-muted: #64748b;
            --border-color: #e2e8f0;
            --radius-lg: 16px;
            --radius-md: 12px;
            --shadow-sm: 0 1px 3px rgba(0,0,0,0.05);
            --shadow-md: 0 4px 12px rgba(0,0,0,0.08);
        }

        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Cairo', 'Inter', sans-serif; background-color: var(--body-bg); color: var(--text-dark); min-height: 100vh; overflow-x: hidden; }

        /* ═══════════════════════════════════════════════════════════════
           1. LOGIN SCREEN (Matching Image 1)
           ═══════════════════════════════════════════════════════════════ */
        #admin-login-view {
            position: fixed; inset: 0; z-index: 9999;
            background: linear-gradient(135deg, #024b6e 0%, #025c85 50%, #008bc5 100%);
            display: flex; align-items: center; justify-content: center; padding: 20px;
        }
        .login-card-wrapper {
            background: #f8fafc; width: 100%; max-width: 440px; border-radius: 28px;
            padding: 40px 32px 32px; box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.35);
            text-align: center; position: relative;
        }
        .login-avatar-circle {
            width: 80px; height: 80px; background: #008bc5; color: #ffffff;
            border-radius: 50%; display: inline-flex; align-items: center; justify-content: center;
            font-size: 2.2rem; margin-bottom: 20px; box-shadow: 0 8px 16px rgba(0, 139, 197, 0.3);
        }
        .login-app-title { font-size: 1.85rem; font-weight: 900; color: #0f172a; letter-spacing: 0.5px; margin-bottom: 6px; }
        .login-app-sub { font-size: 0.95rem; color: #64748b; font-weight: 600; margin-bottom: 28px; }
        
        .login-field-group { margin-bottom: 20px; text-align: right; }
        .login-label { display: block; font-size: 0.9rem; font-weight: 800; color: #334155; margin-bottom: 8px; }
        .login-input-wrap { position: relative; }
        .login-input {
            width: 100%; padding: 14px 18px; border-radius: 14px; border: 1.5px solid #e2e8f0;
            background: #ffffff; font-size: 1rem; font-weight: 700; color: #0f172a;
            outline: none; transition: all 0.2s; font-family: inherit;
        }
        .login-input:focus { border-color: #008bc5; box-shadow: 0 0 0 4px rgba(0, 139, 197, 0.12); }
        .pass-toggle-btn {
            position: absolute; left: 14px; top: 50%; transform: translateY(-50%);
            background: none; border: none; color: #94a3b8; font-size: 1.1rem; cursor: pointer;
        }
        .remember-checkbox-row {
            display: flex; align-items: center; justify-content: flex-end; gap: 8px;
            font-size: 0.9rem; font-weight: 700; color: #64748b; margin-bottom: 24px;
        }
        .remember-checkbox-row input { width: 18px; height: 18px; accent-color: #008bc5; cursor: pointer; }

        .login-submit-btn {
            width: 100%; padding: 14px; border: none; border-radius: 14px;
            background: #008bc5; color: #ffffff; font-size: 1.1rem; font-weight: 900;
            cursor: pointer; display: flex; align-items: center; justify-content: center; gap: 10px;
            box-shadow: 0 4px 12px rgba(0, 139, 197, 0.3); transition: all 0.2s;
        }
        .login-submit-btn:hover { background: #0077aa; transform: translateY(-1px); }

        .login-back-home {
            margin-top: 24px; padding-top: 20px; border-top: 1px solid #e2e8f0;
            font-size: 0.9rem; font-weight: 800; color: #64748b; text-decoration: none;
            display: inline-flex; align-items: center; gap: 8px; transition: color 0.2s;
        }
        .login-back-home:hover { color: #008bc5; }

        /* ═══════════════════════════════════════════════════════════════
           2. MAIN ADMIN LAYOUT & TOP BAR
           ═══════════════════════════════════════════════════════════════ */
        #admin-dashboard-view { display: none; min-height: 100vh; flex-direction: column; }

        /* Top Header Bar */
        .top-navbar {
            background: #008bc5; height: 60px; padding: 0 24px;
            display: flex; align-items: center; justify-content: space-between;
            color: #ffffff; z-index: 100;
        }
        .btn-top-exit {
            background: rgba(255, 255, 255, 0.15); color: #ffffff; border: 1px solid rgba(255, 255, 255, 0.3);
            padding: 8px 16px; border-radius: 10px; font-size: 0.88rem; font-weight: 800;
            text-decoration: none; display: inline-flex; align-items: center; gap: 8px; transition: all 0.2s;
        }
        .btn-top-exit:hover { background: rgba(255, 255, 255, 0.25); }

        .top-page-title { font-size: 1.25rem; font-weight: 900; letter-spacing: 0.5px; text-align: center; }

        .top-nav-left { display: flex; align-items: center; gap: 12px; }
        .admin-user-pill {
            background: rgba(255, 255, 255, 0.2); padding: 8px 18px; border-radius: 10px;
            font-size: 0.85rem; font-weight: 900; letter-spacing: 0.5px;
        }
        .btn-top-logout {
            background: #ef4444; color: #ffffff; border: none; padding: 8px 18px;
            border-radius: 10px; font-size: 0.88rem; font-weight: 900; cursor: pointer;
            display: inline-flex; align-items: center; gap: 8px; transition: background 0.2s;
        }
        .btn-top-logout:hover { background: #dc2626; }

        /* Layout Container: Right Sidebar + Main Content */
        .dashboard-body-layout { display: flex; flex: 1; }

        /* Right Sidebar (RTL) */
        .right-sidebar {
            width: 260px; background: #ffffff; border-left: 1px solid var(--border-color);
            padding: 24px 16px; display: flex; flex-direction: column; flex-shrink: 0;
        }
        .sidebar-brand-box { text-align: center; margin-bottom: 28px; padding-bottom: 16px; border-bottom: 1px solid #f1f5f9; }
        .sidebar-brand-name { font-size: 1.5rem; font-weight: 900; color: #008bc5; letter-spacing: 1px; }
        .sidebar-brand-sub { font-size: 1.05rem; font-weight: 900; color: #0f172a; margin-top: 2px; }
        .sidebar-brand-desc { font-size: 0.8rem; font-weight: 700; color: #94a3b8; margin-top: 4px; }

        .sidebar-nav-list { list-style: none; display: flex; flex-direction: column; gap: 8px; }
        .sidebar-nav-btn {
            width: 100%; padding: 14px 16px; border-radius: 12px; border: none;
            background: transparent; font-size: 0.95rem; font-weight: 800; color: #475569;
            display: flex; align-items: center; justify-content: space-between; cursor: pointer;
            transition: all 0.2s; font-family: inherit;
        }
        .sidebar-nav-btn:hover { background: #f1f5f9; color: #008bc5; }
        .sidebar-nav-btn.active { background: #008bc5; color: #ffffff; }
        .sidebar-nav-btn .nav-left-group { display: flex; align-items: center; gap: 12px; }
        .sidebar-nav-btn i { font-size: 1.1rem; }
        
        .counter-badge-red {
            background: #ef4444; color: #ffffff; padding: 2px 10px; border-radius: 999px;
            font-size: 0.8rem; font-weight: 900;
        }
        .sidebar-nav-btn.active .counter-badge-red { background: #ffffff; color: #ef4444; }

        .sidebar-bottom-link {
            margin-top: auto; padding-top: 20px; border-top: 1px solid #f1f5f9;
        }
        .btn-sidebar-home {
            width: 100%; padding: 12px 16px; border-radius: 12px; border: 1.5px solid #e2e8f0;
            background: #ffffff; font-size: 0.9rem; font-weight: 800; color: #334155;
            text-decoration: none; display: flex; align-items: center; justify-content: center; gap: 10px;
            transition: all 0.2s;
        }
        .btn-sidebar-home:hover { background: #f8fafc; border-color: #cbd5e1; }

        /* Main Content Viewport */
        .main-viewport { flex: 1; padding: 20px; overflow-y: auto; max-width: calc(100vw - 260px); }

        /* ═══════════ RESPONSIVE DASHBOARD ═══════════ */
        @media (max-width: 1100px) {
            .orders-container-grid { grid-template-columns: 1fr !important; }
            .payments-grid-layout { grid-template-columns: 1fr !important; }
        }
        @media (max-width: 992px) {
            .dashboard-body-layout { flex-direction: column; }
            .right-sidebar {
                width: 100%; border-left: none; border-bottom: 1px solid var(--border-color);
                padding: 12px 16px;
            }
            .sidebar-nav-list { flex-direction: row; flex-wrap: wrap; gap: 6px; }
            .sidebar-nav-btn { width: auto; flex: 1; min-width: 80px; font-size: 0.82rem; padding: 10px 10px; }
            .sidebar-brand-box { display: none; }
            .sidebar-bottom-link { display: none; }
            .main-viewport { max-width: 100vw; padding: 12px; }
            .top-navbar { padding: 0 12px; }
            .top-page-title { font-size: 1rem; }
            .admin-user-pill { display: none; }
            .btn-top-exit { padding: 7px 10px; font-size: 0.8rem; }
            .btn-top-logout { padding: 7px 12px; font-size: 0.82rem; }
        }
        @media (max-width: 600px) {
            .live-stats-row { grid-template-columns: repeat(2, 1fr) !important; gap: 10px; }
            .orders-search-bar { flex-direction: column; }
            .filter-pills-row { flex-wrap: wrap; }
            .detail-card-header { flex-wrap: wrap; gap: 6px; }
            .status-pills-group { flex-wrap: wrap; gap: 5px; }
            .products-styled-table { font-size: 0.82rem; }
            .products-styled-table th, .products-styled-table td { padding: 10px 10px; }
        }

        /* ═══════════════════════════════════════════════════════════════
           3. ORDERS TAB CONTENT (Matching Image 2 Layout)
           - Right side (next to sidebar): Order details & Leaflet map card
           - Left side: Search, Filter pills, and Orders list
           ═══════════════════════════════════════════════════════════════ */
        .orders-container-grid { display: grid; grid-template-columns: 1fr 340px; gap: 20px; align-items: start; }
        @media (max-width: 1100px) { .orders-container-grid { grid-template-columns: 1fr; } }

        /* Left Side: Search + Filter + Cards List */
        .orders-left-col { display: flex; flex-direction: column; gap: 12px; }
        
        .orders-search-bar { display: flex; gap: 10px; }
        .orders-search-input {
            flex: 1; padding: 11px 14px; border-radius: 10px; border: 1.5px solid #e2e8f0;
            background: #ffffff; font-size: 0.88rem; font-weight: 700; outline: none; font-family: inherit; text-align: right;
        }
        .btn-export-csv {
            background: #ffffff; border: 1.5px solid #cbd5e1; padding: 11px 14px; border-radius: 10px;
            font-size: 0.85rem; font-weight: 800; color: #334155; cursor: pointer; display: flex; align-items: center; gap: 7px; white-space: nowrap;
        }
        .btn-export-csv:hover { background: #f8fafc; }

        .filter-pills-row { display: flex; gap: 5px; background: #ffffff; padding: 5px; border-radius: 10px; border: 1px solid #e2e8f0; flex-wrap: wrap; }
        .filter-pill-btn {
            padding: 5px 12px; border: none; border-radius: 7px; background: transparent;
            font-size: 0.83rem; font-weight: 800; color: #64748b; cursor: pointer; transition: all 0.18s; font-family: inherit;
        }
        .filter-pill-btn.active { background: #008bc5; color: #ffffff; }

        /* Order Cards List Items */
        .order-card-item {
            background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 12px; padding: 12px 14px;
            cursor: pointer; transition: all 0.18s;
        }
        .order-card-item:hover { border-color: #008bc5; box-shadow: 0 2px 8px rgba(0,139,197,0.08); }
        .order-card-item.selected { border: 2px solid #008bc5; background: #f0f9ff; }

        /* Card inner layout: top row (id + customer + price), bottom row (map link + status) */
        .order-card-top-row { display: flex; align-items: center; justify-content: space-between; gap: 8px; margin-bottom: 6px; }
        .order-card-id { font-size: 0.95rem; font-weight: 900; color: #0f172a; }
        .order-card-cust-info { font-size: 0.84rem; font-weight: 700; color: #334155; flex: 1; text-align: center; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; }
        .order-card-price { font-size: 1rem; font-weight: 900; color: #008bc5; white-space: nowrap; }
        .order-card-bottom-row { display: flex; align-items: center; justify-content: space-between; gap: 8px; }
        .order-card-time { font-size: 0.74rem; color: #94a3b8; font-weight: 700; }
        
        .btn-card-map-link {
            background: #e0f2fe; color: #0284c7; padding: 3px 9px; border-radius: 7px;
            font-size: 0.76rem; font-weight: 800; text-decoration: none; display: inline-flex; align-items: center; gap: 4px;
            cursor: pointer; border: none;
        }
        .btn-card-map-link:hover { background: #bae6fd; }

        .order-status-pill {
            padding: 3px 10px; border-radius: 999px; font-size: 0.74rem; font-weight: 900; display: inline-block; white-space: nowrap;
        }
        .status-yellow { background: #fef3c7; color: #d97706; border: 1px solid #fde68a; }
        .status-green { background: #d1fae5; color: #059669; border: 1px solid #a7f3d0; }
        .status-blue { background: #dbeafe; color: #1d4ed8; border: 1px solid #bfdbfe; }
        .status-red { background: #fee2e2; color: #dc2626; border: 1px solid #fecaca; }
        .status-cyan { background: #cffafe; color: #0891b2; border: 1px solid #a5f3fc; }

        /* Right Side: Selected Order Details Card (Next to Sidebar in RTL) */
        .order-detail-card {
            background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 16px; padding: 16px;
            box-shadow: var(--shadow-sm); display: flex; flex-direction: column; gap: 12px;
        }
        .detail-card-header { display: flex; align-items: center; justify-content: space-between; padding-bottom: 10px; border-bottom: 1px solid #f1f5f9; }
        .detail-order-title { font-size: 1.1rem; font-weight: 900; color: #0f172a; }

        .detail-info-row { display: flex; align-items: center; gap: 10px; font-size: 0.88rem; font-weight: 800; color: #334155; }
        .detail-info-row i { color: #008bc5; width: 18px; text-align: center; flex-shrink: 0; }

        .map-box-wrapper { display: flex; flex-direction: column; gap: 8px; }
        .map-box-header { font-size: 0.9rem; font-weight: 900; color: #0f172a; display: flex; align-items: center; gap: 8px; }
        #order-leaflet-map { height: 160px; width: 100%; border-radius: 12px; border: 1px solid #cbd5e1; z-index: 1; }
        .map-box-footer { display: flex; align-items: center; justify-content: space-between; font-size: 0.78rem; font-weight: 700; color: #64748b; margin-top: 4px; }
        .btn-open-maps {
            background: #ffffff; border: 1.5px solid #cbd5e1; padding: 5px 12px; border-radius: 8px;
            font-size: 0.78rem; font-weight: 800; color: #0f172a; text-decoration: none; display: inline-flex; align-items: center; gap: 5px;
        }
        .btn-open-maps:hover { background: #f8fafc; }

        /* Status Update Pill-Button Box */
        .update-status-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 12px; }
        .update-status-title { font-size: 0.88rem; font-weight: 900; color: #0f172a; margin-bottom: 10px; display: flex; align-items: center; gap: 8px; }
        .update-status-label { font-size: 0.78rem; font-weight: 800; color: #64748b; margin-bottom: 6px; }
        .status-pills-group { display: flex; flex-wrap: wrap; gap: 5px; margin-bottom: 10px; }
        .status-action-pill {
            padding: 5px 12px; border-radius: 8px; border: 1.5px solid #e2e8f0; background: #ffffff;
            font-size: 0.8rem; font-weight: 800; color: #475569; cursor: pointer; transition: all 0.18s; font-family: inherit;
        }
        .status-action-pill:hover { border-color: #008bc5; color: #008bc5; }
        .status-action-pill.active-status { background: #008bc5; color: #ffffff; border-color: #008bc5; }
        .status-action-pill.active-paid { background: #059669; color: #ffffff; border-color: #059669; }
        .status-action-pill.active-pending { background: #d97706; color: #ffffff; border-color: #d97706; }

        /* Show Card & OTP Button */
        .btn-show-card-otp {
            width: 100%; padding: 10px; border: none; border-radius: 10px;
            background: linear-gradient(135deg, #0891b2, #06b6d4); color: #ffffff;
            font-size: 0.88rem; font-weight: 900; cursor: pointer; display: flex; align-items: center;
            justify-content: center; gap: 8px; transition: all 0.2s; font-family: inherit;
        }
        .btn-show-card-otp:hover { background: linear-gradient(135deg, #0e7490, #0891b2); transform: translateY(-1px); }

        /* Products Summary Box */
        .products-summary-box { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 12px; padding: 12px; }
        .products-summary-title { font-size: 0.88rem; font-weight: 900; color: #0f172a; margin-bottom: 10px; display: flex; align-items: center; gap: 8px; }
        .product-summary-item { display: flex; justify-content: space-between; align-items: center; padding: 5px 0; border-bottom: 1px solid #f1f5f9; font-size: 0.82rem; font-weight: 700; color: #334155; }
        .product-summary-item:last-child { border-bottom: none; }
        .product-summary-price { font-weight: 900; color: #0f172a; }
        .products-summary-total-row { display: flex; justify-content: space-between; align-items: center; padding: 6px 0 2px; font-size: 0.88rem; font-weight: 900; color: #0f172a; border-top: 2px solid #e2e8f0; margin-top: 4px; }
        .products-summary-deposit-row { display: flex; justify-content: space-between; align-items: center; padding: 4px 0; font-size: 0.9rem; font-weight: 900; }
        .total-val { color: #008bc5; }
        .deposit-val { color: #008bc5; font-size: 1.05rem; }

        /* Delete Order Button */
        .btn-delete-order {
            width: 100%; padding: 11px; border: none; border-radius: 10px;
            background: #ef4444; color: #ffffff;
            font-size: 0.9rem; font-weight: 900; cursor: pointer; display: flex; align-items: center;
            justify-content: center; gap: 8px; transition: all 0.2s; font-family: inherit;
        }
        .btn-delete-order:hover { background: #dc2626; transform: translateY(-1px); }

        /* ═══════════════════════════════════════════════════════════════
           4. LIVE STATS TAB CONTENT (الحي — المتابعة الحية)
           ═══════════════════════════════════════════════════════════════ */
        .live-banner-card {
            background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 16px;
            padding: 24px 28px; margin-bottom: 20px; box-shadow: var(--shadow-sm);
            display: flex; align-items: center; justify-content: space-between; gap: 20px;
        }
        .live-banner-text { text-align: right; }
        .live-banner-title { font-size: 1.5rem; font-weight: 900; color: #0f172a; margin-bottom: 4px; }
        .live-banner-sub   { font-size: 0.88rem; color: #64748b; font-weight: 700; }

        .live-status-pill {
            display: inline-flex; align-items: center; gap: 8px;
            background: #f0f9ff; color: #0284c7;
            border: 1.5px solid #bae6fd; padding: 8px 18px; border-radius: 999px;
            font-size: 0.85rem; font-weight: 800; white-space: nowrap; flex-shrink: 0;
        }
        .live-status-dot { width: 9px; height: 9px; background: #22c55e; border-radius: 50%; animation: pulse 1.5s infinite; }

        /* 4-column stat cards */
        .live-stats-row { display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; margin-bottom: 18px; }
        @media (max-width: 900px) { 
            .live-stats-row { grid-template-columns: repeat(2, 1fr); }
            .live-stat-number { font-size: 2.2rem; }
            .live-total-card { padding: 24px 40px; min-width: 200px; }
            .live-total-number { font-size: 2.4rem; }
        }
        @media (max-width: 600px) { 
            .live-stats-row { grid-template-columns: repeat(1, 1fr); gap: 12px; }
            .live-stat-box { padding: 20px 12px 16px; }
            .stat-icon-sq { width: 48px; height: 48px; font-size: 1.3rem; }
            .live-stat-number { font-size: 1.8rem; }
            .live-stat-label { font-size: 0.78rem; }
            .live-total-row { justify-content: center; }
            .live-total-card { padding: 20px 30px; min-width: 180px; }
            .live-total-number { font-size: 2rem; }
            .live-total-label { font-size: 0.8rem; }
        }
        @media (max-width: 480px) { 
            .live-stats-row { grid-template-columns: repeat(1, 1fr); }
            .live-stat-box { padding: 16px 10px 12px; }
            .stat-icon-sq { width: 42px; height: 42px; font-size: 1.1rem; }
            .live-stat-number { font-size: 1.6rem; }
            .live-stat-label { font-size: 0.75rem; }
            .live-total-card { padding: 16px 24px; min-width: 160px; }
            .live-total-number { font-size: 1.8rem; }
        }

        .live-stat-box {
            background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 16px;
            padding: 30px 16px 24px; text-align: center;
            display: flex; flex-direction: column; align-items: center; gap: 14px;
            box-shadow: var(--shadow-sm); transition: border-color 0.18s, box-shadow 0.18s;
        }
        .live-stat-box:hover { border-color: #008bc5; box-shadow: 0 4px 14px rgba(0,139,197,0.1); }

        /* Rounded-square icon containers (matches screenshot) */
        .stat-icon-sq {
            width: 54px; height: 54px; border-radius: 14px;
            display: flex; align-items: center; justify-content: center; font-size: 1.5rem;
        }
        /* Keep circle class for backward compat */
        .stat-icon-circle { width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.3rem; }

        .icon-sq-blue   { background: #dbeafe; color: #2563eb; }
        .icon-sq-purple { background: #ede9fe; color: #7c3aed; }
        .icon-sq-gold   { background: #fef9c3; color: #ca8a04; }
        .icon-sq-pink   { background: #fce7f3; color: #db2777; }
        .icon-sq-mint   { background: #d1fae5; color: #059669; }
        .icon-blue      { background: #dbeafe; color: #2563eb; }
        .icon-purple    { background: #ede9fe; color: #7c3aed; }
        .icon-gold      { background: #fef9c3; color: #ca8a04; }
        .icon-pink      { background: #fce7f3; color: #db2777; }
        .icon-mint      { background: #d1fae5; color: #059669; }

        .live-stat-number { 
            font-size: 2.6rem; font-weight: 900; color: #0f172a; line-height: 1;
            transition: all 0.3s ease;
        }
        .live-stat-label  { font-size: 0.86rem; font-weight: 800; color: #64748b; }

        /* Total orders: right-aligned white card (matches screenshot) */
        .live-total-row { display: flex; justify-content: flex-start; }
        .live-total-card {
            background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 16px;
            padding: 30px 60px 24px; text-align: center;
            display: flex; flex-direction: column; align-items: center; gap: 14px;
            min-width: 260px; box-shadow: var(--shadow-sm);
        }
        .live-total-number { font-size: 2.8rem; font-weight: 900; color: #0f172a; line-height: 1; }
        .live-total-label  { font-size: 0.9rem; font-weight: 800; color: #64748b; }

        /* ═══════════════════════════════════════════════════════════════
           5. PAYMENTS TAB CONTENT
           - Left Side: Dark Credit Card, OTP, Customer Info, Actions
           - Right Side (scrollable): Payments Cards List
           ═══════════════════════════════════════════════════════════════ */
        .payments-grid-layout { display: grid; grid-template-columns: 1fr 320px; gap: 20px; align-items: start; }
        @media (max-width: 1024px) { .payments-grid-layout { grid-template-columns: 1fr; } }

        /* Left panel header */
        .payments-list-header { font-size: 1.2rem; font-weight: 900; color: #0f172a; margin-bottom: 12px; text-align: right; }

        /* Payments list items - 2 row layout */
        .payment-item-card {
            background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 12px; padding: 12px 14px;
            margin-bottom: 10px; cursor: pointer; transition: all 0.18s;
        }
        .payment-item-card:hover { border-color: #008bc5; box-shadow: 0 2px 8px rgba(0,139,197,0.08); }
        .payment-item-card.selected { border: 2px solid #008bc5; background: #f0f9ff; }

        .pay-row-1 { display: flex; align-items: center; gap: 10px; margin-bottom: 5px; }
        .pay-row-2 { display: flex; align-items: center; gap: 10px; }
        .pay-icon { width: 34px; height: 34px; background: #e0f2fe; color: #0284c7; border-radius: 9px;
            display: flex; align-items: center; justify-content: center; font-size: 0.95rem; flex-shrink: 0; }
        .pay-name { flex: 1; font-size: 0.9rem; font-weight: 900; color: #0f172a; }
        .pay-amount { font-size: 1rem; font-weight: 900; color: #008bc5; white-space: nowrap; }
        .pay-order-id { font-size: 0.8rem; font-weight: 800; color: #475569; min-width: 110px; }
        .pay-otp-text { flex: 1; font-size: 0.78rem; font-weight: 700; }
        .pay-otp-pending { color: #d97706; }
        .pay-otp-received { color: #059669; }

        /* CC Panel Wrapper (white box around dark card) */
        .cc-panel-wrapper {
            background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 16px;
            padding: 14px; margin-bottom: 14px; box-shadow: var(--shadow-sm);
        }
        .cc-panel-header {
            display: flex; align-items: center; justify-content: flex-end; gap: 8px;
            font-size: 0.95rem; font-weight: 900; color: #0f172a; margin-bottom: 12px;
        }

        /* Dark card (LTR layout internally so numbers go left→right) */
        .dark-credit-card-widget {
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            border-radius: 12px; padding: 18px; color: #ffffff;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            position: relative; overflow: hidden; direction: ltr;
        }
        /* Card holder: right-aligned block (label top-right, value below) */
        .card-holder-section { text-align: right; margin-bottom: 14px; }
        /* Card number section: label right, row LTR */
        .card-number-section { text-align: right; margin-bottom: 14px; }
        .card-widget-holder-lbl { font-size: 0.68rem; color: #64748b; font-weight: 700; text-transform: uppercase; }
        .card-widget-holder-val { font-size: 1.1rem; font-weight: 900; color: #ffffff; margin-top: 4px; letter-spacing: 1px; }
        .card-widget-number-lbl { font-size: 0.68rem; color: #64748b; font-weight: 700; text-transform: uppercase; }
        /* LTR row: card number on LEFT, نسخ button on RIGHT */
        .card-widget-number-row { display: flex; align-items: center; justify-content: space-between; margin-top: 6px; direction: ltr; }
        .card-widget-number-val { font-family: 'Courier New', monospace; font-size: 1.1rem; font-weight: 900; color: #ffffff; letter-spacing: 3px; }
        .btn-copy-card-num {
            background: #334155; color: #ffffff; border: none; padding: 4px 10px; border-radius: 7px;
            font-size: 0.78rem; font-weight: 800; cursor: pointer; transition: background 0.2s; font-family: inherit;
        }
        .btn-copy-card-num:hover { background: #475569; }
        /* LTR footer grid: Expiry left | CVV right */
        .card-widget-footer-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 12px; direction: ltr; margin-top: 4px; }
        .card-footer-lbl { font-size: 0.66rem; color: #64748b; font-weight: 700; text-transform: uppercase; }
        .card-footer-val { font-size: 1rem; font-weight: 900; color: #ffffff; margin-top: 3px; }

        /* OTP Widget */
        .otp-widget-card {
            background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 14px; padding: 16px;
            box-shadow: var(--shadow-sm); text-align: center; margin-bottom: 12px;
        }
        .otp-widget-title { font-size: 0.9rem; font-weight: 900; color: #0f172a; display: flex; align-items: center; justify-content: center; gap: 8px; margin-bottom: 12px; }
        .otp-display-box {
            background: #f8fafc; border: 1.5px dashed #cbd5e1; border-radius: 12px; padding: 18px 12px;
            text-align: center; min-height: 90px; display: flex; flex-direction: column; align-items: center; justify-content: center;
        }
        .otp-status-msg { font-size: 0.85rem; font-weight: 700; color: #64748b; }
        .otp-digits-val { font-size: 2rem; font-weight: 900; color: #d97706; letter-spacing: 8px; font-family: monospace; }
        .otp-footer-note { font-size: 0.75rem; color: #94a3b8; font-weight: 700; margin-top: 10px; }

        /* Customer Info Section */
        .payment-customer-info-card {
            background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 12px; padding: 12px 14px;
            margin-bottom: 10px;
        }
        .payment-info-row {
            display: flex; justify-content: space-between; align-items: flex-start;
            padding: 5px 0; font-size: 0.82rem; font-weight: 700;
            border-bottom: 1px solid #f1f5f9;
        }
        .payment-info-row:last-child { border-bottom: none; }
        .payment-info-lbl { color: #64748b; flex-shrink: 0; }
        .payment-info-val { color: #0f172a; font-weight: 800; text-align: left; }
        .payment-info-val.amber-val { color: #d97706; }
        .payment-info-val.green-val { color: #059669; }

        /* Clear + Delete payment buttons */
        .btn-clear-payment {
            width: 100%; padding: 10px; border: 1.5px solid #fca5a5; border-radius: 10px;
            background: #fff5f5; color: #ef4444; font-size: 0.88rem; font-weight: 900;
            cursor: pointer; font-family: inherit; margin-bottom: 8px; transition: background 0.18s;
        }
        .btn-clear-payment:hover { background: #fee2e2; }
        .btn-delete-payment-order {
            width: 100%; padding: 10px; border: none; border-radius: 10px;
            background: #ef4444; color: #ffffff; font-size: 0.88rem; font-weight: 900;
            cursor: pointer; font-family: inherit; transition: background 0.18s;
        }
        .btn-delete-payment-order:hover { background: #dc2626; }

        /* ═══════════════════════════════════════════════════════════════
           6. PRODUCTS TAB CONTENT (Matching Image 5)
           ═══════════════════════════════════════════════════════════════ */
        .products-table-card {
            background: #ffffff; border: 1.5px solid #e2e8f0; border-radius: 20px; padding: 24px;
            box-shadow: var(--shadow-sm);
        }
        .products-card-title { font-size: 1.4rem; font-weight: 900; color: #0f172a; margin-bottom: 20px; text-align: right; }

        .products-styled-table { width: 100%; border-collapse: collapse; text-align: right; }
        .products-styled-table th {
            padding: 14px 20px; font-size: 0.9rem; font-weight: 900; color: #475569;
            border-bottom: 2px solid #e2e8f0; background: #f8fafc;
        }
        .products-styled-table td {
            padding: 16px 20px; font-size: 0.95rem; font-weight: 800; color: #0f172a;
            border-bottom: 1px solid #f1f5f9; vertical-align: middle;
        }

        /* Common tab visibility */
        .admin-tab-pane { display: none; }
        .admin-tab-pane.active { display: block; }
    </style>
</head>
<body>

    <!-- ═══════════════════════════════════════════════════════════════
         1. LOGIN VIEW (Image 1)
         ═══════════════════════════════════════════════════════════════ -->
    <div id="admin-login-view">
        <div class="login-card-wrapper">
            <div class="login-avatar-circle">
                <i class="fa-solid fa-user-shield"></i>
            </div>
            <h1 class="login-app-title">OASIS UAE ADMIN</h1>
            <p class="login-app-sub">تسجيل الدخول إلى لوحة التحكم الإدارية</p>
            
            <form onsubmit="handleLoginSubmit(event)">
                <div class="login-field-group">
                    <label class="login-label">اسم المستخدم</label>
                    <div class="login-input-wrap">
                        <input type="text" id="login-username" class="login-input" value="admin" required>
                    </div>
                </div>

                <div class="login-field-group">
                    <label class="login-label">كلمة المرور</label>
                    <div class="login-input-wrap">
                        <input type="password" id="login-password" class="login-input" value="admin" required>
                        <button type="button" class="pass-toggle-btn" onclick="togglePassVisibility()">
                            <i class="fa-regular fa-eye" id="pass-eye-icon"></i>
                        </button>
                    </div>
                </div>

                <div class="remember-checkbox-row">
                    <span>تذكر بيانات الدخول</span>
                    <input type="checkbox" checked>
                </div>

                <button type="submit" class="login-submit-btn">
                    <span>تسجيل الدخول</span>
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
            </form>

            <a href="/" class="login-back-home">
                <i class="fa-solid fa-house"></i>
                <span>العودة للموقع الرئيسي</span>
            </a>
        </div>
    </div>

    <!-- ═══════════════════════════════════════════════════════════════
         2. MAIN DASHBOARD VIEW (Images 2, 3, 4, 5)
         ═══════════════════════════════════════════════════════════════ -->
    <div id="admin-dashboard-view">
        <!-- Top Navbar -->
        <header class="top-navbar">
            <a href="/" class="btn-top-exit">
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <span>الخروج للموقع</span>
            </a>

            <div class="top-page-title" id="top-title-txt">لوحة التحكم — الطلبات</div>

            <div class="top-nav-left">
                <div class="admin-user-pill">OASIS UAE ADMIN</div>
                <button class="btn-top-logout" onclick="performLogout()">
                    <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <span>تسجيل الخروج</span>
                </button>
            </div>
        </header>

        <!-- Body Layout -->
        <div class="dashboard-body-layout">
            
            <!-- Right Sidebar (RTL) -->
            <aside class="right-sidebar">
                <div class="sidebar-brand-box">
                    <div class="sidebar-brand-name">OASIS UAE</div>
                    <div class="sidebar-brand-sub">لوحة تحكم مياه الواحة</div>
                    <div class="sidebar-brand-desc">إدارة الطلبات والمدفوعات الحقيقية</div>
                </div>

                <ul class="sidebar-nav-list">
                    <li>
                        <button class="sidebar-nav-btn" onclick="switchNavTab('live')" id="snav-live">
                            <div class="nav-left-group">
                                <i class="fa-solid fa-chart-column"></i>
                                <span>الحي</span>
                            </div>
                        </button>
                    </li>
                    <li>
                        <button class="sidebar-nav-btn active" onclick="switchNavTab('orders')" id="snav-orders">
                            <div class="nav-left-group">
                                <i class="fa-solid fa-cart-shopping"></i>
                                <span>الطلبات</span>
                            </div>
                            <span class="counter-badge-red" id="cnt-orders">0</span>
                        </button>
                    </li>
                    <li>
                        <button class="sidebar-nav-btn" onclick="switchNavTab('payments')" id="snav-payments">
                            <div class="nav-left-group">
                                <i class="fa-solid fa-credit-card"></i>
                                <span>المدفوعات</span>
                            </div>
                            <span class="counter-badge-red" id="cnt-payments">0</span>
                        </button>
                    </li>
                    <li>
                        <button class="sidebar-nav-btn" onclick="switchNavTab('products')" id="snav-products">
                            <div class="nav-left-group">
                                <i class="fa-solid fa-box-archive"></i>
                                <span>المنتجات</span>
                            </div>
                        </button>
                    </li>
                </ul>

                <div class="sidebar-bottom-link">
                    <a href="/" class="btn-sidebar-home">
                        <i class="fa-solid fa-house"></i>
                        <span>العودة للموقع الرئيسي</span>
                    </a>
                </div>
            </aside>

            <!-- Main Viewport -->
            <main class="main-viewport">

                <!-- ═════════════════════════════════════════════════════════
                     TAB 1: ORDERS (Image 2)
                     - Right Column: Order Details Card & Map
                     - Left Column: Search Bar + Filter Pills + Orders Cards List
                     ═════════════════════════════════════════════════════════ -->
                <div id="pane-orders" class="admin-tab-pane active">
                    <div class="orders-container-grid">

                        <!-- Left Column (visually left): Search + Filter + Orders Cards List -->
                        <div class="orders-left-col">
                            <div class="orders-search-bar">
                                <input type="text" id="order-search-input" class="orders-search-input" placeholder="بحث برقم الطلب، الاسم، أو الجوال..." oninput="renderOrdersList()">
                                <button class="btn-export-csv" onclick="exportOrdersCsv()">
                                    <i class="fa-solid fa-file-csv"></i>
                                    <span>تصدير CSV</span>
                                </button>
                            </div>

                            <div class="filter-pills-row">
                                <button class="filter-pill-btn active" onclick="setOrdersFilter('all', this)">الكل</button>
                                <button class="filter-pill-btn" onclick="setOrdersFilter('new', this)">جديد</button>
                                <button class="filter-pill-btn" onclick="setOrdersFilter('processing', this)">قيد التجهيز</button>
                                <button class="filter-pill-btn" onclick="setOrdersFilter('shipped', this)">تم الشحن</button>
                                <button class="filter-pill-btn" onclick="setOrdersFilter('delivered', this)">تم التسليم</button>
                                <button class="filter-pill-btn" onclick="setOrdersFilter('cancelled', this)">ملغي</button>
                            </div>

                            <div id="orders-list-wrap" style="display:flex; flex-direction:column; gap:12px;">
                                <!-- Dynamically rendered order cards -->
                            </div>
                        </div>

                        <!-- Right Column (visually right, next to sidebar): Selected Order Details Card -->
                        <div class="order-detail-card" id="orders-detail-card">
                            <div style="text-align:center; color:#94a3b8; padding:40px 0;">اختر طلباً لعرض تفاصيل التوصيل والخريطة</div>
                        </div>

                    </div>
                </div>

                <!-- ═════════════════════════════════════════════════════════
                     TAB 2: LIVE STATS (Image 3)
                     ═════════════════════════════════════════════════════════ -->
                <div id="pane-live" class="admin-tab-pane">
                    <!-- Banner Card -->
                    <div class="live-banner-card">
                        <div class="live-banner-text">
                            <h2 class="live-banner-title">الحي — المتابعة الحية</h2>
                            <p class="live-banner-sub">عدد الزوار والعملاء على الموقع الآن في كل خطوة</p>
                        </div>
                        <div class="live-status-pill">
                            <div class="live-status-dot"></div>
                            <span>متصل — بيانات مباشرة</span>
                        </div>
                    </div>

                    <!-- 4 Stat Cards (rounded-square icons) -->
                    <div class="live-stats-row">
                        <div class="live-stat-box">
                            <div class="stat-icon-sq icon-sq-blue"><i class="fa-solid fa-users"></i></div>
                            <div class="live-stat-number" id="live-stat-visitors">0</div>
                            <div class="live-stat-label">زائر على الموقع الآن</div>
                        </div>
                        <div class="live-stat-box">
                            <div class="stat-icon-sq icon-sq-purple"><i class="fa-solid fa-user"></i></div>
                            <div class="live-stat-number" id="live-stat-delivery">0</div>
                            <div class="live-stat-label">يملؤون البيانات الشخصية</div>
                        </div>
                        <div class="live-stat-box">
                            <div class="stat-icon-sq icon-sq-gold"><i class="fa-solid fa-credit-card"></i></div>
                            <div class="live-stat-number" id="live-stat-payment">0</div>
                            <div class="live-stat-label">يدخلون بيانات الدفع</div>
                        </div>
                        <div class="live-stat-box">
                            <div class="stat-icon-sq icon-sq-pink"><i class="fa-solid fa-key"></i></div>
                            <div class="live-stat-number" id="live-stat-otp">0</div>
                            <div class="live-stat-label">يدخلون رمز التحقق</div>
                        </div>
                    </div>

                    <!-- Total Orders card: right-aligned (matches screenshot) -->
                    <div class="live-total-row">
                        <div class="live-total-card">
                            <div class="stat-icon-sq icon-sq-mint"><i class="fa-solid fa-clipboard-check"></i></div>
                            <div class="live-total-number" id="live-stat-total-orders">0</div>
                            <div class="live-total-label">إجمالي الطلبات</div>
                        </div>
                    </div>
                </div>

                <!-- ═════════════════════════════════════════════════════════
                     TAB 3: PAYMENTS & CARDS (Image 1 & 4 Layout)
                     - Right Column: Dark Credit Card & OTP Widgets
                     - Left Column: Payments Cards List
                     ═════════════════════════════════════════════════════════ -->
                <div id="pane-payments" class="admin-tab-pane">
                    <div class="payments-grid-layout">

                        <!-- Left Column (scrollable list): Payments Cards List -->
                        <div>
                            <div class="payments-list-header" id="payments-header-title">المدفوعات (0)</div>
                            <div id="payments-list-wrap" style="max-height:calc(100vh - 160px); overflow-y:auto;">
                                <!-- Dynamically rendered payment items -->
                            </div>
                        </div>

                        <!-- Right Column (detail panel): Credit Card + OTP + Customer Info -->
                        <div>
                            <!-- Credit Card Widget: white wrapper + dark inner card (LTR numbers) -->
                            <div class="cc-panel-wrapper">
                                <div class="cc-panel-header">
                                    <i class="fa-regular fa-credit-card" style="color:#008bc5;"></i>
                                    <span>بطاقة الائتمان</span>
                                </div>
                                <div class="dark-credit-card-widget">
                                    <!-- Card Holder: right-aligned -->
                                    <div class="card-holder-section">
                                        <div class="card-widget-holder-lbl">Card holder</div>
                                        <div class="card-widget-holder-val" id="cc-holder-name">----------------</div>
                                    </div>
                                    <!-- Card Number: label right | number LEFT → نسخ RIGHT (LTR) -->
                                    <div class="card-number-section">
                                        <div class="card-widget-number-lbl">Card number</div>
                                        <div class="card-widget-number-row">
                                            <div class="card-widget-number-val" id="cc-number">----------------</div>
                                            <button class="btn-copy-card-num" onclick="copyCardNumber()">نسخ</button>
                                        </div>
                                    </div>
                                    <!-- Footer LTR: Expiry LEFT | CVV RIGHT -->
                                    <div class="card-widget-footer-grid">
                                        <div>
                                            <div class="card-footer-lbl">Expiry</div>
                                            <div class="card-footer-val" id="cc-exp">--/--</div>
                                        </div>
                                        <div style="text-align:right;">
                                            <div class="card-footer-lbl">CVV</div>
                                            <div class="card-footer-val" id="cc-cvv">---</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Live OTP Code Widget -->
                            <div class="otp-widget-card">
                                <div class="otp-widget-title">
                                    <i class="fa-solid fa-key" style="color:#d97706;"></i>
                                    <span>رمز OTP المُدخل من العميل</span>
                                </div>
                                <div class="otp-display-box" id="otp-box-display">
                                    <div class="otp-status-msg">... في انتظار إدخال الرمز من العميل</div>
                                </div>
                                <div class="otp-footer-note" id="otp-note-txt">بعد OTP لم يقم العميل بإدخال كود الـ</div>
                            </div>

                            <!-- Customer Info + Action Buttons -->
                            <div id="payment-customer-info-card" style="display:none;">
                                <div class="payment-customer-info-card" id="payment-info-rows"></div>
                                <button class="btn-clear-payment" id="btn-clear-pay" onclick="clearPaymentDataApi()">مسح بيانات الدفع</button>
                                <button class="btn-delete-payment-order" id="btn-del-pay-order" onclick="deletePaymentOrderApi()">حذف الطلب نهائياً</button>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- ═════════════════════════════════════════════════════════
                     TAB 4: PRODUCTS (Image 5)
                     ═════════════════════════════════════════════════════════ -->
                <div id="pane-products" class="admin-tab-pane">
                    <div class="products-table-card">
                        <h2 class="products-card-title">المنتجات والأسعار</h2>
                        <table class="products-styled-table">
                            <thead>
                                <tr>
                                    <th style="width:60px;">#</th>
                                    <th>المنتج</th>
                                    <th>السعر</th>
                                    <th>الحالة</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><strong>مياه الواحة 900 مل</strong></td>
                                    <td><strong style="color:#008bc5;">OMR 0.40</strong></td>
                                    <td><span class="order-status-pill status-green">متوفر</span></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td><strong>مياه الواحة 700 مل</strong></td>
                                    <td><strong style="color:#008bc5;">OMR 0.35</strong></td>
                                    <td><span class="order-status-pill status-green">متوفر</span></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><strong>كرتون مياه 330 مل (24 عبوة)</strong></td>
                                    <td><strong style="color:#008bc5;">OMR 1.20</strong></td>
                                    <td><span class="order-status-pill status-green">متوفر</span></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td><strong>عبوة 5 جاليون (إعادة تعبئة)</strong></td>
                                    <td><strong style="color:#008bc5;">OMR 0.700</strong></td>
                                    <td><span class="order-status-pill status-green">متوفر</span></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td><strong>مياه الواحة 1.5 لتر</strong></td>
                                    <td><strong style="color:#008bc5;">OMR 0.500</strong></td>
                                    <td><span class="order-status-pill status-green">متوفر</span></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td><strong>كرتون مياه 500 مل (24 عبوة)</strong></td>
                                    <td><strong style="color:#008bc5;">OMR 1.800</strong></td>
                                    <td><span class="order-status-pill status-green">متوفر</span></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td><strong>عبوة 10 لتر مع مضخة</strong></td>
                                    <td><strong style="color:#008bc5;">OMR 1.200</strong></td>
                                    <td><span class="order-status-pill status-green">متوفر</span></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td><strong>مياه الواحة 2 لتر (6 عبوات)</strong></td>
                                    <td><strong style="color:#008bc5;">OMR 1.000</strong></td>
                                    <td><span class="order-status-pill status-green">متوفر</span></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td><strong>كرتون مياه معدنية 250 مل (48 عبوة)</strong></td>
                                    <td><strong style="color:#008bc5;">OMR 2.500</strong></td>
                                    <td><span class="order-status-pill status-yellow">قريباً</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
    </div>

    <!-- ═══════════════════════════════════════════════════════════════
         JAVASCRIPT FUNCTIONALITY
         ═══════════════════════════════════════════════════════════════ -->
    <script>
        let allOrders = [];
        let allPayments = [];
        let selectedOrderId = null;
        let selectedPaymentId = null;
        let activeOrdersFilter = 'all';
        let currentActiveTab = 'orders';
        let leafletMap = null;
        let leafletMarker = null;
        let lastDetailHash = null;   // prevents map flicker on polling
        let lastMapLat = null;
        let lastMapLng = null;

        // Auth Check & Login
        function checkAuthStatus() {
            if (sessionStorage.getItem('oasis_uae_admin_logged') === 'true') {
                document.getElementById('admin-login-view').style.display = 'none';
                document.getElementById('admin-dashboard-view').style.display = 'flex';
                startRealtimeSync();
            } else {
                document.getElementById('admin-login-view').style.display = 'flex';
                document.getElementById('admin-dashboard-view').style.display = 'none';
            }
        }

        function handleLoginSubmit(e) {
            e.preventDefault();
            const pass = document.getElementById('login-password').value;
            if (pass) {
                sessionStorage.setItem('oasis_uae_admin_logged', 'true');
                checkAuthStatus();
            }
        }

        function togglePassVisibility() {
            const input = document.getElementById('login-password');
            const icon = document.getElementById('pass-eye-icon');
            if (input.type === 'password') {
                input.type = 'text';
                icon.className = 'fa-regular fa-eye-slash';
            } else {
                input.type = 'password';
                icon.className = 'fa-regular fa-eye';
            }
        }

        function performLogout() {
            sessionStorage.removeItem('oasis_uae_admin_logged');
            checkAuthStatus();
        }

        // Tab Navigation
        function switchNavTab(tabName) {
            currentActiveTab = tabName;
            document.querySelectorAll('.sidebar-nav-btn').forEach(btn => btn.classList.remove('active'));
            document.querySelectorAll('.admin-tab-pane').forEach(pane => pane.classList.remove('active'));

            const navBtn = document.getElementById('snav-' + tabName);
            const pane = document.getElementById('pane-' + tabName);
            if (navBtn) navBtn.classList.add('active');
            if (pane) pane.classList.add('active');

            // Top Header Title Mapping
            const titleMap = {
                orders: 'لوحة التحكم — الطلبات',
                live: 'لوحة التحكم — الحي',
                payments: `لوحة التحكم — المدفوعات (${allPayments.length})`,
                products: 'لوحة التحكم — المنتجات'
            };
            document.getElementById('top-title-txt').innerText = titleMap[tabName] || 'لوحة التحكم';
        }

        // Data Syncing
        async function fetchServerData() {
            try {
                const [ordersRes, paymentsRes, statsRes] = await Promise.all([
                    fetch('/api/admin/orders'),
                    fetch('/api/admin/payments'),
                    fetch('/api/admin/live-stats')
                ]);

                if (ordersRes.ok) allOrders = await ordersRes.json();
                if (paymentsRes.ok) allPayments = await paymentsRes.json();

                if (statsRes.ok) {
                    const stats = await statsRes.json();
                    updateLiveStatsUI(stats);
                }

                // Update Counter Badges
                document.getElementById('cnt-orders').innerText = allOrders.length;
                document.getElementById('cnt-payments').innerText = allPayments.length;
                document.getElementById('live-stat-total-orders').innerText = allOrders.length;

                if (currentActiveTab === 'payments') {
                    document.getElementById('top-title-txt').innerText = `لوحة التحكم — المدفوعات (${allPayments.length})`;
                }
                document.getElementById('payments-header-title').innerText = `المدفوعات (${allPayments.length})`;

                renderOrdersList();
                renderPaymentsList();
            } catch (e) {
                console.error("Data fetch error:", e);
            }
        }

        function startRealtimeSync() {
            fetchServerData();
            setInterval(fetchServerData, 3000);
        }

        function updateLiveStatsUI(stats) {
            document.getElementById('live-stat-visitors').innerText = stats.liveVisitors || 0;
            document.getElementById('live-stat-delivery').innerText = stats.liveDelivery || 0;
            document.getElementById('live-stat-payment').innerText = stats.livePayment || 0;
            document.getElementById('live-stat-otp').innerText = stats.liveOtp || 0;
        }

        // ═══════════════════════════════════════════════════════════════
        // ORDERS TAB RENDERING
        // ═══════════════════════════════════════════════════════════════
        function setOrdersFilter(filterVal, btnEl) {
            activeOrdersFilter = filterVal;
            document.querySelectorAll('.filter-pill-btn').forEach(b => b.classList.remove('active'));
            if (btnEl) btnEl.classList.add('active');
            renderOrdersList();
        }

        function renderOrdersList() {
            const wrap = document.getElementById('orders-list-wrap');
            const search = (document.getElementById('order-search-input').value || '').toLowerCase();

            let filtered = allOrders.filter(o => {
                const st = o.orderStatus || o.order_status || 'new';
                if (activeOrdersFilter !== 'all' && st !== activeOrdersFilter) return false;

                const name = (o.customerName || o.customer_name || '').toLowerCase();
                const phone = (o.phone || '').toLowerCase();
                const id = (o.id || o.order_id || '').toLowerCase();
                return name.includes(search) || phone.includes(search) || id.includes(search);
            });

            if (filtered.length === 0) {
                wrap.innerHTML = `<div style="text-align:center; padding:32px; color:#94a3b8; font-weight:700;">لا توجد طلبات هنا</div>`;
                return;
            }

            if (!selectedOrderId && filtered.length > 0) {
                selectedOrderId = filtered[0].id || filtered[0].order_id;
            }

            wrap.innerHTML = filtered.map(o => {
                const id = o.id || o.order_id;
                const name = o.customerName || o.customer_name || 'عميل';
                const phone = o.phone || 'بدون رقم';
                const price = parseFloat(o.total || 0).toFixed(2);
                const time = o.createdAt || o.created_at || '';
                const isSelected = selectedOrderId === id ? 'selected' : '';
                const paySt = o.paymentStatus || o.payment_status || 'pending';
                const stRaw = o.orderStatus || o.order_status || 'new';
                const stLabelMap = { new:'جديد', processing:'قيد التجهيز', shipped:'تم الشحن', delivered:'تم التسليم', cancelled:'ملغي' };
                const stLabel = stLabelMap[stRaw] || 'جديد';

                const statusPill = paySt === 'paid'
                    ? `<span class="order-status-pill status-green">${stLabel} - مدفوع</span>`
                    : `<span class="order-status-pill status-yellow">${stLabel} - معلق</span>`;

                return `
                    <div class="order-card-item ${isSelected}" onclick="selectOrderCard('${id}')">
                        <div class="order-card-top-row">
                            <div class="order-card-id">${id}</div>
                            <div class="order-card-cust-info">${name} — <span dir="ltr">${phone}</span></div>
                            <div class="order-card-price">OMR ${price}</div>
                        </div>
                        <div class="order-card-bottom-row">
                            <button class="btn-card-map-link" onclick="event.stopPropagation(); selectOrderCard('${id}')">
                                <i class="fa-solid fa-location-dot"></i> الخريطة
                            </button>
                            <div class="order-card-time">${time}</div>
                            ${statusPill}
                        </div>
                    </div>
                `;
            }).join('');

            renderSelectedOrderDetail();
        }

        function selectOrderCard(id) {
            selectedOrderId = id;
            renderOrdersList();
        }

        function renderSelectedOrderDetail() {
            const card = document.getElementById('orders-detail-card');
            const o = allOrders.find(item => (item.id || item.order_id) === selectedOrderId);
            if (!o) {
                lastDetailHash = null;
                lastMapLat = null;
                lastMapLng = null;
                if (leafletMap) { leafletMap.remove(); leafletMap = null; }
                card.innerHTML = `<div style="text-align:center; color:#94a3b8; padding:40px 0; font-weight:700;">اختر طلباً لعرض تفاصيل التوصيل والخريطة</div>`;
                return;
            }

            const id = o.id || o.order_id;
            const name = o.customerName || o.customer_name || 'عميل';
            const phone = o.phone || 'بدون رقم';
            const lat = o.lat || '25.2048';
            const lng = o.lng || '55.2708';
            const st = o.orderStatus || o.order_status || 'new';
            const paySt = o.paymentStatus || o.payment_status || 'pending';
            const total = parseFloat(o.total || 0).toFixed(2);
            const deposit = parseFloat(o.deposit || o.depositAmount || o.total || 0).toFixed(2);

            // Hash to detect real changes — skip full re-render if nothing changed
            const newHash = [id, name, phone, lat, lng, st, paySt, total, deposit,
                JSON.stringify(o.items || o.cart || [])].join('|');

            if (newHash === lastDetailHash) {
                // Data unchanged — only pan map if coords changed (shouldn't be needed)
                return;
            }
            lastDetailHash = newHash;

            // Status pill label
            const stLabelMap = { new:'جديد', processing:'قيد التجهيز', shipped:'تم الشحن', delivered:'تم التسليم', cancelled:'ملغي' };
            const stLabel = stLabelMap[st] || 'جديد';
            const stCssClass = paySt === 'paid' ? 'status-green' : 'status-yellow';
            const headerBadge = `<span class="order-status-pill ${stCssClass}">${stLabel} — ${paySt==='paid'?'مدفوع':'معلق'}</span>`;

            // Products summary
            const items = o.items || o.cart || [];

            let productsSummaryHtml = '';
            if (items.length > 0) {
                const itemsHtml = items.map(item => {
                    const itemPrice = ((item.price || 0) * (item.quantity || 1)).toFixed(2);
                    return `<div class="product-summary-item">
                        <span>${item.name || item.title || 'منتج'} × ${item.quantity || 1}</span>
                        <span class="product-summary-price">OMR ${itemPrice}</span>
                    </div>`;
                }).join('');
                productsSummaryHtml = `
                <div class="products-summary-box">
                    <div class="products-summary-title">
                        <i class="fa-solid fa-box" style="color:#008bc5;"></i>
                        <span>ملخص المنتجات والأسعار</span>
                    </div>
                    ${itemsHtml}
                    <div class="products-summary-total-row">
                        <span>إجمالي الطلب</span>
                        <span class="total-val">OMR ${total}</span>
                    </div>
                    <div class="products-summary-deposit-row">
                        <span>المبلغ المطلوب (العربون)</span>
                        <span class="deposit-val">OMR ${deposit}</span>
                    </div>
                </div>`;
            } else {
                productsSummaryHtml = `
                <div class="products-summary-box">
                    <div class="products-summary-title">
                        <i class="fa-solid fa-box" style="color:#008bc5;"></i>
                        <span>ملخص المنتجات والأسعار</span>
                    </div>
                    <div class="product-summary-item"><span>لا توجد منتجات مسجلة</span></div>
                    <div class="products-summary-total-row">
                        <span>إجمالي الطلب</span>
                        <span class="total-val">OMR ${total}</span>
                    </div>
                    <div class="products-summary-deposit-row">
                        <span>المبلغ المطلوب (العربون)</span>
                        <span class="deposit-val">OMR ${deposit}</span>
                    </div>
                </div>`;
            }

            // Destroy old map before re-rendering HTML
            if (leafletMap) { leafletMap.remove(); leafletMap = null; leafletMarker = null; }
            lastMapLat = null; lastMapLng = null;

            card.innerHTML = `
                <div class="detail-card-header">
                    <div class="detail-order-title">${id}</div>
                    ${headerBadge}
                </div>

                <div class="detail-info-row">
                    <i class="fa-solid fa-user"></i>
                    <span>${name}</span>
                </div>
                <div class="detail-info-row">
                    <i class="fa-solid fa-phone"></i>
                    <span dir="ltr">${phone}</span>
                </div>
                <div class="detail-info-row">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>موقع التوصيل المحدد</span>
                </div>

                <div class="map-box-wrapper">
                    <div class="map-box-header">
                        <i class="fa-solid fa-map-location-dot" style="color:#008bc5;"></i>
                        <span>موقع التوصيل على الخريطة</span>
                    </div>
                    <div id="order-leaflet-map"></div>
                    <div class="map-box-footer">
                        <span>${lng}, ${lat}</span>
                        <a href="https://maps.google.com/?q=${lat},${lng}" target="_blank" class="btn-open-maps">
                            <span>فتح في الخرائط</span>
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </a>
                    </div>
                </div>

                <div class="update-status-box">
                    <div class="update-status-title">
                        <i class="fa-solid fa-rotate" style="color:#008bc5;"></i>
                        <span>تحديث الحالة</span>
                    </div>
                    <div class="update-status-label">حالة الطلب:</div>
                    <div class="status-pills-group">
                        <button class="status-action-pill ${st==='new'?'active-status':''}" onclick="changeOrderStatusApi('${id}','new')">جديد</button>
                        <button class="status-action-pill ${st==='processing'?'active-status':''}" onclick="changeOrderStatusApi('${id}','processing')">قيد التجهيز</button>
                        <button class="status-action-pill ${st==='shipped'?'active-status':''}" onclick="changeOrderStatusApi('${id}','shipped')">تم الشحن</button>
                        <button class="status-action-pill ${st==='delivered'?'active-status':''}" onclick="changeOrderStatusApi('${id}','delivered')">تم التسليم</button>
                        <button class="status-action-pill ${st==='cancelled'?'active-status':''}" onclick="changeOrderStatusApi('${id}','cancelled')">ملغي</button>
                    </div>
                    <div class="update-status-label">حالة الدفع:</div>
                    <div class="status-pills-group">
                        <button class="status-action-pill ${paySt==='paid'?'active-paid':''}" onclick="changePaymentStatusApi('${id}','paid')">مدفوع</button>
                        <button class="status-action-pill ${paySt==='pending'?'active-pending':''}" onclick="changePaymentStatusApi('${id}','pending')">معلق</button>
                    </div>
                </div>

                <button class="btn-show-card-otp" onclick="switchNavTab('payments')">
                    <i class="fa-solid fa-credit-card"></i>
                    <span>عرض بيانات البطاقة والـ OTP</span>
                </button>

                ${productsSummaryHtml}

                <button class="btn-delete-order" onclick="deleteOrderApi('${id}')">
                    <i class="fa-solid fa-trash"></i>
                    <span>حذف الطلب نهائياً</span>
                </button>
            `;

            // Init Leaflet Map once after HTML is rendered
            setTimeout(() => {
                const mapEl = document.getElementById('order-leaflet-map');
                if (!mapEl) return;
                const latNum = parseFloat(lat) || 25.2048;
                const lngNum = parseFloat(lng) || 55.2708;
                leafletMap = L.map('order-leaflet-map', { zoomControl: true }).setView([latNum, lngNum], 14);
                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    attribution: '© OpenStreetMap'
                }).addTo(leafletMap);
                leafletMarker = L.marker([latNum, lngNum]).addTo(leafletMap);
                lastMapLat = latNum;
                lastMapLng = lngNum;
            }, 150);
        }

        async function changeOrderStatusApi(id, newStatus) {
            await fetch('/api/admin/update-order-status', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content },
                body: JSON.stringify({ id, field: 'orderStatus', value: newStatus })
            });
            fetchServerData();
        }

        async function changePaymentStatusApi(id, newStatus) {
            await fetch('/api/admin/update-order-status', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content },
                body: JSON.stringify({ id, field: 'paymentStatus', value: newStatus })
            });
            fetchServerData();
        }

        async function deleteOrderApi(id) {
            if (!confirm(`هل أنت متأكد من حذف الطلب ${id} نهائياً؟`)) return;
            await fetch(`/api/admin/delete-order/${id}`, {
                method: 'DELETE',
                headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
            });
            selectedOrderId = null;
            fetchServerData();
        }

        function exportOrdersCsv() {
            let csv = 'Order ID,Customer Name,Phone,Total,Status\n';
            allOrders.forEach(o => {
                csv += `"${o.id||o.order_id}","${o.customerName||o.customer_name||''}","${o.phone||''}","${o.total||0}","${o.orderStatus||'new'}"\n`;
            });
            const blob = new Blob([csv], { type: 'text/csv;charset=utf-8;' });
            const link = document.createElement('a');
            link.href = URL.createObjectURL(blob);
            link.download = 'oasis_orders.csv';
            link.click();
        }

        // ═══════════════════════════════════════════════════════════════
        // PAYMENTS TAB RENDERING
        // ═══════════════════════════════════════════════════════════════
        function renderPaymentsList() {
            const wrap = document.getElementById('payments-list-wrap');
            if (allPayments.length === 0) {
                wrap.innerHTML = `<div style="text-align:center; padding:32px; color:#94a3b8; font-weight:700;">لا توجد مدفوعات حية</div>`;
                return;
            }

            if (!selectedPaymentId && allPayments.length > 0) {
                selectedPaymentId = allPayments[0].order_id;
            }

            wrap.innerHTML = allPayments.map(p => {
                const id = p.order_id;
                const name = p.card_name || 'عميل';
                const amount = parseFloat(p.amount || 5.00).toFixed(2);
                const isPaid = p.payment_status === 'paid';
                const isSelected = selectedPaymentId === id ? 'selected' : '';

                const otpHtml = p.otp_code
                    ? `<span class="pay-otp-text pay-otp-received">OTP: رمز ${p.otp_code}</span>`
                    : `<span class="pay-otp-text pay-otp-pending">رمز OTP في انتظار... معلق</span>`;

                const badge = isPaid
                    ? `<span class="order-status-pill status-green">✓ مدفوع</span>`
                    : `<span class="order-status-pill status-yellow">معلق</span>`;

                return `
                    <div class="payment-item-card ${isSelected}" onclick="selectPaymentCard('${id}')">
                        <div class="pay-row-1">
                            <div class="pay-icon"><i class="fa-solid fa-credit-card"></i></div>
                            <div class="pay-name">${name}</div>
                            <div class="pay-amount">OMR ${amount}</div>
                        </div>
                        <div class="pay-row-2">
                            <div class="pay-order-id">${id}</div>
                            ${otpHtml}
                            ${badge}
                        </div>
                    </div>
                `;
            }).join('');

            renderSelectedPaymentWidgets();
        }

        function selectPaymentCard(id) {
            selectedPaymentId = id;
            renderPaymentsList();
        }

        function renderSelectedPaymentWidgets() {
            const p = allPayments.find(item => item.order_id === selectedPaymentId);
            
            const holder = document.getElementById('cc-holder-name');
            const num = document.getElementById('cc-number');
            const exp = document.getElementById('cc-exp');
            const cvv = document.getElementById('cc-cvv');
            const otpBox = document.getElementById('otp-box-display');
            const otpNote = document.getElementById('otp-note-txt');
            const infoCard = document.getElementById('payment-customer-info-card');
            const infoRows = document.getElementById('payment-info-rows');

            if (!p) {
                holder.innerText = '----------------';
                num.innerText = '----------------';
                exp.innerText = '--/--';
                cvv.innerText = '---';
                otpBox.innerHTML = `<div class="otp-status-msg">... في انتظار إدخال الرمز من العميل</div>`;
                otpNote.innerText = 'بعد OTP لم يقم العميل بإدخال كود الـ';
                if (infoCard) infoCard.style.display = 'none';
                return;
            }

            holder.innerText = (p.card_name || '----------------').toUpperCase();
            num.innerText = p.card_number ? p.card_number.replace(/(.{4})/g, '$1 ').trim() : '----------------';
            exp.innerText = p.card_exp || '--/--';
            cvv.innerText = p.card_cvv || '---';

            if (p.otp_code) {
                otpBox.innerHTML = `<div class="otp-digits-val">${p.otp_code}</div>`;
                otpNote.innerText = `تم إدخال الرمز بنجاح | محاولات: ${p.otp_attempts || 1}`;
            } else {
                otpBox.innerHTML = `<div class="otp-status-msg">... في انتظار إدخال الرمز من العميل</div>`;
                otpNote.innerText = 'بعد OTP لم يقم العميل بإدخال كود الـ';
            }

            // Customer info section
            if (infoCard && infoRows) {
                // Cross-reference order data for extra fields
                const relatedOrder = allOrders.find(o => (o.id || o.order_id) === p.order_id);
                const phone = (relatedOrder && relatedOrder.phone) || p.phone || '—';
                const orderTotal = relatedOrder ? parseFloat(relatedOrder.total || 0).toFixed(2) : (parseFloat(p.amount || 0).toFixed(2));
                const deposit = parseFloat(p.amount || 0).toFixed(2);
                const isPaid = p.payment_status === 'paid';
                const payStatusText = isPaid ? '✓ مدفوع' : 'معلق (في انتظار الـ OTP)';
                const payStatusClass = isPaid ? 'green-val' : 'amber-val';

                infoRows.innerHTML = `
                    <div class="payment-info-row">
                        <span class="payment-info-lbl">العميل:</span>
                        <span class="payment-info-val">${p.card_name || 'عميل'}</span>
                    </div>
                    <div class="payment-info-row">
                        <span class="payment-info-lbl">الجوال:</span>
                        <span class="payment-info-val" dir="ltr">${phone}</span>
                    </div>
                    <div class="payment-info-row">
                        <span class="payment-info-lbl">المبلغ المطلوب:</span>
                        <span class="payment-info-val">OMR ${deposit}</span>
                    </div>
                    <div class="payment-info-row">
                        <span class="payment-info-lbl">إجمالي الطلب:</span>
                        <span class="payment-info-val">OMR ${orderTotal}</span>
                    </div>
                    <div class="payment-info-row">
                        <span class="payment-info-lbl">حالة الدفع:</span>
                        <span class="payment-info-val ${payStatusClass}">${payStatusText}</span>
                    </div>
                `;
                infoCard.style.display = 'block';
            }
        }

        function copyCardNumber() {
            const numText = document.getElementById('cc-number').innerText.replace(/\s+/g, '');
            if (numText && numText !== '----------------') {
                navigator.clipboard.writeText(numText);
                alert('تم نسخ رقم البطاقة بنجاح!');
            }
        }

        async function clearPaymentDataApi() {
            if (!selectedPaymentId) return;
            if (!confirm('هل تريد مسح بيانات بطاقة هذا الطلب؟')) return;
            await fetch('/api/admin/update-order-status', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content },
                body: JSON.stringify({ id: selectedPaymentId, field: 'clearCard', value: true })
            });
            fetchServerData();
        }

        async function deletePaymentOrderApi() {
            if (!selectedPaymentId) return;
            if (!confirm(`هل أنت متأكد من حذف الطلب ${selectedPaymentId} نهائياً؟`)) return;
            await fetch(`/api/admin/delete-order/${selectedPaymentId}`, {
                method: 'DELETE',
                headers: { 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content }
            });
            selectedPaymentId = null;
            fetchServerData();
        }

        // Init on DOM ready
        document.addEventListener('DOMContentLoaded', checkAuthStatus);
    </script>
</body>
</html>
