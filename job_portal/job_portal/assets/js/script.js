/* Jobs Portal — shared dashboard interactions (static HTML demo) */
document.addEventListener("DOMContentLoaded", () => {
  const sidebar = document.getElementById("sidebar");
  const overlay = document.querySelector(".sidebar-overlay");
  const openBtn = document.getElementById("sidebarToggle");
  const closeBtn = document.getElementById("sidebarClose");
  const closeSidebar = () => { sidebar?.classList.remove("show"); overlay?.classList.remove("show"); };
  openBtn?.addEventListener("click", () => {
    sidebar?.classList.toggle("show"); overlay?.classList.toggle("show");
  });
  closeBtn?.addEventListener("click", closeSidebar);
  overlay?.addEventListener("click", closeSidebar);

  const year = document.getElementById("year");
  if (year) year.textContent = new Date().getFullYear();
  const liveDate = document.getElementById("liveDate");
  if (liveDate) liveDate.textContent = new Date().toLocaleDateString(undefined,{weekday:"long",day:"2-digit",month:"long",year:"numeric"});
  const greeting = document.querySelector("[data-greeting]");
  if (greeting) {
    const h = new Date().getHours();
    greeting.textContent = h < 12 ? "Good morning" : h < 18 ? "Good afternoon" : "Good evening";
  }

  document.querySelectorAll("[data-count]").forEach(el => {
    const target = Number(el.dataset.count || 0);
    const prefix = el.dataset.prefix || "";
    const suffix = el.dataset.suffix || "";
    const start = performance.now(), duration = 850;
    function tick(now) {
      const p = Math.min((now-start)/duration,1);
      el.textContent = prefix + Math.round(target*(1-Math.pow(1-p,3))).toLocaleString() + suffix;
      if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  });

  document.querySelectorAll(".bar-chart").forEach(chart => {
    let labels=[], series=[];
    try { labels=JSON.parse(chart.dataset.labels||"[]"); series=JSON.parse(chart.dataset.series||"[]"); } catch(e) {}
    if (!labels.length || !series.length) return;
    const max=Math.max(1,...series.flatMap(s=>s.values||[]));
    chart.innerHTML=labels.map((label,i)=>{
      const bars=series.map((s,j)=>`<div class="bar ${j?'alt':''}" title="${s.name}: ${s.values[i]||0}" style="height:${Math.max(2,(s.values[i]||0)/max*100)}%;${j===0&&s.color?`background:${s.color}`:""}"></div>`).join("");
      return `<div class="bar-group">${bars}<span class="bar-label">${label}</span></div>`;
    }).join("");
  });

  document.querySelectorAll(".donut[data-segments]").forEach(donut => {
    let segments=[]; try { segments=JSON.parse(donut.dataset.segments); } catch(e) {}
    const total=segments.reduce((n,s)=>n+Number(s.value||0),0)||1;
    let cursor=0;
    const stops=segments.map(s=>{const start=cursor;cursor+=Number(s.value||0)/total*100;return `${s.color} ${start}% ${cursor}%`;});
    donut.style.background=`conic-gradient(${stops.join(",")})`;
    const legend=document.querySelector(donut.dataset.legend);
    if(legend) legend.innerHTML=segments.map(s=>`<span><i style="background:${s.color}"></i>${s.label} · ${s.value}</span>`).join("");
  });

  document.querySelectorAll("[data-table-filter]").forEach(input=>{
    input.addEventListener("input",()=>{
      const table=document.querySelector(input.dataset.tableFilter);
      const q=input.value.toLowerCase();
      table?.querySelectorAll("tbody tr:not(.no-filter)").forEach(row=>row.hidden=!row.textContent.toLowerCase().includes(q));
    });
  });
  document.querySelectorAll("[data-status-filter]").forEach(select=>{
    select.addEventListener("change",()=>{
      const table=document.querySelector(select.dataset.statusFilter);
      table?.querySelectorAll("tbody tr[data-status]").forEach(row=>row.hidden=!!select.value&&row.dataset.status!==select.value);
    });
  });

  document.querySelectorAll("form[data-demo],#quickAddForm").forEach(form=>{
    form.addEventListener("submit",e=>{
      e.preventDefault();
      const msg=form.dataset.demo || "Demo only: connect this form to PHP and MySQL to save data.";
      const toastEl=document.getElementById("appToast");
      const msgEl=toastEl?.querySelector(".toast-msg");
      if(msgEl) msgEl.textContent=msg;
      if(window.bootstrap && toastEl) bootstrap.Toast.getOrCreateInstance(toastEl).show();
      else alert(msg);
    });
  });

  document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach(el=>{
    if(window.bootstrap) new bootstrap.Tooltip(el);
  });
});
