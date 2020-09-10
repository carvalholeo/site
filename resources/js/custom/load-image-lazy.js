const bgImg = document.querySelectorAll('.my-bg-img');
bgImg.forEach(el => {
    el.addEventListener('lazybeforeunveil', function(e){
        const bg = e.target.getAttribute('data-bg');
        if(bg){
            e.target.style.backgroundImage = `url(${bg})`;
        }
    });
});