const script = document.getElementById('google_analytics');

const ga = (...args) => {
  (ga.q = ga.q || []).push(args);
};
ga.l = +new Date;
ga('create', script.dataset.id, 'auto');
ga('send', 'pageview');

window.ga = window.ga || ga;
