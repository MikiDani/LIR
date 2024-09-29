import './bootstrap';
// BOOSTRAP CSS IMPORT START
import '../css/bootstrap_modify.css';
import 'bootstrap/dist/js/bootstrap.bundle.min.js';
// OWN CSS
import '../css/app.css';

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