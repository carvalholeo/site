"use strict";
function redirect(url) {
    try {
        window.addEventListener('DOMContentLoaded', () => {
            window.location.assign(url);
        });
    } catch(e) {
        console.log(e);
    }
}

function redirectToSection(sectionId) {
    window.location.href = sectionId;
}

const $buoop = {
    required: {
        e: -4,
        f:-3,
        o:-3,
        s:-1,
        c:-3
    },
    insecure: true,
    unsupported:true,
    api: 2020.09
};

function $buo_f(){
    const e = document.createElement("script");
    e.src = "https://browser-update.org/update.min.js";
    document.body.appendChild(e);
}
try {
    document.addEventListener("DOMContentLoaded", $buo_f, false)
}
catch(e) {
    window.attachEvent("onload", $buo_f)
}
