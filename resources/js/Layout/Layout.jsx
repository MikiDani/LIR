import { Link } from "@inertiajs/react";

export default function Layout({children}) {
  return (
    <div id="app-container" className="p-0 m-0">
      <header>
        <div id="center-container">
          <div id="menu-container" className="mx-auto">
              <div id='menu-content'>
                  <div id='menu-logo-container'>
                    <Link preserveScroll href="/" className="p-0 m-0">
                      <div className="d-block d-sm-none">
                          <img src="/img/frontend/tuccmann-logo-mobile.png" alt="TuccMann - logo" title='TuccMann - logo' className='w-100'/>
                      </div>
                      <div className="d-none d-sm-block my-3">
                          <img src="/img/frontend/tuccmann-logo.png" alt="TuccMann - logo" title='TuccMann - logo' className='w-100'/>
                      </div>
                    </Link>
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
      </header>
      <div className="p-0 m-0 w-100">
        {children}
      </div>
      <footer className="mx-auto my-3">
          <a href="mailto:tuccmann@gmail.com"><div className="footer-icon icon-email"></div></a>
          <a href="https://www.facebook.com/mann.tucc.9" target="_blank"><div className="footer-icon icon-facebook"></div></a>
          <a href="https://open.spotify.com/artist/6sPaofbcYdwUSPUaMx4Z9B" target="_blank"><div className="footer-icon icon-spotify"></div></a>
          <a href="https://www.youtube.com/@tuccmann3004" target="_blank"><div className="footer-icon icon-youtube"></div></a>
          <a href="https://djtuccmann.bandcamp.com/" target="_blank"><div className="footer-icon icon-bandcamp"></div></a>
          <a href="https://soundcloud.com/tucc-mann" target="_blank"><div className="footer-icon icon-soundcloud"></div></a>
          <a href="https://github.com/MikiDani" target="_blank"><div className="footer-icon icon-github"></div></a>
      </footer>
    </div>
  );
}