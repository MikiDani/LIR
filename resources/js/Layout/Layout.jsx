import { Link } from "@inertiajs/react";

export default function Layout({children}) {
  return (
    <div id="app-container" className="p-0 m-0">
      <div className="p-0 m-0 w-100">
        {children}
      </div>
      <footer className="mx-auto mt-3">
        
          <div className="footer-icon icon-email"></div>
          <div className="footer-icon icon-facebook"></div>
          <div className="footer-icon icon-spotify"></div>
          <div className="footer-icon icon-youtube"></div>
          <div className="footer-icon icon-bandcamp"></div>
          <div className="footer-icon icon-soundcloud"></div>
          <div className="footer-icon icon-github"></div>
        
      </footer>
    </div>
  );
}