<div id="cookieConsent" class="cookie-theme-glass" aria-hidden="true" style="display:none;">
  <div class="cc-container">
    <div class="cc-content">
      <div class="cc-text">We use cookies to improve your user experience, measure performance, and enhance our services on our site. You can approve all cookies with the "Accept" option.</div>
    </div>
    <div class="cc-right">
      <button class="cc-btn more" aria-label="See Details">
        <svg viewBox="0 0 10 6" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </button>
      <button class="cc-btn accept">Accept</button>
    </div>
  </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
  try {
    var el = document.getElementById('cookieConsent');
    if (!el) return;
    var data = null;
    try { data = JSON.parse(localStorage.getItem('cookieConsent')); } catch(_) {}
    var accepted = data && data.accepted === true;
    var lastTs = data && data.ts ? parseInt(data.ts, 10) : NaN;
    var remindAfterMs = 4 * 24 * 60 * 60 * 1000;
    var shouldShow = true;
    var params = new URLSearchParams(window.location.search);
    var force = params.get('showCookie') === '1';
    if (accepted && !isNaN(lastTs)) {
      shouldShow = (Date.now() - lastTs) >= remindAfterMs;
    }
    if (shouldShow || force) {
      el.style.display = 'block';
      el.removeAttribute('aria-hidden');
      el.classList.add('is-visible');
    } else {
      el.style.display = 'none';
    }
    var acceptBtn = el.querySelector('.cc-btn.accept');
    var moreBtn = el.querySelector('.cc-btn.more');
    acceptBtn.addEventListener('click', function(){ var payload = { accepted: true, prefs: {}, ts: Date.now() }; try { localStorage.setItem('cookieConsent', JSON.stringify(payload)); } catch(_) {} el.classList.remove('is-visible'); el.setAttribute('aria-hidden','true'); el.style.display = 'none'; });
    if (moreBtn) {
      moreBtn.addEventListener('click', function(){ el.classList.toggle('is-expanded'); });
    }
  } catch(e){}
});
</script>