(function(){
  var mq = window.matchMedia('(prefers-reduced-motion: reduce)');
  if (mq.matches) return;
  var params = new URLSearchParams(window.location.search);
  var now = new Date();
  var month = now.getMonth();
  var seasonal = (month === 11 || month === 0) || params.get('snow') === 'on';
  if (!seasonal) return;

  var canvas = document.getElementById('snowCanvas');
  if (!canvas) return;
  var ctx = canvas.getContext('2d');
  var dpr = Math.max(1, window.devicePixelRatio || 1);
  function size(){
    var w = window.innerWidth;
    var h = window.innerHeight;
    canvas.width = Math.floor(w * dpr);
    canvas.height = Math.floor(h * dpr);
    canvas.style.width = w + 'px';
    canvas.style.height = h + 'px';
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
  }
  size();

  var layers = [
    { shape: 'crystal', countFactor: 0.35, radiusMin: 2.4, radiusMax: 4.6, vyMin: 0.22, vyMax: 0.50, vxRange: 0.32, opacity: 1.0 },
    { shape: 'crystal', countFactor: 0.20, radiusMin: 3.2, radiusMax: 5.8, vyMin: 0.26, vyMax: 0.60, vxRange: 0.25, opacity: 0.9 },
    { shape: 'dot',     countFactor: 0.50, radiusMin: 1.0, radiusMax: 2.0, vyMin: 0.45, vyMax: 0.90, vxRange: 0.40, opacity: 0.95 }
  ];
  var flakes = [];
  function init(){
    flakes.length = 0;
    var base = Math.min(55, Math.floor((window.innerWidth * window.innerHeight) / 100000));
    layers.forEach(function(L){
      var count = Math.floor(base * L.countFactor);
      for (var i=0;i<count;i++){
        var r = L.radiusMin + Math.random() * (L.radiusMax - L.radiusMin);
        var flake = {
          x: Math.random() * window.innerWidth,
          y: Math.random() * window.innerHeight,
          r: r,
          vx: (-L.vxRange/2) + Math.random() * L.vxRange,
          vy: L.vyMin + Math.random() * (L.vyMax - L.vyMin),
          drift: (Math.random() - 0.5) * 0.008,
          o: L.opacity,
          shape: L.shape
        };
        flake.vx0 = flake.vx;
        flake.phase = Math.random() * Math.PI * 2;
        flake.driftAmp = L.vxRange * 0.25;
        if (L.shape === 'crystal') {
          flake.rot = Math.random() * Math.PI * 2;
          flake.spin = (Math.random() - 0.5) * 0.01;
        }
        flakes.push(flake);
      }
    });
  }
  init();

  var lastT = performance.now();
  function drawFlake(f){
    if (f.shape === 'dot') {
      // visible falling snow dots
      ctx.beginPath();
      ctx.arc(f.x, f.y, f.r, 0, Math.PI * 2);
      ctx.fillStyle = 'rgba(255,255,255,' + f.o + ')';
      ctx.fill();
      // subtle glow
      ctx.beginPath();
      ctx.arc(f.x, f.y, f.r * 1.4, 0, Math.PI * 2);
      ctx.strokeStyle = 'rgba(255,255,255,' + (f.o * 0.35) + ')';
      ctx.lineWidth = 0.6;
      ctx.stroke();
      return;
    }
    // crystal shape
    ctx.save();
    ctx.translate(f.x, f.y);
    ctx.rotate(f.rot || 0);
    ctx.scale(f.r, f.r);
    ctx.beginPath();
    for (var i=0;i<6;i++){
      var a = i * Math.PI / 3;
      var ax = Math.cos(a), ay = Math.sin(a);
      ctx.moveTo(ax * 0.2, ay * 0.2);
      ctx.lineTo(ax * 1.0, ay * 1.0);
      var b1 = a + Math.PI/12, b2 = a - Math.PI/12;
      ctx.moveTo(ax * 0.6, ay * 0.6);
      ctx.lineTo(Math.cos(b1) * 0.8, Math.sin(b1) * 0.8);
      ctx.moveTo(ax * 0.6, ay * 0.6);
      ctx.lineTo(Math.cos(b2) * 0.8, Math.sin(b2) * 0.8);
    }
    ctx.strokeStyle = 'rgba(255,255,255,' + (f.o * 0.7) + ')';
    ctx.lineWidth = 0.24;
    ctx.lineCap = 'round';
    ctx.stroke();
    ctx.strokeStyle = 'rgba(255,255,255,' + f.o + ')';
    ctx.lineWidth = 0.14;
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(0, 0, 0.15, 0, Math.PI * 2);
    ctx.fillStyle = 'rgba(255,255,255,' + f.o + ')';
    ctx.fill();
    ctx.restore();
  }
  function tick(t){
    var dt = Math.min(0.033, (t - lastT) / 1000);
    lastT = t;
    ctx.clearRect(0,0,window.innerWidth,window.innerHeight);
    for (var i=0;i<flakes.length;i++){
      var f = flakes[i];
      var vx = f.vx0 + Math.sin(t * 0.001 + f.phase) * f.driftAmp;
      f.x += vx;
      f.y += f.vy + Math.sin(t * 0.0007 + f.phase) * 0.05 + f.r * 0.02;
      // wrap and re-seed to avoid accumulation
      if (f.spin) { f.rot += f.spin * dt * 60; }
      if (f.x < -6) f.x = window.innerWidth + 6;
      if (f.x > window.innerWidth + 6) f.x = -6;
      if (f.y > window.innerHeight + 6) {
        f.y = -6;
        f.x = Math.random() * window.innerWidth;
        f.phase = Math.random() * Math.PI * 2;
      }
      drawFlake(f);
    }
    requestAnimationFrame(tick);
  }
  requestAnimationFrame(tick);
  window.addEventListener('resize', function(){ size(); init(); });
})();
