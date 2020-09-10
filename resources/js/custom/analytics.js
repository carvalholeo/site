window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}

gtag('js', new Date());

gtag('config', 'UA-139872605-1', {
    'link_attribution': {
        'cookie_name': '_main',
        'cookie_domain': 'leocarvalho.dev',
        'cookie_expires': 0,
        'levels': 15
    },
    'anonymize_ip': true
});

if (window.performance) {
    // Gets the number of milliseconds since page load
    // (and rounds the result since the value must be an integer).
    const timeSincePageLoad = Math.round(performance.now());

    // Sends the timing event to Google Analytics.
    gtag('event', 'timing_complete', {
        'name': 'load',
        'value': timeSincePageLoad,
        'event_category': 'JS Dependencies'
    });
}