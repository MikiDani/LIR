import { Inertia } from '@inertiajs/inertia';
import Layout from '../Layout/Layout';

import { useState, useEffect } from 'react';

function Home({ name, news }) {
  
  console.log(news); // Az aktuális adatok

  const [allapot, setAllapot] = useState(false);


  function allapotSwitch() {
    setAllapot(!allapot)
  }

  function reloadNews() {
    Inertia.reload({
      only: ['news'], // Csak a 'news' adatot tölti újra
      // preserveScroll: true, // Megőrzi az oldal scroll pozícióját
    });
  }

  return (
    <>
      <h4 className='p-2 bg-title rounded'>Home</h4>
      
      <div className='p-4 text-center'>allapot: { allapot ? (<>TRUE</>) : (<>FALSE</>) }</div>

      <div className='text-center mb-2'>
        <button className='btn btn-primary btn-small' onClick={allapotSwitch}>VÁLT</button>
      </div>

      <div className='text-center mb-2'>
        <button className='btn btn-secondary btn-small' onClick={reloadNews}>Reload News</button>
      </div>

      <div>
        {news.map(row => (
          <div key={row.id} className='p-3 bg-light rounded'>
            <h5>{row.title}</h5>
            <p>{row.text}</p>
            <a href={row.link} target='_blank' rel='noopener noreferrer'>{row.link}</a>
          </div>
        ))}
      </div>
    </>
  );
}

Home.layout = page => <Layout children={page} />;

export default Home;
