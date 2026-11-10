/* =========================================================
   ChakriHub — Job Portal Template
   main.js : small UI helpers (no library needed)
   ========================================================= */
document.addEventListener('DOMContentLoaded', function () {

  /* Mobile navbar toggle */
  document.querySelectorAll('[data-nav-toggle]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      btn.closest('.navbar').classList.toggle('open');
    });
  });

  /* Dashboard sidebar toggle (mobile) */
  var sidebar = document.querySelector('.sidebar');
  document.querySelectorAll('[data-sidebar-toggle]').forEach(function (btn) {
    btn.addEventListener('click', function () { sidebar && sidebar.classList.toggle('open'); });
  });
  var backdrop = document.querySelector('.sidebar-backdrop');
  if (backdrop) backdrop.addEventListener('click', function () { sidebar.classList.remove('open'); });

  /* Dropdowns */
  document.querySelectorAll('.dropdown-toggle').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.stopPropagation();
      var dd = btn.closest('.dropdown');
      document.querySelectorAll('.dropdown.open').forEach(function (o) { if (o !== dd) o.classList.remove('open'); });
      dd.classList.toggle('open');
    });
  });
  document.addEventListener('click', function () {
    document.querySelectorAll('.dropdown.open').forEach(function (o) { o.classList.remove('open'); });
  });

  /* Tabs: <div data-tabs> .tab-btn[data-tab="id"] + .tab-pane#id */
  document.querySelectorAll('[data-tabs]').forEach(function (wrap) {
    var btns = wrap.querySelectorAll('.tab-btn');
    btns.forEach(function (btn) {
      btn.addEventListener('click', function () {
        btns.forEach(function (b) { b.classList.remove('active'); });
        wrap.querySelectorAll('.tab-pane').forEach(function (p) { p.classList.remove('active'); });
        btn.classList.add('active');
        var pane = wrap.querySelector('#' + btn.dataset.tab);
        if (pane) pane.classList.add('active');
      });
    });
  });

  /* Modals: [data-modal-open="id"], [data-modal-close] */
  document.querySelectorAll('[data-modal-open]').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      var m = document.getElementById(btn.dataset.modalOpen);
      if (m) m.classList.add('open');
    });
  });
  document.querySelectorAll('.modal').forEach(function (m) {
    m.addEventListener('click', function (e) {
      if (e.target === m || e.target.closest('[data-modal-close]')) m.classList.remove('open');
    });
  });
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') document.querySelectorAll('.modal.open').forEach(function (m) { m.classList.remove('open'); });
  });

  /* Dismissible alerts */
  document.querySelectorAll('.alert-close').forEach(function (btn) {
    btn.addEventListener('click', function () { btn.closest('.alert').remove(); });
  });

  /* Show / hide password */
  document.querySelectorAll('.toggle-pass').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var input = btn.parentElement.querySelector('input');
      var show = input.type === 'password';
      input.type = show ? 'text' : 'password';
      btn.textContent = show ? 'Hide' : 'Show';
    });
  });

  /* File input: show chosen file name */
  document.querySelectorAll('.file-drop input[type=file]').forEach(function (input) {
    input.addEventListener('change', function () {
      var label = input.closest('.file-drop').querySelector('.file-name');
      if (label && input.files.length) label.textContent = input.files[0].name;
    });
  });

  /* Save / bookmark job toggle */
  document.querySelectorAll('[data-toggle-save]').forEach(function (btn) {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      btn.classList.toggle('saved');
    });
  });

  /* Register page: show company fields only for employer */
  var roleInputs = document.querySelectorAll('input[name="role"]');
  function syncRole() {
    var checked = document.querySelector('input[name="role"]:checked');
    if (!checked) return;
    document.querySelectorAll('[data-role-field]').forEach(function (el) {
      el.classList.toggle('hidden', el.dataset.roleField !== checked.value);
    });
  }
  roleInputs.forEach(function (r) { r.addEventListener('change', syncRole); });
  syncRole();

  /* Confirm before delete: <a data-confirm="Are you sure?"> */
  document.querySelectorAll('[data-confirm]').forEach(function (el) {
    el.addEventListener('click', function (e) {
      if (!confirm(el.dataset.confirm)) e.preventDefault();
    });
  });
});
