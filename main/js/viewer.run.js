document.addEventListener('DOMContentLoaded', function() {
    const gallery = document.getElementById('image-gallery');
    const viewer = new Viewer(gallery, {
        inline: false,
        button: true,
        navbar: false,
        title: true,
        toolbar: true,
    });
});