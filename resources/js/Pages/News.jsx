import Layout from '../Layout/Layout';
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
      <div className="p-3 pb-0 text-center rounded">
        {links.map((link, index) => (
          link.url ? (
            <Link
              key={index}
              href={link.url}
              className={`p-2 m-1 bg-black rounded ${link.active ? 'fw-bold' : ''}`}
              >
              {index == 0 
                ? '<<'
                : index == links.length - 1 
                ? '>>'
                : link.label
              }
            </Link>
          ) : (
            <span key={index} className='p-2 m-1 bg-black rounded text-inactive'>
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
    <div id="news-container">
      <div id="news-content" className="p-3 pt-0">
        <div className="text-center">
          <div className='big-tittle'>
            <div className="big-tittle-effect-0 text-center"><span className='letter-1'>&#9635;</span>News</div>
            <span className="big-tittle-effect-1 text-center"><span className='letter-1'>&#9635;</span>News</span>
            <span className="big-tittle-effect-2 text-center"><span className='letter-1'>&#9635;</span>News</span>
          </div>
        </div>
        {news.data.map((row, i) => (
          <>
          {i > 0 && <hr className="w-100 text-light"/>}

          <div key={row.id} className='p-0 m-0 mb-4'>

            <h5 className='news-date'>{row.date}</h5>

            <a href={row.link} target='_blank' rel='noopener noreferrer' className='news-link'>
              <div className="news-tittle">
                <p className='news-tittle-effect-0'><span className='letter-1'>&#9635;</span>{row.title}</p>
                <p className='news-tittle-effect-1'><span className='letter-1'>&#9635;</span>{row.title}</p>
                <p className='news-tittle-effect-2'><span className='letter-1'>&#9635;</span>{row.title}</p>
              </div>
            </a>

            <p className='news-text'>{row.text}</p>

            {row.pictname && (
              <a href={row.link} target='_blank' rel='noopener noreferrer' className='news-picture p-2'>
                <img src={`/newspic/${row.pictname}`} alt={row.title} className='w-100'/>
              </a>
            )}
          </div>
          </>
        ))}
      </div>
    </div>
    <NavigationBar links={news.links} />
    </>
  );
}

News.layout = page => <Layout children={page} />;

export default News;
