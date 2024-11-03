import Layout from '../Layout/Layout';
import { router } from '@inertiajs/react'
import { Link } from '@inertiajs/react';

import { useState, useEffect } from 'react';

function News({news, pagename}) {

  useEffect(() => {
    let element = document.getElementById("center-container");
    if (element) {
      if (pagename == 'start') {
        element.classList.add('start-style');
      } else {
        element.classList.remove('start-style');
      }
    }
  }, [pagename]);

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
              {index == 0 
                ? '<<'
                : index == links.length - 1 
                ? '>>'
                : link.label
              }
            </Link>
          ) : (
            <span key={index} className='p-3 text-inactive'>
              {
              index == 0 
                ? '<<'
                : index == links.length - 1 
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
    <h4 className='p-2 bg-title rounded'>News</h4>
    
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

News.layout = page => <Layout children={page} />;

export default News;
