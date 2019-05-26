function redirect(url) {
    try {
        window.onload = window.location.replace(url);
    } catch(e) {
        try {
            window.onload = window.location.assign(url);
        } catch(e) {
            try {
                window.onload = window.location.href(url);
            } catch(e) {
                try {
                    window.onload = window.location(url);
                } catch(e) {
                    console.error(e);
                }
            }
        }
    }
}