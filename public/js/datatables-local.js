/* DataTables-style local table helper: search, sort and pagination. */
document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('table[data-datatable]').forEach(function (table) {
    const tbody = table.tBodies[0];
    if (!tbody) return;
    const rows = Array.from(tbody.rows);
    const wrapper = document.createElement('div');
    wrapper.className = 'dt-local-wrap';
    table.parentNode.insertBefore(wrapper, table);
    wrapper.appendChild(table);
    const controls = document.createElement('div');
    controls.className = 'dt-local-controls';
    controls.innerHTML = '<label> Tampilkan <select><option>10</option><option>25</option><option>50</option><option value="-1">Semua</option></select> data</label><label class="dt-search">Cari: <input type="search" placeholder="Cari data..."></label>';
    wrapper.insertBefore(controls, table);
    const footer = document.createElement('div'); footer.className='dt-local-footer';
    const info=document.createElement('span'); const pager=document.createElement('span'); pager.className='dt-local-pager';
    footer.append(info,pager); wrapper.appendChild(footer);
    let filtered=rows.slice(), page=1, size=10, sortCol=-1, asc=true;
    function render(){
      const start=size===-1?0:(page-1)*size, end=size===-1?filtered.length:start+size;
      rows.forEach(r=>r.style.display='none'); filtered.slice(start,end).forEach(r=>r.style.display='');
      const pages=size===-1?1:Math.max(1,Math.ceil(filtered.length/size)); if(page>pages) page=pages;
      info.textContent=filtered.length?`Menampilkan ${start+1}–${Math.min(end,filtered.length)} dari ${filtered.length} data`:'Tidak ada data';
      pager.innerHTML='';
      if(pages>1){ for(let i=1;i<=pages;i++){ const b=document.createElement('button'); b.type='button'; b.textContent=i; b.className=i===page?'active':''; b.onclick=()=>{page=i;render()}; pager.appendChild(b); } }
    }
    controls.querySelector('select').onchange=e=>{size=Number(e.target.value);page=1;render()};
    controls.querySelector('input').oninput=e=>{const q=e.target.value.toLowerCase();filtered=rows.filter(r=>r.innerText.toLowerCase().includes(q));page=1;render()};
    table.querySelectorAll('thead th').forEach((th,i)=>{if(th.classList.contains('no-sort'))return;th.style.cursor='pointer';th.title='Klik untuk mengurutkan';th.onclick=()=>{if(sortCol===i)asc=!asc;else{sortCol=i;asc=true} filtered.sort((a,b)=>{const A=a.cells[i]?.innerText.trim().toLowerCase()||'',B=b.cells[i]?.innerText.trim().toLowerCase()||'';return (A>B?1:A<B?-1:0)*(asc?1:-1)});filtered.forEach(r=>tbody.appendChild(r));render()}});
    render();
  });
});
