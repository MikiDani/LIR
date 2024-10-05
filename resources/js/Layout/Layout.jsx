import { Link } from "@inertiajs/react";

export default function Layout({children}) {
  return (
    <div id="app-container" className="p-0 m-0">
      <header>
        <div className="top-header-area bg-secondary" id="sticker">
          <div className="container">
            <div className="row">
              <div className="col-lg-12 col-sm-12 text-center">
                <div className="main-menu-wrap">
                  <div className="site-logo">
                    <a href="index.html">
                      <img src="/img/logo.png" alt="logo" className="menu-logo"/>
                    </a>
                  </div>
                  <nav className="main-menu">
                    <ul>
                      <li><Link preserveScroll href="/" only={['users']}>News</Link></li>
                      <li><Link preserveScroll href="/about">About</Link></li>
                      <li><a href="#">Media</a>
                        <ul className="sub-menu">
                          <li><a href="404.html">404 page</a></li>
                          <li><a href="about.html">About</a></li>
                          <li><a href="cart.html">Cart</a></li>
                          <li><a href="checkout.html">Check Out</a></li>
                          <li><a href="contact.html">Contact</a></li>
                          <li><a href="news.html">News</a></li>
                          <li><a href="shop.html">Shop</a></li>
                        </ul>
                      </li>
                      <li>
                        <div className="header-icons">
                          <a className="shopping-cart" href="cart.html"><i className="fas fa-shopping-cart"></i></a>
                          <a className="mobile-hide search-bar-icon" href="#"><i className="fas fa-search"></i></a>
                        </div>
                      </li>
                    </ul>
                  </nav>
                  <a className="mobile-show search-bar-icon" href="#"><i className="fas fa-search"></i></a>
                  <div className="mobile-menu"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>

      <div className="p-0 m-0">
        {children}
      </div>
      
      <footer>
        <div className="footer-area">
          <div className="container">
            <div className="row">
              <div className="col-lg-3 col-md-6">
                <div className="footer-box about-widget">
                  <h2 className="widget-title">About us</h2>
                  <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="footer-box get-in-touch">
                  <h2 className="widget-title">Get in Touch</h2>
                  <ul>
                    <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                    <li>support@fruitkha.com</li>
                    <li>+00 111 222 3333</li>
                  </ul>
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="footer-box pages">
                  <h2 className="widget-title">Pages</h2>
                  <ul>
                    <li><a href="index.html">1 Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="services.html">Shop</a></li>
                    <li><a href="news.html">News</a></li>
                    <li><a href="contact.html">Contact</a></li>
                  </ul>
                </div>
              </div>
              <div className="col-lg-3 col-md-6">
                <div className="footer-box subscribe">
                  <h2 className="widget-title">Subscribe</h2>
                  <p>Subscribe to our mailing list to get the latest updates.</p>
                  <form action="index.html">
                    <input type="email" placeholder="Email"/>
                    <button type="submit"><i className="bi bi-envelope-at"></i></button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div className="copyright">
          <div className="container">
            <div className="row">
              <div className="col-lg-6 col-md-12">
                <p>Copyrights &copy; 2024 All Rights Reserved.<br/></p>
              </div>
              <div className="col-lg-6 text-right col-md-12">
                <div className="social-icons">
                  <ul>
                    <li><a href="#" target="_blank"><i className="bi bi-facebook"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>

      </footer>
    </div>
  );
}