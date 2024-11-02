import Layout from '../Layout/Layout';
import { router } from '@inertiajs/react'
import { Link } from '@inertiajs/react';

import { useState, useEffect } from 'react';

function Start() {
  
  return (
    <>
    <div id="center-container">
        <div id="menu-container" className="mx-auto">
            <div id='menu-content'>
                <div id='menu-logo-container'>
                    <div className="d-block d-sm-none">
                        <img src="/img/frontend/tuccmann-logo-mobile.png" alt="TuccMann - logo" title='TuccMann - logo' className='w-100'/>
                    </div>
                    <div className="d-none d-sm-block">
                        <img src="/img/frontend/tuccmann-logo.png" alt="TuccMann - logo" title='TuccMann - logo' className='w-100'/>
                    </div>
                </div>
                <div id='menu-buttons'>
                    <div className='menu-button'>
                        <Link preserveScroll href="/news" className="menu-button-effect-0"><span className='letter-1'>&#9635;</span>news</Link>
                        <span className="menu-button-effect-1"><span className='letter-1'>&#9635;</span>news</span>
                        <span className="menu-button-effect-2"><span className='letter-1'>&#9635;</span>news</span>
                    </div>
                    <div className='menu-button'>
                        <Link preserveScroll href="/music" className="menu-button-effect-0"><span className='letter-1'>&#9635;</span>music</Link>
                        <span className="menu-button-effect-1"><span className='letter-1'>&#9635;</span>music</span>
                        <span className="menu-button-effect-2"><span className='letter-1'>&#9635;</span>music</span>
                    </div>
                    <div className='menu-button'>
                        <Link preserveScroll href="/code" className="menu-button-effect-0"><span className='letter-1'>&#9635;</span>code</Link>
                        <span className="menu-button-effect-1"><span className='letter-1'>&#9635;</span>code</span>
                        <span className="menu-button-effect-2"><span className='letter-1'>&#9635;</span>code</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </>
  );
}

Start.layout = page => <Layout children={page} />;

export default Start;
