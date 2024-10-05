import Layout from '../Layout/Layout';
import { router } from '@inertiajs/react'
import { Link } from '@inertiajs/react';

import { useState, useEffect } from 'react';

function Home({ news, teszt }) {
  
  console.log(news); // Az aktuális adatok

  const [allapot, setAllapot] = useState(false);


  function allapotSwitch() {
    setAllapot(!allapot)
  }

  function reloadNews() {
    router.reload({ only: ['news'] })

    console.log('reload')
    console.log(news)
  }

  const NavigationBar = function({links}) {
    return (
      <div className="p-3 bg-black text-center rounded">
        {links.map((link, index) => (
          link.url ? (
            <Link
              key={index}
              href={link.url}
              className={`p-3 ${link.active ? 'fw-bold' : ''}`}
              >
              {index === 0 
                ? '<<'
                : index === links.length - 1 
                ? '>>'
                : link.label
              }
            </Link>
          ) : (
            <span key={index} className='p-3 text-inactive'>
              {
              index === 0 
                ? '<<'
                : index === links.length - 1 
                ? '>>'
                : link.label
              }
            </span>
          )
        ))}
      </div>
    );
  }

  return (
    <>
      <h4 className='p-2 bg-title rounded'>Home</h4>
      
      <div className='p-4 text-center'>allapot: { allapot ? (<>TRUE</>) : (<>FALSE</>) }</div>

      <div className='text-center mb-2'>
        <button className='btn btn-primary btn-small' onClick={allapotSwitch}>VÁLT</button>
      </div>

      <div className='text-center mb-2'>
        <button
          className='btn btn-secondary btn-small'
          onClick={(e) => reloadNews()}
        >
          Reload News
        </button>
      </div>

      <NavigationBar links={news.links} />

      <div>
        {news.data.map(row => (
          <div key={row.id} className='p-3 bg-light rounded'>
            <h5><strong>{row.id}</strong> {row.title}</h5>
            <p>{row.text}</p>
            <a href={row.link} target='_blank' rel='noopener noreferrer'>{row.link}</a>
          </div>
        ))}
      </div>
      
      <NavigationBar links={news.links} />
    </>
  );
}

Home.layout = page => <Layout children={page} />;

export default Home;
