document.querySelectorAll('.youtube-preview').forEach((el) => {
  el.addEventListener('click', () => {
    const videoId = el.dataset.videoId;
    const iframe = document.createElement('iframe');

    iframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
    iframe.allow =
      'accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture';
    iframe.allowFullscreen = true;
    iframe.loading = 'lazy';
    iframe.frameBorder = '0';
    iframe.width = '100%';
    iframe.height = '100%';
    iframe.className = 'embed-responsive-item';

    el.innerHTML = '';
    el.appendChild(iframe);
  });
});
