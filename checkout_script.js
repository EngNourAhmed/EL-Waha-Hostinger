// Checkout Page Redesign - Oman Market Edition

// Helper to check if Leaflet is loaded
function isLeafletLoaded() {
    return typeof L !== 'undefined';
}

// Initialize checkout page
function initCheckoutPage() {
    const mapBtn = document.getElementById('chk-map-btn');
    const mapContainer = document.getElementById('leaflet-map-container');
    
    // Toggle map visibility
    if (mapBtn) {
        mapBtn.addEventListener('click', function(e) {
            e.preventDefault();
            if (mapContainer) {
                mapContainer.style.display = mapContainer.style.display === 'none' ? 'block' : 'none';
                if (mapContainer.style.display === 'block') {
                    if (isLeafletLoaded()) {
                        initLeafletMap();
                    } else {
                        setTimeout(initLeafletMap, 1000);
                    }
                }
            }
        });
    }

    // Handle province change
    const provinceSelect = document.getElementById('chk-emirate');
    const citySelect = document.getElementById('chk-city');
    
    if (provinceSelect) {
        provinceSelect.addEventListener('change', function() {
            updateCities(this.value, citySelect);
        });
    }

    // Handle payment method change
    const paymentOptions = document.querySelectorAll('input[name="payment"]');
    paymentOptions.forEach(option => {
        option.addEventListener('change', function() {
            updateTotalDueNow(this.value);
        });
    });

    // Handle continue button
    const continueBtn = document.getElementById('chk-continue-btn');
    if (continueBtn) {
        continueBtn.addEventListener('click', function(e) {
            e.preventDefault();
            validateAndContinue();
        });
    }
}

// Update cities based on selected province
function updateCities(province, citySelect) {
    const cities = {
        'muscat': ['مسقط', 'مطرح', 'بوشر', 'السيب', 'العامرات', 'قريات'],
        'dhofar': ['صلالة', 'طاقة', 'مرباط', 'رخيوت', 'ضلكوت', 'ثمريت'],
        'musandam': ['خصب', 'بخا', 'دبا', 'مدحاء'],
        'buraimi': ['البريمي', 'محضة', 'السنينة'],
        'dakhiliyah': ['نزوى', 'بهلاء', 'منح', 'الحمراء', 'أدم', 'إزكي', 'سمائل', 'بدبد'],
        'batinah-north': ['صحار', 'شناص', 'لوى', 'صحم', 'الخابورة', 'السويق'],
        'batinah-south': ['الرستاق', 'العوابي', 'نخل', 'وادي المعاول', 'بركاء', 'المصنعة'],
        'sharqiyah-north': ['إبراء', 'المضيبي', 'بدية', 'القابل', 'وادي بني خالد', 'دماء والطائيين'],
        'sharqiyah-south': ['صور', 'الكامل والوافي', 'جعلان بني بو حسن', 'جعلان بني بو علي', 'مصيرة'],
        'dhahirah': ['عبري', 'ينقل', 'ضنك'],
        'wusta': ['هيماء', 'محوت', 'الدقم', 'الجازر']
    };

    citySelect.innerHTML = '<option value="">اختر مدينتك من خلال الخريطة</option>';
    
    if (province && cities[province]) {
        cities[province].forEach(city => {
            const option = document.createElement('option');
            option.value = city.toLowerCase().replace(/\s+/g, '-');
            option.textContent = city;
            citySelect.appendChild(option);
        });
        citySelect.disabled = false;
    } else {
        citySelect.disabled = true;
    }
}

// Update total due now
function updateTotalDueNow(method) {
    const totalDisplay = document.getElementById('checkout-total');
    if (!totalDisplay) return;

    if (method === 'partial') {
        totalDisplay.textContent = '5.000 AED';
    } else {
        totalDisplay.textContent = '15.240 AED';
    }
}

// Initialize Leaflet Map
window.mapInstance = null;
window.mapMarker = null;

function initLeafletMap() {
    if (!isLeafletLoaded()) return;
    
    const mapElement = document.getElementById('leaflet-map');
    if (!mapElement || window.mapInstance) return;

    // Default coordinates for Oman (Muscat)
    const defaultLat = 23.5859;
    const defaultLng = 58.4059;

    try {
        window.mapInstance = L.map('leaflet-map').setView([defaultLat, defaultLng], 11);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors',
            maxZoom: 19
        }).addTo(window.mapInstance);

        const customIcon = L.icon({
            iconUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-icon.png',
            shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.9.4/images/marker-shadow.png',
            iconSize: [25, 41],
            iconAnchor: [12, 41],
            popupAnchor: [1, -34],
            shadowSize: [41, 41]
        });

        window.mapMarker = L.marker([defaultLat, defaultLng], { 
            draggable: true, 
            icon: customIcon 
        }).addTo(window.mapInstance);

        window.mapMarker.on('dragend', function(e) {
            const pos = window.mapMarker.getLatLng();
            updateLocationFromMap(pos.lat, pos.lng);
        });

        window.mapInstance.on('click', function(e) {
            window.mapMarker.setLatLng(e.latlng);
            updateLocationFromMap(e.latlng.lat, e.latlng.lng);
        });
        
        setTimeout(() => {
            window.mapInstance.invalidateSize();
        }, 200);
        
    } catch (err) {
        console.error('Error initializing map:', err);
    }
}

// Update location from map and try to find city
function updateLocationFromMap(lat, lng) {
    window.checkoutData = window.checkoutData || {};
    window.checkoutData.latitude = lat;
    window.checkoutData.longitude = lng;
    
    // Reverse geocoding could be added here to automatically select province/city
    console.log('Location selected:', lat, lng);
}

// Validate and continue checkout
function validateAndContinue() {
    const fullName = document.getElementById('chk-fullname').value.trim();
    const phone = document.getElementById('chk-phone').value.trim();
    const province = document.getElementById('chk-emirate').value;
    const city = document.getElementById('chk-city').value;
    const address = document.getElementById('chk-address').value.trim();

    if (!fullName) {
        alert('الرجاء إدخال الاسم الكامل');
        return;
    }

    if (!phone || phone.length !== 8) {
        alert('الرجاء إدخال رقم جوال عماني صحيح (8 أرقام)');
        return;
    }

    if (!province) {
        alert('الرجاء اختيار المحافظة');
        return;
    }

    if (!city) {
        alert('الرجاء اختيار المدينة');
        return;
    }

    if (!address && (!window.checkoutData || !window.checkoutData.latitude)) {
        alert('الرجاء إدخال العنوان يدوياً أو اختيار الموقع من الخريطة');
        return;
    }

    // Save data
    window.checkoutData = window.checkoutData || {};
    window.checkoutData.fullName = fullName;
    window.checkoutData.phone = '+968' + phone;
    window.checkoutData.province = province;
    window.checkoutData.city = city;
    window.checkoutData.address = address;
    window.checkoutData.notes = document.getElementById('chk-notes').value;
    window.checkoutData.paymentMethod = document.querySelector('input[name="payment"]:checked').value;

    console.log('Oman Checkout Data:', window.checkoutData);
    
    if (window.navigateToPage) {
        navigateToPage('checkout-payment', null);
    } else {
        window.location.hash = '#page-checkout-payment';
    }
}

document.addEventListener('DOMContentLoaded', function() {
    initCheckoutPage();
});
