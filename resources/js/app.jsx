// Importáljuk a szükséges Bootstrap CSS fájlt először
import 'bootstrap/dist/css/bootstrap.min.css';

// A többi CSS fájl betöltése (pl. az app.css)
import '../css/app.css';

// Bootstrap JS fájl betöltése (ami tartalmazza a Bootstrap JS funkciókat, pl. modals, tooltips, stb.)
import 'bootstrap/dist/js/bootstrap.bundle.min.js';

// Egyéb szükséges modulok importálása
import './bootstrap';

import { createInertiaApp } from '@inertiajs/react'
import { createRoot } from 'react-dom/client'
import Layout from '@/Layout/Layout';

createInertiaApp({
  resolve: name => {
    const pages = import.meta.glob('./Pages/**/*.jsx', { eager: true })
    let page = pages[`./Pages/${name}.jsx`]
    page.default.layout = 
      page.default.layout || ((page) => <Layout children={page}/>);
      return page;
  },
  setup({ el, App, props }) {
    createRoot(el).render(<App {...props} />)
  },
})